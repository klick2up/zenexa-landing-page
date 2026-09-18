@extends('admin.layout')

@section('title', 'Page Analytics | Klick2Up')

@section('admin_content')
<div class="space-y-8 animate-fade-in-up">
    {{-- Header --}}
    <div class="flex items-center justify-between">
        <div>
            <h2 class="text-2xl font-display font-bold text-primary">Page Analytics</h2>
            <p class="text-xs text-gray-400 mt-1">Visitor count per page & UTM source tracking</p>
        </div>
        <form method="GET" action="{{ route('admin.analytics') }}" class="flex items-center gap-3">
            <select name="period" onchange="this.form.submit()" class="bg-gray-50 border border-gray-200 rounded-xl py-2.5 px-4 text-xs font-bold text-primary focus:outline-none focus:border-accent focus:ring-2 focus:ring-accent/10 transition-all">
                <option value="1" {{ $period == '1' ? 'selected' : '' }}>Today</option>
                <option value="7" {{ $period == '7' ? 'selected' : '' }}>Last 7 Days</option>
                <option value="30" {{ $period == '30' ? 'selected' : '' }}>Last 30 Days</option>
                <option value="90" {{ $period == '90' ? 'selected' : '' }}>Last 90 Days</option>
                <option value="365" {{ $period == '365' ? 'selected' : '' }}>Last Year</option>
            </select>
        </form>
    </div>

    {{-- Stats Cards --}}
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        {{-- Total Visits --}}
        <div class="bg-white p-6 rounded-3xl border border-gray-200/80 shadow-sm flex items-center justify-between">
            <div class="space-y-1">
                <span class="text-xs font-bold text-gray-400 uppercase tracking-wider block">Total Page Views</span>
                <span class="text-3xl font-display font-black text-primary block">{{ number_format($totalVisits) }}</span>
            </div>
            <div class="w-12 h-12 rounded-2xl bg-blue-50 text-blue-600 flex items-center justify-center shadow-inner">
                <i data-lucide="eye" class="w-6 h-6"></i>
            </div>
        </div>

        {{-- Unique Visitors --}}
        <div class="bg-white p-6 rounded-3xl border border-gray-200/80 shadow-sm flex items-center justify-between">
            <div class="space-y-1">
                <span class="text-xs font-bold text-gray-400 uppercase tracking-wider block">Unique Visitors</span>
                <span class="text-3xl font-display font-black text-emerald-600 block">{{ number_format($uniqueVisitors) }}</span>
            </div>
            <div class="w-12 h-12 rounded-2xl bg-emerald-50 text-emerald-600 flex items-center justify-center shadow-inner">
                <i data-lucide="users" class="w-6 h-6"></i>
            </div>
        </div>

        {{-- Today's Visits --}}
        <div class="bg-white p-6 rounded-3xl border border-gray-200/80 shadow-sm flex items-center justify-between">
            <div class="space-y-1">
                <span class="text-xs font-bold text-gray-400 uppercase tracking-wider block">Today's Visits</span>
                <span class="text-3xl font-display font-black text-accent block">{{ number_format($todayVisits) }}</span>
            </div>
            <div class="w-12 h-12 rounded-2xl bg-red-50 text-accent flex items-center justify-center shadow-inner">
                <i data-lucide="activity" class="w-6 h-6"></i>
            </div>
        </div>
    </div>

    {{-- Daily Visits Chart --}}
    @if($dailyVisits->count() > 1)
    <div class="bg-white rounded-3xl border border-gray-200/80 shadow-sm p-6">
        <h3 class="text-sm font-bold text-primary uppercase tracking-wider mb-4">Daily Traffic</h3>
        <div class="h-48 flex items-end gap-1.5">
            @php $maxCount = $dailyVisits->max('count') ?: 1; @endphp
            @foreach($dailyVisits as $day)
            <div class="flex-1 flex flex-col items-center gap-1 group relative">
                <div class="absolute -top-8 left-1/2 -translate-x-1/2 bg-primary text-white text-[9px] font-bold px-2 py-1 rounded-lg opacity-0 group-hover:opacity-100 transition-opacity whitespace-nowrap z-10">
                    {{ $day->count }} visits
                </div>
                <div class="w-full rounded-t-lg transition-all duration-300 group-hover:bg-accent"
                     style="height: {{ max(4, ($day->count / $maxCount) * 100) }}%; background-color: {{ $day->count == $maxCount ? '#C11F25' : '#0A1F44' }}; opacity: {{ 0.3 + ($day->count / $maxCount) * 0.7 }};">
                </div>
                <span class="text-[8px] text-gray-400 font-bold">{{ \Carbon\Carbon::parse($day->date)->format('d') }}</span>
            </div>
            @endforeach
        </div>
    </div>
    @endif

    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
        {{-- Page Visits Table --}}
        <div class="bg-white rounded-3xl border border-gray-200/80 shadow-sm overflow-hidden">
            <div class="px-6 py-5 border-b border-gray-100 bg-gray-50/50">
                <h3 class="text-sm font-bold text-primary uppercase tracking-wider">Visits Per Page</h3>
            </div>
            @if($pageVisits->count() > 0)
            <div class="overflow-x-auto">
                <table class="w-full text-left text-xs font-medium border-collapse">
                    <thead>
                        <tr class="bg-gray-50 text-gray-400 uppercase tracking-wider border-b border-gray-150">
                            <th class="px-6 py-3">#</th>
                            <th class="px-6 py-3">Page</th>
                            <th class="px-6 py-3 text-right">Views</th>
                            <th class="px-6 py-3 text-right">Share</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-100">
                        @foreach($pageVisits as $index => $page)
                        <tr class="hover:bg-gray-50/30 transition-colors">
                            <td class="px-6 py-3 text-gray-400 font-bold">{{ $index + 1 }}</td>
                            <td class="px-6 py-3">
                                <span class="font-bold text-primary block">{{ $page->page_name }}</span>
                                <span class="text-[10px] text-gray-400 font-medium">{{ $page->page_url }}</span>
                            </td>
                            <td class="px-6 py-3 text-right">
                                <span class="inline-flex items-center gap-1 px-2.5 py-1 rounded-full text-[10px] font-bold bg-blue-50 text-blue-700">
                                    <i data-lucide="eye" class="w-3 h-3"></i> {{ number_format($page->visit_count) }}
                                </span>
                            </td>
                            <td class="px-6 py-3 text-right">
                                @php $pct = $totalVisits > 0 ? round(($page->visit_count / $totalVisits) * 100, 1) : 0; @endphp
                                <div class="flex items-center justify-end gap-2">
                                    <div class="w-16 h-1.5 bg-gray-100 rounded-full overflow-hidden">
                                        <div class="h-full rounded-full" style="width: {{ $pct }}%; background-color: #0A1F44;"></div>
                                    </div>
                                    <span class="text-[10px] text-gray-500 font-bold w-10 text-right">{{ $pct }}%</span>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            @else
            <div class="p-12 text-center text-gray-400 space-y-2">
                <div class="w-12 h-12 rounded-full bg-gray-50 flex items-center justify-center mx-auto text-gray-400 border border-gray-100 shadow-inner">
                    <i data-lucide="eye-off" class="w-5 h-5"></i>
                </div>
                <p class="text-sm font-semibold">No page visits recorded yet.</p>
                <p class="text-xs text-gray-300">Visits will appear here as users browse your website.</p>
            </div>
            @endif
        </div>

        {{-- UTM Sources Table --}}
        <div class="bg-white rounded-3xl border border-gray-200/80 shadow-sm overflow-hidden">
            <div class="px-6 py-5 border-b border-gray-100 bg-gray-50/50">
                <h3 class="text-sm font-bold text-primary uppercase tracking-wider">UTM Source Breakdown</h3>
            </div>
            @if($utmSources->count() > 0)
            <div class="overflow-x-auto">
                <table class="w-full text-left text-xs font-medium border-collapse">
                    <thead>
                        <tr class="bg-gray-50 text-gray-400 uppercase tracking-wider border-b border-gray-150">
                            <th class="px-6 py-3">#</th>
                            <th class="px-6 py-3">UTM Source</th>
                            <th class="px-6 py-3 text-right">Visits</th>
                            <th class="px-6 py-3 text-right">Share</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-100">
                        @php $utmTotal = $utmSources->sum('visit_count'); @endphp
                        @foreach($utmSources as $index => $source)
                        <tr class="hover:bg-gray-50/30 transition-colors">
                            <td class="px-6 py-3 text-gray-400 font-bold">{{ $index + 1 }}</td>
                            <td class="px-6 py-3">
                                <span class="inline-flex items-center gap-1.5 font-bold text-primary">
                                    @php
                                        $sourceIcons = [
                                            'google'    => 'search',
                                            'facebook'  => 'facebook',
                                            'instagram' => 'instagram',
                                            'twitter'   => 'twitter',
                                            'linkedin'  => 'linkedin',
                                            'email'     => 'mail',
                                            'newsletter'=> 'mail',
                                            'direct'    => 'globe',
                                        ];
                                        $icon = $sourceIcons[strtolower($source->utm_source)] ?? 'link';
                                    @endphp
                                    <i data-lucide="{{ $icon }}" class="w-3.5 h-3.5 text-accent"></i>
                                    {{ $source->utm_source }}
                                </span>
                            </td>
                            <td class="px-6 py-3 text-right">
                                <span class="inline-flex items-center gap-1 px-2.5 py-1 rounded-full text-[10px] font-bold bg-accent/10 text-accent">
                                    {{ number_format($source->visit_count) }}
                                </span>
                            </td>
                            <td class="px-6 py-3 text-right">
                                @php $utmPct = $utmTotal > 0 ? round(($source->visit_count / $utmTotal) * 100, 1) : 0; @endphp
                                <div class="flex items-center justify-end gap-2">
                                    <div class="w-16 h-1.5 bg-gray-100 rounded-full overflow-hidden">
                                        <div class="h-full rounded-full bg-accent" style="width: {{ $utmPct }}%;"></div>
                                    </div>
                                    <span class="text-[10px] text-gray-500 font-bold w-10 text-right">{{ $utmPct }}%</span>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            @else
            <div class="p-12 text-center text-gray-400 space-y-2">
                <div class="w-12 h-12 rounded-full bg-gray-50 flex items-center justify-center mx-auto text-gray-400 border border-gray-100 shadow-inner">
                    <i data-lucide="link" class="w-5 h-5"></i>
                </div>
                <p class="text-sm font-semibold">No UTM sources tracked yet.</p>
                <p class="text-xs text-gray-300">UTM data will appear when visitors arrive via tracked links<br>(e.g. <code class="bg-gray-100 px-1 py-0.5 rounded text-[10px]">?utm_source=google</code>)</p>
            </div>
            @endif
        </div>

        {{-- UTM Campaigns Table --}}
        <div class="bg-white rounded-3xl border border-gray-200/80 shadow-sm overflow-hidden">
            <div class="px-6 py-5 border-b border-gray-100 bg-gray-50/50">
                <h3 class="text-sm font-bold text-primary uppercase tracking-wider">UTM Campaign Breakdown</h3>
            </div>
            @if($utmCampaigns->count() > 0)
            <div class="overflow-x-auto">
                <table class="w-full text-left text-xs font-medium border-collapse">
                    <thead>
                        <tr class="bg-gray-50 text-gray-400 uppercase tracking-wider border-b border-gray-150">
                            <th class="px-6 py-3">#</th>
                            <th class="px-6 py-3">UTM Campaign</th>
                            <th class="px-6 py-3 text-right">Visits</th>
                            <th class="px-6 py-3 text-right">Share</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-100">
                        @php $utmCampTotal = $utmCampaigns->sum('visit_count'); @endphp
                        @foreach($utmCampaigns as $index => $campaign)
                        <tr class="hover:bg-gray-50/30 transition-colors">
                            <td class="px-6 py-3 text-gray-400 font-bold">{{ $index + 1 }}</td>
                            <td class="px-6 py-3">
                                <span class="inline-flex items-center gap-1.5 font-bold text-primary">
                                    <i data-lucide="tag" class="w-3.5 h-3.5 text-accent"></i>
                                    {{ $campaign->utm_campaign }}
                                </span>
                            </td>
                            <td class="px-6 py-3 text-right">
                                <span class="inline-flex items-center gap-1 px-2.5 py-1 rounded-full text-[10px] font-bold bg-accent/10 text-accent">
                                    {{ number_format($campaign->visit_count) }}
                                </span>
                            </td>
                            <td class="px-6 py-3 text-right">
                                @php $utmCampPct = $utmCampTotal > 0 ? round(($campaign->visit_count / $utmCampTotal) * 100, 1) : 0; @endphp
                                <div class="flex items-center justify-end gap-2">
                                    <div class="w-16 h-1.5 bg-gray-100 rounded-full overflow-hidden">
                                        <div class="h-full rounded-full bg-accent" style="width: {{ $utmCampPct }}%;"></div>
                                    </div>
                                    <span class="text-[10px] text-gray-500 font-bold w-10 text-right">{{ $utmCampPct }}%</span>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            @else
            <div class="p-12 text-center text-gray-400 space-y-2">
                <div class="w-12 h-12 rounded-full bg-gray-50 flex items-center justify-center mx-auto text-gray-400 border border-gray-100 shadow-inner">
                    <i data-lucide="tag" class="w-5 h-5"></i>
                </div>
                <p class="text-sm font-semibold">No UTM campaigns tracked yet.</p>
                <p class="text-xs text-gray-300">UTM data will appear when visitors arrive via tracked links<br>(e.g. <code class="bg-gray-100 px-1 py-0.5 rounded text-[10px]">?utm_campaign=summer_sale</code>)</p>
            </div>
            @endif
        </div>
    </div>

    {{-- Top Referrers --}}
    @if($topReferrers->count() > 0)
    <div class="bg-white rounded-3xl border border-gray-200/80 shadow-sm overflow-hidden">
        <div class="px-6 py-5 border-b border-gray-100 bg-gray-50/50">
            <h3 class="text-sm font-bold text-primary uppercase tracking-wider">Top Referrers</h3>
        </div>
        <div class="overflow-x-auto">
            <table class="w-full text-left text-xs font-medium border-collapse">
                <thead>
                    <tr class="bg-gray-50 text-gray-400 uppercase tracking-wider border-b border-gray-150">
                        <th class="px-6 py-3">#</th>
                        <th class="px-6 py-3">Referrer URL</th>
                        <th class="px-6 py-3 text-right">Visits</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100">
                    @foreach($topReferrers as $index => $ref)
                    <tr class="hover:bg-gray-50/30 transition-colors">
                        <td class="px-6 py-3 text-gray-400 font-bold">{{ $index + 1 }}</td>
                        <td class="px-6 py-3">
                            <a href="{{ $ref->referrer }}" target="_blank" class="text-primary hover:text-accent transition-colors truncate block max-w-md font-medium" title="{{ $ref->referrer }}">
                                {{ Str::limit($ref->referrer, 80) }}
                            </a>
                        </td>
                        <td class="px-6 py-3 text-right">
                            <span class="inline-flex items-center gap-1 px-2.5 py-1 rounded-full text-[10px] font-bold bg-purple-50 text-purple-700">
                                {{ number_format($ref->visit_count) }}
                            </span>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    @endif
</div>
@endsection
