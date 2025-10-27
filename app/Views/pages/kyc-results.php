<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<div class="min-h-screen bg-gray-50 py-12">
    <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
        <?php if (isset($error) && $error): ?>
            <!-- Error State -->
            <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                <div class="px-6 py-8 text-center">
                    <div class="w-16 h-16 mx-auto bg-red-100 rounded-full flex items-center justify-center mb-6">
                        <i class="bi bi-exclamation-triangle-fill text-3xl text-red-600"></i>
                    </div>
                    <h1 class="text-2xl font-bold text-gray-900 mb-4">Verification Error</h1>
                    <p class="text-gray-600 mb-8">
                        There was an error processing your verification request. Please try again or contact our support team.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center">
                        <a href="/" class="inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 transition-colors">
                            <i class="bi bi-house-door mr-2"></i>
                            Return to Home
                        </a>
                        <a href="/contact" class="inline-flex items-center px-6 py-3 border border-gray-300 text-base font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 transition-colors">
                            <i class="bi bi-envelope mr-2"></i>
                            Contact Support
                        </a>
                    </div>
                </div>
            </div>
        <?php else: ?>
            <!-- Verification Results -->
            <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                <!-- Header -->
                <div class="<?= $statusConfig['bgColor'] ?> <?= $statusConfig['borderColor'] ?> border-b px-6 py-4">
                    <div class="flex items-center">
                        <div class="flex-shrink-0">
                            <i class="<?= $statusConfig['icon'] ?> text-3xl <?= $statusConfig['iconColor'] ?>"></i>
                        </div>
                        <div class="ml-4">
                            <h1 class="text-xl font-semibold <?= $statusConfig['textColor'] ?>">
                                <?= $statusConfig['title'] ?>
                            </h1>
                            <p class="text-sm <?= $statusConfig['textColor'] ?> opacity-75">
                                Session ID: <?= $verificationSessionId ?>
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Content -->
                <div class="px-6 py-8">
                    <div class="text-center mb-8">
                        <div class="w-20 h-20 mx-auto <?= $statusConfig['bgColor'] ?> rounded-full flex items-center justify-center mb-6">
                            <i class="<?= $statusConfig['icon'] ?> text-4xl <?= $statusConfig['iconColor'] ?>"></i>
                        </div>
                        
                        <h2 class="text-2xl font-bold text-gray-900 mb-4">
                            <?= $statusConfig['title'] ?>
                        </h2>
                        
                        <p class="text-lg text-gray-600 max-w-2xl mx-auto leading-relaxed">
                            <?= $statusConfig['message'] ?>
                        </p>
                    </div>

                    <!-- Verification Details -->
                    <div class="bg-gray-50 rounded-lg p-6 mb-8">
                        <h3 class="text-lg font-medium text-gray-900 mb-4">Verification Details</h3>
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div>
                                <dt class="text-sm font-medium text-gray-500">Status</dt>
                                <dd class="mt-1 text-sm text-gray-900 font-semibold">
                                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium <?= $statusConfig['bgColor'] ?> <?= $statusConfig['textColor'] ?>">
                                        <i class="<?= $statusConfig['icon'] ?> mr-1"></i>
                                        <?= $status ?>
                                    </span>
                                </dd>
                            </div>
                            <div>
                                <dt class="text-sm font-medium text-gray-500">Session ID</dt>
                                <dd class="mt-1 text-sm text-gray-900 font-mono"><?= $verificationSessionId ?></dd>
                            </div>
                            <div>
                                <dt class="text-sm font-medium text-gray-500">Verification Date</dt>
                                <dd class="mt-1 text-sm text-gray-900"><?= date('F j, Y \a\t g:i A') ?></dd>
                            </div>
                            <div>
                                <dt class="text-sm font-medium text-gray-500">Platform</dt>
                                <dd class="mt-1 text-sm text-gray-900">est8Ledger</dd>
                            </div>
                        </div>
                    </div>

                    <!-- Next Steps -->
                    <?php if ($status === 'Approved'): ?>
                        <div class="bg-green-50 border border-green-200 rounded-lg p-6 mb-8">
                            <h3 class="text-lg font-medium text-green-800 mb-3">
                                <i class="bi bi-check-circle mr-2"></i>
                                What's Next?
                            </h3>
                            <ul class="text-sm text-green-700 space-y-2">
                                <li class="flex items-start">
                                    <i class="bi bi-arrow-right text-green-600 mr-2 mt-0.5"></i>
                                    Access your secure dashboard to manage security deposits
                                </li>
                                <li class="flex items-start">
                                    <i class="bi bi-arrow-right text-green-600 mr-2 mt-0.5"></i>
                                    Complete your profile setup for enhanced features
                                </li>
                                <li class="flex items-start">
                                    <i class="bi bi-arrow-right text-green-600 mr-2 mt-0.5"></i>
                                    Start using blockchain-secured deposit management
                                </li>
                            </ul>
                        </div>
                    <?php elseif ($status === 'Declined'): ?>
                        <div class="bg-red-50 border border-red-200 rounded-lg p-6 mb-8">
                            <h3 class="text-lg font-medium text-red-800 mb-3">
                                <i class="bi bi-info-circle mr-2"></i>
                                Need Help?
                            </h3>
                            <ul class="text-sm text-red-700 space-y-2">
                                <li class="flex items-start">
                                    <i class="bi bi-arrow-right text-red-600 mr-2 mt-0.5"></i>
                                    Contact our support team for assistance
                                </li>
                                <li class="flex items-start">
                                    <i class="bi bi-arrow-right text-red-600 mr-2 mt-0.5"></i>
                                    Review your submitted documents for accuracy
                                </li>
                                <li class="flex items-start">
                                    <i class="bi bi-arrow-right text-red-600 mr-2 mt-0.5"></i>
                                    Try the verification process again with updated information
                                </li>
                            </ul>
                        </div>
                    <?php else: ?>
                        <div class="bg-yellow-50 border border-yellow-200 rounded-lg p-6 mb-8">
                            <h3 class="text-lg font-medium text-yellow-800 mb-3">
                                <i class="bi bi-clock mr-2"></i>
                                While You Wait
                            </h3>
                            <ul class="text-sm text-yellow-700 space-y-2">
                                <li class="flex items-start">
                                    <i class="bi bi-arrow-right text-yellow-600 mr-2 mt-0.5"></i>
                                    We'll send you an email notification once review is complete
                                </li>
                                <li class="flex items-start">
                                    <i class="bi bi-arrow-right text-yellow-600 mr-2 mt-0.5"></i>
                                    Review typically takes 24-48 hours during business days
                                </li>
                                <li class="flex items-start">
                                    <i class="bi bi-arrow-right text-yellow-600 mr-2 mt-0.5"></i>
                                    Explore our platform features and resources
                                </li>
                            </ul>
                        </div>
                    <?php endif; ?>

                    <!-- Action Buttons -->
                    <div class="flex flex-col sm:flex-row gap-4 justify-center">
                        <?php if ($status === 'Approved'): ?>
                            <a href="/dashboard" class="inline-flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md <?= $statusConfig['buttonClass'] ?> transition-colors">
                                <i class="bi bi-speedometer2 mr-2"></i>
                                <?= $statusConfig['buttonText'] ?>
                            </a>
                        <?php elseif ($status === 'Declined'): ?>
                            <a href="/contact" class="inline-flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md <?= $statusConfig['buttonClass'] ?> transition-colors">
                                <i class="bi bi-envelope mr-2"></i>
                                <?= $statusConfig['buttonText'] ?>
                            </a>
                            <a href="/verify" class="inline-flex items-center justify-center px-8 py-3 border border-gray-300 text-base font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 transition-colors">
                                <i class="bi bi-arrow-clockwise mr-2"></i>
                                Try Again
                            </a>
                        <?php else: ?>
                            <a href="/" class="inline-flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md <?= $statusConfig['buttonClass'] ?> transition-colors">
                                <i class="bi bi-house-door mr-2"></i>
                                <?= $statusConfig['buttonText'] ?>
                            </a>
                        <?php endif; ?>
                        
                        <a href="/contact" class="inline-flex items-center justify-center px-8 py-3 border border-gray-300 text-base font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 transition-colors">
                            <i class="bi bi-question-circle mr-2"></i>
                            Get Help
                        </a>
                    </div>
                </div>

                <!-- Footer -->
                <div class="bg-gray-50 px-6 py-4 border-t">
                    <p class="text-xs text-gray-500 text-center">
                        This verification was processed securely through est8Ledger's identity verification system. 
                        If you have questions about this result, please contact our support team.
                    </p>
                </div>
            </div>
        <?php endif; ?>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Track verification result page view
    if (typeof GA4Tracker !== 'undefined') {
        GA4Tracker.trackEvent('kyc_result_viewed', {
            verification_status: '<?= $status ?? 'error' ?>',
            session_id: '<?= $verificationSessionId ?? 'none' ?>'
        });
    }
});
</script>
<?= $this->endSection() ?>