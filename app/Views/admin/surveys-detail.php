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
        <!-- Survey Responses -->
        <div class="bg-white shadow overflow-hidden sm:rounded-md">
            <ul class="divide-y divide-gray-200">
                <?php foreach ($surveyResponses as $response): ?>
                    <li class="px-6 py-4">
                        <div class="flex items-center justify-between">
                            <div class="flex-1">
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center">
                                        <div class="flex-shrink-0 mr-3">
                                            <?php if ($surveyType === 'tenants'): ?>
                                                <div class="w-8 h-8 bg-blue-100 rounded-full flex items-center justify-center">
                                                    <i class="bi bi-person text-blue-600"></i>
                                                </div>
                                            <?php else: ?>
                                                <div class="w-8 h-8 bg-green-100 rounded-full flex items-center justify-center">
                                                    <i class="bi bi-building text-green-600"></i>
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                        <p class="text-sm font-medium text-indigo-600">
                                            <?= esc($surveyTitle) ?>
                                        </p>
                                    </div>
                                    <div class="ml-2 flex-shrink-0 flex">
                                        <p class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                            <?= date('M j, Y H:i', $response['timestamp']) ?>
                                        </p>
                                    </div>
                                </div>
                                
                                <div class="mt-4 space-y-3">
                                    <?php foreach ($response['responses'] as $questionId => $answer): ?>
                                        <div class="bg-gray-50 p-3 rounded">
                                            <p class="text-sm font-medium text-gray-700 mb-1">
                                                <?= esc($answer['question']) ?>
                                            </p>
                                            <p class="text-sm text-gray-900">
                                                <?php if (is_array($answer['answer'])): ?>
                                                    <?= implode(', ', array_map('esc', $answer['answer'])) ?>
                                                <?php else: ?>
                                                    <?= nl2br(esc($answer['answer'])) ?>
                                                <?php endif; ?>
                                            </p>
                                            <span class="text-xs text-gray-500 capitalize"><?= esc($answer['type']) ?> question</span>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                                
                                <div class="mt-3 text-xs text-gray-500">
                                    Response ID: <?= esc($response['id']) ?> | 
                                    IP: <?= esc($response['ip_address']) ?> |
                                    Submitted: <?= esc($response['submitted_at']) ?>
                                </div>
                            </div>
                        </div>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    <?php endif; ?>
</div>
<?= $this->endSection() ?>