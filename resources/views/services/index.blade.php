@extends('layouts.app')

@section('title', 'Our Services - Klick2Up')
@section('meta_desc', 'Explore Klick2Up\'s full range of services: Web Design, Web Development, Mobile Apps, SEO, Digital Marketing, and IT Consulting.')

@section('content')

{{-- Hero --}}
<section class="bg-[#F8FAFC] text-primary pt-24 pb-16 relative overflow-hidden border-b border-gray-100">
    <div class="absolute top-0 right-0 w-[500px] h-[500px] bg-red-500/5 rounded-full blur-[100px] pointer-events-none"></div>
    <div class="absolute inset-0 bg-[linear-gradient(rgba(10,31,68,0.012)_1px,transparent_1px),linear-gradient(90deg,rgba(10,31,68,0.012)_1px,transparent_1px)] bg-[size:48px_48px] opacity-70"></div>
    <div class="max-w-7xl mx-auto px-4 text-center relative z-10">
        <span class="inline-flex items-center gap-1.5 px-4 py-1.5 rounded-full text-xs font-bold bg-accent/10 text-accent uppercase tracking-wider mb-6">
            <i data-lucide="layers" class="w-3.5 h-3.5"></i> Our Capabilities
        </span>
        <h1 class="text-5xl lg:text-7xl font-display font-black tracking-tight text-primary mb-6">Our <span class="text-accent">Services</span></h1>
        <p class="text-xl text-gray-500 max-w-3xl mx-auto leading-relaxed font-light">From brand identity to backend infrastructure — we handle the entire digital lifecycle so you can focus on growing your business.</p>
    </div>
</section>

{{-- Services Grid --}}
<section class="py-24 bg-white relative overflow-hidden">
    <div class="absolute inset-0 grid-overlay-light opacity-60 pointer-events-none"></div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach([
                ['icon' => 'layout-template', 'title' => 'Web Design & UI/UX',   'slug' => 'web-design-ui-ux',              'badge' => 'Design',      'color' => 'text-accent',    'bg' => 'bg-red-50',    'desc' => 'High-fidelity UI/UX design, Figma prototyping, and responsive interfaces that convert visitors into loyal customers.'],
                ['icon' => 'code',            'title' => 'Web Development',       'slug' => 'web-development-services',       'badge' => 'Engineering', 'color' => 'text-blue-600', 'bg' => 'bg-blue-50',   'desc' => 'Custom portals, full-stack web applications, and enterprise-grade systems built to scale with your business.'],
                ['icon' => 'smartphone',      'title' => 'Hybrid App Development','slug' => 'hybrid-app-development',         'badge' => 'Mobile',      'color' => 'text-green-600','bg' => 'bg-green-50',  'desc' => 'Cross-platform iOS & Android apps built with Flutter and React Native — native performance, single codebase.'],
                ['icon' => 'search',          'title' => 'SEO & Optimization',    'slug' => 'seo-search-engine-optimization', 'badge' => 'Growth',      'color' => 'text-amber-600','bg' => 'bg-amber-50',  'desc' => 'Technical SEO audits, on-page optimization, and keyword strategy to drive qualified organic traffic at scale.'],
                ['icon' => 'megaphone',       'title' => 'Digital Marketing',     'slug' => 'digital-marketing-services',     'badge' => 'Marketing',   'color' => 'text-purple-600','bg' => 'bg-purple-50', 'desc' => 'Google & Meta PPC campaigns, social media strategy, and email marketing optimized for maximum ROI.'],
                ['icon' => 'target',          'title' => 'IT Consulting',         'slug' => 'business-analysis-consulting',   'badge' => 'Strategy',    'color' => 'text-indigo-600','bg' => 'bg-indigo-50', 'desc' => 'Technology roadmaps, system architecture planning, SRS documentation, and startup advisory services.'],
            ] as $svc)
            <div class="group relative bg-white rounded-3xl p-8 border border-gray-100 hover:border-accent/20 hover:shadow-[0_20px_40px_rgba(10,31,68,0.08)] hover:-translate-y-2 transition-all duration-500 flex flex-col">
                <div class="flex items-start justify-between mb-6">
                    <div class="w-14 h-14 {{ $svc['bg'] }} {{ $svc['color'] }} rounded-2xl flex items-center justify-center group-hover:scale-110 group-hover:rotate-3 transition-all duration-300">
                        <i data-lucide="{{ $svc['icon'] }}" class="w-7 h-7"></i>
                    </div>
                    <span class="text-xs font-bold px-3 py-1 rounded-full {{ $svc['bg'] }} {{ $svc['color'] }}">{{ $svc['badge'] }}</span>
                </div>
                <h3 class="text-xl font-display font-bold text-primary mb-3">{{ $svc['title'] }}</h3>
                <p class="text-sm text-gray-500 leading-relaxed flex-1 mb-6">{{ $svc['desc'] }}</p>
                <a href="{{ route('services.show', $svc['slug']) }}" class="inline-flex items-center gap-2 text-sm font-bold text-primary group-hover:text-accent transition-colors duration-300">
                    Learn More <i data-lucide="arrow-right" class="w-4 h-4 group-hover:translate-x-1 transition-transform duration-300"></i>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- Ahmedabad Local Expertise Links --}}
<section class="py-24 bg-gray-50 border-t border-gray-100 relative">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-xs font-bold text-accent uppercase tracking-widest mb-3">Our Ahmedabad Presence</h2>
            <h3 class="text-3xl font-display font-bold text-primary">Specialized Solutions in Ahmedabad</h3>
            <div class="w-12 h-1 bg-accent mx-auto mt-4 rounded-full"></div>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            @foreach([
                ['name' => 'Software Development', 'route' => 'seo.software', 'icon' => 'code-2',    'desc' => 'Custom enterprise software systems.'],
                ['name' => 'Web Development',      'route' => 'seo.web',      'icon' => 'monitor',   'desc' => 'High-performance websites & portals.'],
                ['name' => 'Mobile App Dev',       'route' => 'seo.mobile',   'icon' => 'smartphone','desc' => 'Native & hybrid mobile apps.'],
                ['name' => 'Laravel Development',  'route' => 'seo.laravel',  'icon' => 'layers',    'desc' => 'Secure MVC backend systems.'],
                ['name' => 'ReactJS Development',  'route' => 'seo.react',    'icon' => 'atom',      'desc' => 'Dynamic client frontend apps.'],
                ['name' => 'NodeJS Development',   'route' => 'seo.nodejs',   'icon' => 'zap',       'desc' => 'Event-driven real-time APIs.'],
                ['name' => 'ERP Development',      'route' => 'seo.erp',      'icon' => 'database',  'desc' => 'Tailored business ERP & CRM.'],
                ['name' => 'AI Software Dev',      'route' => 'seo.ai',       'icon' => 'cpu',       'desc' => 'Machine learning & automation.'],
            ] as $seoPage)
            <a href="{{ route($seoPage['route']) }}" class="group bg-white p-6 rounded-3xl border border-gray-100 hover:border-accent/20 hover:shadow-md transition-all duration-300 flex flex-col justify-between">
                <div class="space-y-3">
                    <div class="w-10 h-10 rounded-xl bg-red-50 text-accent flex items-center justify-center group-hover:bg-accent group-hover:text-white transition-colors duration-300">
                        <i data-lucide="{{ $seoPage['icon'] }}" class="w-5 h-5"></i>
                    </div>
                    <div>
                        <h4 class="text-base font-bold text-primary group-hover:text-accent transition-colors duration-300">{{ $seoPage['name'] }}</h4>
                        <p class="text-xs text-gray-400 mt-1 font-light leading-relaxed">{{ $seoPage['desc'] }}</p>
                    </div>
                </div>
                <div class="pt-4 flex items-center gap-1 text-xs font-bold text-primary group-hover:text-accent transition-colors duration-300">
                    Explore Services <i data-lucide="chevron-right" class="w-3.5 h-3.5 group-hover:translate-x-0.5 transition-transform"></i>
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
        <h3 class="text-3xl lg:text-4xl font-display font-bold">Ready to Get Started?</h3>
        <p class="text-gray-300 max-w-xl mx-auto font-light leading-relaxed">Tell us about your project and we'll create a tailored proposal within 48 hours.</p>
        <div class="pt-4">
            <a href="{{ route('contact') }}" class="inline-block bg-accent hover:bg-rose-700 text-white px-10 py-4 rounded-full font-bold transition shadow-lg hover:scale-105 duration-300 text-sm">Get a Free Quote</a>
        </div>
    </div>
</section>

@endsection
