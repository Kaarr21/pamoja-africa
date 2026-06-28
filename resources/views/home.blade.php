@extends('layouts.main')

@section('title', 'Enterprise Software Built for Growth')

@section('content')
@php
    $trustedBy = [
        ['name' => 'Growth teams', 'metric' => 'Fast-moving SaaS'],
        ['name' => 'Operators', 'metric' => 'Enterprise workflows'],
        ['name' => 'Operations leaders', 'metric' => 'Process modernization'],
        ['name' => 'Founders', 'metric' => 'AI automation'],
        ['name' => 'IT leaders', 'metric' => 'Cloud infrastructure'],
    ];

    $industrySolutions = [
        [
            'id' => 'healthcare',
            'title' => 'Healthcare',
            'icon' => 'local_hospital',
            'image' => asset('images/industries/healthcare.jpg'),
            'summary' => 'Clinical operations, patient experience, and healthcare data systems that improve care delivery at scale.',
            'detail' => 'Pamoja builds secure healthcare platforms that connect appointment scheduling, patient records, billing, lab workflows, and reporting into a single digital operating layer. We implement role-based access, audit logs, and interoperability-first APIs so hospitals, clinics, and care networks can modernize safely while maintaining continuity of care.',
            'highlights' => ['Patient portals and appointment orchestration', 'EMR/clinic workflow integrations', 'Claims, billing, and reimbursement automation'],
        ],
        [
            'id' => 'government',
            'title' => 'Government',
            'icon' => 'account_balance',
            'image' => asset('images/industries/government.jpg'),
            'summary' => 'Citizen-centric service delivery platforms with traceability, compliance, and transparent operations.',
            'detail' => 'We design digital public service systems that make applications, approvals, case tracking, and reporting more efficient. Pamoja helps agencies move away from paperwork and fragmented tools by implementing secure service portals, workflow controls, and data integrity safeguards aligned with public-sector governance and accountability standards.',
            'highlights' => ['Citizen service portals and case management', 'Permit and licensing workflow digitization', 'Audit-ready records and compliance monitoring'],
        ],
        [
            'id' => 'education',
            'title' => 'Education',
            'icon' => 'school',
            'image' => asset('images/industries/education.jpg'),
            'summary' => 'Digital learning and institutional management systems that scale academic outcomes.',
            'detail' => 'Pamoja helps schools, universities, and training institutions build integrated digital ecosystems for enrollment, learning delivery, assessments, and performance reporting. We combine student lifecycle management with staff workflows and parent/student communication tools to improve operational efficiency and learner engagement.',
            'highlights' => ['Student information and admissions systems', 'Learning and assessment workflow tools', 'Institution-wide reporting and analytics dashboards'],
        ],
        [
            'id' => 'manufacturing',
            'title' => 'Manufacturing',
            'icon' => 'precision_manufacturing',
            'image' => asset('images/industries/manufacturing.jpg'),
            'summary' => 'Production, inventory, and quality systems built for operational control and throughput.',
            'detail' => 'We build manufacturing software that links procurement, production planning, quality assurance, warehousing, and dispatch in real time. Pamoja enables plant and operations leaders to reduce downtime, enforce process consistency, and monitor efficiency through integrated dashboards and workflow automation across the production lifecycle.',
            'highlights' => ['Production planning and shop-floor tracking', 'Inventory and warehouse synchronization', 'Quality assurance and maintenance workflows'],
        ],
        [
            'id' => 'ngo',
            'title' => 'NGOs',
            'icon' => 'volunteer_activism',
            'image' => asset('images/industries/ngo.jpg'),
            'summary' => 'Program delivery, beneficiary tracking, and donor reporting platforms for impact organizations.',
            'detail' => 'Pamoja supports NGOs with digital platforms that track programs, beneficiaries, grants, and outcomes across regions. We create systems that improve field data collection, automate monitoring and evaluation workflows, and provide transparent donor-ready reporting so organizations can demonstrate impact with confidence.',
            'highlights' => ['Beneficiary lifecycle and field data tools', 'Grant and program management workflows', 'Impact measurement and donor reporting'],
        ],
        [
            'id' => 'agriculture',
            'title' => 'Agriculture',
            'icon' => 'agriculture',
            'image' => asset('images/industries/agriculture.jpg'),
            'summary' => 'Agri-value-chain software for farmers, aggregators, distributors, and processing teams.',
            'detail' => 'We design agricultural technology systems that connect farm operations, cooperative coordination, inventory, and distribution. Pamoja helps agribusinesses digitize procurement, input distribution, harvest tracking, and market access workflows, improving visibility and predictability across the entire value chain.',
            'highlights' => ['Farm and cooperative operations systems', 'Supply and produce tracking workflows', 'Market linkage and logistics coordination'],
        ],
        [
            'id' => 'finance',
            'title' => 'Finance',
            'icon' => 'payments',
            'image' => asset('images/industries/finance.jpg'),
            'summary' => 'Secure fintech and financial operations platforms with high integrity and reliability.',
            'detail' => 'Pamoja builds financial systems for digital payments, loan operations, reconciliation, and customer account management. Our approach emphasizes transaction integrity, fraud-aware workflows, and resilient API connectivity so banks, fintechs, and financial service providers can scale confidently while protecting customer trust.',
            'highlights' => ['Payments and transaction workflow platforms', 'Lending and account lifecycle systems', 'Reconciliation, risk, and compliance automation'],
        ],
        [
            'id' => 'logistics',
            'title' => 'Logistics',
            'icon' => 'local_shipping',
            'image' => asset('images/industries/logistics.jpg'),
            'summary' => 'End-to-end logistics software for planning, fleet operations, and delivery visibility.',
            'detail' => 'We help logistics and supply-chain businesses modernize dispatch, route planning, tracking, and fulfillment operations with integrated software. Pamoja creates real-time control towers that connect orders, drivers, warehouses, and customers, improving SLA performance, cost efficiency, and operational responsiveness.',
            'highlights' => ['Fleet and dispatch management systems', 'Order-to-delivery tracking platforms', 'Warehouse and route optimization workflows'],
        ],
        [
            'id' => 'retail',
            'title' => 'Retail',
            'icon' => 'storefront',
            'image' => asset('images/industries/retail.jpg'),
            'summary' => 'Unified commerce systems for omnichannel sales, stock control, and customer retention.',
            'detail' => 'Pamoja designs retail platforms that unify point-of-sale, inventory, ecommerce, customer engagement, and reporting. We help retailers deliver consistent customer experiences across stores and digital channels while maintaining accurate stock data, faster replenishment cycles, and stronger decision-making from real-time analytics.',
            'highlights' => ['POS and ecommerce integration systems', 'Inventory and replenishment automation', 'Customer loyalty and retention workflows'],
        ],
        [
            'id' => 'telecom',
            'title' => 'Telecommunications',
            'icon' => 'cell_tower',
            'image' => asset('images/industries/telecommunications.jpg'),
            'summary' => 'Telecom operations software for service assurance, subscriber workflows, and growth.',
            'detail' => 'We build telecom software that supports subscriber management, ticketing, field operations, network performance reporting, and partner ecosystems. Pamoja helps telecom providers automate recurring operational processes, improve service quality, and gain the data visibility needed to grow reliably in competitive markets.',
            'highlights' => ['Subscriber and service request workflows', 'Network operations and field service platforms', 'Performance analytics and operational dashboards'],
        ],
    ];

    $trustProofs = [
        ['title' => 'Enterprise Systems', 'description' => 'Built to handle complex business operations.'],
        ['title' => 'Cloud Ready', 'description' => 'Designed for modern deployment environments.'],
        ['title' => 'Long-Term Partnership', 'description' => 'Supporting clients beyond their initial launch.'],
    ];

    $heroHighlights = [
        ['title' => 'Enterprise SaaS Platforms', 'description' => 'Scalable systems built for thousands of users.'],
        ['title' => 'Custom Business Systems', 'description' => 'ERP, CRM, and specialized operational software.'],
        ['title' => 'AI Automation', 'description' => 'Intelligent workflows that eliminate repetitive work.'],
        ['title' => 'Mobile & Cloud Solutions', 'description' => 'Connected products across web, mobile, and cloud.'],
    ];

    $dashboardWidgets = [
        ['label' => 'Revenue Analytics', 'value' => '13.8M', 'tone' => 'blue'],
        ['label' => 'Customer Management', 'value' => '1,248', 'tone' => 'violet'],
        ['label' => 'AI Assistant', 'value' => 'Active', 'tone' => 'slate'],
        ['label' => 'Workflow Builder', 'value' => '26 flows', 'tone' => 'indigo'],
        ['label' => 'Notifications', 'value' => '18 new', 'tone' => 'blue'],
        ['label' => 'Inventory', 'value' => '94% synced', 'tone' => 'violet'],
        ['label' => 'Projects', 'value' => 'Running', 'tone' => 'slate'],
        ['label' => 'API Calls', 'value' => 'Healthy', 'tone' => 'indigo'],
        ['label' => 'Server Status', 'value' => '99.9%', 'tone' => 'blue'],
    ];

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

    $featuredProductTabs = [
        [
            'id' => 'erp',
            'label' => 'ERP',
            'title' => 'Enterprise Resource Planning Suite',
            'subtitle' => 'Unified operations across finance, inventory, HR, procurement, and reporting.',
            'kpi' => '38% faster operational reporting',
            'status' => 'Live across 6 departments',
            'gradient' => 'from-blue-100 via-indigo-100 to-violet-100',
        ],
        [
            'id' => 'workflow',
            'label' => 'Workflow',
            'title' => 'Workflow Management Platform',
            'subtitle' => 'Process traceability, audit trails, and compliance-ready workflow automation.',
            'kpi' => '52% reduction in manual process handling',
            'status' => 'Compliance workflows enabled',
            'gradient' => 'from-violet-100 via-fuchsia-100 to-blue-100',
        ],
        [
            'id' => 'crm',
            'label' => 'CRM',
            'title' => 'Customer Relationship Platform',
            'subtitle' => 'Lead pipelines, account intelligence, and customer lifecycle visibility.',
            'kpi' => '2.1x increase in qualified pipeline',
            'status' => 'Sales + support unified',
            'gradient' => 'from-sky-100 via-blue-100 to-indigo-100',
        ],
        [
            'id' => 'ai',
            'label' => 'AI',
            'title' => 'AI-Powered Automation Engine',
            'subtitle' => 'Approvals, document handling, and insight generation with human oversight.',
            'kpi' => '41% lower process turnaround time',
            'status' => 'Intelligent workflows deployed',
            'gradient' => 'from-indigo-100 via-violet-100 to-purple-100',
        ],
        [
            'id' => 'analytics',
            'label' => 'Analytics',
            'title' => 'Enterprise Analytics Workspace',
            'subtitle' => 'Executive dashboards, real-time metrics, and strategic decision support.',
            'kpi' => 'Real-time insight across 18 critical metrics',
            'status' => 'Decision-ready reporting',
            'gradient' => 'from-cyan-100 via-blue-100 to-violet-100',
        ],
    ];

    $capabilities = [
        ['title' => 'Scalable Architecture', 'description' => 'Multi-tenant systems, authentication, and scalable service design.'],
        ['title' => 'ERP & Operations', 'description' => 'Process-heavy business systems built around how teams actually work.'],
        ['title' => 'AI Automation', 'description' => 'Workflow automation, decision support, and intelligent assistants.'],
        ['title' => 'Mobile Apps', 'description' => 'Responsive product experiences for field teams and customer touchpoints.'],
        ['title' => 'Cloud Infrastructure', 'description' => 'Deployment, observability, and reliability for production systems.'],
        ['title' => 'System Integration', 'description' => 'APIs, data sync, and interoperability across existing business tools.'],
    ];

    $reasons = [
        ['title' => 'Built for the continent', 'description' => 'We design for African business realities: bandwidth, compliance, payment flows, and support needs.'],
        ['title' => 'Enterprise discipline', 'description' => 'We care about uptime, maintainability, architecture, and shipping software that lasts.'],
        ['title' => 'A team that stays', 'description' => 'You get long-term product ownership, not a one-off build and disappear relationship.'],
    ];

    $process = [
        ['step' => '01', 'title' => 'Discover', 'description' => 'We understand your business goals, workflows, pain points, and users so the platform is aligned with real operational priorities from day one.'],
        ['step' => '02', 'title' => 'Design', 'description' => 'We map user journeys, define system architecture, and create interactive prototypes to validate experience, structure, and delivery direction early.'],
        ['step' => '03', 'title' => 'Build', 'description' => 'We execute agile development with regular demos and iterative feedback loops, ensuring measurable progress and continuous stakeholder visibility.'],
        ['step' => '04', 'title' => 'Validate', 'description' => 'We run functional, security, performance, and user acceptance testing to confirm the solution is stable, safe, and production-ready.'],
        ['step' => '05', 'title' => 'Launch', 'description' => 'We handle deployment, monitoring, documentation, and user training so teams can adopt confidently and operate effectively from release onward.'],
        ['step' => '06', 'title' => 'Grow', 'description' => 'We provide continuous improvements, feature development, and long-term support to keep your platform evolving with business demand.'],
    ];

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

    $testimonials = [
        ['quote' => 'Pamoja delivered a system that matched our process instead of forcing us into someone else’s template.', 'name' => 'Operations Lead', 'company' => 'Enterprise Client'],
        ['quote' => 'The team understood both the product and the operational risk. That combination is rare.', 'name' => 'Founder', 'company' => 'B2B Platform'],
        ['quote' => 'We needed a partner who could ship and stay engaged. That is exactly what we got.', 'name' => 'Director', 'company' => 'Operations Services'],
    ];
@endphp

<section class="relative isolate flex min-h-screen scroll-mt-24 items-center overflow-hidden px-6 py-14 md:px-12 lg:py-20">
    <div class="pointer-events-none absolute inset-0 bg-[radial-gradient(circle_at_10%_14%,rgba(59,130,246,0.18),transparent_26%),radial-gradient(circle_at_90%_10%,rgba(124,58,237,0.16),transparent_24%),radial-gradient(circle_at_50%_100%,rgba(59,130,246,0.10),transparent_26%)]"></div>
    <div class="pointer-events-none absolute inset-0 opacity-[0.32] bg-[linear-gradient(rgba(148,163,184,0.12)_1px,transparent_1px),linear-gradient(90deg,rgba(148,163,184,0.12)_1px,transparent_1px)] bg-[size:28px_28px]"></div>

    <div class="relative mx-auto grid max-w-7xl items-center gap-12 lg:grid-cols-12">
        <div class="lg:col-span-6 xl:col-span-6">
            <div class="inline-flex items-center gap-2 rounded-full border border-primary/15 bg-white/90 px-4 py-1.5 text-[11px] font-bold uppercase tracking-[0.18em] text-primary-dark shadow-sm backdrop-blur">
                SOFTWARE ENGINEERING • AI • CLOUD SOLUTIONS
            </div>

            <h1 class="mt-6 max-w-3xl text-5xl font-black tracking-tight text-slate-950 sm:text-6xl lg:text-7xl lg:leading-[0.97]">
                <span class="block">Building Enterprise Software</span>
                <span class="block text-gradient">That Powers Businesses Across Africa.</span>
            </h1>

            <p class="mt-6 max-w-2xl text-base leading-8 text-slate-600 sm:text-lg">
                Pamoja Africa is a software engineering and digital transformation partner for startups, SMEs, enterprises, and public institutions. We design and build enterprise software, SaaS platforms, and custom software that streamline operations, strengthen decision-making, and unlock measurable growth. Whether you're modernizing legacy business systems, introducing AI automation, or scaling cloud solutions, our product engineering teams deliver secure systems built for long-term performance.
            </p>

            <div class="mt-8 flex flex-col gap-3 sm:flex-row sm:flex-wrap">
                <a href="{{ route('contact') }}" class="inline-flex items-center justify-center rounded-xl bg-gradient-to-r from-primary to-violet px-6 py-3.5 text-sm font-bold tracking-wide text-white shadow-[0_16px_36px_-16px_rgba(59,130,246,0.7)] transition hover:-translate-y-0.5 hover:from-primary-dark hover:to-violet focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-primary/40 focus-visible:ring-offset-2">
                    Start Your Project
                </a>
                <a href="{{ route('home') }}#featured-products" class="inline-flex items-center justify-center rounded-xl border border-primary/15 bg-white/90 px-6 py-3.5 text-sm font-bold tracking-wide text-primary-dark shadow-sm transition hover:-translate-y-0.5 hover:bg-white focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-primary/30 focus-visible:ring-offset-2">
                    Explore Our Work
                </a>
            </div>

            <div class="mt-8 grid gap-4 sm:grid-cols-2">
                @foreach ($heroHighlights as $highlight)
                    <article class="rounded-[24px] border border-slate-200/80 bg-white/90 p-5 shadow-sm transition duration-300 hover:-translate-y-1 hover:shadow-lg hover:shadow-blue-100/60">
                        <h2 class="text-base font-bold text-slate-950">{{ $highlight['title'] }}</h2>
                        <p class="mt-2 text-sm leading-7 text-slate-600">{{ $highlight['description'] }}</p>
                    </article>
                @endforeach
            </div>

            <p class="mt-8 text-sm font-semibold uppercase tracking-[0.12em] text-slate-500">
                Trusted by businesses across Healthcare • Government • Manufacturing • Logistics • Education • NGOs
            </p>
        </div>

        <div class="relative lg:col-span-6 xl:col-span-6">
            <div class="pointer-events-none absolute -left-10 top-8 h-44 w-44 rounded-full bg-primary/20 blur-3xl"></div>
            <div class="pointer-events-none absolute right-0 top-0 h-52 w-52 rounded-full bg-violet/20 blur-3xl"></div>

            <div class="relative mx-auto h-[620px] max-w-[680px] rounded-[34px] border border-white/70 bg-white/80 p-4 shadow-[0_30px_80px_-35px_rgba(15,23,42,0.45)] backdrop-blur-xl">
                <div class="absolute inset-0 rounded-[34px] bg-[radial-gradient(circle_at_50%_0%,rgba(59,130,246,0.10),transparent_38%),radial-gradient(circle_at_100%_0%,rgba(124,58,237,0.12),transparent_30%)]"></div>

                <div class="relative grid h-full grid-cols-12 gap-4 overflow-hidden rounded-[30px] border border-slate-200/80 bg-white/75 p-4">
                    <article class="animate-float-slow col-span-7 rounded-2xl border border-blue-200/70 bg-white/90 p-4 shadow-lg shadow-blue-100/60 transition duration-300 hover:-translate-y-1 hover:translate-x-1">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-xs font-bold uppercase tracking-[0.14em] text-slate-500">Revenue Analytics</p>
                                <h2 class="mt-1 text-lg font-bold text-slate-950">Quarterly Growth</h2>
                            </div>
                            <span class="rounded-full bg-emerald-100 px-2.5 py-1 text-[11px] font-bold text-emerald-700">Live</span>
                        </div>
                        <div class="mt-4 h-24 rounded-2xl bg-[linear-gradient(135deg,rgba(59,130,246,0.14),rgba(124,58,237,0.14))] p-4">
                            <div class="flex h-full items-end gap-2">
                                <div class="h-8 w-3 rounded-full bg-primary/70"></div>
                                <div class="h-12 w-3 rounded-full bg-violet/70"></div>
                                <div class="h-16 w-3 rounded-full bg-primary/80"></div>
                                <div class="h-11 w-3 rounded-full bg-violet/80"></div>
                                <div class="h-20 w-3 rounded-full bg-primary"></div>
                                <div class="h-14 w-3 rounded-full bg-violet"></div>
                            </div>
                        </div>
                    </article>

                    <article class="animate-float-slower col-span-5 rounded-2xl border border-violet-200/70 bg-white/90 p-4 shadow-lg shadow-violet-100/50 transition duration-300 hover:-translate-y-1 hover:translate-x-1">
                        <p class="text-xs font-bold uppercase tracking-[0.14em] text-slate-500">Customer Management</p>
                        <div class="mt-3 flex items-end gap-3">
                            <span class="text-3xl font-black text-slate-950">1,248</span>
                            <span class="pb-1 text-xs font-semibold text-emerald-600">active accounts</span>
                        </div>
                        <div class="mt-4 h-20 rounded-2xl bg-gradient-to-br from-violet-100 to-blue-100"></div>
                    </article>

                    <article class="animate-float-slow col-span-4 rounded-2xl border border-slate-200 bg-white/90 p-4 shadow-lg shadow-slate-100/60 transition duration-300 hover:-translate-y-1 hover:translate-x-1">
                        <p class="text-xs font-bold uppercase tracking-[0.14em] text-slate-500">AI Assistant</p>
                        <p class="mt-2 text-sm font-semibold text-slate-950">Suggest next action for lead 204</p>
                        <p class="mt-2 text-xs leading-5 text-slate-500">Draft follow-up, summarize activity, and route to the right owner.</p>
                    </article>

                    <article class="animate-float-slower col-span-4 rounded-2xl border border-blue-200/70 bg-white/90 p-4 shadow-lg shadow-blue-100/50 transition duration-300 hover:-translate-y-1 hover:translate-x-1">
                        <p class="text-xs font-bold uppercase tracking-[0.14em] text-primary-dark">Workflow Builder</p>
                        <div class="mt-3 space-y-2 text-xs text-slate-600">
                            <div class="rounded-xl bg-blue-50 px-3 py-2">Approve → Sync → Notify</div>
                            <div class="rounded-xl bg-violet-50 px-3 py-2">Automate repetitive tasks</div>
                            <div class="rounded-xl bg-slate-50 px-3 py-2">Scale without rework</div>
                        </div>
                    </article>

                    <article class="animate-float-slower col-span-4 rounded-2xl border border-violet-200/70 bg-white/90 p-4 shadow-lg shadow-violet-100/50 transition duration-300 hover:-translate-y-1 hover:translate-x-1">
                        <p class="text-xs font-bold uppercase tracking-[0.14em] text-violet">Notifications</p>
                        <ul class="mt-3 space-y-2 text-xs text-slate-600">
                            <li class="rounded-xl bg-violet-50 px-3 py-2">New onboarding request</li>
                            <li class="rounded-xl bg-blue-50 px-3 py-2">Report generated</li>
                            <li class="rounded-xl bg-slate-50 px-3 py-2">API latency stable</li>
                        </ul>
                    </article>

                    <article class="animate-float-slow col-span-6 rounded-2xl border border-slate-200 bg-white/90 p-4 shadow-lg shadow-slate-100/60 transition duration-300 hover:-translate-y-1 hover:translate-x-1">
                        <div class="flex items-center justify-between">
                            <p class="text-xs font-bold uppercase tracking-[0.14em] text-slate-500">Inventory</p>
                            <span class="text-xs font-semibold text-primary-dark">94% synced</span>
                        </div>
                        <div class="mt-3 space-y-2">
                            <div class="flex items-center justify-between rounded-xl bg-slate-50 px-3 py-2 text-xs text-slate-600"><span>Warehouse A</span><span>Online</span></div>
                            <div class="flex items-center justify-between rounded-xl bg-slate-50 px-3 py-2 text-xs text-slate-600"><span>Warehouse B</span><span>Online</span></div>
                            <div class="flex items-center justify-between rounded-xl bg-slate-50 px-3 py-2 text-xs text-slate-600"><span>Dispatch Queue</span><span>12 pending</span></div>
                        </div>
                    </article>

                    <article class="animate-float-slower col-span-6 rounded-2xl border border-blue-200/70 bg-gradient-to-br from-blue-50 to-violet-50 p-4 shadow-lg shadow-blue-100/50 transition duration-300 hover:-translate-y-1 hover:translate-x-1">
                        <p class="text-xs font-bold uppercase tracking-[0.14em] text-primary-dark">Projects</p>
                        <p class="mt-2 text-sm font-semibold text-slate-950">Delivery pipeline moving on schedule</p>
                        <p class="mt-2 text-xs leading-5 text-slate-500">Roadmaps, dependencies, and release milestones in one place.</p>
                    </article>

                    <article class="animate-float-slow col-span-4 rounded-2xl border border-slate-200 bg-white/90 p-4 shadow-lg shadow-slate-100/60 transition duration-300 hover:-translate-y-1 hover:translate-x-1">
                        <p class="text-xs font-bold uppercase tracking-[0.14em] text-slate-500">API Calls</p>
                        <p class="mt-2 text-3xl font-black text-slate-950">Healthy</p>
                        <p class="mt-2 text-xs leading-5 text-slate-500">Stable throughput across services and integrations.</p>
                    </article>

                    <article class="animate-float-slower col-span-4 rounded-2xl border border-violet-200/70 bg-white/90 p-4 shadow-lg shadow-violet-100/50 transition duration-300 hover:-translate-y-1 hover:translate-x-1">
                        <p class="text-xs font-bold uppercase tracking-[0.14em] text-violet">Server Status</p>
                        <p class="mt-2 text-3xl font-black text-slate-950">99.9%</p>
                        <p class="mt-2 text-xs leading-5 text-slate-500">Resilience, monitoring, and production uptime support.</p>
                    </article>

                    <article class="animate-float-slower col-span-4 rounded-2xl border border-blue-200/70 bg-white/90 p-4 shadow-lg shadow-blue-100/50 transition duration-300 hover:-translate-y-1 hover:translate-x-1">
                        <p class="text-xs font-bold uppercase tracking-[0.14em] text-primary-dark">Customer List</p>
                        <p class="mt-2 text-sm font-semibold text-slate-950">Enterprise, SMB, and institutional accounts</p>
                        <p class="mt-2 text-xs leading-5 text-slate-500">Centralized visibility across customers and teams.</p>
                    </article>
                </div>
            </div>
        </div>

    </div>
</section>

<section id="trusted-by" class="scroll-mt-24 px-6 py-20 md:px-12">
    <div class="mx-auto max-w-7xl rounded-[32px] border border-slate-200 bg-white/85 p-8 shadow-sm backdrop-blur md:p-10">
        <div class="grid gap-10 lg:grid-cols-12 lg:items-start">
            <div class="lg:col-span-5">
                <p class="text-xs font-bold uppercase tracking-[0.18em] text-primary-dark">Trusted across industries</p>
                <h2 class="mt-3 text-3xl font-black tracking-tight text-slate-950 md:text-4xl">Our software supports organizations operating in high-performance environments where reliability, security, and scalability are essential.</h2>
            </div>

            <div class="lg:col-span-7">
                <div data-home-industry-showcase>
                    <div class="grid grid-cols-2 gap-3 sm:grid-cols-3 xl:grid-cols-5" role="tablist" aria-label="Home industry solutions">
                        @foreach ($industrySolutions as $industry)
                            <button
                                type="button"
                                role="tab"
                                data-home-industry-tab
                                data-industry-title="{{ $industry['title'] }}"
                                data-industry-summary="{{ $industry['summary'] }}"
                                data-industry-detail="{{ $industry['detail'] }}"
                                data-industry-image="{{ $industry['image'] }}"
                                data-industry-highlights='@json($industry['highlights'])'
                                aria-selected="{{ $loop->first ? 'true' : 'false' }}"
                                class="group rounded-2xl border px-4 py-4 text-center text-sm font-semibold shadow-sm transition focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-primary/30 focus-visible:ring-offset-2 {{ $loop->first ? 'border-primary/25 bg-white text-primary-dark' : 'border-slate-200 bg-slate-50 text-slate-700 hover:-translate-y-0.5 hover:border-primary/20 hover:bg-white' }}"
                            >
                                <div class="relative mx-auto mb-2 size-12 overflow-hidden rounded-xl border border-slate-200 bg-white">
                                    <img src="{{ $industry['image'] }}" alt="{{ $industry['title'] }} industry" class="h-full w-full object-cover" loading="lazy">
                                    <span class="material-symbols-outlined absolute bottom-0 right-0 rounded-tl-lg bg-white/95 p-1 text-base leading-none {{ $loop->first ? 'text-primary' : 'text-slate-500 group-hover:text-primary' }}">{{ $industry['icon'] }}</span>
                                </div>
                                <span class="block">{{ $industry['title'] }}</span>
                            </button>
                        @endforeach
                    </div>

                    <article id="home-industry-detail-panel" class="mt-6 rounded-[24px] border border-primary/15 bg-gradient-to-br from-white to-blue-50/60 p-6 shadow-sm transition-all duration-200 md:p-7">
                        <div class="grid gap-6 lg:grid-cols-12 lg:items-start">
                            <div class="lg:col-span-8">
                                <p class="text-xs font-bold uppercase tracking-[0.18em] text-primary-dark">How Pamoja helps</p>
                                <h3 id="home-industry-title" class="mt-2 text-2xl font-black tracking-tight text-slate-950">{{ $industrySolutions[0]['title'] }}</h3>
                                <p id="home-industry-summary" class="mt-3 text-sm font-semibold text-primary-dark">{{ $industrySolutions[0]['summary'] }}</p>
                                <p id="home-industry-detail" class="mt-4 text-sm leading-7 text-slate-600">{{ $industrySolutions[0]['detail'] }}</p>
                                <div class="mt-5">
                                    <p class="text-xs font-bold uppercase tracking-[0.14em] text-slate-500">What we can build</p>
                                    <ul id="home-industry-highlights" class="mt-3 grid gap-2 text-sm text-slate-700 md:grid-cols-2">
                                        @foreach ($industrySolutions[0]['highlights'] as $highlight)
                                            <li class="rounded-xl border border-slate-200 bg-white px-3 py-2">{{ $highlight }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                            <div class="lg:col-span-4">
                                <div class="overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-sm">
                                    <img id="home-industry-image" src="{{ $industrySolutions[0]['image'] }}" alt="{{ $industrySolutions[0]['title'] }} industry" class="h-52 w-full object-cover" loading="lazy">
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </div>

        <div class="mt-10 grid gap-4 md:grid-cols-3">
            @foreach ($trustProofs as $proof)
                <article class="rounded-[24px] border border-slate-200 bg-white p-6 shadow-sm transition hover:-translate-y-1 hover:shadow-lg hover:shadow-blue-100/50">
                    <h3 class="text-xl font-bold text-slate-950">{{ $proof['title'] }}</h3>
                    <p class="mt-3 text-sm leading-7 text-slate-600">{{ $proof['description'] }}</p>
                </article>
            @endforeach
        </div>
    </div>
</section>

<script>
    (() => {
        const scope = document.querySelector('[data-home-industry-showcase]');
        if (!scope) {
            return;
        }

        const tabs = Array.from(scope.querySelectorAll('[data-home-industry-tab]'));
        const titleEl = document.getElementById('home-industry-title');
        const summaryEl = document.getElementById('home-industry-summary');
        const detailEl = document.getElementById('home-industry-detail');
        const highlightsEl = document.getElementById('home-industry-highlights');
        const imageEl = document.getElementById('home-industry-image');
        const detailPanelEl = document.getElementById('home-industry-detail-panel');

        const activeClasses = ['border-primary/25', 'bg-white', 'text-primary-dark'];
        const inactiveClasses = ['border-slate-200', 'bg-slate-50', 'text-slate-700', 'hover:-translate-y-0.5', 'hover:border-primary/20', 'hover:bg-white'];
        let transitionTimer;

        const updatePanelContent = (targetTab) => {
            tabs.forEach((tab) => {
                const isActive = tab === targetTab;
                tab.setAttribute('aria-selected', isActive ? 'true' : 'false');
                tab.classList.remove(...(isActive ? inactiveClasses : activeClasses));
                tab.classList.add(...(isActive ? activeClasses : inactiveClasses));

                const icon = tab.querySelector('.material-symbols-outlined');
                if (icon) {
                    icon.classList.toggle('text-primary', isActive);
                    icon.classList.toggle('text-slate-500', !isActive);
                }
            });

            if (titleEl) {
                titleEl.textContent = targetTab.dataset.industryTitle || '';
            }
            if (summaryEl) {
                summaryEl.textContent = targetTab.dataset.industrySummary || '';
            }
            if (detailEl) {
                detailEl.textContent = targetTab.dataset.industryDetail || '';
            }
            if (imageEl) {
                imageEl.src = targetTab.dataset.industryImage || '';
                imageEl.alt = `${targetTab.dataset.industryTitle || 'Industry'} industry`;
            }
            if (highlightsEl) {
                const items = JSON.parse(targetTab.dataset.industryHighlights || '[]');
                highlightsEl.innerHTML = items
                    .map((item) => `<li class="rounded-xl border border-slate-200 bg-white px-3 py-2">${item}</li>`)
                    .join('');
            }
        };

        const setActive = (targetTab) => {
            if (!detailPanelEl) {
                updatePanelContent(targetTab);
                return;
            }

            window.clearTimeout(transitionTimer);
            detailPanelEl.classList.add('opacity-0', 'translate-y-1');

            transitionTimer = window.setTimeout(() => {
                updatePanelContent(targetTab);
                detailPanelEl.classList.remove('opacity-0', 'translate-y-1');
            }, 130);
        };

        tabs.forEach((tab, index) => {
            tab.addEventListener('mouseenter', () => setActive(tab));
            tab.addEventListener('click', () => setActive(tab));
            tab.addEventListener('focus', () => setActive(tab));
            tab.addEventListener('keydown', (event) => {
                if (event.key !== 'ArrowRight' && event.key !== 'ArrowLeft') {
                    return;
                }
                event.preventDefault();
                const direction = event.key === 'ArrowRight' ? 1 : -1;
                const nextIndex = (index + direction + tabs.length) % tabs.length;
                tabs[nextIndex].focus();
                setActive(tabs[nextIndex]);
            });
        });
    })();
</script>

<section id="what-we-build" class="scroll-mt-24 px-6 py-20 md:px-12">
    <div class="mx-auto max-w-7xl">
        <div class="max-w-4xl">
            <p class="text-xs font-bold uppercase tracking-[0.18em] text-primary-dark">What we build</p>
            <h2 class="mt-3 text-4xl font-black tracking-tight text-slate-950 md:text-5xl">Solutions Designed Around Your Business</h2>
            <p class="mt-6 text-base leading-8 text-slate-600 md:text-lg">
                Every organization operates differently. That's why we don't force businesses to adapt to generic software. Instead, we deliver custom software and digital transformation solutions that align with your workflows, processes, and long-term objectives-ensuring technology becomes a competitive advantage rather than a limitation.
            </p>
        </div>
        <div class="mt-10 grid gap-6 md:grid-cols-2 xl:grid-cols-3">
            @foreach ($whatWeBuild as $solution)
                <article class="group rounded-[28px] border border-slate-200 bg-white p-7 shadow-sm transition hover:-translate-y-1 hover:shadow-xl hover:shadow-blue-100/60">
                    <h3 class="text-2xl font-bold text-slate-950">{{ $solution['title'] }}</h3>
                    <p class="mt-5 text-sm leading-7 text-slate-600">{{ $solution['description'] }}</p>
                </article>
            @endforeach
        </div>
    </div>
</section>

<section id="featured-products" class="scroll-mt-24 px-6 py-20 md:px-12">
    <div class="mx-auto max-w-7xl">
        <div class="max-w-3xl">
            <p class="text-xs font-bold uppercase tracking-[0.18em] text-primary-dark">Featured products</p>
            <h2 class="mt-3 text-4xl font-black tracking-tight text-slate-950 md:text-5xl">See What Enterprise Software Should Feel Like</h2>
            <p class="mt-5 text-base leading-8 text-slate-600 md:text-lg">
                Our platforms are designed with users in mind, combining intuitive experiences with powerful business functionality.
            </p>
        </div>

        <div class="mt-10" data-featured-products>
            <div class="flex flex-wrap gap-3" role="tablist" aria-label="Featured product categories">
                @foreach ($featuredProductTabs as $tab)
                    <button
                        type="button"
                        role="tab"
                        id="featured-tab-{{ $tab['id'] }}"
                        data-tab-button
                        data-tab-id="{{ $tab['id'] }}"
                        data-tab-title="{{ $tab['title'] }}"
                        data-tab-subtitle="{{ $tab['subtitle'] }}"
                        data-tab-kpi="{{ $tab['kpi'] }}"
                        data-tab-status="{{ $tab['status'] }}"
                        data-tab-gradient="{{ $tab['gradient'] }}"
                        aria-selected="{{ $loop->first ? 'true' : 'false' }}"
                        class="rounded-full border px-5 py-2.5 text-sm font-bold tracking-wide transition focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-primary/30 focus-visible:ring-offset-2 {{ $loop->first ? 'border-primary/25 bg-gradient-to-r from-primary to-violet text-white shadow-md shadow-blue-200/60' : 'border-slate-200 bg-white text-slate-600 hover:border-primary/20 hover:text-primary-dark' }}"
                    >
                        {{ $tab['label'] }}
                    </button>
                @endforeach
            </div>

            <div class="mt-8 grid gap-6 xl:grid-cols-12">
                <div class="xl:col-span-8">
                    <article class="rounded-[30px] border border-slate-200 bg-white p-6 shadow-sm md:p-8">
                        <div class="mx-auto max-w-4xl rounded-[26px] border border-slate-300 bg-slate-950 p-3 shadow-[0_20px_55px_-35px_rgba(15,23,42,0.85)]">
                            <div class="rounded-[20px] border border-slate-700 bg-slate-900 p-4 md:p-5">
                                <div class="mb-4 flex items-center gap-2">
                                    <span class="size-2.5 rounded-full bg-rose-400"></span>
                                    <span class="size-2.5 rounded-full bg-amber-400"></span>
                                    <span class="size-2.5 rounded-full bg-emerald-400"></span>
                                </div>

                                <div id="featured-mockup" class="rounded-[16px] bg-gradient-to-br from-blue-100 via-indigo-100 to-violet-100 p-5 transition-colors duration-300">
                                    <div class="grid gap-4 md:grid-cols-12">
                                        <div class="md:col-span-8">
                                            <p class="text-[11px] font-bold uppercase tracking-[0.16em] text-slate-600">Product Preview</p>
                                            <h3 id="featured-title" class="mt-2 text-2xl font-black tracking-tight text-slate-900">{{ $featuredProductTabs[0]['title'] }}</h3>
                                            <p id="featured-subtitle" class="mt-3 text-sm leading-7 text-slate-700">{{ $featuredProductTabs[0]['subtitle'] }}</p>
                                        </div>
                                        <div class="md:col-span-4">
                                            <div class="rounded-2xl bg-white/80 p-4 shadow-sm backdrop-blur">
                                                <p class="text-[11px] font-bold uppercase tracking-[0.16em] text-slate-500">Impact</p>
                                                <p id="featured-kpi" class="mt-2 text-lg font-bold text-slate-900">{{ $featuredProductTabs[0]['kpi'] }}</p>
                                                <p id="featured-status" class="mt-2 text-xs font-semibold text-primary-dark">{{ $featuredProductTabs[0]['status'] }}</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mt-5 grid gap-3 sm:grid-cols-3">
                                        <div class="rounded-xl bg-white/85 px-4 py-3 text-sm font-semibold text-slate-700">Role-based access</div>
                                        <div class="rounded-xl bg-white/85 px-4 py-3 text-sm font-semibold text-slate-700">Real-time reporting</div>
                                        <div class="rounded-xl bg-white/85 px-4 py-3 text-sm font-semibold text-slate-700">Workflow automation</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>

                <aside class="xl:col-span-4">
                    <div class="rounded-[30px] border border-slate-200 bg-white p-6 shadow-sm md:p-7">
                        <p class="text-xs font-bold uppercase tracking-[0.18em] text-primary-dark">Feature list</p>
                        <ul class="mt-5 space-y-3 text-sm text-slate-700">
                            <li class="rounded-xl border border-slate-200 bg-slate-50 px-4 py-3 font-semibold">Role-based Access</li>
                            <li class="rounded-xl border border-slate-200 bg-slate-50 px-4 py-3 font-semibold">AI Insights</li>
                            <li class="rounded-xl border border-slate-200 bg-slate-50 px-4 py-3 font-semibold">Real-time Reporting</li>
                            <li class="rounded-xl border border-slate-200 bg-slate-50 px-4 py-3 font-semibold">Cloud Synchronization</li>
                            <li class="rounded-xl border border-slate-200 bg-slate-50 px-4 py-3 font-semibold">Multi-location Support</li>
                            <li class="rounded-xl border border-slate-200 bg-slate-50 px-4 py-3 font-semibold">Advanced Dashboards</li>
                            <li class="rounded-xl border border-slate-200 bg-slate-50 px-4 py-3 font-semibold">API Integration</li>
                            <li class="rounded-xl border border-slate-200 bg-slate-50 px-4 py-3 font-semibold">Workflow Automation</li>
                        </ul>
                    </div>
                </aside>
            </div>
        </div>
    </div>
</section>

<script>
    (() => {
        const scope = document.querySelector('[data-featured-products]');
        if (!scope) {
            return;
        }

        const tabs = Array.from(scope.querySelectorAll('[data-tab-button]'));
        const titleEl = document.getElementById('featured-title');
        const subtitleEl = document.getElementById('featured-subtitle');
        const kpiEl = document.getElementById('featured-kpi');
        const statusEl = document.getElementById('featured-status');
        const mockupEl = document.getElementById('featured-mockup');

        const activeClasses = ['border-primary/25', 'bg-gradient-to-r', 'from-primary', 'to-violet', 'text-white', 'shadow-md', 'shadow-blue-200/60'];
        const inactiveClasses = ['border-slate-200', 'bg-white', 'text-slate-600', 'hover:border-primary/20', 'hover:text-primary-dark'];
        const gradientOptions = [
            'from-blue-100', 'via-indigo-100', 'to-violet-100',
            'from-violet-100', 'via-fuchsia-100', 'to-blue-100',
            'from-sky-100', 'via-blue-100', 'to-indigo-100',
            'from-indigo-100', 'via-violet-100', 'to-purple-100',
            'from-cyan-100', 'via-blue-100', 'to-violet-100'
        ];

        const setActiveTab = (targetTab) => {
            tabs.forEach((tab) => {
                const isActive = tab === targetTab;
                tab.setAttribute('aria-selected', isActive ? 'true' : 'false');
                tab.classList.remove(...(isActive ? inactiveClasses : activeClasses));
                tab.classList.add(...(isActive ? activeClasses : inactiveClasses));
            });

            if (titleEl) {
                titleEl.textContent = targetTab.dataset.tabTitle || '';
            }
            if (subtitleEl) {
                subtitleEl.textContent = targetTab.dataset.tabSubtitle || '';
            }
            if (kpiEl) {
                kpiEl.textContent = targetTab.dataset.tabKpi || '';
            }
            if (statusEl) {
                statusEl.textContent = targetTab.dataset.tabStatus || '';
            }
            if (mockupEl) {
                mockupEl.classList.remove(...gradientOptions);
                const nextGradient = (targetTab.dataset.tabGradient || '').split(' ').filter(Boolean);
                if (nextGradient.length) {
                    mockupEl.classList.add(...nextGradient);
                }
            }
        };

        tabs.forEach((tab, index) => {
            tab.addEventListener('click', () => setActiveTab(tab));
            tab.addEventListener('keydown', (event) => {
                if (event.key !== 'ArrowRight' && event.key !== 'ArrowLeft') {
                    return;
                }
                event.preventDefault();
                const direction = event.key === 'ArrowRight' ? 1 : -1;
                const nextIndex = (index + direction + tabs.length) % tabs.length;
                tabs[nextIndex].focus();
                setActiveTab(tabs[nextIndex]);
            });
        });
    })();
</script>

<section id="enterprise-capabilities" class="scroll-mt-24 px-6 py-20 md:px-12">
    <div class="mx-auto max-w-7xl">
        <div class="max-w-2xl">
            <p class="text-xs font-bold uppercase tracking-[0.18em] text-primary-dark">Product engineering capabilities</p>
            <h2 class="mt-3 text-3xl font-black tracking-tight text-slate-950 md:text-4xl">Everything required to deliver enterprise software and digital transformation outcomes.</h2>
        </div>
        <div class="mt-10 grid gap-5 md:grid-cols-2 xl:grid-cols-3">
            @foreach ($capabilities as $capability)
                <article class="rounded-[24px] border border-slate-200 bg-white p-6 shadow-sm transition hover:border-primary/20 hover:shadow-lg hover:shadow-blue-100/50">
                    <h3 class="text-lg font-bold text-slate-950">{{ $capability['title'] }}</h3>
                    <p class="mt-3 text-sm leading-7 text-slate-600">{{ $capability['description'] }}</p>
                </article>
            @endforeach
        </div>
    </div>
</section>

<section id="architecture" class="scroll-mt-24 px-6 py-20 md:px-12">
    <div class="mx-auto max-w-7xl rounded-[32px] border border-slate-200 bg-white/90 p-8 shadow-sm backdrop-blur md:p-10">
        <div class="max-w-3xl">
            <p class="text-xs font-bold uppercase tracking-[0.18em] text-primary-dark">Architecture</p>
            <h2 class="mt-3 text-4xl font-black tracking-tight text-slate-950 md:text-5xl">Enterprise Architecture Designed for Performance. Built for Scale.</h2>
            <p class="mt-5 text-base leading-8 text-slate-600 md:text-lg">Every platform we develop follows modern software architecture principles that prioritize security, availability, maintainability, and future growth.</p>
        </div>

        <div class="mt-10 grid gap-6 xl:grid-cols-12">
            <div class="xl:col-span-7">
                <article class="rounded-[28px] border border-slate-200 bg-gradient-to-br from-blue-50/80 via-white to-violet-50/80 p-6 shadow-sm md:p-8">
                    <div class="mx-auto max-w-md space-y-2">
                        <div class="rounded-2xl border border-blue-200 bg-white px-4 py-3 text-center text-sm font-bold text-slate-800 shadow-sm">Users</div>
                        <div class="text-center text-primary-dark">↓</div>
                        <div class="rounded-2xl border border-blue-200 bg-white px-4 py-3 text-center text-sm font-bold text-slate-800 shadow-sm">Load Balancer</div>
                        <div class="text-center text-primary-dark">↓</div>
                        <div class="rounded-2xl border border-violet-200 bg-white px-4 py-3 text-center text-sm font-bold text-slate-800 shadow-sm">API Gateway</div>
                        <div class="text-center text-primary-dark">↓</div>
                        <div class="rounded-2xl border border-blue-200 bg-white px-4 py-3 text-center text-sm font-bold text-slate-800 shadow-sm">Application Services</div>
                        <div class="text-center text-primary-dark">↓</div>
                        <div class="rounded-2xl border border-slate-200 bg-white px-4 py-3 text-center text-sm font-bold text-slate-800 shadow-sm">Authentication</div>
                        <div class="text-center text-primary-dark">↓</div>
                        <div class="rounded-2xl border border-slate-200 bg-white px-4 py-3 text-center text-sm font-bold text-slate-800 shadow-sm">Business Logic</div>
                        <div class="text-center text-primary-dark">↓</div>
                        <div class="rounded-2xl border border-violet-200 bg-white px-4 py-3 text-center text-sm font-bold text-slate-800 shadow-sm">Redis Cache</div>
                        <div class="text-center text-primary-dark">↓</div>
                        <div class="rounded-2xl border border-blue-200 bg-white px-4 py-3 text-center text-sm font-bold text-slate-800 shadow-sm">PostgreSQL</div>
                        <div class="text-center text-primary-dark">↓</div>
                        <div class="rounded-2xl border border-slate-200 bg-white px-4 py-3 text-center text-sm font-bold text-slate-800 shadow-sm">Object Storage</div>
                        <div class="text-center text-primary-dark">↓</div>
                        <div class="rounded-2xl border border-violet-200 bg-white px-4 py-3 text-center text-sm font-bold text-slate-800 shadow-sm">Monitoring</div>
                    </div>
                </article>
            </div>

            <aside class="xl:col-span-5">
                <div class="rounded-[28px] border border-slate-200 bg-white p-6 shadow-sm md:p-8">
                    <p class="text-xs font-bold uppercase tracking-[0.18em] text-primary-dark">Architecture highlights</p>
                    <div class="mt-6 space-y-4">
                        <article class="rounded-2xl border border-slate-200 bg-slate-50 px-5 py-4">
                            <h3 class="text-lg font-bold text-slate-900">High Availability</h3>
                            <p class="mt-2 text-sm leading-7 text-slate-600">Redundant services and resilient design patterns keep critical workflows online and dependable.</p>
                        </article>
                        <article class="rounded-2xl border border-slate-200 bg-slate-50 px-5 py-4">
                            <h3 class="text-lg font-bold text-slate-900">Automatic Scaling</h3>
                            <p class="mt-2 text-sm leading-7 text-slate-600">Elastic compute and data layers expand capacity based on demand without disrupting performance.</p>
                        </article>
                        <article class="rounded-2xl border border-slate-200 bg-slate-50 px-5 py-4">
                            <h3 class="text-lg font-bold text-slate-900">Secure Authentication</h3>
                            <p class="mt-2 text-sm leading-7 text-slate-600">Role-based access, secure identity flows, and policy controls protect sensitive business operations.</p>
                        </article>
                        <article class="rounded-2xl border border-slate-200 bg-slate-50 px-5 py-4">
                            <h3 class="text-lg font-bold text-slate-900">Real-time APIs</h3>
                            <p class="mt-2 text-sm leading-7 text-slate-600">Event-driven and request-response integrations deliver timely, consistent data across systems.</p>
                        </article>
                        <article class="rounded-2xl border border-slate-200 bg-slate-50 px-5 py-4">
                            <h3 class="text-lg font-bold text-slate-900">Cloud Infrastructure</h3>
                            <p class="mt-2 text-sm leading-7 text-slate-600">Cloud-native architecture ensures observability, reliability, and maintainable operations at scale.</p>
                        </article>
                        <article class="rounded-2xl border border-slate-200 bg-slate-50 px-5 py-4">
                            <h3 class="text-lg font-bold text-slate-900">Continuous Deployment</h3>
                            <p class="mt-2 text-sm leading-7 text-slate-600">Automated pipelines and quality gates enable faster releases with lower operational risk.</p>
                        </article>
                    </div>
                </div>
            </aside>
        </div>
    </div>
</section>

<section id="why-pamoja" class="scroll-mt-24 px-6 py-20 md:px-12">
    <div class="mx-auto grid max-w-7xl gap-10 lg:grid-cols-12 lg:items-start">
        <div class="lg:col-span-5">
            <p class="text-xs font-bold uppercase tracking-[0.18em] text-primary-dark">Why Pamoja Africa</p>
            <h2 class="mt-3 text-3xl font-black tracking-tight text-slate-950 md:text-4xl">A partner that understands both product and operations.</h2>
            <p class="mt-5 text-sm leading-7 text-slate-600">We are built for teams that need thoughtful product design, real engineering, and practical delivery. The goal is not just software that looks good, but software that performs under pressure.</p>
            <div class="mt-8 grid gap-4 sm:grid-cols-3 lg:grid-cols-1">
                <div class="rounded-2xl border border-blue-200 bg-blue-50 px-5 py-4">
                    <p class="text-3xl font-black text-primary-dark">99.9%</p>
                    <p class="mt-1 text-sm text-slate-600">reliability target mindset</p>
                </div>
                <div class="rounded-2xl border border-violet-200 bg-violet-50 px-5 py-4">
                    <p class="text-3xl font-black text-violet">10+</p>
                    <p class="mt-1 text-sm text-slate-600">areas of platform expertise</p>
                </div>
                <div class="rounded-2xl border border-slate-200 bg-white px-5 py-4">
                    <p class="text-3xl font-black text-slate-900">Long-term</p>
                    <p class="mt-1 text-sm text-slate-600">support and ownership model</p>
                </div>
            </div>
        </div>

        <div class="lg:col-span-7">
            <div class="grid gap-5 md:grid-cols-3">
                @foreach ($reasons as $reason)
                    <article class="rounded-[26px] border border-slate-200 bg-white p-6 shadow-sm">
                        <h3 class="text-xl font-bold text-slate-950">{{ $reason['title'] }}</h3>
                        <p class="mt-4 text-sm leading-7 text-slate-600">{{ $reason['description'] }}</p>
                    </article>
                @endforeach
            </div>
        </div>
    </div>
</section>

<section id="our-process" class="scroll-mt-24 px-6 py-20 md:px-12">
    <div class="mx-auto max-w-7xl">
        <div class="max-w-2xl">
            <p class="text-xs font-bold uppercase tracking-[0.18em] text-primary-dark">Our process</p>
            <h2 class="mt-3 text-3xl font-black tracking-tight text-slate-950 md:text-4xl">A clear delivery process that reduces risk and keeps momentum.</h2>
        </div>
        <div class="mt-10 grid gap-5 md:grid-cols-2 xl:grid-cols-4">
            @foreach ($process as $item)
                <article class="rounded-[24px] border border-slate-200 bg-white p-6 shadow-sm">
                    <p class="text-xs font-bold uppercase tracking-[0.16em] text-primary-dark">{{ $item['step'] }}</p>
                    <h3 class="mt-4 text-xl font-bold text-slate-950">{{ $item['title'] }}</h3>
                    <p class="mt-3 text-sm leading-7 text-slate-600">{{ $item['description'] }}</p>
                </article>
            @endforeach
        </div>
    </div>
</section>

<section id="technology-stack" class="scroll-mt-24 px-6 py-20 md:px-12">
    <div class="mx-auto max-w-7xl">
        <div class="max-w-3xl">
            <p class="text-xs font-bold uppercase tracking-[0.18em] text-primary-dark">Technology stack</p>
            <h2 class="mt-3 text-3xl font-black tracking-tight text-slate-950 md:text-4xl">Technology capabilities organized for cloud solutions and scalable architecture.</h2>
            <p class="mt-5 text-base leading-8 text-slate-600 md:text-lg">Instead of a wall of logos, we organize technologies by the role they play in enterprise software delivery, product engineering, and system integration. Hover any technology to see how we apply it in client projects.</p>
        </div>
        <div class="mt-10 grid gap-5 md:grid-cols-2 xl:grid-cols-5">
            @foreach ($techStack as $group)
                <article class="rounded-[26px] border border-slate-200 bg-white p-6 shadow-sm">
                    <h3 class="text-lg font-bold text-slate-950">{{ $group['category'] }}</h3>
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

<section id="testimonials" class="scroll-mt-24 px-6 py-20 md:px-12">
    <div class="mx-auto max-w-7xl">
        <div class="max-w-2xl">
            <p class="text-xs font-bold uppercase tracking-[0.18em] text-primary-dark">Why Clients Choose Us</p>
            <h2 class="mt-3 text-3xl font-black tracking-tight text-slate-950 md:text-4xl">Trusted for how we think, build, and support.</h2>
        </div>
        <div class="mt-10 grid gap-6 md:grid-cols-2">
            <article class="rounded-[28px] border border-slate-200 bg-white p-7 shadow-sm">
                <h3 class="text-xl font-bold text-slate-950">Deep understanding of business processes</h3>
                <p class="mt-3 text-sm leading-7 text-slate-600">We design software around real operational workflows, not generic assumptions, so teams adopt faster and execute better.</p>
            </article>
            <article class="rounded-[28px] border border-slate-200 bg-white p-7 shadow-sm">
                <h3 class="text-xl font-bold text-slate-950">Transparent communication</h3>
                <p class="mt-3 text-sm leading-7 text-slate-600">From scoping to delivery, we share clear updates, practical trade-offs, and milestone progress you can trust.</p>
            </article>
            <article class="rounded-[28px] border border-slate-200 bg-white p-7 shadow-sm">
                <h3 class="text-xl font-bold text-slate-950">Reliable delivery</h3>
                <p class="mt-3 text-sm leading-7 text-slate-600">We ship with engineering discipline, quality controls, and production readiness standards built into every phase.</p>
            </article>
            <article class="rounded-[28px] border border-slate-200 bg-white p-7 shadow-sm">
                <h3 class="text-xl font-bold text-slate-950">Long-term support</h3>
                <p class="mt-3 text-sm leading-7 text-slate-600">After launch, we stay engaged with maintenance, enhancements, and strategic improvements as your business grows.</p>
            </article>
        </div>
    </div>
</section>

<section id="cta" class="scroll-mt-24 px-6 py-20 md:px-12">
    <div class="mx-auto max-w-7xl">
        <div class="overflow-hidden rounded-[32px] border border-blue-200 bg-gradient-to-r from-primary via-violet to-indigo-600 p-8 text-white shadow-[0_30px_90px_-50px_rgba(59,130,246,0.8)] md:p-12">
            <div class="mx-auto max-w-4xl text-center">
                <p class="text-xs font-bold uppercase tracking-[0.18em] text-white/80">Final CTA</p>
                <h2 class="mt-3 text-3xl font-black tracking-tight md:text-5xl">Ready to Build Software That Moves Your Business Forward?</h2>
                <p class="mt-5 text-sm leading-7 text-white/90 md:text-base">Whether you're launching a new SaaS platform, digitizing enterprise operations, or integrating AI into existing workflows, we'll help you transform your vision into secure, scalable software that delivers measurable business value.</p>

                <div class="mt-8 flex flex-col items-center justify-center gap-3 sm:flex-row">
                    <a href="{{ route('contact') }}" class="inline-flex w-full items-center justify-center rounded-xl bg-white px-6 py-4 text-sm font-bold tracking-wide text-primary-dark shadow-lg transition hover:-translate-y-0.5 hover:bg-slate-50 sm:w-auto focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-white/60 focus-visible:ring-offset-2 focus-visible:ring-offset-primary">
                        Schedule a Discovery Call
                    </a>
                    <a href="{{ route('contact') }}" class="inline-flex w-full items-center justify-center rounded-xl border border-white/35 bg-white/10 px-6 py-4 text-sm font-bold tracking-wide text-white backdrop-blur transition hover:-translate-y-0.5 hover:bg-white/20 sm:w-auto focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-white/60 focus-visible:ring-offset-2 focus-visible:ring-offset-primary">
                        Discuss Your Project
                    </a>
                </div>

                <p class="mt-6 text-sm text-white/85">No obligations. Just a conversation about your goals, your challenges, and how technology can help.</p>
            </div>
        </div>
    </div>
</section>
@endsection
