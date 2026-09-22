<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Klick2Up - Premium IT Services')</title>
    <meta name="description" content="@yield('meta_desc', 'Klick2Up provides expert IT services, specializing in premium web design, SEO, and top-tier web development in Ahmedabad. Transform your corporate reach today.')">
    <meta name="keywords" content="web development in Ahmedabad, IT company Ahmedabad, web design, SEO agency, mobile app development, Klick2Up">
    <meta name="author" content="Klick2Up">


    <!-- Tailwind CSS CDN -->
    <script src="https://www.klick2up.com/tailwind.js"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary:  '#0A1F44',
                        secondary:'#FFFFFF',
                        accent:   '#C11F25',
                        darkBg:   '#051024',
                    },
                    fontFamily: {
                        sans:    ['Inter', 'sans-serif'],
                        display: ['Outfit', 'sans-serif'],
                    },
                    animation: {
                        'blob':        'blob 7s infinite',
                        'float':       'float 6s ease-in-out infinite',
                        'fade-in-up':  'fadeInUp 1s ease-out forwards',
                    },
                    keyframes: {
                        blob: {
                            '0%':   { transform: 'translate(0px, 0px) scale(1)' },
                            '33%':  { transform: 'translate(30px, -50px) scale(1.1)' },
                            '66%':  { transform: 'translate(-20px, 20px) scale(0.9)' },
                            '100%': { transform: 'translate(0px, 0px) scale(1)' },
                        },
                        float: {
                            '0%, 100%': { transform: 'translateY(0)' },
                            '50%':      { transform: 'translateY(-20px)' },
                        },
                        fadeInUp: {
                            '0%':   { opacity: '0', transform: 'translateY(40px)' },
                            '100%': { opacity: '1', transform: 'translateY(0)' },
                        }
                    }
                }
            }
        }
    </script>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600&family=Outfit:wght@500;700;800;900&display=swap" rel="stylesheet">

    <!-- Lucide Icons -->
    <script src="https://unpkg.com/lucide@latest"></script>

    <!-- Shared CSS -->
    <style>
        .glass-nav {
            background: rgba(255, 255, 255, 0.85);
            backdrop-filter: blur(16px);
            -webkit-backdrop-filter: blur(16px);
        }
        .glass-card {
            background: rgba(255, 255, 255, 0.7);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.5);
        }
        .glass-dark {
            background: rgba(10, 31, 68, 0.60);
            backdrop-filter: blur(24px);
            -webkit-backdrop-filter: blur(24px);
            border: 1px solid rgba(255, 255, 255, 0.08);
        }
        .glass-premium {
            background: rgba(5, 16, 36, 0.6);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.05);
        }
        .glass-premium-light {
            background: rgba(255, 255, 255, 0.75);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.6);
        }
        .text-gradient {
            background: linear-gradient(135deg, #FFFFFF 30%, #a5b4fc 100%);
            -webkit-background-clip: text; background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        .text-gradient-accent {
            background: linear-gradient(135deg, #FF4B53 0%, #C11F25 100%);
            -webkit-background-clip: text; background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        .text-gradient-dark {
            background: linear-gradient(135deg, #0A1F44 0%, #1e293b 100%);
            -webkit-background-clip: text; background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        .hero-mesh {
            background-color: #FFF7F7;
            background-image:
                radial-gradient(circle at 90% 10%, rgba(193, 31, 37, 0.07) 0%, transparent 50%),
                radial-gradient(circle at 10% 90%, rgba(37, 99, 235, 0.06) 0%, transparent 50%),
                radial-gradient(circle at 50% 50%, rgba(240, 244, 255, 0.6) 0%, transparent 60%);
        }
        .grid-overlay { background-size: 50px 50px; background-image: linear-gradient(to right, rgba(255,255,255,0.02) 1px, transparent 1px), linear-gradient(to bottom, rgba(255,255,255,0.02) 1px, transparent 1px); }
        .grid-overlay-light { background-size: 50px 50px; background-image: linear-gradient(to right, rgba(10,31,68,0.025) 1px, transparent 1px), linear-gradient(to bottom, rgba(10,31,68,0.025) 1px, transparent 1px); }
        .glow-btn { box-shadow: 0 0 20px rgba(193,31,37,0.35); }
        .glow-btn:hover { box-shadow: 0 0 35px rgba(193,31,37,0.55); }
        .stagger-1 { animation-delay: 100ms; }
        .stagger-2 { animation-delay: 200ms; }
        .stagger-3 { animation-delay: 300ms; }
        @keyframes marquee { 0% { transform: translateX(0); } 100% { transform: translateX(-50%); } }
        .animate-marquee-track { display: flex; width: max-content; animation: marquee 30s linear infinite; }
        .animate-marquee-track:hover { animation-play-state: paused; }
        @keyframes pulse-ring { 0% { transform: scale(0.65); opacity: 0; } 50% { opacity: 0.5; } 100% { transform: scale(1.3); opacity: 0; } }
        .pulse-node::after { content: ''; position: absolute; width: 100%; height: 100%; top: 0; left: 0; border-radius: 50%; background: inherit; animation: pulse-ring 2s cubic-bezier(0.215, 0.610, 0.355, 1) infinite; }
        @keyframes dash { to { stroke-dashoffset: -40; } }
        .animate-dash-line { stroke-dasharray: 6, 10; animation: dash 5s linear infinite; }
        @keyframes pulse-glow { 0%, 100% { filter: drop-shadow(0 0 3px rgba(193,31,37,0.4)) drop-shadow(0 0 10px rgba(193,31,37,0.2)); } 50% { filter: drop-shadow(0 0 10px rgba(193,31,37,0.9)) drop-shadow(0 0 30px rgba(193,31,37,0.6)); } }
        .node-glow-accent { animation: pulse-glow 3s ease-in-out infinite; }
        @keyframes float-gentle { 0%, 100% { transform: translateY(0); } 50% { transform: translateY(-8px); } }
        .animate-float-slow { animation: float-gentle 5s ease-in-out infinite; }
        .text-glow { text-shadow: 0 0 20px rgba(193,31,37,0.3); }
        input[type="range"] { -webkit-appearance: none; width: 100%; height: 6px; background: rgba(10,31,68,0.1); border-radius: 9999px; outline: none; }
        input[type="range"]::-webkit-slider-thumb { -webkit-appearance: none; appearance: none; width: 20px; height: 20px; border-radius: 50%; background: #C11F25; cursor: pointer; box-shadow: 0 0 10px rgba(193,31,37,0.4); transition: transform 0.1s ease; }
        input[type="range"]::-webkit-slider-thumb:hover { transform: scale(1.2); }
    </style>

    @yield('head')
</head>

<body class="font-sans bg-[#F8FAFC] text-gray-800 antialiased flex flex-col min-h-screen overflow-x-hidden selection:bg-accent selection:text-white">

    @if(session('success'))
        <div id="globalToast" class="fixed top-24 right-4 md:right-8 z-[100] bg-white border border-green-200 shadow-xl rounded-2xl p-4 flex items-start gap-3 transform transition-all duration-500 translate-x-0 opacity-100">
            <div class="bg-green-100 text-green-600 rounded-full p-1.5 flex-shrink-0 mt-0.5">
                <i data-lucide="check" class="w-4 h-4"></i>
            </div>
            <div>
                <h4 class="text-sm font-bold text-gray-900">Success</h4>
                <p class="text-sm text-gray-600 mt-0.5">{{ session('success') }}</p>
            </div>
            <button onclick="document.getElementById('globalToast').style.display='none'" class="text-gray-400 hover:text-gray-600 ml-2">
                <i data-lucide="x" class="w-4 h-4"></i>
            </button>
        </div>
        <script>
            setTimeout(() => {
                const toast = document.getElementById('globalToast');
                if(toast) {
                    toast.classList.add('translate-x-full', 'opacity-0');
                    setTimeout(() => toast.remove(), 500);
                }
            }, 5000);
        </script>
    @endif

    @if(session('error'))
        <div id="globalErrorToast" class="fixed top-24 right-4 md:right-8 z-[100] bg-white border border-red-200 shadow-xl rounded-2xl p-4 flex items-start gap-3 transform transition-all duration-500 translate-x-0 opacity-100">
            <div class="bg-red-100 text-red-600 rounded-full p-1.5 flex-shrink-0 mt-0.5">
                <i data-lucide="alert-circle" class="w-4 h-4"></i>
            </div>
            <div>
                <h4 class="text-sm font-bold text-gray-900">Error</h4>
                <p class="text-sm text-gray-600 mt-0.5">{{ session('error') }}</p>
            </div>
            <button onclick="document.getElementById('globalErrorToast').style.display='none'" class="text-gray-400 hover:text-gray-600 ml-2">
                <i data-lucide="x" class="w-4 h-4"></i>
            </button>
        </div>
        <script>
            setTimeout(() => {
                const toast = document.getElementById('globalErrorToast');
                if(toast) {
                    toast.classList.add('translate-x-full', 'opacity-0');
                    setTimeout(() => toast.remove(), 500);
                }
            }, 5000);
        </script>
    @endif

    @include('partials.header')

    <main class="flex-1">
        @yield('content')
    </main>

    @include('partials.footer')

    <!-- Sticky Contact Form -->
    <button onclick="toggleStickyContact()" class="fixed bottom-6 right-6 bg-accent text-white p-4 rounded-full shadow-2xl hover:bg-accent/90 hover:scale-110 transition-all duration-300 z-40 group flex items-center justify-center">
        <i data-lucide="message-square" class="w-6 h-6"></i>
        <span class="absolute right-full mr-4 bg-gray-900 text-white text-sm font-semibold px-3 py-1.5 rounded-lg opacity-0 group-hover:opacity-100 transition-opacity whitespace-nowrap pointer-events-none">Contact Us</span>
    </button>

    <!-- Sticky Contact Modal -->
    <div id="stickyContactModal" class="fixed inset-0 z-50 hidden opacity-0 transition-opacity duration-300">
        <!-- Backdrop -->
        <div class="absolute inset-0 bg-black/60 backdrop-blur-sm" onclick="toggleStickyContact()"></div>
        
        <!-- Modal Content -->
        <div class="absolute bottom-0 right-0 md:bottom-24 md:right-6 w-full md:w-[400px] bg-white rounded-t-3xl md:rounded-3xl shadow-2xl transform translate-y-full md:translate-y-10 transition-transform duration-300" id="stickyContactPanel">
            <div class="p-6 md:p-8">
                <div class="flex justify-between items-center mb-6">
                    <div>
                        <h3 class="text-xl font-bold text-primary">Get in Touch</h3>
                        <p class="text-xs text-gray-500 mt-1">We respond within 2-4 hours.</p>
                    </div>
                    <button onclick="toggleStickyContact()" class="text-gray-400 hover:text-accent transition-colors">
                        <i data-lucide="x" class="w-6 h-6"></i>
                    </button>
                </div>
                
                <form action="{{ route('contact.submit') }}" method="POST" class="space-y-4">
                    @csrf
                    <div>
                        <label class="block text-xs font-bold text-gray-600 uppercase tracking-wider mb-1">First Name <span class="text-accent">*</span></label>
                        <input type="text" name="first_name" value="{{ old('first_name') }}" required class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-accent focus:ring-2 focus:ring-accent/20 transition-all outline-none bg-gray-50/50 text-sm @error('first_name') border-red-400 @enderror" placeholder="John">
                        @error('first_name')<p class="text-xs text-accent mt-1">{{ $message }}</p>@enderror
                    </div>
                    <div>
                        <label class="block text-xs font-bold text-gray-600 uppercase tracking-wider mb-1">Email Address <span class="text-accent">*</span></label>
                        <input type="email" name="email" value="{{ old('email') }}" required class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-accent focus:ring-2 focus:ring-accent/20 transition-all outline-none bg-gray-50/50 text-sm @error('email') border-red-400 @enderror" placeholder="john@company.com">
                        @error('email')<p class="text-xs text-accent mt-1">{{ $message }}</p>@enderror
                    </div>
                    <div>
                        <label class="block text-xs font-bold text-gray-600 uppercase tracking-wider mb-1">Message <span class="text-accent">*</span></label>
                        <textarea name="message" required rows="3" class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-accent focus:ring-2 focus:ring-accent/20 transition-all outline-none bg-gray-50/50 resize-none text-sm @error('message') border-red-400 @enderror" placeholder="How can we help you?">{{ old('message') }}</textarea>
                        @error('message')<p class="text-xs text-accent mt-1">{{ $message }}</p>@enderror
                    </div>
                    <div>
                        <label class="block text-xs font-bold text-gray-600 uppercase tracking-wider mb-1">Verification Code <span class="text-accent">*</span></label>
                        <div class="flex items-center gap-2">
                            <div class="flex items-center gap-1.5 bg-gray-50 border border-gray-200 rounded-xl p-1 flex-shrink-0">
                                <span class="captcha-img-container inline-block overflow-hidden rounded-lg">
                                    {!! captcha_img('flat') !!}
                                </span>
                                <button type="button" class="reload-captcha-btn p-1.5 text-gray-500 hover:text-accent hover:bg-gray-200 rounded-lg transition-colors duration-200 flex items-center justify-center" title="Refresh Code">
                                    <i data-lucide="refresh-cw" class="w-4 h-4"></i>
                                </button>
                            </div>
                            <input type="text" name="captcha" required class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-accent focus:ring-2 focus:ring-accent/20 transition-all outline-none bg-gray-50/50 text-sm @error('captcha') border-red-400 @enderror" placeholder="Enter code">
                        </div>
                        @error('captcha')<p class="text-xs text-accent mt-1">{{ $message }}</p>@enderror
                    </div>
                    <button type="submit" class="w-full py-3.5 rounded-xl bg-accent text-white font-semibold hover:bg-accent/90 transition-colors shadow-lg shadow-accent/30 flex items-center justify-center gap-2 text-sm">
                        Send Message <i data-lucide="send" class="w-4 h-4"></i>
                    </button>
                </form>
            </div>
        </div>
    </div>

    <!-- Lucide Icons Init -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            if (typeof lucide !== 'undefined') {
                lucide.createIcons();
            }

            document.addEventListener('click', function (e) {
                const btn = e.target.closest('.reload-captcha-btn');
                if (btn) {
                    const container = btn.closest('div').querySelector('.captcha-img-container');
                    if (container) {
                        const img = container.querySelector('img');
                        if (img) {
                            img.src = '{{ captcha_src('flat') }}?' + Math.random();
                        }
                    }
                }
            });

            @if($errors->any() && !request()->routeIs('contact'))
                // Auto-open modal if there are errors and we are not on the main contact page
                setTimeout(() => {
                    toggleStickyContact();
                }, 500);
            @endif
        });

        function toggleStickyContact() {
            const modal = document.getElementById('stickyContactModal');
            const panel = document.getElementById('stickyContactPanel');
            
            if (modal.classList.contains('hidden')) {
                modal.classList.remove('hidden');
                // Small delay to allow display:block to apply before animating opacity/transform
                setTimeout(() => {
                    modal.classList.remove('opacity-0');
                    panel.classList.remove('translate-y-full', 'md:translate-y-10');
                    panel.classList.add('translate-y-0');
                }, 10);
            } else {
                modal.classList.add('opacity-0');
                panel.classList.remove('translate-y-0');
                panel.classList.add('translate-y-full', 'md:translate-y-10');
                
                setTimeout(() => {
                    modal.classList.add('hidden');
                }, 300);
            }
        }
    </script>

    @yield('scripts')

</body>
</html>
