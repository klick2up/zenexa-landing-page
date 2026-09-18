@extends('layouts.app')

@section('title', $page['title'])
@section('meta_desc', $page['meta_desc'])

@section('content')

{{-- Hero Section --}}
<section class="bg-[#F8FAFC] text-primary pt-20 pb-20 lg:pt-28 lg:pb-28 relative overflow-hidden border-b border-gray-100/50">
    <div class="absolute top-0 right-0 w-[600px] h-[600px] bg-accent/5 rounded-full blur-[100px] mix-blend-multiply opacity-40 pointer-events-none"></div>
    <div class="absolute top-20 left-[-100px] w-[500px] h-[500px] bg-blue-500/5 rounded-full blur-[100px] mix-blend-multiply opacity-40 pointer-events-none"></div>
    <div class="absolute inset-0 bg-[linear-gradient(rgba(10,31,68,0.012)_1px,transparent_1px),linear-gradient(90deg,rgba(10,31,68,0.012)_1px,transparent_1px)] bg-[size:48px_48px] opacity-70 pointer-events-none"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-8 items-center">
            {{-- Left Content --}}
            <div class="lg:col-span-7 space-y-8 animate-fade-in-up">
                <span class="inline-flex items-center gap-1.5 px-4 py-1.5 rounded-full text-xs font-bold bg-accent/10 text-accent uppercase tracking-wider">
                    <span class="w-1.5 h-1.5 rounded-full bg-accent animate-ping mr-1"></span>
                    {{ $page['badge'] }}
                </span>
                <h1 class="text-4xl sm:text-5xl lg:text-[56px] font-display font-black tracking-tight text-primary leading-[1.1] mb-6">
                    {!! $page['heading'] !!}
                </h1>
                <p class="text-lg text-gray-500 max-w-2xl leading-relaxed font-light">
                    {{ $page['subheading'] }}
                </p>

                {{-- Feature Pills --}}
                <div class="grid grid-cols-2 md:grid-cols-4 gap-6 pt-4">
                    @foreach($page['features'] as $feat)
                    <div class="flex flex-col items-center lg:items-start text-center lg:text-left gap-3 group">
                        <div class="w-12 h-12 rounded-2xl bg-white text-accent flex items-center justify-center shadow-md border border-gray-100/50 group-hover:scale-110 transition-transform duration-300">
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
                    <a href="#about" class="inline-flex items-center gap-2 border border-gray-200 hover:bg-white text-gray-600 px-8 py-4 rounded-full font-bold text-sm transition-all duration-300 shadow-sm hover:shadow-md hover:-translate-y-0.5 bg-white/50 backdrop-blur-sm">
                        Learn More <i data-lucide="arrow-down" class="w-4 h-4"></i>
                    </a>
                </div>
            </div>

            {{-- Right Layout - Aesthetic Glassmorphism Panel --}}
            <div class="lg:col-span-5 flex justify-center items-center relative">
                <div class="absolute w-[90%] h-[90%] bg-accent/5 rounded-full blur-[80px] pointer-events-none"></div>
                
                {{-- Dynamic Tech Dashboard Graphic --}}
                <div class="relative w-full max-w-[460px] p-6 rounded-3xl glass-premium-light border border-white/80 shadow-2xl space-y-6 animate-float">
                    {{-- Window Header --}}
                    <div class="flex items-center justify-between pb-4 border-b border-gray-100">
                        <div class="flex gap-1.5">
                            <span class="w-3 h-3 rounded-full bg-red-400"></span>
                            <span class="w-3 h-3 rounded-full bg-yellow-400"></span>
                            <span class="w-3 h-3 rounded-full bg-green-400"></span>
                        </div>
                        <span class="text-[10px] font-bold text-gray-400 tracking-wider uppercase">KLICK2UP // SYSTEM ACTIVE</span>
                    </div>

                    {{-- Code Module representation --}}
                    <div class="space-y-4 font-mono text-xs">
                        <div class="flex items-start gap-3">
                            <span class="text-accent font-bold">1</span>
                            <span class="text-primary font-bold">const</span>
                            <span class="text-blue-600">klick2up</span>
                            <span class="text-gray-500">=</span>
                            <span class="text-gray-600">require(</span><span class="text-emerald-600">'@klick2up/core'</span><span class="text-gray-600">);</span>
                        </div>
                        <div class="flex items-start gap-3">
                            <span class="text-accent font-bold">2</span>
                            <span class="text-primary font-bold">const</span>
                            <span class="text-blue-600">project</span>
                            <span class="text-gray-500">=</span>
                            <span class="text-gray-600">klick2up.create({</span>
                        </div>
                        <div class="flex items-start gap-3 pl-6">
                            <span class="text-accent font-bold">3</span>
                            <span class="text-gray-600">location:</span>
                            <span class="text-emerald-600">'Ahmedabad'</span><span class="text-gray-600">,</span>
                        </div>
                        <div class="flex items-start gap-3 pl-6">
                            <span class="text-accent font-bold">4</span>
                            <span class="text-gray-600">quality:</span>
                            <span class="text-emerald-600">'Enterprise-Grade'</span><span class="text-gray-600">,</span>
                        </div>
                        <div class="flex items-start gap-3 pl-6">
                            <span class="text-accent font-bold">5</span>
                            <span class="text-gray-600">performance:</span>
                            <span class="text-emerald-600">'Ultra-Fast'</span>
                        </div>
                        <div class="flex items-start gap-3">
                            <span class="text-accent font-bold">6</span>
                            <span class="text-gray-600">});</span>
                        </div>
                    </div>

                    {{-- Mini Status Stats --}}
                    <div class="grid grid-cols-2 gap-4 pt-4 border-t border-gray-100">
                        <div class="bg-white/60 p-3 rounded-2xl border border-gray-100/50">
                            <span class="block text-[10px] text-gray-400 font-bold uppercase tracking-wider">LATENCY</span>
                            <span class="text-sm font-black text-emerald-600 flex items-center gap-1 mt-0.5">
                                <span class="w-1.5 h-1.5 rounded-full bg-emerald-500 animate-pulse"></span>
                                98.4ms (Optimal)
                            </span>
                        </div>
                        <div class="bg-white/60 p-3 rounded-2xl border border-gray-100/50">
                            <span class="block text-[10px] text-gray-400 font-bold uppercase tracking-wider">DEPLOY RATE</span>
                            <span class="text-sm font-black text-primary flex items-center gap-1 mt-0.5">
                                <i data-lucide="check" class="w-3.5 h-3.5 text-accent"></i>
                                100% Success
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- About Klick2Up Ahmedabad --}}
<section id="about" class="py-24 bg-white relative">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-16 items-center">
            <div class="lg:col-span-7 space-y-6">
                <h2 class="text-xs font-bold text-accent uppercase tracking-widest">{{ $page['badge'] }}</h2>
                <h3 class="text-3xl lg:text-4xl font-display font-bold text-primary">{{ $page['about']['subtitle'] }}</h3>
                <div class="w-12 h-1 bg-accent rounded-full"></div>
                <p class="text-gray-500 font-light leading-relaxed text-base">
                    {{ $page['about']['content_p1'] }}
                </p>
                <p class="text-gray-500 font-light leading-relaxed text-base">
                    {{ $page['about']['content_p2'] }}
                </p>
                <div class="flex items-center gap-6 pt-4">
                    <div class="flex items-center gap-2.5"><i data-lucide="check-circle-2" class="text-accent w-5 h-5"></i><span class="text-sm font-semibold text-gray-700">ISO Standard Code</span></div>
                    <div class="flex items-center gap-2.5"><i data-lucide="check-circle-2" class="text-accent w-5 h-5"></i><span class="text-sm font-semibold text-gray-700">100% IP Ownership</span></div>
                </div>
            </div>

            {{-- Stat Cards --}}
            <div class="lg:col-span-5 grid grid-cols-1 gap-6">
                @foreach($page['about']['stats'] as $stat)
                <div class="bg-[#F8FAFC] p-8 rounded-3xl border border-gray-100 hover:border-accent/20 transition-all duration-300 shadow-sm flex items-center justify-between">
                    <div>
                        <p class="text-4xl font-display font-black text-accent mb-1">{{ $stat['value'] }}</p>
                        <p class="text-xs text-gray-400 uppercase tracking-widest font-bold">{{ $stat['label'] }}</p>
                    </div>
                    <div class="w-12 h-12 rounded-2xl bg-white text-primary flex items-center justify-center shadow-inner border border-gray-100">
                        <i data-lucide="trending-up" class="w-5 h-5 text-gray-400"></i>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

{{-- Services list section --}}
<section class="py-24 bg-gray-50 border-y border-gray-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-xs font-bold text-accent uppercase tracking-widest mb-3">Our Offerings</h2>
            <h3 class="text-3xl lg:text-4xl font-display font-bold text-primary">Core Capabilities</h3>
            <div class="w-12 h-1 bg-accent mx-auto mt-4 rounded-full"></div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            @foreach($page['services'] as $ser)
            <div class="bg-white p-8 rounded-3xl border border-gray-100 hover:border-accent/20 transition-all duration-300 shadow-sm hover:shadow-md flex gap-6 items-start group">
                <div class="w-14 h-14 rounded-2xl bg-[#F8FAFC] text-accent flex items-center justify-center flex-shrink-0 group-hover:bg-accent group-hover:text-white transition-colors duration-300 shadow-inner">
                    <i data-lucide="{{ $ser['icon'] }}" class="w-6 h-6"></i>
                </div>
                <div class="space-y-2">
                    <h4 class="text-xl font-bold text-primary">{{ $ser['title'] }}</h4>
                    <p class="text-gray-500 text-sm font-light leading-relaxed">{{ $ser['desc'] }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- Why Choose Us Section --}}
<section class="py-24 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-xs font-bold text-accent uppercase tracking-widest mb-3">Why Klick2Up</h2>
            <h3 class="text-3xl lg:text-4xl font-display font-bold text-primary">{{ $page['why_choose_us']['title'] }}</h3>
            <div class="w-12 h-1 bg-accent mx-auto mt-4 rounded-full"></div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            @foreach($page['why_choose_us']['reasons'] as $reason)
            <div class="bg-[#F8FAFC] p-8 rounded-3xl border border-gray-100 hover:border-accent/20 transition-all duration-300 shadow-sm text-center">
                <div class="w-16 h-16 bg-red-50 text-accent rounded-2xl flex items-center justify-center mx-auto mb-6 shadow-inner">
                    <i data-lucide="{{ $reason['icon'] }}" class="w-8 h-8"></i>
                </div>
                <h4 class="text-xl font-bold text-primary mb-3">{{ $reason['title'] }}</h4>
                <p class="text-gray-500 text-sm font-light leading-relaxed">{{ $reason['desc'] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- FAQ Section --}}
<section class="py-24 bg-gray-50 border-t border-gray-100">
    <div class="max-w-4xl mx-auto px-4 sm:px-6">
        <div class="text-center mb-16">
            <h2 class="text-xs font-bold text-accent uppercase tracking-widest mb-3">Answers to your queries</h2>
            <h3 class="text-3xl lg:text-4xl font-display font-bold text-primary">Frequently Asked Questions</h3>
            <div class="w-12 h-1 bg-accent mx-auto mt-4 rounded-full"></div>
        </div>

        <div class="space-y-6">
            @foreach($page['faqs'] as $index => $faq)
            <div class="bg-white rounded-2xl border border-gray-100 p-6 shadow-sm">
                <h4 class="text-lg font-bold text-primary flex items-center gap-3">
                    <span class="w-6 h-6 rounded-full bg-accent/10 text-accent flex items-center justify-center text-xs font-black">{{ $index + 1 }}</span>
                    {{ $faq['q'] }}
                </h4>
                <p class="text-gray-500 text-sm font-light mt-3 leading-relaxed pl-9">
                    {{ $faq['a'] }}
                </p>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- Final CTA Section --}}
<section class="bg-primary text-white py-20 relative overflow-hidden">
    <div class="absolute -bottom-24 left-1/2 -translate-x-1/2 w-2/3 h-64 bg-accent/20 rounded-full blur-[80px] pointer-events-none"></div>
    <div class="max-w-4xl mx-auto px-4 text-center relative z-10 space-y-6">
        <h3 class="text-3xl lg:text-4xl font-display font-bold">Ready to Launch Your Project in Ahmedabad?</h3>
        <p class="text-gray-300 max-w-xl mx-auto font-light leading-relaxed">Let's build something exceptional together. Get in touch for a free technical consultation and customized project proposal.</p>
        <div class="pt-4 flex flex-col sm:flex-row justify-center items-center gap-4">
            <a href="{{ route('contact') }}" class="inline-block bg-accent hover:bg-rose-700 text-white px-8 py-4 rounded-full font-bold transition shadow-lg hover:scale-105 duration-300 text-sm">Schedule Free Consultation</a>
            <a href="{{ route('services') }}" class="inline-flex items-center gap-2 border border-white/20 hover:bg-white/5 text-white px-8 py-4 rounded-full font-bold transition duration-300 text-sm"><i data-lucide="layers" class="w-4 h-4"></i> All Services</a>
        </div>
    </div>
</section>

@endsection
