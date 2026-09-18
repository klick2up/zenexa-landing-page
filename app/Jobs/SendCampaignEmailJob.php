<?php

namespace App\Jobs;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;

use App\Models\CampaignRecipient;
use App\Models\Campaign;
use App\Mail\MarketingMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\DB;

class SendCampaignEmailJob implements ShouldQueue
{
    use Queueable;

    public $recipientId;

    /**
     * Create a new job instance.
     */
    public function __construct($recipientId)
    {
        $this->recipientId = $recipientId;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $recipient = CampaignRecipient::with('campaign.template')->find($this->recipientId);
        
        if (!$recipient || $recipient->status !== 'pending') {
            return;
        }

        try {
            $subject = $recipient->campaign->template->subject;
            $body = $recipient->campaign->template->body_html;
            
            $search = ['{{$name}}', '{{$email}}', '{{$company}}'];
            $replace = [$recipient->name, $recipient->email, $recipient->company ?? ''];
            
            $subject = str_replace($search, $replace, $subject);
            $body = str_replace($search, $replace, $body);

            // Append UTM parameters to all links in the email body
            $campaignNameUrl = urlencode(str_replace(' ', '_', $recipient->campaign->name));
            $utmQuery = "utm_source=email&utm_campaign={$campaignNameUrl}";
            
            $body = preg_replace_callback(
                '/(href=["\'])([^"\']+)(["\'])/i',
                function($matches) use ($utmQuery) {
                    $url = $matches[2];
                    // Don't append to mailto, tel, anchors, or if it already has utm_campaign
                    if (str_starts_with($url, 'mailto:') || str_starts_with($url, 'tel:') || str_starts_with($url, '#') || str_contains($url, 'utm_campaign')) {
                        return $matches[0];
                    }
                    $separator = str_contains($url, '?') ? '&' : '?';
                    return $matches[1] . $url . $separator . $utmQuery . $matches[3];
                },
                $body
            );

            // Send Email
            Mail::to($recipient->email)->send(
                new MarketingMail($subject, $body, $recipient->name, $recipient->tracker, $campaignNameUrl)
            );

            // Mark as sent
            $recipient->update([
                'status' => 'sent',
                'sent_at' => now(),
            ]);

            // Check if all recipients for this campaign are done
            $this->checkCampaignStatus($recipient->campaign_id);

        } catch (\Exception $e) {
            $recipient->update([
                'status' => 'failed',
                'error_message' => $e->getMessage(),
            ]);
        }
    }

    protected function checkCampaignStatus($campaignId)
    {
        $campaign = Campaign::find($campaignId);
        if (!$campaign) return;

        $pendingCount = $campaign->recipients()->where('status', 'pending')->count();
        if ($pendingCount === 0) {
            $campaign->update(['status' => 'completed']);
        }
    }
}
