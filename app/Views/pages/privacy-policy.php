<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<!-- Enhanced Header with Navigation -->
<div class="bg-gradient-to-br from-primary-50 to-primary-100 py-16 lg:py-20">
    <div class="container mx-auto px-4">
        <div class="max-w-6xl mx-auto">
            <div class="text-center mb-12">
                <div class="inline-flex items-center bg-primary-100 border border-primary-200 text-primary-700 px-4 py-2 rounded-full text-sm font-medium mb-6">
                    <i class="bi bi-shield-check mr-2"></i>
                    Legal Documentation
                </div>
                <h1 class="text-4xl lg:text-5xl font-bold text-gray-800 mb-6">Privacy Policy</h1>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">How we collect, use, and protect your personal information with complete transparency</p>
                <p class="text-sm text-gray-500 mt-4">Last updated: <?= date('F j, Y') ?></p>
            </div>

            <!-- Table of Contents -->
            <div class="bg-white rounded-2xl shadow-lg p-6 lg:p-8 max-w-4xl mx-auto">
                <h3 class="text-lg font-semibold text-gray-800 mb-4 flex items-center">
                    <i class="bi bi-list-ul mr-2 text-primary-600"></i>
                    Quick Navigation
                </h3>
                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-3">
                    <a href="#introduction" class="flex items-center text-sm text-gray-600 hover:text-primary-600 hover:bg-primary-50 px-3 py-2 rounded-lg transition-colors">
                        <i class="bi bi-1-circle mr-2"></i>Introduction
                    </a>
                    <a href="#information-collection" class="flex items-center text-sm text-gray-600 hover:text-primary-600 hover:bg-primary-50 px-3 py-2 rounded-lg transition-colors">
                        <i class="bi bi-2-circle mr-2"></i>Information We Collect
                    </a>
                    <a href="#information-usage" class="flex items-center text-sm text-gray-600 hover:text-primary-600 hover:bg-primary-50 px-3 py-2 rounded-lg transition-colors">
                        <i class="bi bi-3-circle mr-2"></i>How We Use Information
                    </a>
                    <a href="#information-sharing" class="flex items-center text-sm text-gray-600 hover:text-primary-600 hover:bg-primary-50 px-3 py-2 rounded-lg transition-colors">
                        <i class="bi bi-4-circle mr-2"></i>Information Sharing
                    </a>
                    <a href="#data-security" class="flex items-center text-sm text-gray-600 hover:text-primary-600 hover:bg-primary-50 px-3 py-2 rounded-lg transition-colors">
                        <i class="bi bi-5-circle mr-2"></i>Data Security
                    </a>
                    <a href="#your-rights" class="flex items-center text-sm text-gray-600 hover:text-primary-600 hover:bg-primary-50 px-3 py-2 rounded-lg transition-colors">
                        <i class="bi bi-6-circle mr-2"></i>Your Rights
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
            <div class="bg-gradient-to-r from-blue-50 to-blue-100 border-l-4 border-blue-400 rounded-r-xl p-6 mb-12 shadow-sm">
                <div class="flex items-start">
                    <div class="flex-shrink-0">
                        <i class="bi bi-shield-check text-2xl text-blue-600 mr-4"></i>
                    </div>
                    <div>
                        <h3 class="text-lg font-semibold text-blue-800 mb-2">Your Privacy Matters</h3>
                        <p class="text-blue-700 leading-relaxed">
                            Your privacy is important to us. This policy outlines how Est8Ledger collects, uses, and protects your information when you use our security deposit management platform.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Section 1: Introduction -->
            <div id="introduction" class="bg-white rounded-2xl shadow-sm p-8 mb-8 scroll-mt-24">
                <div class="flex items-center mb-6">
                    <div class="w-10 h-10 bg-primary-100 rounded-lg flex items-center justify-center mr-4">
                        <i class="bi bi-info-circle text-primary-600"></i>
                    </div>
                    <h2 class="text-2xl font-bold text-gray-800">1. Introduction</h2>
                </div>
                <p class="text-gray-600 leading-relaxed">
                    Est8Ledger ("we," "our," or "us") is committed to protecting your privacy and ensuring the security of your personal information. This Privacy Policy explains how we collect, use, disclose, and safeguard your information when you use our security deposit management platform and related services.
                </p>
            </div>

            <!-- Section 2: Information Collection -->
            <div id="information-collection" class="bg-white rounded-2xl shadow-sm p-8 mb-8 scroll-mt-24">
                <div class="flex items-center mb-6">
                    <div class="w-10 h-10 bg-primary-100 rounded-lg flex items-center justify-center mr-4">
                        <i class="bi bi-collection text-primary-600"></i>
                    </div>
                    <h2 class="text-2xl font-bold text-gray-800">2. Information We Collect</h2>
                </div>

                <!-- Personal Information Card -->
                <div class="bg-gradient-to-r from-primary-50 to-primary-100 rounded-xl p-6 mb-6">
                    <h3 class="text-lg font-semibold text-primary-800 mb-4 flex items-center">
                        <i class="bi bi-person-circle mr-2"></i>
                        2.1 Personal Information
                    </h3>
                    <p class="text-primary-700 mb-4">We collect personal information that you voluntarily provide to us when you:</p>
                    <div class="grid md:grid-cols-2 gap-4">
                        <div class="space-y-2">
                            <div class="flex items-center text-primary-700">
                                <i class="bi bi-check-circle-fill mr-2 text-primary-600"></i>
                                Register for an account or request a demo
                            </div>
                            <div class="flex items-center text-primary-700">
                                <i class="bi bi-check-circle-fill mr-2 text-primary-600"></i>
                                Use our security deposit management services
                            </div>
                            <div class="flex items-center text-primary-700">
                                <i class="bi bi-check-circle-fill mr-2 text-primary-600"></i>
                                Communicate with us via email, phone, or chat
                            </div>
                        </div>
                        <div class="space-y-2">
                            <div class="flex items-center text-primary-700">
                                <i class="bi bi-check-circle-fill mr-2 text-primary-600"></i>
                                Subscribe to our newsletter or blog updates
                            </div>
                            <div class="flex items-center text-primary-700">
                                <i class="bi bi-check-circle-fill mr-2 text-primary-600"></i>
                                Participate in surveys or feedback forms
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Information Types -->
                <div class="bg-gray-50 rounded-xl p-6 mb-6">
                    <h4 class="font-semibold text-gray-800 mb-4">This information may include:</h4>
                    <div class="grid md:grid-cols-2 gap-4">
                        <div class="space-y-3">
                            <div class="flex items-start">
                                <i class="bi bi-person mr-3 text-accent-600 mt-1"></i>
                                <span class="text-gray-700">Name and contact information (email, phone, address)</span>
                            </div>
                            <div class="flex items-start">
                                <i class="bi bi-house mr-3 text-accent-600 mt-1"></i>
                                <span class="text-gray-700">Property information and rental details</span>
                            </div>
                            <div class="flex items-start">
                                <i class="bi bi-credit-card mr-3 text-accent-600 mt-1"></i>
                                <span class="text-gray-700">Financial information related to security deposits</span>
                            </div>
                        </div>
                        <div class="space-y-3">
                            <div class="flex items-start">
                                <i class="bi bi-card-text mr-3 text-accent-600 mt-1"></i>
                                <span class="text-gray-700">Government-issued identification for verification</span>
                            </div>
                            <div class="flex items-start">
                                <i class="bi bi-bank mr-3 text-accent-600 mt-1"></i>
                                <span class="text-gray-700">Banking information for deposit transactions</span>
                            </div>
                            <div class="flex items-start">
                                <i class="bi bi-people mr-3 text-accent-600 mt-1"></i>
                                <span class="text-gray-700">User type (landlord, tenant, property manager)</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Automatic Collection Card -->
                <div class="bg-gradient-to-r from-accent-50 to-accent-100 rounded-xl p-6">
                    <h3 class="text-lg font-semibold text-accent-800 mb-4 flex items-center">
                        <i class="bi bi-gear-fill mr-2"></i>
                        2.2 Automatically Collected Information
                    </h3>
                    <p class="text-accent-700 mb-4">When you visit our website or use our services, we automatically collect:</p>
                    <div class="grid md:grid-cols-2 gap-4">
                        <div class="space-y-2">
                            <div class="flex items-center text-accent-700">
                                <i class="bi bi-geo-alt-fill mr-2 text-accent-600"></i>
                                IP address and location data
                            </div>
                            <div class="flex items-center text-accent-700">
                                <i class="bi bi-browser-chrome mr-2 text-accent-600"></i>
                                Browser type, version, and device information
                            </div>
                        </div>
                        <div class="space-y-2">
                            <div class="flex items-center text-accent-700">
                                <i class="bi bi-clock-history mr-2 text-accent-600"></i>
                                Pages visited and time spent on our platform
                            </div>
                            <div class="flex items-center text-accent-700">
                                <i class="bi bi-cookie mr-2 text-accent-600"></i>
                                Cookies and similar tracking technologies
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Section 3: Information Usage -->
            <div id="information-usage" class="bg-white rounded-2xl shadow-sm p-8 mb-8 scroll-mt-24">
                <div class="flex items-center mb-6">
                    <div class="w-10 h-10 bg-primary-100 rounded-lg flex items-center justify-center mr-4">
                        <i class="bi bi-gear text-primary-600"></i>
                    </div>
                    <h2 class="text-2xl font-bold text-gray-800">3. How We Use Your Information</h2>
                </div>

                <div class="grid md:grid-cols-3 gap-6">
                    <!-- Service Delivery -->
                    <div class="bg-primary-50 rounded-xl p-6">
                        <h3 class="text-lg font-semibold text-primary-800 mb-4 flex items-center">
                            <i class="bi bi-tools mr-2"></i>
                            Service Delivery
                        </h3>
                        <ul class="space-y-2 text-primary-700">
                            <li class="flex items-start">
                                <i class="bi bi-check mr-2 text-primary-600 mt-1 flex-shrink-0"></i>
                                Processing and managing security deposits
                            </li>
                            <li class="flex items-start">
                                <i class="bi bi-check mr-2 text-primary-600 mt-1 flex-shrink-0"></i>
                                Facilitating digital tenancy agreements
                            </li>
                            <li class="flex items-start">
                                <i class="bi bi-check mr-2 text-primary-600 mt-1 flex-shrink-0"></i>
                                Conducting property inspections
                            </li>
                            <li class="flex items-start">
                                <i class="bi bi-check mr-2 text-primary-600 mt-1 flex-shrink-0"></i>
                                Processing refunds and releases
                            </li>
                        </ul>
                    </div>

                    <!-- Communication -->
                    <div class="bg-accent-50 rounded-xl p-6">
                        <h3 class="text-lg font-semibold text-accent-800 mb-4 flex items-center">
                            <i class="bi bi-chat-dots mr-2"></i>
                            Communication
                        </h3>
                        <ul class="space-y-2 text-accent-700">
                            <li class="flex items-start">
                                <i class="bi bi-check mr-2 text-accent-600 mt-1 flex-shrink-0"></i>
                                Responding to inquiries and support
                            </li>
                            <li class="flex items-start">
                                <i class="bi bi-check mr-2 text-accent-600 mt-1 flex-shrink-0"></i>
                                Sending service-related notifications
                            </li>
                            <li class="flex items-start">
                                <i class="bi bi-check mr-2 text-accent-600 mt-1 flex-shrink-0"></i>
                                Account and transaction confirmations
                            </li>
                            <li class="flex items-start">
                                <i class="bi bi-check mr-2 text-accent-600 mt-1 flex-shrink-0"></i>
                                Marketing communications (with consent)
                            </li>
                        </ul>
                    </div>

                    <!-- Platform Improvement -->
                    <div class="bg-secondary-50 rounded-xl p-6">
                        <h3 class="text-lg font-semibold text-secondary-800 mb-4 flex items-center">
                            <i class="bi bi-graph-up mr-2"></i>
                            Improvement
                        </h3>
                        <ul class="space-y-2 text-secondary-700">
                            <li class="flex items-start">
                                <i class="bi bi-check mr-2 text-secondary-600 mt-1 flex-shrink-0"></i>
                                Analyzing usage patterns
                            </li>
                            <li class="flex items-start">
                                <i class="bi bi-check mr-2 text-secondary-600 mt-1 flex-shrink-0"></i>
                                Developing new features
                            </li>
                            <li class="flex items-start">
                                <i class="bi bi-check mr-2 text-secondary-600 mt-1 flex-shrink-0"></i>
                                Ensuring platform security
                            </li>
                            <li class="flex items-start">
                                <i class="bi bi-check mr-2 text-secondary-600 mt-1 flex-shrink-0"></i>
                                Conducting research and analytics
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Section 4: Information Sharing -->
            <div id="information-sharing" class="bg-white rounded-2xl shadow-sm p-8 mb-8 scroll-mt-24">
                <div class="flex items-center mb-6">
                    <div class="w-10 h-10 bg-primary-100 rounded-lg flex items-center justify-center mr-4">
                        <i class="bi bi-share text-primary-600"></i>
                    </div>
                    <h2 class="text-2xl font-bold text-gray-800">4. Information Sharing</h2>
                </div>

                <div class="bg-red-50 border border-red-200 rounded-xl p-6 mb-6">
                    <div class="flex items-center mb-3">
                        <i class="bi bi-shield-x text-red-600 text-xl mr-3"></i>
                        <h3 class="text-lg font-semibold text-red-800">We Do Not Sell Your Data</h3>
                    </div>
                    <p class="text-red-700">We do not sell, trade, or rent your personal information to third parties.</p>
                </div>

                <div class="grid md:grid-cols-2 gap-6">
                    <!-- Service Providers -->
                    <div class="bg-blue-50 rounded-xl p-6">
                        <h3 class="text-lg font-semibold text-blue-800 mb-4 flex items-center">
                            <i class="bi bi-people mr-2"></i>
                            Service Providers
                        </h3>
                        <p class="text-blue-700 mb-4">We may share information with trusted partners:</p>
                        <ul class="space-y-2 text-blue-700">
                            <li class="flex items-center">
                                <i class="bi bi-cloud mr-2 text-blue-600"></i>
                                Cloud hosting and data storage providers
                            </li>
                            <li class="flex items-center">
                                <i class="bi bi-credit-card mr-2 text-blue-600"></i>
                                Payment processors and financial institutions
                            </li>
                            <li class="flex items-center">
                                <i class="bi bi-person-check mr-2 text-blue-600"></i>
                                Identity verification services
                            </li>
                        </ul>
                    </div>

                    <!-- Legal Requirements -->
                    <div class="bg-amber-50 rounded-xl p-6">
                        <h3 class="text-lg font-semibold text-amber-800 mb-4 flex items-center">
                            <i class="bi bi-scale mr-2"></i>
                            Legal Requirements
                        </h3>
                        <p class="text-amber-700 mb-4">We may disclose information when required by law:</p>
                        <ul class="space-y-2 text-amber-700">
                            <li class="flex items-center">
                                <i class="bi bi-file-text mr-2 text-amber-600"></i>
                                Comply with legal processes
                            </li>
                            <li class="flex items-center">
                                <i class="bi bi-shield-check mr-2 text-amber-600"></i>
                                Enforce our terms of service
                            </li>
                            <li class="flex items-center">
                                <i class="bi bi-exclamation-triangle mr-2 text-amber-600"></i>
                                Investigate fraud or security issues
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Section 5: Data Security -->
            <div id="data-security" class="bg-white rounded-2xl shadow-sm p-8 mb-8 scroll-mt-24">
                <div class="flex items-center mb-6">
                    <div class="w-10 h-10 bg-primary-100 rounded-lg flex items-center justify-center mr-4">
                        <i class="bi bi-shield-lock text-primary-600"></i>
                    </div>
                    <h2 class="text-2xl font-bold text-gray-800">5. Data Security</h2>
                </div>

                <div class="bg-gradient-to-r from-green-50 to-green-100 rounded-xl p-6 mb-6">
                    <div class="flex items-center mb-4">
                        <i class="bi bi-shield-fill-check text-green-600 text-2xl mr-3"></i>
                        <h3 class="text-lg font-semibold text-green-800">Comprehensive Security Measures</h3>
                    </div>
                    <p class="text-green-700">We implement multiple layers of security to protect your information.</p>
                </div>

                <div class="grid md:grid-cols-2 gap-6">
                    <!-- Technical Safeguards -->
                    <div class="bg-primary-50 rounded-xl p-6">
                        <h3 class="text-lg font-semibold text-primary-800 mb-4 flex items-center">
                            <i class="bi bi-cpu mr-2"></i>
                            Technical Safeguards
                        </h3>
                        <div class="space-y-3">
                            <div class="flex items-center text-primary-700">
                                <i class="bi bi-lock-fill mr-3 text-primary-600"></i>
                                End-to-end encryption for sensitive data
                            </div>
                            <div class="flex items-center text-primary-700">
                                <i class="bi bi-diagram-3 mr-3 text-primary-600"></i>
                                Blockchain technology (XRPL) for records
                            </div>
                            <div class="flex items-center text-primary-700">
                                <i class="bi bi-key mr-3 text-primary-600"></i>
                                Multi-factor authentication
                            </div>
                            <div class="flex items-center text-primary-700">
                                <i class="bi bi-search mr-3 text-primary-600"></i>
                                Regular security audits and testing
                            </div>
                        </div>
                    </div>

                    <!-- Administrative Safeguards -->
                    <div class="bg-accent-50 rounded-xl p-6">
                        <h3 class="text-lg font-semibold text-accent-800 mb-4 flex items-center">
                            <i class="bi bi-people-fill mr-2"></i>
                            Administrative Safeguards
                        </h3>
                        <div class="space-y-3">
                            <div class="flex items-center text-accent-700">
                                <i class="bi bi-mortarboard mr-3 text-accent-600"></i>
                                Employee security training
                            </div>
                            <div class="flex items-center text-accent-700">
                                <i class="bi bi-person-check mr-3 text-accent-600"></i>
                                Background checks for staff
                            </div>
                            <div class="flex items-center text-accent-700">
                                <i class="bi bi-door-closed mr-3 text-accent-600"></i>
                                Access controls and need-to-know principles
                            </div>
                            <div class="flex items-center text-accent-700">
                                <i class="bi bi-exclamation-circle mr-3 text-accent-600"></i>
                                Incident response procedures
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Section 6: Your Rights -->
            <div id="your-rights" class="bg-white rounded-2xl shadow-sm p-8 mb-8 scroll-mt-24">
                <div class="flex items-center mb-6">
                    <div class="w-10 h-10 bg-primary-100 rounded-lg flex items-center justify-center mr-4">
                        <i class="bi bi-person-check text-primary-600"></i>
                    </div>
                    <h2 class="text-2xl font-bold text-gray-800">6. Your Rights and Choices</h2>
                </div>

                <div class="bg-gradient-to-r from-purple-50 to-purple-100 rounded-xl p-6 mb-6">
                    <h3 class="text-lg font-semibold text-purple-800 mb-4 flex items-center">
                        <i class="bi bi-hand-thumbs-up mr-2"></i>
                        You Have Control
                    </h3>
                    <p class="text-purple-700">You have several rights regarding your personal information and how we use it.</p>
                </div>

                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-4">
                    <div class="bg-blue-50 rounded-lg p-4 text-center">
                        <i class="bi bi-eye text-2xl text-blue-600 mb-2"></i>
                        <h4 class="font-semibold text-blue-800 mb-1">Access</h4>
                        <p class="text-sm text-blue-700">Review your personal information</p>
                    </div>
                    <div class="bg-green-50 rounded-lg p-4 text-center">
                        <i class="bi bi-pencil text-2xl text-green-600 mb-2"></i>
                        <h4 class="font-semibold text-green-800 mb-1">Correct</h4>
                        <p class="text-sm text-green-700">Fix inaccurate or incomplete data</p>
                    </div>
                    <div class="bg-red-50 rounded-lg p-4 text-center">
                        <i class="bi bi-trash text-2xl text-red-600 mb-2"></i>
                        <h4 class="font-semibold text-red-800 mb-1">Delete</h4>
                        <p class="text-sm text-red-700">Request deletion of your information</p>
                    </div>
                    <div class="bg-yellow-50 rounded-lg p-4 text-center">
                        <i class="bi bi-x-circle text-2xl text-yellow-600 mb-2"></i>
                        <h4 class="font-semibold text-yellow-800 mb-1">Opt Out</h4>
                        <p class="text-sm text-yellow-700">Stop marketing communications</p>
                    </div>
                    <div class="bg-purple-50 rounded-lg p-4 text-center">
                        <i class="bi bi-pause-circle text-2xl text-purple-600 mb-2"></i>
                        <h4 class="font-semibold text-purple-800 mb-1">Restrict</h4>
                        <p class="text-sm text-purple-700">Limit processing in certain cases</p>
                    </div>
                    <div class="bg-indigo-50 rounded-lg p-4 text-center">
                        <i class="bi bi-download text-2xl text-indigo-600 mb-2"></i>
                        <h4 class="font-semibold text-indigo-800 mb-1">Portability</h4>
                        <p class="text-sm text-indigo-700">Transfer your data</p>
                    </div>
                </div>

                <div class="mt-6 text-center">
                    <p class="text-gray-600 mb-4">To exercise these rights, contact us at:</p>
                    <a href="mailto:privacy@est8ledger.com" class="inline-flex items-center bg-primary-600 hover:bg-primary-700 text-white px-6 py-3 rounded-lg font-medium transition-colors">
                        <i class="bi bi-envelope mr-2"></i>
                        privacy@est8ledger.com
                    </a>
                </div>
            </div>

            <!-- Additional Sections (Data Retention, Cookies, etc.) -->
            <div class="grid md:grid-cols-2 gap-6 mb-8">
                <!-- Data Retention -->
                <div class="bg-white rounded-2xl shadow-sm p-6">
                    <div class="flex items-center mb-4">
                        <div class="w-8 h-8 bg-primary-100 rounded-lg flex items-center justify-center mr-3">
                            <i class="bi bi-clock text-primary-600"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800">Data Retention</h3>
                    </div>
                    <p class="text-gray-600 mb-4">We retain your information for as long as necessary to:</p>
                    <ul class="space-y-2 text-gray-600">
                        <li class="flex items-start">
                            <i class="bi bi-check-circle mr-2 text-primary-600 mt-1 flex-shrink-0"></i>
                            Provide services and maintain your account
                        </li>
                        <li class="flex items-start">
                            <i class="bi bi-check-circle mr-2 text-primary-600 mt-1 flex-shrink-0"></i>
                            Comply with legal requirements
                        </li>
                        <li class="flex items-start">
                            <i class="bi bi-check-circle mr-2 text-primary-600 mt-1 flex-shrink-0"></i>
                            Maintain blockchain records (permanent)
                        </li>
                    </ul>
                </div>

                <!-- Cookies -->
                <div class="bg-white rounded-2xl shadow-sm p-6">
                    <div class="flex items-center mb-4">
                        <div class="w-8 h-8 bg-accent-100 rounded-lg flex items-center justify-center mr-3">
                            <i class="bi bi-cookie text-accent-600"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800">Cookies & Tracking</h3>
                    </div>
                    <p class="text-gray-600 mb-4">We use cookies and similar technologies to:</p>
                    <ul class="space-y-2 text-gray-600">
                        <li class="flex items-start">
                            <i class="bi bi-check-circle mr-2 text-accent-600 mt-1 flex-shrink-0"></i>
                            Enable essential platform functionality
                        </li>
                        <li class="flex items-start">
                            <i class="bi bi-check-circle mr-2 text-accent-600 mt-1 flex-shrink-0"></i>
                            Analyze performance and improve services
                        </li>
                        <li class="flex items-start">
                            <i class="bi bi-check-circle mr-2 text-accent-600 mt-1 flex-shrink-0"></i>
                            Remember your preferences
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Contact Section -->
            <div class="bg-gradient-to-r from-primary-600 to-primary-700 rounded-2xl shadow-lg p-8 text-white">
                <div class="text-center mb-8">
                    <h2 class="text-2xl font-bold mb-4">Contact Our Privacy Team</h2>
                    <p class="text-primary-100">Have questions about your privacy or this policy? We're here to help.</p>
                </div>

                <div class="grid md:grid-cols-3 gap-6 text-center">
                    <div class="bg-white/10 rounded-xl p-6">
                        <i class="bi bi-envelope text-3xl text-primary-100 mb-3"></i>
                        <h3 class="font-semibold mb-2">Email</h3>
                        <a href="mailto:privacy@est8ledger.com" class="text-primary-100 hover:text-white transition-colors">
                            privacy@est8ledger.com
                        </a>
                    </div>
                    <div class="bg-white/10 rounded-xl p-6">
                        <i class="bi bi-telephone text-3xl text-primary-100 mb-3"></i>
                        <h3 class="font-semibold mb-2">Phone</h3>
                        <a href="tel:0763498762" class="text-primary-100 hover:text-white transition-colors">
                            0763498762
                        </a>
                    </div>
                    <div class="bg-white/10 rounded-xl p-6">
                        <i class="bi bi-geo-alt text-3xl text-primary-100 mb-3"></i>
                        <h3 class="font-semibold mb-2">Address</h3>
                        <p class="text-primary-100">
                            Est8Ledger, Inc.<br>
                            Privacy Department<br>
                            Kisaasi, Bahai Road
                        </p>
                    </div>
                </div>
            </div>

            <!-- Effective Date -->
            <div class="text-center mt-8">
                <div class="bg-gray-100 rounded-xl p-6 max-w-2xl mx-auto">
                    <div class="flex items-center justify-center mb-3">
                        <i class="bi bi-calendar-check text-2xl text-gray-600 mr-3"></i>
                        <h3 class="text-lg font-semibold text-gray-800">Effective Date</h3>
                    </div>
                    <p class="text-gray-600">
                        This Privacy Policy is effective as of <strong><?= date('F j, Y') ?></strong> and supersedes all previous versions.
                    </p>
                </div>
            </div>

        </div>
    </div>
</div>
<?= $this->endSection() ?>
