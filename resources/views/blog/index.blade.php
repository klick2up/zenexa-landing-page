@extends('layouts.app')

@section('title', 'Klick2Up Blog - Tech Intelligence & Engineering Insights')
@section('meta_desc', 'Explore technical articles, software design blueprints, and digital growth guides from the engineering team at Klick2Up.')

@section('content')

{{-- Hero Section --}}
<section class="bg-[#F8FAFC] text-primary pt-24 pb-16 relative overflow-hidden border-b border-gray-100">
    <div class="absolute top-0 right-0 w-[500px] h-[500px] bg-red-500/5 rounded-full blur-[100px] pointer-events-none"></div>
    <div class="absolute inset-0 bg-[linear-gradient(rgba(10,31,68,0.012)_1px,transparent_1px),linear-gradient(90deg,rgba(10,31,68,0.012)_1px,transparent_1px)] bg-[size:48px_48px] opacity-70"></div>
    <div class="max-w-7xl mx-auto px-4 text-center relative z-10 space-y-6">
        <span class="inline-flex items-center gap-1.5 px-4 py-1.5 rounded-full text-xs font-bold bg-accent/10 text-accent uppercase tracking-wider">
            <i data-lucide="book-open" class="w-3.5 h-3.5"></i> Tech Intelligence
        </span>
        <h1 class="text-5xl lg:text-7xl font-display font-black tracking-tight text-primary mb-2">The Klick2Up <span class="text-accent">Blog</span></h1>
        <p class="text-xl text-gray-500 max-w-3xl mx-auto leading-relaxed font-light">Deep dives into software architecture, frontend frameworks, custom ERP design, and generative AI integrations.</p>
    </div>
</section>

{{-- Main Blog Section --}}
<section class="py-20 bg-white relative">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        {{-- Category Filters --}}
        <div class="flex flex-wrap items-center justify-center gap-3 mb-16">
            <a href="{{ route('blog.index') }}" class="px-6 py-2.5 rounded-full text-sm font-semibold transition-all duration-300 border {{ empty($category) ? 'bg-primary border-primary text-white shadow-lg shadow-primary/25' : 'bg-gray-50 border-gray-100 text-gray-500 hover:bg-gray-100 hover:text-primary' }}">
                All Articles
            </a>
            @foreach($allCategories as $cat)
            <a href="{{ route('blog.index', ['category' => $cat]) }}" class="px-6 py-2.5 rounded-full text-sm font-semibold transition-all duration-300 border {{ (isset($category) && strtolower($category) === strtolower($cat)) ? 'bg-primary border-primary text-white shadow-lg shadow-primary/25' : 'bg-gray-50 border-gray-100 text-gray-500 hover:bg-gray-100 hover:text-primary' }}">
                {{ $cat }}
            </a>
            @endforeach
        </div>

        @if(count($posts) > 0)
            @php
                // Get the first post as the featured post for rich hierarchy (if no category filter is applied)
                $featured = null;
                $displayPosts = clone $posts;
                if (empty($category)) {
                    $featured = $displayPosts->shift();
                }
            @endphp

            {{-- Featured Post --}}
            @if($featured)
            <div class="mb-16">
                <a href="{{ route('blog.show', $featured['slug']) }}" class="group block bg-[#F8FAFC] rounded-3xl overflow-hidden border border-gray-100 hover:border-accent/25 hover:shadow-[0_20px_40px_rgba(10,31,68,0.06)] transition-all duration-500">
                    <div class="grid grid-cols-1 lg:grid-cols-12 gap-0">
                        {{-- Image Column --}}
                        <div class="lg:col-span-7 relative h-72 lg:h-[460px] overflow-hidden">
                            <img src="{{ $featured['image'] }}" alt="{{ $featured['title'] }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                            <div class="absolute top-6 left-6">
                                <span class="px-4 py-1.5 rounded-full text-xs font-bold bg-white text-primary uppercase shadow-md tracking-wider">
                                    {{ $featured['badge'] }}
                                </span>
                            </div>
                        </div>
                        {{-- Content Column --}}
                        <div class="lg:col-span-5 p-8 lg:p-12 flex flex-col justify-between">
                            <div class="space-y-6">
                                <div class="flex items-center gap-4 text-xs font-semibold text-gray-400">
                                    <span class="flex items-center gap-1.5"><i data-lucide="calendar" class="w-4 h-4"></i> {{ $featured['date'] }}</span>
                                    <span class="w-1.5 h-1.5 rounded-full bg-gray-300"></span>
                                    <span class="flex items-center gap-1.5"><i data-lucide="clock" class="w-4 h-4"></i> {{ $featured['read_time'] }}</span>
                                </div>
                                <h2 class="text-2xl lg:text-3xl font-display font-bold text-primary group-hover:text-accent transition-colors duration-300 leading-tight">
                                    {{ $featured['title'] }}
                                </h2>
                                <p class="text-gray-500 font-light leading-relaxed text-sm lg:text-base">
                                    {{ $featured['summary'] }}
                                </p>
                            </div>
                            
                            {{-- Author info --}}
                            <div class="pt-6 border-t border-gray-100 flex items-center gap-4">
                                <img src="{{ $featured['author']['avatar'] }}" alt="{{ $featured['author']['name'] }}" class="w-11 h-11 rounded-full object-cover border-2 border-white shadow">
                                <div>
                                    <h4 class="text-sm font-bold text-primary">{{ $featured['author']['name'] }}</h4>
                                    <p class="text-xs text-gray-400 font-medium">{{ $featured['author']['title'] }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            @endif

            {{-- Recent Posts Grid --}}
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach($displayPosts as $post)
                <article class="group bg-white rounded-3xl overflow-hidden border border-gray-100 hover:border-accent/25 hover:shadow-[0_20px_40px_rgba(10,31,68,0.06)] hover:-translate-y-2 transition-all duration-500 flex flex-col">
                    {{-- Card Image --}}
                    <a href="{{ route('blog.show', $post['slug']) }}" class="block relative h-56 overflow-hidden">
                        <img src="{{ $post['image'] }}" alt="{{ $post['title'] }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        <div class="absolute top-4 left-4">
                            <span class="px-3.5 py-1 rounded-full text-[10px] font-bold bg-white text-primary uppercase shadow tracking-wider">
                                {{ $post['badge'] }}
                            </span>
                        </div>
                    </a>
                    
                    {{-- Card Body --}}
                    <div class="p-6 flex flex-col flex-1 justify-between space-y-6">
                        <div class="space-y-3">
                            <div class="flex items-center gap-3 text-[11px] font-semibold text-gray-400">
                                <span class="flex items-center gap-1"><i data-lucide="calendar" class="w-3.5 h-3.5"></i> {{ $post['date'] }}</span>
                                <span class="w-1 h-1 rounded-full bg-gray-300"></span>
                                <span class="flex items-center gap-1"><i data-lucide="clock" class="w-3.5 h-3.5"></i> {{ $post['read_time'] }}</span>
                            </div>
                            <h3 class="text-lg font-display font-bold text-primary group-hover:text-accent transition-colors duration-300 line-clamp-2">
                                <a href="{{ route('blog.show', $post['slug']) }}">{{ $post['title'] }}</a>
                            </h3>
                            <p class="text-gray-500 font-light text-xs leading-relaxed line-clamp-3">
                                {{ $post['summary'] }}
                            </p>
                        </div>

                        {{-- Author --}}
                        <div class="pt-4 border-t border-gray-50 flex items-center gap-3">
                            <img src="{{ $post['author']['avatar'] }}" alt="{{ $post['author']['name'] }}" class="w-9 h-9 rounded-full object-cover border border-white shadow-sm">
                            <div>
                                <h4 class="text-xs font-bold text-primary">{{ $post['author']['name'] }}</h4>
                                <p class="text-[10px] text-gray-400">{{ $post['author']['title'] }}</p>
                            </div>
                        </div>
                    </div>
                </article>
                @endforeach
            </div>

        @else
            {{-- Empty State --}}
            <div class="text-center py-20 bg-gray-50 rounded-3xl border border-gray-100 max-w-2xl mx-auto space-y-4">
                <div class="w-16 h-16 rounded-full bg-red-50 text-accent flex items-center justify-center mx-auto shadow-inner">
                    <i data-lucide="search" class="w-8 h-8"></i>
                </div>
                <h3 class="text-xl font-bold text-primary">No Articles Found</h3>
                <p class="text-gray-400 text-sm max-w-md mx-auto">We couldn't find any blog posts in this category. Check back later or explore other topics.</p>
                <a href="{{ route('blog.index') }}" class="inline-block bg-primary hover:bg-accent text-white px-6 py-2.5 rounded-full font-bold text-xs transition duration-300">
                    View All Articles
                </a>
            </div>
        @endif
    </div>
</section>

{{-- Final CTA --}}
<section class="bg-primary text-white py-20 relative overflow-hidden">
    <div class="absolute -bottom-24 left-1/2 -translate-x-1/2 w-2/3 h-64 bg-accent/20 rounded-full blur-[80px] pointer-events-none"></div>
    <div class="max-w-4xl mx-auto px-4 text-center relative z-10 space-y-6">
        <h3 class="text-3xl lg:text-4xl font-display font-bold">Have a Project in Mind?</h3>
        <p class="text-gray-300 max-w-xl mx-auto font-light leading-relaxed">Let's discuss how our technical expertise can align with your digital objectives.</p>
        <div class="pt-4">
            <a href="{{ route('contact') }}" class="inline-block bg-accent hover:bg-rose-700 text-white px-10 py-4 rounded-full font-bold transition shadow-lg hover:scale-105 duration-300 text-sm">Schedule Free Consultation</a>
        </div>
    </div>
</section>

@endsection
