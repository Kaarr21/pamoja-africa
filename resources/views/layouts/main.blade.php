<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>Pamoja Africa | @yield('title', 'Enterprise SaaS Ecosystem')</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&amp;display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
    <script id="tailwind-config">
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        "primary": "#3B82F6",
                        "primary-dark": "#1D4ED8",
                        "violet": "#7C3AED",
                        "surface": "#F8FAFF",
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
                @apply bg-surface text-slate-800 antialiased font-sans;
            }
        }
        .glass-container {
            background: rgba(255, 255, 255, 0.72);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            border: 1px solid rgba(59, 130, 246, 0.16);
        }
        .page-atmosphere {
            background-image:
                radial-gradient(at 8% 8%, rgba(59, 130, 246, 0.18) 0px, transparent 48%),
                radial-gradient(at 92% 4%, rgba(124, 58, 237, 0.16) 0px, transparent 50%),
                linear-gradient(180deg, #ffffff 0%, #f4f7ff 100%),
                linear-gradient(rgba(148, 163, 184, 0.08) 1px, transparent 1px),
                linear-gradient(90deg, rgba(148, 163, 184, 0.08) 1px, transparent 1px);
            background-size: auto, auto, auto, 28px 28px, 28px 28px;
        }
        .soft-glow {
            box-shadow: 0 22px 45px -30px rgba(29, 78, 216, 0.45);
        }
        .text-gradient {
            background: linear-gradient(135deg, #1D4ED8 0%, #7C3AED 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        @keyframes float-slow {
            0%, 100% { transform: translate3d(0, 0, 0); }
            50% { transform: translate3d(0, -10px, 0); }
        }
        @keyframes float-slower {
            0%, 100% { transform: translate3d(0, 0, 0); }
            50% { transform: translate3d(0, -14px, 0); }
        }
        .animate-float-slow {
            animation: float-slow 7s ease-in-out infinite;
        }
        .animate-float-slower {
            animation: float-slower 9s ease-in-out infinite;
        }
    </style>
    @livewireStyles
</head>
<body class="page-atmosphere overflow-x-hidden min-h-screen flex flex-col">
    <header class="sticky top-0 z-50 flex items-center bg-white/90 backdrop-blur-xl px-6 md:px-12 py-4 justify-between border-b border-blue-100/80">
        <div class="flex items-center gap-2">
            <div class="bg-primary/10 p-1.5 rounded-lg border border-primary/20">
                <span class="material-symbols-outlined text-primary text-2xl">grid_guides</span>
            </div>
            <h2 class="text-slate-900 text-lg font-bold tracking-tight">Pamoja Africa</h2>
        </div>
        <nav class="hidden lg:flex items-center gap-6 text-sm font-medium text-slate-600">
            <a class="hover:text-primary transition-colors" href="{{ route('home') }}#solutions">Solutions</a>
            <a class="hover:text-primary transition-colors" href="{{ route('home') }}#what-we-build">Services</a>
            <a class="hover:text-primary transition-colors" href="{{ route('home') }}#enterprise-capabilities">Industries</a>
            <a class="hover:text-primary transition-colors" href="{{ route('home') }}#testimonials">Case Studies</a>
            <a class="hover:text-primary transition-colors {{ request()->routeIs('about') ? 'text-primary' : '' }}" href="{{ route('about') }}">About</a>
            <a class="hover:text-primary transition-colors" href="{{ route('home') }}#technology-stack">Insights</a>
            <a class="hover:text-primary transition-colors {{ request()->routeIs('contact') ? 'text-primary' : '' }}" href="{{ route('contact') }}">Contact</a>
        </nav>
        <div class="flex items-center gap-4">
            <a href="{{ route('contact') }}" class="hidden sm:inline-flex bg-gradient-to-r from-primary to-violet hover:from-primary-dark hover:to-violet text-white px-5 py-2 rounded-full text-sm font-bold transition-all shadow-lg shadow-primary/20">
                Book Discovery Call
            </a>
            <button class="md:hidden flex size-9 items-center justify-center rounded-full border border-slate-200 text-slate-600">
                <span class="material-symbols-outlined text-xl">menu</span>
            </button>
        </div>
    </header>

    <main class="flex-1">
        @yield('content')
    </main>

    <footer class="bg-white/80 border-t border-blue-100 pt-16 pb-8 px-6 md:px-12 backdrop-blur">
        <div class="max-w-6xl mx-auto grid grid-cols-2 md:grid-cols-4 gap-12 mb-16">
            <div class="col-span-2 md:col-span-1">
                <div class="flex items-center gap-2 mb-6">
                    <div class="bg-primary/10 p-1 rounded-lg border border-primary/20">
                        <span class="material-symbols-outlined text-primary text-xl">grid_guides</span>
                    </div>
                    <h2 class="text-slate-900 text-lg font-bold tracking-tight">Pamoja Africa</h2>
                </div>
                <p class="text-slate-600 text-sm leading-relaxed max-w-xs">
                    Building the digital infrastructure for Africa's most ambitious enterprises.
                </p>
            </div>
            <div>
                <h4 class="text-slate-900 font-bold mb-6">Products</h4>
                <ul class="space-y-4 text-sm text-slate-600">
                    <li><a class="hover:text-primary transition-colors" href="{{ route('home') }}#featured-products">Pamoja Events</a></li>
                    <li><a class="hover:text-primary transition-colors" href="{{ route('home') }}#featured-products">Pamoja Logistics</a></li>
                </ul>
            </div>
            <div>
                <h4 class="text-slate-900 font-bold mb-6">Company</h4>
                <ul class="space-y-4 text-sm text-slate-600">
                    <li><a class="hover:text-primary transition-colors" href="{{ route('about') }}">About Us</a></li>
                    <li><a class="hover:text-primary transition-colors" href="{{ route('contact') }}">Contact</a></li>
                </ul>
            </div>
            <div>
                <h4 class="text-slate-900 font-bold mb-6">Admin</h4>
                <ul class="space-y-4 text-sm text-slate-600">
                    <li><a class="hover:text-primary transition-colors" href="/admin">Dashboard Login</a></li>
                </ul>
            </div>
        </div>
        <div class="max-w-6xl mx-auto flex flex-col md:flex-row items-center justify-between pt-8 border-t border-blue-100 gap-6">
            <p class="text-slate-500 text-xs">
                © {{ date('Y') }} Pamoja Africa Enterprise. All rights reserved.
            </p>
        </div>
    </footer>

    @livewireScripts
</body>
</html>
