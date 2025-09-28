<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<!-- Hero Section -->
<div class="bg-gradient-to-br from-[#0d06c8] to-[#1a0f8a] py-20">
    <div class="container mx-auto px-4 text-center">
        <h1 class="text-4xl lg:text-5xl font-bold text-white mb-6">
            Help Shape the Future of <span class="text-[#9eff6b]">Rental Deposits</span>
        </h1>
        <p class="text-xl text-white/90 max-w-3xl mx-auto mb-8">
            Your experience matters. Share your insights about security deposits and help us build better solutions for landlords and tenants across Uganda.
        </p>
        <div class="inline-flex items-center bg-white/10 backdrop-blur-sm border border-white/20 text-white px-4 py-2 rounded-lg text-sm font-medium">
            <i class="bi bi-clock mr-2 text-[#9eff6b]"></i>
            Takes only 5-8 minutes
        </div>
    </div>
</div>

<!-- Flash Messages -->
<?php if (session()->getFlashdata('success')): ?>
    <div class="bg-[#9eff6b]/20 border border-[#9eff6b]/30 text-[#9eff6b] px-6 py-4 mx-4 mt-8 rounded-lg flex items-center max-w-4xl mx-auto">
        <i class="bi bi-check-circle-fill mr-3 text-xl"></i>
        <span><?= session()->getFlashdata('success') ?></span>
    </div>
<?php endif; ?>

<?php if (session()->getFlashdata('error')): ?>
    <div class="bg-red-500/20 border border-red-500/30 text-red-300 px-6 py-4 mx-4 mt-8 rounded-lg flex items-center max-w-4xl mx-auto">
        <i class="bi bi-exclamation-triangle-fill mr-3 text-xl"></i>
        <span><?= session()->getFlashdata('error') ?></span>
    </div>
<?php endif; ?>

<!-- Available Surveys -->
<div class="py-16">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-secondary-900 mb-4">Available Surveys</h2>
            <p class="text-lg text-secondary-600 max-w-2xl mx-auto">
                Choose the survey that best matches your role in the rental market
            </p>
        </div>

        <div class="grid md:grid-cols-2 gap-8 max-w-4xl mx-auto">
            <?php foreach ($surveys as $survey): ?>
                <div class="bg-white border border-secondary-200 rounded-2xl p-8 hover:shadow-lg transition-all duration-300 hover:border-[#9eff6b]/30">
                    <div class="flex items-start justify-between mb-6">
                        <div class="w-12 h-12 bg-[#9eff6b]/20 rounded-xl flex items-center justify-center">
                            <?php if (strpos($survey['id'], 'tenant') !== false): ?>
                                <i class="bi bi-person text-2xl text-[#0d06c8]"></i>
                            <?php else: ?>
                                <i class="bi bi-building text-2xl text-[#0d06c8]"></i>
                            <?php endif; ?>
                        </div>
                        <span class="bg-secondary-100 text-secondary-600 px-3 py-1 rounded-full text-sm font-medium">
                            <?= esc($survey['estimated_time']) ?>
                        </span>
                    </div>

                    <h3 class="text-xl font-bold text-secondary-900 mb-3">
                        <?= esc($survey['title']) ?>
                    </h3>
                    
                    <p class="text-secondary-600 mb-6 leading-relaxed">
                        <?= esc($survey['description']) ?>
                    </p>

                    <a href="/survey/<?= esc($survey['id']) ?>" 
                       class="inline-flex items-center bg-[#9eff6b] hover:bg-[#8ee55a] text-secondary-900 px-6 py-3 rounded-lg font-semibold transition-all duration-200 transform hover:scale-105">
                        Start Survey
                        <i class="bi bi-arrow-right ml-2"></i>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>

        <!-- Why Your Feedback Matters -->
        <div class="mt-16 bg-secondary-50 rounded-2xl p-8 max-w-4xl mx-auto">
            <div class="text-center mb-8">
                <h3 class="text-2xl font-bold text-secondary-900 mb-4">Why Your Feedback Matters</h3>
            </div>
            
            <div class="grid md:grid-cols-3 gap-6">
                <div class="text-center">
                    <div class="w-16 h-16 bg-[#9eff6b]/20 rounded-xl flex items-center justify-center mx-auto mb-4">
                        <i class="bi bi-lightbulb text-2xl text-[#0d06c8]"></i>
                    </div>
                    <h4 class="font-semibold text-secondary-900 mb-2">Shape Our Features</h4>
                    <p class="text-secondary-600 text-sm">Your insights help us prioritize the most important features for our platform.</p>
                </div>
                
                <div class="text-center">
                    <div class="w-16 h-16 bg-[#9eff6b]/20 rounded-xl flex items-center justify-center mx-auto mb-4">
                        <i class="bi bi-people text-2xl text-[#0d06c8]"></i>
                    </div>
                    <h4 class="font-semibold text-secondary-900 mb-2">Represent Your Community</h4>
                    <p class="text-secondary-600 text-sm">Help us understand the unique challenges faced by Uganda's rental market.</p>
                </div>
                
                <div class="text-center">
                    <div class="w-16 h-16 bg-[#9eff6b]/20 rounded-xl flex items-center justify-center mx-auto mb-4">
                        <i class="bi bi-graph-up text-2xl text-[#0d06c8]"></i>
                    </div>
                    <h4 class="font-semibold text-secondary-900 mb-2">Drive Innovation</h4>
                    <p class="text-secondary-600 text-sm">Your feedback directly influences how we innovate in the proptech space.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>