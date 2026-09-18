<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-50">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Klick2Up Admin')</title>
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary:  '#0A1F44',
                        accent:   '#C11F25',
                        darkBg:   '#051024',
                    },
                    fontFamily: {
                        sans:    ['Inter', 'sans-serif'],
                        display: ['Outfit', 'sans-serif'],
                    }
                }
            }
        }
    </script>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Outfit:wght@500;700;800&display=swap" rel="stylesheet">
    <!-- Lucide Icons -->
    <script src="https://unpkg.com/lucide@latest"></script>
</head>
<body class="h-full bg-gray-50 text-gray-800 antialiased flex">

    {{-- Left Sidebar --}}
    <aside class="w-64 bg-primary text-white flex flex-col justify-between flex-shrink-0 shadow-lg relative z-20">
        <div class="space-y-8 py-6">
            {{-- Logo Header --}}
            <div class="px-6">
                <a href="{{ route('admin.dashboard') }}" class="block">
                    <img src="{{ asset('assets/logo.png') }}" alt="Klick2Up" class="h-9 object-contain filter brightness-0 invert">
                </a>
                <span class="block text-[10px] text-gray-400 font-bold tracking-widest uppercase mt-2">Workspace Admin</span>
            </div>

            {{-- Navigation --}}
            <nav class="space-y-1.5 px-4">
                <a href="{{ route('admin.dashboard') }}" class="flex items-center gap-3 px-4 py-3 rounded-xl text-sm font-semibold transition-all duration-200 {{ request()->routeIs('admin.dashboard') ? 'bg-accent text-white shadow-md' : 'text-gray-300 hover:bg-white/5 hover:text-white' }}">
                    <i data-lucide="layout-dashboard" class="w-4 h-4"></i> Dashboard
                </a>
                <a href="{{ route('admin.leads') }}" class="flex items-center gap-3 px-4 py-3 rounded-xl text-sm font-semibold transition-all duration-200 {{ request()->routeIs('admin.leads') ? 'bg-accent text-white shadow-md' : 'text-gray-300 hover:bg-white/5 hover:text-white' }}">
                    <i data-lucide="inbox" class="w-4 h-4"></i> Manage Leads
                </a>
                <a href="{{ route('admin.blogs.index') }}" class="flex items-center gap-3 px-4 py-3 rounded-xl text-sm font-semibold transition-all duration-200 {{ request()->routeIs('admin.blogs.*') ? 'bg-accent text-white shadow-md' : 'text-gray-300 hover:bg-white/5 hover:text-white' }}">
                    <i data-lucide="book-open" class="w-4 h-4"></i> Manage Blogs
                </a>
                <a href="{{ route('admin.reviews.index') }}" class="flex items-center gap-3 px-4 py-3 rounded-xl text-sm font-semibold transition-all duration-200 {{ request()->routeIs('admin.reviews.*') ? 'bg-accent text-white shadow-md' : 'text-gray-300 hover:bg-white/5 hover:text-white' }}">
                    <i data-lucide="star" class="w-4 h-4"></i> Manage Reviews
                </a>
                <a href="{{ route('admin.projects.index') }}" class="flex items-center gap-3 px-4 py-3 rounded-xl text-sm font-semibold transition-all duration-200 {{ request()->routeIs('admin.projects.*') ? 'bg-accent text-white shadow-md' : 'text-gray-300 hover:bg-white/5 hover:text-white' }}">
                    <i data-lucide="briefcase" class="w-4 h-4"></i> Manage Projects
                </a>

                <div class="border-t border-white/5 my-2"></div>

                <a href="{{ route('admin.analytics') }}" class="flex items-center gap-3 px-4 py-3 rounded-xl text-sm font-semibold transition-all duration-200 {{ request()->routeIs('admin.analytics') ? 'bg-accent text-white shadow-md' : 'text-gray-300 hover:bg-white/5 hover:text-white' }}">
                    <i data-lucide="bar-chart-3" class="w-4 h-4"></i> Page Analytics
                </a>
                
                <a href="{{ route('admin.templates.index') }}" class="flex items-center gap-3 px-4 py-3 rounded-xl text-sm font-semibold transition-all duration-200 {{ request()->routeIs('admin.templates.*') ? 'bg-accent text-white shadow-md' : 'text-gray-300 hover:bg-white/5 hover:text-white' }}">
                    <i data-lucide="layout-template" class="w-4 h-4"></i> Email Templates
                </a>
                
                <a href="{{ route('admin.campaigns.index') }}" class="flex items-center gap-3 px-4 py-3 rounded-xl text-sm font-semibold transition-all duration-200 {{ request()->routeIs('admin.campaigns.*') ? 'bg-accent text-white shadow-md' : 'text-gray-300 hover:bg-white/5 hover:text-white' }}">
                    <i data-lucide="megaphone" class="w-4 h-4"></i> Campaigns
                </a>
                
                <a href="{{ route('admin.mail') }}" class="flex items-center gap-3 px-4 py-3 rounded-xl text-sm font-semibold transition-all duration-200 {{ request()->routeIs('admin.mail*') ? 'bg-accent text-white shadow-md' : 'text-gray-300 hover:bg-white/5 hover:text-white' }}">
                    <i data-lucide="send" class="w-4 h-4"></i> Quick Mail
                </a>
            </nav>
        </div>

        {{-- Footer Sidebar Actions --}}
        <div class="p-4 border-t border-white/5 space-y-2">
            <a href="{{ url('/') }}" target="_blank" class="flex items-center gap-3 px-4 py-2.5 rounded-xl text-xs font-bold text-gray-400 hover:text-white hover:bg-white/5 transition-all">
                <i data-lucide="external-link" class="w-4 h-4"></i> View Website
            </a>
            
            <form action="{{ route('admin.logout') }}" method="POST" onsubmit="return confirm('Are you sure you want to logout?');">
                @csrf
                <button type="submit" class="w-full flex items-center gap-3 px-4 py-2.5 rounded-xl text-xs font-bold text-red-400 hover:text-red-300 hover:bg-red-500/5 transition-all text-left">
                    <i data-lucide="log-out" class="w-4 h-4"></i> Logout
                </button>
            </form>
        </div>
    </aside>

    {{-- Right Main Frame --}}
    <div class="flex-1 flex flex-col overflow-hidden">
        {{-- Top Bar Header --}}
        <header class="h-16 bg-white border-b border-gray-200/80 flex items-center justify-between px-8 flex-shrink-0">
            <h1 class="text-sm font-bold text-primary tracking-wide uppercase">Klick2Up Administration</h1>
            
            <div class="flex items-center gap-3">
                <div class="text-right">
                    <span class="block text-xs font-bold text-primary">{{ Auth::user()->name }}</span>
                    <span class="block text-[10px] text-gray-400 font-medium">Administrator</span>
                </div>
                <div class="w-9 h-9 rounded-full bg-accent/10 text-accent font-black flex items-center justify-center text-xs shadow-inner">
                    A
                </div>
            </div>
        </header>

        {{-- Main scrollable viewport --}}
        <main class="flex-1 overflow-y-auto p-8 relative">
            
            {{-- Notifications Banner --}}
            @if(session('success'))
            <div class="mb-6 bg-emerald-50 border border-emerald-200 text-emerald-800 text-sm font-semibold rounded-2xl p-4 flex items-center justify-between shadow-sm animate-fade-in-up">
                <span class="flex items-center gap-2"><i data-lucide="check-circle" class="w-5 h-5 text-emerald-500"></i> {{ session('success') }}</span>
                <button onclick="this.parentElement.remove()" class="text-emerald-400 hover:text-emerald-600 transition-colors"><i data-lucide="x" class="w-4 h-4"></i></button>
            </div>
            @endif

            @yield('admin_content')

        </main>
    </div>

    <!-- Lucide Icons Init -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            if (typeof lucide !== 'undefined') {
                lucide.createIcons();
            }
        });
    </script>
</body>
</html>
