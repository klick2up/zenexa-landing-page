<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Lead;
use App\Models\Post;

class AdminDashboardController extends Controller
{
    public function index()
    {
        $stats = [
            'total_leads'  => Lead::count(),
            'unread_leads' => Lead::where('is_read', false)->count(),
            'total_posts'  => Post::count(),
            'total_email_opens' => \App\Models\CampaignRecipient::sum('opens_count'),
        ];

        $recentLeads = Lead::latest()->take(5)->get();

        return view('admin.dashboard.index', compact('stats', 'recentLeads'));
    }
}
