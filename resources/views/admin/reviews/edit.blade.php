@extends('admin.layout')

@section('title', 'Edit Testimonial / Review | Klick2Up')

@section('admin_content')
<div class="space-y-8 animate-fade-in-up">
    {{-- Header --}}
    <div class="flex items-center justify-between">
        <div>
            <h2 class="text-2xl font-display font-bold text-primary">Edit Testimonial</h2>
            <p class="text-xs text-gray-400 mt-1">Modify fields or rating of the active client testimonial</p>
        </div>
        <a href="{{ route('admin.reviews.index') }}" class="inline-flex items-center gap-2 text-xs font-bold text-gray-500 hover:text-accent transition-colors">
            <i data-lucide="arrow-left" class="w-4 h-4"></i> Back to Reviews
        </a>
    </div>

    {{-- Form card --}}
    <div class="bg-white rounded-3xl border border-gray-200/80 shadow-sm p-8 w-full">
        <form id="review-form" action="{{ route('admin.reviews.update', $review->id) }}" method="POST" enctype="multipart/form-data" class="space-y-6">
            @csrf
            @method('PUT')

            @if($errors->any())
            <div class="bg-red-50 border border-red-200 text-red-800 text-xs rounded-2xl p-4 space-y-1">
                @foreach ($errors->all() as $error)
                    <p class="font-semibold flex items-center gap-1.5"><i data-lucide="alert-circle" class="w-4 h-4 text-red-500"></i> {{ $error }}</p>
                @endforeach
            </div>
            @endif

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                {{-- Client Name --}}
                <div class="space-y-2">
                    <label for="client_name" class="block text-xs font-bold uppercase tracking-wider text-gray-400">Client Name</label>
                    <input type="text" name="client_name" id="client_name" value="{{ old('client_name', $review->client_name) }}" required class="w-full bg-gray-50 border border-gray-200 rounded-xl py-3 px-4 text-sm text-primary focus:outline-none focus:border-accent focus:ring-2 focus:ring-accent/10 transition-all placeholder-gray-400" placeholder="e.g. Marcus Chen">
                </div>

                {{-- Client Title / Position --}}
                <div class="space-y-2">
                    <label for="client_title" class="block text-xs font-bold uppercase tracking-wider text-gray-400">Client Title / Company</label>
                    <input type="text" name="client_title" id="client_title" value="{{ old('client_title', $review->client_title) }}" required class="w-full bg-gray-50 border border-gray-200 rounded-xl py-3 px-4 text-sm text-primary focus:outline-none focus:border-accent focus:ring-2 focus:ring-accent/10 transition-all placeholder-gray-400" placeholder="e.g. CTO, Vertex Logistics">
                </div>

                {{-- Project Name --}}
                <div class="space-y-2">
                    <label for="project_name" class="block text-xs font-bold uppercase tracking-wider text-gray-400">Project Name <span class="text-gray-300 font-normal normal-case">(optional)</span></label>
                    <input type="text" name="project_name" id="project_name" value="{{ old('project_name', $review->project_name) }}" class="w-full bg-gray-50 border border-gray-200 rounded-xl py-3 px-4 text-sm text-primary focus:outline-none focus:border-accent focus:ring-2 focus:ring-accent/10 transition-all placeholder-gray-400" placeholder="e.g. HealthConnect Pro">
                </div>

                {{-- Star Rating --}}
                <div class="space-y-2">
                    <label for="stars" class="block text-xs font-bold uppercase tracking-wider text-gray-400">Star Rating</label>
                    <select name="stars" id="stars" required class="w-full bg-gray-50 border border-gray-200 rounded-xl py-3 px-4 text-sm text-primary focus:outline-none focus:border-accent focus:ring-2 focus:ring-accent/10 transition-all">
                        <option value="5" {{ old('stars', $review->stars) == '5' ? 'selected' : '' }}>5 Stars</option>
                        <option value="4" {{ old('stars', $review->stars) == '4' ? 'selected' : '' }}>4 Stars</option>
                        <option value="3" {{ old('stars', $review->stars) == '3' ? 'selected' : '' }}>3 Stars</option>
                        <option value="2" {{ old('stars', $review->stars) == '2' ? 'selected' : '' }}>2 Stars</option>
                        <option value="1" {{ old('stars', $review->stars) == '1' ? 'selected' : '' }}>1 Star</option>
                    </select>
                </div>

                {{-- Client Avatar --}}
                <div class="space-y-2">
                    <label for="client_avatar" class="block text-xs font-bold uppercase tracking-wider text-gray-400">Client Avatar Image (Leave empty to keep existing)</label>
                    <input type="file" name="client_avatar" id="client_avatar" accept="image/*" class="w-full bg-gray-50 border border-gray-200 rounded-xl py-2.5 px-4 text-sm text-primary focus:outline-none focus:border-accent focus:ring-2 focus:ring-accent/10 transition-all">
                    @if($review->client_avatar)
                        <span class="text-[10px] text-gray-400 block mt-1 font-semibold">Active: <a href="{{ $review->client_avatar }}" target="_blank" class="text-accent underline hover:text-rose-700">View Current Avatar</a></span>
                    @endif
                </div>
            </div>

            {{-- Review Text --}}
            <div class="space-y-2">
                <label for="review_text" class="block text-xs font-bold uppercase tracking-wider text-gray-400">Review Text / Testimonial Content</label>
                <textarea name="review_text" id="review_text" rows="5" required class="w-full bg-gray-50 border border-gray-200 rounded-xl py-3 px-4 text-sm text-primary focus:outline-none focus:border-accent focus:ring-2 focus:ring-accent/10 transition-all placeholder-gray-400" placeholder="Type the review text provided by the client...">{{ old('review_text', $review->review_text) }}</textarea>
            </div>

            {{-- Actions --}}
            <div class="pt-4 border-t border-gray-100 flex items-center justify-end gap-3">
                <a href="{{ route('admin.reviews.index') }}" class="px-6 py-3 rounded-full text-xs font-bold text-gray-500 hover:text-primary transition-all">Cancel</a>
                <button type="submit" class="bg-accent hover:bg-rose-700 text-white px-8 py-3 rounded-full font-bold text-xs transition duration-300 shadow-md hover:shadow-lg">
                    Save Changes
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
