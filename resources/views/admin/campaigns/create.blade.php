@extends('admin.layout')

@section('title', 'Create Campaign - Klick2Up Admin')

@section('admin_content')
<div class="mb-8">
    <div class="flex items-center gap-3">
        <a href="{{ route('admin.campaigns.index') }}" class="text-gray-400 hover:text-accent transition-colors">
            <i data-lucide="arrow-left" class="w-5 h-5"></i>
        </a>
        <h2 class="text-2xl font-bold text-primary flex items-center gap-2">
            Create Campaign
        </h2>
    </div>
    <p class="text-sm text-gray-500 mt-1 ml-8">Setup a new marketing campaign and schedule emails.</p>
</div>

<div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden">
    <div class="p-6 md:p-8">
        
        @if ($errors->any())
            <div class="mb-6 bg-red-50 border border-red-200 text-red-800 text-sm rounded-xl p-4">
                <ul class="list-disc pl-5 space-y-1">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @if (session('error'))
            <div class="mb-6 bg-red-50 border border-red-200 text-red-800 text-sm rounded-xl p-4">
                {{ session('error') }}
            </div>
        @endif

        <form action="{{ route('admin.campaigns.store') }}" method="POST" enctype="multipart/form-data" class="space-y-8">
            @csrf

            <!-- Step 1: Campaign Details -->
            <div>
                <h3 class="text-lg font-bold text-gray-800 border-b border-gray-100 pb-2 mb-4">1. Campaign Details</h3>
                
                <div class="space-y-4">
                    <div class="space-y-2">
                        <label for="name" class="block text-sm font-semibold text-gray-700">Campaign Name <span class="text-red-500">*</span></label>
                        <input type="text" id="name" name="name" value="{{ old('name') }}" placeholder="e.g., Summer Promo 2026" class="w-full rounded-xl border border-gray-200 focus:border-accent focus:ring focus:ring-accent/20 transition-all p-3 text-sm outline-none bg-gray-50/50" required>
                    </div>

                    <div class="space-y-2">
                        <label for="email_template_id" class="block text-sm font-semibold text-gray-700">Email Template <span class="text-red-500">*</span></label>
                        <select id="email_template_id" name="email_template_id" class="w-full rounded-xl border border-gray-200 focus:border-accent focus:ring focus:ring-accent/20 transition-all p-3 text-sm outline-none bg-gray-50/50" required>
                            <option value="">Select a template...</option>
                            @foreach($templates as $template)
                                <option value="{{ $template->id }}" {{ old('email_template_id') == $template->id ? 'selected' : '' }}>{{ $template->name }} (Subject: {{ $template->subject }})</option>
                            @endforeach
                        </select>
                        <p class="text-xs text-gray-500">Need a new template? <a href="{{ route('admin.templates.create') }}" class="text-accent font-medium hover:underline">Create one here</a>.</p>
                    </div>
                </div>
            </div>

            <!-- Step 2: Audience -->
            <div>
                <h3 class="text-lg font-bold text-gray-800 border-b border-gray-100 pb-2 mb-4">2. Select Audience</h3>
                
                <div class="space-y-4">
                    <div class="space-y-3">
                        <label class="block text-sm font-semibold text-gray-700">Audience Type <span class="text-red-500">*</span></label>
                        <div class="flex items-center gap-6">
                            <label class="flex items-center gap-2 cursor-pointer group">
                                <input type="radio" name="audience_type" value="csv" checked class="w-4 h-4 text-accent border-gray-300 focus:ring-accent" onchange="toggleAudienceType()">
                                <span class="text-sm text-gray-600 group-hover:text-gray-900 transition-colors">Upload CSV File</span>
                            </label>
                            <label class="flex items-center gap-2 cursor-pointer group">
                                <input type="radio" name="audience_type" value="manual" class="w-4 h-4 text-accent border-gray-300 focus:ring-accent" onchange="toggleAudienceType()">
                                <span class="text-sm text-gray-600 group-hover:text-gray-900 transition-colors">Manual Entry</span>
                            </label>
                        </div>
                    </div>

                    <div id="csv_input_wrapper" class="space-y-2 transition-all duration-300 block bg-gray-50 p-4 rounded-xl border border-gray-100">
                        <label for="csv_file" class="block text-sm font-semibold text-gray-700">Upload CSV <span class="text-red-500">*</span></label>
                        <input type="file" id="csv_file" name="csv_file" accept=".csv" class="block w-full text-sm text-gray-500 file:mr-4 file:py-2.5 file:px-4 file:rounded-xl file:border-0 file:text-sm file:font-semibold file:bg-white file:border file:border-gray-200 file:text-gray-700 hover:file:bg-gray-50 transition-all" required>
                        <p class="text-xs text-gray-500 mt-2">CSV must have a header row with <strong class="font-bold">name</strong> and <strong class="font-bold">email</strong> columns.</p>
                    </div>

                    <div id="manual_input_wrapper" class="space-y-2 transition-all duration-300 hidden bg-gray-50 p-4 rounded-xl border border-gray-100">
                        <label for="to_email" class="block text-sm font-semibold text-gray-700">Recipient Email(s) <span class="text-red-500">*</span></label>
                        <input type="text" id="to_email" name="to_email" value="{{ old('to_email') }}" placeholder="client1@example.com, client2@example.com" class="w-full rounded-xl border border-gray-200 focus:border-accent focus:ring focus:ring-accent/20 transition-all p-3 text-sm outline-none bg-white">
                        <p class="text-xs text-gray-500 mt-2">Separate multiple emails with commas.</p>
                    </div>
                </div>
            </div>

            <div class="pt-6 border-t border-gray-100 flex items-center justify-end gap-3">
                <a href="{{ route('admin.campaigns.index') }}" class="px-5 py-2.5 rounded-xl text-sm font-semibold text-gray-600 hover:bg-gray-100 transition-colors">
                    Cancel
                </a>
                <button type="submit" class="flex items-center gap-2 px-6 py-2.5 rounded-xl bg-accent text-white text-sm font-semibold hover:bg-accent/90 focus:ring-4 focus:ring-accent/20 transition-all shadow-md">
                    <i data-lucide="play" class="w-4 h-4"></i> Start Campaign
                </button>
            </div>
        </form>

    </div>
</div>

<script>
    function toggleAudienceType() {
        const type = document.querySelector('input[name="audience_type"]:checked').value;
        const manualWrapper = document.getElementById('manual_input_wrapper');
        const csvWrapper = document.getElementById('csv_input_wrapper');
        const toEmailInput = document.getElementById('to_email');
        const csvFileInput = document.getElementById('csv_file');

        if (type === 'csv') {
            manualWrapper.classList.add('hidden');
            manualWrapper.classList.remove('block');
            csvWrapper.classList.remove('hidden');
            csvWrapper.classList.add('block');
            toEmailInput.removeAttribute('required');
            csvFileInput.setAttribute('required', 'required');
        } else {
            csvWrapper.classList.add('hidden');
            csvWrapper.classList.remove('block');
            manualWrapper.classList.remove('hidden');
            manualWrapper.classList.add('block');
            csvFileInput.removeAttribute('required');
            toEmailInput.setAttribute('required', 'required');
        }
    }
    
    document.addEventListener('DOMContentLoaded', toggleAudienceType);
</script>
@endsection
