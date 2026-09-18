@extends('layouts.app')

@section('title', $industry['title'])
@section('meta_desc', $industry['meta_desc'])

@section('content')

{{-- Hero --}}
<section class="bg-[#F8FAFC] text-primary pt-24 pb-16 relative overflow-hidden border-b border-gray-100">
    <div class="absolute top-0 right-0 w-[500px] h-[500px] bg-red-500/5 rounded-full blur-[100px] pointer-events-none"></div>
    <div class="absolute inset-0 bg-[linear-gradient(rgba(10,31,68,0.012)_1px,transparent_1px),linear-gradient(90deg,rgba(10,31,68,0.012)_1px,transparent_1px)] bg-[size:48px_48px] opacity-70"></div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
            <div class="lg:col-span-7 space-y-6">
                <span class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full text-xs font-bold {{ $industry['bg'] }} {{ $industry['color'] }} uppercase tracking-wider">
                    <i data-lucide="{{ $industry['icon'] }}" class="w-3.5 h-3.5"></i> {{ $industry['badge'] }}
                </span>
                <h1 class="text-4xl sm:text-5xl lg:text-[56px] font-display font-black tracking-tight text-primary leading-[1.1]">
                    {!! $industry['heading'] !!}
                </h1>
                <p class="text-lg text-gray-500 leading-relaxed font-light max-w-2xl">{{ $industry['subheading'] }}</p>
                <div class="flex flex-wrap items-center gap-4 pt-2">
                    <a href="{{ route('contact') }}" class="inline-flex items-center gap-2 bg-primary hover:bg-accent text-white px-8 py-4 rounded-full font-bold text-sm transition-all duration-300 shadow-lg hover:-translate-y-0.5">
                        Discuss Your Project <i data-lucide="arrow-right" class="w-4 h-4"></i>
                    </a>
                </div>
            </div>
            <div class="lg:col-span-5 flex justify-center">
                <div class="relative w-full max-w-[500px]">
                    <div class="absolute w-[80%] h-[80%] top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 {{ $industry['bg'] }} rounded-full blur-[60px] opacity-60 pointer-events-none"></div>
                    <img src="{{ asset('assets/' . $industry['image']) }}" alt="{{ $industry['image_alt'] }}" class="w-full h-auto rounded-3xl object-contain drop-shadow-[0_20px_50px_rgba(10,31,68,0.12)] relative z-10">
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Challenges & Solutions --}}
<section class="py-24 bg-white relative">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16">
            {{-- Challenges --}}
            <div>
                <h2 class="text-xs font-bold text-accent uppercase tracking-widest mb-3">Industry Pain Points</h2>
                <h3 class="text-3xl font-display font-bold text-primary mb-8">Common Challenges</h3>
                <div class="space-y-4">
                    @foreach($industry['challenges'] as $challenge)
                    <div class="flex items-start gap-4 p-5 bg-[#F8FAFC] rounded-2xl border border-gray-100">
                        <div class="w-8 h-8 bg-red-50 text-accent rounded-xl flex items-center justify-center flex-shrink-0 mt-0.5">
                            <i data-lucide="alert-circle" class="w-4 h-4"></i>
                        </div>
                        <p class="text-sm text-gray-600 font-medium leading-relaxed">{{ $challenge }}</p>
                    </div>
                    @endforeach
                </div>
            </div>

            {{-- Solutions --}}
            <div>
                <h2 class="text-xs font-bold text-accent uppercase tracking-widest mb-3">Our Solutions</h2>
                <h3 class="text-3xl font-display font-bold text-primary mb-8">How We Help</h3>
                <div class="space-y-4">
                    @foreach($industry['solutions'] as $sol)
                    <div class="flex items-start gap-4 p-5 bg-[#F8FAFC] rounded-2xl border border-gray-100 hover:border-accent/20 transition-all duration-300">
                        <div class="w-10 h-10 {{ $industry['bg'] }} {{ $industry['color'] }} rounded-xl flex items-center justify-center flex-shrink-0">
                            <i data-lucide="{{ $sol['icon'] }}" class="w-5 h-5"></i>
                        </div>
                        <div>
                            <h4 class="text-sm font-bold text-primary mb-1">{{ $sol['title'] }}</h4>
                            <p class="text-xs text-gray-500 font-light leading-relaxed">{{ $sol['desc'] }}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

{{-- CTA --}}
<section class="bg-primary text-white py-20 relative overflow-hidden">
    <div class="absolute -bottom-24 left-1/2 -translate-x-1/2 w-2/3 h-64 bg-accent/20 rounded-full blur-[80px] pointer-events-none"></div>
    <div class="max-w-4xl mx-auto px-4 text-center relative z-10 space-y-6">
        <h3 class="text-3xl lg:text-4xl font-display font-bold">Ready to Transform Your {{ $industry['badge'] }} Business?</h3>
        <p class="text-gray-300 max-w-xl mx-auto font-light leading-relaxed">Schedule a free consultation and discover how we can help you build a superior digital experience.</p>
        <div class="pt-4 flex flex-col sm:flex-row justify-center items-center gap-4">
            <a href="{{ route('contact') }}" class="inline-block bg-accent hover:bg-rose-700 text-white px-8 py-4 rounded-full font-bold transition shadow-lg hover:scale-105 duration-300 text-sm">Schedule Free Consultation</a>
            <a href="{{ route('industries') }}" class="inline-flex items-center gap-2 border border-white/20 hover:bg-white/5 text-white px-8 py-4 rounded-full font-bold transition duration-300 text-sm"><i data-lucide="grid" class="w-4 h-4"></i> All Industries</a>
        </div>
    </div>
</section>

@endsection
