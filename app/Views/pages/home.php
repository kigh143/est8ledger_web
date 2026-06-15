<?= $this->extend('layouts/main') ?>

<?= $this->section('css') ?>
<!-- Page-level structured data for rich search results -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "WebSite",
  "name": "est8Ledger",
  "url": "https://est8ledger.com/",
  "potentialAction": {
    "@type": "SearchAction",
    "target": "https://est8ledger.com/blogs?q={search_term_string}",
    "query-input": "required name=search_term_string"
  }
}
</script>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Service",
  "serviceType": "Rental Security Deposit Escrow & Management",
  "name": "est8Ledger Rental Security Deposit Protection",
  "description": "Blockchain-secured escrow, digital tenancy agreements, and tamper-proof move-in and move-out inspections that prevent rental security deposit disputes between landlords and tenants.",
  "provider": {
    "@type": "Organization",
    "name": "est8Ledger",
    "url": "https://est8ledger.com"
  },
  "areaServed": [
    { "@type": "Country", "name": "Uganda" },
    { "@type": "Country", "name": "Kenya" },
    { "@type": "Country", "name": "Tanzania" }
  ],
  "audience": {
    "@type": "Audience",
    "audienceType": "Landlords, Tenants, and Property Managers"
  }
}
</script>
<?php if (!empty($faqs)): ?>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    <?php foreach ($faqs as $i => $faq): ?>
    {
      "@type": "Question",
      "name": <?= json_encode($faq['question']) ?>,
      "acceptedAnswer": { "@type": "Answer", "text": <?= json_encode($faq['answer']) ?> }
    }<?= $i < count($faqs) - 1 ? ',' : '' ?>
    <?php endforeach; ?>
  ]
}
</script>
<?php endif; ?>
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<!-- ============================ HERO ============================ -->
<section class="relative gradient-hero overflow-hidden">
    <div class="container mx-auto px-4 pt-16 pb-20 lg:pt-24 lg:pb-28">
        <div class="grid lg:grid-cols-2 gap-12 lg:gap-16 items-center">
            <!-- Copy -->
            <div class="text-center lg:text-left">
                <div class="inline-flex items-center bg-primary-50 border border-primary-100 text-primary-700 px-4 py-1.5 rounded-full text-sm font-semibold mb-6">
                    <span class="w-2 h-2 rounded-full bg-accent-500 mr-2"></span>
                    Blockchain-secured deposit escrow
                </div>

                <h1 class="text-4xl sm:text-5xl xl:text-6xl font-extrabold text-secondary-900 leading-[1.08] mb-6 text-balance">
                    End rental
                    <span class="relative whitespace-nowrap">
                        <span class="relative z-10">security deposit</span>
                        <span class="absolute left-0 bottom-1 h-3 w-full bg-accent-300/70 rounded -z-0" aria-hidden="true"></span>
                    </span>
                    disputes for good
                </h1>

                <p class="text-lg text-secondary-600 mb-8 max-w-xl mx-auto lg:mx-0 leading-relaxed">
                    est8Ledger holds deposits in <span class="font-semibold text-secondary-900">secure escrow</span>,
                    captures <span class="font-semibold text-secondary-900">tamper-proof move-in &amp; move-out inspections</span>,
                    and signs <span class="font-semibold text-secondary-900">digital tenancy agreements</span> —
                    so landlords and tenants finally trust the same evidence.
                </p>

                <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start mb-8">
                    <button onclick="openDemoModal()" class="btn-primary text-white px-7 py-3.5 rounded-xl font-semibold text-base inline-flex items-center justify-center">
                        Join the Waitlist
                        <i class="bi bi-arrow-right ml-2"></i>
                    </button>
                    <button onclick="document.getElementById('how-it-works').scrollIntoView({behavior:'smooth'})" class="btn-secondary px-7 py-3.5 rounded-xl text-base inline-flex items-center justify-center">
                        <i class="bi bi-play-circle mr-2"></i>
                        See How It Works
                    </button>
                </div>

                <!-- Inline trust signals -->
                <div class="flex flex-wrap items-center gap-x-6 gap-y-3 justify-center lg:justify-start text-sm text-secondary-600">
                    <span class="inline-flex items-center"><i class="bi bi-shield-check text-accent-600 mr-2"></i>Regulated escrow</span>
                    <span class="inline-flex items-center"><i class="bi bi-fingerprint text-accent-600 mr-2"></i>Tamper-proof records</span>
                    <span class="inline-flex items-center"><i class="bi bi-phone text-accent-600 mr-2"></i>Built for East Africa</span>
                </div>
            </div>

            <!-- App mockup -->
            <div class="relative">
                <div class="absolute -inset-6 bg-gradient-to-tr from-primary-200/40 to-accent-200/40 blur-3xl rounded-full -z-10" aria-hidden="true"></div>
                <div class="relative mx-auto max-w-sm">
                    <div class="rounded-[2rem] border border-secondary-200 bg-white shadow-2xl p-2">
                        <img src="/app_mock_ups/active_tenancy.png"
                             alt="est8Ledger mobile app showing an active tenancy with deposit status and inspection records"
                             class="w-full h-auto rounded-[1.6rem]"
                             width="640" height="1280" fetchpriority="high">
                    </div>
                    <!-- Floating stat card -->
                    <div class="hidden sm:flex absolute -left-6 bottom-16 bg-white rounded-xl shadow-xl border border-secondary-100 px-4 py-3 items-center gap-3">
                        <div class="w-10 h-10 rounded-lg bg-accent-100 flex items-center justify-center">
                            <i class="bi bi-cash-coin text-accent-700"></i>
                        </div>
                        <div class="text-left">
                            <p class="text-xs text-secondary-500">Deposit status</p>
                            <p class="text-sm font-bold text-secondary-900">Secured in escrow</p>
                        </div>
                    </div>
                    <div class="hidden sm:flex absolute -right-4 top-12 bg-white rounded-xl shadow-xl border border-secondary-100 px-4 py-3 items-center gap-3">
                        <div class="w-10 h-10 rounded-lg bg-primary-50 flex items-center justify-center">
                            <i class="bi bi-camera text-primary-700"></i>
                        </div>
                        <div class="text-left">
                            <p class="text-xs text-secondary-500">Inspection</p>
                            <p class="text-sm font-bold text-secondary-900">Geo-tagged &amp; timed</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ============================ TRUST BAR ============================ -->
<section class="bg-white border-y border-secondary-100">
    <div class="container mx-auto px-4 py-8">
        <p class="text-center text-xs font-semibold tracking-widest text-secondary-400 uppercase mb-6">
            Secure, transparent &amp; verifiable by design
        </p>
        <div class="flex flex-wrap justify-center items-center gap-x-10 gap-y-4 text-secondary-500">
            <span class="inline-flex items-center font-semibold"><i class="bi bi-shield-lock-fill text-primary-700 mr-2"></i>Blockchain Secured</span>
            <span class="inline-flex items-center font-semibold"><i class="bi bi-bank text-primary-700 mr-2"></i>Regulated Escrow</span>
            <span class="inline-flex items-center font-semibold"><i class="bi bi-file-earmark-lock2 text-primary-700 mr-2"></i>Digital Agreements</span>
            <span class="inline-flex items-center font-semibold"><i class="bi bi-patch-check-fill text-primary-700 mr-2"></i>Audit Trail</span>
            <img src="/Built-on-XRPL-Color-Horizontal-White.png" alt="Built on the XRP Ledger" class="h-7 invert opacity-80" loading="lazy">
        </div>
    </div>
</section>

<!-- ============================ THE PROBLEM ============================ -->
<section class="section-padding bg-neutral-50">
    <div class="container mx-auto px-4">
        <div class="grid lg:grid-cols-2 gap-14 items-center">
            <div class="order-2 lg:order-1 relative">
                <div class="rounded-2xl overflow-hidden shadow-xl border border-secondary-100">
                    <img src="/website_images/argument.jpeg"
                         alt="A landlord and tenant arguing over a withheld rental security deposit"
                         class="w-full h-auto object-cover" loading="lazy">
                </div>
                <div class="absolute -bottom-5 left-6 right-6 bg-white rounded-xl shadow-lg border border-secondary-100 p-4 flex items-center gap-3">
                    <i class="bi bi-exclamation-octagon-fill text-red-500 text-2xl"></i>
                    <p class="text-sm text-secondary-700 font-medium">Most disputes come down to one thing: <span class="font-bold">no shared proof.</span></p>
                </div>
            </div>

            <div class="order-1 lg:order-2">
                <div class="inline-flex items-center bg-red-50 text-red-700 px-4 py-1.5 rounded-full text-sm font-semibold mb-5">
                    <i class="bi bi-exclamation-triangle-fill mr-2"></i>
                    The deposit problem
                </div>
                <h2 class="text-3xl lg:text-4xl font-extrabold text-secondary-900 mb-5 text-balance">
                    When the tenancy ends, the fight over the deposit begins
                </h2>
                <p class="text-lg text-secondary-600 mb-8 leading-relaxed">
                    Deposits are paid in cash, held informally, and judged from memory. With no neutral record of the
                    property's condition, every refund turns into a standoff.
                </p>

                <ul class="space-y-4">
                    <?php
                    $problems = [
                        ['bi-arrow-counterclockwise', 'Should the deposit be returned at all?', 'Endless back-and-forth with no neutral referee.'],
                        ['bi-hammer', 'Damage, unpaid rent &amp; cleaning claims', 'Charges asserted without dated, verifiable evidence.'],
                        ['bi-cash-stack', 'Landlords withholding deposits unfairly', 'Money disappears with no breakdown or accountability.'],
                        ['bi-x-octagon', 'Tenants refusing legitimate deductions', 'Genuine damage gets disputed because trust is gone.'],
                        ['bi-camera-video-off', 'No evidence of move-in vs move-out condition', 'Nobody documented the property — so it is one word against another.'],
                        ['bi-emoji-frown', 'Broken trust between landlords &amp; tenants', 'Each side assumes the worst of the other.'],
                    ];
                    foreach ($problems as $p): ?>
                    <li class="flex items-start gap-4">
                        <span class="flex-shrink-0 w-10 h-10 rounded-lg bg-red-50 text-red-600 flex items-center justify-center">
                            <i class="bi <?= $p[0] ?>"></i>
                        </span>
                        <div>
                            <p class="font-semibold text-secondary-900"><?= $p[1] ?></p>
                            <p class="text-sm text-secondary-600"><?= $p[2] ?></p>
                        </div>
                    </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- ============================ THE SOLUTION ============================ -->
<section class="section-padding bg-white" id="solution">
    <div class="container mx-auto px-4">
        <div class="text-center max-w-3xl mx-auto mb-14 animate-on-scroll">
            <div class="inline-flex items-center bg-accent-100 text-accent-800 px-4 py-1.5 rounded-full text-sm font-semibold mb-5">
                <i class="bi bi-lightbulb-fill mr-2"></i>
                The est8Ledger solution
            </div>
            <h2 class="text-3xl lg:text-4xl font-extrabold text-secondary-900 mb-5 text-balance">
                One transparent system every party can trust
            </h2>
            <p class="text-lg text-secondary-600">
                est8Ledger replaces cash-in-hand deposits and faded memories with escrow, digital agreements, and
                tamper-proof records — a single source of truth from move-in to refund.
            </p>
        </div>

        <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6 animate-stagger">
            <?php
            $pillars = [
                ['bi-safe2', 'Secure escrow', 'Deposits are held in regulated escrow — not in a landlord\'s pocket — and released only per the signed agreement and inspection results.'],
                ['bi-file-earmark-text', 'Digital tenancy agreements', 'Terms, deposit amount, and deduction rules are signed digitally and stored, so expectations are clear from day one.'],
                ['bi-camera2', 'Verified inspections', 'Geo-tagged, timestamped photo inspections at move-in and move-out create an objective before-and-after record.'],
                ['bi-link-45deg', 'Tamper-proof ledger', 'Every agreement, inspection, and payout is written to a blockchain ledger that cannot be secretly altered.'],
            ];
            foreach ($pillars as $i => $pl):
                $accentCard = $i % 2 === 1;
            ?>
            <div class="stagger-item card-lift bg-white rounded-2xl border border-secondary-200 p-7 h-full">
                <div class="w-14 h-14 rounded-xl flex items-center justify-center mb-5 <?= $accentCard ? 'bg-accent-100 text-accent-800' : 'bg-primary-50 text-primary-700' ?>">
                    <i class="bi <?= $pl[0] ?> text-2xl"></i>
                </div>
                <h3 class="text-lg font-bold text-secondary-900 mb-2"><?= $pl[1] ?></h3>
                <p class="text-sm text-secondary-600 leading-relaxed"><?= $pl[2] ?></p>
            </div>
            <?php endforeach; ?>
        </div>

        <!-- Outcome strip -->
        <div class="mt-12 grid sm:grid-cols-3 gap-4">
            <div class="flex items-center gap-3 rounded-xl bg-neutral-50 border border-secondary-100 px-5 py-4">
                <i class="bi bi-shield-fill-check text-accent-600 text-2xl"></i>
                <p class="text-sm font-semibold text-secondary-800">No more "your word vs mine"</p>
            </div>
            <div class="flex items-center gap-3 rounded-xl bg-neutral-50 border border-secondary-100 px-5 py-4">
                <i class="bi bi-lightning-charge-fill text-accent-600 text-2xl"></i>
                <p class="text-sm font-semibold text-secondary-800">Refunds in days, not months</p>
            </div>
            <div class="flex items-center gap-3 rounded-xl bg-neutral-50 border border-secondary-100 px-5 py-4">
                <i class="bi bi-people-fill text-accent-600 text-2xl"></i>
                <p class="text-sm font-semibold text-secondary-800">Fair for landlords and tenants</p>
            </div>
        </div>
    </div>
</section>

<!-- ============================ HOW IT WORKS ============================ -->
<section class="section-padding bg-neutral-50 relative overflow-hidden" id="how-it-works">
    <div class="container mx-auto px-4 relative z-10">
        <div class="text-center max-w-3xl mx-auto mb-16 animate-on-scroll">
            <div class="inline-flex items-center bg-primary-50 border border-primary-100 text-primary-700 px-4 py-1.5 rounded-full text-sm font-semibold mb-5">
                <i class="bi bi-diagram-3-fill mr-2"></i>
                How it works
            </div>
            <h2 class="text-3xl lg:text-4xl font-extrabold text-secondary-900 mb-5 text-balance">
                Your deposit's journey — documented at every step
            </h2>
            <p class="text-lg text-secondary-600">
                Six clear stages take a deposit from agreement to refund, with verifiable evidence captured along the way.
            </p>
        </div>

        <div class="grid md:grid-cols-2 xl:grid-cols-3 gap-6 animate-stagger">
            <?php
            $steps = [
                ['1', 'bi-file-earmark-text', 'Prepare &amp; sign agreement', 'A digital tenancy agreement sets standardized terms, the deposit amount, and clear deduction rules — signed by both parties.', ['Legal compliance', 'Digital signatures', 'Standardized terms']],
                ['2', 'bi-camera', 'Move-in inspection', 'Geo-tagged, timestamped photos record the exact condition of the property, creating the baseline both sides agree on.', ['Photo documentation', 'Condition baseline', 'Shared records']],
                ['3', 'bi-shield-lock', 'Secure the deposit', 'Funds move into regulated escrow and are recorded on the blockchain — protected and accessible only through authorized steps.', ['Regulated escrow', 'Blockchain verified', 'No unilateral access']],
                ['4', 'bi-graph-up-arrow', 'Optional investment', 'By mutual agreement, the deposit can earn returns in low-risk money markets, with profit shared transparently.', ['Profit to tenant', 'Profit to landlord', 'Fully optional']],
                ['5', 'bi-search', 'Move-out inspection', 'A move-out inspection is compared directly against the move-in baseline, so deductions are based on evidence.', ['Before/after compare', 'Photo evidence', 'Transparent assessment']],
                ['6', 'bi-cash-coin', 'Fast, fair refund', 'The deposit is returned based on documented results, with an auditable record of exactly how the figure was reached.', ['Clear calculations', 'Secure payout', 'Complete audit trail']],
            ];
            foreach ($steps as $s): ?>
            <div class="stagger-item card-lift bg-white border border-secondary-200 rounded-2xl p-7 h-full">
                <div class="flex items-center justify-between mb-5">
                    <span class="w-12 h-12 rounded-xl bg-gradient-to-br from-primary-600 to-primary-800 text-white flex items-center justify-center font-bold text-lg shadow-lg">
                        <?= $s[0] ?>
                    </span>
                    <i class="bi <?= $s[1] ?> text-2xl text-primary-300"></i>
                </div>
                <h3 class="text-lg font-bold text-secondary-900 mb-2"><?= $s[2] ?></h3>
                <p class="text-sm text-secondary-600 leading-relaxed mb-5"><?= $s[3] ?></p>
                <ul class="space-y-2">
                    <?php foreach ($s[4] as $f): ?>
                    <li class="flex items-center text-sm text-secondary-600">
                        <i class="bi bi-check-circle-fill text-accent-600 mr-2"></i><?= $f ?>
                    </li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ============================ BLOCKCHAIN / XRPL ============================ -->
<section class="section-padding gradient-cta relative overflow-hidden">
    <div class="absolute inset-0 opacity-10" aria-hidden="true">
        <i class="bi bi-diagram-3 text-white text-[12rem] absolute top-6 left-6"></i>
        <i class="bi bi-shield-lock text-accent-400 text-[8rem] absolute bottom-6 right-12"></i>
    </div>
    <div class="container mx-auto px-4 relative z-10">
        <div class="grid lg:grid-cols-2 gap-12 items-center">
            <div>
                <div class="inline-flex items-center bg-white/10 backdrop-blur-sm border border-white/20 text-white px-4 py-1.5 rounded-full text-sm font-semibold mb-5">
                    <i class="bi bi-link-45deg mr-2 text-accent-400"></i>
                    Why blockchain
                </div>
                <h2 class="text-3xl lg:text-4xl font-extrabold text-white mb-5 text-balance">
                    Records nobody can quietly rewrite
                </h2>
                <p class="text-lg text-white/85 mb-8 leading-relaxed">
                    Built on the XRP Ledger (XRPL), every agreement, inspection, and payout is cryptographically recorded.
                    Once it's on the ledger, it can't be secretly edited or deleted — that's what turns "trust me" into proof.
                </p>
                <div class="grid sm:grid-cols-2 gap-4 mb-8">
                    <div class="flex items-start gap-3">
                        <i class="bi bi-patch-check-fill text-accent-400 text-xl mt-0.5"></i>
                        <p class="text-white/90 text-sm"><span class="font-semibold text-white">Immutable evidence</span> — inspections &amp; agreements can't be altered after the fact.</p>
                    </div>
                    <div class="flex items-start gap-3">
                        <i class="bi bi-eye-fill text-accent-400 text-xl mt-0.5"></i>
                        <p class="text-white/90 text-sm"><span class="font-semibold text-white">Shared visibility</span> — both parties see the same source of truth.</p>
                    </div>
                    <div class="flex items-start gap-3">
                        <i class="bi bi-lightning-charge-fill text-accent-400 text-xl mt-0.5"></i>
                        <p class="text-white/90 text-sm"><span class="font-semibold text-white">Fast settlement</span> — low-cost, near-instant transactions.</p>
                    </div>
                    <div class="flex items-start gap-3">
                        <i class="bi bi-clipboard-check-fill text-accent-400 text-xl mt-0.5"></i>
                        <p class="text-white/90 text-sm"><span class="font-semibold text-white">Full audit trail</span> — every step is accountable and traceable.</p>
                    </div>
                </div>
            </div>
            <div class="flex justify-center">
                <div class="bg-white/10 backdrop-blur-sm border border-white/20 rounded-2xl p-8 w-full max-w-md text-center">
                    <img src="/Built-on-XRPL-Color-Horizontal-White.png" alt="Built on the XRP Ledger" class="h-14 mx-auto mb-6" loading="lazy">
                    <div class="grid grid-cols-3 gap-4 text-white">
                        <div>
                            <p class="text-2xl font-extrabold text-accent-400">100%</p>
                            <p class="text-xs text-white/70 mt-1">Verifiable records</p>
                        </div>
                        <div>
                            <p class="text-2xl font-extrabold text-accent-400">~3s</p>
                            <p class="text-xs text-white/70 mt-1">Settlement time</p>
                        </div>
                        <div>
                            <p class="text-2xl font-extrabold text-accent-400">24/7</p>
                            <p class="text-xs text-white/70 mt-1">Always on</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ============================ FOR LANDLORDS / TENANTS ============================ -->
<section class="section-padding bg-white">
    <div class="container mx-auto px-4">
        <div class="text-center max-w-3xl mx-auto mb-14 animate-on-scroll">
            <div class="inline-flex items-center bg-primary-50 border border-primary-100 text-primary-700 px-4 py-1.5 rounded-full text-sm font-semibold mb-5">
                <i class="bi bi-people-fill mr-2"></i>
                Built for both sides
            </div>
            <h2 class="text-3xl lg:text-4xl font-extrabold text-secondary-900 mb-5 text-balance">Why landlords and tenants choose est8Ledger</h2>
            <p class="text-lg text-secondary-600">One platform that protects everyone's interests — no winners and losers, just fair outcomes.</p>
        </div>

        <div class="grid lg:grid-cols-2 gap-8 animate-stagger">
            <!-- Landlords -->
            <div class="stagger-item card-lift bg-white rounded-2xl border border-secondary-200 overflow-hidden">
                <div class="h-44 overflow-hidden bg-secondary-100">
                    <img src="/app_mock_ups/property_dashbaord.png" alt="Property management dashboard for landlords" class="w-full h-full object-cover object-top" loading="lazy">
                </div>
                <div class="p-8">
                    <div class="flex items-center mb-6">
                        <div class="bg-primary-700 w-14 h-14 rounded-xl flex items-center justify-center mr-4">
                            <i class="bi bi-building text-2xl text-white"></i>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-secondary-900">For landlords &amp; managers</h3>
                            <p class="text-secondary-500 text-sm">Protect income, prove your case</p>
                        </div>
                    </div>
                    <ul class="space-y-4">
                        <?php
                        $landlord = [
                            ['Documented evidence', 'Timestamped, geo-tagged inspections justify every deduction.'],
                            ['No more endless disputes', 'Shared records end the back-and-forth over damage and cleaning.'],
                            ['Earn on idle deposits', 'Optional, transparent profit-sharing on held funds.'],
                            ['Manage every property', 'Track tenancies, maintenance, and refunds in one dashboard.'],
                        ];
                        foreach ($landlord as $l): ?>
                        <li class="flex items-start">
                            <span class="w-7 h-7 rounded-full bg-primary-50 flex items-center justify-center mr-3 mt-0.5 flex-shrink-0">
                                <i class="bi bi-check-lg text-primary-700 text-sm"></i>
                            </span>
                            <div>
                                <p class="font-semibold text-secondary-900"><?= $l[0] ?></p>
                                <p class="text-sm text-secondary-600"><?= $l[1] ?></p>
                            </div>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>

            <!-- Tenants -->
            <div class="stagger-item card-lift bg-white rounded-2xl border border-secondary-200 overflow-hidden">
                <div class="h-44 overflow-hidden bg-secondary-100">
                    <img src="/app_mock_ups/active_tenancy.png" alt="Active tenancy and deposit tracking for tenants" class="w-full h-full object-cover object-top" loading="lazy">
                </div>
                <div class="p-8">
                    <div class="flex items-center mb-6">
                        <div class="bg-accent-500 w-14 h-14 rounded-xl flex items-center justify-center mr-4">
                            <i class="bi bi-person-heart text-2xl text-accent-900"></i>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-secondary-900">For tenants</h3>
                            <p class="text-secondary-500 text-sm">Your deposit, your rights, your proof</p>
                        </div>
                    </div>
                    <ul class="space-y-4">
                        <?php
                        $tenant = [
                            ['Deposit held safely', 'Funds sit in regulated escrow, not in a landlord\'s account.'],
                            ['Total transparency', 'See the same move-in and move-out evidence the landlord sees.'],
                            ['Earn returns', 'Your idle deposit can grow through profit-sharing.'],
                            ['Get refunds faster', 'Clear evidence means quick, fair payouts at move-out.'],
                        ];
                        foreach ($tenant as $t): ?>
                        <li class="flex items-start">
                            <span class="w-7 h-7 rounded-full bg-accent-100 flex items-center justify-center mr-3 mt-0.5 flex-shrink-0">
                                <i class="bi bi-check-lg text-accent-800 text-sm"></i>
                            </span>
                            <div>
                                <p class="font-semibold text-secondary-900"><?= $t[0] ?></p>
                                <p class="text-sm text-secondary-600"><?= $t[1] ?></p>
                            </div>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Feature mockups -->
        <div class="grid md:grid-cols-2 gap-6 mt-10 animate-stagger">
            <div class="stagger-item rounded-2xl overflow-hidden border border-secondary-200 shadow-sm card-lift">
                <img src="/app_mock_ups/property_inspections.png" alt="Property inspection records with photo evidence" class="w-full h-72 object-cover object-top" loading="lazy">
            </div>
            <div class="stagger-item rounded-2xl overflow-hidden border border-secondary-200 shadow-sm card-lift">
                <img src="/app_mock_ups/signed_agreement.png" alt="Signed digital tenancy agreement" class="w-full h-72 object-cover object-top" loading="lazy">
            </div>
        </div>
    </div>
</section>

<!-- ============================ TRUST & SECURITY ============================ -->
<section class="section-padding bg-neutral-50">
    <div class="container mx-auto px-4">
        <div class="text-center max-w-2xl mx-auto mb-12">
            <h2 class="text-3xl font-extrabold text-secondary-900 mb-4">Built on trust &amp; security</h2>
            <p class="text-secondary-600">Your money and your data are protected with bank-grade safeguards.</p>
        </div>

        <div class="grid md:grid-cols-3 gap-6">
            <?php
            $trust = [
                ['bi-bank', 'Regulated escrow', 'Deposits sit in fully regulated escrow accounts with banking-level security and compliance.'],
                ['bi-shield-lock', 'Data protection', 'End-to-end encryption and secure handling keep your information private and safe.'],
                ['bi-award', 'Certified fair', 'Transparent, documented procedures ensure fairness for every party involved.'],
            ];
            foreach ($trust as $t): ?>
            <div class="bg-white rounded-2xl border border-secondary-200 p-8 text-center card-lift">
                <div class="bg-primary-50 w-16 h-16 rounded-2xl flex items-center justify-center mx-auto mb-5">
                    <i class="bi <?= $t[0] ?> text-2xl text-primary-700"></i>
                </div>
                <h3 class="text-lg font-bold text-secondary-900 mb-2"><?= $t[1] ?></h3>
                <p class="text-secondary-600 text-sm leading-relaxed"><?= $t[2] ?></p>
            </div>
            <?php endforeach; ?>
        </div>

        <div class="mt-10 flex flex-wrap justify-center items-center gap-x-8 gap-y-3 text-secondary-500">
            <span class="inline-flex items-center font-semibold text-sm"><i class="bi bi-shield-check text-accent-600 mr-2"></i>Blockchain Secured</span>
            <span class="inline-flex items-center font-semibold text-sm"><i class="bi bi-lock text-primary-700 mr-2"></i>SSL Secured</span>
            <span class="inline-flex items-center font-semibold text-sm"><i class="bi bi-check-circle text-accent-600 mr-2"></i>Compliant</span>
            <a href="https://www.crunchbase.com/organization/est8ledger" target="_blank" rel="noopener noreferrer" class="inline-flex items-center px-4 py-2 bg-white border border-secondary-200 rounded-lg hover:border-primary-300 hover:shadow-sm transition">
                <i class="bi bi-graph-up text-primary-700 mr-2"></i>
                <span class="text-sm font-semibold text-primary-700">Featured on Crunchbase</span>
                <i class="bi bi-arrow-up-right text-primary-600 ml-2 text-xs"></i>
            </a>
        </div>
    </div>
</section>

<!-- ============================ FAQ ============================ -->
<?php if (!empty($faqs)): ?>
<section class="section-padding bg-white">
    <div class="container mx-auto px-4">
        <div class="text-center max-w-2xl mx-auto mb-12">
            <div class="inline-flex items-center bg-primary-50 border border-primary-100 text-primary-700 px-4 py-1.5 rounded-full text-sm font-semibold mb-5">
                <i class="bi bi-question-circle-fill mr-2"></i>
                Frequently asked
            </div>
            <h2 class="text-3xl lg:text-4xl font-extrabold text-secondary-900 mb-4 text-balance">Rental security deposit questions, answered</h2>
            <p class="text-secondary-600">Everything you need to know about deposits, escrow, and how est8Ledger keeps it fair.</p>
        </div>

        <div class="max-w-3xl mx-auto space-y-4">
            <?php foreach ($faqs as $faq): ?>
            <details class="faq group bg-neutral-50 border border-secondary-200 rounded-xl px-6 py-5 hover:border-primary-200 transition-colors">
                <summary class="flex items-center justify-between gap-4">
                    <h3 class="text-base font-semibold text-secondary-900"><?= esc($faq['question']) ?></h3>
                    <i class="bi bi-chevron-down faq-icon text-primary-600 text-lg flex-shrink-0"></i>
                </summary>
                <p class="text-secondary-600 leading-relaxed mt-4"><?= esc($faq['answer']) ?></p>
            </details>
            <?php endforeach; ?>
        </div>

        <p class="text-center text-secondary-600 mt-10">
            Still have questions?
            <a href="/contact-us" class="text-primary-700 font-semibold hover:underline">Talk to our team</a>.
        </p>
    </div>
</section>
<?php endif; ?>

<!-- ============================ FINAL CTA ============================ -->
<section class="py-16 lg:py-20 bg-white">
    <div class="container mx-auto px-4">
        <div class="gradient-cta rounded-3xl px-8 py-14 lg:px-16 text-center relative overflow-hidden">
            <div class="absolute inset-0 opacity-10" aria-hidden="true">
                <i class="bi bi-shield-check text-white text-[10rem] absolute -bottom-6 -right-2"></i>
            </div>
            <div class="relative z-10 max-w-2xl mx-auto">
                <h2 class="text-3xl lg:text-4xl font-extrabold text-white mb-4 text-balance">
                    Be first to manage deposits the fair way
                </h2>
                <p class="text-lg text-white/85 mb-8">
                    Join the waitlist and be among the first landlords and tenants to put rental security deposits
                    on a transparent, dispute-proof platform.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <button onclick="openDemoModal()" class="btn-accent px-8 py-3.5 rounded-xl text-base inline-flex items-center justify-center">
                        Join the Waitlist
                        <i class="bi bi-arrow-right ml-2"></i>
                    </button>
                    <a href="/contact-us" class="px-8 py-3.5 rounded-xl text-base font-semibold text-white border-2 border-white/30 hover:bg-white/10 transition inline-flex items-center justify-center">
                        Contact Us
                    </a>
                </div>
                <div class="flex flex-wrap justify-center gap-x-6 gap-y-2 mt-8 text-sm text-white/70">
                    <span class="inline-flex items-center"><i class="bi bi-apple mr-2"></i>Available on iOS</span>
                    <span class="inline-flex items-center"><i class="bi bi-google-play mr-2"></i>Available on Android</span>
                </div>
            </div>
        </div>
    </div>
</section>

<?= $this->endSection() ?>
