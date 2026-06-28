@extends('layouts.main')

@section('title', 'Services')

@section('content')
@php
    $whatWeBuild = [
        [
            'title' => 'SaaS Platforms',
            'description' => 'Launch subscription-based software products faster with scalable cloud-native architecture built for performance, security, and long-term growth. We design and engineer multi-tenant SaaS applications with role-based access controls, billing integrations, auditability, and modular feature delivery so your product can evolve without costly rewrites. Our implementation approach also includes API connectivity, analytics instrumentation, and resilient infrastructure patterns that support high availability, smooth user experiences, and sustained throughput when your customer base expands across markets.',
        ],
        [
            'title' => 'Enterprise Resource Planning',
            'description' => 'Connect finance, procurement, inventory, human resources, operations, and reporting into one centralized platform that gives leadership complete visibility across the organization. We replace fragmented tools and spreadsheet-driven handoffs with integrated workflows, approval chains, and role-specific dashboards so teams can execute consistently and quickly. The result is cleaner data, faster decision-making, improved compliance, and measurable operational efficiency across departments. We build these systems around your existing policies and business structure so technology strengthens execution instead of disrupting core processes.',
        ],
        [
            'title' => 'Workflow Management Platforms',
            'description' => 'Digitize operational workflows with intelligent tracking, automated reporting, complete audit trails, and integration-ready architecture for high-control environments. We build compliance-ready workflow platforms that improve traceability from request to completion while reducing manual errors and turnaround time. Our systems support configurable processes, approval records, quality checkpoints, and secure role-based access so organizations maintain confidence in execution integrity. By standardizing operations and surfacing real-time insights, your teams can increase throughput and maintain regulatory readiness without sacrificing quality.',
        ],
        [
            'title' => 'AI Automation',
            'description' => 'Reduce repetitive work using AI-powered workflows that automate approvals, document processing, customer interactions, reporting, and operational tasks at scale. We combine business logic, human oversight, and model-assisted execution to create reliable automation systems that fit your governance requirements. From internal process orchestration to customer-facing intelligence, our implementations are designed to deliver practical outcomes: shorter cycle times, fewer manual bottlenecks, improved response quality, and stronger team focus on strategic work. Every automation flow is built with observability and control so leadership can trust performance over time.',
        ],
        [
            'title' => 'Mobile Applications',
            'description' => 'Build fast, secure mobile experiences that allow employees and customers to interact with your systems from anywhere. We deliver native and cross-platform applications with offline-first capabilities, push notifications, secure authentication, and responsive interfaces built for real-world usage. Mobile products are tightly integrated with your enterprise platform so data flows consistently between field teams, branch operations, and central leadership. Whether you are enabling internal workflows or customer self-service, we design for reliability, usability, and maintainability so your mobile channel becomes a high-value extension of your core business systems.',
        ],
        [
            'title' => 'API & Integration Services',
            'description' => 'Connect CRMs, ERPs, payment gateways, cloud services, IoT devices, and third-party applications through secure, scalable APIs that enable reliable data exchange across your ecosystem. We architect integration layers that enforce data consistency, authentication standards, and resilient retry handling so critical workflows do not fail under pressure. Our approach supports both real-time and asynchronous communication patterns, making it possible to modernize legacy stacks without interrupting daily operations. By establishing a strong integration foundation, your organization gains better interoperability, cleaner reporting, and faster execution across systems.',
        ],
    ];
@endphp

<section class="px-6 py-20 md:px-12">
    <div class="mx-auto max-w-7xl">
        <div class="max-w-4xl">
            <p class="text-xs font-bold uppercase tracking-[0.18em] text-primary-dark">Services</p>
            <h1 class="mt-3 text-4xl font-black tracking-tight text-slate-950 md:text-5xl">Solutions Designed Around Your Business</h1>
            <p class="mt-6 text-base leading-8 text-slate-600 md:text-lg">
                Every organization operates differently. That's why we don't force businesses to adapt to generic software. Instead, we deliver custom software and digital transformation solutions that align with your workflows, processes, and long-term objectives.
            </p>
        </div>
        <div class="mt-10 grid gap-6 md:grid-cols-2 xl:grid-cols-3">
            @foreach ($whatWeBuild as $solution)
                <article class="group rounded-[28px] border border-slate-200 bg-white p-7 shadow-sm transition hover:-translate-y-1 hover:shadow-xl hover:shadow-blue-100/60">
                    <h2 class="text-2xl font-bold text-slate-950">{{ $solution['title'] }}</h2>
                    <p class="mt-5 text-sm leading-7 text-slate-600">{{ $solution['description'] }}</p>
                </article>
            @endforeach
        </div>
    </div>
</section>
@endsection
