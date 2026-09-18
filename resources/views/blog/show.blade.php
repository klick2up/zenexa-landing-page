@extends('layouts.app')

@section('title', $post['title'] . ' | Klick2Up Blog')
@section('meta_desc', $post['meta_desc'])

@section('content')

{{-- Article Header --}}
<section class="bg-[#F8FAFC] text-primary pt-20 pb-16 relative overflow-hidden border-b border-gray-100/50">
    <div class="absolute top-0 right-0 w-[500px] h-[500px] bg-accent/5 rounded-full blur-[100px] pointer-events-none"></div>
    <div class="absolute inset-0 bg-[linear-gradient(rgba(10,31,68,0.012)_1px,transparent_1px),linear-gradient(90deg,rgba(10,31,68,0.012)_1px,transparent_1px)] bg-[size:48px_48px] opacity-70 pointer-events-none"></div>

    <div class="max-w-4xl mx-auto px-4 sm:px-6 relative z-10 space-y-6">
        <a href="{{ route('blog.index') }}" class="inline-flex items-center gap-2 text-xs font-bold text-gray-500 hover:text-accent transition-colors duration-300 uppercase tracking-widest">
            <i data-lucide="arrow-left" class="w-4 h-4"></i> Back to Blog
        </a>
        
        <div class="space-y-4">
            <span class="inline-flex items-center gap-1 px-3.5 py-1 rounded-full text-xs font-bold bg-accent/10 text-accent uppercase tracking-wider">
                {{ $post['badge'] }}
            </span>
            <h1 class="text-3xl sm:text-4xl lg:text-[46px] font-display font-black tracking-tight text-primary leading-tight">
                {{ $post['title'] }}
            </h1>
            
            <div class="flex flex-wrap items-center gap-6 pt-2 text-sm text-gray-400 font-medium">
                <div class="flex items-center gap-2">
                    <img src="{{ $post['author']['avatar'] }}" alt="{{ $post['author']['name'] }}" class="w-8 h-8 rounded-full object-cover shadow-sm">
                    <span class="text-primary font-bold">{{ $post['author']['name'] }}</span>
                </div>
                <span class="w-1.5 h-1.5 rounded-full bg-gray-300"></span>
                <span class="flex items-center gap-1.5"><i data-lucide="calendar" class="w-4 h-4"></i> {{ $post['date'] }}</span>
                <span class="w-1.5 h-1.5 rounded-full bg-gray-300"></span>
                <span class="flex items-center gap-1.5"><i data-lucide="clock" class="w-4 h-4"></i> {{ $post['read_time'] }}</span>
            </div>
        </div>
    </div>
</section>

{{-- Article Content & Sidebar --}}
<section class="py-20 bg-white relative">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12">
            
            {{-- Content Column --}}
            <div class="lg:col-span-8 space-y-8">
                {{-- Featured Image --}}
                <div class="w-full h-[280px] sm:h-[420px] rounded-3xl overflow-hidden shadow-md border border-gray-100">
                    <img src="{{ $post['image'] }}" alt="{{ $post['title'] }}" class="w-full h-full object-cover">
                </div>

                {{-- Post Content (Raw HTML from Quill Editor) --}}
                <div class="prose max-w-none text-gray-600 space-y-6 leading-relaxed font-light text-base lg:text-lg">
                    {!! $post['content'] !!}
                </div>
            </div>

            {{-- Sidebar Column --}}
            <div class="lg:col-span-4 space-y-8">
                
                {{-- Author Bio Card --}}
                <div class="p-8 rounded-3xl bg-[#F8FAFC] border border-gray-100 text-center space-y-4">
                    <img src="{{ $post['author']['avatar'] }}" alt="{{ $post['author']['name'] }}" class="w-20 h-20 rounded-full object-cover mx-auto border-4 border-white shadow-md">
                    <div>
                        <h4 class="text-lg font-bold text-primary">{{ $post['author']['name'] }}</h4>
                        <p class="text-xs text-gray-400 uppercase tracking-widest font-bold mt-1">{{ $post['author']['title'] }}</p>
                    </div>
                    <div class="w-8 h-0.5 bg-accent mx-auto rounded-full"></div>
                    <p class="text-xs text-gray-500 font-light leading-relaxed">Dedicated to writing clean, standards-compliant architectures that elevate corporate digital reach.</p>
                </div>

                {{-- Social Share Card --}}
                <div class="p-8 rounded-3xl bg-white border border-gray-100 space-y-4 shadow-sm">
                    <h4 class="text-sm font-bold text-primary uppercase tracking-widest">Share Article</h4>
                    <div class="flex gap-3">
                        <a href="https://twitter.com/intent/tweet?url={{ urlencode(request()->url()) }}&text={{ urlencode($post['title']) }}" target="_blank" rel="noopener noreferrer" class="w-10 h-10 rounded-xl bg-[#F8FAFC] hover:bg-accent hover:text-white text-gray-400 border border-gray-100 hover:border-accent flex items-center justify-center transition-all duration-300">
                            <i data-lucide="twitter" class="w-4 h-4"></i>
                        </a>
                        <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(request()->url()) }}" target="_blank" rel="noopener noreferrer" class="w-10 h-10 rounded-xl bg-[#F8FAFC] hover:bg-accent hover:text-white text-gray-400 border border-gray-100 hover:border-accent flex items-center justify-center transition-all duration-300">
                            <i data-lucide="facebook" class="w-4 h-4"></i>
                        </a>
                        <a href="https://www.linkedin.com/shareArticle?mini=true&url={{ urlencode(request()->url()) }}&title={{ urlencode($post['title']) }}" target="_blank" rel="noopener noreferrer" class="w-10 h-10 rounded-xl bg-[#F8FAFC] hover:bg-accent hover:text-white text-gray-400 border border-gray-100 hover:border-accent flex items-center justify-center transition-all duration-300">
                            <i data-lucide="linkedin" class="w-4 h-4"></i>
                        </a>
                    </div>
                </div>

                {{-- Recent Posts List --}}
                @if(count($recentPosts) > 0)
                <div class="p-8 rounded-3xl bg-white border border-gray-100 space-y-6 shadow-sm">
                    <h4 class="text-sm font-bold text-primary uppercase tracking-widest pb-3 border-b border-gray-50">Recent Articles</h4>
                    <div class="space-y-6">
                        @foreach($recentPosts as $recent)
                        <a href="{{ route('blog.show', $recent['slug']) }}" class="group block space-y-2">
                            <span class="text-[10px] font-bold text-accent uppercase tracking-wider">{{ $recent['badge'] }}</span>
                            <h5 class="text-sm font-bold text-primary group-hover:text-accent transition-colors duration-300 leading-snug line-clamp-2">
                                {{ $recent['title'] }}
                            </h5>
                            <span class="block text-[10px] text-gray-400 font-medium">{{ $recent['date'] }}</span>
                        </a>
                        @endforeach
                    </div>
                </div>
                @endif

            </div>
            
        </div>
    </div>
</section>

{{-- Final CTA --}}
<section class="bg-primary text-white py-20 relative overflow-hidden">
    <div class="absolute -bottom-24 left-1/2 -translate-x-1/2 w-2/3 h-64 bg-accent/20 rounded-full blur-[80px] pointer-events-none"></div>
    <div class="max-w-4xl mx-auto px-4 text-center relative z-10 space-y-6">
        <h3 class="text-3xl lg:text-4xl font-display font-bold">Ready to Elevate Your Technology Stack?</h3>
        <p class="text-gray-300 max-w-xl mx-auto font-light leading-relaxed">Our consultants are ready to outline a digital solution tailored to your operational targets.</p>
        <div class="pt-4">
            <a href="{{ route('contact') }}" class="inline-block bg-accent hover:bg-rose-700 text-white px-10 py-4 rounded-full font-bold transition shadow-lg hover:scale-105 duration-300 text-sm">Schedule Free Consultation</a>
        </div>
    </div>
</section>

@endsection
