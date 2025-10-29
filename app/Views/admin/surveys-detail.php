<?= $this->extend('admin/layout') ?>

<?= $this->section('content') ?>
<div class="px-4 py-6 sm:px-0">
    <!-- Header with breadcrumb -->
    <div class="mb-6">
        <nav class="flex" aria-label="Breadcrumb">
            <ol class="flex items-center space-x-4">
                <li>
                    <a href="/admin/surveys" class="text-gray-400 hover:text-gray-500">
                        <i class="bi bi-clipboard-data mr-1"></i>
                        Surveys
                    </a>
                </li>
                <li>
                    <div class="flex items-center">
                        <i class="bi bi-chevron-right text-gray-400 mx-2"></i>
                        <span class="text-gray-500 capitalize"><?= esc($surveyType) ?> Surveys</span>
                    </div>
                </li>
            </ol>
        </nav>
        
        <div class="mt-2 flex justify-between items-center">
            <div>
                <h1 class="text-2xl font-bold text-gray-900"><?= esc($surveyTitle) ?></h1>
                <p class="text-sm text-gray-500 mt-1">
                    <?= count($surveyResponses) ?> response<?= count($surveyResponses) !== 1 ? 's' : '' ?>
                </p>
            </div>
            
            <!-- Survey Type Tabs -->
            <div class="flex space-x-1 bg-gray-100 p-1 rounded-lg">
                <a href="/admin/surveys/tenants" 
                   class="px-3 py-2 text-sm font-medium rounded-md transition-colors <?= $surveyType === 'tenants' ? 'bg-white text-blue-700 shadow-sm' : 'text-gray-500 hover:text-gray-700' ?>">
                    <i class="bi bi-person mr-1"></i>Tenants
                </a>
                <a href="/admin/surveys/landlords" 
                   class="px-3 py-2 text-sm font-medium rounded-md transition-colors <?= $surveyType === 'landlords' ? 'bg-white text-green-700 shadow-sm' : 'text-gray-500 hover:text-gray-700' ?>">
                    <i class="bi bi-building mr-1"></i>Landlords
                </a>
            </div>
        </div>
    </div>

    <?php if (empty($surveyResponses)): ?>
        <!-- Empty State -->
        <div class="text-center py-12">
            <div class="w-16 h-16 mx-auto bg-gray-100 rounded-full flex items-center justify-center mb-4">
                <i class="bi bi-clipboard-data text-2xl text-gray-400"></i>
            </div>
            <h3 class="text-lg font-medium text-gray-900 mb-2">No responses yet</h3>
            <p class="text-gray-500">No <?= strtolower(esc($surveyType)) ?> survey responses have been submitted.</p>
        </div>
    <?php else: ?>
        <!-- Survey Responses with Accordion -->
        <div class="space-y-3">
            <?php foreach ($surveyResponses as $index => $response): ?>
                <div class="bg-white border border-gray-200 rounded-lg shadow-sm hover:shadow-md transition-shadow">
                    <!-- Accordion Header -->
                    <button type="button"
                            class="accordion-trigger w-full px-6 py-4 flex items-center justify-between hover:bg-gray-50 transition-colors"
                            data-accordion-id="response-<?= $index ?>">
                        <div class="flex items-center flex-1 text-left">
                            <div class="flex-shrink-0 mr-4">
                                <?php if ($surveyType === 'tenants'): ?>
                                    <div class="w-10 h-10 bg-blue-100 rounded-full flex items-center justify-center">
                                        <i class="bi bi-person text-blue-600 text-lg"></i>
                                    </div>
                                <?php else: ?>
                                    <div class="w-10 h-10 bg-green-100 rounded-full flex items-center justify-center">
                                        <i class="bi bi-building text-green-600 text-lg"></i>
                                    </div>
                                <?php endif; ?>
                            </div>
                            <div class="flex-1">
                                <p class="text-sm font-semibold text-gray-900">
                                    <?= esc($surveyTitle) ?>
                                </p>
                                <p class="text-xs text-gray-500 mt-1">
                                    Submitted: <?= date('M j, Y \a\t H:i', $response['timestamp']) ?>
                                </p>
                            </div>
                        </div>
                        <div class="flex items-center space-x-3">
                            <span class="px-3 py-1 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                <?= count($response['responses']) ?> answers
                            </span>
                            <i class="bi bi-chevron-down text-gray-400 transition-transform duration-300 accordion-icon"></i>
                        </div>
                    </button>

                    <!-- Accordion Content -->
                    <div class="accordion-content hidden border-t border-gray-200" id="response-<?= $index ?>">
                        <div class="px-6 py-4 space-y-4">
                            <!-- Response Answers -->
                            <div class="space-y-3">
                                <?php foreach ($response['responses'] as $questionId => $answer): ?>
                                    <div class="bg-gray-50 p-4 rounded-lg border border-gray-100">
                                        <p class="text-sm font-semibold text-gray-900 mb-2">
                                            <?= esc($answer['question']) ?>
                                        </p>
                                        <div class="bg-white p-3 rounded border border-gray-200">
                                            <p class="text-sm text-gray-700 leading-relaxed">
                                                <?php if (is_array($answer['answer'])): ?>
                                                    <ul class="list-disc list-inside space-y-1">
                                                        <?php foreach ($answer['answer'] as $item): ?>
                                                            <li><?= esc(str_replace('_', ' ', ucwords($item, '_'))) ?></li>
                                                        <?php endforeach; ?>
                                                    </ul>
                                                <?php else: ?>
                                                    <?= nl2br(esc(str_replace('_', ' ', ucwords($answer['answer'], '_')))) ?>
                                                <?php endif; ?>
                                            </p>
                                        </div>
                                        <p class="text-xs text-gray-500 mt-2 capitalize">
                                            <i class="bi bi-tag mr-1"></i><?= esc($answer['type']) ?> question
                                        </p>
                                    </div>
                                <?php endforeach; ?>
                            </div>

                            <!-- Response Metadata -->
                            <div class="bg-blue-50 border border-blue-200 rounded-lg p-4 mt-4">
                                <p class="text-xs text-gray-600 space-y-1">
                                    <div class="flex items-center">
                                        <span class="font-semibold text-gray-700 w-24">Response ID:</span>
                                        <code class="text-blue-700 font-mono text-xs"><?= esc($response['id']) ?></code>
                                    </div>
                                    <div class="flex items-center">
                                        <span class="font-semibold text-gray-700 w-24">IP Address:</span>
                                        <span class="text-gray-600"><?= esc($response['ip_address']) ?></span>
                                    </div>
                                    <div class="flex items-center">
                                        <span class="font-semibold text-gray-700 w-24">Submitted:</span>
                                        <span class="text-gray-600"><?= esc($response['submitted_at']) ?></span>
                                    </div>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <!-- Accordion JavaScript -->
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const triggers = document.querySelectorAll('.accordion-trigger');

                triggers.forEach(trigger => {
                    trigger.addEventListener('click', function() {
                        const accordionId = this.getAttribute('data-accordion-id');
                        const content = document.getElementById(accordionId);
                        const icon = this.querySelector('.accordion-icon');

                        // Toggle content visibility
                        content.classList.toggle('hidden');

                        // Rotate icon
                        icon.style.transform = content.classList.contains('hidden')
                            ? 'rotate(0deg)'
                            : 'rotate(180deg)';
                    });
                });
            });
        </script>
    <?php endif; ?>
</div>
<?= $this->endSection() ?>