@extends('layouts.app')

@section('title', 'Klick2Up - Premium IT Services')
@section('meta_desc', 'Klick2Up provides expert IT services, specializing in premium web design, SEO, and top-tier web development in Ahmedabad. Transform your corporate reach today.')

@section('content')
<section class="hero-mesh text-primary min-h-[calc(100vh-5rem)] lg:h-[calc(100vh-5rem)] lg:min-h-0 flex items-center py-12 lg:py-6 relative overflow-hidden">
    <!-- Grid overlay -->
    <div class="absolute inset-0 grid-overlay-light opacity-60"></div>
    <div class="absolute -top-40 right-0 w-1/2 h-full bg-gradient-to-b from-red-500/5 to-transparent blur-[120px] pointer-events-none"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 w-full mt-10 lg:mt-0">
        <div class="flex flex-col lg:flex-row items-center gap-10 lg:gap-12 xl:gap-16">
            <!-- Hero Content -->
            <div class="lg:w-1/2 text-left">
                <div class="inline-flex items-center gap-2.5 px-4 py-2 bg-accent/5 border border-accent/15 rounded-full text-xs font-bold text-gray-600 mb-8 lg:mb-4 xl:mb-6 uppercase tracking-widest relative overflow-hidden shadow-sm backdrop-blur-sm group hover:border-accent/30 transition-all duration-300">
                    <span class="absolute inset-0 w-full h-full bg-gradient-to-r from-accent/0 via-accent/10 to-accent/0 -translate-x-full group-hover:translate-x-full transition-transform duration-1000 ease-out"></span>
                    <span class="relative flex h-2 w-2">
                        <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-accent opacity-75"></span>
                        <span class="relative inline-flex rounded-full h-2 w-2 bg-accent"></span>
                    </span>
                    <span class="relative z-10 bg-gradient-to-r from-primary to-gray-600 bg-clip-text text-transparent group-hover:text-primary transition-colors duration-300">Enterprise IT & Consulting</span>
                </div>
                <h1 class="text-3xl md:text-4xl xl:text-5xl font-display font-black leading-tight mb-6 text-primary">
                    Web Development Company<br />
                    <span class="text-4xl md:text-5xl xl:text-6xl text-transparent bg-clip-text bg-gradient-to-r from-accent via-rose-500 to-orange-400">in Ahmedabad</span>
                </h1>
                <p class="text-lg lg:text-base xl:text-lg text-gray-600 mb-8 lg:mb-6 xl:mb-8 max-w-lg leading-relaxed font-light animate-fade-in-up stagger-1">
                    We engineer <span class="text-primary font-semibold">Custom Software, Mobile Apps, SEO & Digital Marketing</span> solutions designed to drive measurable corporate growth and secure market leadership.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 lg:gap-3 xl:gap-5">
                    <a href="{{ route('contact') }}" class="relative group bg-accent hover:bg-primary text-white px-6 py-3 lg:px-6 lg:py-3 xl:px-8 xl:py-4 rounded-2xl font-bold text-base lg:text-sm xl:text-lg transition-all duration-300 flex justify-center items-center gap-2 shadow-lg hover:shadow-[0_0_30px_rgba(193,31,37,0.35)] active:scale-95">
                        <span class="relative z-10 flex items-center gap-2">Schedule Consultation <i data-lucide="arrow-right" class="w-4 h-4 lg:w-5 lg:h-5 group-hover:translate-x-1 transition-transform duration-300"></i></span>
                    </a>
                    <a href="{{ route('services') }}" class="group relative bg-white border border-gray-200 hover:border-accent text-primary px-6 py-3 lg:px-6 lg:py-3 xl:px-8 xl:py-4 rounded-2xl font-semibold text-base lg:text-sm xl:text-lg transition-all duration-300 flex justify-center items-center gap-2 shadow-sm hover:shadow-md active:scale-95">
                        <span class="relative z-10 flex items-center gap-2">Our Capabilities <i data-lucide="layers" class="w-4 h-4 opacity-60 group-hover:translate-x-0.5 transition-transform duration-300"></i></span>
                    </a>
                </div>
            </div>

            <!-- Interactive SVG Technology Node Network -->
            <div class="lg:w-1/2 relative w-full lg:pl-5 xl:pl-10 flex justify-center items-center">
                <!-- Glow Background behind panel -->
                <div class="absolute w-[350px] h-[350px] lg:w-[350px] lg:h-[350px] xl:w-[450px] xl:h-[450px] bg-accent/10 rounded-full blur-[100px] xl:blur-[120px] -z-10 animate-pulse pointer-events-none"></div>

                <!-- SVG Node Network Container -->
                <div class="relative w-full max-w-[450px] lg:max-w-[360px] xl:max-w-[440px] 2xl:max-w-[520px] aspect-square flex items-center justify-center overflow-visible select-none">
                    <!-- Connecting SVG Paths & Packets -->
                    <svg class="absolute inset-0 w-full h-full pointer-events-none overflow-visible" viewBox="0 0 500 500" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <defs>
                            <!-- Gradients for paths -->
                            <linearGradient id="grad-uiux" x1="90" y1="90" x2="250" y2="250" gradientUnits="userSpaceOnUse">
                                <stop offset="0%" stop-color="#C11F25" stop-opacity="0.8" />
                                <stop offset="100%" stop-color="#C11F25" stop-opacity="0.1" />
                            </linearGradient>
                            <linearGradient id="grad-webdev" x1="410" y1="90" x2="250" y2="250" gradientUnits="userSpaceOnUse">
                                <stop offset="0%" stop-color="#C11F25" stop-opacity="0.8" />
                                <stop offset="100%" stop-color="#C11F25" stop-opacity="0.1" />
                            </linearGradient>
                            <linearGradient id="grad-mobile" x1="90" y1="410" x2="250" y2="250" gradientUnits="userSpaceOnUse">
                                <stop offset="0%" stop-color="#C11F25" stop-opacity="0.8" />
                                <stop offset="100%" stop-color="#C11F25" stop-opacity="0.1" />
                            </linearGradient>
                            <linearGradient id="grad-seo" x1="410" y1="410" x2="250" y2="250" gradientUnits="userSpaceOnUse">
                                <stop offset="0%" stop-color="#C11F25" stop-opacity="0.8" />
                                <stop offset="100%" stop-color="#C11F25" stop-opacity="0.1" />
                            </linearGradient>
                            <!-- Filter for glowing paths -->
                            <filter id="glow" x="-20%" y="-20%" width="140%" height="140%">
                                <feGaussianBlur stdDeviation="6" result="blur" />
                                <feComposite in="SourceGraphic" in2="blur" operator="over" />
                            </filter>
                        </defs>

                        <!-- Outer Decorative Rotating Rings -->
                        <circle cx="250" cy="250" r="100" fill="none" stroke="rgba(10,31,68,0.08)" stroke-width="1.5" stroke-dasharray="10, 8" class="origin-center animate-[spin_60s_linear_infinite]" />
                        <circle cx="250" cy="250" r="115" fill="none" stroke="rgba(193,31,37,0.16)" stroke-width="1" stroke-dasharray="60, 160" class="origin-center animate-[spin_30s_linear_infinite_reverse]" />

                        <!-- Underlay Paths (Static Glow) -->
                        <path id="path-bg-uiux" d="M 90 90 Q 250 90 250 250" fill="none" stroke="rgba(10,31,68,0.06)" stroke-width="2" />
                        <path id="path-bg-webdev" d="M 410 90 Q 250 90 250 250" fill="none" stroke="rgba(10,31,68,0.06)" stroke-width="2" />
                        <path id="path-bg-mobile" d="M 90 410 Q 250 410 250 250" fill="none" stroke="rgba(10,31,68,0.06)" stroke-width="2" />
                        <path id="path-bg-seo" d="M 410 410 Q 250 410 250 250" fill="none" stroke="rgba(10,31,68,0.06)" stroke-width="2" />

                        <!-- Active Glowing Paths -->
                        <path id="path-uiux" d="M 90 90 Q 250 90 250 250" fill="none" stroke="url(#grad-uiux)" stroke-width="2.5" class="opacity-30 transition-all duration-300" filter="url(#glow)" />
                        <path id="path-webdev" d="M 410 90 Q 250 90 250 250" fill="none" stroke="url(#grad-webdev)" stroke-width="2.5" class="opacity-30 transition-all duration-300" filter="url(#glow)" />
                        <path id="path-mobile" d="M 90 410 Q 250 410 250 250" fill="none" stroke="url(#grad-mobile)" stroke-width="2.5" class="opacity-30 transition-all duration-300" filter="url(#glow)" />
                        <path id="path-seo" d="M 410 410 Q 250 410 250 250" fill="none" stroke="url(#grad-seo)" stroke-width="2.5" class="opacity-30 transition-all duration-300" filter="url(#glow)" />

                        <!-- Flowing Data Packets (Dashed Lines) -->
                        <path id="packet-uiux" d="M 90 90 Q 250 90 250 250" fill="none" stroke="#C11F25" stroke-width="2.5" stroke-linecap="round" class="animate-dash-line opacity-60 transition-all duration-300" />
                        <path id="packet-webdev" d="M 410 90 Q 250 90 250 250" fill="none" stroke="#C11F25" stroke-width="2.5" stroke-linecap="round" class="animate-dash-line opacity-60 transition-all duration-300" />
                        <path id="packet-mobile" d="M 90 410 Q 250 410 250 250" fill="none" stroke="#C11F25" stroke-width="2.5" stroke-linecap="round" class="animate-dash-line opacity-60 transition-all duration-300" />
                        <path id="packet-seo" d="M 410 410 Q 250 410 250 250" fill="none" stroke="#C11F25" stroke-width="2.5" stroke-linecap="round" class="animate-dash-line opacity-60 transition-all duration-300" />
                    </svg>

                    <!-- Central Growth Hub -->
                    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-28 h-28 sm:w-36 sm:h-36 lg:w-32 lg:h-32 xl:w-40 xl:h-40 2xl:w-44 2xl:h-44 rounded-full flex flex-col items-center justify-center text-center p-2.5 sm:p-3 xl:p-4 border border-[#0A1F44]/10 shadow-[0_8px_30px_rgba(10,31,68,0.04)] glass-premium-light z-20 transition-all duration-500 hover:scale-105 select-none" id="central-hub">
                        <!-- Pulsing Core -->
                        <div class="relative w-8 h-8 sm:w-10 sm:h-10 lg:w-8 lg:h-8 xl:w-12 xl:h-12 bg-accent/15 border border-accent/25 rounded-full flex items-center justify-center mb-1 lg:mb-0.5 xl:mb-2 pulse-node" id="hub-icon-container">
                            <i data-lucide="activity" class="w-4 h-4 sm:w-5 sm:h-5 lg:w-4 lg:h-4 xl:w-6 xl:h-6 text-accent animate-pulse" id="hub-icon"></i>
                        </div>
                        <h4 class="text-[10px] sm:text-xs xl:text-sm font-display font-bold text-primary tracking-wide" id="hub-title">Growth Engine</h4>
                        <p class="text-[7.5px] sm:text-[9px] xl:text-[10px] text-gray-500 leading-tight mt-0.5 xl:mt-1 px-1" id="hub-desc">Hover a service node to trace the data highway.</p>
                    </div>

                    <!-- Service Node 1: UI/UX (Top-Left) -->
                    <div id="node-uiux" class="tech-node absolute top-[18%] left-[18%] -translate-x-1/2 -translate-y-1/2 group cursor-pointer transition-all duration-300 z-30" data-service="uiux">
                        <div class="flex items-center gap-3 bg-white/90 backdrop-blur-md border border-[#0A1F44]/10 rounded-2xl p-2 md:p-3 shadow-[0_8px_30px_rgba(10,31,68,0.06)] group-hover:border-accent group-hover:shadow-[0_0_25px_rgba(193,31,37,0.35)] transition-all duration-300 transform group-hover:-translate-y-1">
                            <div class="w-8 h-8 md:w-10 md:h-10 rounded-xl bg-accent/15 border border-accent/20 text-accent flex items-center justify-center group-hover:bg-accent group-hover:text-white transition-all duration-300 shadow-inner">
                                <i data-lucide="layout-template" class="w-4 h-4 md:w-5 md:h-5"></i>
                            </div>
                            <div class="hidden sm:block">
                                <p class="text-[8px] md:text-[9px] text-gray-500 font-bold uppercase tracking-wider">UI/UX Design</p>
                                <p class="text-[10px] md:text-xs font-extrabold text-primary">Creative UI/UX</p>
                            </div>
                        </div>
                    </div>

                    <!-- Service Node 2: Web Dev (Top-Right) -->
                    <div id="node-webdev" class="tech-node absolute top-[18%] right-[18%] translate-x-1/2 -translate-y-1/2 group cursor-pointer transition-all duration-300 z-30" data-service="webdev">
                        <div class="flex items-center gap-3 bg-white/90 backdrop-blur-md border border-[#0A1F44]/10 rounded-2xl p-2 md:p-3 shadow-[0_8px_30px_rgba(10,31,68,0.06)] group-hover:border-accent group-hover:shadow-[0_0_25px_rgba(193,31,37,0.35)] transition-all duration-300 transform group-hover:-translate-y-1">
                            <div class="w-8 h-8 md:w-10 md:h-10 rounded-xl bg-accent/15 border border-accent/20 text-accent flex items-center justify-center group-hover:bg-accent group-hover:text-white transition-all duration-300 shadow-inner">
                                <i data-lucide="code" class="w-4 h-4 md:w-5 md:h-5"></i>
                            </div>
                            <div class="hidden sm:block">
                                <p class="text-[8px] md:text-[9px] text-gray-500 font-bold uppercase tracking-wider">Web Dev</p>
                                <p class="text-[10px] md:text-xs font-extrabold text-primary">Enterprise Scale</p>
                            </div>
                        </div>
                    </div>

                    <!-- Service Node 3: Mobile Apps (Bottom-Left) -->
                    <div id="node-mobile" class="tech-node absolute bottom-[18%] left-[18%] -translate-x-1/2 translate-y-1/2 group cursor-pointer transition-all duration-300 z-30" data-service="mobile">
                        <div class="flex items-center gap-3 bg-white/90 backdrop-blur-md border border-[#0A1F44]/10 rounded-2xl p-2 md:p-3 shadow-[0_8px_30px_rgba(10,31,68,0.06)] group-hover:border-accent group-hover:shadow-[0_0_25px_rgba(193,31,37,0.35)] transition-all duration-300 transform group-hover:-translate-y-1">
                            <div class="w-8 h-8 md:w-10 md:h-10 rounded-xl bg-accent/15 border border-accent/20 text-accent flex items-center justify-center group-hover:bg-accent group-hover:text-white transition-all duration-300 shadow-inner">
                                <i data-lucide="smartphone" class="w-4 h-4 md:w-5 md:h-5"></i>
                            </div>
                            <div class="hidden sm:block">
                                <p class="text-[8px] md:text-[9px] text-gray-500 font-bold uppercase tracking-wider">Mobile Apps</p>
                                <p class="text-[10px] md:text-xs font-extrabold text-primary">Flutter & Native</p>
                            </div>
                        </div>
                    </div>

                    <!-- Service Node 4: SEO Optimization (Bottom-Right) -->
                    <div id="node-seo" class="tech-node absolute bottom-[18%] right-[18%] translate-x-1/2 translate-y-1/2 group cursor-pointer transition-all duration-300 z-30" data-service="seo">
                        <div class="flex items-center gap-3 bg-white/90 backdrop-blur-md border border-[#0A1F44]/10 rounded-2xl p-2 md:p-3 shadow-[0_8px_30px_rgba(10,31,68,0.06)] group-hover:border-accent group-hover:shadow-[0_0_25px_rgba(193,31,37,0.35)] transition-all duration-300 transform group-hover:-translate-y-1">
                            <div class="w-8 h-8 md:w-10 md:h-10 rounded-xl bg-accent/15 border border-accent/20 text-accent flex items-center justify-center group-hover:bg-accent group-hover:text-white transition-all duration-300 shadow-inner">
                                <i data-lucide="trending-up" class="w-4 h-4 md:w-5 md:h-5"></i>
                            </div>
                            <div class="hidden sm:block">
                                <p class="text-[8px] md:text-[9px] text-gray-500 font-bold uppercase tracking-wider">SEO & Growth</p>
                                <p class="text-[10px] md:text-xs font-extrabold text-primary">Rank Authority</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ═══════════════ WHO WE ARE ═══════════════ --}}
<section id="who-we-are" class="py-28 relative overflow-hidden text-gray-800" style="background: linear-gradient(160deg, #FFF7F7 0%, #F0F4FF 50%, #F8FAF5 100%);">
    <div class="absolute inset-0 pointer-events-none overflow-hidden">
        <div class="absolute top-0 left-0 w-[500px] h-[500px] bg-red-100/60 rounded-full blur-[120px] -translate-x-1/3 -translate-y-1/3"></div>
        <div class="absolute bottom-0 right-0 w-[400px] h-[400px] bg-blue-100/70 rounded-full blur-[100px] translate-x-1/4 translate-y-1/4"></div>
        <div class="absolute top-1/2 left-1/2 w-[300px] h-[300px] bg-rose-50/80 rounded-full blur-[80px] -translate-x-1/2 -translate-y-1/2"></div>
    </div>
    <div class="absolute inset-0 pointer-events-none" style="background-image: radial-gradient(circle, rgba(193,31,37,0.06) 1px, transparent 1px); background-size: 32px 32px;"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="flex flex-col lg:flex-row items-center gap-16 xl:gap-24">
            <div class="w-full lg:w-[55%] space-y-8">
                <div>
                    <span class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-accent/8 border border-accent/20 text-accent font-bold uppercase tracking-widest text-xs mb-6">
                        <span class="w-1.5 h-1.5 rounded-full bg-accent animate-pulse inline-block"></span> Who We Are
                    </span>
                    <h2 class="text-4xl md:text-5xl xl:text-6xl font-display font-black leading-tight mb-6 text-primary">
                        A Team Built for<br />
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-accent via-rose-500 to-orange-400">Digital Dominance</span>
                    </h2>
                    <p class="text-gray-600 text-base md:text-lg leading-relaxed font-light">
                        Klick2Up is an Ahmedabad-based premium IT powerhouse. We are engineers, designers, and strategists united by one mission — building digital systems that don't just look exceptional, they <span class="text-primary font-semibold">perform exceptionally</span>.
                    </p>
                </div>
                <div class="flex flex-wrap gap-3">
                    <span class="flex items-center gap-2 px-4 py-2 rounded-full bg-white border border-red-100 shadow-sm text-sm font-semibold text-gray-700 hover:border-accent/40 hover:shadow-md transition-all duration-300"><i data-lucide="clock" class="w-4 h-4 text-accent"></i> On-Time Delivery</span>
                    <span class="flex items-center gap-2 px-4 py-2 rounded-full bg-white border border-red-100 shadow-sm text-sm font-semibold text-gray-700 hover:border-accent/40 hover:shadow-md transition-all duration-300"><i data-lucide="users" class="w-4 h-4 text-accent"></i> Dedicated Teams</span>
                    <span class="flex items-center gap-2 px-4 py-2 rounded-full bg-white border border-red-100 shadow-sm text-sm font-semibold text-gray-700 hover:border-accent/40 hover:shadow-md transition-all duration-300"><i data-lucide="trending-up" class="w-4 h-4 text-accent"></i> Growth-Focused</span>
                </div>
                <div class="flex gap-4 pt-2">
                    <a href="{{ route('contact') }}" class="group inline-flex items-center gap-2 bg-accent hover:bg-primary text-white font-bold px-7 py-3.5 rounded-2xl transition-all duration-300 shadow-lg hover:shadow-[0_0_30px_rgba(193,31,37,0.35)] text-sm">
                        Work With Us <i data-lucide="arrow-right" class="w-4 h-4 group-hover:translate-x-1 transition-transform duration-300"></i>
                    </a>
                </div>
            </div>

            <div class="w-full lg:w-[45%] flex justify-center relative">
                <div class="absolute -inset-4 bg-gradient-to-tr from-accent/20 to-blue-500/10 rounded-[2.5rem] blur-2xl opacity-75 pointer-events-none animate-pulse"></div>
                <div class="relative group w-full max-w-[480px]">
                    <div class="rounded-[2.5rem] border border-white/60 shadow-[0_20px_50px_rgba(10,31,68,0.12)] overflow-hidden bg-white/50 backdrop-blur-sm p-3 relative z-10 transition-transform duration-500 group-hover:scale-[1.01]">
                        <img src="{{ asset('assets/who_we_are_team.png') }}" alt="Klick2Up Creative Agency Team" class="w-full h-auto object-cover rounded-[2rem] shadow-inner" />
                    </div>
                    <div class="absolute -top-6 -right-6 bg-white/95 backdrop-blur-md border border-red-100 rounded-2xl p-4 shadow-xl flex items-center gap-3 animate-float-slow z-20">
                        <div class="w-10 h-10 bg-red-50 rounded-xl flex items-center justify-center border border-red-100 text-accent"><i data-lucide="award" class="w-5 h-5"></i></div>
                        <div><p class="text-[9px] text-gray-400 font-bold uppercase tracking-wider">Top Rated Agency</p><p class="text-xs font-extrabold text-primary">Ahmedabad IT Leader</p></div>
                    </div>
                    <div class="absolute -bottom-6 -left-6 bg-white/95 backdrop-blur-md border border-blue-100 rounded-2xl p-4 shadow-xl flex items-center gap-3 animate-float-slow z-20" style="animation-delay: 2.5s;">
                        <div class="w-10 h-10 bg-blue-50 rounded-xl flex items-center justify-center border border-blue-100 text-blue-600"><i data-lucide="clock" class="w-5 h-5"></i></div>
                        <div><p class="text-[9px] text-gray-400 font-bold uppercase tracking-wider">On-Time Delivery</p><p class="text-xs font-extrabold text-primary">Strict Project Timelines</p></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ═══════════════ SERVICES OVERVIEW ═══════════════ --}}
<section class="py-32 relative bg-[#F8FAFC] overflow-hidden">
    <div class="absolute inset-0 grid-overlay-light opacity-80 pointer-events-none"></div>
    <div class="absolute top-0 right-0 w-96 h-96 bg-red-500/5 rounded-full blur-[100px] pointer-events-none"></div>
    <div class="absolute bottom-0 left-0 w-96 h-96 bg-blue-500/5 rounded-full blur-[100px] pointer-events-none"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="text-center mb-20">
            <span class="text-accent font-bold tracking-widest uppercase text-xs mb-3 inline-block px-4 py-1.5 rounded-full bg-red-100/60 border border-red-200/50">Our Expertise</span>
            <h3 class="text-4xl md:text-5xl font-display font-bold text-gradient-dark pb-2 leading-normal">Mastering the Digital Space</h3>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach([
                ['icon' => 'layout-template', 'title' => 'Web Design (UI/UX)', 'desc' => 'Modern, responsive, and conversion-optimized websites and landing pages styled natively via Figma/Adobe XD.', 'slug' => 'web-design-ui-ux'],
                ['icon' => 'code', 'title' => 'Web Development', 'desc' => 'Custom business portals and robust e-commerce architectures leveraging scalable enterprise technologies.', 'slug' => 'web-development-services'],
                ['icon' => 'smartphone', 'title' => 'Hybrid Apps', 'desc' => 'Flawless Flutter and React Native mobile applications that dominate app store charts seamlessly.', 'slug' => 'hybrid-app-development'],
                ['icon' => 'search', 'title' => 'SEO Services', 'desc' => 'Deep-dive technical, on-page, and local SEO optimizations driving massive, qualified organic traffic gains.', 'slug' => 'seo-search-engine-optimization'],
                ['icon' => 'megaphone', 'title' => 'Digital Marketing', 'desc' => 'Scalable Google & Meta ad campaigns supercharged through custom-built sales funnels.', 'slug' => 'digital-marketing-services'],
                ['icon' => 'target', 'title' => 'Business Analysis', 'desc' => 'Streamlined business audits and digital transformation roadmaps to fully unlock backend potential.', 'slug' => 'business-analysis-consulting'],
            ] as $svc)
            <div class="group relative glass-premium-light rounded-3xl p-8 shadow-[0_8px_30px_rgb(0,0,0,0.02)] hover:shadow-[0_20px_40px_rgba(10,31,68,0.08)] hover:border-accent/30 hover:-translate-y-2 transition-all duration-500 overflow-hidden flex flex-col justify-between h-full">
                <div>
                    <div class="w-14 h-14 bg-white/40 backdrop-blur-md border border-[#0A1F44]/10 text-accent rounded-2xl flex items-center justify-center mb-6 shadow-[0_8px_20px_rgba(10,31,68,0.04)] group-hover:bg-accent group-hover:text-white group-hover:border-accent group-hover:shadow-[0_10px_20px_rgba(193,31,37,0.3)] group-hover:rotate-6 transition-all duration-300 relative z-10">
                        <i data-lucide="{{ $svc['icon'] }}" class="w-7 h-7"></i>
                    </div>
                    <h4 class="text-xl font-display font-bold text-primary mb-3 relative z-10">{{ $svc['title'] }}</h4>
                    <p class="text-sm text-gray-500 mb-6 leading-relaxed relative z-10">{{ $svc['desc'] }}</p>
                </div>
                <a href="{{ route('services.show', $svc['slug']) }}" class="inline-flex items-center text-primary font-bold text-sm hover:text-accent transition relative z-10 group/link">
                    Explore <i data-lucide="arrow-right" class="w-3.5 h-3.5 ml-2 transform group-hover/link:translate-x-1 transition"></i>
                </a>
            </div>
            @endforeach
        </div>
        <div class="mt-16 text-center">
            <a href="{{ route('services') }}" class="inline-flex items-center justify-center gap-2 font-bold text-lg text-primary hover:text-accent transition border-b-2 border-transparent hover:border-accent pb-1">View All Services <i data-lucide="arrow-right" class="w-5 h-5"></i></a>
        </div>
    </div>
</section>

{{-- ═══════════════ WHAT WE DO — SERVICES DEEP-DIVE ═══════════════ --}}
<section id="what-we-do" class="py-32 relative bg-white overflow-hidden">
    <div class="absolute inset-0 grid-overlay-light opacity-60 pointer-events-none"></div>
    <div class="absolute top-0 left-1/4 w-[500px] h-[300px] bg-red-500/4 rounded-full blur-[100px] pointer-events-none"></div>
    <div class="absolute bottom-0 right-1/4 w-[400px] h-[250px] bg-blue-500/4 rounded-full blur-[100px] pointer-events-none"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <!-- Header -->
        <div class="text-center mb-20">
            <span class="inline-block px-4 py-1.5 rounded-full bg-red-100/60 border border-red-200/50 text-accent font-bold tracking-widest uppercase text-xs mb-4">What We Do</span>
            <h2 class="text-4xl md:text-5xl font-display font-bold text-gradient-dark pb-2 leading-normal">End-to-End Digital Solutions</h2>
            <p class="text-gray-500 max-w-2xl mx-auto mt-4 text-sm md:text-base leading-relaxed font-light">From brand identity to backend infrastructure — we handle the entire digital lifecycle so you can focus on growing your business.</p>
        </div>

        <!-- Service Feature Rows -->
        <!-- Row 1: Web Design & Dev -->
        <div class="flex flex-col lg:flex-row items-center gap-12 xl:gap-20 mb-24">
            <div class="lg:w-1/2 relative">
                <!-- Visual Card -->
                <div class="bg-gradient-to-br from-[#051024] to-[#0A1F44] rounded-3xl p-8 shadow-2xl border border-white/10 relative overflow-hidden">
                    <div class="absolute top-0 right-0 w-48 h-48 bg-accent/10 rounded-full blur-3xl pointer-events-none"></div>
                    <div class="grid grid-cols-2 gap-4 relative z-10">
                        <div class="bg-white/5 border border-white/10 rounded-2xl p-5 hover:border-accent/30 transition-all duration-300">
                            <i data-lucide="layout-template" class="w-8 h-8 text-accent mb-3"></i>
                            <p class="text-white font-bold text-sm">UI/UX Design</p>
                            <p class="text-gray-400 text-xs mt-1 font-light">Figma &rarr; Pixel-perfect</p>
                        </div>
                        <div class="bg-white/5 border border-white/10 rounded-2xl p-5 hover:border-accent/30 transition-all duration-300">
                            <i data-lucide="code-2" class="w-8 h-8 text-blue-400 mb-3"></i>
                            <p class="text-white font-bold text-sm">Web Development</p>
                            <p class="text-gray-400 text-xs mt-1 font-light">Full-stack & scalable</p>
                        </div>
                        <div class="col-span-2 bg-accent/10 border border-accent/20 rounded-2xl p-5 flex items-center gap-4">
                            <div class="w-10 h-10 bg-accent/20 rounded-xl flex items-center justify-center flex-shrink-0">
                                <i data-lucide="zap" class="w-5 h-5 text-accent"></i>
                            </div>
                            <div>
                                <p class="text-white font-bold text-sm">Google Core Web Vitals Score</p>
                                <div class="flex items-center gap-2 mt-1.5">
                                    <div class="flex-1 h-1.5 bg-white/10 rounded-full overflow-hidden">
                                        <div class="h-full bg-gradient-to-r from-accent to-rose-400 rounded-full" style="width:95%"></div>
                                    </div>
                                    <span class="text-xs font-bold text-accent font-mono">95+</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="lg:w-1/2 space-y-6">
                <span class="inline-block text-xs font-bold uppercase tracking-widest text-accent px-3 py-1 bg-red-50 border border-red-100 rounded-full">Design & Development</span>
                <h3 class="text-3xl md:text-4xl font-display font-bold text-primary leading-tight">Websites That Convert, <br />Not Just Impress</h3>
                <p class="text-gray-500 text-sm md:text-base leading-relaxed font-light">We blend aesthetic brilliance with performance engineering. Every website we build is mobile-first, blazing fast, and architected to generate real revenue — not just look good in a screenshot.</p>
                <ul class="space-y-3">
                    <li class="flex items-start gap-3 text-sm text-gray-600">
                        <i data-lucide="check-circle-2" class="w-5 h-5 text-accent flex-shrink-0 mt-0.5"></i>
                        <span>Pixel-perfect Figma-to-code handoff with zero deviation</span>
                    </li>
                    <li class="flex items-start gap-3 text-sm text-gray-600">
                        <i data-lucide="check-circle-2" class="w-5 h-5 text-accent flex-shrink-0 mt-0.5"></i>
                        <span>React, Next.js, Vue, and custom CMS implementations</span>
                    </li>
                    <li class="flex items-start gap-3 text-sm text-gray-600">
                        <i data-lucide="check-circle-2" class="w-5 h-5 text-accent flex-shrink-0 mt-0.5"></i>
                        <span>WCAG accessibility and SEO-optimized from the ground up</span>
                    </li>
                </ul>
                <a href="{{ route('services.show', 'web-design-ui-ux') }}" class="inline-flex items-center gap-2 text-primary font-bold text-sm hover:text-accent transition group/link border-b-2 border-transparent hover:border-accent pb-0.5">
                    Explore Web Services <i data-lucide="arrow-right" class="w-4 h-4 group-hover/link:translate-x-1 transition-transform duration-300"></i>
                </a>
            </div>
        </div>

        <!-- Row 2: Mobile Apps & Marketing -->
        <div class="flex flex-col lg:flex-row-reverse items-center gap-12 xl:gap-20 mb-24">
            <div class="lg:w-1/2 relative">
                <!-- Visual Card -->
                <div class="bg-gradient-to-br from-[#0a0a1a] to-[#1a1040] rounded-3xl p-8 shadow-2xl border border-white/10 relative overflow-hidden">
                    <div class="absolute bottom-0 left-0 w-48 h-48 bg-purple-600/10 rounded-full blur-3xl pointer-events-none"></div>
                    <div class="grid grid-cols-2 gap-4 relative z-10">
                        <div class="bg-white/5 border border-white/10 rounded-2xl p-5 hover:border-purple-500/30 transition-all duration-300">
                            <i data-lucide="smartphone" class="w-8 h-8 text-green-400 mb-3"></i>
                            <p class="text-white font-bold text-sm">Hybrid Apps</p>
                            <p class="text-gray-400 text-xs mt-1 font-light">Flutter & React Native</p>
                        </div>
                        <div class="bg-white/5 border border-white/10 rounded-2xl p-5 hover:border-purple-500/30 transition-all duration-300">
                            <i data-lucide="megaphone" class="w-8 h-8 text-purple-400 mb-3"></i>
                            <p class="text-white font-bold text-sm">Digital Marketing</p>
                            <p class="text-gray-400 text-xs mt-1 font-light">PPC, Meta & Google Ads</p>
                        </div>
                        <div class="bg-white/5 border border-white/10 rounded-2xl p-5 hover:border-purple-500/30 transition-all duration-300">
                            <i data-lucide="search" class="w-8 h-8 text-amber-400 mb-3"></i>
                            <p class="text-white font-bold text-sm">SEO Strategy</p>
                            <p class="text-gray-400 text-xs mt-1 font-light">Rank authority growth</p>
                        </div>
                        <div class="bg-white/5 border border-white/10 rounded-2xl p-5 hover:border-purple-500/30 transition-all duration-300">
                            <i data-lucide="target" class="w-8 h-8 text-indigo-400 mb-3"></i>
                            <p class="text-white font-bold text-sm">Business Analysis</p>
                            <p class="text-gray-400 text-xs mt-1 font-light">IT roadmaps & audits</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="lg:w-1/2 space-y-6">
                <span class="inline-block text-xs font-bold uppercase tracking-widest text-purple-600 px-3 py-1 bg-purple-50 border border-purple-100 rounded-full">Growth & Marketing</span>
                <h3 class="text-3xl md:text-4xl font-display font-bold text-primary leading-tight">Drive Traffic, <br />Dominate Your Market</h3>
                <p class="text-gray-500 text-sm md:text-base leading-relaxed font-light">Building a great product is only half the battle. Our growth specialists deploy proven digital marketing strategies, aggressive SEO, and mobile-first app experiences that capture and retain your ideal audience.</p>
                <ul class="space-y-3">
                    <li class="flex items-start gap-3 text-sm text-gray-600">
                        <i data-lucide="check-circle-2" class="w-5 h-5 text-accent flex-shrink-0 mt-0.5"></i>
                        <span>Cross-platform Flutter & React Native app development</span>
                    </li>
                    <li class="flex items-start gap-3 text-sm text-gray-600">
                        <i data-lucide="check-circle-2" class="w-5 h-5 text-accent flex-shrink-0 mt-0.5"></i>
                        <span>ROI-focused Google Ads & Meta campaigns</span>
                    </li>
                    <li class="flex items-start gap-3 text-sm text-gray-600">
                        <i data-lucide="check-circle-2" class="w-5 h-5 text-accent flex-shrink-0 mt-0.5"></i>
                        <span>Full technical SEO audits and organic rank acceleration</span>
                    </li>
                </ul>
                <a href="{{ route('services') }}" class="inline-flex items-center gap-2 text-primary font-bold text-sm hover:text-accent transition group/link border-b-2 border-transparent hover:border-accent pb-0.5">
                    All Services <i data-lucide="arrow-right" class="w-4 h-4 group-hover/link:translate-x-1 transition-transform duration-300"></i>
                </a>
            </div>
        </div>

        <!-- Bottom CTA strip -->
        <div class="bg-gradient-to-r from-[#051024] to-[#0A1F44] rounded-3xl p-8 md:p-10 flex flex-col md:flex-row items-center justify-between gap-6 border border-white/10 shadow-2xl relative overflow-hidden">
            <div class="absolute right-0 top-0 w-64 h-full bg-accent/5 rounded-l-full blur-3xl pointer-events-none"></div>
            <div class="relative z-10">
                <p class="text-white/50 text-xs font-bold uppercase tracking-widest mb-2">Ready to transform?</p>
                <h4 class="text-2xl md:text-3xl font-display font-bold text-white">Let's discuss your project today.</h4>
            </div>
            <a href="{{ route('contact') }}" class="relative z-10 flex-shrink-0 bg-accent hover:bg-white text-white hover:text-primary font-bold px-8 py-4 rounded-2xl transition-all duration-300 shadow-lg hover:shadow-[0_0_30px_rgba(193,31,37,0.35)] flex items-center gap-2 text-sm">
                Get a Free Consultation <i data-lucide="arrow-right" class="w-4 h-4"></i>
            </a>
        </div>
    </div>
</section>

{{-- ═══════════════ STATS SECTION ═══════════════ --}}
<section class="py-20 bg-primary relative overflow-hidden">
    <div class="absolute inset-0 grid-overlay opacity-40 pointer-events-none"></div>
    <div class="absolute -bottom-24 left-1/2 -translate-x-1/2 w-2/3 h-64 bg-accent/15 rounded-full blur-[80px] pointer-events-none"></div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
            @foreach([
                ['num' => '150+', 'label' => 'Projects Delivered'],
                ['num' => '98%',  'label' => 'Client Retention'],
                ['num' => '5+',   'label' => 'Years Experience'],
                ['num' => '20+',  'label' => 'Expert Team Members'],
            ] as $stat)
            <div class="group">
                <h3 class="text-4xl md:text-5xl font-display font-black text-white mb-2 group-hover:text-accent transition-colors duration-300">{{ $stat['num'] }}</h3>
                <p class="text-xs text-gray-400 uppercase tracking-widest font-bold">{{ $stat['label'] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>


{{-- ═══════════════ WHY CHOOSE US (ACCORDIONS) ═══════════════ --}}
<section class="py-32 relative overflow-hidden bg-white">
    <!-- Abstract shape -->
    <div class="absolute top-1/2 right-0 -translate-y-1/2 w-1/3 h-2/3 bg-blue-50 rounded-l-full opacity-50 blur-3xl pointer-events-none"></div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="flex flex-col lg:flex-row items-center gap-20">
            <!-- Left: Content & Interactive Accordions -->
            <div class="lg:w-1/2 space-y-8">
                <div>
                    <h2 class="text-accent font-bold tracking-widest uppercase text-xs mb-3 inline-block px-4 py-1.5 rounded-full bg-red-100/60 border border-red-200/50">The Klick2Up Advantage</h2>
                    <h3 class="text-4xl md:text-5xl font-display font-bold text-gradient-dark mb-6 leading-tight">Elevating Business through Innovation</h3>
                    <p class="text-gray-500 text-sm md:text-base leading-relaxed">We orchestrate technology to serve your ultimate business goals. From aesthetic frontend experiences to unshakeable backend infrastructure, we are the premium partner for serious growth.</p>
                </div>

                <div class="space-y-4">
                    <!-- Accordion 1 -->
                    <div class="accordion-item rounded-2xl border border-gray-200 overflow-hidden bg-gray-50/50 transition duration-300">
                        <button onclick="toggleAccordion(0)" class="w-full px-6 py-5 flex justify-between items-center text-left focus:outline-none">
                            <span class="font-display font-bold text-primary flex items-center gap-3">
                                <i data-lucide="shield-check" class="w-5 h-5 text-accent"></i> Enterprise Security
                            </span>
                            <i data-lucide="chevron-down" class="accordion-arrow w-5 h-5 text-gray-400 transition-transform duration-300 transform rotate-180"></i>
                        </button>
                        <div class="accordion-content px-6 pb-5 text-sm text-gray-500 font-light leading-relaxed">
                            Our software architectures employ bank-grade safety, strictly conforming to OWASP guidelines. We implement secure SSL, automated patch cycles, and rigorous pen-testing protocols.
                        </div>
                    </div>

                    <!-- Accordion 2 -->
                    <div class="accordion-item rounded-2xl border border-gray-200 overflow-hidden bg-gray-50/50 transition duration-300">
                        <button onclick="toggleAccordion(1)" class="w-full px-6 py-5 flex justify-between items-center text-left focus:outline-none">
                            <span class="font-display font-bold text-primary flex items-center gap-3">
                                <i data-lucide="zap" class="w-5 h-5 text-accent"></i> Lightning Performance
                            </span>
                            <i data-lucide="chevron-down" class="accordion-arrow w-5 h-5 text-gray-400 transition-transform duration-300"></i>
                        </button>
                        <div class="accordion-content px-6 pb-5 text-sm text-gray-500 font-light leading-relaxed hidden">
                            Optimized asset delivery, server-side pre-rendering, and minimal payload structures guarantee Google Core Web Vitals scoring of 95+ natively.
                        </div>
                    </div>

                    <!-- Accordion 3 -->
                    <div class="accordion-item rounded-2xl border border-gray-200 overflow-hidden bg-gray-50/50 transition duration-300">
                        <button onclick="toggleAccordion(2)" class="w-full px-6 py-5 flex justify-between items-center text-left focus:outline-none">
                            <span class="font-display font-bold text-primary flex items-center gap-3">
                                <i data-lucide="bar-chart-3" class="w-5 h-5 text-accent"></i> Strategic Live Dashboards
                            </span>
                            <i data-lucide="chevron-down" class="accordion-arrow w-5 h-5 text-gray-400 transition-transform duration-300"></i>
                        </button>
                        <div class="accordion-content px-6 pb-5 text-sm text-gray-500 font-light leading-relaxed hidden">
                            Seamless integrations with Power BI, databases, and custom executive portals ensure you can evaluate leads and conversion paths in real-time.
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right: Custom Growth Graph Mockup -->
            <div class="lg:w-1/2 relative flex justify-center items-center">
                <!-- Glow background -->
                <div class="absolute w-[350px] h-[350px] bg-red-500/5 rounded-full blur-[80px] pointer-events-none"></div>

                <!-- Dashboard mockup -->
                <div class="relative w-full max-w-[480px] bg-white rounded-3xl p-6 shadow-[0_15px_40px_rgba(10,31,68,0.06)] border border-gray-100 overflow-hidden transform hover:scale-[1.02] transition-transform duration-500">
                    <div class="flex justify-between items-center mb-6">
                        <div>
                            <p class="text-[10px] text-gray-400 font-semibold uppercase tracking-wider">Growth Indicator</p>
                            <h4 class="font-display font-bold text-primary text-base">Monthly Client Revenue</h4>
                        </div>
                        <span class="text-xs text-green-600 bg-green-50 px-2.5 py-1 rounded-full font-bold border border-green-100 flex items-center gap-1">
                            <i data-lucide="trending-up" class="w-3.5 h-3.5"></i> +325%
                        </span>
                    </div>

                    <!-- Graph Canvas -->
                    <div class="h-44 w-full relative">
                        <svg class="absolute inset-0 w-full h-full" viewBox="0 0 100 100" preserveAspectRatio="none">
                            <defs>
                                <linearGradient id="growth-grad" x1="0" y1="0" x2="0" y2="1">
                                    <stop offset="0%" stop-color="#C11F25" stop-opacity="0.15" />
                                    <stop offset="100%" stop-color="#C11F25" stop-opacity="0" />
                                </linearGradient>
                            </defs>
                            <!-- Area under path -->
                            <path d="M0,90 Q15,80 30,55 T60,40 T100,10 L100,100 L0,100 Z" fill="url(#growth-grad)" />
                            <!-- Drawing Path -->
                            <path d="M0,90 Q15,80 30,55 T60,40 T100,10" fill="none" stroke="#C11F25" stroke-width="3" />
                        </svg>
                        <!-- Pulse tracker -->
                        <div class="absolute top-[8%] right-[2%] w-2.5 h-2.5 rounded-full bg-accent flex items-center justify-center">
                            <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-accent opacity-75"></span>
                            <span class="relative inline-flex rounded-full h-1.5 w-1.5 bg-accent"></span>
                        </div>
                    </div>

                    <div class="flex justify-between items-center mt-6 pt-4 border-t border-gray-100 text-xs text-gray-400 font-semibold font-mono">
                        <span>Q1</span>
                        <span>Q2</span>
                        <span>Q3</span>
                        <span>Q4 (Projected)</span>
                    </div>
                </div>

                <!-- Floating Badge -->
                <div class="absolute -bottom-6 -left-4 glass-card p-4 rounded-2xl shadow-2xl flex items-center gap-3.5 animate-float" style="animation-delay: 0.5s;">
                    <div class="w-10 h-10 bg-accent rounded-xl flex items-center justify-center text-white glow-btn shadow-md">
                        <i data-lucide="star" class="w-5 h-5 fill-current"></i>
                    </div>
                    <div>
                        <p class="text-xl font-display font-bold text-primary leading-none">4.9 / 5.0</p>
                        <p class="text-[9px] font-bold text-gray-400 uppercase tracking-widest mt-1">Average Client Rating</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ═══════════════ RECENT PROJECTS PORTFOLIO ═══════════════ --}}
<section class="py-32 relative bg-[#F8FAFC] overflow-hidden border-b border-gray-100">
    <!-- Light grid overlay -->
    <div class="absolute inset-0 grid-overlay-light opacity-50 pointer-events-none"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="flex flex-col md:flex-row md:items-end justify-between mb-12 gap-6">
            <div>
                <h2 class="text-accent font-bold tracking-widest uppercase text-xs mb-3 inline-block px-4 py-1.5 rounded-full bg-red-100/60 border border-red-200/50">Portfolio</h2>
                <h3 class="text-4xl md:text-5xl font-display font-bold text-gradient-dark">Our Recent Projects</h3>
            </div>
            <a href="{{ route('portfolio') }}" class="inline-flex items-center text-primary font-bold hover:text-accent transition group border-b-2 border-transparent hover:border-accent pb-1">
                View All Work <i data-lucide="arrow-right" class="w-5 h-5 ml-2 transform group-hover:translate-x-1 transition"></i>
            </a>
        </div>

        <!-- Filter Buttons -->
        <div class="flex flex-wrap justify-start sm:justify-center gap-3 mb-12">
            <button onclick="filterPortfolio('all', this)" class="portfolio-filter-btn px-6 py-2 rounded-full font-bold text-xs uppercase tracking-wider bg-accent text-white border border-accent shadow-md transition-all duration-300">All Work</button>
            <button onclick="filterPortfolio('design', this)" class="portfolio-filter-btn px-6 py-2 rounded-full font-bold text-xs uppercase tracking-wider bg-white text-gray-500 border border-gray-200 hover:border-accent hover:text-accent transition-all duration-300">UI/UX Design</button>
            <button onclick="filterPortfolio('web', this)" class="portfolio-filter-btn px-6 py-2 rounded-full font-bold text-xs uppercase tracking-wider bg-white text-gray-500 border border-gray-200 hover:border-accent hover:text-accent transition-all duration-300">Web Development</button>
            <button onclick="filterPortfolio('app', this)" class="portfolio-filter-btn px-6 py-2 rounded-full font-bold text-xs uppercase tracking-wider bg-white text-gray-500 border border-gray-200 hover:border-accent hover:text-accent transition-all duration-300">Mobile Apps</button>
        </div>

        <div id="portfolio-grid" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Project 1 -->
            <div data-category="design" class="portfolio-card group relative rounded-[2rem] overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-500 bg-white border border-gray-100 transform hover:-translate-y-2">
                <div class="aspect-[4/3] overflow-hidden relative">
                    <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Fintech Dashboard" class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-700">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                </div>
                <div class="p-8 relative bg-white transform transition-transform duration-300">
                    <a href="{{ route('portfolio') }}" class="absolute -top-6 right-8 w-12 h-12 bg-accent text-white rounded-full flex items-center justify-center shadow-lg transform -translate-y-2 opacity-0 group-hover:opacity-100 group-hover:translate-y-0 transition-all duration-300 hover:bg-black">
                        <i data-lucide="external-link" class="w-5 h-5"></i>
                    </a>
                    <span class="text-accent font-bold uppercase text-xs tracking-wider mb-2 block">Fintech • UI/UX</span>
                    <h4 class="text-2xl font-display font-bold text-primary mb-3">Nexus Banking Admin</h4>
                    <p class="text-gray-500 text-sm leading-relaxed">A complete redesign of an enterprise financial administrative dashboard handling $4B+ in daily transactions.</p>
                </div>
            </div>

            <!-- Project 2 -->
            <div data-category="web" class="portfolio-card group relative rounded-[2rem] overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-500 bg-white border border-gray-100 transform hover:-translate-y-2">
                <div class="aspect-[4/3] overflow-hidden relative">
                    <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Data Analytics App" class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-700">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                </div>
                <div class="p-8 relative bg-white transform transition-transform duration-300">
                    <a href="{{ route('portfolio') }}" class="absolute -top-6 right-8 w-12 h-12 bg-accent text-white rounded-full flex items-center justify-center shadow-lg transform -translate-y-2 opacity-0 group-hover:opacity-100 group-hover:translate-y-0 transition-all duration-300 hover:bg-black">
                        <i data-lucide="external-link" class="w-5 h-5"></i>
                    </a>
                    <span class="text-accent font-bold uppercase text-xs tracking-wider mb-2 block">Data Science • Web App</span>
                    <h4 class="text-2xl font-display font-bold text-primary mb-3">AeroMetrics Platform</h4>
                    <p class="text-gray-500 text-sm leading-relaxed">Real-time aviation data visualization platform built with React and heavily optimized WebGL pipelines.</p>
                </div>
            </div>

            <!-- Project 3 -->
            <div data-category="app" class="portfolio-card group relative rounded-[2rem] overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-500 bg-white border border-gray-100 transform hover:-translate-y-2">
                <div class="aspect-[4/3] overflow-hidden relative">
                    <img src="https://images.unsplash.com/photo-1551650975-87deedd944c3?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Mobile Application" class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-700">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                </div>
                <div class="p-8 relative bg-white transform transition-transform duration-300">
                    <a href="{{ route('portfolio') }}" class="absolute -top-6 right-8 w-12 h-12 bg-accent text-white rounded-full flex items-center justify-center shadow-lg transform -translate-y-2 opacity-0 group-hover:opacity-100 group-hover:translate-y-0 transition-all duration-300 hover:bg-black">
                        <i data-lucide="external-link" class="w-5 h-5"></i>
                    </a>
                    <span class="text-accent font-bold uppercase text-xs tracking-wider mb-2 block">E-Commerce • Hybrid App</span>
                    <h4 class="text-2xl font-display font-bold text-primary mb-3">Luxe Retail iOS/Android</h4>
                    <p class="text-gray-500 text-sm leading-relaxed">A seamless and performant React Native application revolutionizing the luxury goods buying experience globally.</p>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ═══════════════ TESTIMONIALS MARQUEE ═══════════════ --}}
@if(isset($reviews) && $reviews->count() > 0)
<section class="py-32 relative overflow-hidden bg-primary text-white">
    <div class="absolute top-0 right-0 w-1/2 h-full bg-gradient-to-l from-blue-900/50 to-transparent pointer-events-none"></div>
    <div class="absolute -bottom-40 -left-40 w-96 h-96 bg-accent opacity-20 rounded-full blur-[100px] pointer-events-none"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="text-center mb-16 relative z-10">
            <span class="text-white/70 font-bold tracking-widest uppercase text-xs mb-3 inline-block px-4 py-1.5 rounded-full bg-white/10 border border-white/10">Client Success</span>
            <h3 class="text-4xl md:text-5xl font-display font-bold mb-6">Trusted by Industry <span class="text-transparent bg-clip-text bg-gradient-to-r from-white to-red-200 relative inline-block">Leaders<span class="absolute bottom-1 left-0 w-full h-[3px] bg-accent opacity-60"></span></span></h3>
            <p class="text-lg text-blue-100 max-w-2xl mx-auto opacity-85 font-light">Don't just take our word for it. Here is what executives and founders say about partnering with Klick2Up.</p>
        </div>

        <!-- Slider Container -->
        <div class="relative max-w-4xl mx-auto px-4 mt-12" id="testimonial-slider-container">
            <!-- Slides Wrapper -->
            <div class="relative overflow-hidden min-h-[300px] sm:min-h-[220px]">
                @foreach($reviews as $index => $review)
                <div class="testimonial-slide absolute inset-x-0 top-0 opacity-0 transition-all duration-700 ease-in-out transform translate-x-8 pointer-events-none" data-slide-index="{{ $index }}">
                    <div class="bg-white/5 border border-white/10 backdrop-blur-md p-8 md:p-10 rounded-[2.5rem] hover:bg-white/10 transition-colors duration-300 flex flex-col justify-between min-h-[260px] sm:min-h-[200px]">
                        <div>
                            <div class="flex gap-1 text-accent mb-5">
                                @for ($s = 0; $s < $review->stars; $s++)
                                    <i data-lucide="star" class="w-5 h-5 fill-current text-accent"></i>
                                @endfor
                            </div>
                            <p class="text-base md:text-lg font-light leading-relaxed mb-6 opacity-95 italic text-white/90">
                                "{{ $review->review_text }}"
                            </p>
                        </div>
                        <div class="flex items-center gap-4">
                            @if($review->client_avatar)
                            <div class="w-12 h-12 rounded-full overflow-hidden border-2 border-white/20 shadow-md">
                                <img src="{{ $review->client_avatar }}" alt="{{ $review->client_name }}" class="w-full h-full object-cover">
                            </div>
                            @else
                            <div class="w-12 h-12 rounded-full bg-accent/20 border-2 border-accent/30 text-accent font-black flex items-center justify-center text-sm shadow-inner">
                                {{ strtoupper(substr($review->client_name, 0, 1)) }}
                            </div>
                            @endif
                            <div>
                                <h5 class="font-bold font-display text-sm text-white">{{ $review->client_name }}</h5>
                                <p class="text-xs text-accent font-semibold uppercase tracking-wider mt-0.5">{{ $review->client_title }}</p>
                                @if($review->project_name)
                                <p class="text-[11px] text-white/50 font-medium mt-1 flex items-center gap-1"><i data-lucide="folder" class="w-3 h-3"></i> Project: {{ $review->project_name }}</p>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            <!-- Left/Right Controls -->
            <button id="prev-slide-btn" class="absolute -left-4 sm:-left-20 top-1/2 -translate-y-1/2 w-12 h-12 rounded-full bg-white/5 border border-white/10 text-white flex items-center justify-center hover:bg-accent hover:border-accent hover:shadow-[0_0_20px_rgba(193,31,37,0.4)] transition-all duration-300 z-30" aria-label="Previous Slide">
                <i data-lucide="chevron-left" class="w-6 h-6"></i>
            </button>
            <button id="next-slide-btn" class="absolute -right-4 sm:-right-20 top-1/2 -translate-y-1/2 w-12 h-12 rounded-full bg-white/5 border border-white/10 text-white flex items-center justify-center hover:bg-accent hover:border-accent hover:shadow-[0_0_20px_rgba(193,31,37,0.4)] transition-all duration-300 z-30" aria-label="Next Slide">
                <i data-lucide="chevron-right" class="w-6 h-6"></i>
            </button>

            <!-- Navigation Dots -->
            <div class="flex justify-center gap-2 mt-8" id="slider-dots-container">
                @foreach($reviews as $index => $review)
                <button class="slider-dot w-2.5 h-2.5 rounded-full bg-white/20 hover:bg-white/50 transition-all duration-300" data-dot-index="{{ $index }}" aria-label="Go to slide {{ $index + 1 }}"></button>
                @endforeach
            </div>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 mt-12">
            <!-- Company logos -->
            <div class="pt-12 border-t border-white/10 opacity-50 grayscale flex flex-wrap justify-center items-center gap-12 md:gap-24 relative z-10">
                <i data-lucide="slack" class="w-10 h-10 text-white/80 hover:grayscale-0 hover:text-white transition duration-300 cursor-pointer"></i>
                <i data-lucide="trello" class="w-10 h-10 text-white/80 hover:grayscale-0 hover:text-white transition duration-300 cursor-pointer"></i>
                <i data-lucide="figma" class="w-10 h-10 text-white/80 hover:grayscale-0 hover:text-white transition duration-300 cursor-pointer"></i>
                <i data-lucide="framer" class="w-10 h-10 text-white/80 hover:grayscale-0 hover:text-white transition duration-300 cursor-pointer"></i>
                <i data-lucide="codepen" class="w-10 h-10 text-white/80 hover:grayscale-0 hover:text-white transition duration-300 cursor-pointer"></i>
            </div>
        </div>
    </div>
</section>
@endif

{{-- ═══════════════ INDUSTRIES SECTION ═══════════════ --}}
<section class="py-32 bg-white relative overflow-hidden">
    <div class="absolute inset-0 grid-overlay-light opacity-60 pointer-events-none"></div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="text-center mb-16">
            <span class="inline-block px-4 py-1.5 rounded-full bg-red-100/60 border border-red-200/50 text-accent font-bold tracking-widest uppercase text-xs mb-4">Industries We Serve</span>
            <h2 class="text-4xl md:text-5xl font-display font-bold text-gradient-dark pb-2 leading-normal">Built for Every Sector</h2>
            <p class="text-gray-500 max-w-xl mx-auto mt-4 text-sm leading-relaxed font-light">We deliver digital transformation across industries — from healthcare to fintech, retail to logistics.</p>
        </div>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
            @foreach([
                ['icon' => 'shopping-bag',   'label' => 'eCommerce & Retail',     'slug' => 'ecommerce-retail',       'color' => 'text-accent',    'bg' => 'bg-red-50'],
                ['icon' => 'heart-pulse',    'label' => 'Healthcare',              'slug' => 'healthcare-telemedicine', 'color' => 'text-blue-600',  'bg' => 'bg-blue-50'],
                ['icon' => 'credit-card',    'label' => 'FinTech & Payments',      'slug' => 'fintech-payments',       'color' => 'text-green-600', 'bg' => 'bg-green-50'],
                ['icon' => 'truck',          'label' => 'Logistics & Fleet',       'slug' => 'logistics-fleet',        'color' => 'text-amber-600', 'bg' => 'bg-amber-50'],
                ['icon' => 'home',           'label' => 'Real Estate & PropTech',  'slug' => 'real-estate-proptech',   'color' => 'text-indigo-600','bg' => 'bg-indigo-50'],
                ['icon' => 'graduation-cap', 'label' => 'Education & EdTech',      'slug' => 'education-edtech',       'color' => 'text-purple-600','bg' => 'bg-purple-50'],
                ['icon' => 'clock',          'label' => 'On-Demand Apps',          'slug' => 'on-demand-services',     'color' => 'text-teal-600',  'bg' => 'bg-teal-50'],
                ['icon' => 'settings',       'label' => 'Manufacturing & ERP',     'slug' => 'manufacturing-erp',      'color' => 'text-emerald-600','bg' => 'bg-emerald-50'],
            ] as $ind)
            <a href="{{ route('industries.show', $ind['slug']) }}" class="group p-6 rounded-2xl border border-gray-100 hover:border-accent/20 hover:shadow-md hover:-translate-y-1 transition-all duration-300 flex flex-col items-center text-center gap-3">
                <div class="w-12 h-12 {{ $ind['bg'] }} {{ $ind['color'] }} rounded-xl flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                    <i data-lucide="{{ $ind['icon'] }}" class="w-6 h-6"></i>
                </div>
                <span class="text-sm font-bold text-primary group-hover:text-accent transition-colors duration-300">{{ $ind['label'] }}</span>
            </a>
            @endforeach
        </div>
    </div>
</section>

{{-- ═══════════════ PROFESSIONAL CTA & CONTACT FORM ═══════════════ --}}
<section class="py-32 bg-[#F8FAFC] relative overflow-hidden border-b border-gray-100">
    <!-- Light grid overlay -->
    <div class="absolute inset-0 grid-overlay-light opacity-60 pointer-events-none"></div>

    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="bg-[#051024] rounded-[3rem] p-10 md:p-16 shadow-2xl relative overflow-hidden border border-white/10 flex flex-col lg:flex-row items-center gap-12">
            <!-- Decorative Blur Glows -->
            <div class="absolute top-0 right-0 w-64 h-64 bg-accent opacity-25 rounded-full blur-3xl pointer-events-none transform translate-x-1/2 -translate-y-1/2"></div>
            <div class="absolute bottom-0 left-0 w-64 h-64 bg-blue-500 opacity-25 rounded-full blur-3xl pointer-events-none transform -translate-x-1/2 translate-y-1/2"></div>

            <!-- CTA Left Side Content -->
            <div class="w-full lg:w-1/2 space-y-6 text-left relative z-10">
                <h2 class="text-4xl md:text-5xl font-display font-black text-white leading-tight">Book Free <span class="text-accent underline decoration-4 underline-offset-4">Consultation</span></h2>
                <p class="text-blue-100 opacity-80 leading-relaxed font-light text-sm md:text-base">Get a no-obligation strategy call with our experts. Share your vision and receive a detailed roadmap with transparent pricing — absolutely free.</p>

                <ul class="space-y-3 text-xs md:text-sm text-gray-300 font-medium">
                    <li class="flex items-center gap-2.5"><i data-lucide="check-circle-2" class="w-4.5 h-4.5 text-accent flex-shrink-0"></i> Strict NDA protection guaranteed</li>
                    <li class="flex items-center gap-2.5"><i data-lucide="check-circle-2" class="w-4.5 h-4.5 text-accent flex-shrink-0"></i> Clear milestones and direct developer channels</li>
                    <li class="flex items-center gap-2.5"><i data-lucide="check-circle-2" class="w-4.5 h-4.5 text-accent flex-shrink-0"></i> Post-handover support SLA coverage included</li>
                </ul>
            </div>

            <!-- CTA Right Side Quick Contact Form -->
            <div class="w-full lg:w-1/2 relative z-10 bg-white/5 border border-white/10 rounded-2xl p-8 backdrop-blur-sm">
                <h4 class="font-display font-bold text-white text-lg mb-6 flex items-center gap-2"><i data-lucide="mail-open" class="w-5 h-5 text-accent"></i> Launch Your Project</h4>
                <form action="{{ route('contact') }}" method="GET" class="space-y-4">
                    <div>
                        <label class="block text-[10px] uppercase tracking-wider font-bold text-gray-400 mb-1.5">Business Email</label>
                        <input required name="email" type="email" placeholder="alex@company.com" class="w-full bg-white/5 border border-white/10 rounded-xl py-3 px-4 text-sm text-white focus:outline-none focus:border-accent focus:ring-2 focus:ring-accent/20 transition-all duration-300">
                    </div>
                    <div>
                        <label class="block text-[10px] uppercase tracking-wider font-bold text-gray-400 mb-1.5">Desired Service</label>
                        <select name="service" class="w-full bg-[#051024] border border-white/10 rounded-xl py-3 px-4 text-sm text-gray-300 focus:outline-none focus:border-accent focus:ring-2 focus:ring-accent/20 transition-all duration-300">
                            <option value="web-dev">Web Development</option>
                            <option value="uiux">Web Design (UI/UX)</option>
                            <option value="mobile-apps">Hybrid Mobile Apps</option>
                            <option value="seo">SEO Search Optimization</option>
                            <option value="data-dash">Data Analytics & Dashboards</option>
                        </select>
                    </div>
                    <button type="submit" class="w-full bg-accent text-white font-bold py-3.5 rounded-xl transition-all duration-300 hover:bg-white hover:text-primary shadow-lg hover:shadow-xl glow-btn flex justify-center items-center gap-2">
                        Send Request <i data-lucide="send" class="w-4 h-4"></i>
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection

@section('scripts')
<script>
    document.addEventListener('DOMContentLoaded', () => {
        // 1. SVG Technology Node Network Interactions
        const techNodes = document.querySelectorAll('.tech-node');
        const hubTitle = document.getElementById('hub-title');
        const hubDesc = document.getElementById('hub-desc');
        const hubIconContainer = document.getElementById('hub-icon-container');
        const centralHub = document.getElementById('central-hub');

        if (techNodes.length > 0 && hubTitle && hubDesc && hubIconContainer && centralHub) {
            // Default state values
            const defaultHubContent = {
                title: "Growth Engine",
                desc: "Hover a service node to trace the data highway.",
                icon: "activity",
                colorClass: "text-accent",
                bgClass: "bg-accent/15",
                borderClass: "border-accent/25"
            };

            const serviceDetails = {
                uiux: {
                    title: "UI/UX Strategy",
                    desc: "Optimizing user journeys for +14.2% conversions.",
                    icon: "layout-template",
                    colorClass: "text-accent",
                    bgClass: "bg-red-500/10",
                    borderClass: "border-red-500/20"
                },
                webdev: {
                    title: "Full-Stack Dev",
                    desc: "Next-gen engineering with <18.4ms latency.",
                    icon: "code",
                    colorClass: "text-blue-600",
                    bgClass: "bg-blue-500/10",
                    borderClass: "border-blue-500/20"
                },
                mobile: {
                    title: "Mobile Apps",
                    desc: "Cross-platform Flutter & native app builds.",
                    icon: "smartphone",
                    colorClass: "text-purple-600",
                    bgClass: "bg-purple-500/10",
                    borderClass: "border-purple-500/20"
                },
                seo: {
                    title: "SEO & Growth",
                    desc: "Scaling visibility to drive organic traffic.",
                    icon: "trending-up",
                    colorClass: "text-green-600",
                    bgClass: "bg-green-500/10",
                    borderClass: "border-green-500/20"
                }
            };

            techNodes.forEach(node => {
                node.addEventListener('mouseenter', () => {
                    const service = node.getAttribute('data-service');
                    const details = serviceDetails[service];
                    if (!details) return;

                    // Update Hub Text & Styles
                    hubTitle.textContent = details.title;
                    hubDesc.textContent = details.desc;
                    centralHub.style.borderColor = 'rgba(193, 31, 37, 0.4)';
                    centralHub.style.boxShadow = '0 0 35px rgba(193, 31, 37, 0.25)';

                    // Update Hub Icon Container class and icon
                    hubIconContainer.className = `relative w-10 h-10 md:w-12 md:h-12 ${details.bgClass} border ${details.borderClass} rounded-full flex items-center justify-center mb-2 pulse-node transition-all duration-300`;
                    hubIconContainer.innerHTML = `<i data-lucide="${details.icon}" class="w-5 h-5 md:w-6 md:h-6 ${details.colorClass} animate-pulse"></i>`;
                    if (typeof lucide !== 'undefined') {
                        lucide.createIcons();
                    }

                    // Highlight corresponding SVG Path
                    techNodes.forEach(n => {
                        const s = n.getAttribute('data-service');
                        const path = document.getElementById(`path-${s}`);
                        const packet = document.getElementById(`packet-${s}`);
                        if (s === service) {
                            if (path) {
                                path.style.opacity = '1.0';
                                path.style.strokeWidth = '4';
                            }
                            if (packet) {
                                packet.style.opacity = '1.0';
                                packet.style.strokeWidth = '4';
                                packet.style.animationDuration = '1.8s'; // zip fast
                            }
                        } else {
                            if (path) path.style.opacity = '0.08';
                            if (packet) packet.style.opacity = '0.1';
                        }
                    });
                });

                node.addEventListener('mouseleave', () => {
                    // Reset Hub
                    hubTitle.textContent = defaultHubContent.title;
                    hubDesc.textContent = defaultHubContent.desc;
                    centralHub.style.borderColor = 'rgba(10, 31, 68, 0.1)';
                    centralHub.style.boxShadow = '0 8px 30px rgba(10, 31, 68, 0.04)';

                    hubIconContainer.className = `relative w-10 h-10 md:w-12 md:h-12 ${defaultHubContent.bgClass} border ${defaultHubContent.borderClass} rounded-full flex items-center justify-center mb-2 pulse-node transition-all duration-300`;
                    hubIconContainer.innerHTML = `<i data-lucide="${defaultHubContent.icon}" class="w-5 h-5 md:w-6 md:h-6 ${defaultHubContent.colorClass} animate-pulse"></i>`;
                    if (typeof lucide !== 'undefined') {
                        lucide.createIcons();
                    }

                    // Reset all SVG Paths
                    techNodes.forEach(n => {
                        const s = n.getAttribute('data-service');
                        const path = document.getElementById(`path-${s}`);
                        const packet = document.getElementById(`packet-${s}`);
                        if (path) {
                            path.style.opacity = '0.3';
                            path.style.strokeWidth = '2.5';
                        }
                        if (packet) {
                            packet.style.opacity = '0.6';
                            packet.style.strokeWidth = '2.5';
                            packet.style.animationDuration = '5s';
                        }
                    });
                });
            });
        }
    });



    // 3. Dynamic Portfolio Filtering
    function filterPortfolio(category, button) {
        const btns = document.querySelectorAll('.portfolio-filter-btn');
        btns.forEach(btn => {
            btn.className = "portfolio-filter-btn px-6 py-2 rounded-full font-bold text-xs uppercase tracking-wider bg-white text-gray-500 border border-gray-200 hover:border-accent hover:text-accent transition-all duration-300";
        });
        button.className = "portfolio-filter-btn px-6 py-2 rounded-full font-bold text-xs uppercase tracking-wider bg-accent text-white border border-accent shadow-md transition-all duration-300";

        const cards = document.querySelectorAll('.portfolio-card');
        cards.forEach(card => {
            const cardCat = card.getAttribute('data-category');
            card.style.transition = 'all 0.4s cubic-bezier(0.4, 0, 0.2, 1)';

            if (category === 'all' || cardCat === category) {
                card.style.display = 'block';
                setTimeout(() => {
                    card.style.opacity = '1';
                    card.style.transform = 'scale(1)';
                }, 50);
            } else {
                card.style.opacity = '0';
                card.style.transform = 'scale(0.9)';
                setTimeout(() => {
                    card.style.display = 'none';
                }, 400);
            }
        });
    }

    // 4. Accordion Controller
    function toggleAccordion(index) {
        const items = document.querySelectorAll('.accordion-item');
        items.forEach((item, i) => {
            const content = item.querySelector('.accordion-content');
            const arrow = item.querySelector('.accordion-arrow');

            if (i === index) {
                content.classList.remove('hidden');
                arrow.classList.add('rotate-180');
                item.classList.add('border-accent/40', 'bg-white', 'shadow-md');
                item.classList.remove('bg-gray-50/50', 'border-gray-200');
            } else {
                content.classList.add('hidden');
                arrow.classList.remove('rotate-180');
                item.classList.remove('border-accent/40', 'bg-white', 'shadow-md');
                item.classList.add('bg-gray-50/50', 'border-gray-200');
            }
        });
    }



    // 5. Testimonial Slider Controller
    document.addEventListener('DOMContentLoaded', () => {
        const slides = document.querySelectorAll('.testimonial-slide');
        const dots = document.querySelectorAll('.slider-dot');
        const prevBtn = document.getElementById('prev-slide-btn');
        const nextBtn = document.getElementById('next-slide-btn');
        if (slides.length === 0) return;

        let currentIndex = 0;
        let slideInterval;

        function showSlide(index) {
            slides.forEach((slide, idx) => {
                if (idx === index) {
                    slide.classList.remove('opacity-0', 'translate-x-8', 'pointer-events-none', 'absolute', 'inset-x-0', 'top-0');
                    slide.classList.add('opacity-100', 'translate-x-0', 'pointer-events-auto', 'relative');
                } else {
                    slide.classList.remove('opacity-100', 'translate-x-0', 'pointer-events-auto', 'relative');
                    slide.classList.add('opacity-0', 'translate-x-8', 'pointer-events-none', 'absolute', 'inset-x-0', 'top-0');
                }
            });

            dots.forEach((dot, idx) => {
                if (idx === index) {
                    dot.classList.remove('bg-white/20');
                    dot.classList.add('bg-accent', 'w-6');
                } else {
                    dot.classList.remove('bg-accent', 'w-6');
                    dot.classList.add('bg-white/20');
                }
            });

            currentIndex = index;
        }

        function nextSlide() {
            let nextIndex = (currentIndex + 1) % slides.length;
            showSlide(nextIndex);
        }

        function prevSlide() {
            let prevIndex = (currentIndex - 1 + slides.length) % slides.length;
            showSlide(prevIndex);
        }

        function startAutoPlay() {
            stopAutoPlay();
            slideInterval = setInterval(nextSlide, 5000);
        }

        function stopAutoPlay() {
            if (slideInterval) clearInterval(slideInterval);
        }

        if (nextBtn) {
            nextBtn.addEventListener('click', () => {
                nextSlide();
                startAutoPlay();
            });
        }

        if (prevBtn) {
            prevBtn.addEventListener('click', () => {
                prevSlide();
                startAutoPlay();
            });
        }

        dots.forEach((dot, idx) => {
            dot.addEventListener('click', () => {
                showSlide(idx);
                startAutoPlay();
            });
        });

        showSlide(0);
        startAutoPlay();
    });
</script>
@endsection
