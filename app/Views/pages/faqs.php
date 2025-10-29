<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<!-- Hero Section -->
<div class="relative bg-white py-20 lg:py-28 overflow-hidden">
    <!-- Building Background Image -->
    <div class="absolute inset-0">
        <img src="/website_images/building.png" alt="" class="w-full h-full object-cover" aria-hidden="true">
        <!-- Dark overlay for text readability -->
        <div class="absolute inset-0 bg-gradient-to-r from-black/60 via-black/50 to-black/60"></div>
    </div>

    <!-- Logo Background Pattern -->
    <div class="absolute inset-0 opacity-[0.08]">
        <img src="/logo_white.png" alt="" class="absolute top-10 left-10 w-48 h-48 object-contain" aria-hidden="true">
        <img src="/logo_white.png" alt="" class="absolute bottom-20 right-10 w-64 h-64 object-contain" aria-hidden="true">
    </div>

    <div class="container mx-auto px-4 text-center relative z-10">
        <h1 class="text-4xl lg:text-5xl xl:text-6xl font-bold text-white mb-6 leading-tight animate-on-scroll">
            Frequently Asked
            <span class="text-accent-400">Questions</span>
        </h1>

        <p class="text-lg lg:text-xl text-gray-100 mb-8 max-w-3xl mx-auto leading-relaxed animate-on-scroll">
            Find answers to common questions about est8Ledger's security, data protection, and how our platform works.
        </p>
    </div>
</div>

<!-- FAQs Section -->
<div class="section-padding bg-white">
    <div class="container mx-auto px-4">
        <div class="max-w-3xl mx-auto">
            <!-- FAQ Accordion -->
            <div class="space-y-4 animate-stagger">
                <?php foreach ($faqs as $index => $faq): ?>
                    <div class="stagger-item border border-gray-200 rounded-lg overflow-hidden hover:shadow-md transition-shadow">
                        <button 
                            class="faq-toggle w-full px-6 py-4 text-left font-semibold text-gray-800 hover:bg-gray-50 transition-colors flex items-center justify-between"
                            onclick="toggleFAQ(this)"
                            aria-expanded="false"
                            aria-controls="faq-answer-<?= $index ?>">
                            <span><?= htmlspecialchars($faq['question']) ?></span>
                            <i class="bi bi-chevron-down text-primary transition-transform"></i>
                        </button>
                        <div 
                            id="faq-answer-<?= $index ?>" 
                            class="faq-answer hidden px-6 py-4 bg-gray-50 border-t border-gray-200">
                            <p class="text-gray-600 leading-relaxed"><?= htmlspecialchars($faq['answer']) ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>

<!-- Still Have Questions Section -->
<div class="section-padding bg-gradient-to-r from-primary-50 to-accent-50">
    <div class="container mx-auto px-4 text-center">
        <h2 class="text-3xl lg:text-4xl font-bold text-gray-800 mb-6">Still Have Questions?</h2>
        <p class="text-lg text-gray-600 mb-8 max-w-2xl mx-auto">Can't find the answer you're looking for? Our support team is here to help.</p>
        <a href="/contact-us" class="bg-primary-700 hover:bg-primary-800 text-white px-8 py-4 rounded-lg font-semibold transition-colors inline-flex items-center">
            <i class="bi bi-chat-dots mr-2"></i>
            Contact Us
        </a>
    </div>
</div>

<script>
function toggleFAQ(button) {
    const answerId = button.getAttribute('aria-controls');
    const answer = document.getElementById(answerId);
    const isExpanded = button.getAttribute('aria-expanded') === 'true';
    
    // Close all other FAQs
    document.querySelectorAll('.faq-toggle').forEach(btn => {
        if (btn !== button) {
            btn.setAttribute('aria-expanded', 'false');
            const id = btn.getAttribute('aria-controls');
            document.getElementById(id).classList.add('hidden');
            btn.querySelector('i').style.transform = 'rotate(0deg)';
        }
    });
    
    // Toggle current FAQ
    if (isExpanded) {
        answer.classList.add('hidden');
        button.setAttribute('aria-expanded', 'false');
        button.querySelector('i').style.transform = 'rotate(0deg)';
    } else {
        answer.classList.remove('hidden');
        button.setAttribute('aria-expanded', 'true');
        button.querySelector('i').style.transform = 'rotate(180deg)';
    }
}
</script>

<?= $this->endSection() ?>

