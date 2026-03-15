<!DOCTYPE html>
<html class="dark" lang="en">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>Pamoja Africa | @yield('title', 'Enterprise SaaS Ecosystem')</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&amp;display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#3B82F6",
                        "navy-900": "#0A0F1D",
                        "navy-800": "#111827",
                        "navy-700": "#1F2937",
                    },
                    fontFamily: {
                        "sans": ["Plus Jakarta Sans", "sans-serif"]
                    },
                },
            },
        }
    </script>
    <style type="text/tailwindcss">
        @layer base {
            body {
                @apply bg-navy-900 text-slate-200 antialiased font-sans;
            }
        }
        .glass-container {
            background: rgba(255, 255, 255, 0.02);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            border: 0.5px solid rgba(255, 255, 255, 0.08);
        }
        .mesh-gradient-hero {
            background-color: #0A0F1D;
            background-image: 
                radial-gradient(at 0% 0%, rgba(59, 130, 246, 0.12) 0px, transparent 50%),
                radial-gradient(at 100% 0%, rgba(99, 102, 241, 0.08) 0px, transparent 50%),
                radial-gradient(at 50% 100%, rgba(59, 130, 246, 0.05) 0px, transparent 50%);
        }
        .soft-glow {
            box-shadow: 0 0 40px -10px rgba(59, 130, 246, 0.15);
        }
        .text-gradient {
            background: linear-gradient(135deg, #FFFFFF 0%, #94A3B8 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
    </style>
    @livewireStyles
</head>
<body class="overflow-x-hidden min-h-screen flex flex-col">
    <header class="sticky top-0 z-50 flex items-center bg-navy-900/80 backdrop-blur-xl px-6 md:px-12 py-4 justify-between border-b border-white/5">
        <div class="flex items-center gap-2">
            <div class="bg-primary/10 p-1.5 rounded-lg">
                <span class="material-symbols-outlined text-primary text-2xl">grid_guides</span>
            </div>
            <h2 class="text-white text-lg font-bold tracking-tight">Pamoja Africa</h2>
        </div>
        <nav class="hidden md:flex items-center gap-8 text-sm font-medium text-slate-400">
            <a class="hover:text-white transition-colors {{ request()->routeIs('home') ? 'text-white' : '' }}" href="{{ route('home') }}">Home</a>
            <a class="hover:text-white transition-colors {{ request()->routeIs('products') ? 'text-white' : '' }}" href="{{ route('products') }}">Products</a>
            <a class="hover:text-white transition-colors {{ request()->routeIs('about') ? 'text-white' : '' }}" href="{{ route('about') }}">About Us</a>
        </nav>
        <div class="flex items-center gap-4">
            <a href="{{ route('contact') }}" class="bg-primary hover:bg-primary/90 text-white px-5 py-2 rounded-full text-sm font-bold transition-all shadow-lg shadow-primary/20">
                Contact
            </a>
            <button class="md:hidden flex size-9 items-center justify-center rounded-full border border-white/10 text-slate-400">
                <span class="material-symbols-outlined text-xl">menu</span>
            </button>
        </div>
    </header>

    <main class="flex-1">
        @yield('content')
    </main>

    <footer class="bg-navy-900 border-t border-white/5 pt-16 pb-8 px-6 md:px-12">
        <div class="max-w-6xl mx-auto grid grid-cols-2 md:grid-cols-4 gap-12 mb-16">
            <div class="col-span-2 md:col-span-1">
                <div class="flex items-center gap-2 mb-6">
                    <div class="bg-primary/10 p-1 rounded-lg">
                        <span class="material-symbols-outlined text-primary text-xl">grid_guides</span>
                    </div>
                    <h2 class="text-white text-lg font-bold tracking-tight">Pamoja Africa</h2>
                </div>
                <p class="text-slate-500 text-sm leading-relaxed max-w-xs">
                    Building the digital infrastructure for Africa's most ambitious enterprises.
                </p>
            </div>
            <div>
                <h4 class="text-white font-bold mb-6">Products</h4>
                <ul class="space-y-4 text-sm text-slate-400">
                    <li><a class="hover:text-primary transition-colors" href="{{ route('products') }}">Pamoja Events</a></li>
                    <li><a class="hover:text-primary transition-colors" href="{{ route('products') }}">Pamoja Logistics</a></li>
                </ul>
            </div>
            <div>
                <h4 class="text-white font-bold mb-6">Company</h4>
                <ul class="space-y-4 text-sm text-slate-400">
                    <li><a class="hover:text-primary transition-colors" href="{{ route('about') }}">About Us</a></li>
                    <li><a class="hover:text-primary transition-colors" href="{{ route('contact') }}">Contact</a></li>
                </ul>
            </div>
            <div>
                <h4 class="text-white font-bold mb-6">Admin</h4>
                <ul class="space-y-4 text-sm text-slate-400">
                    <li><a class="hover:text-primary transition-colors" href="/admin">Dashboard Login</a></li>
                </ul>
            </div>
        </div>
        <div class="max-w-6xl mx-auto flex flex-col md:flex-row items-center justify-between pt-8 border-t border-white/5 gap-6">
            <p class="text-slate-600 text-xs">
                © {{ date('Y') }} Pamoja Africa Enterprise. All rights reserved.
            </p>
        </div>
    </footer>

    @livewireScripts
</body>
</html>
