@extends('layouts.app')

@section('title', 'Industries We Serve - Klick2Up')
@section('meta_desc', 'Klick2Up serves eCommerce, healthcare, fintech, logistics, real estate, education, on-demand apps, and manufacturing industries.')

@section('content')

{{-- Hero --}}
<section class="bg-[#F8FAFC] text-primary pt-24 pb-16 relative overflow-hidden border-b border-gray-100">
    <div class="absolute top-0 right-0 w-[500px] h-[500px] bg-red-500/5 rounded-full blur-[100px] pointer-events-none"></div>
    <div class="absolute inset-0 bg-[linear-gradient(rgba(10,31,68,0.012)_1px,transparent_1px),linear-gradient(90deg,rgba(10,31,68,0.012)_1px,transparent_1px)] bg-[size:48px_48px] opacity-70"></div>
    <div class="max-w-7xl mx-auto px-4 text-center relative z-10">
        <span class="inline-flex items-center gap-1.5 px-4 py-1.5 rounded-full text-xs font-bold bg-accent/10 text-accent uppercase tracking-wider mb-6">
            <i data-lucide="building-2" class="w-3.5 h-3.5"></i> Industry Expertise
        </span>
        <h1 class="text-5xl lg:text-7xl font-display font-black tracking-tight text-primary mb-6">Industries We <span class="text-accent">Serve</span></h1>
        <p class="text-xl text-gray-500 max-w-3xl mx-auto leading-relaxed font-light">We deliver purpose-built digital solutions across industries — combining domain expertise with cutting-edge technology.</p>
    </div>
</section>

{{-- Industries Grid --}}
<section class="py-24 bg-white relative overflow-hidden">
    <div class="absolute inset-0 grid-overlay-light opacity-60 pointer-events-none"></div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            @foreach([
                ['icon' => 'shopping-bag',   'slug' => 'ecommerce-retail',       'title' => 'eCommerce & Retail',    'desc' => 'Online stores, headless checkouts, and omnichannel retail platforms.',   'color' => 'text-accent',    'bg' => 'bg-red-50'],
                ['icon' => 'heart-pulse',    'slug' => 'healthcare-telemedicine', 'title' => 'Healthcare',            'desc' => 'HIPAA-compliant portals, telemedicine, and patient management systems.', 'color' => 'text-blue-600', 'bg' => 'bg-blue-50'],
                ['icon' => 'credit-card',    'slug' => 'fintech-payments',       'title' => 'FinTech & Payments',    'desc' => 'PCI-DSS payment gateways, banking APIs, and financial platforms.',         'color' => 'text-green-600','bg' => 'bg-green-50'],
                ['icon' => 'truck',          'slug' => 'logistics-fleet',        'title' => 'Logistics & Fleet',     'desc' => 'Live vehicle tracking, route optimization, and fleet management.',         'color' => 'text-amber-600','bg' => 'bg-amber-50'],
                ['icon' => 'home',           'slug' => 'real-estate-proptech',   'title' => 'Real Estate & PropTech','desc' => 'Property listing platforms, agent CRMs, and digital contracts.',           'color' => 'text-indigo-600','bg' => 'bg-indigo-50'],
                ['icon' => 'graduation-cap', 'slug' => 'education-edtech',       'title' => 'Education & EdTech',    'desc' => 'LMS platforms, live classrooms, and student analytics dashboards.',        'color' => 'text-purple-600','bg' => 'bg-purple-50'],
                ['icon' => 'clock',          'slug' => 'on-demand-services',     'title' => 'On-Demand Apps',        'desc' => 'Booking engines, service dispatch, and marketplace applications.',         'color' => 'text-teal-600', 'bg' => 'bg-teal-50'],
                ['icon' => 'settings',       'slug' => 'manufacturing-erp',      'title' => 'Manufacturing & ERP',   'desc' => 'ERP systems, IoT dashboards, and supply chain management tools.',          'color' => 'text-emerald-600','bg' => 'bg-emerald-50'],
            ] as $ind)
            <a href="{{ route('industries.show', $ind['slug']) }}" class="group p-8 rounded-3xl border border-gray-100 hover:border-accent/20 hover:shadow-[0_20px_40px_rgba(10,31,68,0.08)] hover:-translate-y-2 transition-all duration-500 flex flex-col gap-5">
                <div class="w-14 h-14 {{ $ind['bg'] }} {{ $ind['color'] }} rounded-2xl flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                    <i data-lucide="{{ $ind['icon'] }}" class="w-7 h-7"></i>
                </div>
                <div>
                    <h3 class="text-lg font-bold text-primary group-hover:text-accent transition-colors duration-300 mb-2">{{ $ind['title'] }}</h3>
                    <p class="text-sm text-gray-500 font-light leading-relaxed">{{ $ind['desc'] }}</p>
                </div>
                <div class="inline-flex items-center gap-1.5 text-sm font-bold text-primary group-hover:text-accent transition-colors mt-auto">
                    Explore <i data-lucide="arrow-right" class="w-4 h-4 group-hover:translate-x-1 transition-transform duration-300"></i>
                </div>
            </a>
            @endforeach
        </div>
    </div>
</section>

{{-- CTA --}}
<section class="bg-primary text-white py-20 relative overflow-hidden">
    <div class="absolute -bottom-24 left-1/2 -translate-x-1/2 w-2/3 h-64 bg-accent/20 rounded-full blur-[80px] pointer-events-none"></div>
    <div class="max-w-4xl mx-auto px-4 text-center relative z-10 space-y-6">
        <h3 class="text-3xl lg:text-4xl font-display font-bold">Don't See Your Industry?</h3>
        <p class="text-gray-300 max-w-xl mx-auto font-light leading-relaxed">We work across all sectors. Get in touch to discuss your specific domain requirements.</p>
        <div class="pt-4">
            <a href="{{ route('contact') }}" class="inline-block bg-accent hover:bg-rose-700 text-white px-10 py-4 rounded-full font-bold transition shadow-lg hover:scale-105 duration-300 text-sm">Contact Us</a>
        </div>
    </div>
</section>

@endsection
