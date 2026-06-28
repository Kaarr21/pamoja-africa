@extends('layouts.main')

@section('title', 'Insights')

@section('content')
@php
    $techStack = [
        [
            'category' => 'Frontend',
            'items' => [
                ['name' => 'React', 'usage' => 'Used for highly interactive enterprise interfaces and modular component-driven product experiences.'],
                ['name' => 'Vue', 'usage' => 'Applied when teams need progressive enhancement and lightweight reactive frontends.'],
                ['name' => 'Next.js', 'usage' => 'Selected for SEO-aware, performance-focused web applications with modern routing and rendering.'],
                ['name' => 'Flutter', 'usage' => 'Used for cross-platform product delivery when mobile and web experiences must ship from one codebase.'],
            ],
        ],
        [
            'category' => 'Backend',
            'items' => [
                ['name' => 'Laravel', 'usage' => 'Our primary framework for secure business platforms, APIs, and enterprise workflow systems.'],
                ['name' => 'PHP', 'usage' => 'Used for stable, maintainable backend services and mature enterprise application stacks.'],
                ['name' => 'Node.js', 'usage' => 'Implemented for event-driven services, real-time workflows, and integration-heavy applications.'],
                ['name' => 'REST APIs', 'usage' => 'Designed to connect services reliably and standardize communication across distributed systems.'],
            ],
        ],
        [
            'category' => 'Cloud',
            'items' => [
                ['name' => 'AWS', 'usage' => 'Used to build scalable cloud infrastructure with reliability and observability built in.'],
                ['name' => 'Azure', 'usage' => 'Used for enterprise deployments requiring governance, identity integration, and compliance alignment.'],
                ['name' => 'Docker', 'usage' => 'Used to containerize services for consistent environments across development and production.'],
                ['name' => 'Kubernetes', 'usage' => 'Used to orchestrate workloads with resilience, scaling, and service reliability controls.'],
                ['name' => 'Nginx', 'usage' => 'Used as a reverse proxy and traffic layer for secure, performant production delivery.'],
                ['name' => 'Linux', 'usage' => 'Used as the core runtime environment for hardened and efficient infrastructure operations.'],
            ],
        ],
        [
            'category' => 'Data',
            'items' => [
                ['name' => 'PostgreSQL', 'usage' => 'Used for complex relational workloads, transactional integrity, and advanced data modeling.'],
                ['name' => 'MySQL', 'usage' => 'Used for dependable operational data storage in high-throughput business systems.'],
                ['name' => 'Redis', 'usage' => 'Used for caching, queues, and low-latency performance across critical workflows.'],
                ['name' => 'ElasticSearch', 'usage' => 'Used for high-speed search, filtering, and analytics across large datasets.'],
            ],
        ],
        [
            'category' => 'AI',
            'items' => [
                ['name' => 'OpenAI', 'usage' => 'Integrated for intelligent assistants, workflow automation, and content-aware decision support.'],
                ['name' => 'Anthropic', 'usage' => 'Used for model-assisted business workflows where reliability and control are essential.'],
                ['name' => 'Automation', 'usage' => 'Applied to streamline repetitive operations with auditable, policy-aligned execution.'],
                ['name' => 'Machine Learning', 'usage' => 'Used for predictive insights, anomaly detection, and optimization in operational systems.'],
            ],
        ],
    ];
@endphp

<section class="px-6 py-20 md:px-12">
    <div class="mx-auto max-w-7xl">
        <div class="max-w-3xl">
            <p class="text-xs font-bold uppercase tracking-[0.18em] text-primary-dark">Insights</p>
            <h1 class="mt-3 text-3xl font-black tracking-tight text-slate-950 md:text-4xl">Technology capabilities organized for cloud solutions and scalable architecture.</h1>
            <p class="mt-5 text-base leading-8 text-slate-600 md:text-lg">Instead of a wall of logos, we organize technologies by the role they play in enterprise software delivery, product engineering, and system integration.</p>
        </div>
        <div class="mt-10 grid gap-5 md:grid-cols-2 xl:grid-cols-5">
            @foreach ($techStack as $group)
                <article class="rounded-[26px] border border-slate-200 bg-white p-6 shadow-sm">
                    <h2 class="text-lg font-bold text-slate-950">{{ $group['category'] }}</h2>
                    <div class="mt-4 space-y-3">
                        @foreach ($group['items'] as $item)
                            <div class="group rounded-xl border border-slate-200 bg-slate-50 px-3 py-3 transition hover:border-primary/25 hover:bg-white">
                                <p class="text-sm font-semibold text-slate-800">{{ $item['name'] }}</p>
                                <p class="mt-2 max-h-0 overflow-hidden text-xs leading-5 text-slate-600 opacity-0 transition-all duration-200 group-hover:max-h-24 group-hover:opacity-100">
                                    {{ $item['usage'] }}
                                </p>
                            </div>
                        @endforeach
                    </div>
                </article>
            @endforeach
        </div>
    </div>
</section>
@endsection
