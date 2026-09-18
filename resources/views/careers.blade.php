@extends('layouts.app')

@section('title', 'Careers - Klick2Up')
@section('meta_desc', 'Join Klick2Up — we\'re always looking for talented engineers, designers, and marketers to join our growing team.')

@section('content')

{{-- Hero --}}
<section class="bg-primary text-white pt-24 pb-24 relative overflow-hidden">
    <div class="absolute inset-0 grid-overlay opacity-30 pointer-events-none"></div>
    <div class="absolute -bottom-24 left-1/2 -translate-x-1/2 w-2/3 h-64 bg-accent/20 rounded-full blur-[80px] pointer-events-none"></div>
    <div class="max-w-7xl mx-auto px-4 text-center relative z-10">
        <span class="inline-flex items-center gap-1.5 px-4 py-1.5 rounded-full text-xs font-bold bg-accent/20 text-white uppercase tracking-wider mb-6">
            <i data-lucide="users" class="w-3.5 h-3.5"></i> Join Our Team
        </span>
        <h1 class="text-5xl lg:text-7xl font-display font-black tracking-tight text-white mb-6">Work With <span class="text-accent">Klick2Up</span></h1>
        <p class="text-xl text-gray-300 max-w-3xl mx-auto leading-relaxed font-light">We're building the future of digital. Join a team of passionate engineers, designers, and strategists who love what they do.</p>
    </div>
</section>

{{-- Why Work Here --}}
<section class="py-24 bg-white relative">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-xs font-bold text-accent uppercase tracking-widest mb-3">Why Klick2Up</h2>
            <h3 class="text-3xl lg:text-4xl font-display font-bold text-primary">A Place Where Talent Thrives</h3>
            <div class="w-12 h-1 bg-accent mx-auto mt-4 rounded-full"></div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            @foreach([
                ['icon' => 'rocket',        'bg' => 'bg-red-50',    'color' => 'text-accent',    'title' => 'Growth Opportunities',  'desc' => 'Fast-track your career with mentorship, skill development programs, and opportunities to lead projects.'],
                ['icon' => 'heart',         'bg' => 'bg-blue-50',   'color' => 'text-blue-600',  'title' => 'Great Culture',         'desc' => 'A collaborative, inclusive environment where every idea is valued and every person matters.'],
                ['icon' => 'dollar-sign',   'bg' => 'bg-green-50',  'color' => 'text-green-600', 'title' => 'Competitive Package',   'desc' => 'Market-leading salaries, performance bonuses, health benefits, and flexible work arrangements.'],
            ] as $benefit)
            <div class="bg-[#F8FAFC] p-8 rounded-3xl border border-gray-100 text-center">
                <div class="w-16 h-16 {{ $benefit['bg'] }} {{ $benefit['color'] }} rounded-2xl flex items-center justify-center mx-auto mb-6">
                    <i data-lucide="{{ $benefit['icon'] }}" class="w-8 h-8"></i>
                </div>
                <h4 class="text-xl font-bold text-primary mb-3">{{ $benefit['title'] }}</h4>
                <p class="text-gray-500 text-sm font-light leading-relaxed">{{ $benefit['desc'] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- Open Positions --}}
<section class="py-24 bg-gray-50 border-y border-gray-100">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-xs font-bold text-accent uppercase tracking-widest mb-3">Open Roles</h2>
            <h3 class="text-3xl font-display font-bold text-primary">Current Openings</h3>
            <div class="w-12 h-1 bg-accent mx-auto mt-4 rounded-full"></div>
        </div>
        <div class="space-y-4">
            @foreach([
                ['title' => 'Senior Full-Stack Developer', 'type' => 'Full-Time', 'location' => 'Ahmedabad / Remote', 'skills' => 'Laravel, React, MySQL'],
                ['title' => 'UI/UX Designer', 'type' => 'Full-Time', 'location' => 'Ahmedabad', 'skills' => 'Figma, Adobe XD, Prototyping'],
                ['title' => 'Flutter Developer', 'type' => 'Full-Time', 'location' => 'Ahmedabad / Remote', 'skills' => 'Flutter, Dart, Firebase'],
                ['title' => 'Digital Marketing Specialist', 'type' => 'Full-Time', 'location' => 'Ahmedabad', 'skills' => 'Google Ads, Meta Ads, SEO'],
            ] as $job)
            <div class="bg-white p-6 rounded-2xl border border-gray-100 hover:border-accent/20 hover:shadow-md transition-all duration-300 flex flex-col sm:flex-row sm:items-center justify-between gap-4">
                <div>
                    <h4 class="text-lg font-bold text-primary mb-2">{{ $job['title'] }}</h4>
                    <div class="flex flex-wrap gap-3">
                        <span class="inline-flex items-center gap-1.5 text-xs text-gray-500 font-medium"><i data-lucide="briefcase" class="w-3.5 h-3.5"></i> {{ $job['type'] }}</span>
                        <span class="inline-flex items-center gap-1.5 text-xs text-gray-500 font-medium"><i data-lucide="map-pin" class="w-3.5 h-3.5"></i> {{ $job['location'] }}</span>
                        <span class="inline-flex items-center gap-1.5 text-xs text-gray-500 font-medium"><i data-lucide="code" class="w-3.5 h-3.5"></i> {{ $job['skills'] }}</span>
                    </div>
                </div>
                <a href="{{ route('contact') }}" class="inline-flex items-center gap-2 bg-primary hover:bg-accent text-white px-6 py-2.5 rounded-xl font-bold text-sm transition-all duration-300 flex-shrink-0">
                    Apply Now <i data-lucide="arrow-right" class="w-4 h-4"></i>
                </a>
            </div>
            @endforeach
        </div>
        <div class="mt-10 text-center">
            <p class="text-gray-500 font-light text-sm mb-4">Don't see your role? We're always open to exceptional talent.</p>
            <a href="mailto:info@klick2up.com" class="inline-flex items-center gap-2 text-accent font-bold text-sm hover:underline">
                <i data-lucide="mail" class="w-4 h-4"></i> Send us your resume
            </a>
        </div>
    </div>
</section>

@endsection
