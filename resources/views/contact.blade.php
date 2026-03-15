@extends('layouts.main')
@section('content')
<div class="max-w-7xl mx-auto px-6 pt-20 pb-12 text-center">
<h1 class="text-white text-5xl md:text-6xl font-extrabold tracking-tight mb-6 max-w-3xl mx-auto leading-tight">
        Connect with our <span class="text-transparent bg-clip-text bg-gradient-to-r from-primary to-accent-purple">Enterprise Team</span>
</h1>
<p class="text-slate-400 text-lg md:text-xl font-light max-w-2xl mx-auto leading-relaxed">
        Reach out for dedicated technical support or tailored enterprise solutions. Our experts are ready to assist you in scaling your infrastructure across Africa.
      </p>
</div>
<section class="max-w-7xl mx-auto px-6 pb-24">
<div class="max-w-3xl mx-auto">
<div class="glass-card glowing-border rounded-3xl p-8 md:p-12 shadow-2xl">
@livewire('contact-form')
</div>
</div>
</section>
<section class="bg-white/[0.02] border-y border-white/5 py-24">
<div class="max-w-7xl mx-auto px-6">
<div class="text-center mb-16">
<h2 class="text-3xl font-bold text-white mb-4">Dedicated Support Hub</h2>
<p class="text-slate-400 font-light">Specialized channels for your organization's unique needs.</p>
</div>
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
<div class="glass-card rounded-2xl p-8 hover:bg-white/[0.06] transition-all">
<div class="size-14 rounded-2xl bg-primary/10 flex items-center justify-center mb-6">
<span class="material-symbols-outlined text-primary text-3xl">engineering</span>
</div>
<h4 class="text-white font-bold text-xl mb-3">Technical Support</h4>
<p class="text-slate-400 text-sm leading-relaxed mb-6 font-light">Direct line for critical system issues, technical implementations, and API documentation guidance.</p>
<a class="inline-flex items-center text-primary text-sm font-bold group" href="#">
              Open Support Ticket
              <span class="material-symbols-outlined text-sm ml-1 group-hover:translate-x-1 transition-transform">arrow_forward</span>
</a>
</div>
<div class="glass-card rounded-2xl p-8 hover:bg-white/[0.06] transition-all">
<div class="size-14 rounded-2xl bg-accent-purple/10 flex items-center justify-center mb-6">
<span class="material-symbols-outlined text-accent-purple text-3xl">business_center</span>
</div>
<h4 class="text-white font-bold text-xl mb-3">Sales Inquiries</h4>
<p class="text-slate-400 text-sm leading-relaxed mb-6 font-light">Custom pricing for large-scale operations, licensing models, and strategic partnership opportunities.</p>
<a class="inline-flex items-center text-accent-purple text-sm font-bold group" href="#">
              Talk to Sales
              <span class="material-symbols-outlined text-sm ml-1 group-hover:translate-x-1 transition-transform">arrow_forward</span>
</a>
</div>
<div class="glass-card rounded-2xl p-8 hover:bg-white/[0.06] transition-all">
<div class="size-14 rounded-2xl bg-teal-500/10 flex items-center justify-center mb-6">
<span class="material-symbols-outlined text-teal-500 text-3xl">public</span>
</div>
<h4 class="text-white font-bold text-xl mb-3">Global Offices</h4>
<p class="text-slate-400 text-sm leading-relaxed mb-6 font-light">Our physical presence spans across major tech hubs. Visit us or reach out to local branches.</p>
<a class="inline-flex items-center text-teal-500 text-sm font-bold group" href="#">
              View Locations
              <span class="material-symbols-outlined text-sm ml-1 group-hover:translate-x-1 transition-transform">arrow_forward</span>
</a>
</div>
</div>
</div>
</section>
<section class="max-w-7xl mx-auto px-6 py-24">
<div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
<div class="space-y-12">
<div class="flex items-start gap-6">
<div class="flex size-14 shrink-0 items-center justify-center rounded-2xl bg-white/5 text-slate-400 border border-white/10">
<span class="material-symbols-outlined text-3xl">location_on</span>
</div>
<div>
<h4 class="text-white font-bold text-lg mb-2">Global Headquarters</h4>
<p class="text-slate-400 leading-relaxed font-light">Pamoja Africa Enterprise Hub<br/>Level 42, Innovation Towers, Nairobi, Kenya</p>
</div>
</div>
<div class="flex items-start gap-6">
<div class="flex size-14 shrink-0 items-center justify-center rounded-2xl bg-white/5 text-slate-400 border border-white/10">
<span class="material-symbols-outlined text-3xl">alternate_email</span>
</div>
<div>
<h4 class="text-white font-bold text-lg mb-2">Direct Channels</h4>
<p class="text-primary text-lg font-semibold">enterprise@pamojaafrica.com</p>
<p class="text-slate-400 font-light mt-1">Guaranteed response within 24 business hours</p>
</div>
</div>
<div class="flex items-start gap-6">
<div class="flex size-14 shrink-0 items-center justify-center rounded-2xl bg-white/5 text-slate-400 border border-white/10">
<span class="material-symbols-outlined text-3xl">headset_mic</span>
</div>
<div>
<h4 class="text-white font-bold text-lg mb-2">Emergency Hotline</h4>
<p class="text-slate-200 text-lg font-semibold">+254 20 123 4567</p>
<p class="text-slate-400 font-light mt-1">Available 24/7 for Tier-1 Enterprise clients</p>
</div>
</div>
</div>
<div class="relative group">
<div class="absolute -inset-1 bg-gradient-to-r from-primary/20 to-accent-purple/20 rounded-3xl blur opacity-75 group-hover:opacity-100 transition duration-1000 group-hover:duration-200"></div>
<div class="relative aspect-video rounded-3xl overflow-hidden border border-white/10 shadow-2xl">
<img alt="Office Location" class="w-full h-full object-cover grayscale brightness-[0.4] contrast-125 transition duration-700 group-hover:scale-105" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCJoOELIoGfIUI-qbA7PSjlktvRonGAraYYKKTlZu8X7aSnHxYnDdk2QzJ9H1os2SlFjo5GABriu9604RhDZTOgAYg7lKUNHNFLtoQtZ5nrOYhmtZ8N1B8YmUkZ237m_tsmEV-ESeEROEfmNDgsFIMlIg_y1BKuLqhFkGUBCeQl42Fx-kok3eTpOw4i_ZCrlMl3NXDFWbNTtsftwTtnDLvVXo3eSk-ZYGKv6g9HBZ3IPTM1wDErmSw1jka7K8oZ_CUFV1gk2zoZ0g"/>
<div class="absolute inset-0 bg-gradient-to-t from-background-dark/80 via-transparent to-transparent"></div>
<div class="absolute bottom-6 left-6 flex items-center gap-3">
<div class="bg-primary px-4 py-1.5 rounded-full text-[11px] font-black uppercase tracking-widest text-white shadow-lg">Live HQ Status</div>
<div class="flex items-center gap-2">
<span class="size-2 bg-emerald-500 rounded-full animate-pulse"></span>
<span class="text-white text-xs font-medium">Operational</span>
</div>
</div>
</div>
</div>
</div>
</section>
@endsection