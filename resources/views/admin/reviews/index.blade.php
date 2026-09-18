@extends('admin.layout')

@section('title', 'Manage Reviews / Testimonials | Klick2Up')

@section('admin_content')
<div class="space-y-8 animate-fade-in-up">
    {{-- Header --}}
    <div class="flex items-center justify-between">
        <div>
            <h2 class="text-2xl font-display font-bold text-primary">Client Reviews & Testimonials</h2>
            <p class="text-xs text-gray-400 mt-1">Manage client testimonials rendered on the main homepage</p>
        </div>
        <a href="{{ route('admin.reviews.create') }}" class="inline-flex items-center gap-2 bg-accent hover:bg-rose-700 text-white px-6 py-3 rounded-full font-bold text-xs transition duration-300 shadow-md hover:shadow-lg">
            <i data-lucide="plus" class="w-4 h-4"></i> Add Testimonial
        </a>
    </div>

    {{-- Reviews list table --}}
    <div class="bg-white rounded-3xl border border-gray-200/80 shadow-sm overflow-hidden">
        @if($reviews->count() > 0)
        <div class="overflow-x-auto">
            <table class="w-full text-left text-xs font-medium border-collapse">
                <thead>
                    <tr class="bg-gray-50 text-gray-400 uppercase tracking-wider border-b border-gray-150">
                        <th class="px-6 py-4">Client</th>
                        <th class="px-6 py-4">Rating</th>
                        <th class="px-6 py-4">Review Text</th>
                        <th class="px-6 py-4 text-center">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100">
                    @foreach($reviews as $review)
                    <tr class="hover:bg-gray-50/20 transition-colors">
                        {{-- Client Info --}}
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center gap-3">
                                @if($review->client_avatar)
                                <img src="{{ $review->client_avatar }}" alt="{{ $review->client_name }}" class="w-10 h-10 rounded-full object-cover shadow-sm border border-gray-200">
                                @else
                                <div class="w-10 h-10 rounded-full bg-accent/10 border border-accent/20 text-accent font-black flex items-center justify-center text-xs shadow-inner">
                                    {{ strtoupper(substr($review->client_name, 0, 1)) }}
                                </div>
                                @endif
                                <div>
                                    <span class="block font-bold text-primary text-sm">{{ $review->client_name }}</span>
                                    <span class="block text-[10px] text-gray-400 font-semibold uppercase tracking-wider mt-0.5">{{ $review->client_title }}</span>
                                    @if($review->project_name)
                                    <span class="inline-flex items-center gap-1 text-[10px] text-accent font-semibold mt-1"><i data-lucide="folder" class="w-3 h-3"></i> {{ $review->project_name }}</span>
                                    @endif
                                </div>
                            </div>
                        </td>

                        {{-- Rating --}}
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center gap-0.5 text-amber-500">
                                @for($s = 0; $s < 5; $s++)
                                    <i data-lucide="star" class="w-3.5 h-3.5 {{ $s < $review->stars ? 'fill-current' : 'opacity-25' }}"></i>
                                @endfor
                            </div>
                        </td>

                        {{-- Text snippet --}}
                        <td class="px-6 py-4 max-w-lg">
                            <p class="text-gray-500 line-clamp-2 leading-relaxed text-xs italic">"{{ $review->review_text }}"</p>
                        </td>

                        {{-- Actions --}}
                        <td class="px-6 py-4 whitespace-nowrap text-center">
                            <div class="flex items-center justify-center gap-2">
                                {{-- Edit button --}}
                                <a href="{{ route('admin.reviews.edit', $review->id) }}" class="p-2 rounded-lg bg-gray-50 hover:bg-gray-100 text-gray-500 hover:text-primary transition-colors" title="Edit Review">
                                    <i data-lucide="edit-3" class="w-4 h-4"></i>
                                </a>

                                {{-- Delete button --}}
                                <form action="{{ route('admin.reviews.destroy', $review->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this testimonial? It will immediately stop showing on the homepage.');" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="p-2 rounded-lg bg-red-50 hover:bg-red-100 text-red-500 hover:text-red-700 transition-colors" title="Delete Review">
                                        <i data-lucide="trash-2" class="w-4 h-4"></i>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        @else
        <div class="text-center py-16 space-y-4">
            <div class="w-14 h-14 bg-red-50 text-accent rounded-full flex items-center justify-center mx-auto shadow-inner">
                <i data-lucide="star" class="w-7 h-7"></i>
            </div>
            <div>
                <h3 class="text-base font-bold text-primary">No Reviews Found</h3>
                <p class="text-xs text-gray-400 mt-1 max-w-sm mx-auto leading-relaxed">The reviews/testimonials section is currently hidden from the homepage because no items have been added to the database yet.</p>
            </div>
            <a href="{{ route('admin.reviews.create') }}" class="inline-flex items-center gap-2 bg-accent hover:bg-rose-700 text-white px-5 py-2.5 rounded-full font-bold text-xs transition duration-300 shadow-md hover:shadow-lg">
                <i data-lucide="plus" class="w-4 h-4"></i> Add Your First Review
            </a>
        </div>
        @endif
    </div>
</div>
@endsection
