@extends('layouts.app')

@section('title', 'Contact Us - Klick2Up')
@section('meta_desc', 'Get in touch with Klick2Up for your web design, development, SEO, and digital marketing needs. Response within 2-4 hours.')

@section('content')

<section class="relative pt-24 pb-16 overflow-hidden border-b border-gray-100">
    {{-- Ahmedabad Map Background --}}
    <div class="absolute inset-0">
        <img src="{{ asset('images/ahmedabad-map.png') }}" alt="" class="w-full h-full object-cover" />
        <div class="absolute inset-0 bg-gradient-to-b from-[#F8FAFC]/90 via-[#F8FAFC]/80 to-[#F8FAFC]/95"></div>
        <div class="absolute inset-0 bg-gradient-to-r from-[#F8FAFC]/85 via-transparent to-[#F8FAFC]/85"></div>
    </div>
    <div class="absolute top-0 right-0 w-[500px] h-[500px] bg-red-500/5 rounded-full blur-[100px] pointer-events-none"></div>
    <div class="max-w-7xl mx-auto px-4 text-center relative z-10">
        <span class="inline-flex items-center gap-1.5 px-4 py-1.5 rounded-full text-xs font-bold bg-accent/10 text-accent uppercase tracking-wider mb-6">
            <i data-lucide="mail" class="w-3.5 h-3.5"></i> Let's Connect
        </span>
        <h1 class="text-5xl lg:text-7xl font-display font-black tracking-tight text-primary mb-6">Contact <span class="text-accent">Us</span></h1>
        <p class="text-xl text-gray-500 max-w-2xl mx-auto leading-relaxed font-light">We respond within 2–4 business hours. Tell us about your project and let's build something extraordinary together.</p>
    </div>
</section>

{{-- Contact Section --}}
<section class="py-24 bg-white relative">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-16">

            {{-- Contact Info --}}
            <div class="lg:col-span-4 space-y-8">
                <div>
                    <h2 class="text-xs font-bold text-accent uppercase tracking-widest mb-3">Get In Touch</h2>
                    <h3 class="text-2xl font-display font-bold text-primary mb-4">We'd love to hear from you</h3>
                    <p class="text-gray-500 text-sm font-light leading-relaxed">Whether you have a project in mind, need expert advice, or just want to explore possibilities — we're here to help.</p>
                </div>

                <div class="space-y-5">
                    <div class="flex items-start gap-4">
                        <div class="w-12 h-12 bg-red-50 text-accent rounded-2xl flex items-center justify-center flex-shrink-0">
                            <i data-lucide="map-pin" class="w-5 h-5"></i>
                        </div>
                        <div>
                            <h4 class="text-sm font-bold text-primary mb-1">Location</h4>
                            <p class="text-sm text-gray-500 font-light">Ahmedabad, Gujarat, India</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-4">
                        <div class="w-12 h-12 bg-red-50 text-accent rounded-2xl flex items-center justify-center flex-shrink-0">
                            <i data-lucide="phone" class="w-5 h-5"></i>
                        </div>
                        <div>
                            <h4 class="text-sm font-bold text-primary mb-1">Phone</h4>
                            <a href="tel:+919521574858" class="text-sm text-gray-500 font-light hover:text-accent transition">+91 9521574858</a>
                        </div>
                    </div>
                    <div class="flex items-start gap-4">
                        <div class="w-12 h-12 bg-red-50 text-accent rounded-2xl flex items-center justify-center flex-shrink-0">
                            <i data-lucide="mail" class="w-5 h-5"></i>
                        </div>
                        <div>
                            <h4 class="text-sm font-bold text-primary mb-1">Email</h4>
                            <a href="mailto:info@klick2up.com" class="text-sm text-gray-500 font-light hover:text-accent transition">info@klick2up.com</a>
                        </div>
                    </div>
                    <div class="flex items-start gap-4">
                        <div class="w-12 h-12 bg-red-50 text-accent rounded-2xl flex items-center justify-center flex-shrink-0">
                            <i data-lucide="clock" class="w-5 h-5"></i>
                        </div>
                        <div>
                            <h4 class="text-sm font-bold text-primary mb-1">Response Time</h4>
                            <p class="text-sm text-gray-500 font-light">2–4 business hours</p>
                        </div>
                    </div>
                </div>

                <div class="bg-[#F8FAFC] p-6 rounded-2xl border border-gray-100">
                    <h4 class="text-sm font-bold text-primary mb-4">What happens next?</h4>
                    <div class="space-y-3">
                        @foreach(['We analyze your requirements', 'We prepare a detailed proposal', 'We schedule a discovery call', 'We start building your vision'] as $i => $step)
                        <div class="flex items-center gap-3">
                            <div class="w-6 h-6 bg-accent text-white rounded-full flex items-center justify-center text-xs font-bold flex-shrink-0">{{ $i + 1 }}</div>
                            <span class="text-sm text-gray-600 font-medium">{{ $step }}</span>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>

            {{-- Contact Form --}}
            <div class="lg:col-span-8">
                @if(session('success'))
                <div class="mb-6 p-5 bg-green-50 border border-green-200 rounded-2xl flex items-start gap-3">
                    <i data-lucide="check-circle-2" class="w-5 h-5 text-green-600 flex-shrink-0 mt-0.5"></i>
                    <p class="text-sm text-green-700 font-medium">{{ session('success') }}</p>
                </div>
                @endif

                @if(session('error'))
                <div class="mb-6 p-5 bg-red-50 border border-red-200 rounded-2xl flex items-start gap-3">
                    <i data-lucide="alert-circle" class="w-5 h-5 text-red-600 flex-shrink-0 mt-0.5"></i>
                    <p class="text-sm text-red-700 font-medium">{{ session('error') }}</p>
                </div>
                @endif

                <div class="bg-[#F8FAFC] p-8 rounded-3xl border border-gray-100 shadow-sm">
                    <h3 class="text-xl font-bold text-primary mb-6">Send Us a Message</h3>

                    @php
                        $selectedService = old('service', request('service'));
                        $calculatorServices = request('services') ? explode(',', request('services')) : [];
                        
                        $isDesign = $selectedService == 'Web Design & UI/UX' || $selectedService == 'uiux' || in_array('design', $calculatorServices);
                        $isDev = $selectedService == 'Web Development' || $selectedService == 'web-dev' || in_array('dev', $calculatorServices);
                        $isApp = $selectedService == 'Hybrid App Development' || $selectedService == 'mobile-apps' || in_array('app', $calculatorServices);
                        $isSeo = $selectedService == 'SEO Services' || $selectedService == 'seo' || in_array('seo', $calculatorServices);
                        $isMarketing = $selectedService == 'Digital Marketing' || $selectedService == 'marketing' || in_array('marketing', $calculatorServices);
                        $isConsulting = $selectedService == 'IT Consulting' || $selectedService == 'data-dash' || $selectedService == 'analytics' || in_array('analytics', $calculatorServices);

                        $defaultMessage = '';
                        if (request('estimate') || request('services')) {
                            $serviceNames = [];
                            if (in_array('design', $calculatorServices)) $serviceNames[] = 'Web Design & UI/UX';
                            if (in_array('dev', $calculatorServices)) $serviceNames[] = 'Web Development';
                            if (in_array('app', $calculatorServices)) $serviceNames[] = 'Hybrid App Development';
                            if (in_array('seo', $calculatorServices)) $serviceNames[] = 'SEO Services';
                            if (in_array('marketing', $calculatorServices)) $serviceNames[] = 'Digital Marketing';
                            if (in_array('analytics', $calculatorServices)) $serviceNames[] = 'IT Consulting';
                            
                            $defaultMessage = "Hi, I checked my project scope on the Klick2Up Estimator and got the following breakdown:\n\n";
                            $defaultMessage .= "- Selected Services: " . (implode(', ', $serviceNames) ?: 'None') . "\n";
                            if (request('scale')) {
                                $defaultMessage .= "- Project Size: " . request('scale') . " screens/pages\n";
                            }
                            if (request('estimate')) {
                                $defaultMessage .= "- Estimated Investment: " . request('estimate') . "\n";
                            }
                            $defaultMessage .= "\nI would like to lock in this proposal and schedule a consultation.";
                        }
                    @endphp

                    <form action="{{ route('contact.submit') }}" method="POST" class="space-y-6">
                        @csrf
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                            <div>
                                <label for="first_name" class="block text-xs font-bold text-gray-600 uppercase tracking-wider mb-2">First Name <span class="text-accent">*</span></label>
                                <input type="text" id="first_name" name="first_name" value="{{ old('first_name') }}" required
                                    class="w-full bg-white border border-gray-200 rounded-xl px-4 py-3 text-sm text-primary focus:outline-none focus:border-accent focus:ring-2 focus:ring-accent/20 transition-all duration-300 @error('first_name') border-red-400 @enderror"
                                    placeholder="John">
                                @error('first_name')<p class="text-xs text-accent mt-1">{{ $message }}</p>@enderror
                            </div>
                            <div>
                                <label for="last_name" class="block text-xs font-bold text-gray-600 uppercase tracking-wider mb-2">Last Name</label>
                                <input type="text" id="last_name" name="last_name" value="{{ old('last_name') }}"
                                    class="w-full bg-white border border-gray-200 rounded-xl px-4 py-3 text-sm text-primary focus:outline-none focus:border-accent focus:ring-2 focus:ring-accent/20 transition-all duration-300"
                                    placeholder="Doe">
                            </div>
                        </div>
                        <input type="text" name="website" tabindex="-1" autocomplete="off"
       style="position:absolute;left:-9999px;">
                        <div>
                            <label for="email" class="block text-xs font-bold text-gray-600 uppercase tracking-wider mb-2">Email Address <span class="text-accent">*</span></label>
                            <input type="email" id="email" name="email" value="{{ old('email', request('email')) }}" required
                                class="w-full bg-white border border-gray-200 rounded-xl px-4 py-3 text-sm text-primary focus:outline-none focus:border-accent focus:ring-2 focus:ring-accent/20 transition-all duration-300 @error('email') border-red-400 @enderror"
                                placeholder="john@company.com">
                            @error('email')<p class="text-xs text-accent mt-1">{{ $message }}</p>@enderror
                        </div>

                        <div>
                            <label for="service" class="block text-xs font-bold text-gray-600 uppercase tracking-wider mb-2">Service Interested In</label>
                            <select id="service" name="service"
                                class="w-full bg-white border border-gray-200 rounded-xl px-4 py-3 text-sm text-primary focus:outline-none focus:border-accent focus:ring-2 focus:ring-accent/20 transition-all duration-300">
                                <option value="">Select a service...</option>
                                <option value="Web Design & UI/UX" {{ $isDesign ? 'selected' : '' }}>Web Design & UI/UX</option>
                                <option value="Web Development" {{ $isDev ? 'selected' : '' }}>Web Development</option>
                                <option value="Hybrid App Development" {{ $isApp ? 'selected' : '' }}>Hybrid App Development</option>
                                <option value="SEO Services" {{ $isSeo ? 'selected' : '' }}>SEO Services</option>
                                <option value="Digital Marketing" {{ $isMarketing ? 'selected' : '' }}>Digital Marketing</option>
                                <option value="IT Consulting" {{ $isConsulting ? 'selected' : '' }}>IT Consulting</option>
                                <option value="Other" {{ $selectedService == 'Other' ? 'selected' : '' }}>Other</option>
                            </select>
                        </div>

                        <div>
                            <label for="message" class="block text-xs font-bold text-gray-600 uppercase tracking-wider mb-2">Your Message <span class="text-accent">*</span></label>
                            <textarea id="message" name="message" rows="6" required
                                class="w-full bg-white border border-gray-200 rounded-xl px-4 py-3 text-sm text-primary focus:outline-none focus:border-accent focus:ring-2 focus:ring-accent/20 transition-all duration-300 resize-none @error('message') border-red-400 @enderror"
                                placeholder="Tell us about your project, goals, timeline, and budget...">{{ old('message', $defaultMessage) }}</textarea>
                            @error('message')<p class="text-xs text-accent mt-1">{{ $message }}</p>@enderror
                        </div>

                        <div>
                            <label for="captcha" class="block text-xs font-bold text-gray-600 uppercase tracking-wider mb-2">Verification Code <span class="text-accent">*</span></label>
                            <div class="flex flex-col sm:flex-row items-stretch sm:items-center gap-3">
                                <div class="flex items-center gap-2 bg-white border border-gray-200 rounded-xl p-1.5 flex-shrink-0 shadow-sm">
                                    <span class="captcha-img-container inline-block overflow-hidden rounded-lg">
                                        {!! captcha_img('flat') !!}
                                    </span>
                                    <button type="button" class="reload-captcha-btn p-2 text-gray-500 hover:text-accent hover:bg-gray-100 rounded-lg transition-colors duration-200 flex items-center justify-center" title="Refresh Code">
                                        <i data-lucide="refresh-cw" class="w-4 h-4"></i>
                                    </button>
                                </div>
                                <input type="text" id="captcha" name="captcha" required
                                    class="w-full bg-white border border-gray-200 rounded-xl px-4 py-3 text-sm text-primary focus:outline-none focus:border-accent focus:ring-2 focus:ring-accent/20 transition-all duration-300 @error('captcha') border-red-400 @enderror"
                                    placeholder="Enter verification code">
                            </div>
                            @error('captcha')<p class="text-xs text-accent mt-1">{{ $message }}</p>@enderror
                        </div>

                        <button type="submit"
                            class="w-full bg-accent hover:bg-primary text-white font-bold py-4 rounded-xl transition-all duration-300 shadow-lg hover:shadow-xl hover:-translate-y-0.5 flex items-center justify-center gap-2">
                            <i data-lucide="send" class="w-4 h-4"></i> Send Message
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

@section('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function () {
        document.querySelectorAll('.reload-captcha-btn').forEach(function (btn) {
            btn.addEventListener('click', function () {
                const container = this.closest('div').querySelector('.captcha-img-container');
                if (container) {
                    const img = container.querySelector('img');
                    if (img) {
                        img.src = '{{ captcha_src('flat') }}?' + Math.random();
                    }
                }
            });
        });
    });
</script>
@endsection

@endsection
