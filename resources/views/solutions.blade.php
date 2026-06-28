@extends('layouts.main')

@section('title', 'Solutions')

@section('content')
@php
    $trustProofs = [
        ['title' => 'Enterprise Systems', 'description' => 'Built to handle complex business operations.'],
        ['title' => 'Cloud Ready', 'description' => 'Designed for modern deployment environments.'],
        ['title' => 'Long-Term Partnership', 'description' => 'Supporting clients beyond their initial launch.'],
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
@endphp

<section class="px-6 py-20 md:px-12">
    <div class="mx-auto max-w-7xl rounded-[32px] border border-slate-200 bg-white/85 p-8 shadow-sm backdrop-blur md:p-10">
        <div class="grid gap-10 lg:grid-cols-12 lg:items-start">
            <div class="lg:col-span-5">
                <p class="text-xs font-bold uppercase tracking-[0.18em] text-primary-dark">Solutions</p>
                <h1 class="mt-3 text-3xl font-black tracking-tight text-slate-950 md:text-4xl">Our software supports organizations operating in high-performance environments where reliability, security, and scalability are essential.</h1>
            </div>

            <div class="lg:col-span-7">
                <div data-industry-showcase>
                    <div class="grid grid-cols-2 gap-3 sm:grid-cols-3 xl:grid-cols-5" role="tablist" aria-label="Industry solutions">
                        @foreach ($industrySolutions as $industry)
                            <button
                                type="button"
                                role="tab"
                                data-industry-tab
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

                    <article id="industry-detail-panel" class="mt-6 rounded-[24px] border border-primary/15 bg-gradient-to-br from-white to-blue-50/60 p-6 shadow-sm transition-all duration-200 md:p-7">
                        <div class="grid gap-6 lg:grid-cols-12 lg:items-start">
                            <div class="lg:col-span-8">
                                <p class="text-xs font-bold uppercase tracking-[0.18em] text-primary-dark">How Pamoja helps</p>
                                <h2 id="industry-title" class="mt-2 text-2xl font-black tracking-tight text-slate-950">{{ $industrySolutions[0]['title'] }}</h2>
                                <p id="industry-summary" class="mt-3 text-sm font-semibold text-primary-dark">{{ $industrySolutions[0]['summary'] }}</p>
                                <p id="industry-detail" class="mt-4 text-sm leading-7 text-slate-600">{{ $industrySolutions[0]['detail'] }}</p>
                                <div class="mt-5">
                                    <p class="text-xs font-bold uppercase tracking-[0.14em] text-slate-500">What we can build</p>
                                    <ul id="industry-highlights" class="mt-3 grid gap-2 text-sm text-slate-700 md:grid-cols-2">
                                        @foreach ($industrySolutions[0]['highlights'] as $highlight)
                                            <li class="rounded-xl border border-slate-200 bg-white px-3 py-2">{{ $highlight }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                            <div class="lg:col-span-4">
                                <div class="overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-sm">
                                    <img id="industry-image" src="{{ $industrySolutions[0]['image'] }}" alt="{{ $industrySolutions[0]['title'] }} industry" class="h-52 w-full object-cover" loading="lazy">
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
                    <h2 class="text-xl font-bold text-slate-950">{{ $proof['title'] }}</h2>
                    <p class="mt-3 text-sm leading-7 text-slate-600">{{ $proof['description'] }}</p>
                </article>
            @endforeach
        </div>
    </div>
</section>

<script>
    (() => {
        const scope = document.querySelector('[data-industry-showcase]');
        if (!scope) {
            return;
        }

        const tabs = Array.from(scope.querySelectorAll('[data-industry-tab]'));
        const titleEl = document.getElementById('industry-title');
        const summaryEl = document.getElementById('industry-summary');
        const detailEl = document.getElementById('industry-detail');
        const highlightsEl = document.getElementById('industry-highlights');
        const imageEl = document.getElementById('industry-image');
        const detailPanelEl = document.getElementById('industry-detail-panel');

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
@endsection
