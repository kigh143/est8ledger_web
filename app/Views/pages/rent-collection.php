<?= $this->extend('layouts/main') ?>

<?php
    $waNumber = '447930068728';
    $wa = fn (string $message): string => 'https://wa.me/' . $waNumber . '?text=' . rawurlencode($message);
    $mail = fn (string $subject, string $body): string => 'mailto:info@est8ledger.com?subject=' . rawurlencode($subject) . '&body=' . rawurlencode($body);
?>

<?= $this->section('css') ?>
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
<script type="application/ld+json">
    {
    "@context": "https://schema.org",
    "@type": "Service",
    "serviceType": "Landlord Rent Collection and Property Management",
    "provider": {
        "@type": "Organization",
        "name": "est8Ledger",
        "url": "https://est8ledger.com"
    },
    "areaServed": "Uganda",
    "description": "est8Ledger collects and manages rent on behalf of landlords, handling tenant onboarding, rent follow-ups, and inspections, with landlord payouts every 10th of the month.",
    "offers": [
        {
        "@type": "Offer",
        "name": "Rent Collection",
        "description": "Rent collection, tenant onboarding, digital tenancy agreements, rent tracking, payment records, move-in and move-out inspections, landlord dashboard, and automated tenant reminders."
        },
        {
        "@type": "Offer",
        "name": "Managed Rent",
        "description": "Everything in Rent Collection, plus hands-on tenant management, rent follow-ups and arrears management, tenant support, property activity monitoring, eviction process coordination where required, and dedicated support."
        }
    ]
    }
</script>
<style>
    /* Drastic visual pass for the rent collection sales page */
    .rc-flow-arrow {
        display: flex;
        align-items: center;
        justify-content: center;
        color: #a98ff8;
    }
    @media (min-width: 768px) {
        .rc-flow-arrow-desktop { display: flex; }
        .rc-flow-arrow-mobile { display: none; }
    }
    @media (max-width: 767px) {
        .rc-flow-arrow-desktop { display: none; }
        .rc-flow-arrow-mobile { display: flex; }
    }
    .rc-pricing-card {
        position: relative;
    }
    .rc-pricing-badge {
        position: absolute;
        top: -14px;
        left: 50%;
        transform: translateX(-50%);
        white-space: nowrap;
    }
</style>
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<!-- ============================ HERO ============================ -->
<section class="relative gradient-hero overflow-hidden">
    <div class="container mx-auto px-4 pt-8 pb-20 lg:pt-12 lg:pb-24">
        <div class="grid lg:grid-cols-[2fr_2fr] gap-4 lg:gap-10 items-center">
            <div class="text-center lg:text-left">
                <div class="inline-flex items-center bg-accent-100 border border-accent-200 text-accent-800 px-4 py-1.5 rounded-full text-sm font-semibold mb-6">
                    <i class="bi bi-cash-coin mr-2"></i>
                    For landlords with properties in Uganda
                </div>

                <h1 class="text-4xl sm:text-5xl xl:text-6xl font-extrabold text-secondary-900 leading-[1.08] mb-6 text-balance">
                    Get your rent.
                    <span class="relative whitespace-nowrap">
                        <span class="relative z-10">Every 10th.</span>
                        <span class="absolute left-0 bottom-1 h-3 w-full bg-accent-300/70 rounded -z-0" aria-hidden="true"></span>
                    </span>
                    We handle the rest.
                </h1>

                <p class="text-lg text-secondary-600 max-w-xl mx-auto lg:mx-0 leading-relaxed mb-8">
                    We collect your rent and pay you every 10th of the month.
                    <span class="text-secondary-800 font-semibold">No more chasing tenants.</span>
                </p>

                <div class="flex flex-col sm:flex-row gap-3 justify-center lg:justify-start mb-8">
                    <a href="<?= esc($mail('Rent Collection Enquiry', "Hi Est8Ledger,\n\nI'd like to learn more about getting started with your rent collection service."), 'attr') ?>"
                       class="cta-button inline-flex items-center justify-center gap-2.5 px-7 py-3.5 rounded-full btn-primary text-white text-base"
                       data-cta="email_us">
                        <i class="bi bi-envelope-fill"></i>
                        Email Us
                    </a>
                    <a href="<?= esc($wa("Hi Est8Ledger, I'd like to talk to someone about your landlord rent collection service."), 'attr') ?>"
                       target="_blank" rel="noopener"
                       class="cta-button inline-flex items-center justify-center gap-2.5 px-7 py-3.5 rounded-full bg-[#25D366] text-white font-semibold text-base shadow-sm hover:shadow-md hover:-translate-y-0.5 transition-all"
                       data-cta="whatsapp_hero">
                        <i class="bi bi-whatsapp text-xl"></i>
                         WhatsApps Us
                    </a>
                </div>

                <div class="flex flex-wrap items-center justify-center lg:justify-start gap-x-6 gap-y-3 text-sm text-secondary-600">
                    <span class="inline-flex items-center text-sm"><i class="bi bi-calendar2-check text-accent-600 mr-2"></i>Paid every 10th</span>
                    <span class="inline-flex items-center text-sm"><i class="bi bi-eye text-accent-600 mr-2"></i>Full Transparency</span>
                    <span class="inline-flex items-center text-sm"><i class="bi bi-telephone-x text-accent-600 mr-2"></i>Zero tenant chasing</span>
                </div>
            </div>

            <!-- Hero illustration -->
            <div class="relative">
                <!-- <div class="relative mx-auto max-w-md sm:max-w-lg lg:max-w-xl w-full rounded-[2rem] overflow-hidden">        -->
                        <img src="/collectrent.png"
                             alt="Illustration of a landlord's house with a rent collection calendar marked every 10th, a signed tenancy agreement, and coins, representing on-time rent payouts through est8Ledger"
                             class="w-full h-full"
                            fetchpriority="high">
                <!-- </div> -->
            </div>
        </div>
    </div>
</section>

<!-- ============================ YOUR PROPERTY. YOUR RENT. OUR RESPONSIBILITY ============================ -->
<section class="section-padding bg-white" id="what-you-get">
    <div class="container mx-auto px-4">
        <div class="text-center max-w-3xl mx-auto mb-14 animate-on-scroll">
            <div class="inline-flex items-center bg-primary-50 border border-primary-100 text-primary-700 px-4 py-1.5 rounded-full text-sm font-semibold mb-5">
                <i class="bi bi-shield-check mr-2"></i>
                Your property. Your rent. Our responsibility.
            </div>
            <h2 class="text-3xl lg:text-4xl font-extrabold text-secondary-900 mb-5 text-balance">
                What you get with Est8Ledger
            </h2>
            <p class="text-lg text-secondary-600 leading-relaxed">
                Managing rental property shouldn't mean calling tenants every month, tracking payments on WhatsApp,
                or wondering who has paid. With Est8Ledger, we take over the rent collection process and give you a
                clear view of what's happening with your property.
            </p>
        </div>

        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6 max-w-5xl mx-auto animate-stagger">
            <?php
            $benefits = [
                ['bi-calendar2-check-fill', 'Paid every 10th', 'Know exactly when your rental income is coming.'],
                ['bi-grid-1x2-fill', 'One platform for everything', 'See your properties, tenants, rent status, payments, and activity from one dashboard.'],
                ['bi-person-plus-fill', 'We manage tenant onboarding', 'From tenant registration to digital tenancy agreements, we manage the process from the start.'],
                ['bi-cash-coin', 'We collect the rent', 'No more chasing tenants. We handle rent collection and payment follow-ups.'],
                ['bi-camera2', 'Move-in & move-out inspections', 'Keep a digital record of property condition and inspections.'],
                ['bi-bar-chart-line-fill', 'Complete visibility', 'You don\'t have to take our word for it. Log in and see what\'s happening with your properties.'],
            ];
            foreach ($benefits as $b): ?>
            <div class="stagger-item card-lift bg-neutral-50 border border-secondary-200 rounded-2xl p-7 h-full">
                <span class="w-12 h-12 rounded-xl bg-gradient-to-br from-primary-600 to-primary-800 flex items-center justify-center mb-5 shadow-lg">
                    <i class="bi <?= $b[0] ?> text-xl text-white"></i>
                </span>
                <h3 class="text-lg font-bold text-secondary-900 mb-2"><?= $b[1] ?></h3>
                <p class="text-sm text-secondary-600 leading-relaxed"><?= $b[2] ?></p>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ============================ BEFORE / AFTER ============================ -->
<section class="section-padding bg-neutral-50">
    <div class="container mx-auto px-4">
        <div class="text-center max-w-3xl mx-auto mb-12 animate-on-scroll">
            <h2 class="text-3xl lg:text-4xl font-extrabold text-secondary-900 mb-5 text-balance">
                Managing your own rent collection vs. Est8Ledger
            </h2>
        </div>

        <div class="grid md:grid-cols-2 gap-6 max-w-4xl mx-auto animate-stagger">
            <!-- Without -->
            <div class="stagger-item card-lift bg-red-50 border border-red-200 rounded-2xl p-7 h-full">
                <div class="flex items-center gap-3 mb-5">
                    <span class="w-11 h-11 rounded-xl bg-red-500 flex items-center justify-center flex-shrink-0">
                        <i class="bi bi-x-lg text-white text-lg"></i>
                    </span>
                    <h3 class="text-lg font-bold text-secondary-900">Without Est8Ledger</h3>
                </div>
                <ul class="space-y-2.5">
                    <?php
                    $without = [
                        'Calling tenants every month to follow up on rent',
                        'Tracking payments across scattered WhatsApp threads',
                        'Wondering who has paid and who hasn\'t',
                        'No shared record of inspections or property condition',
                        'Chasing arrears and awkward payment conversations yourself',
                    ];
                    foreach ($without as $w): ?>
                    <li class="flex items-start text-sm text-secondary-700">
                        <i class="bi bi-x-circle-fill text-red-500 mr-2 mt-0.5 flex-shrink-0"></i><?= $w ?>
                    </li>
                    <?php endforeach; ?>
                </ul>
            </div>

            <!-- With -->
            <div class="stagger-item card-lift bg-accent-50 border border-accent-200 rounded-2xl p-7 h-full">
                <div class="flex items-center gap-3 mb-5">
                    <span class="w-11 h-11 rounded-xl bg-accent-500 flex items-center justify-center flex-shrink-0">
                        <i class="bi bi-check-lg text-accent-900 text-lg"></i>
                    </span>
                    <h3 class="text-lg font-bold text-secondary-900">With Est8Ledger</h3>
                </div>
                <ul class="space-y-2.5">
                    <?php
                    $with = [
                        'Paid automatically, every 10th of the month',
                        'One dashboard for properties, tenants, rent, and payments',
                        'We handle rent collection and tenant follow-ups',
                        'Digital move-in and move-out inspection records on file',
                        'We manage arrears, you stay in control',
                    ];
                    foreach ($with as $w): ?>
                    <li class="flex items-start text-sm text-secondary-700">
                        <i class="bi bi-check-circle-fill text-accent-600 mr-2 mt-0.5 flex-shrink-0"></i><?= $w ?>
                    </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>

        <p class="text-center text-secondary-800 max-w-2xl mx-auto mt-10 text-xl font-bold text-balance">
            Just one platform. One view. One monthly payout.
        </p>
    </div>
</section>

<!-- ============================ HOW IT FLOWS ============================ -->
<section class="section-padding bg-white">
    <div class="container mx-auto px-4">
        <div class="text-center max-w-3xl mx-auto mb-14 animate-on-scroll">
            <div class="inline-flex items-center bg-primary-50 border border-primary-100 text-primary-700 px-4 py-1.5 rounded-full text-sm font-semibold mb-5">
                <i class="bi bi-diagram-3-fill mr-2"></i>
                How it works
            </div>
            <h2 class="text-3xl lg:text-4xl font-extrabold text-secondary-900 mb-5 text-balance">
                We collect. You get paid.
            </h2>
            <p class="text-lg text-secondary-600">
                Your tenant's rent shouldn't become your monthly headache. Est8Ledger manages the collection
                process so you can focus on owning property, not chasing payments.
            </p>
        </div>

        <div class="flex flex-col md:flex-row items-center justify-center gap-4 max-w-4xl mx-auto animate-stagger">
            <div class="stagger-item card-lift bg-neutral-50 border border-secondary-200 rounded-2xl p-7 text-center flex-1 w-full">
                <span class="w-14 h-14 rounded-2xl bg-primary-50 flex items-center justify-center mx-auto mb-4">
                    <i class="bi bi-person-fill text-2xl text-primary-700"></i>
                </span>
                <h3 class="text-base font-bold text-secondary-900 mb-1">Tenant</h3>
                <p class="text-sm text-secondary-600">Pays rent</p>
            </div>

            <div class="rc-flow-arrow-desktop"><i class="bi bi-arrow-right text-3xl"></i></div>
            <div class="rc-flow-arrow-mobile"><i class="bi bi-arrow-down text-3xl"></i></div>

            <div class="stagger-item card-lift bg-primary-50 border border-primary-200 rounded-2xl p-7 text-center flex-1 w-full ring-1 ring-primary-200">
                <span class="w-14 h-14 rounded-2xl bg-primary-700 flex items-center justify-center mx-auto mb-4 shadow-lg">
                    <i class="bi bi-diagram-3-fill text-2xl text-white"></i>
                </span>
                <h3 class="text-base font-bold text-secondary-900 mb-1">Est8Ledger</h3>
                <p class="text-sm text-secondary-600">Collects &amp; manages rent</p>
            </div>

            <div class="rc-flow-arrow-desktop"><i class="bi bi-arrow-right text-3xl"></i></div>
            <div class="rc-flow-arrow-mobile"><i class="bi bi-arrow-down text-3xl"></i></div>

            <div class="stagger-item card-lift bg-accent-50 border border-accent-200 rounded-2xl p-7 text-center flex-1 w-full">
                <span class="w-14 h-14 rounded-2xl bg-accent-500 flex items-center justify-center mx-auto mb-4">
                    <i class="bi bi-wallet2 text-2xl text-accent-900"></i>
                </span>
                <h3 class="text-base font-bold text-secondary-900 mb-1">You</h3>
                <p class="text-sm text-secondary-600">Get paid every 10th</p>
            </div>
        </div>
    </div>
</section>

<!-- ============================ DASHBOARD VISIBILITY ============================ -->
<section class="section-padding bg-neutral-50">
    <div class="container mx-auto px-4">
        <div class="text-center max-w-3xl mx-auto mb-12 animate-on-scroll">
            <div class="inline-flex items-center bg-primary-50 border border-primary-100 text-primary-700 px-4 py-1.5 rounded-full text-sm font-semibold mb-5">
                <i class="bi bi-display mr-2"></i>
                See everything, from one dashboard
            </div>
            <h2 class="text-3xl lg:text-4xl font-extrabold text-secondary-900 mb-5 text-balance">
                You shouldn't have to ask your property manager
            </h2>
            <p class="text-lg text-secondary-600 leading-relaxed">
                "Has the tenant paid?" "When was the inspection done?" "How many units are occupied?"
                "What's happening with my property?" Est8Ledger puts the answers in your hands.
            </p>
        </div>

        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6 max-w-5xl mx-auto animate-stagger">
            <?php
            $dashboard = [
                ['bi-building', 'Properties', 'See all your properties and units in one place.'],
                ['bi-door-open', 'Occupancy', 'Know which units are occupied, vacant, or becoming available.'],
                ['bi-cash-stack', 'Rent', 'Track expected, collected, and outstanding rent.'],
                ['bi-people-fill', 'Tenants', 'View your tenant information and tenancy status.'],
                ['bi-clipboard-check', 'Inspections', 'Access digital move-in and move-out inspection records.'],
                ['bi-receipt', 'Payments', 'See your rental payment history and records.'],
            ];
            foreach ($dashboard as $d): ?>
            <div class="stagger-item card-lift bg-white border border-secondary-200 rounded-2xl p-6 h-full">
                <span class="w-11 h-11 rounded-xl bg-primary-50 flex items-center justify-center mb-4">
                    <i class="bi <?= $d[0] ?> text-lg text-primary-700"></i>
                </span>
                <h3 class="text-base font-bold text-secondary-900 mb-1.5"><?= $d[1] ?></h3>
                <p class="text-sm text-secondary-600 leading-relaxed"><?= $d[2] ?></p>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ============================ PRICING ============================ -->
<section class="section-padding bg-white" id="pricing">
    <div class="container mx-auto px-4">
        <div class="text-center max-w-3xl mx-auto mb-14 animate-on-scroll">
            <div class="inline-flex items-center bg-primary-50 border border-primary-100 text-primary-700 px-4 py-1.5 rounded-full text-sm font-semibold mb-5">
                <i class="bi bi-tags-fill mr-2"></i>
                Simple, transparent pricing
            </div>
            <h2 class="text-3xl lg:text-4xl font-extrabold text-secondary-900 mb-5 text-balance">
                Choose the plan that works for you
            </h2>
        </div>

        <div class="grid md:grid-cols-2 gap-8 max-w-4xl mx-auto animate-stagger">
            <!-- Rent Collection -->
            <div class="rc-pricing-card stagger-item card-lift bg-white border-2 border-secondary-200 rounded-3xl p-8 h-full">
                <span class="rc-pricing-badge bg-secondary-900 text-white text-xs font-bold uppercase tracking-widest px-4 py-1.5 rounded-full">Most popular</span>
                <h3 class="text-xl font-bold text-secondary-900 mb-1 mt-2">Rent Collection</h3>
                <p class="text-4xl font-extrabold text-primary-700 mb-4">10%<span class="text-base font-semibold text-secondary-500"> of rent collected</span></p>
                <p class="text-sm text-secondary-600 leading-relaxed mb-6">
                    For landlords who want us to manage their rent collection while keeping full visibility of their properties.
                </p>
                <ul class="space-y-2.5 mb-8">
                    <?php
                    $planBasic = [
                        'Rent collection', 'Tenant onboarding', 'Digital tenancy agreements', 'Rent tracking',
                        'Payment records', 'Move-in & move-out inspections', 'Landlord dashboard', 'Automated tenant reminders',
                    ];
                    foreach ($planBasic as $item): ?>
                    <li class="flex items-start text-sm text-secondary-700">
                        <i class="bi bi-check-circle-fill text-primary-600 mr-2 mt-0.5 flex-shrink-0"></i><?= $item ?>
                    </li>
                    <?php endforeach; ?>
                </ul>
                <a href="<?= esc($mail('Rent Collection Plan Enquiry', "Hi Est8Ledger,\n\nI'd like to get started with the Rent Collection plan (10%) for my property."), 'attr') ?>" class="cta-button btn-primary text-white w-full px-6 py-3.5 rounded-xl text-base inline-flex items-center justify-center gap-2" data-cta="email_us_rent_collection">
                    <i class="bi bi-envelope-fill"></i>
                    Email Us Today
                </a>
            </div>

            <!-- Managed Rent -->
            <div class="rc-pricing-card stagger-item card-lift bg-secondary-900 border-2 border-secondary-900 rounded-3xl p-8 h-full text-white">
                <span class="rc-pricing-badge bg-accent-500 text-secondary-900 text-xs font-bold uppercase tracking-widest px-4 py-1.5 rounded-full">Full service</span>
                <h3 class="text-xl font-bold text-white mb-1 mt-2">Managed Rent</h3>
                <p class="text-4xl font-extrabold text-accent-400 mb-4">12%<span class="text-base font-semibold text-secondary-400"> of rent collected</span></p>
                <p class="text-sm text-secondary-300 leading-relaxed mb-6">
                    For landlords who want Est8Ledger to take care of more of the rental process.
                </p>
                <p class="text-xs font-bold uppercase tracking-widest text-secondary-400 mb-3">Everything in Rent Collection, plus:</p>
                <ul class="space-y-2.5 mb-8">
                    <?php
                    $planPlus = [
                        'More hands-on tenant management', 'Rent follow-ups and arrears management', 'Tenant support',
                        'Property activity monitoring', 'Eviction process coordination where required', 'Dedicated support',
                    ];
                    foreach ($planPlus as $item): ?>
                    <li class="flex items-start text-sm text-secondary-200">
                        <i class="bi bi-check-circle-fill text-accent-400 mr-2 mt-0.5 flex-shrink-0"></i><?= $item ?>
                    </li>
                    <?php endforeach; ?>
                </ul>
                <a href="<?= esc($wa("Hi Est8Ledger, I'm interested in the Managed Rent plan (12%) and would like to talk to your team."), 'attr') ?>"
                   target="_blank" rel="noopener"
                   class="cta-button bg-[#25D366] text-white w-full px-6 py-3.5 rounded-xl text-base font-semibold inline-flex items-center justify-center gap-2 hover:brightness-110 transition"
                   data-cta="whatsapp_managed_rent">
                    <i class="bi bi-whatsapp text-lg"></i>
                    Talk to Us
                </a>
            </div>
        </div>
    </div>
</section>

<!-- ============================ BUILT FOR LANDLORDS ============================ -->
<section class="py-10 bg-neutral-50">
    <div class="container mx-auto px-4">
        <div class="max-w-3xl mx-auto bg-white border border-primary-100 rounded-2xl px-6 py-6 sm:px-8 sm:py-7 flex items-start gap-4">
            <span class="w-11 h-11 rounded-xl bg-primary-700 flex items-center justify-center flex-shrink-0">
                <i class="bi bi-building-check text-white text-lg"></i>
            </span>
            <p class="text-secondary-800 leading-relaxed">
                <span class="font-bold text-secondary-900">Built for landlords who want less hassle:</span>
                whether you own one rental unit or a growing property portfolio, Est8Ledger gives you the
                infrastructure to manage your rental income with greater visibility and less manual work.
            </p>
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
                Quick questions
            </div>
            <h2 class="text-3xl lg:text-4xl font-extrabold text-secondary-900 mb-4 text-balance">Rent collection questions</h2>
        </div>

        <div class="max-w-2xl mx-auto space-y-4">
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
    </div>
</section>
<?php endif; ?>

<!-- ============================ FINAL CTA ============================ -->
<section class="py-16 lg:py-20 bg-neutral-50">
    <div class="container mx-auto px-4">
        <div class="gradient-cta rounded-3xl px-8 py-14 lg:px-16 text-center relative overflow-hidden">
            <div class="absolute inset-0 opacity-10" aria-hidden="true">
                <i class="bi bi-cash-stack text-white text-[10rem] absolute -bottom-6 -right-2"></i>
            </div>
            <div class="relative z-10 max-w-2xl mx-auto">
                <h2 class="text-3xl lg:text-4xl font-extrabold text-white mb-4 text-balance">
                    Ready to make rent collection easier?
                </h2>
                <p class="text-lg text-white/85 mb-2">
                    Let Est8Ledger handle the collection while you stay in control.
                </p>
                <p class="text-white/85 mb-8">
                    Get paid every 10th. Track your properties. Stop chasing rent.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="<?= esc($mail('Rent Collection Enquiry', "Hi Est8Ledger,\n\nI'd like to get started with your rent collection service."), 'attr') ?>" class="cta-button btn-accent px-8 py-3.5 rounded-xl text-base inline-flex items-center justify-center gap-2" data-cta="email_us_final">
                        <i class="bi bi-envelope-fill"></i>
                        Email Us Today
                    </a>
                    <a href="<?= esc($wa("Hi Est8Ledger, I'd like to talk to a representative about your landlord rent collection service."), 'attr') ?>"
                       target="_blank" rel="noopener"
                       class="cta-button px-8 py-3.5 rounded-xl text-base font-semibold text-white bg-[#25D366] inline-flex items-center justify-center gap-2 hover:brightness-110 transition"
                       data-cta="whatsapp_final">
                        <i class="bi bi-whatsapp text-lg"></i>
                        Talk to a Representative
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<?= $this->endSection() ?>

<?= $this->section('js') ?>
<script>
    document.querySelectorAll('.cta-button[data-cta]').forEach(function (btn) {
        btn.addEventListener('click', function () {
            GA4Tracker.trackCTAClick(this.dataset.cta, this.closest('section')?.id || 'rent_collection_page', 'link');
        });
    });
</script>
<?= $this->endSection() ?>
