@extends('layouts.main')
@section('content')
<section class="mesh-gradient-hero relative px-6 py-16 md:py-28 overflow-hidden text-center">
<div class="absolute top-1/4 -right-20 w-80 h-80 bg-primary/10 blur-[120px] rounded-full"></div>
<div class="max-w-4xl mx-auto relative z-10">
<div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-white/5 border border-white/10 text-primary text-[10px] font-bold tracking-[0.15em] uppercase mb-8">
                    The Modern Standard for African Enterprise
                </div>
<h1 class="text-gradient text-4xl md:text-6xl font-extrabold leading-[1.1] tracking-tight mb-6">
                    Empowering African Enterprise through Modern SaaS
                </h1>
<p class="text-slate-400 text-lg leading-relaxed mb-10 max-w-2xl mx-auto font-medium">
                    Pamoja Africa builds powerful, interconnected tools like Pamoja Events for end-to-end management and Pamoja Logistics for advanced supply chain optimization.
                </p>
<div class="flex flex-col sm:flex-row justify-center gap-4">
<a href="{{ route('products') }}" class="px-10 py-4 bg-primary text-white rounded-xl font-bold tracking-wide transition-all shadow-xl shadow-primary/20 hover:scale-[1.02]">
                        Explore Products
                    </a>
<a href="{{ route('contact') }}" class="px-10 py-4 bg-white/5 text-white border border-white/10 rounded-xl font-bold tracking-wide backdrop-blur-sm hover:bg-white/10 transition-all">
                        Contact Sales
                    </a>
</div>
</div>
</section>
<section class="px-6 py-20 bg-navy-900">
<div class="max-w-6xl mx-auto">
<div class="mb-16 text-center md:text-left">
<h2 class="text-white text-3xl font-bold tracking-tight mb-4">Our Ecosystem</h2>
<p class="text-slate-500 text-base font-medium max-w-xl">Unified SaaS solutions designed to solve the most complex operational challenges across the continent.</p>
</div>
<div class="grid md:grid-cols-2 gap-8">
<div class="glass-container p-8 rounded-[32px] flex flex-col h-full group hover:border-primary/30 transition-all">
<div class="size-16 rounded-2xl bg-primary/10 flex items-center justify-center mb-8 group-hover:scale-110 transition-transform">
<span class="material-symbols-outlined text-primary text-4xl">confirmation_number</span>
</div>
<h3 class="text-white text-2xl font-bold mb-4">Pamoja Events</h3>
<p class="text-slate-400 text-base leading-relaxed mb-8 flex-grow">
                            A comprehensive event management suite featuring encrypted ticketing, dynamic attendee analytics, and seamless multi-channel registration for large-scale enterprise summits.
                        </p>
<button class="flex items-center justify-center gap-2 w-full py-3 bg-white/5 border border-white/10 rounded-xl text-white font-bold hover:bg-primary transition-all">
                            Learn More
                            <span class="material-symbols-outlined text-sm">arrow_forward</span>
</button>
</div>
<div class="glass-container p-8 rounded-[32px] flex flex-col h-full group hover:border-indigo-500/30 transition-all">
<div class="size-16 rounded-2xl bg-indigo-500/10 flex items-center justify-center mb-8 group-hover:scale-110 transition-transform">
<span class="material-symbols-outlined text-indigo-400 text-4xl">deployed_code</span>
</div>
<h3 class="text-white text-2xl font-bold mb-4">Pamoja Logistics</h3>
<p class="text-slate-400 text-base leading-relaxed mb-8 flex-grow">
                            Advanced supply chain engine leveraging AI-driven route optimization, real-time fleet telematics, and predictive maintenance to minimize operational costs.
                        </p>
<button class="flex items-center justify-center gap-2 w-full py-3 bg-white/5 border border-white/10 rounded-xl text-white font-bold hover:bg-indigo-500 transition-all">
                            Learn More
                            <span class="material-symbols-outlined text-sm">arrow_forward</span>
</button>
</div>
</div>
</div>
</section>
<section class="px-6 py-20 bg-navy-900">
<div class="max-w-6xl mx-auto">
<div class="relative overflow-hidden rounded-[40px] bg-gradient-to-br from-primary via-blue-700 to-indigo-900 p-12 text-center md:text-left flex flex-col md:flex-row items-center justify-between gap-8 soft-glow">
<div class="absolute top-0 right-0 w-64 h-64 bg-white/10 blur-[80px] rounded-full"></div>
<div class="relative z-10 max-w-lg">
<h2 class="text-white text-3xl md:text-4xl font-extrabold mb-4 tracking-tight leading-tight">Ready to scale your enterprise?</h2>
<p class="text-white/80 text-lg font-medium leading-relaxed">
                            Join the leading African organizations leveraging Pamoja for sustainable continental growth.
                        </p>
</div>
<div class="relative z-10">
<a href="{{ route('contact') }}" class="bg-white text-primary px-10 py-4 rounded-xl font-bold shadow-2xl hover:scale-105 transition-transform">
                            Schedule a Demo
                        </a>
</div>
</div>
</div>
</section>
@endsection