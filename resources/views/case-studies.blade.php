@extends('layouts.main')

@section('title', 'Case Studies')

@section('content')
<section class="px-6 py-20 md:px-12">
    <div class="mx-auto max-w-7xl">
        <div class="max-w-2xl">
            <p class="text-xs font-bold uppercase tracking-[0.18em] text-primary-dark">Case Studies</p>
            <h1 class="mt-3 text-3xl font-black tracking-tight text-slate-950 md:text-4xl">Trusted for how we think, build, and support.</h1>
        </div>
        <div class="mt-10 grid gap-6 md:grid-cols-2">
            <article class="rounded-[28px] border border-slate-200 bg-white p-7 shadow-sm">
                <h2 class="text-xl font-bold text-slate-950">Deep understanding of business processes</h2>
                <p class="mt-3 text-sm leading-7 text-slate-600">We design software around real operational workflows, not generic assumptions, so teams adopt faster and execute better.</p>
            </article>
            <article class="rounded-[28px] border border-slate-200 bg-white p-7 shadow-sm">
                <h2 class="text-xl font-bold text-slate-950">Transparent communication</h2>
                <p class="mt-3 text-sm leading-7 text-slate-600">From scoping to delivery, we share clear updates, practical trade-offs, and milestone progress you can trust.</p>
            </article>
            <article class="rounded-[28px] border border-slate-200 bg-white p-7 shadow-sm">
                <h2 class="text-xl font-bold text-slate-950">Reliable delivery</h2>
                <p class="mt-3 text-sm leading-7 text-slate-600">We ship with engineering discipline, quality controls, and production readiness standards built into every phase.</p>
            </article>
            <article class="rounded-[28px] border border-slate-200 bg-white p-7 shadow-sm">
                <h2 class="text-xl font-bold text-slate-950">Long-term support</h2>
                <p class="mt-3 text-sm leading-7 text-slate-600">After launch, we stay engaged with maintenance, enhancements, and strategic improvements as your business grows.</p>
            </article>
        </div>
    </div>
</section>
@endsection
