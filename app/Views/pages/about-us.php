<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<!-- ============================ HERO ============================ -->
<section class="relative gradient-hero overflow-hidden">
    <div class="container mx-auto px-4 pt-16 pb-20 lg:pt-24 lg:pb-24 text-center">
        <div class="inline-flex items-center bg-primary-50 border border-primary-100 text-primary-700 px-4 py-1.5 rounded-full text-sm font-semibold mb-6">
            <span class="w-2 h-2 rounded-full bg-accent-500 mr-2"></span>
            Our story
        </div>
        <h1 class="text-4xl sm:text-5xl xl:text-6xl font-extrabold text-secondary-900 leading-[1.08] mb-6 text-balance max-w-4xl mx-auto">
            Rebuilding
            <span class="relative whitespace-nowrap">
                <span class="relative z-10">trust</span>
                <span class="absolute left-0 bottom-1 h-3 w-full bg-accent-300/70 rounded -z-0" aria-hidden="true"></span>
            </span>
            in rentals
        </h1>
        <p class="text-lg text-secondary-600 max-w-2xl mx-auto leading-relaxed">
            From a simple question about lost deposits, we built a platform to make rental security deposits
            transparent, secure, and fair for everyone.
        </p>
    </div>
</section>

<!-- ============================ STORY ============================ -->
<section class="section-padding bg-white">
    <div class="container mx-auto px-4">
        <div class="grid lg:grid-cols-2 gap-14 items-center">
            <div class="animate-on-scroll">
                <h2 class="text-3xl lg:text-4xl font-extrabold text-secondary-900 mb-6 text-balance">It started with one question</h2>
                <div class="space-y-4 text-secondary-600 text-lg leading-relaxed">
                    <p>
                        It began with Rentalynk, a property-finder app we built to make house hunting simple. But as we
                        talked to users, a pattern emerged — tenants weren't just looking for homes, they were looking
                        for fairness. One question kept coming up:
                    </p>
                    <blockquote class="border-l-4 border-accent-500 bg-neutral-50 rounded-r-xl px-5 py-4 text-secondary-900 font-semibold italic">
                        "Can you help me recover my rental security deposit?"
                    </blockquote>
                    <p>That question changed everything.</p>
                    <p>
                        The rental listing market was crowded, but trust between tenants and landlords was still broken.
                        Disputes, unclear deductions, and lost payments were everywhere. So we took a new path and built
                        <span class="font-semibold text-secondary-900">est8Ledger</span> — using blockchain to give both
                        sides a transparent, tamper-proof way to manage deposits.
                    </p>
                    <p>
                        Rentalynk has grown into a software company for real estate professionals, while est8Ledger stands
                        on its own — dedicated to rental relationships built on accountability and mutual trust.
                    </p>
                </div>
            </div>

            <div class="relative animate-on-scroll">
                <div class="absolute -inset-6 bg-gradient-to-tr from-primary-200/40 to-accent-200/40 blur-3xl rounded-full -z-10" aria-hidden="true"></div>
                <div class="rounded-2xl border border-secondary-200 bg-white shadow-2xl p-2">
                    <img src="/app_mock_ups/tenancy_details.png" alt="est8Ledger platform interface showing tenancy and deposit details" class="w-full rounded-xl" loading="lazy">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ============================ VALUES ============================ -->
<section class="section-padding bg-neutral-50">
    <div class="container mx-auto px-4">
        <div class="text-center max-w-2xl mx-auto mb-12">
            <div class="inline-flex items-center bg-primary-50 border border-primary-100 text-primary-700 px-4 py-1.5 rounded-full text-sm font-semibold mb-5">
                <i class="bi bi-compass-fill mr-2"></i>
                What we stand for
            </div>
            <h2 class="text-3xl lg:text-4xl font-extrabold text-secondary-900 mb-4 text-balance">The principles behind every feature</h2>
            <p class="text-secondary-600">Three commitments guide how we design est8Ledger.</p>
        </div>

        <div class="grid md:grid-cols-3 gap-6 animate-stagger">
            <?php
            $values = [
                ['bi-eye-fill', 'Transparency', 'Every transaction and inspection is recorded and independently verifiable by both parties.'],
                ['bi-shield-lock-fill', 'Security', 'Blockchain-backed records and regulated escrow give your money bank-grade protection.'],
                ['bi-balance-scale', 'Fairness', 'Balanced outcomes that protect landlords and tenants equally — no winners or losers.'],
            ];
            foreach ($values as $v): ?>
            <div class="stagger-item card-lift bg-white rounded-2xl border border-secondary-200 p-8">
                <div class="w-14 h-14 rounded-xl bg-primary-50 text-primary-700 flex items-center justify-center mb-5">
                    <i class="bi <?= $v[0] ?> text-2xl"></i>
                </div>
                <h3 class="text-lg font-bold text-secondary-900 mb-2"><?= $v[1] ?></h3>
                <p class="text-secondary-600 text-sm leading-relaxed"><?= $v[2] ?></p>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ============================ TEAM ============================ -->
<section class="section-padding bg-white">
    <div class="container mx-auto px-4">
        <div class="text-center max-w-2xl mx-auto mb-12">
            <div class="inline-flex items-center bg-accent-100 text-accent-800 px-4 py-1.5 rounded-full text-sm font-semibold mb-5">
                <i class="bi bi-people-fill mr-2"></i>
                Meet the team
            </div>
            <h2 class="text-3xl lg:text-4xl font-extrabold text-secondary-900 mb-4 text-balance">The people building est8Ledger</h2>
            <p class="text-secondary-600">A team obsessed with making rental deposits fair across East Africa.</p>
        </div>

        <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6 animate-stagger">
            <?php
            // Members render in leadership order. 'accent' flags the founder card highlight.
            $team = [
                ['Katende Hakim G', 'Founder &amp; CEO', 'KH', 'bi-rocket-takeoff-fill', true],
                ['AbuBaker Ssemugoma', 'Chief Technology Officer', 'AS', 'bi-cpu-fill', false],
                ['Eduku Patrick', 'Chief Financial Officer', 'EP', 'bi-graph-up-arrow', false],
                ['Kisaakye Allan K', 'Chief Marketing Officer', 'KA', 'bi-megaphone-fill', false],
            ];
            foreach ($team as $m):
                $highlight = $m[4];
            ?>
            <div class="stagger-item card-lift bg-white rounded-2xl border <?= $highlight ? 'border-primary-200 ring-1 ring-primary-100' : 'border-secondary-200' ?> p-7 text-center">
                <div class="relative mx-auto w-24 h-24 mb-5">
                    <div class="w-24 h-24 rounded-2xl <?= $highlight ? 'bg-gradient-to-br from-primary-600 to-primary-800' : 'bg-gradient-to-br from-secondary-700 to-secondary-900' ?> text-white flex items-center justify-center text-2xl font-extrabold tracking-wide">
                        <?= $m[2] ?>
                    </div>
                    <span class="absolute -bottom-2 -right-2 w-9 h-9 rounded-xl bg-accent-500 text-accent-900 flex items-center justify-center shadow-md">
                        <i class="bi <?= $m[3] ?> text-sm"></i>
                    </span>
                </div>
                <h3 class="text-lg font-bold text-secondary-900"><?= $m[0] ?></h3>
                <p class="text-sm font-semibold <?= $highlight ? 'text-primary-700' : 'text-secondary-500' ?> mt-1"><?= $m[1] ?></p>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ============================ PROBLEM → SOLUTION ============================ -->
<section class="section-padding bg-neutral-50">
    <div class="container mx-auto px-4">
        <div class="grid lg:grid-cols-2 gap-12 items-center">
            <div>
                <div class="inline-flex items-center bg-red-50 text-red-700 px-4 py-1.5 rounded-full text-sm font-semibold mb-5">
                    <i class="bi bi-exclamation-triangle-fill mr-2"></i>
                    The problem we solve
                </div>
                <h2 class="text-3xl lg:text-4xl font-extrabold text-secondary-900 mb-6 text-balance">Deposit disputes cost everyone</h2>
                <ul class="space-y-4">
                    <?php
                    $problems = [
                        ['bi-cash-stack', 'Lost deposits', 'Tenants lose money to unclear deductions and missing documentation.'],
                        ['bi-clock-history', 'Drawn-out disputes', 'Resolving a contested deposit can take months and legal fees.'],
                        ['bi-emoji-frown', 'Broken trust', 'Disputes sour relationships and damage reputations on both sides.'],
                    ];
                    foreach ($problems as $p): ?>
                    <li class="flex items-start gap-4">
                        <span class="flex-shrink-0 w-10 h-10 rounded-lg bg-red-50 text-red-600 flex items-center justify-center"><i class="bi <?= $p[0] ?>"></i></span>
                        <div>
                            <p class="font-semibold text-secondary-900"><?= $p[1] ?></p>
                            <p class="text-sm text-secondary-600"><?= $p[2] ?></p>
                        </div>
                    </li>
                    <?php endforeach; ?>
                </ul>
            </div>

            <div>
                <div class="inline-flex items-center bg-accent-100 text-accent-800 px-4 py-1.5 rounded-full text-sm font-semibold mb-5">
                    <i class="bi bi-check2-circle mr-2"></i>
                    How est8Ledger fixes it
                </div>
                <div class="space-y-4">
                    <?php
                    $solutions = [
                        ['1', 'Instant documentation', 'Geo-tagged, timestamped inspections create immutable move-in/move-out records.'],
                        ['2', 'Transparent deductions', 'Every charge is documented and visible to both parties.'],
                        ['3', 'Secure escrow', 'Deposits are held in regulated escrow with blockchain verification.'],
                        ['4', 'Fast resolution', 'Clear evidence means refunds in days, not months.'],
                    ];
                    foreach ($solutions as $s): ?>
                    <div class="flex items-start gap-4 bg-white rounded-xl border border-secondary-200 p-4 card-lift">
                        <span class="flex-shrink-0 w-9 h-9 rounded-lg bg-primary-700 text-white flex items-center justify-center font-bold"><?= $s[0] ?></span>
                        <div>
                            <p class="font-semibold text-secondary-900"><?= $s[1] ?></p>
                            <p class="text-sm text-secondary-600"><?= $s[2] ?></p>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ============================ CTA ============================ -->
<section class="py-16 lg:py-20 bg-white">
    <div class="container mx-auto px-4">
        <div class="gradient-cta rounded-3xl px-8 py-14 lg:px-16 text-center relative overflow-hidden">
            <div class="absolute inset-0 opacity-10" aria-hidden="true">
                <i class="bi bi-buildings text-white text-[10rem] absolute -bottom-6 -right-2"></i>
            </div>
            <div class="relative z-10 max-w-2xl mx-auto">
                <h2 class="text-3xl lg:text-4xl font-extrabold text-white mb-4 text-balance">Ready to transform your rental experience?</h2>
                <p class="text-lg text-white/85 mb-8">Join landlords and tenants across East Africa eliminating deposit disputes with est8Ledger.</p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <button onclick="openDemoModal()" class="btn-accent px-8 py-3.5 rounded-xl text-base inline-flex items-center justify-center">
                        Join the Waitlist
                        <i class="bi bi-arrow-right ml-2"></i>
                    </button>
                    <a href="/contact-us" class="px-8 py-3.5 rounded-xl text-base font-semibold text-white border-2 border-white/30 hover:bg-white/10 transition inline-flex items-center justify-center">
                        Contact Us
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<?= $this->endSection() ?>
