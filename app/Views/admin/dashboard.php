<?= $this->extend('admin/layout') ?>

<?= $this->section('content') ?>
<div class="px-4 py-6 sm:px-0">
    <div class="border-4 border-dashed border-gray-200 rounded-lg p-6">
        <h1 class="text-2xl font-bold text-gray-900 mb-6">Dashboard</h1>
        
        <!-- Stats Cards -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
            <div class="bg-white overflow-hidden shadow rounded-lg">
                <div class="p-5">
                    <div class="flex items-center">
                        <div class="flex-shrink-0">
                            <i class="bi bi-envelope text-2xl text-blue-600"></i>
                        </div>
                        <div class="ml-5 w-0 flex-1">
                            <dl>
                                <dt class="text-sm font-medium text-gray-500 truncate">Total Contacts</dt>
                                <dd class="text-lg font-medium text-gray-900"><?= $totalContacts ?></dd>
                            </dl>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-white overflow-hidden shadow rounded-lg">
                <div class="p-5">
                    <div class="flex items-center">
                        <div class="flex-shrink-0">
                            <i class="bi bi-person text-2xl text-blue-600"></i>
                        </div>
                        <div class="ml-5 w-0 flex-1">
                            <dl>
                                <dt class="text-sm font-medium text-gray-500 truncate">Tenant Surveys</dt>
                                <dd class="text-lg font-medium text-gray-900"><?= $tenantSurveyCount ?></dd>
                            </dl>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-white overflow-hidden shadow rounded-lg">
                <div class="p-5">
                    <div class="flex items-center">
                        <div class="flex-shrink-0">
                            <i class="bi bi-building text-2xl text-green-600"></i>
                        </div>
                        <div class="ml-5 w-0 flex-1">
                            <dl>
                                <dt class="text-sm font-medium text-gray-500 truncate">Landlord Surveys</dt>
                                <dd class="text-lg font-medium text-gray-900"><?= $landlordSurveyCount ?></dd>
                            </dl>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-white overflow-hidden shadow rounded-lg">
                <div class="p-5">
                    <div class="flex items-center">
                        <div class="flex-shrink-0">
                            <i class="bi bi-clipboard-data text-2xl text-purple-600"></i>
                        </div>
                        <div class="ml-5 w-0 flex-1">
                            <dl>
                                <dt class="text-sm font-medium text-gray-500 truncate">Total Surveys</dt>
                                <dd class="text-lg font-medium text-gray-900"><?= $totalSurveyResponses ?></dd>
                            </dl>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Recent Activity -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
            <!-- Recent Contacts -->
            <div class="bg-white shadow rounded-lg">
                <div class="px-4 py-5 sm:p-6">
                    <h3 class="text-lg leading-6 font-medium text-gray-900 mb-4">Recent Contacts</h3>
                    <div class="space-y-3">
                        <?php foreach ($recentContacts as $contact): ?>
                            <div class="flex items-center justify-between p-3 bg-gray-50 rounded">
                                <div>
                                    <p class="font-medium text-gray-900"><?= esc($contact['name']) ?></p>
                                    <p class="text-sm text-gray-500"><?= esc($contact['email']) ?></p>
                                </div>
                                <span class="text-xs text-gray-400"><?= date('M j, Y', $contact['timestamp']) ?></span>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <div class="mt-4">
                        <a href="/admin/contacts" class="text-indigo-600 hover:text-indigo-900 text-sm font-medium">
                            View all contacts →
                        </a>
                    </div>
                </div>
            </div>

            <!-- Recent Survey Responses -->
            <div class="bg-white shadow rounded-lg">
                <div class="px-4 py-5 sm:p-6">
                    <h3 class="text-lg leading-6 font-medium text-gray-900 mb-4">Recent Survey Responses</h3>
                    <div class="space-y-3">
                        <?php foreach ($recentSurveys as $survey): ?>
                            <div class="flex items-center justify-between p-3 bg-gray-50 rounded">
                                <div>
                                    <p class="font-medium text-gray-900"><?= esc($survey['survey_id']) ?></p>
                                    <p class="text-sm text-gray-500">Response ID: <?= esc($survey['id']) ?></p>
                                </div>
                                <span class="text-xs text-gray-400"><?= date('M j, Y', $survey['timestamp']) ?></span>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <div class="mt-4">
                        <a href="/admin/surveys" class="text-indigo-600 hover:text-indigo-900 text-sm font-medium">
                            View all responses →
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>
