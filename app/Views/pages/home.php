<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<!-- Professional Banking Hero Section -->
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

    <!-- Security-themed Background Shapes -->
    <div class="absolute inset-0 opacity-[0.08]">
        <!-- Shield patterns -->
        <div class="absolute top-20 left-10 w-32 h-32 transform rotate-12">
            <i class="bi bi-shield-check text-accent text-8xl"></i>
        </div>
        <div class="absolute top-40 right-20 w-24 h-24 transform -rotate-45">
            <i class="bi bi-lock text-accent text-6xl"></i>
        </div>
        <div class="absolute bottom-32 left-1/4 w-28 h-28 transform rotate-45">
            <i class="bi bi-balance-scale text-accent text-7xl"></i>
        </div>
        <div class="absolute bottom-20 right-1/3 w-20 h-20 transform -rotate-12">
            <i class="bi bi-graph-up text-accent text-5xl"></i>
        </div>
    </div>

    <div class="container mx-auto px-4 text-center relative z-10">
        <!-- Professional Badge -->
        <div class="inline-flex items-center bg-accent-600/20 border border-accent-400/50 text-accent-300 px-4 py-2 rounded-full text-sm font-medium mb-8 animate-on-scroll">
            <i class="bi bi-shield-check mr-2"></i>
            Secure • Transparent • Profitable
        </div>

        <!-- Main Heading -->
        <h1 class="text-4xl lg:text-5xl xl:text-6xl font-bold text-white mb-6 leading-tight animate-on-scroll">
            Ending Rental
            <span class="text-accent-400">Security Deposit Disputes</span>
        </h1>

        <!-- Subheading -->
        <p class="text-lg lg:text-xl text-gray-100 mb-12 max-w-3xl mx-auto leading-relaxed animate-on-scroll">
            Manage security deposits with complete transparency. Get instant property inspections,
            <span class="font-semibold text-accent-300">earn returns on deposits</span>,
            and eliminate rental disputes—all from your phone.
        </p>

        <!-- Professional CTA Buttons -->
        <div class="flex flex-col sm:flex-row gap-4 justify-center animate-on-scroll">
            <button onclick="openDemoModal()" class="bg-primary-700 hover:bg-primary-800 px-8 py-3 rounded-lg font-semibold text-white transition-colors">
                Contact Us
            </button>

            <button onclick="document.getElementById('how-it-works').scrollIntoView({behavior: 'smooth'})" class="bg-accent-600 hover:bg-accent-700 text-white px-8 py-3 rounded-lg font-semibold transition-colors">
                See How It Works
            </button>
        </div>

        <!-- Professional Trust Indicators -->
        <div class="grid grid-cols-2 lg:grid-cols-4 gap-6 mt-16 max-w-4xl mx-auto animate-on-scroll">
            <div class="text-center">
                <div class="w-12 h-12 bg-accent-600/20 border border-accent-400/50 rounded-lg flex items-center justify-center mx-auto mb-3">
                    <i class="bi bi-shield-fill-check text-accent-300 text-xl"></i>
                </div>
                <div class="text-sm font-medium text-white">Dispute-Free</div>
                <div class="text-xs text-gray-300 mt-1">Single source of truth</div>
            </div>

            <div class="text-center">
                <div class="w-12 h-12 bg-accent-600/20 border border-accent-400/50 rounded-lg flex items-center justify-center mx-auto mb-3">
                    <i class="bi bi-graph-up-arrow text-accent-300 text-xl"></i>
                </div>
                <div class="text-sm font-medium text-white">Profit Sharing</div>
                <div class="text-xs text-gray-300 mt-1">Deposits earn returns</div>
            </div>

            <div class="text-center">
                <div class="w-12 h-12 bg-accent-600/20 border border-accent-400/50 rounded-lg flex items-center justify-center mx-auto mb-3">
                    <i class="bi bi-camera-fill text-accent-300 text-xl"></i>
                </div>
                <div class="text-sm font-medium text-white">Verified Inspections</div>
                <div class="text-xs text-gray-300 mt-1">Geo-tagged evidence</div>
            </div>

            <div class="text-center">
                <div class="w-12 h-12 bg-accent-600/20 border border-accent-400/50 rounded-lg flex items-center justify-center mx-auto mb-3">
                    <i class="bi bi-phone-fill text-accent-300 text-xl"></i>
                </div>
                <div class="text-sm font-medium text-white">Mobile-First</div>
                <div class="text-xs text-gray-300 mt-1">Built for East Africa</div>
            </div>
        </div>
    </div>
</div>

<!-- Professional Problem Statement Section -->
<div class="section-padding bg-neutral-50">
    <div class="container mx-auto px-4">
        <div class="text-center mb-16 animate-on-scroll">
            <div class="inline-flex items-center bg-red-50 text-red-700 px-4 py-2 rounded-lg text-sm font-medium mb-6">
                <i class="bi bi-exclamation-triangle mr-2"></i>
                The Security Deposit Crisis
            </div>
            <h2 class="text-3xl lg:text-4xl font-bold text-secondary-900 mb-6">
                Security Deposit Disputes Are Destroying Rental Relationships
            </h2>
            <p class="text-lg text-secondary-600 max-w-3xl mx-auto">
                Across Uganda and East Africa, security deposit disputes are costing landlords and tenants millions in lost money, legal fees, and damaged relationships. The problem is simple: there's no transparency, no documentation, and no trust.
            </p>
        </div>

        <div class="grid md:grid-cols-3 gap-8 animate-stagger">
            <!-- Problem 1 - Tenants -->
            <div class="stagger-item">
                <div class="card-professional p-8 h-full">
                    <div class="w-14 h-14 bg-red-100 rounded-lg flex items-center justify-center mb-6">
                        <i class="bi bi-person-x text-2xl text-red-600"></i>
                    </div>

                    <h3 class="text-xl font-bold text-secondary-900 mb-4">Tenants Lose Money</h3>
                    <p class="text-secondary-600 leading-relaxed mb-6">
                        Tenants face unfair security deposit deductions with no transparency. Landlords claim damage without proof, and tenants have no way to dispute unclear charges. Deposits disappear into legal battles.
                    </p>

                    <div class="space-y-3">
                        <div class="flex items-center text-sm text-red-600">
                            <i class="bi bi-x-circle mr-2"></i>
                            Unfair deposit deductions
                        </div>
                        <div class="flex items-center text-sm text-red-600">
                            <i class="bi bi-x-circle mr-2"></i>
                            No inspection transparency
                        </div>
                        <div class="flex items-center text-sm text-red-600">
                            <i class="bi bi-x-circle mr-2"></i>
                            Months of disputes to recover deposits
                        </div>
                    </div>
                </div>
            </div>

            <!-- Problem 2 - Landlords -->
            <div class="stagger-item">
                <div class="card-professional p-8 h-full">
                    <div class="w-14 h-14 bg-orange-100 rounded-lg flex items-center justify-center mb-6">
                        <i class="bi bi-building-exclamation text-2xl text-orange-600"></i>
                    </div>

                    <h3 class="text-xl font-bold text-secondary-900 mb-4">Landlords Face Disputes</h3>
                    <p class="text-secondary-600 leading-relaxed mb-6">
                        Landlords struggle to prove property damage and justify deductions. Without documented evidence, tenants dispute every charge. Legal fees and lost time drain profitability.
                    </p>

                    <div class="space-y-3">
                        <div class="flex items-center text-sm text-orange-600">
                            <i class="bi bi-x-circle mr-2"></i>
                            No documented property evidence
                        </div>
                        <div class="flex items-center text-sm text-orange-600">
                            <i class="bi bi-x-circle mr-2"></i>
                            Tenant disputes over deductions
                        </div>
                        <div class="flex items-center text-sm text-orange-600">
                            <i class="bi bi-x-circle mr-2"></i>
                            Expensive legal battles
                        </div>
                    </div>
                </div>
            </div>

            <!-- Problem 3 - Property Managers -->
            <div class="stagger-item">
                <div class="card-professional p-8 h-full">
                    <div class="w-14 h-14 bg-purple-100 rounded-lg flex items-center justify-center mb-6">
                        <i class="bi bi-briefcase-fill text-2xl text-purple-600"></i>
                    </div>

                    <h3 class="text-xl font-bold text-secondary-900 mb-4">Managers Lose Trust</h3>
                    <p class="text-secondary-600 leading-relaxed mb-6">
                        Managing multiple properties multiplies deposit disputes. Reputation damage from disputes affects tenant acquisition and retention. No unified system to manage deposits across properties.
                    </p>

                    <div class="space-y-3">
                        <div class="flex items-center text-sm text-purple-600">
                            <i class="bi bi-x-circle mr-2"></i>
                            Multiplied disputes across properties
                        </div>
                        <div class="flex items-center text-sm text-purple-600">
                            <i class="bi bi-x-circle mr-2"></i>
                            Damaged reputation and trust
                        </div>
                        <div class="flex items-center text-sm text-purple-600">
                            <i class="bi bi-x-circle mr-2"></i>
                            No unified deposit management system
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Solution Section -->
<div class="section-padding bg-white">
    <div class="container mx-auto px-4">
        <div class="grid lg:grid-cols-2 gap-16 items-center">
            <!-- Left side - Visual with App Mockup -->
            <div class="relative">
                <div class="relative rounded-2xl overflow-hidden shadow-2xl">
                    <!-- App Mockup Image -->
                    <img src="/app_mock_ups/tenancy_details.png"
                         alt="est8Ledger tenancy details interface showing complete property management"
                         class="w-full h-auto object-cover rounded-2xl">
                </div>
            </div>

            <!-- Right side - Content -->
            <div class="space-y-8">
                <div>
                    <div class="inline-flex items-center bg-green-50 text-green-700 px-4 py-2 rounded-full text-sm font-medium mb-6">
                        <i class="bi bi-lightbulb mr-2"></i>
                        Our Complete Solution
                    </div>
                    <h2 class="text-4xl lg:text-5xl font-bold text-gray-800 mb-6">
                        Security Deposits
                        <span class="text-primary">Done Right</span>
                    </h2>
                    <p class="text-xl text-gray-600 mb-8 leading-relaxed">
                        est8Ledger combines transparent property inspections, documented evidence, and blockchain-backed security to eliminate deposit disputes forever.
                        Build trust with your tenants and protect your reputation.
                    </p>
                </div>

                <!-- Feature list -->
                <div class="space-y-6">
                    <div class="flex items-start space-x-4">
                        <div class="flex-shrink-0 w-12 h-12 bg-primary-100 rounded-lg flex items-center justify-center flex-shrink-0">
                            <i class="bi bi-shield-lock text-primary text-xl"></i>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold text-gray-800 mb-2">Secure Deposits with Investment Returns</h3>
                            <p class="text-gray-600">Deposits held in regulated escrow accounts. Earn returns through transparent profit-sharing investments while maintaining complete security and compliance.</p>
                        </div>
                    </div>

                    <div class="flex items-start space-x-4">
                        <div class="flex-shrink-0 w-12 h-12 bg-accent-100 rounded-lg flex items-center justify-center flex-shrink-0">
                            <i class="bi bi-camera text-accent-700 text-xl"></i>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold text-gray-800 mb-2">Professional Property Inspections</h3>
                            <p class="text-gray-600">Timestamped, geo-tagged inspections with photo evidence eliminate security deposit disputes. Compare move-in and move-out conditions with irrefutable documentation.</p>
                        </div>
                    </div>

                    <div class="flex items-start space-x-4">
                        <div class="flex-shrink-0 w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center flex-shrink-0">
                            <i class="bi bi-file-earmark-check text-blue-600 text-xl"></i>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold text-gray-800 mb-2">Digital Tenancy Agreements & Maintenance Management</h3>
                            <p class="text-gray-600">Create, sign, and store digital agreements securely. Track maintenance requests, manage repairs, and keep all property documentation in one accessible place.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Professional How It Works Section -->
<div class="section-padding bg-gradient-to-br from-gray-50 to-white relative overflow-hidden" id="how-it-works">
    <!-- Security-themed Background Shapes -->
    <div class="absolute inset-0 opacity-[0.06]">
        <div class="absolute top-10 left-20 w-40 h-40 transform rotate-12">
            <i class="bi bi-shield-lock text-primary text-9xl"></i>
        </div>
        <div class="absolute top-1/3 right-10 w-32 h-32 transform -rotate-45">
            <i class="bi bi-check-circle text-accent text-8xl"></i>
        </div>
        <div class="absolute bottom-20 left-1/4 w-36 h-36 transform rotate-30">
            <i class="bi bi-balance-scale text-primary text-8xl"></i>
        </div>
        <div class="absolute bottom-1/3 right-1/3 w-28 h-28 transform -rotate-12">
            <i class="bi bi-lock text-accent text-7xl"></i>
        </div>
    </div>

    <div class="container mx-auto px-4 relative z-10">
        <div class="text-center mb-16 animate-on-scroll">
            <div class="inline-flex items-center bg-primary-50 border border-primary-200 text-primary-700 px-4 py-2 rounded-lg text-sm font-medium mb-6">
                <i class="bi bi-gear mr-2"></i>
                Our Process
            </div>
            <h2 class="text-3xl lg:text-4xl font-bold text-secondary-900 mb-6">
                Your Deposit's Complete Journey
            </h2>
            <p class="text-lg text-secondary-600 max-w-3xl mx-auto mb-8">
                Every security deposit follows this exact 6-step process for maximum transparency and protection
            </p>
            
            <!-- Process Flow Indicator -->
            <div class="flex justify-center items-center space-x-2 mb-8">
                <div class="w-3 h-3 bg-primary-600 rounded-full"></div>
                <div class="w-8 h-0.5 bg-primary-300"></div>
                <div class="w-3 h-3 bg-accent-600 rounded-full"></div>
                <div class="w-8 h-0.5 bg-primary-300"></div>
                <div class="w-3 h-3 bg-primary-600 rounded-full"></div>
                <div class="w-8 h-0.5 bg-primary-300"></div>
                <div class="w-3 h-3 bg-accent-600 rounded-full"></div>
                <div class="w-8 h-0.5 bg-primary-300"></div>
                <div class="w-3 h-3 bg-primary-600 rounded-full"></div>
            </div>
        </div>

        <!-- Professional Process Grid with Flow -->
        <div class="relative">
            <!-- Desktop Flow Lines -->
            <div class="hidden xl:block absolute top-24 left-0 right-0 h-0.5 bg-gradient-to-r from-primary-200 via-accent-200 to-primary-200 z-0"></div>
            
            <div class="grid lg:grid-cols-2 xl:grid-cols-3 gap-8 animate-stagger relative z-10">
                <!-- Step 1: Prepare Agreement -->
                <div class="stagger-item relative">
                    <div class="bg-white border-2 border-primary-100 rounded-xl p-8 h-full shadow-lg hover:shadow-xl transition-all hover:border-primary-200">
                        <!-- Step Number with Flow -->
                        <div class="flex items-center mb-6">
                            <div class="w-14 h-14 bg-gradient-to-br from-primary-600 to-primary-700 text-white rounded-xl flex items-center justify-center font-bold text-xl mr-4 shadow-lg">
                                1
                            </div>
                            <div class="flex-1 h-px bg-gradient-to-r from-primary-300 to-transparent"></div>
                            <i class="bi bi-arrow-right text-primary-400 text-lg ml-2"></i>
                        </div>

                        <!-- Icon -->
                        <div class="w-16 h-16 bg-primary-50 border border-primary-100 rounded-xl flex items-center justify-center mb-6">
                            <i class="bi bi-file-earmark-text text-2xl text-primary-700"></i>
                        </div>

                        <h3 class="text-xl font-bold text-secondary-900 mb-4">Prepare Agreement</h3>
                        <p class="text-secondary-600 leading-relaxed mb-6">
                            Digital tenancy agreement preparation with standardized terms, conditions, and deposit requirements.
                            Ensures legal compliance and clear documentation.
                        </p>

                        <!-- Professional Features -->
                        <div class="space-y-2">
                            <div class="flex items-center text-sm text-secondary-600">
                                <i class="bi bi-check-circle-fill text-accent-600 mr-2"></i>
                                Legal compliance
                            </div>
                            <div class="flex items-center text-sm text-secondary-600">
                                <i class="bi bi-check-circle-fill text-accent-600 mr-2"></i>
                                Digital signatures
                            </div>
                            <div class="flex items-center text-sm text-secondary-600">
                                <i class="bi bi-check-circle-fill text-accent-600 mr-2"></i>
                                Standardized terms
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Step 2: Move-in Inspection -->
                <div class="stagger-item relative">
                    <div class="bg-white border-2 border-accent-100 rounded-xl p-8 h-full shadow-lg hover:shadow-xl transition-all hover:border-accent-200">
                        <!-- Step Number with Flow -->
                        <div class="flex items-center mb-6">
                            <div class="w-14 h-14 bg-gradient-to-br from-accent-600 to-accent-700 text-white rounded-xl flex items-center justify-center font-bold text-xl mr-4 shadow-lg">
                                2
                            </div>
                            <div class="flex-1 h-px bg-gradient-to-r from-accent-300 to-transparent"></div>
                            <i class="bi bi-arrow-right text-accent-400 text-lg ml-2"></i>
                        </div>

                        <!-- Icon -->
                        <div class="w-16 h-16 bg-accent-50 border border-accent-100 rounded-xl flex items-center justify-center mb-6">
                            <i class="bi bi-camera text-2xl text-accent-700"></i>
                        </div>

                        <h3 class="text-xl font-bold text-secondary-900 mb-4">Move-in Inspection</h3>
                        <p class="text-secondary-600 leading-relaxed mb-6">
                            Comprehensive property inspection with photo documentation and condition reporting.
                            Creates baseline for future comparisons and dispute prevention.
                        </p>

                        <!-- Professional Features -->
                        <div class="space-y-2">
                            <div class="flex items-center text-sm text-secondary-600">
                                <i class="bi bi-check-circle-fill text-primary-600 mr-2"></i>
                                Photo documentation
                            </div>
                            <div class="flex items-center text-sm text-secondary-600">
                                <i class="bi bi-check-circle-fill text-primary-600 mr-2"></i>
                                Condition reporting
                            </div>
                            <div class="flex items-center text-sm text-secondary-600">
                                <i class="bi bi-check-circle-fill text-primary-600 mr-2"></i>
                                Digital records
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Step 3: Deposit Security -->
                <div class="stagger-item relative">
                    <div class="bg-white border-2 border-primary-100 rounded-xl p-8 h-full shadow-lg hover:shadow-xl transition-all hover:border-primary-200">
                        <!-- Step Number with Flow -->
                        <div class="flex items-center mb-6">
                            <div class="w-14 h-14 bg-gradient-to-br from-primary-600 to-primary-700 text-white rounded-xl flex items-center justify-center font-bold text-xl mr-4 shadow-lg">
                                3
                            </div>
                            <div class="flex-1 h-px bg-gradient-to-r from-primary-300 to-transparent"></div>
                            <i class="bi bi-arrow-right text-primary-400 text-lg ml-2"></i>
                        </div>

                        <!-- Icon -->
                        <div class="w-16 h-16 bg-primary-50 border border-primary-100 rounded-xl flex items-center justify-center mb-6">
                            <i class="bi bi-shield-lock text-2xl text-primary-700"></i>
                        </div>

                        <h3 class="text-xl font-bold text-secondary-900 mb-4">Deposit Security</h3>
                        <p class="text-secondary-600 leading-relaxed mb-6">
                            Secure deposit funds in Blockchain Secured escrow accounts with blockchain verification.
                            Funds remain protected and accessible only through authorized processes.
                        </p>

                        <!-- Professional Features -->
                        <div class="space-y-2">
                            <div class="flex items-center text-sm text-secondary-600">
                                <i class="bi bi-check-circle-fill text-accent-600 mr-2"></i>
                                Blockchain Secured accounts
                            </div>
                            <div class="flex items-center text-sm text-secondary-600">
                                <i class="bi bi-check-circle-fill text-accent-600 mr-2"></i>
                                Blockchain verification
                            </div>
                            <div class="flex items-center text-sm text-secondary-600">
                                <i class="bi bi-check-circle-fill text-accent-600 mr-2"></i>
                                Regulated escrow
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Step 4: Investment Management -->
                <div class="stagger-item relative">
                    <div class="bg-white border-2 border-green-100 rounded-xl p-8 h-full shadow-lg hover:shadow-xl transition-all hover:border-green-200">
                        <!-- Step Number with Flow -->
                        <div class="flex items-center mb-6">
                            <div class="w-14 h-14 bg-gradient-to-br from-green-600 to-green-700 text-white rounded-xl flex items-center justify-center font-bold text-xl mr-4 shadow-lg">
                                4
                            </div>
                            <div class="flex-1 h-px bg-gradient-to-r from-green-300 to-transparent"></div>
                            <i class="bi bi-arrow-right text-green-400 text-lg ml-2"></i>
                        </div>

                        <!-- Icon -->
                        <div class="w-16 h-16 bg-green-50 border border-green-100 rounded-xl flex items-center justify-center mb-6">
                            <i class="bi bi-graph-up text-2xl text-green-700"></i>
                        </div>

                        <h3 class="text-xl font-bold text-secondary-900 mb-4">Investment Management</h3>
                        <p class="text-secondary-600 leading-relaxed mb-6">
                            With mutual agreement, security deposit funds are invested in money markets.
                            Profits can be withdrawn after the first year, with transparent profit sharing.
                        </p>

                        <!-- Professional Features -->
                        <div class="space-y-2">
                            <div class="flex items-center text-sm text-secondary-600">
                                <i class="bi bi-check-circle-fill text-green-600 mr-2"></i>
                                Profits to tenant
                            </div>
                            <div class="flex items-center text-sm text-secondary-600">
                                <i class="bi bi-check-circle-fill text-green-600 mr-2"></i>
                                Profits to landlord
                            </div>
                            <div class="flex items-center text-sm text-secondary-600">
                                <i class="bi bi-check-circle-fill text-green-600 mr-2"></i>
                                Management fees
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Step 5: Move-out Inspection -->
                <div class="stagger-item relative">
                    <div class="bg-white border-2 border-accent-100 rounded-xl p-8 h-full shadow-lg hover:shadow-xl transition-all hover:border-accent-200">
                        <!-- Step Number with Flow -->
                        <div class="flex items-center mb-6">
                            <div class="w-14 h-14 bg-gradient-to-br from-accent-600 to-accent-700 text-white rounded-xl flex items-center justify-center font-bold text-xl mr-4 shadow-lg">
                                5
                            </div>
                            <div class="flex-1 h-px bg-gradient-to-r from-accent-300 to-transparent"></div>
                            <i class="bi bi-arrow-right text-accent-400 text-lg ml-2"></i>
                        </div>

                        <!-- Icon -->
                        <div class="w-16 h-16 bg-accent-50 border border-accent-100 rounded-xl flex items-center justify-center mb-6">
                            <i class="bi bi-search text-2xl text-accent-700"></i>
                        </div>

                        <h3 class="text-xl font-bold text-secondary-900 mb-4">Move-out Inspection</h3>
                        <p class="text-secondary-600 leading-relaxed mb-6">
                            Compare property condition against move-in documentation with detailed photo evidence.
                            Transparent assessment determines deposit refund calculations.
                        </p>

                        <!-- Professional Features -->
                        <div class="space-y-2">
                            <div class="flex items-center text-sm text-secondary-600">
                                <i class="bi bi-check-circle-fill text-primary-600 mr-2"></i>
                                Condition comparison
                            </div>
                            <div class="flex items-center text-sm text-secondary-600">
                                <i class="bi bi-check-circle-fill text-primary-600 mr-2"></i>
                                Photo evidence
                            </div>
                            <div class="flex items-center text-sm text-secondary-600">
                                <i class="bi bi-check-circle-fill text-primary-600 mr-2"></i>
                                Transparent assessment
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Step 6: Process Refund -->
                <div class="stagger-item relative lg:col-span-2 xl:col-span-1">
                    <div class="bg-white border-2 border-primary-100 rounded-xl p-8 h-full shadow-lg hover:shadow-xl transition-all hover:border-primary-200">
                        <!-- Step Number with Completion -->
                        <div class="flex items-center mb-6">
                            <div class="w-14 h-14 bg-gradient-to-br from-primary-600 to-primary-700 text-white rounded-xl flex items-center justify-center font-bold text-xl mr-4 shadow-lg">
                                6
                            </div>
                            <div class="flex-1 h-px bg-gradient-to-r from-primary-300 to-accent-300"></div>
                            <i class="bi bi-check-circle-fill text-accent-600 text-xl ml-2"></i>
                        </div>

                        <!-- Icon -->
                        <div class="w-16 h-16 bg-primary-50 border border-primary-100 rounded-xl flex items-center justify-center mb-6">
                            <i class="bi bi-cash-coin text-2xl text-primary-700"></i>
                        </div>

                        <h3 class="text-xl font-bold text-secondary-900 mb-4">Process Refund</h3>
                        <p class="text-secondary-600 leading-relaxed mb-6">
                            Process deposit return based on inspection results with transparent calculations.
                            Secure, auditable transactions ensure fair and timely refund distribution.
                        </p>

                        <!-- Professional Features -->
                        <div class="space-y-2">
                            <div class="flex items-center text-sm text-secondary-600">
                                <i class="bi bi-check-circle-fill text-accent-600 mr-2"></i>
                                Transparent calculations
                            </div>
                            <div class="flex items-center text-sm text-secondary-600">
                                <i class="bi bi-check-circle-fill text-accent-600 mr-2"></i>
                                Secure transactions
                            </div>
                            <div class="flex items-center text-sm text-secondary-600">
                                <i class="bi bi-check-circle-fill text-accent-600 mr-2"></i>
                                Complete audit trail
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- XRPL Integration Section -->
<div class="section-padding bg-gradient-to-br from-[#0d06c8] to-[#1a0f8a] relative overflow-hidden">
    <!-- Background Pattern -->
    <div class="absolute inset-0 opacity-10">
        <div class="absolute top-10 left-10 w-32 h-32 transform rotate-12">
            <i class="bi bi-diagram-3 text-white text-8xl"></i>
        </div>
        <div class="absolute top-1/3 right-20 w-24 h-24 transform -rotate-45">
            <i class="bi bi-shield-lock text-[#9eff6b] text-6xl"></i>
        </div>
        <div class="absolute bottom-20 left-1/4 w-28 h-28 transform rotate-30">
            <i class="bi bi-lightning text-white text-7xl"></i>
        </div>
        <div class="absolute bottom-1/3 right-1/3 w-20 h-20 transform -rotate-12">
            <i class="bi bi-check-circle text-[#9eff6b] text-5xl"></i>
        </div>
    </div>

    <div class="container mx-auto px-4 relative z-10">
        <div class="text-center mb-16 animate-on-scroll">
            <div class="inline-flex items-center bg-white/10 backdrop-blur-sm border border-white/20 text-white px-4 py-2 rounded-lg text-sm font-medium mb-6">
                <i class="bi bi-diagram-3 mr-2 text-[#9eff6b]"></i>
                Blockchain Technology
            </div>
            <h2 class="text-3xl lg:text-4xl font-bold text-white mb-6">
                Built on <span class="text-[#9eff6b]">XRPL</span>
            </h2>
            <p class="text-lg text-white/90 max-w-3xl mx-auto mb-8">
                Leveraging the power of XRP Ledger blockchain technology to create unbreakable trust, 
                transparency, and efficiency in security deposit management
            </p>

            <!-- XRPL Logo -->
            <div class="flex justify-center mb-12">
                <div class="rounded-2xl p-4 border border-white/20">
                    <img src="/Built-on-XRPL-Color-Horizontal-White.png" 
                         alt="Built on XRPL" 
                         class="h-16 md:h-20 mx-auto">
                </div>
            </div>
        </div>

        <!-- Trust Statement -->
        <!-- <div class="text-center mt-16 animate-on-scroll">
            <div class="bg-white/10 backdrop-blur-sm border border-white/20 rounded-2xl p-8 max-w-4xl mx-auto">
                <div class="flex items-center justify-center mb-6">
                    <div class="w-12 h-12 bg-[#9eff6b]/20 rounded-full flex items-center justify-center mr-4">
                        <i class="bi bi-patch-check text-[#9eff6b] text-xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-white">Blockchain-Verified Trust</h3>
                </div>
                <p class="text-lg text-white/90 leading-relaxed">
                    By building on XRPL, Est8Ledger eliminates the need for blind trust between landlords and tenants. 
                    Every transaction, agreement, and profit distribution is cryptographically verified and publicly auditable, 
                    creating unprecedented transparency in the rental deposit market.
                </p>
            </div>
        </div> -->
    </div>
</div>

<!-- Benefits Section - Modern Card Layout -->
<div class="py-20 bg-gradient-to-br from-gray-50 to-gray-100">
    <div class="container mx-auto px-4">
        <div class="text-center mb-16 animate-on-scroll">
            <div class="inline-flex items-center bg-primary-50 border border-primary-200 text-primary-700 px-4 py-2 rounded-full text-sm font-medium mb-6">
                <i class="bi bi-star-fill mr-2"></i>
                Security Deposit Solution
            </div>
            <h2 class="text-4xl lg:text-5xl font-bold text-gray-800 mb-6">Why Choose est8Ledger?</h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">The platform that eliminates security deposit disputes through transparency, documentation, and blockchain-backed security</p>
        </div>

        <!-- Hero Cards Layout -->
        <div class="grid lg:grid-cols-2 gap-8 mb-16 animate-stagger">
            <!-- Landlords Card -->
            <div class="stagger-item relative overflow-hidden bg-white rounded-2xl shadow-xl hover:shadow-2xl transition-shadow">
                <div class="absolute top-0 right-0 w-32 h-32 bg-primary opacity-10 rounded-full -mr-16 -mt-16"></div>
                <!-- Mockup Image -->
                <div class="h-48 overflow-hidden bg-gray-100 flex items-center justify-center">
                    <img src="/app_mock_ups/property_dashbaord.png" alt="Property dashboard for landlords" class="w-full h-full object-cover">
                </div>
                <div class="relative p-8">
                    <div class="flex items-center mb-6">
                        <div class="bg-primary w-16 h-16 rounded-xl flex items-center justify-center mr-4">
                            <i class="bi bi-building text-2xl text-white"></i>
                        </div>
                        <div>
                            <h3 class="text-2xl font-bold text-gray-800">For Property Owners</h3>
                            <p class="text-gray-500">Maximize returns, minimize headaches</p>
                        </div>
                    </div>
                    <div class="space-y-4">
                        <div class="flex items-start">
                            <div class="bg-accent-100 w-8 h-8 rounded-full flex items-center justify-center mr-3 mt-1 flex-shrink-0">
                                <i class="bi bi-graph-up text-accent-700 text-sm"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-800">Investment Opportunities</h4>
                                <p class="text-gray-600 text-sm">Earn returns on idle deposits through transparent profit-sharing investments</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="bg-blue-100 w-8 h-8 rounded-full flex items-center justify-center mr-3 mt-1 flex-shrink-0">
                                <i class="bi bi-check-circle text-blue-600 text-sm"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-800">Eliminate Security Deposit Disputes</h4>
                                <p class="text-gray-600 text-sm">Photo-backed inspections and transparent calculations end tenant conflicts</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="bg-purple-100 w-8 h-8 rounded-full flex items-center justify-center mr-3 mt-1 flex-shrink-0">
                                <i class="bi bi-speedometer2 text-purple-600 text-sm"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-800">Documented Evidence</h4>
                                <p class="text-gray-600 text-sm">Timestamped, geo-tagged inspections and maintenance records protect you from disputes</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="bg-green-100 w-8 h-8 rounded-full flex items-center justify-center mr-3 mt-1 flex-shrink-0">
                                <i class="bi bi-bar-chart text-green-600 text-sm"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-800">Detailed Reporting & Analytics</h4>
                                <p class="text-gray-600 text-sm">Track property performance, tenant history, and financial metrics easily</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Tenants Card -->
            <div class="stagger-item relative overflow-hidden bg-white rounded-2xl shadow-xl hover:shadow-2xl transition-shadow">
                <div class="absolute top-0 right-0 w-32 h-32 bg-accent opacity-10 rounded-full -mr-16 -mt-16"></div>
                <!-- Mockup Image -->
                <div class="h-48 overflow-hidden bg-gray-100 flex items-center justify-center">
                    <img src="/app_mock_ups/active_tenancy.png" alt="Active tenancy management for tenants" class="w-full h-full object-cover">
                </div>
                <div class="relative p-8">
                    <div class="flex items-center mb-6">
                        <div class="bg-accent w-16 h-16 rounded-xl flex items-center justify-center mr-4">
                            <i class="bi bi-person-heart text-2xl text-gray-800"></i>
                        </div>
                        <div>
                            <h3 class="text-2xl font-bold text-gray-800">For Tenants</h3>
                            <p class="text-gray-500">Your deposit, your rights, your peace of mind</p>
                        </div>
                    </div>
                    <div class="space-y-4">
                        <div class="flex items-start">
                            <div class="bg-accent-100 w-8 h-8 rounded-full flex items-center justify-center mr-3 mt-1 flex-shrink-0">
                                <i class="bi bi-shield-check text-accent-700 text-sm"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-800">Secure Deposit Protection</h4>
                                <p class="text-gray-600 text-sm">Your deposit held in regulated escrow accounts with full transparency</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="bg-blue-100 w-8 h-8 rounded-full flex items-center justify-center mr-3 mt-1 flex-shrink-0">
                                <i class="bi bi-eye text-blue-600 text-sm"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-800">Complete Transparency</h4>
                                <p class="text-gray-600 text-sm">See timestamped property inspections with photo evidence before and after</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="bg-purple-100 w-8 h-8 rounded-full flex items-center justify-center mr-3 mt-1 flex-shrink-0">
                                <i class="bi bi-cash-coin text-purple-600 text-sm"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-800">Earn Returns on Your Deposit</h4>
                                <p class="text-gray-600 text-sm">Your idle deposit earns returns through profit-sharing investments</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="bg-green-100 w-8 h-8 rounded-full flex items-center justify-center mr-3 mt-1 flex-shrink-0">
                                <i class="bi bi-heart text-green-600 text-sm"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-800">Stress-Free Rental Experience</h4>
                                <p class="text-gray-600 text-sm">Focus on your home, not deposit disputes—we handle the rest</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Feature Mockups Grid -->
        <div class="mb-12">
            <div class="grid md:grid-cols-2 lg:grid-cols-2 gap-6 animate-stagger">
                <div class="stagger-item rounded-xl overflow-hidden shadow-lg hover:shadow-xl transition-shadow">
                    <img src="/app_mock_ups/tenancy_agreement.png" alt="Tenancy agreement management" class="w-full h-64 object-cover">
                </div>
                <div class="stagger-item rounded-xl overflow-hidden shadow-lg hover:shadow-xl transition-shadow">
                    <img src="/app_mock_ups/repair_breakdown.png" alt="Maintenance and repair tracking" class="w-full h-64 object-cover">
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Trust & Security Section -->
<div class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-gray-800 mb-4">Built on Trust & Security</h2>
            <p class="text-gray-600 max-w-2xl mx-auto">Your security and peace of mind are our top priorities</p>
        </div>

        <div class="grid md:grid-cols-3 gap-8">
            <div class="text-center p-6">
                <div class="bg-accent-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="bi bi-shield-check text-2xl text-accent-700"></i>
                </div>
                <h3 class="text-xl font-semibold text-gray-800 mb-3">Regulated Escrow</h3>
                <p class="text-gray-600">All deposits held in fully regulated escrow accounts with banking-level security and compliance</p>
            </div>

            <div class="text-center p-6">
                <div class="bg-blue-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="bi bi-lock text-2xl text-blue-600"></i>
                </div>
                <h3 class="text-xl font-semibold text-gray-800 mb-3">Data Protection</h3>
                <p class="text-gray-600">End-to-end encryption and secure data handling ensure your information stays private and protected</p>
            </div>

            <div class="text-center p-6">
                <div class="bg-purple-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="bi bi-award text-2xl text-purple-600"></i>
                </div>
                <h3 class="text-xl font-semibold text-gray-800 mb-3">Certified Fair</h3>
                <p class="text-gray-600">Transparent processes and documented procedures ensure fairness for all parties involved</p>
            </div>
        </div>

        <!-- Trust badges -->
        <div class="mt-12 text-center">
            <p class="text-sm text-gray-500 mb-4">Trusted by landlords and tenants nationwide</p>
            <div class="flex flex-wrap justify-center items-center gap-6 opacity-70 mb-6">
                <div class="flex items-center text-gray-600 hover:text-gray-800 transition-colors">
                    <i class="bi bi-shield-check mr-2 text-accent-600"></i>
                    <span class="font-semibold">Blockchain Secured</span>
                </div>
                <div class="flex items-center text-gray-600 hover:text-gray-800 transition-colors">
                    <i class="bi bi-lock mr-2 text-blue-600"></i>
                    <span class="font-semibold">SSL Secured</span>
                </div>
                <div class="flex items-center text-gray-600 hover:text-gray-800 transition-colors">
                    <i class="bi bi-check-circle mr-2 text-green-600"></i>
                    <span class="font-semibold">Compliant</span>
                </div>
            </div>

            <!-- Crunchbase Trust Badge -->
            <div class="flex justify-center">
                <a href="https://www.crunchbase.com/organization/est8ledger" target="_blank" rel="noopener noreferrer" class="inline-flex items-center px-4 py-2 bg-gradient-to-r from-primary-50 to-accent-50 border border-primary-200 rounded-lg hover:shadow-md transition-shadow">
                    <i class="bi bi-graph-up text-primary-700 mr-2 text-lg"></i>
                    <span class="text-sm font-semibold text-primary-700">Featured on Crunchbase</span>
                    <i class="bi bi-arrow-up-right text-primary-600 ml-2 text-xs"></i>
                </a>
            </div>
        </div>
    </div>
</div>



<!-- Stats Section -->
<!-- <div class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="grid md:grid-cols-4 gap-8 text-center">
            <div>
                <div class="text-3xl font-bold text-primary mb-2">$5M+</div>
                <div class="text-gray-600">Deposits Secured</div>
            </div>
            <div>
                <div class="text-3xl font-bold text-accent-600 mb-2">2,500+</div>
                <div class="text-gray-600">Properties Protected</div>
            </div>
            <div>
                <div class="text-3xl font-bold text-purple-600 mb-2">5,000+</div>
                <div class="text-gray-600">Happy Users</div>
            </div>
            <div>
                <div class="text-3xl font-bold text-orange-600 mb-2">99.8%</div>
                <div class="text-gray-600">Dispute Resolution</div>
            </div>
        </div>
    </div>
</div> -->
<?= $this->endSection() ?>
