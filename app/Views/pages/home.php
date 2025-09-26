<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<!-- Professional Banking Hero Section -->
<div class="relative bg-white py-20 lg:py-28 overflow-hidden">
    <!-- Security-themed Background Shapes -->
    <div class="absolute inset-0 opacity-[0.05]">
        <!-- Shield patterns -->
        <div class="absolute top-20 left-10 w-32 h-32 transform rotate-12">
            <i class="bi bi-shield-check text-primary text-8xl"></i>
        </div>
        <div class="absolute top-40 right-20 w-24 h-24 transform -rotate-45">
            <i class="bi bi-lock text-accent text-6xl"></i>
        </div>
        <div class="absolute bottom-32 left-1/4 w-28 h-28 transform rotate-45">
            <i class="bi bi-balance-scale text-primary text-7xl"></i>
        </div>
        <div class="absolute bottom-20 right-1/3 w-20 h-20 transform -rotate-12">
            <i class="bi bi-check-circle text-accent text-5xl"></i>
        </div>
        <!-- Subtle grid pattern -->
        <div class="absolute inset-0" style="background-image: radial-gradient(circle at 1px 1px, #0d06c8 1px, transparent 0); background-size: 40px 40px; opacity: 0.3;"></div>
    </div>

    <div class="container mx-auto px-4 text-center relative z-10">
        <!-- Professional Badge -->
        <div class="inline-flex items-center bg-primary-50 border border-primary-200 text-primary-700 px-4 py-2 rounded-full text-sm font-medium mb-8 animate-on-scroll">
            <i class="bi bi-shield-check mr-2"></i>
            Secure • Transparent • Professional
        </div>

        <!-- Main Heading -->
        <h1 class="text-4xl lg:text-5xl xl:text-6xl font-bold text-secondary-900 mb-6 leading-tight animate-on-scroll">
            Security Deposits Made
            <span class="text-primary-700">Simple and Fair</span>
        </h1>

        <!-- Subheading -->
        <p class="text-lg lg:text-xl text-secondary-600 mb-12 max-w-3xl mx-auto leading-relaxed animate-on-scroll">
            Professional security deposit management for landlords, property managers, and tenants.
            <span class="font-semibold text-primary-700">Blockchain Secured escrow accounts</span>
            with complete transparency and regulatory compliance.
        </p>

        <!-- Professional Visual Element -->
        <div class="flex justify-center mb-12 animate-scale">
            <div class="relative">
                <!-- Main Icon Container -->
                <div class="bg-primary-700 w-24 h-24 lg:w-28 lg:h-28 rounded-lg flex items-center justify-center shadow-professional-lg">
                    <i class="bi bi-shield-check text-3xl lg:text-4xl text-white"></i>
                </div>

                <!-- Professional Accent Elements -->
                <div class="absolute -top-2 -right-2 bg-accent-600 w-8 h-8 lg:w-10 lg:h-10 rounded-md flex items-center justify-center shadow-professional">
                    <i class="bi bi-check text-sm lg:text-base text-white"></i>
                </div>

                <div class="absolute -bottom-2 -left-2 bg-secondary-100 w-8 h-8 lg:w-10 lg:h-10 rounded-md flex items-center justify-center shadow-professional border border-secondary-200">
                    <i class="bi bi-house-door text-sm lg:text-base text-secondary-600"></i>
                </div>
            </div>
        </div>

        <!-- Professional CTA Buttons -->
        <div class="flex flex-col sm:flex-row gap-4 justify-center animate-on-scroll">
            <button onclick="openDemoModal()" class="bg-primary-700 hover:bg-primary-800 px-8 py-3 rounded-lg font-semibold text-white transition-colors">
                Request Demo
            </button>

            <button onclick="document.getElementById('how-it-works').scrollIntoView({behavior: 'smooth'})" class="bg-accent-600 hover:bg-accent-700 text-white px-8 py-3 rounded-lg font-semibold transition-colors">
                Learn More
            </button>
        </div>

        <!-- Professional Trust Indicators -->
        <div class="grid grid-cols-2 lg:grid-cols-4 gap-6 mt-16 max-w-4xl mx-auto animate-on-scroll">
            <div class="text-center">
                <div class="w-12 h-12 bg-accent-50 rounded-lg flex items-center justify-center mx-auto mb-3">
                    <i class="bi bi-shield-fill-check text-accent-600 text-xl"></i>
                </div>
                <div class="text-sm font-medium text-secondary-900">Bank-Grade Security</div>
                <div class="text-xs text-secondary-500 mt-1">256-bit encryption</div>
            </div>

            <div class="text-center">
                <div class="w-12 h-12 bg-primary-50 rounded-lg flex items-center justify-center mx-auto mb-3">
                    <i class="bi bi-file-spreadsheet-fill text-primary-600 text-xl"></i>
                </div>
                <div class="text-sm font-medium text-secondary-900">Blockchain Secured</div>
                <div class="text-xs text-secondary-500 mt-1"><a href="https://xrpl.org/" target="_blank">XRP Ledger</a></div>
            </div>

            <div class="text-center">
                <div class="w-12 h-12 bg-secondary-50 rounded-lg flex items-center justify-center mx-auto mb-3">
                    <i class="bi bi-lightning-fill text-secondary-600 text-xl"></i>
                </div>
                <div class="text-sm font-medium text-secondary-900">Instant Processing</div>
                <div class="text-xs text-secondary-500 mt-1">Real-time transfers</div>
            </div>

            <div class="text-center">
                <div class="w-12 h-12 bg-accent-50 rounded-lg flex items-center justify-center mx-auto mb-3">
                    <i class="bi bi-people text-accent-600 text-xl"></i>
                </div>
                <div class="text-sm font-medium text-secondary-900">24/7 Support</div>
                <div class="text-xs text-secondary-500 mt-1">Always available</div>
            </div>
        </div>
    </div>
</div>

<!-- Professional Problem Statement Section -->
<div class="section-padding bg-neutral-50">
    <div class="container mx-auto px-4">
        <div class="text-center mb-16 animate-on-scroll">
            <div class="inline-flex items-center bg-primary-50 text-primary-700 px-4 py-2 rounded-lg text-sm font-medium mb-6">
                <i class="bi bi-exclamation-circle mr-2"></i>
                Industry Challenges
            </div>
            <h2 class="text-3xl lg:text-4xl font-bold text-secondary-900 mb-6">
                Traditional Security Deposit Challenges
            </h2>
            <p class="text-lg text-secondary-600 max-w-3xl mx-auto">
                Current security deposit processes create inefficiencies and disputes that impact both property owners and tenants
            </p>
        </div>

        <div class="grid md:grid-cols-3 gap-8 animate-stagger">
            <!-- Problem 1 -->
            <div class="stagger-item">
                <div class="card-professional p-8 h-full">
                    <!-- Professional Icon -->
                    <div class="w-14 h-14 bg-primary-100 rounded-lg flex items-center justify-center mb-6">
                        <i class="bi bi-graph-down text-2xl text-primary-600"></i>
                    </div>

                    <h3 class="text-xl font-bold text-secondary-900 mb-4">Extended Vacancy Periods</h3>
                    <p class="text-secondary-600 leading-relaxed mb-6">
                        High security deposit requirements deter qualified tenants, resulting in longer vacancy periods and reduced rental income for property owners.
                    </p>

                    <!-- Professional Stats -->
                    <div class="bg-primary-50 p-4 rounded-lg">
                        <div class="flex items-center justify-between">
                            <span class="text-sm font-medium text-primary-700">Average Impact</span>
                            <span class="text-sm font-bold text-primary-900">+30% vacancy time</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Problem 2 -->
            <div class="stagger-item">
                <div class="card-professional p-8 h-full">
                    <!-- Professional Icon -->
                    <div class="w-14 h-14 bg-accent-100 rounded-lg flex items-center justify-center mb-6">
                        <i class="bi bi-shield-exclamation text-2xl text-accent-700"></i>
                    </div>

                    <h3 class="text-xl font-bold text-secondary-900 mb-4">Tenant Deposit Concerns</h3>
                    <p class="text-secondary-600 leading-relaxed mb-6">
                        Tenants experience anxiety about deposit recovery due to lack of transparency in traditional deposit management systems.
                    </p>

                    <!-- Professional Stats -->
                    <div class="bg-accent-50 p-4 rounded-lg">
                        <div class="flex items-center justify-between">
                            <span class="text-sm font-medium text-accent-700">Tenant Concern Rate</span>
                            <span class="text-sm font-bold text-accent-900">85% report anxiety</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Problem 3 -->
            <div class="stagger-item">
                <div class="card-professional p-8 h-full">
                    <!-- Professional Icon -->
                    <div class="w-14 h-14 bg-primary-100 rounded-lg flex items-center justify-center mb-6">
                        <i class="bi bi-exclamation-triangle text-2xl text-primary-600"></i>
                    </div>

                    <h3 class="text-xl font-bold text-secondary-900 mb-4">Dispute Resolution Issues</h3>
                    <p class="text-secondary-600 leading-relaxed mb-6">
                        Limited transparency in traditional systems leads to disputes, legal complications, and damaged landlord-tenant relationships.
                    </p>

                    <!-- Professional Stats -->
                    <div class="bg-primary-50 p-4 rounded-lg">
                        <div class="flex items-center justify-between">
                            <span class="text-sm font-medium text-primary-700">Dispute Rate</span>
                            <span class="text-sm font-bold text-primary-900">60% of deposits</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<!-- Solution Section -->
<div class="py-20 bg-white">
    <div class="container mx-auto px-4">
        <div class="grid lg:grid-cols-2 gap-12 items-center">
            <!-- Left side - Image -->
            <div class="relative">
                <div class="relative z-10">
                    <img src="/solution.png" alt="Est8Ledger Solution" class="w-full max-w-lg mx-auto rounded-2xl shadow-2xl">
                </div>
                <!-- Decorative elements -->
                <div class="absolute -top-4 -right-4 w-24 h-24 bg-accent/20 rounded-full blur-xl"></div>
                <div class="absolute -bottom-6 -left-6 w-32 h-32 bg-primary/10 rounded-full blur-xl"></div>
                <div class="absolute top-1/2 -left-8 w-4 h-4 bg-accent rounded-full animate-pulse"></div>
                <div class="absolute top-1/4 -right-6 w-6 h-6 bg-primary/30 rounded-full animate-bounce"></div>
            </div>

            <!-- Right side - Content -->
            <div class="space-y-8">
                <div>
                    <div class="inline-flex items-center bg-primary-50 text-primary px-4 py-2 rounded-full text-sm font-medium mb-6">
                        <i class="bi bi-shield-check mr-2"></i>
                        Our Solution
                    </div>
                    <h2 class="text-4xl lg:text-5xl font-bold text-gray-800 mb-6">
                        Est8Ledger Brings 
                        <span class="text-primary">Trust</span> to Rentals
                    </h2>
                    <p class="text-xl text-gray-600 mb-8 leading-relaxed">
                        Our secure escrow system and transparent processes protect both landlords and tenants, building trust from day one
                    </p>
                </div>

                <!-- Feature list -->
                <div class="space-y-6">
                    <div class="flex items-start space-x-4">
                        <div class="flex-shrink-0 w-12 h-12 bg-primary-100 rounded-lg flex items-center justify-center">
                            <i class="bi bi-bank text-primary text-xl"></i>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold text-gray-800 mb-2">Secure Escrow Accounts</h3>
                            <p class="text-gray-600">Deposits are held in secure, regulated escrow accounts, ensuring funds are protected and available when needed</p>
                        </div>
                    </div>

                    <div class="flex items-start space-x-4">
                        <div class="flex-shrink-0 w-12 h-12 bg-accent-100 rounded-lg flex items-center justify-center">
                            <i class="bi bi-file-earmark-text text-green-600 text-xl"></i>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold text-gray-800 mb-2">Digital Tenancy Agreements</h3>
                            <p class="text-gray-600">Streamlined digital contracts make onboarding faster and ensure all terms are clearly documented</p>
                        </div>
                    </div>

                    <div class="flex items-start space-x-4">
                        <div class="flex-shrink-0 w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center">
                            <i class="bi bi-search text-blue-600 text-xl"></i>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold text-gray-800 mb-2">Transparent Inspections</h3>
                            <p class="text-gray-600">Move-in and move-out inspections with photo documentation ensure fair and transparent deposit release</p>
                        </div>
                    </div>
                </div>

                <!-- CTA Button -->
                <div class="pt-4">
                    <button onclick="openDemoModal()" class="bg-accent hover:bg-accent/90 text-gray-800 px-8 py-4 rounded-lg font-semibold text-lg transition-colors inline-flex items-center">
                        Get Started Today
                        <i class="bi bi-arrow-right ml-2"></i>
                    </button>
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
                            With mutual agreement, security deposit funds are invested in treasury bills, bonds, stocks, and money markets.
                            Investment profits can be withdrawn after the first year, with transparent profit sharing.
                        </p>

                        <!-- Professional Features -->
                        <div class="space-y-2">
                            <div class="flex items-center text-sm text-secondary-600">
                                <i class="bi bi-check-circle-fill text-green-600 mr-2"></i>
                                50% profits to tenant
                            </div>
                            <div class="flex items-center text-sm text-secondary-600">
                                <i class="bi bi-check-circle-fill text-green-600 mr-2"></i>
                                30% profits to landlord
                            </div>
                            <div class="flex items-center text-sm text-secondary-600">
                                <i class="bi bi-check-circle-fill text-green-600 mr-2"></i>
                                20% management fees
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


<!-- Benefits Section - Modern Card Layout -->
<div class="py-20 bg-gradient-to-br from-gray-50 to-gray-100">
    <div class="container mx-auto px-4">
        <div class="text-center mb-16">
            <h2 class="text-4xl font-bold text-gray-800 mb-6">Why Choose Est8Ledger?</h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">Designed specifically for modern rental relationships</p>
        </div>

        <!-- Hero Cards Layout -->
        <div class="grid lg:grid-cols-2 gap-8 mb-16">
            <!-- Landlords Card -->
            <div class="relative overflow-hidden bg-white rounded-2xl shadow-xl">
                <div class="absolute top-0 right-0 w-32 h-32 bg-primary opacity-10 rounded-full -mr-16 -mt-16"></div>
                <div class="relative p-8">
                    <div class="flex items-center mb-6">
                        <div class="bg-primary w-16 h-16 rounded-xl flex items-center justify-center mr-4">
                            <i class="bi bi-building text-2xl text-white"></i>
                        </div>
                        <div>
                            <h3 class="text-2xl font-bold text-gray-800">For Landlords</h3>
                            <p class="text-gray-500">Protect your investments</p>
                        </div>
                    </div>
                    <div class="space-y-4">
                        <div class="flex items-start">
                            <div class="bg-accent-100 w-8 h-8 rounded-full flex items-center justify-center mr-3 mt-1">
                                <i class="bi bi-shield-check text-accent-700 text-sm"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-800">Secure Investment Protection</h4>
                                <p class="text-gray-600 text-sm">Escrow accounts and documented inspections safeguard your property</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="bg-blue-100 w-8 h-8 rounded-full flex items-center justify-center mr-3 mt-1">
                                <i class="bi bi-graph-down text-blue-600 text-sm"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-800">Reduce Disputes by 90%</h4>
                                <p class="text-gray-600 text-sm">Transparent processes eliminate most deposit-related conflicts</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="bg-purple-100 w-8 h-8 rounded-full flex items-center justify-center mr-3 mt-1">
                                <i class="bi bi-speedometer2 text-purple-600 text-sm"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-800">Faster Tenant Placement</h4>
                                <p class="text-gray-600 text-sm">Attractive deposit terms reduce vacancy periods</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Tenants Card -->
            <div class="relative overflow-hidden bg-white rounded-2xl shadow-xl">
                <div class="absolute top-0 right-0 w-32 h-32 bg-accent opacity-10 rounded-full -mr-16 -mt-16"></div>
                <div class="relative p-8">
                    <div class="flex items-center mb-6">
                        <div class="bg-accent w-16 h-16 rounded-xl flex items-center justify-center mr-4">
                            <i class="bi bi-person-heart text-2xl text-gray-800"></i>
                        </div>
                        <div>
                            <h3 class="text-2xl font-bold text-gray-800">For Tenants</h3>
                            <p class="text-gray-500">Peace of mind guaranteed</p>
                        </div>
                    </div>
                    <div class="space-y-4">
                        <div class="flex items-start">
                            <div class="bg-accent-100 w-8 h-8 rounded-full flex items-center justify-center mr-3 mt-1">
                                <i class="bi bi-cash-coin text-accent-700 text-sm"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-800">Guaranteed Refund Protection</h4>
                                <p class="text-gray-600 text-sm">Escrow accounts ensure your deposit is always secure</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="bg-blue-100 w-8 h-8 rounded-full flex items-center justify-center mr-3 mt-1">
                                <i class="bi bi-eye text-blue-600 text-sm"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-800">Complete Transparency</h4>
                                <p class="text-gray-600 text-sm">See exactly how deposit decisions are made with photo evidence</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="bg-purple-100 w-8 h-8 rounded-full flex items-center justify-center mr-3 mt-1">
                                <i class="bi bi-heart text-purple-600 text-sm"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-800">Stress-Free Experience</h4>
                                <p class="text-gray-600 text-sm">Focus on enjoying your new home, not worrying about deposits</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Feature Highlights -->
        <div class="grid md:grid-cols-3 gap-6">
            <div class="bg-white p-6 rounded-xl shadow-sm text-center">
                <div class="bg-primary-100 w-12 h-12 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="bi bi-lightning text-primary text-xl"></i>
                </div>
                <h4 class="font-semibold text-gray-800 mb-2">Instant Setup</h4>
                <p class="text-gray-600 text-sm">Get started in minutes, not days</p>
            </div>
            <div class="bg-white p-6 rounded-xl shadow-sm text-center">
                <div class="bg-accent-100 w-12 h-12 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="bi bi-phone text-accent-700 text-xl"></i>
                </div>
                <h4 class="font-semibold text-gray-800 mb-2">Mobile First</h4>
                <p class="text-gray-600 text-sm">Manage everything from your phone</p>
            </div>
            <div class="bg-white p-6 rounded-xl shadow-sm text-center">
                <div class="bg-blue-100 w-12 h-12 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="bi bi-headset text-blue-600 text-xl"></i>
                </div>
                <h4 class="font-semibold text-gray-800 mb-2">24/7 Support</h4>
                <p class="text-gray-600 text-sm">Help when you need it most</p>
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
            <div class="flex justify-center items-center space-x-8 opacity-60">
                <div class="text-2xl font-bold text-gray-400">🏦 Blockchain Secured</div>
                <div class="text-2xl font-bold text-gray-400">🔒 SSL Secured</div>
                <div class="text-2xl font-bold text-gray-400">✅ Compliant</div>
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
