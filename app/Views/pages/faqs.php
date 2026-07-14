<?= $this->extend('layouts/main') ?>

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
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<!-- ============================ HERO ============================ -->
<section class="relative gradient-hero overflow-hidden">
    <div class="container mx-auto px-4 pt-16 pb-20 lg:pt-24 lg:pb-24 text-center">
        <div class="inline-flex items-center bg-primary-50 border border-primary-100 text-primary-700 px-4 py-1.5 rounded-full text-sm font-semibold mb-6">
            <span class="w-2 h-2 rounded-full bg-accent-500 mr-2"></span>
            Frequently asked
        </div>
        <h1 class="text-4xl sm:text-5xl xl:text-6xl font-extrabold text-secondary-900 leading-[1.08] mb-6 text-balance max-w-4xl mx-auto">
            Your
            <span class="relative whitespace-nowrap">
                <span class="relative z-10">questions</span>
                <span class="absolute left-0 bottom-1 h-3 w-full bg-accent-300/70 rounded -z-0" aria-hidden="true"></span>
            </span>
            answered
        </h1>
        <p class="text-lg text-secondary-600 max-w-2xl mx-auto leading-relaxed">
            Everything about rental security deposits, escrow, data protection, and how the est8Ledger platform works.
        </p>
    </div>
</section>

<!-- ============================ FAQ LIST ============================ -->
<section class="section-padding bg-white">
    <div class="container mx-auto px-4">
        <div class="max-w-3xl mx-auto space-y-4">
            <?php foreach ($faqs as $faq): ?>
            <details class="faq group bg-neutral-50 border border-secondary-200 rounded-xl px-6 py-5 hover:border-primary-200 transition-colors">
                <summary class="flex items-center justify-between gap-4">
                    <h2 class="text-base font-semibold text-secondary-900"><?= esc($faq['question']) ?></h2>
                    <span class="flex-shrink-0 w-8 h-8 rounded-lg bg-white border border-secondary-200 flex items-center justify-center">
                        <i class="bi bi-chevron-down faq-icon text-primary-600"></i>
                    </span>
                </summary>
                <p class="text-secondary-600 leading-relaxed mt-4"><?= esc($faq['answer']) ?></p>
            </details>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ============================ STILL HAVE QUESTIONS ============================ -->
<section class="py-16 lg:py-20 bg-neutral-50">
    <div class="container mx-auto px-4">
        <div class="gradient-cta rounded-3xl px-8 py-14 lg:px-16 text-center relative overflow-hidden">
            <div class="absolute inset-0 opacity-10" aria-hidden="true">
                <i class="bi bi-patch-question text-white text-[10rem] absolute -bottom-6 -right-2"></i>
            </div>
            <div class="relative z-10 max-w-2xl mx-auto">
                <h2 class="text-3xl lg:text-4xl font-extrabold text-white mb-4 text-balance">Still have questions?</h2>
                <p class="text-lg text-white/85 mb-8">Can't find what you're looking for? Our support team is happy to help.</p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="/contact-us" class="btn-accent px-8 py-3.5 rounded-xl text-base inline-flex items-center justify-center">
                        <i class="bi bi-chat-dots mr-2"></i>
                        Contact Us
                    </a>
                    <a href="https://apps.apple.com/us/app/est8ledger/id6759548753" target="_blank" rel="noopener" class="px-8 py-3.5 rounded-xl text-base font-semibold text-white border-2 border-white/30 hover:bg-white/10 transition inline-flex items-center justify-center">
                        <i class="bi bi-apple mr-2 text-xl"></i>
                        Download the App
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<?= $this->endSection() ?>
