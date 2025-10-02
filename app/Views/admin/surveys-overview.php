<?= $this->extend('admin/layout') ?>

<?= $this->section('content') ?>
<div class="px-4 py-6 sm:px-0">
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold text-gray-900">Survey Responses Overview</h1>
        <div class="text-sm text-gray-500">
            Total Responses: <?= $totalCount ?>
        </div>
    </div>
    
    <!-- Survey Type Cards -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
        <!-- Tenant Surveys Card -->
        <div class="bg-white overflow-hidden shadow rounded-lg hover:shadow-md transition-shadow">
            <div class="p-6">
                <div class="flex items-center">
                    <div class="flex-shrink-0">
                        <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center">
                            <i class="bi bi-person text-2xl text-blue-600"></i>
                        </div>
                    </div>
                    <div class="ml-5 w-0 flex-1">
                        <dl>
                            <dt class="text-sm font-medium text-gray-500 truncate">Tenant Survey Responses</dt>
                            <dd class="text-2xl font-bold text-gray-900"><?= $tenantCount ?></dd>
                        </dl>
                    </div>
                </div>
                <div class="mt-4">
                    <a href="/admin/surveys/tenants" 
                       class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-blue-700 bg-blue-100 hover:bg-blue-200 transition-colors">
                        <i class="bi bi-eye mr-2"></i>
                        View Tenant Responses
                    </a>
                </div>
            </div>
        </div>

        <!-- Landlord Surveys Card -->
        <div class="bg-white overflow-hidden shadow rounded-lg hover:shadow-md transition-shadow">
            <div class="p-6">
                <div class="flex items-center">
                    <div class="flex-shrink-0">
                        <div class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center">
                            <i class="bi bi-building text-2xl text-green-600"></i>
                        </div>
                    </div>
                    <div class="ml-5 w-0 flex-1">
                        <dl>
                            <dt class="text-sm font-medium text-gray-500 truncate">Landlord Survey Responses</dt>
                            <dd class="text-2xl font-bold text-gray-900"><?= $landlordCount ?></dd>
                        </dl>
                    </div>
                </div>
                <div class="mt-4">
                    <a href="/admin/surveys/landlords" 
                       class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-green-700 bg-green-100 hover:bg-green-200 transition-colors">
                        <i class="bi bi-eye mr-2"></i>
                        View Landlord Responses
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Recent Responses from All Surveys -->
    <div class="bg-white shadow rounded-lg">
        <div class="px-6 py-4 border-b border-gray-200">
            <h3 class="text-lg font-medium text-gray-900">Recent Responses (All Surveys)</h3>
        </div>
        <div class="divide-y divide-gray-200">
            <?php foreach (array_slice($allResponses, 0, 10) as $response): ?>
                <div class="px-6 py-4">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <div class="flex-shrink-0">
                                <?php if (strpos($response['survey_name'], 'tenant') !== false): ?>
                                    <div class="w-8 h-8 bg-blue-100 rounded-full flex items-center justify-center">
                                        <i class="bi bi-person text-blue-600"></i>
                                    </div>
                                <?php else: ?>
                                    <div class="w-8 h-8 bg-green-100 rounded-full flex items-center justify-center">
                                        <i class="bi bi-building text-green-600"></i>
                                    </div>
                                <?php endif; ?>
                            </div>
                            <div class="ml-4">
                                <p class="text-sm font-medium text-gray-900">
                                    <?= ucwords(str_replace('-', ' ', esc($response['survey_name']))) ?>
                                </p>
                                <p class="text-sm text-gray-500">
                                    Response ID: <?= esc($response['id']) ?>
                                </p>
                            </div>
                        </div>
                        <div class="flex items-center">
                            <span class="px-2 py-1 text-xs font-medium bg-gray-100 text-gray-800 rounded-full">
                                <?= date('M j, Y H:i', $response['timestamp']) ?>
                            </span>
                            <a href="/admin/surveys/<?= strpos($response['survey_name'], 'tenant') !== false ? 'tenants' : 'landlords' ?>" 
                               class="ml-3 text-indigo-600 hover:text-indigo-900 text-sm">
                                View →
                            </a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <?php if (count($allResponses) > 10): ?>
            <div class="px-6 py-3 bg-gray-50 text-center">
                <p class="text-sm text-gray-500">
                    Showing 10 of <?= count($allResponses) ?> total responses
                </p>
            </div>
        <?php endif; ?>
    </div>
</div>
<?= $this->endSection() ?>