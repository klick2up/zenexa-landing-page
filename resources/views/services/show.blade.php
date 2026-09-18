@extends('layouts.app')

@section('title', $service['title'])
@section('meta_desc', $service['meta_desc'])

@section('content')

{{-- Hero --}}
<section class="bg-[#F8FAFC] text-primary pt-20 pb-20 lg:pt-28 lg:pb-28 relative overflow-hidden border-b border-gray-100/50">
    <div class="absolute top-0 right-0 w-[600px] h-[600px] bg-red-500/5 rounded-full blur-[100px] mix-blend-multiply opacity-40 pointer-events-none"></div>
    <div class="absolute top-20 left-[-100px] w-[500px] h-[500px] bg-blue-500/5 rounded-full blur-[100px] mix-blend-multiply opacity-40 pointer-events-none"></div>
    <div class="absolute inset-0 bg-[linear-gradient(rgba(10,31,68,0.012)_1px,transparent_1px),linear-gradient(90deg,rgba(10,31,68,0.012)_1px,transparent_1px)] bg-[size:48px_48px] opacity-70 pointer-events-none"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-8 items-center">
            {{-- Left Content --}}
            <div class="lg:col-span-6 space-y-8">
                <span class="inline-flex items-center gap-1.5 px-4 py-1.5 rounded-full text-xs font-bold bg-accent/10 text-accent uppercase tracking-wider">
                    {{ $service['badge'] }}
                </span>
                <h1 class="text-4xl sm:text-5xl lg:text-[56px] font-display font-black tracking-tight text-primary leading-[1.1] mb-6">
                    {!! $service['heading'] !!}
                </h1>
                <p class="text-lg text-gray-500 max-w-2xl leading-relaxed font-light">
                    {{ $service['subheading'] }}
                </p>
                {{-- Feature Pills --}}
                <div class="grid grid-cols-2 md:grid-cols-4 gap-6 pt-4">
                    @foreach($service['features'] as $feat)
                    <div class="flex flex-col items-center lg:items-start text-center lg:text-left gap-3">
                        <div class="w-12 h-12 rounded-2xl bg-white text-accent flex items-center justify-center shadow-md border border-gray-100/50">
                            <i data-lucide="{{ $feat['icon'] }}" class="w-5 h-5"></i>
                        </div>
                        <div>
                            <span class="block text-xs font-bold text-primary leading-tight">{{ $feat['title'] }}</span>
                            <span class="block text-[10px] text-gray-400 mt-0.5 font-medium uppercase tracking-wider">{{ $feat['label'] }}</span>
                        </div>
                    </div>
                    @endforeach
                </div>
                {{-- CTAs --}}
                <div class="flex flex-wrap items-center gap-4 pt-4">
                    <a href="{{ route('contact') }}" class="inline-flex items-center gap-2 bg-primary hover:bg-accent text-white px-8 py-4 rounded-full font-bold text-sm transition-all duration-300 shadow-lg hover:shadow-xl hover:-translate-y-0.5">
                        Get Started <i data-lucide="chevron-right" class="w-4 h-4"></i>
                    </a>
                    <a href="{{ route('portfolio') }}" class="inline-flex items-center gap-2 border border-gray-200 hover:bg-white text-gray-600 px-8 py-4 rounded-full font-bold text-sm transition-all duration-300 shadow-sm hover:shadow-md hover:-translate-y-0.5 bg-white/50 backdrop-blur-sm">
                        View Our Work <i data-lucide="chevron-right" class="w-4 h-4"></i>
                    </a>
                </div>
            </div>

            {{-- Right Image --}}
            <div class="lg:col-span-6 flex justify-center items-center relative">
                <div class="absolute w-[80%] h-[80%] bg-accent/5 rounded-full blur-[80px] pointer-events-none"></div>
                <div class="relative w-full max-w-[600px] select-none">
                    <img src="{{ asset('assets/' . $service['image']) }}" alt="{{ $service['image_alt'] }}" class="w-full h-auto rounded-3xl object-contain drop-shadow-[0_20px_50px_rgba(10,31,68,0.12)]">
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Why Choose Us --}}
<section class="py-24 bg-white relative">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-xs font-bold text-accent uppercase tracking-widest mb-3">Why Klick2Up</h2>
            <h3 class="text-3xl lg:text-4xl font-display font-bold text-primary">The Klick2Up Advantage</h3>
            <div class="w-12 h-1 bg-accent mx-auto mt-4 rounded-full"></div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            @foreach([
                ['icon' => 'award',       'bg' => 'bg-red-50',   'color' => 'text-accent',    'title' => 'Premium Quality',    'desc' => 'Every deliverable is crafted to exceed expectations, following industry standards and best practices.'],
                ['icon' => 'clock',       'bg' => 'bg-blue-50',  'color' => 'text-blue-600',  'title' => 'On-Time Delivery',   'desc' => 'We adhere strictly to agreed timelines with milestone check-ins and transparent progress tracking.'],
                ['icon' => 'shield-check','bg' => 'bg-green-50', 'color' => 'text-green-600', 'title' => 'Full IP Ownership',  'desc' => 'You own 100% of all developed code, designs, and documentation from day one.'],
            ] as $adv)
            <div class="bg-[#F8FAFC] p-8 rounded-3xl border border-gray-100 hover:border-accent/20 transition-all duration-300 shadow-sm text-center">
                <div class="w-16 h-16 {{ $adv['bg'] }} {{ $adv['color'] }} rounded-2xl flex items-center justify-center mx-auto mb-6 shadow-inner">
                    <i data-lucide="{{ $adv['icon'] }}" class="w-8 h-8"></i>
                </div>
                <h4 class="text-xl font-bold text-primary mb-3">{{ $adv['title'] }}</h4>
                <p class="text-gray-500 text-sm font-light leading-relaxed">{{ $adv['desc'] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- CTA --}}
<section class="bg-primary text-white py-20 relative overflow-hidden">
    <div class="absolute -bottom-24 left-1/2 -translate-x-1/2 w-2/3 h-64 bg-accent/20 rounded-full blur-[80px] pointer-events-none"></div>
    <div class="max-w-4xl mx-auto px-4 text-center relative z-10 space-y-6">
        <h3 class="text-3xl lg:text-4xl font-display font-bold">Ready to Discuss Your Project?</h3>
        <p class="text-gray-300 max-w-xl mx-auto font-light leading-relaxed">Let's build something exceptional together. Get in touch for a free consultation and project estimate.</p>
        <div class="pt-4 flex flex-col sm:flex-row justify-center items-center gap-4">
            <a href="{{ route('contact') }}" class="inline-block bg-accent hover:bg-rose-700 text-white px-8 py-4 rounded-full font-bold transition shadow-lg hover:scale-105 duration-300 text-sm">Schedule Free Consultation</a>
            <a href="{{ route('services') }}" class="inline-flex items-center gap-2 border border-white/20 hover:bg-white/5 text-white px-8 py-4 rounded-full font-bold transition duration-300 text-sm"><i data-lucide="layers" class="w-4 h-4"></i> All Services</a>
        </div>
    </div>
</section>

@endsection
