@extends('admin.layout')

@section('title', 'Send Marketing Mail - Klick2Up Admin')

@section('admin_content')
<div class="mb-8">
    <h2 class="text-2xl font-bold text-primary flex items-center gap-2">
        <i data-lucide="mail" class="w-6 h-6"></i> Send Marketing Mail
    </h2>
    <p class="text-sm text-gray-500 mt-1">Compose and send marketing emails to clients from sales@klick2up.com</p>
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

        <form action="{{ route('admin.mail.send') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
            @csrf

            <div id="manual_input_wrapper" class="space-y-2">
                <label for="to_email" class="block text-sm font-semibold text-gray-700">Recipient Email <span class="text-red-500">*</span></label>
                <div class="relative">
                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                        <i data-lucide="user" class="w-4 h-4 text-gray-400"></i>
                    </div>
                    <input type="email" id="to_email" name="to_email" value="{{ old('to_email') }}" placeholder="client@example.com" class="pl-10 w-full rounded-xl border border-gray-200 focus:border-accent focus:ring focus:ring-accent/20 transition-all p-3 text-sm outline-none bg-gray-50/50" required>
                </div>
            </div>

            <div class="space-y-2">
                <label for="subject" class="block text-sm font-semibold text-gray-700">Subject <span class="text-red-500">*</span></label>
                <div class="relative">
                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                        <i data-lucide="type" class="w-4 h-4 text-gray-400"></i>
                    </div>
                    <input type="text" id="subject" name="subject" value="{{ old('subject') }}" placeholder="Exclusive Offer from Klick2Up" class="pl-10 w-full rounded-xl border border-gray-200 focus:border-accent focus:ring focus:ring-accent/20 transition-all p-3 text-sm outline-none bg-gray-50/50" required>
                </div>
            </div>

            <div class="space-y-2">
                <label for="message" class="block text-sm font-semibold text-gray-700">Message Body <span class="text-red-500">*</span></label>
                <textarea id="message" name="message" rows="8" placeholder="Type your email content here. It will be wrapped in our official marketing template." class="w-full rounded-xl border border-gray-200 focus:border-accent focus:ring focus:ring-accent/20 transition-all p-4 text-sm outline-none bg-gray-50/50 resize-y" required>{{ old('message') }}</textarea>
                <p class="text-xs text-gray-500">Newlines will be preserved.</p>
            </div>

            <div class="pt-4 border-t border-gray-100 flex items-center justify-end gap-3">
                <button type="reset" class="px-5 py-2.5 rounded-xl text-sm font-semibold text-gray-600 hover:bg-gray-100 transition-colors">
                    Reset
                </button>
                <button type="submit" class="flex items-center gap-2 px-6 py-2.5 rounded-xl bg-accent text-white text-sm font-semibold hover:bg-accent/90 focus:ring-4 focus:ring-accent/20 transition-all shadow-md">
                    <i data-lucide="send" class="w-4 h-4"></i> Send Mail
                </button>
            </div>
        </form>

    </div>
</div>
@endsection
