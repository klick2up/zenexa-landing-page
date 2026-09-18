@extends('layouts.app')

@section('title', 'Portfolio - Klick2Up')
@section('meta_desc', 'Explore Klick2Up\'s portfolio of web design, development, mobile apps, and digital marketing projects.')

@section('content')

{{-- Hero --}}
<section class="bg-[#F8FAFC] text-primary pt-24 pb-16 relative overflow-hidden border-b border-gray-100">
    <div class="absolute top-0 right-0 w-[500px] h-[500px] bg-red-500/5 rounded-full blur-[100px] pointer-events-none"></div>
    <div class="absolute inset-0 bg-[linear-gradient(rgba(10,31,68,0.012)_1px,transparent_1px),linear-gradient(90deg,rgba(10,31,68,0.012)_1px,transparent_1px)] bg-[size:48px_48px] opacity-70"></div>
    <div class="max-w-7xl mx-auto px-4 text-center relative z-10">
        <span class="inline-flex items-center gap-1.5 px-4 py-1.5 rounded-full text-xs font-bold bg-accent/10 text-accent uppercase tracking-wider mb-6">
            <i data-lucide="briefcase" class="w-3.5 h-3.5"></i> Our Work
        </span>
        <h1 class="text-5xl lg:text-7xl font-display font-black tracking-tight text-primary mb-6">Our <span class="text-accent">Portfolio</span></h1>
        <p class="text-xl text-gray-500 max-w-3xl mx-auto leading-relaxed font-light">150+ successful projects delivered across industries. Here's a showcase of our best work.</p>
    </div>
</section>

{{-- Portfolio Grid --}}
<section class="py-24 bg-white relative">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($projects as $project)
            <div class="group bg-white rounded-3xl border border-gray-100 overflow-hidden hover:border-accent/20 hover:shadow-[0_20px_40px_rgba(10,31,68,0.08)] hover:-translate-y-2 transition-all duration-500">
                @if($project->cover_image)
                <div class="h-60 overflow-hidden relative flex items-center justify-center bg-gray-50 border-b border-gray-100">
                    <img src="{{ $project->cover_image }}" alt="{{ $project->title }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                </div>
                @else
                <div class="{{ $project->color }} p-12 flex items-center justify-center">
                    <div class="w-20 h-20 bg-white rounded-3xl flex items-center justify-center shadow-lg {{ $project->icon_color }}">
                        <i data-lucide="{{ $project->icon }}" class="w-10 h-10"></i>
                    </div>
                </div>
                @endif
                <div class="p-6">
                    <div class="flex items-center justify-between mb-3">
                        <span class="text-xs font-bold text-accent uppercase tracking-wider">{{ $project->category }}</span>
                        <span class="text-xs text-gray-400 font-mono">{{ $project->tech }}</span>
                    </div>
                    <h3 class="text-lg font-bold text-primary mb-2 group-hover:text-accent transition-colors duration-300">{{ $project->title }}</h3>
                    <p class="text-sm text-gray-500 font-light leading-relaxed">{{ $project->desc }}</p>
                </div>
            </div>
            @endforeach
        </div>

        <div class="mt-16 text-center">
            <p class="text-gray-500 font-light mb-6">Interested in seeing more of our work?</p>
            <a href="{{ route('contact') }}" class="inline-flex items-center gap-2 bg-primary hover:bg-accent text-white px-8 py-4 rounded-full font-bold text-sm transition-all duration-300 shadow-lg">
                Request Full Portfolio <i data-lucide="arrow-right" class="w-4 h-4"></i>
            </a>
        </div>
    </div>
</section>

{{-- Stats --}}
<section class="py-16 bg-gray-50 border-y border-gray-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
            @foreach([['150+', 'Projects Delivered'], ['98%', 'Client Satisfaction'], ['50+', 'Active Clients'], ['5+', 'Years Experience']] as [$num, $label])
            <div>
                <h3 class="text-3xl font-display font-black text-accent mb-1">{{ $num }}</h3>
                <p class="text-xs text-gray-500 uppercase tracking-widest font-bold">{{ $label }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>

@endsection
