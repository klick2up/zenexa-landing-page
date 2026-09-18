@extends('admin.layout')

@section('title', 'Admin Dashboard | Klick2Up')

@section('admin_content')
<div class="space-y-8 animate-fade-in-up">
    {{-- Header title --}}
    <div>
        <h2 class="text-2xl font-display font-bold text-primary">Overview Dashboard</h2>
        <p class="text-xs text-gray-400 mt-1">Real-time statistics and administrative indicators</p>
    </div>

    {{-- Stats Cards Grid --}}
    <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
        {{-- Total Leads --}}
        <div class="bg-white p-6 rounded-3xl border border-gray-200/80 shadow-sm flex items-center justify-between">
            <div class="space-y-1">
                <span class="text-xs font-bold text-gray-400 uppercase tracking-wider block">Total Leads</span>
                <span class="text-3xl font-display font-black text-primary block">{{ $stats['total_leads'] }}</span>
            </div>
            <div class="w-12 h-12 rounded-2xl bg-blue-50 text-blue-600 flex items-center justify-center shadow-inner">
                <i data-lucide="inbox" class="w-6 h-6"></i>
            </div>
        </div>

        {{-- Unread Leads --}}
        <div class="bg-white p-6 rounded-3xl border border-gray-200/80 shadow-sm flex items-center justify-between">
            <div class="space-y-1">
                <span class="text-xs font-bold text-gray-400 uppercase tracking-wider block">Unread Leads</span>
                <span class="text-3xl font-display font-black text-accent block">{{ $stats['unread_leads'] }}</span>
            </div>
            <div class="w-12 h-12 rounded-2xl bg-red-50 text-accent flex items-center justify-center shadow-inner">
                <i data-lucide="alert-circle" class="w-6 h-6"></i>
            </div>
        </div>

        {{-- Total Blog Posts --}}
        <div class="bg-white p-6 rounded-3xl border border-gray-200/80 shadow-sm flex items-center justify-between">
            <div class="space-y-1">
                <span class="text-xs font-bold text-gray-400 uppercase tracking-wider block">Total Blog Posts</span>
                <span class="text-3xl font-display font-black text-primary block">{{ $stats['total_posts'] }}</span>
            </div>
            <div class="w-12 h-12 rounded-2xl bg-emerald-50 text-emerald-600 flex items-center justify-center shadow-inner">
                <i data-lucide="book-open" class="w-6 h-6"></i>
            </div>
        </div>

        {{-- Total Email Opens --}}
        <div class="bg-white p-6 rounded-3xl border border-gray-200/80 shadow-sm flex items-center justify-between">
            <div class="space-y-1">
                <span class="text-xs font-bold text-gray-400 uppercase tracking-wider block">Email Opens</span>
                <span class="text-3xl font-display font-black text-blue-600 block">{{ $stats['total_email_opens'] }}</span>
            </div>
            <div class="w-12 h-12 rounded-2xl bg-indigo-50 text-indigo-600 flex items-center justify-center shadow-inner">
                <i data-lucide="mail-open" class="w-6 h-6"></i>
            </div>
        </div>
    </div>

    {{-- Recent Leads Table section --}}
    <div class="bg-white rounded-3xl border border-gray-200/80 shadow-sm overflow-hidden">
        <div class="px-6 py-5 border-b border-gray-100 flex items-center justify-between bg-gray-50/50">
            <h3 class="text-sm font-bold text-primary uppercase tracking-wider">Recent Inquiries & Leads</h3>
            <a href="{{ route('admin.leads') }}" class="text-xs font-bold text-accent hover:underline flex items-center gap-1">
                View All Leads <i data-lucide="arrow-right" class="w-3.5 h-3.5"></i>
            </a>
        </div>

        @if($recentLeads->count() > 0)
        <div class="overflow-x-auto">
            <table class="w-full text-left text-xs font-medium border-collapse">
                <thead>
                    <tr class="bg-gray-50 text-gray-400 uppercase tracking-wider border-b border-gray-150">
                        <th class="px-6 py-4">Name</th>
                        <th class="px-6 py-4">Email</th>
                        <th class="px-6 py-4">Service Required</th>
                        <th class="px-6 py-4">Received Date</th>
                        <th class="px-6 py-4 text-center">Status</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100">
                    @foreach($recentLeads as $lead)
                    <tr class="hover:bg-gray-50/30 transition-colors">
                        <td class="px-6 py-4 font-bold text-primary">{{ $lead->first_name }} {{ $lead->last_name }}</td>
                        <td class="px-6 py-4 text-gray-500">{{ $lead->email }}</td>
                        <td class="px-6 py-4">
                            <span class="px-2.5 py-1 rounded-full text-[10px] font-bold bg-gray-100 text-gray-600">
                                {{ $lead->service ?: 'General Inquiry' }}
                            </span>
                        </td>
                        <td class="px-6 py-4 text-gray-400">{{ $lead->created_at->format('M d, Y H:i') }}</td>
                        <td class="px-6 py-4 text-center">
                            @if($lead->is_read)
                            <span class="px-2 py-0.5 rounded-full text-[9px] font-bold bg-emerald-50 text-emerald-600 uppercase">Read</span>
                            @else
                            <span class="px-2 py-0.5 rounded-full text-[9px] font-bold bg-red-50 text-accent uppercase">Unread</span>
                            @endif
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        @else
        <div class="p-12 text-center text-gray-400 space-y-2">
            <div class="w-12 h-12 rounded-full bg-gray-50 flex items-center justify-center mx-auto text-gray-400 border border-gray-100 shadow-inner">
                <i data-lucide="inbox" class="w-5 h-5"></i>
            </div>
            <p class="text-sm font-semibold">No inquiries received yet.</p>
        </div>
        @endif
    </div>
</div>
@endsection
