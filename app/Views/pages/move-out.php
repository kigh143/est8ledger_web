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
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "HowTo",
  "name": "How to prepare for a move-out inspection and get your rental deposit back",
  "description": "Steps a tenant in Uganda or East Africa can follow to document a fair move-out and protect their rental security deposit.",
  "step": [
    {
      "@type": "HowToStep",
      "position": 1,
      "name": "Add your agreement",
      "text": "Upload or enter your existing lease details, even a photo of a paper agreement works."
    },
    {
      "@type": "HowToStep",
      "position": 2,
      "name": "Invite your landlord",
      "text": "Send a link so your landlord can view and approve the record. No app download is required on their end."
    },
    {
      "@type": "HowToStep",
      "position": 3,
      "name": "Do a fair move-out inspection",
      "text": "Complete a guided, timestamped, photo-backed inspection that both tenant and landlord approve."
    }
  ]
}
</script>
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<!-- ============================ HERO ============================ -->
<section class="relative gradient-hero overflow-hidden">
    <div class="container mx-auto px-4 pt-16 pb-20 lg:pt-24 lg:pb-24 text-center">
        <div class="inline-flex items-center bg-red-50 border border-red-100 text-red-700 px-4 py-1.5 rounded-full text-sm font-semibold mb-6">
            <i class="bi bi-exclamation-triangle-fill mr-2"></i>
            Moving out soon?
        </div>

        <h1 class="text-4xl sm:text-5xl xl:text-6xl font-extrabold text-secondary-900 leading-[1.08] mb-6 text-balance max-w-4xl mx-auto">
            Don't lose your deposit to a
            <span class="relative whitespace-nowrap">
                <span class="relative z-10">dispute you can't prove</span>
                <span class="absolute left-0 bottom-1 h-3 w-full bg-accent-300/70 rounded -z-0" aria-hidden="true"></span>
            </span>
        </h1>

        <p class="text-lg text-secondary-600 max-w-2xl mx-auto leading-relaxed mb-8">
            Whether you're vacating a rented house in Kampala, Nairobi, or Dar es Salaam, get a fair, timestamped
            move-out record with est8Ledger free, in minutes. Add your agreement, invite your landlord, and
            document the move-out together so there's nothing left to argue about when it's time to refund your
            deposit.
        </p>

        <div class="flex flex-col sm:flex-row gap-3 justify-center mb-8">
            <a href="https://apps.apple.com/us/app/est8ledger/id6759548753" target="_blank" rel="noopener"
               class="inline-flex items-center justify-center gap-2.5 px-6 py-3 rounded-full bg-secondary-900 text-white font-semibold text-sm shadow-sm hover:shadow-md hover:-translate-y-0.5 transition-all">
                <i class="bi bi-apple text-xl"></i>
                <span class="text-left leading-tight">
                    <span class="block text-[10px] font-normal text-white/70">Start my move-out inspection</span>
                    <span class="block">Download on the App Store</span>
                </span>
            </a>
            <a href="https://play.google.com/store/apps/details?id=com.rentalynk.est8ledger&hl=en" target="_blank" rel="noopener"
               class="inline-flex items-center justify-center gap-2.5 px-6 py-3 rounded-full bg-white text-secondary-900 font-semibold text-sm border border-secondary-200 shadow-sm hover:shadow-md hover:-translate-y-0.5 transition-all">
                <i class="bi bi-google-play text-lg"></i>
                <span class="text-left leading-tight">
                    <span class="block text-[10px] font-normal text-secondary-500">Start my move-out inspection</span>
                    <span class="block">Get it on Google Play</span>
                </span>
            </a>
        </div>

        <div class="flex flex-wrap items-center justify-center gap-x-6 gap-y-3 text-sm text-secondary-600">
            <span class="inline-flex items-center"><i class="bi bi-cash-coin text-accent-600 mr-2"></i>Free to start</span>
            <span class="inline-flex items-center"><i class="bi bi-clock text-accent-600 mr-2"></i>Takes minutes</span>
            <span class="inline-flex items-center"><i class="bi bi-link-45deg text-accent-600 mr-2"></i>No account needed for your landlord</span>
        </div>
    </div>
</section>

<!-- ============================ THREE-STEP FLOW ============================ -->
<section class="section-padding bg-white" id="steps">
    <div class="container mx-auto px-4">
        <div class="text-center max-w-3xl mx-auto mb-14 animate-on-scroll">
            <div class="inline-flex items-center bg-primary-50 border border-primary-100 text-primary-700 px-4 py-1.5 rounded-full text-sm font-semibold mb-5">
                <i class="bi bi-diagram-3-fill mr-2"></i>
                Three simple steps
            </div>
            <h2 class="text-3xl lg:text-4xl font-extrabold text-secondary-900 mb-5 text-balance">
                How to move out of your rented house the fair way
            </h2>
            <p class="text-lg text-secondary-600">
                No forms to chase, no app required for your landlord to approve. Just a clear, shared record both
                of you sign off on before you hand back the keys.
            </p>
        </div>

        <div class="grid md:grid-cols-3 gap-6 animate-stagger">
            <?php
            $steps = [
                ['1', 'bi-file-earmark-arrow-up', 'Add your agreement', 'Upload or enter your existing lease details. Even a photo of a paper agreement works.'],
                ['2', 'bi-person-plus', 'Invite your landlord', 'One tap sends them a link. No app download needed for them to view and approve.'],
                ['3', 'bi-camera2', 'Do a fair move-out inspection', 'Guided, timestamped, photo and video-backed. Both of you approve the same record.'],
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
                <p class="text-sm text-secondary-600 leading-relaxed"><?= $s[3] ?></p>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ============================ FAIR WEAR & TEAR ============================ -->
<section class="section-padding bg-white">
    <div class="container mx-auto px-4">
        <div class="text-center max-w-3xl mx-auto mb-12 animate-on-scroll">
            <div class="inline-flex items-center bg-primary-50 border border-primary-100 text-primary-700 px-4 py-1.5 rounded-full text-sm font-semibold mb-5">
                <i class="bi bi-search-heart mr-2"></i>
                Know what's fair
            </div>
            <h2 class="text-3xl lg:text-4xl font-extrabold text-secondary-900 mb-5 text-balance">
                We help you tell wear-and-tear apart from damage
            </h2>
            <p class="text-lg text-secondary-600 leading-relaxed">
                Normal fading, small scuffs, and a worn carpet from everyday living aren't grounds for a deduction.
                Our guided inspection flags what's fair wear and tear versus what genuinely needs repair, so nothing
                gets deducted from your deposit that shouldn't be.
            </p>
        </div>

        <div class="grid md:grid-cols-2 gap-6 max-w-4xl mx-auto animate-stagger">
            <!-- Normal wear and tear -->
            <div class="stagger-item card-lift bg-accent-50 border border-accent-200 rounded-2xl p-7 h-full">
                <div class="flex items-center gap-3 mb-5">
                    <span class="w-11 h-11 rounded-xl bg-accent-500 flex items-center justify-center flex-shrink-0">
                        <i class="bi bi-check-lg text-accent-900 text-lg"></i>
                    </span>
                    <h3 class="text-lg font-bold text-secondary-900">Normal wear &amp; tear<br><span class="text-sm font-semibold text-accent-800">Landlord absorbs, not deductible</span></h3>
                </div>
                <ul class="space-y-2.5">
                    <?php
                    $wearAndTear = [
                        'Faded, chalking, or lightly scuffed paint from age and sunlight',
                        'Minor nail or picture-hook holes in walls',
                        'Worn patches on tiled or cemented floors from foot traffic',
                        'Loose door hinges, sticking locks, or worn handles from years of use',
                        'Faded curtains or window fittings',
                        'Small cracks in plaster from normal building settling',
                        'Dimmed or slightly yellowed light fittings',
                        'Worn grouting or minor tile discoloration in bathrooms and kitchens from ordinary use',
                        'General dust or light dirt that comes from simply living in a space day to day',
                    ];
                    foreach ($wearAndTear as $w): ?>
                    <li class="flex items-start text-sm text-secondary-700">
                        <i class="bi bi-check-circle-fill text-accent-600 mr-2 mt-0.5 flex-shrink-0"></i><?= $w ?>
                    </li>
                    <?php endforeach; ?>
                </ul>
            </div>

            <!-- Allowable deductions -->
            <div class="stagger-item card-lift bg-red-50 border border-red-200 rounded-2xl p-7 h-full">
                <div class="flex items-center gap-3 mb-5">
                    <span class="w-11 h-11 rounded-xl bg-red-500 flex items-center justify-center flex-shrink-0">
                        <i class="bi bi-exclamation-lg text-white text-lg"></i>
                    </span>
                    <h3 class="text-lg font-bold text-secondary-900">Allowable deductions<br><span class="text-sm font-semibold text-red-700">Tenant-caused damage or neglect</span></h3>
                </div>
                <ul class="space-y-2.5">
                    <?php
                    $damage = [
                        'Holes in walls from forced entry, structural damage, or removed fixtures',
                        'Broken windows, doors, or locks from misuse or negligence',
                        'Burn marks, deep stains, or water damage from tenant negligence, such as an unreported leak left to spread',
                        'Missing or intentionally damaged fixtures: sinks, toilets, electrical fittings, cabinetry',
                        'Significant, unrepaired plumbing or electrical damage caused by tenant modifications',
                        'Pest infestations caused by poor upkeep, not pre-existing structural issues',
                        'Excessive dirt or cleaning beyond normal, such as a property left in a state requiring deep professional cleaning rather than routine turnover cleaning',
                        'Unpaid utility bills left outstanding at move-out',
                        'Unauthorized structural changes, such as knocked-through walls or removed fittings, that were not restored',
                    ];
                    foreach ($damage as $d): ?>
                    <li class="flex items-start text-sm text-secondary-700">
                        <i class="bi bi-x-circle-fill text-red-500 mr-2 mt-0.5 flex-shrink-0"></i><?= $d ?>
                    </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>

        <p class="text-center text-secondary-600 max-w-2xl mx-auto mt-8 text-sm sm:text-base">
            <i class="bi bi-camera2 text-primary-600 mr-1.5"></i>
            During your inspection, every item you flag is tagged as wear-and-tear or damage with photo evidence,
            so any deduction is backed by proof, not a guess.
        </p>
    </div>
</section>

<!-- ============================ TRUST MECHANISM ============================ -->
<section class="section-padding bg-neutral-50">
    <div class="container mx-auto px-4">
        <div class="max-w-3xl mx-auto text-center animate-on-scroll">
            <div class="inline-flex items-center bg-accent-100 text-accent-800 px-4 py-1.5 rounded-full text-sm font-semibold mb-5">
                <i class="bi bi-shield-fill-check mr-2"></i>
                Why this beats a WhatsApp photo thread
            </div>
            <h2 class="text-2xl lg:text-3xl font-extrabold text-secondary-900 mb-4 text-balance">
                Timestamped. Geo-tagged. Mutually approved. Tamper-proof.
            </h2>
            <p class="text-lg text-secondary-600 leading-relaxed">
                Every photo and note is time-stamped and location-tagged the moment it's captured, then written to a
                tamper-proof ledger once both of you approve it, so neither side can quietly change the record later.
            </p>
        </div>
    </div>
</section>

<!-- ============================ LANDLORD REASSURANCE ============================ -->
<section class="py-10 bg-white">
    <div class="container mx-auto px-4">
        <div class="max-w-3xl mx-auto bg-primary-50 border border-primary-100 rounded-2xl px-6 py-6 sm:px-8 sm:py-7 flex items-start gap-4">
            <span class="w-11 h-11 rounded-xl bg-primary-700 flex items-center justify-center flex-shrink-0">
                <i class="bi bi-building text-white text-lg"></i>
            </span>
            <p class="text-secondary-800 leading-relaxed">
                <span class="font-bold text-secondary-900">For landlords:</span>
                takes 2 minutes, no cost, and protects you too. A documented, shared record cuts disputes for both sides.
            </p>
        </div>
    </div>
</section>

<!-- ============================ MOMENTUM / FOUNDER STORY ============================ -->
<section class="section-padding bg-neutral-50">
    <div class="container mx-auto px-4">
        <div class="max-w-3xl mx-auto bg-white border border-secondary-200 rounded-2xl p-8 sm:p-10 text-center card-lift">
            <i class="bi bi-quote text-4xl text-accent-500 mb-4 inline-block"></i>
            <p class="text-lg sm:text-xl text-secondary-800 leading-relaxed font-medium mb-4">
                "Built by people who kept hearing tenants across East Africa ask the same question: will I get my deposit back?"
            </p>
            <p class="text-secondary-500 text-sm">est8Ledger was started to give every tenant a straight answer, backed by evidence.</p>
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
            <h2 class="text-3xl lg:text-4xl font-extrabold text-secondary-900 mb-4 text-balance">Moving out and deposit refund questions</h2>
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
                <i class="bi bi-camera2 text-white text-[10rem] absolute -bottom-6 -right-2"></i>
            </div>
            <div class="relative z-10 max-w-2xl mx-auto">
                <h2 class="text-3xl lg:text-4xl font-extrabold text-white mb-4 text-balance">
                    Start your move-out inspection
                </h2>
                <p class="text-lg text-white/85 mb-8">
                    Free, in minutes, and built so both sides walk away with the same proof.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="https://apps.apple.com/us/app/est8ledger/id6759548753" target="_blank" rel="noopener" class="btn-accent px-8 py-3.5 rounded-xl text-base inline-flex items-center justify-center">
                        <i class="bi bi-apple mr-2 text-xl"></i>
                        Download on the App Store
                    </a>
                    <a href="https://play.google.com/store/apps/details?id=com.rentalynk.est8ledger&hl=en" target="_blank" rel="noopener" class="px-8 py-3.5 rounded-xl text-base font-semibold text-white border-2 border-white/30 hover:bg-white/10 transition inline-flex items-center justify-center">
                        <i class="bi bi-google-play mr-2 text-lg"></i>
                        Get it on Google Play
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<?= $this->endSection() ?>
