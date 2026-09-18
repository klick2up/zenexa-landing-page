@extends('admin.layout')

@section('title', 'Campaign Tracker Log - Klick2Up Admin')

@section('admin_content')
<div class="mb-8 flex items-center justify-between">
    <div>
        <h2 class="text-2xl font-bold text-primary flex items-center gap-2">
            <i data-lucide="bar-chart-2" class="w-6 h-6"></i> Tracker Log: {{ $campaign->name }}
        </h2>
        <p class="text-sm text-gray-500 mt-1">Detailed email tracking and status report.</p>
    </div>
    <a href="{{ route('admin.campaigns.index') }}" class="px-4 py-2 bg-white border border-gray-200 rounded-xl text-sm font-semibold text-gray-600 hover:bg-gray-50 transition-colors">
        &larr; Back to Campaigns
    </a>
</div>

<div class="grid grid-cols-1 md:grid-cols-5 gap-4 mb-8">
    <div class="bg-white p-5 rounded-2xl border border-gray-100 shadow-sm flex flex-col justify-center">
        <p class="text-xs font-bold text-gray-500 uppercase tracking-wider mb-1">Total Recipients</p>
        <p class="text-3xl font-display font-bold text-primary">{{ $stats['total'] }}</p>
    </div>
    <div class="bg-white p-5 rounded-2xl border border-gray-100 shadow-sm flex flex-col justify-center">
        <p class="text-xs font-bold text-gray-500 uppercase tracking-wider mb-1">Delivered</p>
        <p class="text-3xl font-display font-bold text-emerald-600">{{ $stats['sent'] }}</p>
    </div>
    <div class="bg-white p-5 rounded-2xl border border-blue-200 bg-blue-50/50 shadow-sm flex flex-col justify-center">
        <p class="text-xs font-bold text-blue-800 uppercase tracking-wider mb-1 flex items-center gap-1"><i data-lucide="eye" class="w-3 h-3"></i> Opened</p>
        <p class="text-3xl font-display font-bold text-blue-600">{{ $stats['opened'] }}</p>
    </div>
    <div class="bg-white p-5 rounded-2xl border border-gray-100 shadow-sm flex flex-col justify-center">
        <p class="text-xs font-bold text-gray-500 uppercase tracking-wider mb-1">Pending</p>
        <p class="text-3xl font-display font-bold text-amber-500">{{ $stats['pending'] }}</p>
    </div>
    <div class="bg-white p-5 rounded-2xl border border-gray-100 shadow-sm flex flex-col justify-center">
        <p class="text-xs font-bold text-gray-500 uppercase tracking-wider mb-1">Failed</p>
        <p class="text-3xl font-display font-bold text-red-500">{{ $stats['failed'] }}</p>
    </div>
</div>

<div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden mb-8">
    <div class="p-6 border-b border-gray-100 flex justify-between items-center bg-gray-50/50">
        <h3 class="text-lg font-bold text-primary">Page Analytics for this Campaign</h3>
    </div>
    @if($pageVisits->count() > 0)
    <div class="overflow-x-auto">
        <table class="w-full text-left border-collapse">
            <thead>
                <tr class="bg-gray-50 border-b border-gray-100">
                    <th class="py-4 px-6 text-xs font-bold text-gray-500 uppercase tracking-wider">Page</th>
                    <th class="py-4 px-6 text-xs font-bold text-gray-500 uppercase tracking-wider text-right">Views</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-50">
                @foreach($pageVisits as $page)
                <tr class="hover:bg-gray-50/50 transition-colors">
                    <td class="py-4 px-6">
                        <span class="font-bold text-primary block">{{ $page->page_name }}</span>
                        <span class="text-xs text-gray-400 font-medium">{{ $page->page_url }}</span>
                    </td>
                    <td class="py-4 px-6 text-right">
                        <span class="inline-flex items-center gap-1 px-2.5 py-1 rounded-full text-xs font-bold bg-blue-50 text-blue-700">
                            <i data-lucide="eye" class="w-3.5 h-3.5"></i> {{ number_format($page->visit_count) }}
                        </span>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @else
    <div class="p-12 text-center text-gray-400 space-y-2">
        <div class="w-12 h-12 rounded-full bg-gray-50 flex items-center justify-center mx-auto text-gray-400 border border-gray-100 shadow-inner">
            <i data-lucide="bar-chart-2" class="w-5 h-5"></i>
        </div>
        <p class="text-sm font-semibold">No page visits recorded yet.</p>
        <p class="text-xs text-gray-300">Traffic from this campaign will appear here once recipients click the links in their emails.</p>
    </div>
    @endif
</div>

<div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden">
    <div class="p-6 border-b border-gray-100 flex justify-between items-center">
        <h3 class="text-lg font-bold text-primary">Recipient Logs</h3>
    </div>
    <div class="overflow-x-auto">
        <table class="w-full text-left border-collapse">
            <thead>
                <tr class="bg-gray-50 border-b border-gray-100">
                    <th class="py-4 px-6 text-xs font-bold text-gray-500 uppercase tracking-wider">Recipient</th>
                    <th class="py-4 px-6 text-xs font-bold text-gray-500 uppercase tracking-wider">Status</th>
                    <th class="py-4 px-6 text-xs font-bold text-gray-500 uppercase tracking-wider">Delivered At</th>
                    <th class="py-4 px-6 text-xs font-bold text-gray-500 uppercase tracking-wider text-center">Opens</th>
                    <th class="py-4 px-6 text-xs font-bold text-gray-500 uppercase tracking-wider">Last Opened</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-50">
                @forelse($campaign->recipients as $recipient)
                    <tr class="hover:bg-gray-50/50 transition-colors">
                        <td class="py-4 px-6">
                            <p class="font-semibold text-sm text-gray-900">{{ $recipient->name ?? 'Customer' }}</p>
                            <p class="text-xs text-gray-500">{{ $recipient->email }}</p>
                        </td>
                        <td class="py-4 px-6">
                            @if($recipient->status === 'sent')
                                <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-semibold bg-emerald-100 text-emerald-800 border border-emerald-200">
                                    <i data-lucide="check-circle" class="w-3.5 h-3.5"></i> Sent
                                </span>
                            @elseif($recipient->status === 'pending')
                                <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-semibold bg-amber-100 text-amber-800 border border-amber-200">
                                    <i data-lucide="clock" class="w-3.5 h-3.5"></i> Pending
                                </span>
                            @else
                                <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-semibold bg-red-100 text-red-800 border border-red-200" title="{{ $recipient->error_message }}">
                                    <i data-lucide="x-circle" class="w-3.5 h-3.5"></i> Failed
                                </span>
                            @endif
                        </td>
                        <td class="py-4 px-6 text-sm text-gray-600">
                            {{ $recipient->sent_at ? $recipient->sent_at->format('M d, Y h:i A') : '-' }}
                        </td>
                        <td class="py-4 px-6 text-center">
                            @if($recipient->opens_count > 0)
                                <span class="inline-flex items-center justify-center w-8 h-8 rounded-full bg-blue-100 text-blue-700 font-bold text-sm">
                                    {{ $recipient->opens_count }}
                                </span>
                            @else
                                <span class="text-gray-300">-</span>
                            @endif
                        </td>
                        <td class="py-4 px-6 text-sm">
                            @if($recipient->opened_at)
                                <span class="text-gray-900 font-medium">{{ \Carbon\Carbon::parse($recipient->opened_at)->format('d M Y') }}</span><br>
                                <span class="text-xs text-gray-500">{{ \Carbon\Carbon::parse($recipient->opened_at)->format('h:i A') }}</span>
                            @else
                                <span class="text-gray-400 italic">Unopened</span>
                            @endif
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="py-8 text-center text-gray-500 text-sm">No recipients found for this campaign.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
