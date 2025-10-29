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
            Our Story: Building
            <span class="text-accent-400">Trust in Rentals</span>
        </h1>

        <p class="text-lg lg:text-xl text-gray-100 mb-8 max-w-3xl mx-auto leading-relaxed animate-on-scroll">
            Rentalynk is on a mission to revolutionize the rental industry by solving one of its biggest problems: security deposit disputes.
        </p>
    </div>
</div>

<!-- Mission Section -->
<div class="section-padding bg-white">
    <div class="container mx-auto px-4">
        <div class="grid lg:grid-cols-2 gap-12 items-center">
            <div class="animate-on-scroll">
                <h2 class="text-3xl lg:text-4xl font-bold text-gray-800 mb-6">Our Mission</h2>
                <p class="text-lg text-gray-600 mb-4 leading-relaxed">
                    At Rentalynk, we believe that rental relationships should be built on trust, transparency, and fairness. We created est8Ledger to eliminate the friction and disputes that plague the rental industry.
                </p>
                <p class="text-lg text-gray-600 mb-4 leading-relaxed">
                    Security deposits are one of the most contentious issues between landlords and tenants. Disputes over deductions, lost deposits, and unclear terms cost both parties time, money, and peace of mind.
                </p>
                <p class="text-lg text-gray-600 leading-relaxed">
                    We're using blockchain technology and transparent processes to create a single source of truth for security deposits, making the rental experience better for everyone.
                </p>
            </div>

            <div class="relative animate-on-scroll">
                <div class="bg-gradient-to-br from-primary-50 to-accent-50 rounded-2xl p-8 border border-primary-200">
                    <div class="space-y-6">
                        <div class="flex items-start">
                            <div class="flex-shrink-0">
                                <div class="flex items-center justify-center h-12 w-12 rounded-md bg-primary text-white">
                                    <i class="bi bi-shield-check text-xl"></i>
                                </div>
                            </div>
                            <div class="ml-4">
                                <h3 class="text-lg font-semibold text-gray-800">Transparency</h3>
                                <p class="text-gray-600 mt-1">Every transaction and inspection is recorded and verifiable</p>
                            </div>
                        </div>

                        <div class="flex items-start">
                            <div class="flex-shrink-0">
                                <div class="flex items-center justify-center h-12 w-12 rounded-md bg-accent text-gray-800">
                                    <i class="bi bi-lock text-xl"></i>
                                </div>
                            </div>
                            <div class="ml-4">
                                <h3 class="text-lg font-semibold text-gray-800">Security</h3>
                                <p class="text-gray-600 mt-1">Blockchain-backed security with banking-level protection</p>
                            </div>
                        </div>

                        <div class="flex items-start">
                            <div class="flex-shrink-0">
                                <div class="flex items-center justify-center h-12 w-12 rounded-md bg-blue-600 text-white">
                                    <i class="bi bi-balance-scale text-xl"></i>
                                </div>
                            </div>
                            <div class="ml-4">
                                <h3 class="text-lg font-semibold text-gray-800">Fairness</h3>
                                <p class="text-gray-600 mt-1">Balanced solutions that protect both landlords and tenants</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- The Problem Section -->
<div class="section-padding bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12 animate-on-scroll">
            <h2 class="text-3xl lg:text-4xl font-bold text-gray-800 mb-4">The Problem We Solve</h2>
            <p class="text-lg text-gray-600 max-w-2xl mx-auto">Security deposit disputes are costing the rental industry millions and damaging relationships</p>
        </div>

        <div class="grid md:grid-cols-3 gap-8 animate-stagger">
            <div class="stagger-item bg-white p-8 rounded-xl shadow-sm hover:shadow-md transition-shadow">
                <div class="bg-red-100 w-12 h-12 rounded-full flex items-center justify-center mb-4">
                    <i class="bi bi-exclamation-triangle text-red-600 text-xl"></i>
                </div>
                <h3 class="text-xl font-semibold text-gray-800 mb-3">Lost Deposits</h3>
                <p class="text-gray-600">Tenants lose thousands in deposits due to unclear deductions and lost documentation</p>
            </div>

            <div class="stagger-item bg-white p-8 rounded-xl shadow-sm hover:shadow-md transition-shadow">
                <div class="bg-orange-100 w-12 h-12 rounded-full flex items-center justify-center mb-4">
                    <i class="bi bi-clock-history text-orange-600 text-xl"></i>
                </div>
                <h3 class="text-xl font-semibold text-gray-800 mb-3">Time-Consuming Disputes</h3>
                <p class="text-gray-600">Resolving deposit disputes takes months and requires legal intervention</p>
            </div>

            <div class="stagger-item bg-white p-8 rounded-xl shadow-sm hover:shadow-md transition-shadow">
                <div class="bg-purple-100 w-12 h-12 rounded-full flex items-center justify-center mb-4">
                    <i class="bi bi-graph-down text-purple-600 text-xl"></i>
                </div>
                <h3 class="text-xl font-semibold text-gray-800 mb-3">Broken Trust</h3>
                <p class="text-gray-600">Disputes damage relationships and create negative experiences for both parties</p>
            </div>
        </div>
    </div>
</div>

<!-- Our Solution Section -->
<div class="section-padding bg-white">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12 animate-on-scroll">
            <h2 class="text-3xl lg:text-4xl font-bold text-gray-800 mb-4">Our Solution: est8Ledger</h2>
            <p class="text-lg text-gray-600 max-w-2xl mx-auto">A blockchain-powered platform that creates transparency and trust</p>
        </div>

        <div class="grid md:grid-cols-2 gap-12 items-center animate-stagger">
            <div class="stagger-item">
                <div class="space-y-6">
                    <div class="flex items-start">
                        <div class="flex-shrink-0">
                            <div class="flex items-center justify-center h-10 w-10 rounded-full bg-primary text-white font-bold">1</div>
                        </div>
                        <div class="ml-4">
                            <h3 class="text-lg font-semibold text-gray-800">Instant Documentation</h3>
                            <p class="text-gray-600 mt-1">Geo-tagged property inspections create immutable records</p>
                        </div>
                    </div>

                    <div class="flex items-start">
                        <div class="flex-shrink-0">
                            <div class="flex items-center justify-center h-10 w-10 rounded-full bg-primary text-white font-bold">2</div>
                        </div>
                        <div class="ml-4">
                            <h3 class="text-lg font-semibold text-gray-800">Transparent Deductions</h3>
                            <p class="text-gray-600 mt-1">All deductions are documented and visible to both parties</p>
                        </div>
                    </div>

                    <div class="flex items-start">
                        <div class="flex-shrink-0">
                            <div class="flex items-center justify-center h-10 w-10 rounded-full bg-primary text-white font-bold">3</div>
                        </div>
                        <div class="ml-4">
                            <h3 class="text-lg font-semibold text-gray-800">Secure Escrow</h3>
                            <p class="text-gray-600 mt-1">Deposits held in regulated escrow with blockchain verification</p>
                        </div>
                    </div>

                    <div class="flex items-start">
                        <div class="flex-shrink-0">
                            <div class="flex items-center justify-center h-10 w-10 rounded-full bg-primary text-white font-bold">4</div>
                        </div>
                        <div class="ml-4">
                            <h3 class="text-lg font-semibold text-gray-800">Instant Resolution</h3>
                            <p class="text-gray-600 mt-1">Disputes resolved in days, not months</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="stagger-item">
                <div class="bg-gradient-to-br from-primary-50 to-accent-50 rounded-2xl p-8 border border-primary-200">
                    <img src="/app_mock_ups/tenancy_details.png" alt="est8Ledger platform interface" class="w-full rounded-lg shadow-lg">
                </div>
            </div>
        </div>
    </div>
</div>

<!-- CTA Section -->
<div class="section-padding bg-gradient-to-r from-primary-700 to-primary-900">
    <div class="container mx-auto px-4 text-center">
        <h2 class="text-3xl lg:text-4xl font-bold text-white mb-6">Ready to Transform Your Rental Experience?</h2>
        <p class="text-lg text-white/90 mb-8 max-w-2xl mx-auto">Join landlords and tenants across East Africa who are already using est8Ledger to eliminate deposit disputes.</p>
        <button onclick="openDemoModal()" class="bg-accent hover:bg-accent/90 text-gray-800 px-8 py-4 rounded-lg font-semibold text-lg transition-colors inline-flex items-center">
            <i class="bi bi-chat-dots mr-2"></i>
            Start Your Free Demo
        </button>
    </div>
</div>

<?= $this->endSection() ?>

