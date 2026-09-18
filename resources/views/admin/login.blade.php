<!DOCTYPE html>
<html lang="en" class="h-full bg-slate-900">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login | Klick2Up</title>
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
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Outfit:wght@700;800&display=swap" rel="stylesheet">
    <!-- Lucide Icons -->
    <script src="https://unpkg.com/lucide@latest"></script>
</head>
<body class="h-full flex items-center justify-center relative overflow-hidden bg-darkBg text-white antialiased">
    <!-- Background mesh -->
    <div class="absolute inset-0 bg-[linear-gradient(rgba(255,255,255,0.01)_1px,transparent_1px),linear-gradient(90deg,rgba(255,255,255,0.01)_1px,transparent_1px)] bg-[size:40px_40px] opacity-40"></div>
    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[500px] h-[500px] bg-accent/10 rounded-full blur-[120px] mix-blend-multiply pointer-events-none"></div>

    <div class="w-full max-w-md p-8 rounded-3xl bg-white/5 border border-white/10 backdrop-blur-xl shadow-2xl relative z-10 space-y-8">
        {{-- Logo & Header --}}
        <div class="text-center space-y-3">
            <img src="{{ asset('assets/logo.png') }}" alt="Klick2Up" class="h-10 mx-auto object-contain filter brightness-0 invert drop-shadow-[0_0_8px_rgba(255,255,255,0.3)]">
            <h2 class="text-2xl font-display font-black tracking-tight text-white mt-4">Admin Dashboard Login</h2>
            <p class="text-xs text-gray-400">Authenticate to manage contact leads and blog CMS</p>
        </div>

        {{-- Form --}}
        <form action="{{ url('/admin/login') }}" method="POST" class="space-y-6">
            @csrf
            
            {{-- Error messages --}}
            @if($errors->any())
            <div class="bg-accent/10 border border-accent/20 text-accent text-xs rounded-xl p-4 space-y-1">
                @foreach ($errors->all() as $error)
                    <p class="font-semibold flex items-center gap-1.5"><i data-lucide="alert-circle" class="w-4 h-4"></i> {{ $error }}</p>
                @endforeach
            </div>
            @endif

            <div class="space-y-2">
                <label for="email" class="block text-xs font-bold uppercase tracking-wider text-gray-400">Email Address</label>
                <div class="relative">
                    <span class="absolute inset-y-0 left-0 pl-3.5 flex items-center text-gray-500"><i data-lucide="mail" class="w-4 h-4"></i></span>
                    <input type="email" name="email" id="email" value="{{ old('email') }}" required class="w-full bg-white/5 border border-white/10 rounded-xl py-3 pl-10 pr-4 text-sm text-white focus:outline-none focus:border-accent focus:ring-2 focus:ring-accent/10 transition-all placeholder-gray-500" placeholder="admin@klick2up.com">
                </div>
            </div>

            <div class="space-y-2">
                <label for="password" class="block text-xs font-bold uppercase tracking-wider text-gray-400">Password</label>
                <div class="relative">
                    <span class="absolute inset-y-0 left-0 pl-3.5 flex items-center text-gray-500"><i data-lucide="lock" class="w-4 h-4"></i></span>
                    <input type="password" name="password" id="password" required class="w-full bg-white/5 border border-white/10 rounded-xl py-3 pl-10 pr-4 text-sm text-white focus:outline-none focus:border-accent focus:ring-2 focus:ring-accent/10 transition-all placeholder-gray-500" placeholder="••••••••">
                </div>
            </div>

            <div class="flex items-center justify-between">
                <label class="flex items-center gap-2 text-xs text-gray-400 font-semibold cursor-pointer select-none">
                    <input type="checkbox" name="remember" class="rounded bg-white/5 border-white/15 text-accent focus:ring-0 focus:ring-offset-0">
                    Remember Me
                </label>
            </div>

            <button type="submit" class="w-full bg-accent hover:bg-rose-700 text-white font-bold py-3.5 rounded-xl transition shadow-lg flex items-center justify-center gap-2 text-sm hover:scale-[1.01] duration-300">
                Sign In <i data-lucide="log-in" class="w-4 h-4"></i>
            </button>
        </form>
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
