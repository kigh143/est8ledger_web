<?= $this->extend('admin/layout') ?>

<?= $this->section('content') ?>
<div class="px-4 py-6 sm:px-0">
    <h1 class="text-2xl font-bold text-gray-900 mb-6">Contact Messages & Waiting List</h1>
    
    <!-- Tabs -->
    <div class="border-b border-gray-200 mb-6">
        <nav class="-mb-px flex space-x-8">
            <button onclick="showTab('contacts')" id="contacts-tab" class="tab-button border-b-2 border-indigo-500 py-2 px-1 text-sm font-medium text-indigo-600">
                Contact Messages (<?= count($contacts) ?>)
            </button>
            <button onclick="showTab('waiting')" id="waiting-tab" class="tab-button border-b-2 border-transparent py-2 px-1 text-sm font-medium text-gray-500 hover:text-gray-700 hover:border-gray-300">
                Waiting List (<?= count($waitingList) ?>)
            </button>
        </nav>
    </div>

    <!-- Contact Messages Tab -->
    <div id="contacts-content" class="tab-content">
        <div class="bg-white shadow overflow-hidden sm:rounded-md">
            <ul class="divide-y divide-gray-200">
                <?php foreach ($contacts as $contact): ?>
                    <li class="px-6 py-4">
                        <div class="flex items-center justify-between">
                            <div class="flex-1">
                                <div class="flex items-center justify-between">
                                    <p class="text-sm font-medium text-indigo-600"><?= esc($contact['name']) ?></p>
                                    <div class="ml-2 flex-shrink-0 flex">
                                        <p class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                            <?= date('M j, Y H:i', $contact['timestamp']) ?>
                                        </p>
                                    </div>
                                </div>
                                <div class="mt-2 sm:flex sm:justify-between">
                                    <div class="sm:flex">
                                        <p class="flex items-center text-sm text-gray-500">
                                            <i class="bi bi-envelope mr-1"></i>
                                            <?= esc($contact['email']) ?>
                                        </p>
                                        <?php if (!empty($contact['phone'])): ?>
                                            <p class="mt-2 flex items-center text-sm text-gray-500 sm:mt-0 sm:ml-6">
                                                <i class="bi bi-telephone mr-1"></i>
                                                <?= esc($contact['phone']) ?>
                                            </p>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="mt-2">
                                    <p class="text-sm text-gray-900 bg-gray-50 p-3 rounded">
                                        <?= nl2br(esc($contact['message'])) ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>

    <!-- Waiting List Tab -->
    <div id="waiting-content" class="tab-content hidden">
        <div class="bg-white shadow overflow-hidden sm:rounded-md">
            <ul class="divide-y divide-gray-200">
                <?php foreach ($waitingList as $user): ?>
                    <li class="px-6 py-4">
                        <div class="flex items-center justify-between">
                            <div class="flex-1">
                                <div class="flex items-center justify-between">
                                    <p class="text-sm font-medium text-indigo-600"><?= esc($user['name']) ?></p>
                                    <div class="ml-2 flex-shrink-0 flex">
                                        <p class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-blue-100 text-blue-800">
                                            <?= ucfirst(esc($user['user_type'])) ?>
                                        </p>
                                        <p class="ml-2 px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                            <?= date('M j, Y H:i', $user['timestamp']) ?>
                                        </p>
                                    </div>
                                </div>
                                <div class="mt-2 sm:flex sm:justify-between">
                                    <div class="sm:flex">
                                        <p class="flex items-center text-sm text-gray-500">
                                            <i class="bi bi-envelope mr-1"></i>
                                            <?= esc($user['email']) ?>
                                        </p>
                                        <?php if (!empty($user['phone'])): ?>
                                            <p class="mt-2 flex items-center text-sm text-gray-500 sm:mt-0 sm:ml-6">
                                                <i class="bi bi-telephone mr-1"></i>
                                                <?= esc($user['phone']) ?>
                                            </p>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <?php if (!empty($user['message'])): ?>
                                    <div class="mt-2">
                                        <p class="text-sm text-gray-900 bg-gray-50 p-3 rounded">
                                            <?= nl2br(esc($user['message'])) ?>
                                        </p>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</div>

<script>
function showTab(tabName) {
    // Hide all tab contents
    document.querySelectorAll('.tab-content').forEach(content => {
        content.classList.add('hidden');
    });
    
    // Remove active styles from all tabs
    document.querySelectorAll('.tab-button').forEach(button => {
        button.classList.remove('border-indigo-500', 'text-indigo-600');
        button.classList.add('border-transparent', 'text-gray-500');
    });
    
    // Show selected tab content
    document.getElementById(tabName + '-content').classList.remove('hidden');
    
    // Add active styles to selected tab
    const activeTab = document.getElementById(tabName + '-tab');
    activeTab.classList.remove('border-transparent', 'text-gray-500');
    activeTab.classList.add('border-indigo-500', 'text-indigo-600');
}
</script>
<?= $this->endSection() ?>