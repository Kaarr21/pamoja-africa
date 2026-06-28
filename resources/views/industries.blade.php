@extends('layouts.main')

@section('title', 'Industries')

@section('content')
@php
    $capabilities = [
        ['title' => 'Scalable Architecture', 'description' => 'Multi-tenant systems, authentication, and scalable service design.'],
        ['title' => 'ERP & Operations', 'description' => 'Process-heavy business systems built around how teams actually work.'],
        ['title' => 'AI Automation', 'description' => 'Workflow automation, decision support, and intelligent assistants.'],
        ['title' => 'Mobile Apps', 'description' => 'Responsive product experiences for field teams and customer touchpoints.'],
        ['title' => 'Cloud Infrastructure', 'description' => 'Deployment, observability, and reliability for production systems.'],
        ['title' => 'System Integration', 'description' => 'APIs, data sync, and interoperability across existing business tools.'],
    ];
@endphp

<section class="px-6 py-20 md:px-12">
    <div class="mx-auto max-w-7xl">
        <div class="max-w-2xl">
            <p class="text-xs font-bold uppercase tracking-[0.18em] text-primary-dark">Industries</p>
            <h1 class="mt-3 text-3xl font-black tracking-tight text-slate-950 md:text-4xl">Everything required to deliver enterprise software and digital transformation outcomes.</h1>
        </div>
        <div class="mt-10 grid gap-5 md:grid-cols-2 xl:grid-cols-3">
            @foreach ($capabilities as $capability)
                <article class="rounded-[24px] border border-slate-200 bg-white p-6 shadow-sm transition hover:border-primary/20 hover:shadow-lg hover:shadow-blue-100/50">
                    <h2 class="text-lg font-bold text-slate-950">{{ $capability['title'] }}</h2>
                    <p class="mt-3 text-sm leading-7 text-slate-600">{{ $capability['description'] }}</p>
                </article>
            @endforeach
        </div>
    </div>
</section>
@endsection
