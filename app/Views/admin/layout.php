<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= isset($title) ? esc($title) . ' - ' : '' ?>Admin | est8Ledger</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
</head>
<body class="bg-gray-100">
    <!-- Admin Navigation -->
    <nav class="bg-white shadow-sm border-b">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex items-center">
                    <h1 class="text-xl font-semibold text-gray-900">est8Ledger Admin</h1>
                </div>
                <div class="flex items-center space-x-4">
                    <a href="/admin" class="text-gray-700 hover:text-gray-900 px-3 py-2 rounded-md text-sm font-medium">
                        <i class="bi bi-house-door mr-1"></i>Dashboard
                    </a>
                    <a href="/admin/contacts" class="text-gray-700 hover:text-gray-900 px-3 py-2 rounded-md text-sm font-medium">
                        <i class="bi bi-envelope mr-1"></i>Contacts
                    </a>
                    
                    <!-- Surveys Dropdown -->
                    <div class="relative group">
                        <button class="text-gray-700 hover:text-gray-900 px-3 py-2 rounded-md text-sm font-medium flex items-center">
                            <i class="bi bi-clipboard-data mr-1"></i>Surveys
                            <i class="bi bi-chevron-down ml-1 text-xs"></i>
                        </button>
                        <div class="absolute right-0 mt-2 w-56 bg-white rounded-md shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 z-50">
                            <div class="py-1">
                                <a href="/admin/surveys" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                                    <i class="bi bi-list-ul mr-2"></i>All Surveys
                                </a>
                                <a href="/admin/surveys/tenants" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                                    <i class="bi bi-person mr-2"></i>Tenant Surveys
                                </a>
                                <a href="/admin/surveys/landlords" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                                    <i class="bi bi-building mr-2"></i>Landlord Surveys
                                </a>
                            </div>
                        </div>
                    </div>
                    
                    <a href="/admin/logout" class="bg-red-600 text-white px-3 py-2 rounded-md text-sm font-medium hover:bg-red-700">
                        <i class="bi bi-box-arrow-right mr-1"></i>Logout
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Flash Messages -->
    <?php if (session()->getFlashdata('success')): ?>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-4">
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded">
                <?= session()->getFlashdata('success') ?>
            </div>
        </div>
    <?php endif; ?>

    <?php if (session()->getFlashdata('error')): ?>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-4">
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded">
                <?= session()->getFlashdata('error') ?>
            </div>
        </div>
    <?php endif; ?>

    <!-- Main Content -->
    <main class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
        <?= $this->renderSection('content') ?>
    </main>
</body>
</html>
