<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<!-- Enhanced Header with Navigation -->
<div class="bg-gradient-to-br from-primary-50 to-primary-100 py-16 lg:py-20">
    <div class="container mx-auto px-4">
        <div class="max-w-6xl mx-auto">
            <div class="text-center mb-12">
                <div class="inline-flex items-center bg-primary-100 border border-primary-200 text-primary-700 px-4 py-2 rounded-full text-sm font-medium mb-6">
                    <i class="bi bi-file-text mr-2"></i>
                    Legal Agreement
                </div>
                <h1 class="text-4xl lg:text-5xl font-bold text-gray-800 mb-6">Terms of Use</h1>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">Your rights and responsibilities when using est8Ledger's platform</p>
                <p class="text-sm text-gray-500 mt-4">Last updated: <?= date('F j, Y') ?></p>
            </div>

            <!-- Table of Contents -->
            <div class="bg-white rounded-2xl shadow-lg p-6 lg:p-8 max-w-4xl mx-auto">
                <h3 class="text-lg font-semibold text-gray-800 mb-4 flex items-center">
                    <i class="bi bi-list-ul mr-2 text-primary-600"></i>
                    Quick Navigation
                </h3>
                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-3">
                    <a href="#acceptance" class="flex items-center text-sm text-gray-600 hover:text-primary-600 hover:bg-primary-50 px-3 py-2 rounded-lg transition-colors">
                        <i class="bi bi-1-circle mr-2"></i>Acceptance of Terms
                    </a>
                    <a href="#services" class="flex items-center text-sm text-gray-600 hover:text-primary-600 hover:bg-primary-50 px-3 py-2 rounded-lg transition-colors">
                        <i class="bi bi-2-circle mr-2"></i>Description of Services
                    </a>
                    <a href="#eligibility" class="flex items-center text-sm text-gray-600 hover:text-primary-600 hover:bg-primary-50 px-3 py-2 rounded-lg transition-colors">
                        <i class="bi bi-3-circle mr-2"></i>User Eligibility
                    </a>
                    <a href="#responsibilities" class="flex items-center text-sm text-gray-600 hover:text-primary-600 hover:bg-primary-50 px-3 py-2 rounded-lg transition-colors">
                        <i class="bi bi-4-circle mr-2"></i>User Responsibilities
                    </a>
                    <a href="#financial-terms" class="flex items-center text-sm text-gray-600 hover:text-primary-600 hover:bg-primary-50 px-3 py-2 rounded-lg transition-colors">
                        <i class="bi bi-5-circle mr-2"></i>Financial Terms
                    </a>
                    <a href="#contact-terms" class="flex items-center text-sm text-gray-600 hover:text-primary-600 hover:bg-primary-50 px-3 py-2 rounded-lg transition-colors">
                        <i class="bi bi-6-circle mr-2"></i>Contact Information
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Enhanced Content -->
<div class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto">
            
            <!-- Important Notice -->
            <div class="bg-gradient-to-r from-amber-50 to-amber-100 border-l-4 border-amber-400 rounded-r-xl p-6 mb-12 shadow-sm">
                <div class="flex items-start">
                    <div class="flex-shrink-0">
                        <i class="bi bi-exclamation-triangle text-2xl text-amber-600 mr-4"></i>
                    </div>
                    <div>
                        <h3 class="text-lg font-semibold text-amber-800 mb-2">Legal Agreement</h3>
                        <p class="text-amber-700 leading-relaxed">
                            By accessing or using est8Ledger's services, you agree to be bound by these Terms of Use and our Privacy Policy. Please read carefully.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Section 1: Acceptance -->
            <div id="acceptance" class="bg-white rounded-2xl shadow-sm p-8 mb-8 scroll-mt-24">
                <div class="flex items-center mb-6">
                    <div class="w-10 h-10 bg-primary-100 rounded-lg flex items-center justify-center mr-4">
                        <i class="bi bi-check-circle text-primary-600"></i>
                    </div>
                    <h2 class="text-2xl font-bold text-gray-800">1. Acceptance of Terms</h2>
                </div>
                <div class="prose prose-lg max-w-none text-gray-600">
                    <p class="mb-4">
                        These Terms of Use ("Terms") constitute a legally binding agreement between you and est8Ledger, Inc. ("est8Ledger," "we," "us," or "our") regarding your use of our security deposit management platform and related services (the "Services").
                    </p>
                    <div class="bg-blue-50 rounded-xl p-6">
                        <div class="flex items-start">
                            <i class="bi bi-info-circle text-blue-600 text-xl mr-3 mt-1"></i>
                            <p class="text-blue-800">
                                By accessing or using our Services, you acknowledge that you have read, understood, and agree to be bound by these Terms. If you do not agree to these Terms, you may not use our Services.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Section 2: Services -->
            <div id="services" class="bg-white rounded-2xl shadow-sm p-8 mb-8 scroll-mt-24">
                <div class="flex items-center mb-6">
                    <div class="w-10 h-10 bg-primary-100 rounded-lg flex items-center justify-center mr-4">
                        <i class="bi bi-gear text-primary-600"></i>
                    </div>
                    <h2 class="text-2xl font-bold text-gray-800">2. Description of Services</h2>
                </div>

                <p class="text-gray-600 mb-6">est8Ledger provides a comprehensive security deposit management platform that includes:</p>

                <div class="grid md:grid-cols-2 gap-6">
                    <div class="space-y-4">
                        <div class="flex items-start bg-primary-50 rounded-lg p-4">
                            <i class="bi bi-file-text text-primary-600 text-xl mr-3 mt-1"></i>
                            <div>
                                <h4 class="font-semibold text-primary-800">Digital Agreements</h4>
                                <p class="text-primary-700 text-sm">Tenancy agreement preparation and management</p>
                            </div>
                        </div>
                        <div class="flex items-start bg-accent-50 rounded-lg p-4">
                            <i class="bi bi-camera text-accent-600 text-xl mr-3 mt-1"></i>
                            <div>
                                <h4 class="font-semibold text-accent-800">Property Inspections</h4>
                                <p class="text-accent-700 text-sm">Documentation and photo storage</p>
                            </div>
                        </div>
                        <div class="flex items-start bg-green-50 rounded-lg p-4">
                            <i class="bi bi-shield-check text-green-600 text-xl mr-3 mt-1"></i>
                            <div>
                                <h4 class="font-semibold text-green-800">Secure Escrow</h4>
                                <p class="text-green-700 text-sm">Account management for security deposits</p>
                            </div>
                        </div>
                    </div>
                    <div class="space-y-4">
                        <div class="flex items-start bg-blue-50 rounded-lg p-4">
                            <i class="bi bi-diagram-3 text-blue-600 text-xl mr-3 mt-1"></i>
                            <div>
                                <h4 class="font-semibold text-blue-800">Blockchain Recording</h4>
                                <p class="text-blue-700 text-sm">XRPL technology for transaction records</p>
                            </div>
                        </div>
                        <div class="flex items-start bg-purple-50 rounded-lg p-4">
                            <i class="bi bi-arrow-repeat text-purple-600 text-xl mr-3 mt-1"></i>
                            <div>
                                <h4 class="font-semibold text-purple-800">Automated Processing</h4>
                                <p class="text-purple-700 text-sm">Deposit refund processing</p>
                            </div>
                        </div>
                        <div class="flex items-start bg-orange-50 rounded-lg p-4">
                            <i class="bi bi-chat-dots text-orange-600 text-xl mr-3 mt-1"></i>
                            <div>
                                <h4 class="font-semibold text-orange-800">Communication Tools</h4>
                                <p class="text-orange-700 text-sm">For landlords and tenants</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Section 3: Eligibility -->
            <div id="eligibility" class="bg-white rounded-2xl shadow-sm p-8 mb-8 scroll-mt-24">
                <div class="flex items-center mb-6">
                    <div class="w-10 h-10 bg-primary-100 rounded-lg flex items-center justify-center mr-4">
                        <i class="bi bi-person-check text-primary-600"></i>
                    </div>
                    <h2 class="text-2xl font-bold text-gray-800">3. User Eligibility and Registration</h2>
                </div>

                <div class="grid md:grid-cols-2 gap-8">
                    <!-- Eligibility Requirements -->
                    <div class="bg-gradient-to-br from-primary-50 to-primary-100 rounded-xl p-6">
                        <h3 class="text-lg font-semibold text-primary-800 mb-4 flex items-center">
                            <i class="bi bi-clipboard-check mr-2"></i>
                            Eligibility Requirements
                        </h3>
                        <div class="space-y-3">
                            <div class="flex items-center text-primary-700">
                                <i class="bi bi-check-circle-fill mr-3 text-primary-600"></i>
                                Be at least 18 years of age
                            </div>
                            <div class="flex items-center text-primary-700">
                                <i class="bi bi-check-circle-fill mr-3 text-primary-600"></i>
                                Have legal capacity to enter binding agreements
                            </div>
                            <div class="flex items-center text-primary-700">
                                <i class="bi bi-check-circle-fill mr-3 text-primary-600"></i>
                                Provide accurate registration information
                            </div>
                            <div class="flex items-center text-primary-700">
                                <i class="bi bi-check-circle-fill mr-3 text-primary-600"></i>
                                Comply with applicable laws and regulations
                            </div>
                        </div>
                    </div>

                    <!-- Registration Responsibilities -->
                    <div class="bg-gradient-to-br from-accent-50 to-accent-100 rounded-xl p-6">
                        <h3 class="text-lg font-semibold text-accent-800 mb-4 flex items-center">
                            <i class="bi bi-person-plus mr-2"></i>
                            Registration Responsibilities
                        </h3>
                        <div class="space-y-3">
                            <div class="flex items-center text-accent-700">
                                <i class="bi bi-check-circle-fill mr-3 text-accent-600"></i>
                                Provide truthful and complete information
                            </div>
                            <div class="flex items-center text-accent-700">
                                <i class="bi bi-check-circle-fill mr-3 text-accent-600"></i>
                                Maintain and update information as needed
                            </div>
                            <div class="flex items-center text-accent-700">
                                <i class="bi bi-check-circle-fill mr-3 text-accent-600"></i>
                                Keep login credentials secure
                            </div>
                            <div class="flex items-center text-accent-700">
                                <i class="bi bi-check-circle-fill mr-3 text-accent-600"></i>
                                Accept responsibility for account activities
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Section 4: User Responsibilities -->
            <div id="responsibilities" class="bg-white rounded-2xl shadow-sm p-8 mb-8 scroll-mt-24">
                <div class="flex items-center mb-6">
                    <div class="w-10 h-10 bg-primary-100 rounded-lg flex items-center justify-center mr-4">
                        <i class="bi bi-list-check text-primary-600"></i>
                    </div>
                    <h2 class="text-2xl font-bold text-gray-800">4. User Responsibilities and Conduct</h2>
                </div>

                <!-- Acceptable Use -->
                <div class="bg-green-50 rounded-xl p-6 mb-6">
                    <h3 class="text-lg font-semibold text-green-800 mb-4 flex items-center">
                        <i class="bi bi-check-square mr-2"></i>
                        Acceptable Use Policy
                    </h3>
                    <p class="text-green-700 mb-4">You agree to use our Services only for lawful purposes and in accordance with these Terms.</p>
                </div>

                <!-- Prohibited Activities -->
                <div class="bg-red-50 rounded-xl p-6 mb-6">
                    <h3 class="text-lg font-semibold text-red-800 mb-4 flex items-center">
                        <i class="bi bi-x-circle mr-2"></i>
                        Prohibited Activities
                    </h3>
                    <p class="text-red-700 mb-4">You will not:</p>
                    <div class="grid md:grid-cols-2 gap-4">
                        <div class="space-y-2">
                            <div class="flex items-start text-red-700">
                                <i class="bi bi-x mr-2 text-red-600 mt-1 flex-shrink-0"></i>
                                Violate any applicable laws or regulations
                            </div>
                            <div class="flex items-start text-red-700">
                                <i class="bi bi-x mr-2 text-red-600 mt-1 flex-shrink-0"></i>
                                Use Services for fraudulent purposes
                            </div>
                            <div class="flex items-start text-red-700">
                                <i class="bi bi-x mr-2 text-red-600 mt-1 flex-shrink-0"></i>
                                Interfere with or disrupt the Services
                            </div>
                            <div class="flex items-start text-red-700">
                                <i class="bi bi-x mr-2 text-red-600 mt-1 flex-shrink-0"></i>
                                Attempt unauthorized access
                            </div>
                        </div>
                        <div class="space-y-2">
                            <div class="flex items-start text-red-700">
                                <i class="bi bi-x mr-2 text-red-600 mt-1 flex-shrink-0"></i>
                                Upload malicious code or viruses
                            </div>
                            <div class="flex items-start text-red-700">
                                <i class="bi bi-x mr-2 text-red-600 mt-1 flex-shrink-0"></i>
                                Impersonate any person or entity
                            </div>
                            <div class="flex items-start text-red-700">
                                <i class="bi bi-x mr-2 text-red-600 mt-1 flex-shrink-0"></i>
                                Collect user information without consent
                            </div>
                            <div class="flex items-start text-red-700">
                                <i class="bi bi-x mr-2 text-red-600 mt-1 flex-shrink-0"></i>
                                Violate third-party rights
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Content Responsibility -->
                <div class="bg-blue-50 rounded-xl p-6">
                    <h3 class="text-lg font-semibold text-blue-800 mb-4 flex items-center">
                        <i class="bi bi-file-earmark-text mr-2"></i>
                        Content and Information Responsibility
                    </h3>
                    <p class="text-blue-700 mb-4">You are responsible for all content and information you provide, including:</p>
                    <div class="grid md:grid-cols-2 gap-4">
                        <div class="space-y-2">
                            <div class="flex items-center text-blue-700">
                                <i class="bi bi-house mr-2 text-blue-600"></i>
                                Property information and inspection reports
                            </div>
                            <div class="flex items-center text-blue-700">
                                <i class="bi bi-currency-dollar mr-2 text-blue-600"></i>
                                Financial information and deposit amounts
                            </div>
                        </div>
                        <div class="space-y-2">
                            <div class="flex items-center text-blue-700">
                                <i class="bi bi-chat mr-2 text-blue-600"></i>
                                Communications with other users
                            </div>
                            <div class="flex items-center text-blue-700">
                                <i class="bi bi-camera mr-2 text-blue-600"></i>
                                Photos and documentation uploaded
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Section 5: Financial Terms -->
            <div id="financial-terms" class="bg-white rounded-2xl shadow-sm p-8 mb-8 scroll-mt-24">
                <div class="flex items-center mb-6">
                    <div class="w-10 h-10 bg-primary-100 rounded-lg flex items-center justify-center mr-4">
                        <i class="bi bi-credit-card text-primary-600"></i>
                    </div>
                    <h2 class="text-2xl font-bold text-gray-800">5. Financial Terms and Deposit Management</h2>
                </div>

                <div class="grid md:grid-cols-3 gap-6">
                    <!-- Escrow Services -->
                    <div class="bg-gradient-to-br from-green-50 to-green-100 rounded-xl p-6">
                        <div class="w-12 h-12 bg-green-200 rounded-lg flex items-center justify-center mb-4">
                            <i class="bi bi-shield-check text-green-700 text-xl"></i>
                        </div>
                        <h3 class="text-lg font-semibold text-green-800 mb-3">Escrow Services</h3>
                        <ul class="space-y-2 text-green-700 text-sm">
                            <li class="flex items-start">
                                <i class="bi bi-check mr-2 text-green-600 mt-1 flex-shrink-0"></i>
                                Regulated financial institutions
                            </li>
                            <li class="flex items-start">
                                <i class="bi bi-check mr-2 text-green-600 mt-1 flex-shrink-0"></i>
                                Separate from operating funds
                            </li>
                            <li class="flex items-start">
                                <i class="bi bi-check mr-2 text-green-600 mt-1 flex-shrink-0"></i>
                                Interest handled per local laws
                            </li>
                        </ul>
                    </div>

                    <!-- Fees Structure -->
                    <div class="bg-gradient-to-br from-blue-50 to-blue-100 rounded-xl p-6">
                        <div class="w-12 h-12 bg-blue-200 rounded-lg flex items-center justify-center mb-4">
                            <i class="bi bi-receipt text-blue-700 text-xl"></i>
                        </div>
                        <h3 class="text-lg font-semibold text-blue-800 mb-3">Fee Structure</h3>
                        <ul class="space-y-2 text-blue-700 text-sm">
                            <li class="flex items-start">
                                <i class="bi bi-check mr-2 text-blue-600 mt-1 flex-shrink-0"></i>
                                Service fees for deposit management
                            </li>
                            <li class="flex items-start">
                                <i class="bi bi-check mr-2 text-blue-600 mt-1 flex-shrink-0"></i>
                                Transaction fees for processing
                            </li>
                            <li class="flex items-start">
                                <i class="bi bi-check mr-2 text-blue-600 mt-1 flex-shrink-0"></i>
                                Premium feature charges
                            </li>
                        </ul>
                    </div>

                    <!-- Blockchain Technology -->
                    <div class="bg-gradient-to-br from-purple-50 to-purple-100 rounded-xl p-6">
                        <div class="w-12 h-12 bg-purple-200 rounded-lg flex items-center justify-center mb-4">
                            <i class="bi bi-diagram-3 text-purple-700 text-xl"></i>
                        </div>
                        <h3 class="text-lg font-semibold text-purple-800 mb-3">Blockchain Technology</h3>
                        <ul class="space-y-2 text-purple-700 text-sm">
                            <li class="flex items-start">
                                <i class="bi bi-info mr-2 text-purple-600 mt-1 flex-shrink-0"></i>
                                Records are immutable and permanent
                            </li>
                            <li class="flex items-start">
                                <i class="bi bi-info mr-2 text-purple-600 mt-1 flex-shrink-0"></i>
                                Data may be publicly visible
                            </li>
                            <li class="flex items-start">
                                <i class="bi bi-info mr-2 text-purple-600 mt-1 flex-shrink-0"></i>
                                Network fees may apply
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Additional Important Sections -->
            <div class="grid md:grid-cols-2 gap-6 mb-8">
                <!-- Privacy -->
                <div class="bg-white rounded-2xl shadow-sm p-6">
                    <div class="flex items-center mb-4">
                        <div class="w-8 h-8 bg-primary-100 rounded-lg flex items-center justify-center mr-3">
                            <i class="bi bi-shield-lock text-primary-600"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800">Privacy & Data Protection</h3>
                    </div>
                    <p class="text-gray-600 mb-4">Your privacy is governed by our Privacy Policy, incorporated into these Terms by reference.</p>
                    <a href="/privacy-policy" class="inline-flex items-center text-primary-600 hover:text-primary-700 font-medium">
                        <i class="bi bi-arrow-right mr-2"></i>
                        Read Privacy Policy
                    </a>
                </div>

                <!-- Intellectual Property -->
                <div class="bg-white rounded-2xl shadow-sm p-6">
                    <div class="flex items-center mb-4">
                        <div class="w-8 h-8 bg-accent-100 rounded-lg flex items-center justify-center mr-3">
                            <i class="bi bi-c-circle text-accent-600"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800">Intellectual Property</h3>
                    </div>
                    <p class="text-gray-600 mb-4">The Services and all related content are owned by est8Ledger and protected by intellectual property laws.</p>
                    <div class="text-sm text-gray-500">
                        <i class="bi bi-info-circle mr-1"></i>
                        You retain ownership of your uploaded content
                    </div>
                </div>
            </div>

            <!-- Dispute Resolution -->
            <div class="bg-white rounded-2xl shadow-sm p-8 mb-8">
                <div class="flex items-center mb-6">
                    <div class="w-10 h-10 bg-primary-100 rounded-lg flex items-center justify-center mr-4">
                        <i class="bi bi-balance-scale text-primary-600"></i>
                    </div>
                    <h2 class="text-2xl font-bold text-gray-800">Dispute Resolution</h2>
                </div>

                <div class="grid md:grid-cols-3 gap-6">
                    <div class="text-center">
                        <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
                            <i class="bi bi-chat-text text-2xl text-blue-600"></i>
                        </div>
                        <h4 class="font-semibold text-gray-800 mb-2">1. Informal Resolution</h4>
                        <p class="text-gray-600 text-sm">Contact us first to resolve issues informally</p>
                    </div>
                    <div class="text-center">
                        <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-4">
                            <i class="bi bi-clipboard-check text-2xl text-green-600"></i>
                        </div>
                        <h4 class="font-semibold text-gray-800 mb-2">2. Binding Arbitration</h4>
                        <p class="text-gray-600 text-sm">For formal disputes, we use binding arbitration</p>
                    </div>
                    <div class="text-center">
                        <div class="w-16 h-16 bg-red-100 rounded-full flex items-center justify-center mx-auto mb-4">
                            <i class="bi bi-people text-2xl text-red-600"></i>
                        </div>
                        <h4 class="font-semibold text-gray-800 mb-2">3. Class Action Waiver</h4>
                        <p class="text-gray-600 text-sm">You agree to resolve disputes individually</p>
                    </div>
                </div>
            </div>

            <!-- Section 6: Privacy and Data Protection -->
            <div class="bg-white rounded-2xl shadow-sm p-8 mb-8">
                <div class="flex items-center mb-6">
                    <div class="w-10 h-10 bg-primary-100 rounded-lg flex items-center justify-center mr-4">
                        <i class="bi bi-shield-lock text-primary-600"></i>
                    </div>
                    <h2 class="text-2xl font-bold text-gray-800">6. Privacy and Data Protection</h2>
                </div>
                <div class="prose prose-lg max-w-none text-gray-600">
                    <p>Your privacy is important to us. Our collection, use, and protection of your personal information is governed by our Privacy Policy, which is incorporated into these Terms by reference.</p>
                    <p>By using our Services, you consent to:</p>
                    <ul>
                        <li>Collection and processing of your personal information as described in our Privacy Policy</li>
                        <li>Use of cookies and similar tracking technologies</li>
                        <li>Communication from us regarding your account and our Services</li>
                    </ul>
                </div>
            </div>

            <!-- Section 7: Intellectual Property Rights -->
            <div class="bg-white rounded-2xl shadow-sm p-8 mb-8">
                <div class="flex items-center mb-6">
                    <div class="w-10 h-10 bg-primary-100 rounded-lg flex items-center justify-center mr-4">
                        <i class="bi bi-c-circle text-primary-600"></i>
                    </div>
                    <h2 class="text-2xl font-bold text-gray-800">7. Intellectual Property Rights</h2>
                </div>
                <div class="prose prose-lg max-w-none text-gray-600">
                    <h3 class="!text-gray-800!">7.1 Our Rights</h3>
                    <p>The Services and all related content, features, and functionality are owned by est8Ledger and are protected by copyright, trademark, and other intellectual property laws.</p>
                    <h3 class="!text-gray-800!">7.2 Your Rights</h3>
                    <p>Subject to these Terms, we grant you a limited, non-exclusive, non-transferable license to access and use the Services for their intended purpose.</p>
                    <h3 class="!text-gray-800!">7.3 User Content</h3>
                    <p>You retain ownership of content you upload to our Services. However, you grant us a license to use, store, and process your content as necessary to provide the Services.</p>
                </div>
            </div>

            <!-- Section 8: Disclaimers and Limitations -->
            <div class="bg-white rounded-2xl shadow-sm p-8 mb-8">
                <div class="flex items-center mb-6">
                    <div class="w-10 h-10 bg-primary-100 rounded-lg flex items-center justify-center mr-4">
                        <i class="bi bi-exclamation-circle text-primary-600"></i>
                    </div>
                    <h2 class="text-2xl font-bold text-gray-800">8. Disclaimers and Limitations</h2>
                </div>
                <div class="prose prose-lg max-w-none text-gray-600">
                    <h3 class="!text-gray-800!">8.1 Service Availability</h3>
                    <p>While we strive for high availability, we do not guarantee that the Services will be available at all times. We may experience downtime for maintenance, updates, or technical issues.</p>
                    <h3 class="!text-gray-800!">8.2 Third-Party Services</h3>
                    <p>Our Services may integrate with third-party services (payment processors, identity verification, etc.). We are not responsible for the availability, accuracy, or reliability of third-party services.</p>
                    <h3 class="!text-gray-800!">8.3 Limitation of Liability</h3>
                    <p>To the maximum extent permitted by law, est8Ledger shall not be liable for any indirect, incidental, special, consequential, or punitive damages arising from your use of the Services.</p>
                </div>
            </div>

            <!-- Section 9: Indemnification -->
            <div class="bg-white rounded-2xl shadow-sm p-8 mb-8">
                <div class="flex items-center mb-6">
                    <div class="w-10 h-10 bg-primary-100 rounded-lg flex items-center justify-center mr-4">
                        <i class="bi bi-shield-fill text-primary-600"></i>
                    </div>
                    <h2 class="text-2xl font-bold text-gray-800">9. Indemnification</h2>
                </div>
                <div class="prose prose-lg max-w-none text-gray-600">
                    <p>You agree to indemnify, defend, and hold harmless est8Ledger and its officers, directors, employees, and agents from any claims, damages, losses, or expenses arising from:</p>
                    <ul>
                        <li>Your use of the Services</li>
                        <li>Your violation of these Terms</li>
                        <li>Your violation of any third-party rights</li>
                        <li>Any content or information you provide through the Services</li>
                    </ul>
                </div>
            </div>

            <!-- Section 10: Termination -->
            <div class="bg-white rounded-2xl shadow-sm p-8 mb-8">
                <div class="flex items-center mb-6">
                    <div class="w-10 h-10 bg-primary-100 rounded-lg flex items-center justify-center mr-4">
                        <i class="bi bi-door-closed text-primary-600"></i>
                    </div>
                    <h2 class="text-2xl font-bold text-gray-800">10. Termination</h2>
                </div>
                <div class="prose prose-lg max-w-none text-gray-600">
                    <h3 class="!text-gray-800!">10.1 Termination by You</h3>
                    <p>You may terminate your account at any time by contacting us. Upon termination:</p>
                    <ul>
                        <li>Your access to the Services will be discontinued</li>
                        <li>Any pending deposits will be processed according to existing agreements</li>
                        <li>Your data will be handled according to our Privacy Policy</li>
                    </ul>
                    <h3 class="!text-gray-800!">10.2 Termination by Us</h3>
                    <p>We may terminate or suspend your account if you:</p>
                    <ul>
                        <li>Violate these Terms or our policies</li>
                        <li>Engage in fraudulent or illegal activities</li>
                        <li>Fail to pay required fees</li>
                        <li>Pose a security risk to our Services or other users</li>
                    </ul>
                </div>
            </div>

            <!-- Section 11: Dispute Resolution -->
            <div class="bg-white rounded-2xl shadow-sm p-8 mb-8">
                <div class="flex items-center mb-6">
                    <div class="w-10 h-10 bg-primary-100 rounded-lg flex items-center justify-center mr-4">
                        <i class="bi bi-balance-scale text-primary-600"></i>
                    </div>
                    <h2 class="text-2xl font-bold text-gray-800">11. Dispute Resolution</h2>
                </div>
                <div class="prose prose-lg max-w-none text-gray-600">
                    <h3 class="!text-gray-800!">11.1 Informal Resolution</h3>
                    <p>Before pursuing formal dispute resolution, we encourage you to contact us to resolve any issues informally.</p>
                    <h3 class="!text-gray-800!">11.2 Binding Arbitration</h3>
                    <p>Any disputes arising from these Terms or your use of the Services will be resolved through binding arbitration rather than in court, except where prohibited by law.</p>
                    <h3 class="!text-gray-800!">11.3 Class Action Waiver</h3>
                    <p>You agree to resolve disputes individually and waive any right to participate in class action lawsuits or class-wide arbitration.</p>
                </div>
            </div>

            <!-- Section 12: Governing Law -->
            <div class="bg-white rounded-2xl shadow-sm p-8 mb-8">
                <div class="flex items-center mb-6">
                    <div class="w-10 h-10 bg-primary-100 rounded-lg flex items-center justify-center mr-4">
                        <i class="bi bi-globe text-primary-600"></i>
                    </div>
                    <h2 class="text-2xl font-bold text-gray-800">12. Governing Law</h2>
                </div>
                <div class="prose prose-lg max-w-none text-gray-600">
                    <p>These Terms are governed by the laws of the State of Delaware, United States, without regard to conflict of law principles. Any legal action must be brought in the courts of Delaware.</p>
                </div>
            </div>

            <!-- Section 13: Changes to Terms -->
            <div class="bg-white rounded-2xl shadow-sm p-8 mb-8">
                <div class="flex items-center mb-6">
                    <div class="w-10 h-10 bg-primary-100 rounded-lg flex items-center justify-center mr-4">
                        <i class="bi bi-pencil-square text-primary-600"></i>
                    </div>
                    <h2 class="text-2xl font-bold text-gray-800">13. Changes to Terms</h2>
                </div>
                <div class="prose prose-lg max-w-none text-gray-600">
                    <p>We may update these Terms from time to time. We will notify you of material changes by:</p>
                    <ul>
                        <li>Posting updated Terms on our website</li>
                        <li>Sending email notifications to registered users</li>
                        <li>Displaying prominent notices on our platform</li>
                    </ul>
                    <p>Your continued use of the Services after changes take effect constitutes acceptance of the updated Terms.</p>
                </div>
            </div>

            <!-- Section 14: Severability -->
            <div class="bg-white rounded-2xl shadow-sm p-8 mb-8">
                <div class="flex items-center mb-6">
                    <div class="w-10 h-10 bg-primary-100 rounded-lg flex items-center justify-center mr-4">
                        <i class="bi bi-link-45deg text-primary-600"></i>
                    </div>
                    <h2 class="text-2xl font-bold text-gray-800">14. Severability</h2>
                </div>
                <div class="prose prose-lg max-w-none text-gray-600">
                    <p>If any provision of these Terms is found to be unenforceable, the remaining provisions will continue in full force and effect.</p>
                </div>
            </div>

            <!-- Section 15: Contact Information -->
            <div id="contact-terms" class="bg-white rounded-2xl shadow-sm p-8 mb-8 scroll-mt-24">
                <div class="flex items-center mb-6">
                    <div class="w-10 h-10 bg-primary-100 rounded-lg flex items-center justify-center mr-4">
                        <i class="bi bi-envelope text-primary-600"></i>
                    </div>
                    <h2 class="text-2xl font-bold text-gray-800">15. Contact Information</h2>
                </div>
                <div class="prose prose-lg max-w-none text-gray-600">
                    <div class="bg-gray-50 p-6 rounded-lg mt-6">
                        <h3 class="text-xl font-semibold mb-4">est8Ledger Legal Team</h3>
                        <div class="space-y-2">
                            <p><strong>Email:</strong> <a href="mailto:legal@est8Ledger.com" class="text-primary hover:underline">legal@est8Ledger.com</a></p>
                            <p><strong>Phone:</strong> 1-800-EST-8LED</p>
                            <p><strong>Address:</strong><br>
                            est8Ledger, Inc.<br>
                            Legal Department<br>
                            123 Blockchain Avenue<br>
                            Tech City, TC 12345<br>
                            United States</p>
                        </div>
                    </div>

                    <p class="text-sm text-gray-600 mt-8 p-4 bg-gray-50 rounded">
                        <strong>Effective Date:</strong> These Terms of Use are effective as of <?= date('F j, Y') ?> and supersede all previous versions.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>
