<?= $this->extend('admin/layout') ?>

<?= $this->section('content') ?>
<div class="px-4 py-6 sm:px-0">
    <h1 class="text-2xl font-bold text-gray-900 mb-6">Survey Responses</h1>
    
    <div class="bg-white shadow overflow-hidden sm:rounded-md">
        <ul class="divide-y divide-gray-200">
            <?php foreach ($surveyResponses as $response): ?>
                <li class="px-6 py-4">
                    <div class="flex items-center justify-between">
                        <div class="flex-1">
                            <div class="flex items-center justify-between">
                                <p class="text-sm font-medium text-indigo-600">
                                    <?= ucwords(str_replace('-', ' ', esc($response['survey_name']))) ?>
                                </p>
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
                                                <?= implode(', ', array_map(function($item) { return esc(str_replace('_', ' ', ucwords($item, '_'))); }, $answer['answer'])) ?>
                                            <?php else: ?>
                                                <?= esc(str_replace('_', ' ', ucwords($answer['answer'], '_'))) ?>
                                            <?php endif; ?>
                                        </p>
                                        <span class="text-xs text-gray-500 capitalize"><?= esc($answer['type']) ?> question</span>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                            
                            <div class="mt-3 text-xs text-gray-500">
                                Response ID: <?= esc($response['id']) ?> | 
                                IP: <?= esc($response['ip_address']) ?>
                            </div>
                        </div>
                    </div>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</div>
<?= $this->endSection() ?>