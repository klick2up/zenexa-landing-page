<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PageVisit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminAnalyticsController extends Controller
{
    public function index(Request $request)
    {
        $period = $request->get('period', '7'); // days

        $since = now()->subDays((int) $period);

        // Page visit counts grouped by page
        $pageVisits = PageVisit::select('page_name', 'page_url', DB::raw('COUNT(*) as visit_count'))
            ->where('created_at', '>=', $since)
            ->groupBy('page_name', 'page_url')
            ->orderByDesc('visit_count')
            ->get();

        // UTM source breakdown
        $utmSources = PageVisit::select('utm_source', DB::raw('COUNT(*) as visit_count'))
            ->where('created_at', '>=', $since)
            ->whereNotNull('utm_source')
            ->where('utm_source', '!=', '')
            ->groupBy('utm_source')
            ->orderByDesc('visit_count')
            ->get();

        // UTM campaign breakdown
        $utmCampaigns = PageVisit::select('utm_campaign', DB::raw('COUNT(*) as visit_count'))
            ->where('created_at', '>=', $since)
            ->whereNotNull('utm_campaign')
            ->where('utm_campaign', '!=', '')
            ->groupBy('utm_campaign')
            ->orderByDesc('visit_count')
            ->get();

        // Total visits in period
        $totalVisits = PageVisit::where('created_at', '>=', $since)->count();

        // Unique IPs in period
        $uniqueVisitors = PageVisit::where('created_at', '>=', $since)
            ->distinct('ip_address')
            ->count('ip_address');

        // Today's visits
        $todayVisits = PageVisit::whereDate('created_at', today())->count();

        // Visits per day for chart data (last N days)
        $rawDailyVisits = PageVisit::select(DB::raw('DATE(created_at) as date'), DB::raw('COUNT(*) as count'))
            ->where('created_at', '>=', $since)
            ->groupBy('date')
            ->orderBy('date')
            ->pluck('count', 'date');

        $dailyVisits = collect();
        $currentDate = $since->copy()->startOfDay();
        $endDate = today();

        while ($currentDate->lte($endDate)) {
            $dateString = $currentDate->format('Y-m-d');
            $dailyVisits->push((object)[
                'date' => $dateString,
                'count' => $rawDailyVisits[$dateString] ?? 0
            ]);
            $currentDate->addDay();
        }

        // Top referrers
        $topReferrers = PageVisit::select('referrer', DB::raw('COUNT(*) as visit_count'))
            ->where('created_at', '>=', $since)
            ->whereNotNull('referrer')
            ->where('referrer', '!=', '')
            ->groupBy('referrer')
            ->orderByDesc('visit_count')
            ->limit(10)
            ->get();

        return view('admin.analytics.index', compact(
            'pageVisits',
            'utmSources',
            'utmCampaigns',
            'totalVisits',
            'uniqueVisitors',
            'todayVisits',
            'dailyVisits',
            'topReferrers',
            'period'
        ));
    }
}
