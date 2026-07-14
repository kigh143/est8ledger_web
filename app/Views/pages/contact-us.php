<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<!-- ============================ HERO ============================ -->
<section class="relative gradient-hero overflow-hidden">
    <div class="container mx-auto px-4 pt-16 pb-20 lg:pt-24 lg:pb-24 text-center">
        <div class="inline-flex items-center bg-primary-50 border border-primary-100 text-primary-700 px-4 py-1.5 rounded-full text-sm font-semibold mb-6">
            <span class="w-2 h-2 rounded-full bg-accent-500 mr-2"></span>
            We're here to help
        </div>
        <h1 class="text-4xl sm:text-5xl xl:text-6xl font-extrabold text-secondary-900 leading-[1.08] mb-6 text-balance">
            Get in
            <span class="relative whitespace-nowrap">
                <span class="relative z-10">touch</span>
                <span class="absolute left-0 bottom-1 h-3 w-full bg-accent-300/70 rounded -z-0" aria-hidden="true"></span>
            </span>
        </h1>
        <p class="text-lg text-secondary-600 max-w-2xl mx-auto leading-relaxed">
            Questions about deposits, escrow, or how est8Ledger works? Reach our team through any channel below —
            we reply within 24 hours.
        </p>
    </div>
</section>

<!-- ============================ CONTACT CHANNELS ============================ -->
<section class="section-padding bg-white">
    <div class="container mx-auto px-4">
        <div class="grid md:grid-cols-3 gap-6 max-w-5xl mx-auto animate-stagger">
            <!-- Email -->
            <a href="mailto:info@est8ledger.com" class="stagger-item card-lift block bg-white rounded-2xl border border-secondary-200 p-8 text-center group">
                <div class="w-16 h-16 bg-primary-50 rounded-2xl flex items-center justify-center mx-auto mb-5 group-hover:bg-primary-100 transition-colors">
                    <i class="bi bi-envelope-fill text-2xl text-primary-700"></i>
                </div>
                <h2 class="text-lg font-bold text-secondary-900 mb-1">Email us</h2>
                <p class="text-sm text-secondary-500 mb-3">Best for detailed questions</p>
                <span class="text-primary-700 font-semibold break-all">info@est8ledger.com</span>
            </a>

            <!-- Phone -->
            <a href="tel:+447930068728" class="stagger-item card-lift block bg-white rounded-2xl border border-secondary-200 p-8 text-center group">
                <div class="w-16 h-16 bg-accent-100 rounded-2xl flex items-center justify-center mx-auto mb-5 group-hover:bg-accent-200 transition-colors">
                    <i class="bi bi-whatsapp text-2xl text-accent-800"></i>
                </div>
                <h2 class="text-lg font-bold text-secondary-900 mb-1">Whatsapp us</h2>
                <p class="text-sm text-secondary-500 mb-3">All Week Long</p>
                <span class="text-primary-700 font-semibold">+44 7930 068728</span>
            </a>

            <!-- Location -->
            <div class="stagger-item card-lift bg-white rounded-2xl border border-secondary-200 p-8 text-center">
                <div class="w-16 h-16 bg-primary-50 rounded-2xl flex items-center justify-center mx-auto mb-5">
                    <i class="bi bi-geo-alt-fill text-2xl text-primary-700"></i>
                </div>
                <h2 class="text-lg font-bold text-secondary-900 mb-1">Visit us</h2>
                <p class="text-sm text-secondary-500 mb-3">Our home base</p>
                <span class="text-secondary-800 font-semibold">Kampala, Uganda</span>
            </div>
        </div>

        <!-- Social + app links -->
        <div class="max-w-5xl mx-auto mt-10">
            <div class="rounded-2xl border border-secondary-200 bg-neutral-50 p-6 flex flex-col sm:flex-row items-center justify-between gap-6">
                <p class="text-secondary-700 font-semibold">Follow our journey</p>
                <div class="flex items-center gap-3">
                    <a href="https://www.linkedin.com/company/est8ledger/" target="_blank" rel="noopener noreferrer" class="w-11 h-11 rounded-xl bg-white border border-secondary-200 flex items-center justify-center text-secondary-600 hover:text-white hover:bg-primary-700 transition-colors" aria-label="est8Ledger on LinkedIn">
                        <i class="bi bi-linkedin"></i>
                    </a>
                    <a href="https://www.crunchbase.com/organization/est8ledger" target="_blank" rel="noopener noreferrer" class="w-11 h-11 rounded-xl bg-white border border-secondary-200 flex items-center justify-center text-secondary-600 hover:text-white hover:bg-primary-700 transition-colors" aria-label="est8Ledger on Crunchbase">
                        <i class="bi bi-graph-up"></i>
                    </a>
                    <a href="https://apps.apple.com/us/app/est8ledger/id6759548753" class="w-11 h-11 rounded-xl bg-white border border-secondary-200 flex items-center justify-center text-secondary-600 hover:text-white hover:bg-primary-700 transition-colors" aria-label="Download on the App Store">
                        <i class="bi bi-apple"></i>
                    </a>
                    <a href="https://play.google.com/store/apps/details?id=com.rentalynk.est8ledger&hl=en" target="_blank" rel="noopener" class="w-11 h-11 rounded-xl bg-white border border-secondary-200 flex items-center justify-center text-secondary-600 hover:text-white hover:bg-primary-700 transition-colors" aria-label="Get it on Google Play">
                        <i class="bi bi-google-play"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ============================ WHAT TO EXPECT ============================ -->
<section class="section-padding bg-neutral-50">
    <div class="container mx-auto px-4">
        <div class="text-center max-w-2xl mx-auto mb-12">
            <h2 class="text-3xl font-extrabold text-secondary-900 mb-4">What to expect when you reach out</h2>
            <p class="text-secondary-600">Real people, real answers — no bots, no run-around.</p>
        </div>
        <div class="grid md:grid-cols-3 gap-6 max-w-4xl mx-auto">
            <?php
            $expect = [
                ['bi-clock-fill', 'Quick response', 'We reply to every inquiry within 24 hours, often much sooner.'],
                ['bi-headset', 'Expert support', 'Our team knows rental management and deposits inside out.'],
                ['bi-chat-dots-fill', 'Your channel', 'Reach us by email, phone, or social — whatever suits you.'],
            ];
            foreach ($expect as $e): ?>
            <div class="bg-white rounded-2xl border border-secondary-200 p-8 text-center card-lift">
                <div class="bg-primary-50 w-16 h-16 rounded-2xl flex items-center justify-center mx-auto mb-5">
                    <i class="bi <?= $e[0] ?> text-2xl text-primary-700"></i>
                </div>
                <h3 class="font-bold text-secondary-900 mb-2"><?= $e[1] ?></h3>
                <p class="text-secondary-600 text-sm leading-relaxed"><?= $e[2] ?></p>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ============================ CTA ============================ -->
<section class="py-16 lg:py-20 bg-white">
    <div class="container mx-auto px-4">
        <div class="gradient-cta rounded-3xl px-8 py-14 lg:px-16 text-center relative overflow-hidden">
            <div class="absolute inset-0 opacity-10" aria-hidden="true">
                <i class="bi bi-shield-check text-white text-[10rem] absolute -bottom-6 -right-2"></i>
            </div>
            <div class="relative z-10 max-w-2xl mx-auto">
                <h2 class="text-3xl lg:text-4xl font-extrabold text-white mb-4 text-balance">Prefer to just get started?</h2>
                <p class="text-lg text-white/85 mb-8">Download the app and start managing rental deposits the fair, transparent way.</p>
                <a href="https://apps.apple.com/us/app/est8ledger/id6759548753" target="_blank" rel="noopener" class="btn-accent px-8 py-3.5 rounded-xl text-base inline-flex items-center justify-center">
                    <i class="bi bi-apple mr-2 text-xl"></i>
                    Download the App
                </a>
            </div>
        </div>
    </div>
</section>

<?= $this->endSection() ?>
