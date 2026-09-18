<?php

namespace App\Jobs;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Support\Facades\Mail;
use App\Mail\MarketingMail;

class SendQuickMailJob implements ShouldQueue
{
    use Queueable;

    public $recipientData;
    public $subject;
    public $body;

    /**
     * Create a new job instance.
     */
    public function __construct($recipientData, $subject, $body)
    {
        $this->recipientData = $recipientData;
        $this->subject = $subject;
        $this->body = $body;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $name = $this->recipientData['name'] ?? 'Customer';
        $email = $this->recipientData['email'];
        $company = $this->recipientData['company'] ?? '';

        $search = ['{{$name}}', '{{$email}}', '{{$company}}'];
        $replace = [$name, $email, $company];
        
        $subject = str_replace($search, $replace, $this->subject);
        $body = str_replace($search, $replace, $this->body);

        // Append UTM parameters to all links in the email body
        $campaignNameUrl = 'Quick_Mail';
        $utmQuery = "utm_source=email&utm_campaign={$campaignNameUrl}";
        
        $body = preg_replace_callback(
            '/(href=["\'])([^"\']+)(["\'])/i',
            function($matches) use ($utmQuery) {
                $url = $matches[2];
                if (str_starts_with($url, 'mailto:') || str_starts_with($url, 'tel:') || str_starts_with($url, '#') || str_contains($url, 'utm_campaign')) {
                    return $matches[0];
                }
                $separator = str_contains($url, '?') ? '&' : '?';
                return $matches[1] . $url . $separator . $utmQuery . $matches[3];
            },
            $body
        );

        // Send Email with null tracker since Quick Mails aren't tracked in DB
        Mail::to($email)->send(
            new MarketingMail($subject, $body, $name, null, 'Quick Mail')
        );
    }
}
