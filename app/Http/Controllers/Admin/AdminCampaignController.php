<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Campaign;
use App\Models\EmailTemplate;
use App\Models\CampaignRecipient;
use App\Jobs\SendCampaignEmailJob;
use Illuminate\Support\Facades\DB;

class AdminCampaignController extends Controller
{
    public function index()
    {
        $campaigns = Campaign::withCount([
            'recipients as total_recipients', 
            'recipients as sent_recipients' => function ($query) {
                $query->where('status', 'sent');
            },
            'recipients as opened_recipients' => function ($query) {
                $query->whereNotNull('opened_at');
            }
        ])->latest()->get();
        
        $stats = [
            'total' => Campaign::count(),
            'completed' => Campaign::where('status', 'completed')->count(),
            'processing' => Campaign::where('status', 'processing')->count(),
        ];

        // Fetch page visits grouped by campaign name
        $pageVisitsStats = \App\Models\PageVisit::select('utm_campaign', DB::raw('COUNT(*) as visit_count'))
            ->whereNotNull('utm_campaign')
            ->where('utm_campaign', '!=', '')
            ->groupBy('utm_campaign')
            ->pluck('visit_count', 'utm_campaign');

        return view('admin.campaigns.index', compact('campaigns', 'stats', 'pageVisitsStats'));
    }

    public function create()
    {
        $templates = EmailTemplate::all();
        if ($templates->isEmpty()) {
            return redirect()->route('admin.templates.create')->with('error', 'Please create an email template first before starting a campaign.');
        }
        return view('admin.campaigns.create', compact('templates'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email_template_id' => 'required|exists:email_templates,id',
            'audience_type' => 'required|in:manual,csv',
            'to_email' => 'required_if:audience_type,manual|nullable|string',
            'csv_file' => 'required_if:audience_type,csv|file|mimes:csv,txt',
        ]);

        $recipientsData = [];

        if ($request->audience_type === 'manual') {
            $emails = array_map('trim', explode(',', $request->to_email));
            foreach ($emails as $email) {
                if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    $recipientsData[] = ['email' => $email, 'name' => 'Customer', 'company' => null];
                }
            }
        } elseif ($request->audience_type === 'csv') {
            $file = $request->file('csv_file');
            $handle = fopen($file->getRealPath(), 'r');
            $headers = fgetcsv($handle);
            if ($headers) {
                $headers = array_map('strtolower', array_map('trim', $headers));
                $emailIndex = array_search('email', $headers);
                $nameIndex = array_search('name', $headers);
                $companyIndex = array_search('company', $headers);

                if ($emailIndex !== false) {
                    while (($row = fgetcsv($handle)) !== false) {
                        $email = trim($row[$emailIndex]);
                        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                            $name = ($nameIndex !== false && isset($row[$nameIndex])) ? trim($row[$nameIndex]) : 'Customer';
                            $company = ($companyIndex !== false && isset($row[$companyIndex])) ? trim($row[$companyIndex]) : null;
                            $recipientsData[] = ['email' => $email, 'name' => $name, 'company' => $company];
                        }
                    }
                } else {
                    fclose($handle);
                    return back()->with('error', 'CSV file must contain an "email" column.');
                }
            }
            fclose($handle);
        }

        if (empty($recipientsData)) {
            return back()->with('error', 'No valid email addresses found.');
        }

        DB::beginTransaction();
        try {
            $campaign = Campaign::create([
                'name' => $request->name,
                'email_template_id' => $request->email_template_id,
                'status' => 'processing',
            ]);

            foreach ($recipientsData as $data) {
                $recipient = $campaign->recipients()->create([
                    'email' => $data['email'],
                    'name' => $data['name'],
                    'company' => $data['company'],
                    'tracker' => \Illuminate\Support\Str::uuid()->toString(),
                    'status' => 'pending'
                ]);

                // Dispatch the job
                SendCampaignEmailJob::dispatch($recipient->id);
            }

            DB::commit();
            return redirect()->route('admin.campaigns.index')->with('success', 'Campaign created successfully. Emails are being sent in the background.');
        } catch (\Exception $e) {
            \Illuminate\Support\Facades\DB::rollBack();
            return back()->with('error', 'Failed to create campaign. Error: ' . $e->getMessage());
        }
    }

    public function show(Campaign $campaign)
    {
        $campaign->load(['recipients' => function ($query) {
            $query->orderBy('updated_at', 'desc');
        }, 'template']);

        $stats = [
            'total' => $campaign->recipients->count(),
            'sent' => $campaign->recipients->where('status', 'sent')->count(),
            'opened' => $campaign->recipients->whereNotNull('opened_at')->count(),
            'failed' => $campaign->recipients->where('status', 'failed')->count(),
            'pending' => $campaign->recipients->where('status', 'pending')->count(),
        ];

        $campaignNameMatch = str_replace(' ', '_', $campaign->name);
        $pageVisits = \App\Models\PageVisit::select('page_name', 'page_url', \Illuminate\Support\Facades\DB::raw('COUNT(*) as visit_count'))
            ->where('utm_campaign', $campaignNameMatch)
            ->groupBy('page_name', 'page_url')
            ->orderByDesc('visit_count')
            ->get();

        return view('admin.campaigns.show', compact('campaign', 'stats', 'pageVisits'));
    }
}
