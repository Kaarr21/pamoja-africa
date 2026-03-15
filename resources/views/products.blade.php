@extends('layouts.main')
@section('content')
<section class="text-center mb-20">
<span class="inline-flex items-center gap-2 px-4 py-1.5 mb-6 text-[11px] font-bold tracking-[0.2em] text-primary uppercase bg-primary/10 rounded-full border border-primary/20">
                Enterprise Ecosystem
            </span>
<h1 class="text-white text-5xl md:text-6xl font-extrabold tracking-tight mb-6 leading-[1.1]">
                Scale with <span class="premium-text-gradient">Intelligence</span>
</h1>
<p class="text-slate-400 text-lg font-medium leading-relaxed max-w-2xl mx-auto">
                Next-generation infrastructure architected for global scale, real-time intelligence, and Africa's rapid digital transformation.
            </p>
</section>
<div class="grid md:grid-cols-2 gap-8 max-w-6xl mx-auto">
<div class="enterprise-glass rounded-[2.5rem] p-10 flex flex-col aspect-square justify-between group">
<div>
<div class="flex items-start justify-between mb-8">
<div class="size-16 rounded-2xl bg-blue-500/10 border border-blue-500/20 flex items-center justify-center">
<span class="material-symbols-outlined text-blue-400 text-4xl" style="font-variation-settings: 'wght' 300">confirmation_number</span>
</div>
<span class="text-[10px] font-bold text-blue-400 tracking-widest bg-blue-400/10 px-3 py-1.5 rounded-full border border-blue-400/20 uppercase">Core Suite</span>
</div>
<h2 class="text-white text-3xl font-bold mb-4">Pamoja Events</h2>
<p class="text-slate-300 text-base leading-relaxed mb-8">
                        The gold standard for enterprise event management, built for high-stakes coordination and global reach.
                    </p>
<ul class="space-y-4">
<li class="flex items-center gap-3 text-slate-400 text-sm">
<span class="material-symbols-outlined text-blue-400 text-xl">check_circle</span>
                            Global automated ticketing &amp; localized payments
                        </li>
<li class="flex items-center gap-3 text-slate-400 text-sm">
<span class="material-symbols-outlined text-blue-400 text-xl">check_circle</span>
                            Real-time advanced attendee analytics
                        </li>
<li class="flex items-center gap-3 text-slate-400 text-sm">
<span class="material-symbols-outlined text-blue-400 text-xl">check_circle</span>
                            AI-driven live engagement &amp; interaction tools
                        </li>
</ul>
</div>
<button class="w-full mt-10 py-4 px-6 bg-primary text-white font-bold rounded-2xl flex items-center justify-center gap-2 group-hover:btn-glow transition-all active:scale-[0.98]">
                    Learn More <span class="material-symbols-outlined">arrow_right_alt</span>
</button>
</div>
<div class="enterprise-glass rounded-[2.5rem] p-10 flex flex-col aspect-square justify-between group">
<div>
<div class="flex items-start justify-between mb-8">
<div class="size-16 rounded-2xl bg-teal-500/10 border border-teal-500/20 flex items-center justify-center">
<span class="material-symbols-outlined text-teal-400 text-4xl" style="font-variation-settings: 'wght' 300">local_shipping</span>
</div>
<span class="text-[10px] font-bold text-teal-400 tracking-widest bg-teal-400/10 px-3 py-1.5 rounded-full border border-teal-400/20 uppercase">Intelligence</span>
</div>
<h2 class="text-white text-3xl font-bold mb-4">Pamoja Logistics</h2>
<p class="text-slate-300 text-base leading-relaxed mb-8">
                        Next-generation supply chain intelligence, transforming raw data into efficient delivery outcomes.
                    </p>
<ul class="space-y-4">
<li class="flex items-center gap-3 text-slate-400 text-sm">
<span class="material-symbols-outlined text-teal-400 text-xl">check_circle</span>
                            Mission-critical real-time GPS fleet tracking
                        </li>
<li class="flex items-center gap-3 text-slate-400 text-sm">
<span class="material-symbols-outlined text-teal-400 text-xl">check_circle</span>
                            AI-powered smart route optimization
                        </li>
<li class="flex items-center gap-3 text-slate-400 text-sm">
<span class="material-symbols-outlined text-teal-400 text-xl">check_circle</span>
                            Seamless multi-channel inventory sync
                        </li>
</ul>
</div>
<button class="w-full mt-10 py-4 px-6 bg-white/10 hover:bg-white/20 text-white font-bold rounded-2xl border border-white/10 flex items-center justify-center gap-2 transition-all active:scale-[0.98]">
                    Learn More <span class="material-symbols-outlined">arrow_right_alt</span>
</button>
</div>
</div>
@endsection