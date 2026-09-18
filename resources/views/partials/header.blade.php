{{-- Navbar --}}
<nav class="glass-nav text-primary bg-white/80 backdrop-blur-lg sticky top-0 z-50 border-b border-gray-100/50 shadow-sm transition-all duration-300 h-20 flex items-center">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full flex justify-between items-center">
        {{-- Logo --}}
        <a href="{{ route('home') }}" class="flex items-center group transition duration-300">
            <img src="{{ asset('assets/logo.png') }}" alt="Klick2Up" class="h-10 object-contain group-hover:scale-105 transition-transform duration-300">
        </a>

        {{-- Desktop Nav Links --}}
        <div class="hidden md:flex space-x-10 font-semibold items-center relative">
            <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'text-accent after:w-full' : 'text-gray-500 hover:text-accent' }} transition relative py-2 after:absolute after:bottom-0 after:left-0 after:w-0 after:h-0.5 after:bg-accent hover:after:w-full after:transition-all after:duration-300">Home</a>

            {{-- Services Dropdown --}}
            <div class="relative group">
                <a href="{{ route('services') }}" class="{{ request()->routeIs('services*') ? 'text-accent' : 'text-gray-500 hover:text-accent' }} transition flex items-center gap-1.5 py-4">
                    Services <i data-lucide="chevron-down" class="w-4 h-4 transform group-hover:rotate-180 transition-transform duration-300"></i>
                </a>
                <div class="absolute top-full left-1/2 -translate-x-1/2 w-[480px] bg-white shadow-2xl rounded-2xl border border-gray-100/80 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 transform translate-y-4 group-hover:translate-y-0 p-4 grid grid-cols-2 gap-2 z-50">
                    <a href="{{ route('services.show', 'web-design-ui-ux') }}" class="flex items-start gap-3 p-3 rounded-xl hover:bg-gray-50 transition duration-200">
                        <div class="w-9 h-9 rounded-lg bg-red-50 text-accent flex items-center justify-center flex-shrink-0"><i data-lucide="layout" class="w-5 h-5"></i></div>
                        <div><span class="block text-sm font-bold text-primary">Web Design</span><span class="block text-xs text-gray-400 mt-0.5">High-fidelity UI/UX & prototyping</span></div>
                    </a>
                    <a href="{{ route('services.show', 'web-development-services') }}" class="flex items-start gap-3 p-3 rounded-xl hover:bg-gray-50 transition duration-200">
                        <div class="w-9 h-9 rounded-lg bg-blue-50 text-blue-600 flex items-center justify-center flex-shrink-0"><i data-lucide="code" class="w-5 h-5"></i></div>
                        <div><span class="block text-sm font-bold text-primary">Web Development</span><span class="block text-xs text-gray-400 mt-0.5">Custom portals & full-stack code</span></div>
                    </a>
                    <a href="{{ route('services.show', 'hybrid-app-development') }}" class="flex items-start gap-3 p-3 rounded-xl hover:bg-gray-50 transition duration-200">
                        <div class="w-9 h-9 rounded-lg bg-green-50 text-green-600 flex items-center justify-center flex-shrink-0"><i data-lucide="smartphone" class="w-5 h-5"></i></div>
                        <div><span class="block text-sm font-bold text-primary">Hybrid Apps</span><span class="block text-xs text-gray-400 mt-0.5">iOS & Android React/Flutter apps</span></div>
                    </a>
                    <a href="{{ route('services.show', 'seo-search-engine-optimization') }}" class="flex items-start gap-3 p-3 rounded-xl hover:bg-gray-50 transition duration-200">
                        <div class="w-9 h-9 rounded-lg bg-amber-50 text-amber-600 flex items-center justify-center flex-shrink-0"><i data-lucide="search" class="w-5 h-5"></i></div>
                        <div><span class="block text-sm font-bold text-primary">SEO Services</span><span class="block text-xs text-gray-400 mt-0.5">Organic rankings & auditing</span></div>
                    </a>
                    <a href="{{ route('services.show', 'digital-marketing-services') }}" class="flex items-start gap-3 p-3 rounded-xl hover:bg-gray-50 transition duration-200">
                        <div class="w-9 h-9 rounded-lg bg-purple-50 text-purple-600 flex items-center justify-center flex-shrink-0"><i data-lucide="megaphone" class="w-5 h-5"></i></div>
                        <div><span class="block text-sm font-bold text-primary">Digital Marketing</span><span class="block text-xs text-gray-400 mt-0.5">PPC campaigns & sales funnels</span></div>
                    </a>
                    <a href="{{ route('services.show', 'business-analysis-consulting') }}" class="flex items-start gap-3 p-3 rounded-xl hover:bg-gray-50 transition duration-200">
                        <div class="w-9 h-9 rounded-lg bg-indigo-50 text-indigo-600 flex items-center justify-center flex-shrink-0"><i data-lucide="target" class="w-5 h-5"></i></div>
                        <div><span class="block text-sm font-bold text-primary">IT Consulting</span><span class="block text-xs text-gray-400 mt-0.5">IT roadmap & startup consults</span></div>
                    </a>
                </div>
            </div>

            {{-- Industries Dropdown --}}
            <div class="relative group">
                <a href="{{ route('industries') }}" class="{{ request()->routeIs('industries*') ? 'text-accent' : 'text-gray-500 hover:text-accent' }} transition flex items-center gap-1.5 py-4">
                    Industries <i data-lucide="chevron-down" class="w-4 h-4 transform group-hover:rotate-180 transition-transform duration-300"></i>
                </a>
                <div class="absolute top-full left-1/2 -translate-x-1/2 w-[540px] bg-white shadow-2xl rounded-2xl border border-gray-100/80 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 transform translate-y-4 group-hover:translate-y-0 p-4 grid grid-cols-2 gap-2 z-50">
                    <a href="{{ route('industries.show', 'ecommerce-retail') }}" class="flex items-start gap-3 p-3 rounded-xl hover:bg-gray-50 transition duration-200">
                        <div class="w-9 h-9 rounded-lg bg-red-50 text-accent flex items-center justify-center flex-shrink-0"><i data-lucide="shopping-bag" class="w-5 h-5"></i></div>
                        <div><span class="block text-sm font-bold text-primary">eCommerce & Retail</span><span class="block text-xs text-gray-400 mt-0.5">Online stores & headless checkouts</span></div>
                    </a>
                    <a href="{{ route('industries.show', 'healthcare-telemedicine') }}" class="flex items-start gap-3 p-3 rounded-xl hover:bg-gray-50 transition duration-200">
                        <div class="w-9 h-9 rounded-lg bg-blue-50 text-blue-600 flex items-center justify-center flex-shrink-0"><i data-lucide="heart-pulse" class="w-5 h-5"></i></div>
                        <div><span class="block text-sm font-bold text-primary">Healthcare</span><span class="block text-xs text-gray-400 mt-0.5">HIPAA portals & live consults</span></div>
                    </a>
                    <a href="{{ route('industries.show', 'fintech-payments') }}" class="flex items-start gap-3 p-3 rounded-xl hover:bg-gray-50 transition duration-200">
                        <div class="w-9 h-9 rounded-lg bg-green-50 text-green-600 flex items-center justify-center flex-shrink-0"><i data-lucide="credit-card" class="w-5 h-5"></i></div>
                        <div><span class="block text-sm font-bold text-primary">FinTech & Payments</span><span class="block text-xs text-gray-400 mt-0.5">Secure gateway & bank APIs</span></div>
                    </a>
                    <a href="{{ route('industries.show', 'logistics-fleet') }}" class="flex items-start gap-3 p-3 rounded-xl hover:bg-gray-50 transition duration-200">
                        <div class="w-9 h-9 rounded-lg bg-amber-50 text-amber-600 flex items-center justify-center flex-shrink-0"><i data-lucide="truck" class="w-5 h-5"></i></div>
                        <div><span class="block text-sm font-bold text-primary">Logistics & Fleet</span><span class="block text-xs text-gray-400 mt-0.5">Live vehicle trackers & routing</span></div>
                    </a>
                    <a href="{{ route('industries.show', 'real-estate-proptech') }}" class="flex items-start gap-3 p-3 rounded-xl hover:bg-gray-50 transition duration-200">
                        <div class="w-9 h-9 rounded-lg bg-indigo-50 text-indigo-600 flex items-center justify-center flex-shrink-0"><i data-lucide="home" class="w-5 h-5"></i></div>
                        <div><span class="block text-sm font-bold text-primary">Real Estate & PropTech</span><span class="block text-xs text-gray-400 mt-0.5">Listing grids & onboarding flows</span></div>
                    </a>
                    <a href="{{ route('industries.show', 'education-edtech') }}" class="flex items-start gap-3 p-3 rounded-xl hover:bg-gray-50 transition duration-200">
                        <div class="w-9 h-9 rounded-lg bg-purple-50 text-purple-600 flex items-center justify-center flex-shrink-0"><i data-lucide="graduation-cap" class="w-5 h-5"></i></div>
                        <div><span class="block text-sm font-bold text-primary">Education & EdTech</span><span class="block text-xs text-gray-400 mt-0.5">Course LMS & WebRTC class</span></div>
                    </a>
                    <a href="{{ route('industries.show', 'on-demand-services') }}" class="flex items-start gap-3 p-3 rounded-xl hover:bg-gray-50 transition duration-200">
                        <div class="w-9 h-9 rounded-lg bg-teal-50 text-teal-600 flex items-center justify-center flex-shrink-0"><i data-lucide="clock" class="w-5 h-5"></i></div>
                        <div><span class="block text-sm font-bold text-primary">On-Demand Apps</span><span class="block text-xs text-gray-400 mt-0.5">Booking engines & dispatch</span></div>
                    </a>
                    <a href="{{ route('industries.show', 'manufacturing-erp') }}" class="flex items-start gap-3 p-3 rounded-xl hover:bg-gray-50 transition duration-200">
                        <div class="w-9 h-9 rounded-lg bg-emerald-50 text-emerald-600 flex items-center justify-center flex-shrink-0"><i data-lucide="settings" class="w-5 h-5"></i></div>
                        <div><span class="block text-sm font-bold text-primary">Manufacturing & ERP</span><span class="block text-xs text-gray-400 mt-0.5">Enterprise tools & IoT sensor logs</span></div>
                    </a>
                </div>
            </div>

            <a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'text-accent after:w-full' : 'text-gray-500 hover:text-accent' }} transition relative py-2 after:absolute after:bottom-0 after:left-0 after:w-0 after:h-0.5 after:bg-accent hover:after:w-full after:transition-all after:duration-300">About Us</a>
            <a href="{{ route('portfolio') }}" class="{{ request()->routeIs('portfolio') ? 'text-accent after:w-full' : 'text-gray-500 hover:text-accent' }} transition relative py-2 after:absolute after:bottom-0 after:left-0 after:w-0 after:h-0.5 after:bg-accent hover:after:w-full after:transition-all after:duration-300">Portfolio</a>
            <a href="{{ route('blog.index') }}" class="{{ request()->routeIs('blog.*') ? 'text-accent after:w-full' : 'text-gray-500 hover:text-accent' }} transition relative py-2 after:absolute after:bottom-0 after:left-0 after:w-0 after:h-0.5 after:bg-accent hover:after:w-full after:transition-all after:duration-300">Blog</a>
            <a href="{{ route('contact') }}" class="{{ request()->routeIs('contact') ? 'text-accent after:w-full' : 'text-gray-500 hover:text-accent' }} transition relative py-2 after:absolute after:bottom-0 after:left-0 after:w-0 after:h-0.5 after:bg-accent hover:after:w-full after:transition-all after:duration-300">Contact</a>
        </div>

        {{-- Desktop CTA --}}
        <div class="hidden md:flex items-center gap-6">
            <a href="{{ route('contact') }}" class="bg-primary text-white hover:bg-accent px-6 py-2.5 rounded-full font-bold text-sm transition-all duration-300 shadow-md hover:shadow-lg">
                Let's Talk
            </a>
        </div>

        {{-- Mobile Menu Trigger --}}
        <button id="mobile-menu-btn" class="md:hidden text-primary focus:outline-none p-1 rounded-lg hover:bg-gray-50 transition-colors">
            <i data-lucide="menu" class="w-8 h-8"></i>
        </button>
    </div>
</nav>

{{-- Mobile Menu Overlay --}}
<div id="mobile-menu-overlay" class="fixed inset-0 bg-black/60 backdrop-blur-sm z-[100] opacity-0 pointer-events-none transition-opacity duration-300"></div>

{{-- Mobile Menu Drawer --}}
<div id="mobile-menu" class="fixed top-0 right-0 h-full w-[320px] bg-white z-[101] translate-x-full transition-transform duration-300 ease-out shadow-[0_0_50px_rgba(0,0,0,0.15)] flex flex-col">
    <div class="p-6 border-b border-gray-100 flex justify-between items-center">
        <a href="{{ route('home') }}"><img src="{{ asset('assets/logo.png') }}" alt="Klick2Up" class="h-8 object-contain"></a>
        <button id="close-menu-btn" class="text-gray-500 hover:text-accent focus:outline-none p-1 rounded-lg hover:bg-gray-50 transition-colors">
            <i data-lucide="x" class="w-6 h-6"></i>
        </button>
    </div>

    <div class="flex-1 overflow-y-auto p-6 space-y-8">
        <a href="{{ route('home') }}" class="block text-lg font-bold {{ request()->routeIs('home') ? 'text-accent' : 'text-primary hover:text-accent' }} transition">Home</a>

        <div class="space-y-4">
            <span class="block text-xs font-bold uppercase tracking-widest text-gray-400">Services</span>
            <div class="pl-4 space-y-4 border-l border-gray-100">
                <a href="{{ route('services.show', 'web-design-ui-ux') }}" class="flex items-center gap-3 text-sm font-semibold text-gray-600 hover:text-accent transition"><i data-lucide="layout" class="w-4 h-4 text-accent"></i> Web Design (UI/UX)</a>
                <a href="{{ route('services.show', 'web-development-services') }}" class="flex items-center gap-3 text-sm font-semibold text-gray-600 hover:text-accent transition"><i data-lucide="code" class="w-4 h-4 text-blue-500"></i> Web Development</a>
                <a href="{{ route('services.show', 'hybrid-app-development') }}" class="flex items-center gap-3 text-sm font-semibold text-gray-600 hover:text-accent transition"><i data-lucide="smartphone" class="w-4 h-4 text-green-500"></i> Hybrid Apps</a>
                <a href="{{ route('services.show', 'seo-search-engine-optimization') }}" class="flex items-center gap-3 text-sm font-semibold text-gray-600 hover:text-accent transition"><i data-lucide="search" class="w-4 h-4 text-amber-500"></i> SEO Services</a>
                <a href="{{ route('services.show', 'digital-marketing-services') }}" class="flex items-center gap-3 text-sm font-semibold text-gray-600 hover:text-accent transition"><i data-lucide="megaphone" class="w-4 h-4 text-purple-500"></i> Digital Marketing</a>
                <a href="{{ route('services.show', 'business-analysis-consulting') }}" class="flex items-center gap-3 text-sm font-semibold text-gray-600 hover:text-accent transition"><i data-lucide="target" class="w-4 h-4 text-indigo-500"></i> IT Consulting</a>
            </div>
        </div>

        <div class="space-y-4">
            <a href="{{ route('industries') }}" class="block text-lg font-bold {{ request()->routeIs('industries*') ? 'text-accent' : 'text-primary hover:text-accent' }} transition">Industries</a>
            <div class="pl-4 space-y-4 border-l border-gray-100">
                <a href="{{ route('industries.show', 'ecommerce-retail') }}" class="flex items-center gap-3 text-sm font-semibold text-gray-600 hover:text-accent transition"><i data-lucide="shopping-bag" class="w-4 h-4 text-accent"></i> eCommerce & Retail</a>
                <a href="{{ route('industries.show', 'healthcare-telemedicine') }}" class="flex items-center gap-3 text-sm font-semibold text-gray-600 hover:text-accent transition"><i data-lucide="heart-pulse" class="w-4 h-4 text-blue-600"></i> Healthcare</a>
                <a href="{{ route('industries.show', 'fintech-payments') }}" class="flex items-center gap-3 text-sm font-semibold text-gray-600 hover:text-accent transition"><i data-lucide="credit-card" class="w-4 h-4 text-green-600"></i> FinTech & Payments</a>
                <a href="{{ route('industries.show', 'logistics-fleet') }}" class="flex items-center gap-3 text-sm font-semibold text-gray-600 hover:text-accent transition"><i data-lucide="truck" class="w-4 h-4 text-amber-600"></i> Logistics & Fleet</a>
                <a href="{{ route('industries.show', 'real-estate-proptech') }}" class="flex items-center gap-3 text-sm font-semibold text-gray-600 hover:text-accent transition"><i data-lucide="home" class="w-4 h-4 text-indigo-600"></i> Real Estate & PropTech</a>
                <a href="{{ route('industries.show', 'education-edtech') }}" class="flex items-center gap-3 text-sm font-semibold text-gray-600 hover:text-accent transition"><i data-lucide="graduation-cap" class="w-4 h-4 text-purple-600"></i> Education & EdTech</a>
                <a href="{{ route('industries.show', 'on-demand-services') }}" class="flex items-center gap-3 text-sm font-semibold text-gray-600 hover:text-accent transition"><i data-lucide="clock" class="w-4 h-4 text-teal-600"></i> On-Demand Services</a>
                <a href="{{ route('industries.show', 'manufacturing-erp') }}" class="flex items-center gap-3 text-sm font-semibold text-gray-600 hover:text-accent transition"><i data-lucide="settings" class="w-4 h-4 text-emerald-600"></i> Manufacturing & ERP</a>
            </div>
        </div>

        <a href="{{ route('about') }}" class="block text-lg font-bold {{ request()->routeIs('about') ? 'text-accent' : 'text-primary hover:text-accent' }} transition">About Us</a>
        <a href="{{ route('portfolio') }}" class="block text-lg font-bold {{ request()->routeIs('portfolio') ? 'text-accent' : 'text-primary hover:text-accent' }} transition">Portfolio</a>
        <a href="{{ route('blog.index') }}" class="block text-lg font-bold {{ request()->routeIs('blog.*') ? 'text-accent' : 'text-primary hover:text-accent' }} transition">Blog</a>
        <a href="{{ route('contact') }}" class="block text-lg font-bold {{ request()->routeIs('contact') ? 'text-accent' : 'text-primary hover:text-accent' }} transition">Contact</a>
    </div>

    <div class="p-6 border-t border-gray-100 bg-gray-50">
        <a href="{{ route('contact') }}" class="block w-full text-center bg-accent hover:bg-black text-white font-bold py-3.5 rounded-xl transition shadow-lg">
            Get Started
        </a>
    </div>
</div>

{{-- Mobile Navigation Controller JS --}}
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const menuBtn = document.getElementById('mobile-menu-btn');
        const closeBtn = document.getElementById('close-menu-btn');
        const drawer = document.getElementById('mobile-menu');
        const overlay = document.getElementById('mobile-menu-overlay');

        if (menuBtn && closeBtn && drawer && overlay) {
            const openMenu = () => {
                drawer.classList.remove('translate-x-full');
                overlay.classList.remove('opacity-0', 'pointer-events-none');
                document.body.style.overflow = 'hidden';
            };
            const closeMenu = () => {
                drawer.classList.add('translate-x-full');
                overlay.classList.add('opacity-0', 'pointer-events-none');
                document.body.style.overflow = '';
            };
            menuBtn.addEventListener('click', openMenu);
            closeBtn.addEventListener('click', closeMenu);
            overlay.addEventListener('click', closeMenu);
        }

        // Scroll background effect
        const nav = document.querySelector('.glass-nav');
        if (nav) {
            window.addEventListener('scroll', () => {
                if (window.scrollY > 20) {
                    nav.classList.add('shadow-md', 'bg-white/95');
                    nav.classList.remove('bg-white/80');
                } else {
                    nav.classList.remove('shadow-md', 'bg-white/95');
                    nav.classList.add('bg-white/80');
                }
            });
        }
    });
</script>
