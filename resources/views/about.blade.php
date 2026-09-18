@extends('layouts.app')

@section('title', 'About Us - Klick2Up')
@section('meta_desc', 'Learn about Klick2Up — an Ahmedabad-based IT powerhouse specializing in web design, development, SEO, and digital marketing.')

@section('content')

{{-- Hero --}}
<section class="bg-[#F8FAFC] text-primary pt-24 pb-24 relative overflow-hidden border-b border-gray-100">
    <div class="absolute top-0 right-0 w-[600px] h-[600px] bg-red-500/5 rounded-full blur-[100px] mix-blend-multiply opacity-45 pointer-events-none"></div>
    <div class="absolute top-20 left-[-100px] w-[500px] h-[500px] bg-blue-500/5 rounded-full blur-[100px] mix-blend-multiply opacity-40 pointer-events-none"></div>
    <div class="absolute inset-0 bg-[linear-gradient(rgba(10,31,68,0.012)_1px,transparent_1px),linear-gradient(90deg,rgba(10,31,68,0.012)_1px,transparent_1px)] bg-[size:48px_48px] opacity-70"></div>
    <div class="max-w-7xl mx-auto px-4 text-center relative z-10">
        <span class="inline-flex items-center gap-1.5 px-4 py-1.5 rounded-full text-xs font-bold bg-accent/10 text-accent uppercase tracking-wider mb-6">
            <i data-lucide="info" class="w-3.5 h-3.5"></i> Empowering Modern Brands
        </span>
        <h1 class="text-5xl lg:text-7xl font-display font-black tracking-tight text-primary mb-6">About <span class="text-accent">Klick2Up</span></h1>
        <p class="text-xl text-gray-500 max-w-3xl mx-auto leading-relaxed font-light">We are an IT powerhouse engineering scalable software, premium design interfaces, and conversion-optimized growth systems designed to turn vision into market leadership.</p>
    </div>
</section>

{{-- Our Story --}}
<section class="py-24 bg-white relative">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-16 items-center">
            <div class="lg:col-span-6 space-y-6">
                <h2 class="text-xs font-bold text-accent uppercase tracking-widest">Our Legacy</h2>
                <h3 class="text-3xl lg:text-4xl font-display font-bold text-primary">Innovative thinking. Exceptional results.</h3>
                <div class="w-12 h-1 bg-accent rounded-full"></div>
                <p class="text-gray-500 font-light leading-relaxed text-base">Founded on the belief that digital transformation shouldn't be overly complicated, Klick2Up bridges the gap between vision and execution. We simplify technology, so you can focus on building your brand.</p>
                <p class="text-gray-500 font-light leading-relaxed text-base">Based in Ahmedabad, Gujarat, India, we have expanded our footprints globally, serving as a trusted partner for startups looking to launch their MVPs and enterprises aiming to scale complex digital systems.</p>
                <div class="flex items-center gap-6 pt-4">
                    <div class="flex items-center gap-2.5"><i data-lucide="check-circle-2" class="text-accent w-5 h-5"></i><span class="text-sm font-semibold text-gray-700">ISO Standard Code</span></div>
                    <div class="flex items-center gap-2.5"><i data-lucide="check-circle-2" class="text-accent w-5 h-5"></i><span class="text-sm font-semibold text-gray-700">100% IP Ownership</span></div>
                </div>
            </div>
            <div class="lg:col-span-6 grid grid-cols-2 gap-6">
                <div class="space-y-6">
                    <div class="bg-[#F8FAFC] p-8 rounded-3xl border border-gray-100 text-center shadow-sm">
                        <h4 class="text-4xl font-display font-black text-accent mb-2">150+</h4>
                        <p class="text-xs text-gray-400 uppercase tracking-widest font-bold">Projects Delivered</p>
                    </div>
                    <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Team collaborating" class="rounded-3xl shadow-md border border-gray-100 object-cover h-64 w-full">
                </div>
                <div class="space-y-6 pt-8">
                    <img src="https://images.unsplash.com/photo-1600880292203-757bb62b4baf?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Office workspace" class="rounded-3xl shadow-md border border-gray-100 object-cover h-64 w-full">
                    <div class="bg-primary p-8 rounded-3xl text-center shadow-lg relative overflow-hidden">
                        <div class="absolute -bottom-10 -right-10 w-24 h-24 bg-accent/20 rounded-full blur-2xl"></div>
                        <h4 class="text-4xl font-display font-black text-white mb-2">98%</h4>
                        <p class="text-xs text-gray-300 uppercase tracking-widest font-bold">Client Retention</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Core Values --}}
<section class="py-24 bg-gray-50 border-y border-gray-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-xs font-bold text-accent uppercase tracking-widest mb-3">Our Guiding Pillars</h2>
            <h3 class="text-3xl lg:text-4xl font-display font-bold text-primary">Core Values & Standards</h3>
            <div class="w-12 h-1 bg-accent mx-auto mt-4 rounded-full"></div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            @foreach([
                ['icon' => 'lightbulb',     'bg' => 'bg-red-50',   'color' => 'text-accent',    'title' => 'Innovation First',     'desc' => 'We constantly explore new technological architectures, frontend frameworks, and design theories to deliver premium, modern web applications.'],
                ['icon' => 'target',        'bg' => 'bg-blue-50',  'color' => 'text-blue-600',  'title' => 'Conversion-Focused',   'desc' => 'Sleek layouts mean nothing if they do not convert. We architect interfaces explicitly designed to drive actions, leads, and measurable metrics.'],
                ['icon' => 'shield-check',  'bg' => 'bg-green-50', 'color' => 'text-green-600', 'title' => 'Absolute Integrity',   'desc' => 'We practice honest project estimations, complete transparency in timelines, secure source code storage, and full codebase ownership rights handoff.'],
            ] as $v)
            <div class="bg-white p-8 rounded-3xl border border-gray-100 hover:border-accent/20 transition-all duration-300 shadow-sm text-center">
                <div class="w-16 h-16 {{ $v['bg'] }} {{ $v['color'] }} rounded-2xl flex items-center justify-center mx-auto mb-6 shadow-inner">
                    <i data-lucide="{{ $v['icon'] }}" class="w-8 h-8"></i>
                </div>
                <h4 class="text-xl font-bold text-primary mb-3">{{ $v['title'] }}</h4>
                <p class="text-gray-500 text-sm font-light leading-relaxed">{{ $v['desc'] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- Methodology --}}
<section class="py-24 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-xs font-bold text-accent uppercase tracking-widest mb-3">Our Work System</h2>
            <h3 class="text-3xl lg:text-4xl font-display font-bold text-primary">The Klick2Up Methodology</h3>
            <div class="w-12 h-1 bg-accent mx-auto mt-4 rounded-full"></div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
            @foreach([
                ['num' => '01', 'title' => 'Discover & Map',      'desc' => 'We audit your existing processes, interview stakeholders, and compile detailed Software Requirements Specifications (SRS).'],
                ['num' => '02', 'title' => 'Design & Prototype',   'desc' => 'We create high-fidelity UI layout grids, clickable Figma prototypes, and verify user journey mapping before coding.'],
                ['num' => '03', 'title' => 'Clean Engineering',    'desc' => 'Our programmers write standard compliant, performance-optimized source codes backed by comprehensive staging QA checks.'],
                ['num' => '04', 'title' => 'Deploy & Optimize',    'desc' => 'We publish code, implement automated server pipelines, link BI analytics trackers, and configure post-launch monitors.'],
            ] as $step)
            <div class="bg-[#F8FAFC] p-8 rounded-3xl border border-gray-100 shadow-sm hover:border-accent/10 transition-colors">
                <span class="text-5xl font-display font-black text-accent/15 block mb-4">{{ $step['num'] }}</span>
                <h4 class="font-bold text-primary text-lg mb-2">{{ $step['title'] }}</h4>
                <p class="text-gray-500 text-xs font-light leading-relaxed">{{ $step['desc'] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- FAQ --}}
<section class="py-24 bg-white">
    <div class="max-w-4xl mx-auto px-4">
        <div class="text-center mb-16">
            <h2 class="text-xs font-bold text-accent uppercase tracking-wider mb-3">FAQ</h2>
            <h3 class="text-3xl font-display font-bold text-primary">Company & Operations FAQ</h3>
            <div class="w-12 h-1 bg-accent mx-auto mt-4 rounded-full"></div>
        </div>
        <div class="space-y-4" id="faq-container">
            @foreach([
                ['q' => 'Who owns the intellectual property of the developed software?', 'a' => 'Our clients retain 100% ownership of the custom codebases, design templates, database schemas, and documentation. Upon final project signoff and milestone clearance, we hand over full GitHub repository permissions.'],
                ['q' => 'Where is Klick2Up based, and how do we coordinate remotely?', 'a' => 'Klick2Up is headquartered in Ahmedabad, Gujarat, India. We operate globally using Slack, Jira, Google Meet, and email updates to ensure complete alignment across time zones, with weekly demo calls and transparent task tracking.'],
                ['q' => 'Do you offer post-deployment maintenance plans?', 'a' => 'Yes. Every project includes a complimentary post-launch support window (usually 30 days) to address minor bugs. After this, we provide tiered SLA maintenance packages for server updates, security patches, content changes, and periodic performance audits.'],
            ] as $faq)
            <div class="bg-gray-50 rounded-2xl border border-gray-100 overflow-hidden">
                <button class="w-full text-left px-8 py-5 flex justify-between items-center font-bold text-primary hover:text-accent transition-colors duration-300 faq-btn">
                    <span>{{ $faq['q'] }}</span>
                    <i data-lucide="chevron-down" class="w-5 h-5 text-gray-400 faq-icon transition-transform duration-300"></i>
                </button>
                <div class="max-h-0 overflow-hidden transition-all duration-300 faq-answer bg-white/50 border-t border-gray-100/50">
                    <p class="px-8 py-5 text-sm text-gray-500 font-light leading-relaxed">{{ $faq['a'] }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- CTA --}}
<section class="bg-primary text-white py-20 relative overflow-hidden">
    <div class="absolute -bottom-24 left-1/2 -translate-x-1/2 w-2/3 h-64 bg-accent/20 rounded-full blur-[80px] pointer-events-none"></div>
    <div class="max-w-4xl mx-auto px-4 text-center relative z-10 space-y-6">
        <h3 class="text-3xl lg:text-4xl font-display font-bold">Ready to Start Your Digital Upgrade?</h3>
        <p class="text-gray-300 max-w-xl mx-auto font-light leading-relaxed">Let's coordinate on a roadmap session, draft your specifications blueprint, and begin building. Get in touch today.</p>
        <div class="pt-4 flex flex-col sm:flex-row justify-center items-center gap-4">
            <a href="{{ route('contact') }}" class="inline-block bg-accent hover:bg-rose-700 text-white px-8 py-4 rounded-full font-bold transition shadow-lg hover:scale-105 duration-300 text-sm">Schedule Consultation</a>
            <a href="tel:+919521574858" class="inline-flex items-center gap-2 border border-white/20 hover:bg-white/5 text-white px-8 py-4 rounded-full font-bold transition duration-300 text-sm"><i data-lucide="phone" class="w-4 h-4"></i> +91 9521574858</a>
        </div>
    </div>
</section>

@endsection

@section('scripts')
<script>
document.addEventListener('DOMContentLoaded', () => {
    const faqButtons = document.querySelectorAll('.faq-btn');
    faqButtons.forEach(btn => {
        btn.addEventListener('click', () => {
            const answer = btn.nextElementSibling;
            const icon = btn.querySelector('.faq-icon');
            if (answer.style.maxHeight) {
                answer.style.maxHeight = null;
                icon.classList.remove('rotate-180');
            } else {
                document.querySelectorAll('.faq-answer').forEach(ans => ans.style.maxHeight = null);
                document.querySelectorAll('.faq-icon').forEach(ic => ic.classList.remove('rotate-180'));
                answer.style.maxHeight = answer.scrollHeight + 'px';
                icon.classList.add('rotate-180');
            }
        });
    });
});
</script>
@endsection
