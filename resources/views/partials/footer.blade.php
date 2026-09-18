{{-- Footer --}}
<footer class="bg-gray-950 text-gray-400 py-8 border-t border-white/5 relative overflow-hidden mt-auto">
    <div class="absolute -bottom-40 left-1/2 -translate-x-1/2 w-3/4 h-80 bg-gradient-to-t from-rose-500/10 to-transparent rounded-full blur-[120px] pointer-events-none"></div>
    <div class="absolute top-10 right-10 w-96 h-96 bg-blue-500/5 rounded-full blur-[100px] pointer-events-none"></div>

    <div class="max-w-7xl mx-auto px-6 relative z-10">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-12 gap-10 lg:gap-8 mb-8">

            {{-- Brand & Newsletter --}}
            <div class="lg:col-span-4 pr-0 lg:pr-12">
                <a href="{{ route('home') }}" class="block mb-6 w-fit transition-transform hover:scale-105 duration-300">
                    <img src="{{ asset('assets/logo.png') }}" alt="Klick2Up" class="h-10 w-auto object-contain filter brightness-0 invert drop-shadow-[0_0_12px_rgba(255,255,255,0.4)]">
                </a>
                <p class="text-sm leading-relaxed text-gray-400 mb-8 font-light">
                    Engineering highly aesthetic and enterprise-grade digital systems designed to drive measurable corporate growth and secure market leadership.
                </p>
                <form class="relative group" onsubmit="event.preventDefault(); alert('Subscribed successfully!');">
                    <div class="relative">
                        <input type="email" placeholder="Subscribe to our intelligence list" class="w-full bg-white/5 border border-white/10 rounded-xl py-3.5 pl-4 pr-12 text-sm text-white focus:outline-none focus:border-accent focus:ring-2 focus:ring-accent/20 transition-all duration-300 placeholder-gray-500">
                        <button type="submit" class="absolute right-2 top-1/2 -translate-y-1/2 bg-accent text-white p-2 rounded-lg hover:bg-rose-600 transition-colors shadow-md hover:shadow-lg">
                            <i data-lucide="send" class="w-4 h-4"></i>
                        </button>
                    </div>
                </form>
            </div>

            {{-- Services Column --}}
            <div class="lg:col-span-2">
                <h4 class="text-white font-bold font-display text-sm tracking-widest uppercase mb-6 pb-2 border-b border-white/5 inline-block">Services</h4>
                <ul class="space-y-4 text-sm font-medium">
                    <li><a href="{{ route('services.show', 'web-design-ui-ux') }}" class="hover:text-accent transition duration-300 flex items-center gap-1 group"><i data-lucide="chevron-right" class="w-3.5 h-3.5 text-gray-600 group-hover:text-accent group-hover:translate-x-1 transition-all duration-300"></i> Web Design & UI/UX</a></li>
                    <li><a href="{{ route('services.show', 'web-development-services') }}" class="hover:text-accent transition duration-300 flex items-center gap-1 group"><i data-lucide="chevron-right" class="w-3.5 h-3.5 text-gray-600 group-hover:text-accent group-hover:translate-x-1 transition-all duration-300"></i> Web Development</a></li>
                    <li><a href="{{ route('services.show', 'hybrid-app-development') }}" class="hover:text-accent transition duration-300 flex items-center gap-1 group"><i data-lucide="chevron-right" class="w-3.5 h-3.5 text-gray-600 group-hover:text-accent group-hover:translate-x-1 transition-all duration-300"></i> Hybrid App Development</a></li>
                    <li><a href="{{ route('services.show', 'seo-search-engine-optimization') }}" class="hover:text-accent transition duration-300 flex items-center gap-1 group"><i data-lucide="chevron-right" class="w-3.5 h-3.5 text-gray-600 group-hover:text-accent group-hover:translate-x-1 transition-all duration-300"></i> SEO Strategy & Audit</a></li>
                    <li><a href="{{ route('services.show', 'digital-marketing-services') }}" class="hover:text-accent transition duration-300 flex items-center gap-1 group"><i data-lucide="chevron-right" class="w-3.5 h-3.5 text-gray-600 group-hover:text-accent group-hover:translate-x-1 transition-all duration-300"></i> Digital Marketing</a></li>
                    <li><a href="{{ route('services.show', 'business-analysis-consulting') }}" class="hover:text-accent transition duration-300 flex items-center gap-1 group"><i data-lucide="chevron-right" class="w-3.5 h-3.5 text-gray-600 group-hover:text-accent group-hover:translate-x-1 transition-all duration-300"></i> IT Consulting</a></li>
                </ul>
            </div>

            {{-- Company Column --}}
            <div class="lg:col-span-2">
                <h4 class="text-white font-bold font-display text-sm tracking-widest uppercase mb-6 pb-2 border-b border-white/5 inline-block">Company</h4>
                <ul class="space-y-4 text-sm font-medium">
                    <li><a href="{{ route('about') }}" class="hover:text-accent transition duration-300 flex items-center gap-1 group"><i data-lucide="chevron-right" class="w-3.5 h-3.5 text-gray-600 group-hover:text-accent group-hover:translate-x-1 transition-all duration-300"></i> About Us</a></li>
                    <li><a href="{{ route('industries') }}" class="hover:text-accent transition duration-300 flex items-center gap-1 group"><i data-lucide="chevron-right" class="w-3.5 h-3.5 text-gray-600 group-hover:text-accent group-hover:translate-x-1 transition-all duration-300"></i> Industries</a></li>
                    <li><a href="{{ route('portfolio') }}" class="hover:text-accent transition duration-300 flex items-center gap-1 group"><i data-lucide="chevron-right" class="w-3.5 h-3.5 text-gray-600 group-hover:text-accent group-hover:translate-x-1 transition-all duration-300"></i> Portfolio</a></li>
                    <li><a href="{{ route('blog.index') }}" class="hover:text-accent transition duration-300 flex items-center gap-1 group"><i data-lucide="chevron-right" class="w-3.5 h-3.5 text-gray-600 group-hover:text-accent group-hover:translate-x-1 transition-all duration-300"></i> Blog</a></li>
                    <li><a href="{{ route('careers') }}" class="hover:text-accent transition duration-300 flex items-center gap-1 group"><i data-lucide="chevron-right" class="w-3.5 h-3.5 text-gray-600 group-hover:text-accent group-hover:translate-x-1 transition-all duration-300"></i> Careers</a></li>
                    <li><a href="{{ route('contact') }}" class="hover:text-accent transition duration-300 flex items-center gap-1 group"><i data-lucide="chevron-right" class="w-3.5 h-3.5 text-gray-600 group-hover:text-accent group-hover:translate-x-1 transition-all duration-300"></i> Contact</a></li>
                </ul>
            </div>

            {{-- Reach Us Column --}}
            <div class="lg:col-span-4">
                <h4 class="text-white font-bold font-display text-sm tracking-widest uppercase mb-6 pb-2 border-b border-white/5 inline-block">Reach Us</h4>
                <ul class="space-y-5 text-sm">
                    <li class="flex items-start gap-4 group">
                        <div class="bg-white/5 p-2 rounded-xl mt-0.5 border border-white/5 group-hover:border-accent/35 transition-all duration-300"><i data-lucide="map-pin" class="w-4 h-4 text-accent"></i></div>
                        <div><p class="text-white font-semibold mb-0.5">Location</p><p class="text-gray-400 font-light">Ahmedabad, Gujarat, India</p></div>
                    </li>
                    <li class="flex items-start gap-4 group">
                        <div class="bg-white/5 p-2 rounded-xl mt-0.5 border border-white/5 group-hover:border-accent/35 transition-all duration-300"><i data-lucide="phone" class="w-4 h-4 text-accent"></i></div>
                        <div><p class="text-white font-semibold mb-0.5">Phone</p><a href="tel:+919521574858" class="text-gray-400 font-light hover:text-accent transition-colors">+91 9521574858</a></div>
                    </li>
                    <li class="flex items-start gap-4 group">
                        <div class="bg-white/5 p-2 rounded-xl mt-0.5 border border-white/5 group-hover:border-accent/35 transition-all duration-300"><i data-lucide="mail" class="w-4 h-4 text-accent"></i></div>
                        <div><p class="text-white font-semibold mb-0.5">Email</p><a href="mailto:info@klick2up.com" class="text-gray-400 font-light hover:text-accent transition-colors">info@klick2up.com</a></div>
                    </li>
                </ul>
            </div>
        </div>

        {{-- Bottom Row --}}
        <div class="pt-8 border-t border-white/5 flex flex-col md:flex-row justify-between items-center gap-6">
            <div class="text-xs text-gray-500 text-center md:text-left flex flex-col sm:flex-row gap-2 sm:gap-6">
                <p>&copy; {{ date('Y') }} Klick2Up. All rights reserved.</p>
                <div class="hidden sm:block w-px h-4 bg-white/10"></div>
                <div class="flex gap-4 sm:gap-6 justify-center">
                    <a href="#" class="hover:text-accent transition">Privacy Policy</a>
                    <a href="#" class="hover:text-accent transition">Terms of Service</a>
                    <a href="{{ route('seo.sitemap') }}" class="hover:text-accent transition">Sitemap</a>
                </div>
            </div>
            <div class="flex space-x-3">
                <a href="https://x.com/klick2up" target="_blank" rel="noopener noreferrer" class="w-10 h-10 rounded-xl bg-white/5 flex items-center justify-center text-white hover:bg-accent border border-white/10 hover:border-accent/30 hover:shadow-[0_0_15px_rgba(225,29,72,0.4)] transition-all duration-300 transform hover:-translate-y-1"><i data-lucide="twitter" class="w-4 h-4"></i></a>
                <a href="https://www.facebook.com/klick2up" target="_blank" rel="noopener noreferrer" class="w-10 h-10 rounded-xl bg-white/5 flex items-center justify-center text-white hover:bg-accent border border-white/10 hover:border-accent/30 hover:shadow-[0_0_15px_rgba(225,29,72,0.4)] transition-all duration-300 transform hover:-translate-y-1"><i data-lucide="facebook" class="w-4 h-4"></i></a>
                <a href="https://www.linkedin.com/company/klick2up" target="_blank" rel="noopener noreferrer" class="w-10 h-10 rounded-xl bg-white/5 flex items-center justify-center text-white hover:bg-accent border border-white/10 hover:border-accent/30 hover:shadow-[0_0_15px_rgba(225,29,72,0.4)] transition-all duration-300 transform hover:-translate-y-1"><i data-lucide="linkedin" class="w-4 h-4"></i></a>
                <a href="https://www.instagram.com/klick2up" target="_blank" rel="noopener noreferrer" class="w-10 h-10 rounded-xl bg-white/5 flex items-center justify-center text-white hover:bg-accent border border-white/10 hover:border-accent/30 hover:shadow-[0_0_15px_rgba(225,29,72,0.4)] transition-all duration-300 transform hover:-translate-y-1"><i data-lucide="instagram" class="w-4 h-4"></i></a>
                <a href="https://www.youtube.com/@klick2up" target="_blank" rel="noopener noreferrer" class="w-10 h-10 rounded-xl bg-white/5 flex items-center justify-center text-white hover:bg-accent border border-white/10 hover:border-accent/30 hover:shadow-[0_0_15px_rgba(225,29,72,0.4)] transition-all duration-300 transform hover:-translate-y-1"><i data-lucide="youtube" class="w-4 h-4"></i></a>
                <a href="https://github.com/klick2up" target="_blank" rel="noopener noreferrer" class="w-10 h-10 rounded-xl bg-white/5 flex items-center justify-center text-white hover:bg-accent border border-white/10 hover:border-accent/30 hover:shadow-[0_0_15px_rgba(225,29,72,0.4)] transition-all duration-300 transform hover:-translate-y-1"><i data-lucide="github" class="w-4 h-4"></i></a>
            </div>
        </div>
    </div>
</footer>
