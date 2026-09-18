@extends('admin.layout')

@section('title', 'Campaigns - Klick2Up Admin')

@section('admin_content')
<div class="flex items-center justify-between mb-8">
    <div>
        <h2 class="text-2xl font-bold text-primary flex items-center gap-2">
            <i data-lucide="megaphone" class="w-6 h-6"></i> Campaigns Dashboard
        </h2>
        <p class="text-sm text-gray-500 mt-1">Manage and track your email marketing campaigns.</p>
    </div>
    <a href="{{ route('admin.campaigns.create') }}" class="flex items-center gap-2 px-5 py-2.5 rounded-xl bg-accent text-white text-sm font-semibold hover:bg-accent/90 transition-all shadow-md">
        <i data-lucide="plus" class="w-4 h-4"></i> Create Campaign
    </a>
</div>

{{-- Stats --}}
<div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
    <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6 flex items-center gap-4">
        <div class="w-12 h-12 rounded-full bg-blue-50 text-blue-500 flex items-center justify-center flex-shrink-0">
            <i data-lucide="bar-chart-2" class="w-6 h-6"></i>
        </div>
        <div>
            <p class="text-sm font-semibold text-gray-500">Total Campaigns</p>
            <h3 class="text-2xl font-bold text-gray-900">{{ $stats['total'] }}</h3>
        </div>
    </div>
    <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6 flex items-center gap-4">
        <div class="w-12 h-12 rounded-full bg-amber-50 text-amber-500 flex items-center justify-center flex-shrink-0">
            <i data-lucide="loader" class="w-6 h-6"></i>
        </div>
        <div>
            <p class="text-sm font-semibold text-gray-500">In Progress</p>
            <h3 class="text-2xl font-bold text-gray-900">{{ $stats['processing'] }}</h3>
        </div>
    </div>
    <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6 flex items-center gap-4">
        <div class="w-12 h-12 rounded-full bg-emerald-50 text-emerald-500 flex items-center justify-center flex-shrink-0">
            <i data-lucide="check-circle" class="w-6 h-6"></i>
        </div>
        <div>
            <p class="text-sm font-semibold text-gray-500">Completed</p>
            <h3 class="text-2xl font-bold text-gray-900">{{ $stats['completed'] }}</h3>
        </div>
    </div>
</div>

<div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden">
    <div class="p-6 md:p-8">
        @if($campaigns->isEmpty())
            <div class="text-center py-10">
                <i data-lucide="inbox" class="w-12 h-12 text-gray-300 mx-auto mb-3"></i>
                <h3 class="text-lg font-semibold text-gray-800">No campaigns found</h3>
                <p class="text-sm text-gray-500 mt-1">You haven't created any campaigns yet.</p>
            </div>
        @else
            <div class="overflow-x-auto">
                <table class="w-full text-left text-sm text-gray-600">
                    <thead class="text-xs uppercase bg-gray-50/50 text-gray-700">
                        <tr>
                            <th class="px-6 py-4 font-bold rounded-tl-xl">Campaign Name</th>
                            <th class="px-6 py-4 font-bold">Template</th>
                            <th class="px-6 py-4 font-bold">Status</th>
                            <th class="px-6 py-4 font-bold">Progress</th>
                            <th class="px-6 py-4 font-bold">Opened</th>
                            <th class="px-6 py-4 font-bold">Page Views</th>
                            <th class="px-6 py-4 font-bold">Date</th>
                            <th class="px-6 py-4 font-bold text-right rounded-tr-xl">Action</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-100">
                        @foreach($campaigns as $campaign)
                        <tr class="hover:bg-gray-50/50 transition-colors">
                            <td class="px-6 py-4 font-medium text-gray-900">{{ $campaign->name }}</td>
                            <td class="px-6 py-4">{{ $campaign->template->name ?? 'N/A' }}</td>
                            <td class="px-6 py-4">
                                @if($campaign->status === 'completed')
                                    <span class="inline-flex items-center px-2.5 py-1 rounded-full text-xs font-semibold bg-emerald-100 text-emerald-700">Completed</span>
                                @elseif($campaign->status === 'processing')
                                    <span class="inline-flex items-center px-2.5 py-1 rounded-full text-xs font-semibold bg-amber-100 text-amber-700">Processing</span>
                                @else
                                    <span class="inline-flex items-center px-2.5 py-1 rounded-full text-xs font-semibold bg-gray-100 text-gray-700">{{ ucfirst($campaign->status) }}</span>
                                @endif
                            </td>
                            <td class="px-6 py-4">
                                <div class="flex items-center gap-2">
                                    <div class="w-full bg-gray-200 rounded-full h-2 max-w-[100px]">
                                        @php
                                            $percent = $campaign->total_recipients > 0 ? ($campaign->sent_recipients / $campaign->total_recipients) * 100 : 0;
                                        @endphp
                                        <div class="bg-accent h-2 rounded-full" style="width: {{ $percent }}%"></div>
                                    </div>
                                    <span class="text-xs font-medium">{{ $campaign->sent_recipients }} / {{ $campaign->total_recipients }}</span>
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                <div class="flex items-center gap-1.5 text-blue-600 font-semibold">
                                    <i data-lucide="mail-open" class="w-4 h-4"></i> {{ $campaign->opened_recipients }}
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                @php
                                    $campaignNameUrl = str_replace(' ', '_', $campaign->name);
                                    $pageViews = $pageVisitsStats[$campaignNameUrl] ?? 0;
                                @endphp
                                <div class="flex items-center gap-1.5 text-indigo-600 font-semibold">
                                    <i data-lucide="eye" class="w-4 h-4"></i> {{ number_format($pageViews) }}
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $campaign->created_at->format('M d, Y') }}</td>
                            <td class="px-6 py-4 text-right">
                                <a href="{{ route('admin.campaigns.show', $campaign->id) }}" class="inline-flex items-center gap-1 px-3 py-1.5 bg-gray-100 hover:bg-gray-200 text-gray-700 text-xs font-semibold rounded-lg transition-colors">
                                    <i data-lucide="bar-chart-2" class="w-3.5 h-3.5"></i> View Log
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @endif
    </div>
</div>
@endsection
