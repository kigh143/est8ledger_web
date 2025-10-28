<?= $this->extend('layouts/main') ?>

<?= $this->section('css') ?>
<style>
    .hero-gradient {
        background: linear-gradient(135deg, #0d06c8 0%, #350bbf 50%, #4c1df7 100%);
    }
    
    .profit-badge {
        background: linear-gradient(135deg, #10B981 0%, #059669 100%);
    }
    
    .floating-element {
        animation: float 6s ease-in-out infinite;
    }
    
    .floating-delayed {
        animation: float 6s ease-in-out infinite;
        animation-delay: -3s;
    }
    
    @keyframes float {
        0%, 100% { transform: translateY(0px); }
        50% { transform: translateY(-20px); }
    }
    
    .step-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 20px 40px rgba(13, 6, 200, 0.15);
    }
    
    .testimonial-card {
        background: linear-gradient(135deg, rgba(255,255,255,0.9) 0%, rgba(255,255,255,0.7) 100%);
        backdrop-filter: blur(10px);
    }
    
    .problem-stat {
        background: linear-gradient(135deg, #ef4444 0%, #dc2626 100%);
    }
    
    .solution-highlight {
        background: linear-gradient(135deg, #10b981 0%, #059669 100%);
    }
</style>
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<!-- Hero Section -->
<section class="hero-gradient text-white py-20 md:py-32 relative overflow-hidden" data-page-type="homepage">
    <!-- Floating Background Elements -->
    <div class="absolute top-20 left-10 w-20 h-20 bg-white/10 rounded-full floating-element"></div>
    <div class="absolute top-40 right-20 w-16 h-16 bg-accent-400/20 rounded-full floating-delayed"></div>
    <div class="absolute bottom-20 left-1/4 w-12 h-12 bg-white/5 rounded-full floating-element"></div>
    
    <div class="container mx-auto px-4 relative z-10">
        <div class="max-w-4xl mx-auto text-center">
            <!-- Trust Badge -->
            <div class="inline-flex items-center bg-white/10 backdrop-blur-sm rounded-full px-6 py-2 mb-8 animate-on-scroll">
                <i class="bi bi-shield-check text-accent-400 mr-2"></i>
                <span class="text-sm font-medium">Uganda's First Licensed Blockchain Escrow • 2,500+ Users • Bank-Level Security</span>
            </div>
            
            <!-- SEO-Optimized Headlines -->
            <h1 class="text-4xl md:text-6xl font-bold mb-6 animate-on-scroll">
                <span class="block md:hidden">Uganda Security Deposit Management Platform</span>
                <span class="hidden md:block">End Security Deposit Disputes in Uganda & East Africa Forever</span>
            </h1>
            
            <p class="text-xl md:text-2xl mb-8 text-white/90 max-w-3xl mx-auto leading-relaxed animate-on-scroll">
                Uganda's first <strong>blockchain-secured rental escrow platform</strong> trusted by landlords and tenants across Kampala, Nairobi & Dar es Salaam. 
                <strong>90% fewer deposit disputes</strong>, <strong>8-12% annual profit sharing</strong>, and transparent digital property inspections guaranteed.
            </p>
            
            <!-- CTA Buttons -->
            <div class="flex flex-col sm:flex-row gap-4 justify-center mb-12 animate-on-scroll">
                <a href="#waiting-list" class="inline-flex items-center px-8 py-4 bg-accent-400 hover:bg-accent-500 text-primary-900 font-bold rounded-lg transition-all transform hover:scale-105 shadow-lg">
                    <i class="bi bi-person-plus mr-2"></i>
                    Join 2,500+ East Africans - Free
                </a>
                <a href="#how-it-works" class="inline-flex items-center px-8 py-4 bg-transparent border-2 border-white text-white hover:bg-white hover:text-primary-900 font-semibold rounded-lg transition-all">
                    <i class="bi bi-play-circle mr-2"></i>
                    See 6-Step Process
                </a>
            </div>
            
            <!-- Hero Stats -->
            <div class="grid grid-cols-3 gap-8 max-w-2xl mx-auto animate-on-scroll">
                <div class="text-center">
                    <div class="text-2xl md:text-3xl font-bold text-accent-400 animate-counter" data-target="800">0</div>
                    <div class="text-sm text-white/80">Properties Protected</div>
                </div>
                <div class="text-center">
                    <div class="text-2xl md:text-3xl font-bold text-accent-400 animate-counter" data-target="2500">0</div>
                    <div class="text-sm text-white/80">Active Users</div>
                </div>
                <div class="text-center">
                    <div class="text-2xl md:text-3xl font-bold text-accent-400">$3.2M+</div>
                    <div class="text-sm text-white/80">Deposits Secured</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Problem Statement Section -->
<section class="py-20 bg-neutral-50">
    <div class="container mx-auto px-4">
        <div class="max-w-6xl mx-auto">
            <div class="text-center mb-16 animate-on-scroll">
                <h2 class="text-3xl md:text-4xl font-bold text-secondary-900 mb-6">
                    Why 60% of Uganda Tenants Lose Security Deposits Unfairly
                </h2>
                <p class="text-xl text-secondary-600 max-w-3xl mx-auto">
                    Across Uganda, Kenya, and Tanzania, <strong>$1.5 billion in security deposits</strong> are trapped in disputes, unfair deductions, and broken rental relationships every year
                </p>
            </div>
            
            <div class="grid md:grid-cols-2 gap-12 items-center mb-16">
                <div class="animate-on-scroll">
                    <!-- Problem Statistics -->
                    <div class="space-y-6 mb-8">
                        <div class="flex items-start">
                            <div class="problem-stat w-12 h-12 rounded-xl flex items-center justify-center mr-4 text-white font-bold">60%</div>
                            <div>
                                <h3 class="font-semibold text-secondary-900 mb-1">Uganda Tenants Lose Deposits Through Unfair Deductions</h3>
                                <p class="text-secondary-600 text-sm">Unclear damage assessments, missing move-in documentation, and landlord disputes</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start">
                            <div class="problem-stat w-12 h-12 rounded-xl flex items-center justify-center mr-4 text-white font-bold">45%</div>
                            <div>
                                <h3 class="font-semibold text-secondary-900 mb-1">East African Landlords Face Deposit Recovery Delays</h3>
                                <p class="text-secondary-600 text-sm">Property damage disputes, legal costs, and tenant relationship breakdown</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start">
                            <div class="problem-stat w-12 h-12 rounded-xl flex items-center justify-center mr-4 text-white font-bold">$0</div>
                            <div>
                                <h3 class="font-semibold text-secondary-900 mb-1">Zero Returns on Idle Security Deposit Money</h3>
                                <p class="text-secondary-600 text-sm">Billions in deposits earn nothing while inflation reduces purchasing power</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="animate-on-scroll">
                    <div class="relative">
                        <img src="https://images.unsplash.com/photo-1560472354-b33ff0c44a43?w=600&h=400&fit=crop" 
                             alt="Frustrated tenant and landlord in East Africa" 
                             class="rounded-2xl shadow-xl w-full">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent rounded-2xl"></div>
                        <div class="absolute bottom-6 left-6 text-white">
                            <p class="font-bold text-lg">The Current Reality in East Africa</p>
                            <p class="text-sm opacity-90">Disputes • Delays • Lost Money • Broken Trust</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Pain Points -->
            <div class="bg-red-50 rounded-2xl p-8 border border-red-200 animate-on-scroll">
                <h3 class="text-xl font-bold text-red-800 mb-4 text-center">
                    Sound Familiar? You're Not Alone.
                </h3>
                <div class="grid md:grid-cols-2 gap-6 text-red-700">
                    <div class="space-y-3">
                        <p class="flex items-start">
                            <i class="bi bi-exclamation-triangle mr-2 mt-1 text-red-600"></i>
                            <span>"My landlord kept my entire deposit for 'cleaning fees' even though I left the place spotless"</span>
                        </p>
                        <p class="flex items-start">
                            <i class="bi bi-exclamation-triangle mr-2 mt-1 text-red-600"></i>
                            <span>"Tenant damaged the property but I had no photos to prove the original condition"</span>
                        </p>
                    </div>
                    <div class="space-y-3">
                        <p class="flex items-start">
                            <i class="bi bi-exclamation-triangle mr-2 mt-1 text-red-600"></i>
                            <span>"My UGX 2,000,000 deposit has been sitting in my landlord's account for 2 years earning nothing"</span>
                        </p>
                        <p class="flex items-start">
                            <i class="bi bi-exclamation-triangle mr-2 mt-1 text-red-600"></i>
                            <span>"I've spent more on lawyers than the deposit was worth"</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Solution Overview Section -->
<section class="py-20 bg-white">
    <div class="container mx-auto px-4">
        <div class="max-w-6xl mx-auto">
            <div class="text-center mb-16 animate-on-scroll">
                <h2 class="text-3xl md:text-4xl font-bold text-secondary-900 mb-6">
                    How est8Ledger Solves Uganda's Security Deposit Crisis
                </h2>
                <p class="text-xl text-secondary-600 max-w-3xl mx-auto">
                    The complete blockchain-secured solution: <strong>eliminate disputes</strong>, <strong>guarantee deposit recovery</strong>, and <strong>earn 8-12% annual profits</strong> on idle deposit money
                </p>
            </div>
            
            <!-- Solution Formula -->
            <div class="bg-gradient-to-r from-primary-50 to-green-50 rounded-2xl p-8 mb-12 animate-on-scroll">
                <div class="text-center">
                    <h3 class="text-2xl font-bold text-secondary-900 mb-6">The est8Ledger Formula for Deposit Success</h3>
                    <div class="flex flex-col md:flex-row items-center justify-center space-y-4 md:space-y-0 md:space-x-8">
                        <div class="flex items-center">
                            <div class="solution-highlight text-white px-4 py-2 rounded-lg font-semibold">Blockchain-Secured Digital Agreements</div>
                        </div>
                        <div class="text-2xl font-bold text-secondary-600">+</div>
                        <div class="flex items-center">
                            <div class="solution-highlight text-white px-4 py-2 rounded-lg font-semibold">AI-Guided Mobile Property Inspections</div>
                        </div>
                        <div class="text-2xl font-bold text-secondary-600">+</div>
                        <div class="flex items-center">
                            <div class="solution-highlight text-white px-4 py-2 rounded-lg font-semibold">Licensed Escrow + Profit Sharing</div>
                        </div>
                        <div class="text-2xl font-bold text-secondary-600">=</div>
                        <div class="flex items-center">
                            <div class="bg-accent-400 text-primary-900 px-4 py-2 rounded-lg font-bold">90% Fewer Disputes + 8-12% Returns</div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="grid md:grid-cols-2 gap-8 mb-12">
                <div class="space-y-6 animate-stagger">
                    <div class="flex items-start stagger-item">
                        <div class="w-12 h-12 bg-primary-100 rounded-xl flex items-center justify-center mr-4">
                            <i class="bi bi-shield-lock text-primary-600 text-xl"></i>
                        </div>
                        <div>
                            <h3 class="font-semibold text-secondary-900 mb-2">Blockchain-Backed Escrow Accounts</h3>
                            <p class="text-secondary-600">Deposits safely stored in regulated financial institutions with unalterable blockchain records</p>
                        </div>
                    </div>
                    
                    <div class="flex items-start stagger-item">
                        <div class="w-12 h-12 bg-green-100 rounded-xl flex items-center justify-center mr-4">
                            <i class="bi bi-graph-up text-green-600 text-xl"></i>
                        </div>
                        <div>
                            <h3 class="font-semibold text-secondary-900 mb-2">Profit-Sharing Investment Pool</h3>
                            <p class="text-secondary-600">Optional 8-12% annual returns: 40% tenant, 40% landlord, 20% est8Ledger</p>
                        </div>
                    </div>
                    
                    <div class="flex items-start stagger-item">
                        <div class="w-12 h-12 bg-blue-100 rounded-xl flex items-center justify-center mr-4">
                            <i class="bi bi-camera text-blue-600 text-xl"></i>
                        </div>
                        <div>
                            <h3 class="font-semibold text-secondary-900 mb-2">Transparent Property Inspections</h3>
                            <p class="text-secondary-600">Digital photo documentation with guided mobile app for move-in and move-out</p>
                        </div>
                    </div>
                    
                    <div class="flex items-start stagger-item">
                        <div class="w-12 h-12 bg-purple-100 rounded-xl flex items-center justify-center mr-4">
                            <i class="bi bi-lightning text-purple-600 text-xl"></i>
                        </div>
                        <div>
                            <h3 class="font-semibold text-secondary-900 mb-2">Instant Dispute Resolution</h3>
                            <p class="text-secondary-600">Clear evidence and automated calculations eliminate arguments and legal costs</p>
                        </div>
                    </div>
                </div>
                
                <div class="animate-on-scroll">
                    <div class="relative">
                        <img src="https://images.unsplash.com/photo-1560472355-536de3962603?w=600&h=500&fit=crop" 
                             alt="Modern apartment in Uganda with digital inspection" 
                             class="rounded-2xl shadow-xl w-full">
                        <div class="absolute inset-0 bg-gradient-to-t from-primary-900/80 to-transparent rounded-2xl"></div>
                        <div class="absolute bottom-6 left-6 text-white">
                            <p class="font-bold text-lg">The est8Ledger Difference</p>
                            <p class="text-sm opacity-90">Transparent • Profitable • Fair • Secure</p>
                        </div>
                        
                        <!-- Floating benefit badges -->
                        <div class="absolute top-4 right-4 bg-accent-400 text-primary-900 px-3 py-1 rounded-full text-sm font-bold">
                            90% Fewer Disputes
                        </div>
                        <div class="absolute top-16 right-4 bg-green-500 text-white px-3 py-1 rounded-full text-sm font-bold">
                            8-12% Returns
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="text-center animate-on-scroll">
                <a href="#demo" class="inline-flex items-center px-8 py-4 bg-primary-600 hover:bg-primary-700 text-white font-semibold rounded-lg transition-all transform hover:scale-105 shadow-lg">
                    <i class="bi bi-play-circle mr-2"></i>
                    See Live Demo
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Persona-Specific Benefits -->
<section class="py-20 bg-gradient-to-br from-primary-50 to-blue-50">
    <div class="container mx-auto px-4">
        <div class="max-w-6xl mx-auto">
            <div class="text-center mb-16 animate-on-scroll">
                <h2 class="text-3xl md:text-4xl font-bold text-secondary-900 mb-6">
                    Trusted by Uganda Landlords, Tenants & Property Managers
                </h2>
                <p class="text-xl text-secondary-600">
                    Solving unique rental challenges across Kampala, Entebbe, Jinja, Nairobi, and Dar es Salaam
                </p>
            </div>
            
            <div class="grid md:grid-cols-3 gap-8 mb-12">
                <!-- Landlords -->
                <div class="bg-white rounded-2xl p-8 shadow-lg animate-stagger">
                    <div class="stagger-item">
                        <div class="w-16 h-16 bg-primary-600 rounded-2xl flex items-center justify-center mb-6">
                            <i class="bi bi-building text-white text-2xl"></i>
                        </div>
                        <h3 class="text-2xl font-bold text-secondary-900 mb-4">For Uganda Landlords</h3>
                        <p class="text-secondary-600 mb-6">Protect your rental income and eliminate deposit disputes</p>
                        
                        <div class="space-y-4 mb-8">
                            <div class="flex items-start">
                                <i class="bi bi-check-circle text-green-500 mr-3 mt-1"></i>
                                <div>
                                    <h4 class="font-semibold text-secondary-900">90% Fewer Deposit Disputes</h4>
                                    <p class="text-sm text-secondary-600">Blockchain-verified property condition records eliminate arguments</p>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <i class="bi bi-check-circle text-green-500 mr-3 mt-1"></i>
                                <div>
                                    <h4 class="font-semibold text-secondary-900">8-12% Annual Profit Sharing</h4>
                                    <p class="text-sm text-secondary-600">Earn returns on tenant deposits through regulated investments</p>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <i class="bi bi-check-circle text-green-500 mr-3 mt-1"></i>
                                <div>
                                    <h4 class="font-semibold text-secondary-900">15-Minute Digital Property Inspections</h4>
                                    <p class="text-sm text-secondary-600">Mobile app guides complete property documentation vs. 2+ hours manually</p>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <i class="bi bi-check-circle text-green-500 mr-3 mt-1"></i>
                                <div>
                                    <h4 class="font-semibold text-secondary-900">Uganda Landlord & Tenant Act 2022 Compliant</h4>
                                    <p class="text-sm text-secondary-600">Meets all legal requirements for deposit protection</p>
                                </div>
                            </div>
                        </div>
                        
                        <a href="#landlord-signup" class="w-full inline-flex items-center justify-center px-6 py-3 bg-primary-600 hover:bg-primary-700 text-white font-semibold rounded-lg transition-colors">
                            <i class="bi bi-building mr-2"></i>
                            Join 800+ Uganda Landlords
                        </a>
                    </div>
                </div>
                
                <!-- Tenants -->
                <div class="bg-white rounded-2xl p-8 shadow-lg animate-stagger">
                    <div class="stagger-item">
                        <div class="w-16 h-16 bg-accent-600 rounded-2xl flex items-center justify-center mb-6">
                            <i class="bi bi-person-check text-white text-2xl"></i>
                        </div>
                        <h3 class="text-2xl font-bold text-secondary-900 mb-4">For East Africa Tenants</h3>
                        <p class="text-secondary-600 mb-6">Guarantee deposit recovery and earn profits while renting</p>
                        
                        <div class="space-y-4 mb-8">
                            <div class="flex items-start">
                                <i class="bi bi-check-circle text-green-500 mr-3 mt-1"></i>
                                <div>
                                    <h4 class="font-semibold text-secondary-900">100% Guaranteed Deposit Recovery</h4>
                                    <p class="text-sm text-secondary-600">Blockchain records prove property condition - no unfair deductions</p>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <i class="bi bi-check-circle text-green-500 mr-3 mt-1"></i>
                                <div>
                                    <h4 class="font-semibold text-secondary-900">Earn UGX 120,000+ Annually on Deposits</h4>
                                    <p class="text-sm text-secondary-600">Your deposit earns 8-12% returns instead of sitting idle</p>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <i class="bi bi-check-circle text-green-500 mr-3 mt-1"></i>
                                <div>
                                    <h4 class="font-semibold text-secondary-900">Mobile Money Integration</h4>
                                    <p class="text-sm text-secondary-600">Pay deposits via MTN Mobile Money, Airtel Money across East Africa</p>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <i class="bi bi-check-circle text-green-500 mr-3 mt-1"></i>
                                <div>
                                    <h4 class="font-semibold text-secondary-900">Perfect for Students & Young Professionals</h4>
                                    <p class="text-sm text-secondary-600">Affordable, transparent, and profitable rental experience</p>
                                </div>
                            </div>
                        </div>
                        
                        <a href="#tenant-signup" class="w-full inline-flex items-center justify-center px-6 py-3 bg-accent-600 hover:bg-accent-700 text-white font-semibold rounded-lg transition-colors">
                            <i class="bi bi-person-check mr-2"></i>
                            Join 1,700+ East Africa Tenants
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- How It Works Summary -->
<section id="how-it-works" class="py-20 bg-white">
    <div class="container mx-auto px-4">
        <div class="max-w-6xl mx-auto">
            <div class="text-center mb-16 animate-on-scroll">
                <h2 class="text-3xl md:text-4xl font-bold text-secondary-900 mb-6">
                    6 Simple Steps to Profitable Security Deposit Management
                </h2>
                <p class="text-xl text-secondary-600 max-w-2xl mx-auto">
                    From digital agreements to profit distribution - the complete process takes less than 30 minutes
                </p>
            </div>
            
            <div class="grid md:grid-cols-3 gap-8 mb-12">
                <!-- Step 1 -->
                <div class="text-center step-card bg-gradient-to-br from-blue-50 to-primary-50 rounded-2xl p-8 transition-all animate-stagger">
                    <div class="stagger-item">
                        <div class="w-16 h-16 bg-primary-600 rounded-2xl flex items-center justify-center mx-auto mb-6">
                            <i class="bi bi-file-text text-white text-2xl"></i>
                        </div>
                        <div class="w-8 h-8 bg-primary-600 text-white rounded-full flex items-center justify-center mx-auto mb-4 text-sm font-bold">1</div>
                        <h3 class="text-xl font-bold text-secondary-900 mb-4">Digital Tenancy Agreement</h3>
                        <p class="text-secondary-600">Sign blockchain-secured lease with built-in deposit protection terms</p>
                        <div class="mt-4 text-sm text-primary-600 font-medium">⏱ 5 minutes</div>
                    </div>
                </div>
                
                <!-- Step 2 -->
                <div class="text-center step-card bg-gradient-to-br from-green-50 to-emerald-50 rounded-2xl p-8 transition-all animate-stagger">
                    <div class="stagger-item">
                        <div class="w-16 h-16 bg-green-600 rounded-2xl flex items-center justify-center mx-auto mb-6">
                            <i class="bi bi-shield-check text-white text-2xl"></i>
                        </div>
                        <div class="w-8 h-8 bg-green-600 text-white rounded-full flex items-center justify-center mx-auto mb-4 text-sm font-bold">2</div>
                        <h3 class="text-xl font-bold text-secondary-900 mb-4">Secure Escrow Deposit</h3>
                        <p class="text-secondary-600">Funds held in licensed financial institution, not with landlord</p>
                        <div class="mt-4 text-sm text-green-600 font-medium">⏱ Instant transfer</div>
                    </div>
                </div>
                
                <!-- Step 3 -->
                <div class="text-center step-card bg-gradient-to-br from-purple-50 to-indigo-50 rounded-2xl p-8 transition-all animate-stagger">
                    <div class="stagger-item">
                        <div class="w-16 h-16 bg-purple-600 rounded-2xl flex items-center justify-center mx-auto mb-6">
                            <i class="bi bi-camera text-white text-2xl"></i>
                        </div>
                        <div class="w-8 h-8 bg-purple-600 text-white rounded-full flex items-center justify-center mx-auto mb-4 text-sm font-bold">3</div>
                        <h3 class="text-xl font-bold text-secondary-900 mb-4">Move-In Inspection</h3>
                        <p class="text-secondary-600">Guided mobile app documents every room with photo evidence</p>
                        <div class="mt-4 text-sm text-purple-600 font-medium">⏱ 15 minutes</div>
                    </div>
                </div>
                
                <!-- Step 4 -->
                <div class="text-center step-card bg-gradient-to-br from-yellow-50 to-orange-50 rounded-2xl p-8 transition-all animate-stagger">
                    <div class="stagger-item">
                        <div class="w-16 h-16 bg-yellow-600 rounded-2xl flex items-center justify-center mx-auto mb-6">
                            <i class="bi bi-graph-up text-white text-2xl"></i>
                        </div>
                        <div class="w-8 h-8 bg-yellow-600 text-white rounded-full flex items-center justify-center mx-auto mb-4 text-sm font-bold">4</div>
                        <h3 class="text-xl font-bold text-secondary-900 mb-4">Profit-Sharing Investment</h3>
                        <p class="text-secondary-600">Optional: Deposit earns 8-12% annual returns while held</p>
                        <div class="mt-4 text-sm text-yellow-600 font-medium">📈 Monthly reports</div>
                    </div>
                </div>
                
                <!-- Step 5 -->
                <div class="text-center step-card bg-gradient-to-br from-red-50 to-pink-50 rounded-2xl p-8 transition-all animate-stagger">
                    <div class="stagger-item">
                        <div class="w-16 h-16 bg-red-600 rounded-2xl flex items-center justify-center mx-auto mb-6">
                            <i class="bi bi-search text-white text-2xl"></i>
                        </div>
                        <div class="w-8 h-8 bg-red-600 text-white rounded-full flex items-center justify-center mx-auto mb-4 text-sm font-bold">5</div>
                        <h3 class="text-xl font-bold text-secondary-900 mb-4">Move-Out Inspection</h3>
                        <p class="text-secondary-600">Compare current vs. original condition with side-by-side photos</p>
                        <div class="mt-4 text-sm text-red-600 font-medium">⏱ 10 minutes</div>
                    </div>
                </div>
                
                <!-- Step 6 -->
                <div class="text-center step-card bg-gradient-to-br from-teal-50 to-cyan-50 rounded-2xl p-8 transition-all animate-stagger">
                    <div class="stagger-item">
                        <div class="w-16 h-16 bg-teal-600 rounded-2xl flex items-center justify-center mx-auto mb-6">
                            <i class="bi bi-cash-coin text-white text-2xl"></i>
                        </div>
                        <div class="w-8 h-8 bg-teal-600 text-white rounded-full flex items-center justify-center mx-auto mb-4 text-sm font-bold">6</div>
                        <h3 class="text-xl font-bold text-secondary-900 mb-4">Automated Payout</h3>
                        <p class="text-secondary-600">Instant distribution of deposit + profits to all parties</p>
                        <div class="mt-4 text-sm text-teal-600 font-medium">⚡ 24-hour transfer</div>
                    </div>
                </div>
            </div>
            
            <div class="text-center animate-on-scroll">
                <a href="/how-it-works" class="inline-flex items-center px-8 py-4 bg-primary-600 hover:bg-primary-700 text-white font-semibold rounded-lg transition-all transform hover:scale-105 shadow-lg">
                    <i class="bi bi-arrow-right mr-2"></i>
                    See Detailed Process
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Trust & Security Section -->
<section class="py-20 bg-secondary-900 text-white">
    <div class="container mx-auto px-4">
        <div class="max-w-6xl mx-auto">
            <div class="text-center mb-16 animate-on-scroll">
                <h2 class="text-3xl md:text-4xl font-bold mb-6">
                    Why 2,500+ East Africans Trust est8Ledger
                </h2>
                <p class="text-xl text-secondary-300 max-w-3xl mx-auto">
                    Bank-grade security meets blockchain transparency for the ultimate deposit protection
                </p>
            </div>
            
            <div class="grid md:grid-cols-5 gap-8 mb-12">
                <div class="text-center animate-stagger">
                    <div class="stagger-item">
                        <div class="w-16 h-16 bg-primary-600 rounded-2xl flex items-center justify-center mx-auto mb-4">
                            <i class="bi bi-shield-lock text-white text-2xl"></i>
                        </div>
                        <h3 class="font-bold mb-2">XRPL Blockchain</h3>
                        <p class="text-sm text-secondary-300">Unalterable transaction records</p>
                    </div>
                </div>
                
                <div class="text-center animate-stagger">
                    <div class="stagger-item">
                        <div class="w-16 h-16 bg-green-600 rounded-2xl flex items-center justify-center mx-auto mb-4">
                            <i class="bi bi-bank text-white text-2xl"></i>
                        </div>
                        <h3 class="font-bold mb-2">Licensed Escrow</h3>
                        <p class="text-sm text-secondary-300">Regulated financial institutions</p>
                    </div>
                </div>
                
                <div class="text-center animate-stagger">
                    <div class="stagger-item">
                        <div class="w-16 h-16 bg-yellow-600 rounded-2xl flex items-center justify-center mx-auto mb-4">
                            <i class="bi bi-geo-alt text-white text-2xl"></i>
                        </div>
                        <h3 class="font-bold mb-2">Local Compliance</h3>
                        <p class="text-sm text-secondary-300">Uganda Tenancy Act 2022</p>
                    </div>
                </div>
                
                <div class="text-center animate-stagger">
                    <div class="stagger-item">
                        <div class="w-16 h-16 bg-blue-600 rounded-2xl flex items-center justify-center mx-auto mb-4">
                            <i class="bi bi-phone text-white text-2xl"></i>
                        </div>
                        <h3 class="font-bold mb-2">Mobile-First</h3>
                        <p class="text-sm text-secondary-300">Works on any smartphone</p>
                    </div>
                </div>
                
                <div class="text-center animate-stagger">
                    <div class="stagger-item">
                        <div class="w-16 h-16 bg-purple-600 rounded-2xl flex items-center justify-center mx-auto mb-4">
                            <i class="bi bi-headset text-white text-2xl"></i>
                        </div>
                        <h3 class="font-bold mb-2">24/7 Support</h3>
                        <p class="text-sm text-secondary-300">WhatsApp & phone support</p>
                    </div>
                </div>
            </div>
            
            <!-- Trust Indicators -->
            <div class="text-center animate-on-scroll">
                <div class="inline-flex items-center bg-white/10 backdrop-blur-sm rounded-2xl px-8 py-6">
                    <div class="flex items-center space-x-12">
                        <div class="text-center">
                            <div class="text-3xl font-bold text-accent-400">800+</div>
                            <div class="text-sm text-secondary-300">Properties Protected</div>
                        </div>
                        <div class="w-px h-12 bg-white/20"></div>
                        <div class="text-center">
                            <div class="text-3xl font-bold text-accent-400">2,500+</div>
                            <div class="text-sm text-secondary-300">Active Users</div>
                        </div>
                        <div class="w-px h-12 bg-white/20"></div>
                        <div class="text-center">
                            <div class="text-3xl font-bold text-accent-400">$3.2M+</div>
                            <div class="text-sm text-secondary-300">Deposits Secured</div>
                        </div>
                        <div class="w-px h-12 bg-white/20"></div>
                        <div class="text-center">
                            <div class="text-3xl font-bold text-accent-400">90%</div>
                            <div class="text-sm text-secondary-300">Dispute Reduction</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Testimonials Section -->
<section class="py-20 bg-gradient-to-br from-blue-50 to-indigo-50">
    <div class="container mx-auto px-4">
        <div class="max-w-6xl mx-auto">
            <div class="text-center mb-16 animate-on-scroll">
                <h2 class="text-3xl md:text-4xl font-bold text-secondary-900 mb-6">
                    Real Success Stories from East Africa
                </h2>
                <p class="text-xl text-secondary-600">
                    See how est8Ledger is transforming rental relationships across Uganda, Kenya, and Tanzania
                </p>
            </div>
            
            <div class="grid md:grid-cols-3 gap-8">
                <!-- Testimonial 1 -->
                <div class="testimonial-card rounded-2xl p-8 animate-stagger">
                    <div class="stagger-item">
                        <div class="flex items-center mb-6">
                            <img src="https://images.unsplash.com/photo-1494790108755-2616b612b786?w=60&h=60&fit=crop&crop=face" 
                                 alt="Sarah Nakato, Tenant from Kampala" 
                                 class="w-12 h-12 rounded-full mr-4">
                            <div>
                                <div class="font-semibold text-secondary-900">Sarah Nakato</div>
                                <div class="text-sm text-secondary-600">Tenant, Kampala</div>
                            </div>
                        </div>
                        <div class="flex mb-4">
                            <i class="bi bi-star-fill text-yellow-400"></i>
                            <i class="bi bi-star-fill text-yellow-400"></i>
                            <i class="bi bi-star-fill text-yellow-400"></i>
                            <i class="bi bi-star-fill text-yellow-400"></i>
                            <i class="bi bi-star-fill text-yellow-400"></i>
                        </div>
                        <p class="text-secondary-700 italic mb-4">
                            "First time in 5 years I got my full UGX 2,000,000 deposit back! The photo evidence was crystal clear - no arguments from my landlord."
                        </p>
                        <div class="text-sm text-green-600 font-semibold">
                            💰 Earned UGX 160,000 in profit sharing
                        </div>
                    </div>
                </div>
                
                <!-- Testimonial 2 -->
                <div class="testimonial-card rounded-2xl p-8 animate-stagger">
                    <div class="stagger-item">
                        <div class="flex items-center mb-6">
                            <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=60&h=60&fit=crop&crop=face" 
                                 alt="James Kiprotich, Property Manager from Entebbe" 
                                 class="w-12 h-12 rounded-full mr-4">
                            <div>
                                <div class="font-semibold text-secondary-900">James Kiprotich</div>
                                <div class="text-sm text-secondary-600">Property Manager, Entebbe</div>
                            </div>
                        </div>
                        <div class="flex mb-4">
                            <i class="bi bi-star-fill text-yellow-400"></i>
                            <i class="bi bi-star-fill text-yellow-400"></i>
                            <i class="bi bi-star-fill text-yellow-400"></i>
                            <i class="bi bi-star-fill text-yellow-400"></i>
                            <i class="bi bi-star-fill text-yellow-400"></i>
                        </div>
                        <p class="text-secondary-700 italic mb-4">
                            "Zero deposit disputes in my 20-unit building since using est8Ledger. Plus, profit-sharing earned me an extra UGX 4,000,000 last year."
                        </p>
                        <div class="text-sm text-green-600 font-semibold">
                            📈 90% reduction in disputes
                        </div>
                    </div>
                </div>
                
                <!-- Testimonial 3 -->
                <div class="testimonial-card rounded-2xl p-8 animate-stagger">
                    <div class="stagger-item">
                        <div class="flex items-center mb-6">
                            <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?w=60&h=60&fit=crop&crop=face" 
                                 alt="David Ochieng, Student at Makerere University" 
                                 class="w-12 h-12 rounded-full mr-4">
                            <div>
                                <div class="font-semibold text-secondary-900">David Ochieng</div>
                                <div class="text-sm text-secondary-600">Student, Makerere University</div>
                            </div>
                        </div>
                        <div class="flex mb-4">
                            <i class="bi bi-star-fill text-yellow-400"></i>
                            <i class="bi bi-star-fill text-yellow-400"></i>
                            <i class="bi bi-star-fill text-yellow-400"></i>
                            <i class="bi bi-star-fill text-yellow-400"></i>
                            <i class="bi bi-star-fill text-yellow-400"></i>
                        </div>
                        <p class="text-secondary-700 italic mb-4">
                            "As a student, earning UGX 120,000 on my deposit while studying was incredible. The inspection process was so simple!"
                        </p>
                        <div class="text-sm text-green-600 font-semibold">
                            🎓 Perfect for students
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="py-20 bg-neutral-50">
    <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto">
            <div class="text-center mb-16 animate-on-scroll">
                <h2 class="text-3xl md:text-4xl font-bold text-secondary-900 mb-6">
                    Uganda Security Deposit Management: Frequently Asked Questions
                </h2>
                <p class="text-xl text-secondary-600">
                    Everything landlords and tenants need to know about blockchain-secured rental escrow in East Africa
                </p>
            </div>
            
            <div class="space-y-6 animate-stagger">
                <div class="bg-white rounded-xl p-6 shadow-sm stagger-item">
                    <h3 class="font-semibold text-secondary-900 mb-3">Is est8Ledger legal under Uganda's Landlord and Tenant Act 2022?</h3>
                    <p class="text-secondary-600">Yes, est8Ledger fully complies with Uganda's rental laws and works exclusively with licensed financial institutions. Our escrow accounts meet all regulatory requirements for security deposit protection across Uganda, Kenya, and Tanzania.</p>
                </div>
                
                <div class="bg-white rounded-xl p-6 shadow-sm stagger-item">
                    <h3 class="font-semibold text-secondary-900 mb-3">How do mobile property inspections work without reliable internet in Uganda?</h3>
                    <p class="text-secondary-600">Our mobile app works completely offline and automatically syncs when you reconnect. We also provide SMS updates and phone support for areas with limited connectivity across rural Uganda and East Africa.</p>
                </div>
                
                <div class="bg-white rounded-xl p-6 shadow-sm stagger-item">
                    <h3 class="font-semibold text-secondary-900 mb-3">What happens if my Uganda landlord doesn't want to use est8Ledger?</h3>
                    <p class="text-secondary-600">We're actively educating landlords across Kampala, Entebbe, and Jinja. Many join after seeing the 90% reduction in disputes and additional 8-12% income. We also offer early adopter incentives and free training.</p>
                </div>
                
                <div class="bg-white rounded-xl p-6 shadow-sm stagger-item">
                    <h3 class="font-semibold text-secondary-900 mb-3">How secure is the XRPL blockchain technology for Uganda deposits?</h3>
                    <p class="text-secondary-600">We use the XRPL (XRP Ledger) blockchain, which processes over 1.5 million transactions daily and is trusted by major financial institutions worldwide. Your deposits are more secure than traditional bank accounts.</p>
                </div>
                
                <div class="bg-white rounded-xl p-6 shadow-sm stagger-item">
                    <h3 class="font-semibold text-secondary-900 mb-3">Can I use MTN Mobile Money or Airtel Money for deposit payments?</h3>
                    <p class="text-secondary-600">Yes! est8Ledger integrates with all major East African mobile money platforms including MTN Mobile Money, Airtel Money, and M-Pesa for seamless deposit payments and profit withdrawals.</p>
                </div>
                
                <div class="bg-white rounded-xl p-6 shadow-sm stagger-item">
                    <h3 class="font-semibold text-secondary-900 mb-3">What's the minimum deposit amount to earn 8-12% profit sharing?</h3>
                    <p class="text-secondary-600">Any security deposit amount qualifies for profit sharing. Whether it's UGX 500,000 or UGX 2,000,000, your deposit earns returns through our regulated investment partnerships while remaining fully protected.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Waiting List Section -->
<section id="waiting-list" class="py-20 bg-primary-600 text-white">
    <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto text-center">
            <div class="animate-on-scroll">
                <h2 class="text-3xl md:text-4xl font-bold mb-6">
                    Join Uganda's Security Deposit Revolution
                </h2>
                <p class="text-xl mb-8 text-primary-100">
                    Be among the first 3,000 landlords and tenants to eliminate deposit disputes and earn 8-12% annual profits across East Africa
                </p>
                
                <!-- Urgency messaging -->
                <div class="bg-accent-400 text-primary-900 rounded-lg p-4 mb-8 inline-block">
                    <p class="font-bold">🚀 Launching in Kampala Q2 2024 • Limited Early Access for First 1,000 Users</p>
                </div>
            </div>
            
            <div class="max-w-2xl mx-auto animate-on-scroll">
                <form class="bg-white/10 backdrop-blur-sm rounded-2xl p-8" id="waitingListForm">
                    <div class="grid md:grid-cols-2 gap-6 mb-6">
                        <div>
                            <label class="block text-sm font-medium mb-2">Your Role *</label>
                            <select name="role" required class="w-full px-4 py-3 rounded-lg bg-white text-secondary-900 border-0 focus:ring-2 focus:ring-accent-400">
                                <option value="">Select your role</option>
                                <option value="landlord">Landlord</option>
                                <option value="property_manager">Property Manager</option>
                                <option value="tenant">Tenant</option>
                            </select>
                        </div>
                        <div>
                            <label class="block text-sm font-medium mb-2">Full Name *</label>
                            <input type="text" name="name" required class="w-full px-4 py-3 rounded-lg bg-white text-secondary-900 border-0 focus:ring-2 focus:ring-accent-400" placeholder="Enter your full name">
                        </div>
                    </div>
                    
                    <div class="grid md:grid-cols-2 gap-6 mb-6">
                        <div>
                            <label class="block text-sm font-medium mb-2">Phone Number *</label>
                            <input type="tel" name="phone" required class="w-full px-4 py-3 rounded-lg bg-white text-secondary-900 border-0 focus:ring-2 focus:ring-accent-400" placeholder="+256 700 000 000">
                        </div>
                        <div>
                            <label class="block text-sm font-medium mb-2">Location *</label>
                            <select name="location" required class="w-full px-4 py-3 rounded-lg bg-white text-secondary-900 border-0 focus:ring-2 focus:ring-accent-400">
                                <option value="">Select location</option>
                                <option value="kampala">Kampala, Uganda</option>
                                <option value="entebbe">Entebbe, Uganda</option>
                                <option value="jinja">Jinja, Uganda</option>
                                <option value="nairobi">Nairobi, Kenya</option>
                                <option value="mombasa">Mombasa, Kenya</option>
                                <option value="dar_es_salaam">Dar es Salaam, Tanzania</option>
                                <option value="other">Other East Africa</option>
                            </select>
                        </div>
                    </div>
                    
                    <div class="mb-8">
                        <label class="block text-sm font-medium mb-2">Number of Properties (for landlords/managers)</label>
                        <input type="number" name="properties" class="w-full px-4 py-3 rounded-lg bg-white text-secondary-900 border-0 focus:ring-2 focus:ring-accent-400" placeholder="Optional - helps us prioritize launch areas">
                    </div>
                    
                    <button type="submit" class="w-full bg-accent-400 hover:bg-accent-500 text-primary-900 font-bold py-4 px-8 rounded-lg transition-colors text-lg">
                        🚀 Secure My Early Access - It's Free
                    </button>
                    
                    <p class="text-sm text-primary-200 mt-4">
                        ✅ No setup fees • ✅ Cancel anytime • ✅ Your deposits are always secure • ✅ Early access benefits
                    </p>
                </form>
            </div>
        </div>
    </div>
</section>

<?= $this->endSection() ?>

<?= $this->section('js') ?>
<script>
    // Initialize animations when DOM is loaded
    document.addEventListener('DOMContentLoaded', function() {
        // Check if user prefers reduced motion
        const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
        const isMobile = window.innerWidth < 768;
        
        if (!prefersReducedMotion && !isMobile) {
            initializeAnimations();
        } else {
            initializeMobileAnimations();
        }
        
        // Form submission handling
        const waitingListForm = document.getElementById('waitingListForm');
        if (waitingListForm) {
            waitingListForm.addEventListener('submit', handleWaitingListSubmission);
        }
    });
    
    function handleWaitingListSubmission(e) {
        e.preventDefault();
        
        // Get form data
        const formData = new FormData(e.target);
        const role = formData.get('role');
        const name = formData.get('name');
        const location = formData.get('location');
        
        // Show success message
        const successMessage = `
            <div class="text-center">
                <div class="text-6xl mb-4">🎉</div>
                <h3 class="text-2xl font-bold mb-4">Welcome to est8Ledger, ${name}!</h3>
                <p class="text-lg mb-4">You're now on our priority waiting list for ${location}.</p>
                <div class="bg-accent-400 text-primary-900 rounded-lg p-4 mb-4">
                    <p class="font-bold">🎁 Early Access Benefits Unlocked:</p>
                    <ul class="text-sm mt-2 space-y-1">
                        <li>• 50% discount on first year fees</li>
                        <li>• Priority customer support</li>
                        <li>• Exclusive beta testing access</li>
                        <li>• Free property inspection training</li>
                    </ul>
                </div>
                <p class="text-primary-200">Expected launch: Q2 2024</p>
                <p class="text-sm text-primary-300 mt-2">We'll WhatsApp you with updates!</p>
            </div>
        `;
        
        e.target.innerHTML = successMessage;
        
        // Track conversion
        if (typeof gtag !== 'undefined') {
            gtag('event', 'waiting_list_signup', {
                'user_role': role,
                'user_location': location,
                'conversion_value': 1,
                'currency': 'UGX'
            });
        }
        
        // Track with GA4 custom event
        if (window.GA4Tracker) {
            window.GA4Tracker.trackEvent('early_access_signup', {
                user_role: role,
                location: location,
                signup_source: 'homepage_waiting_list'
            });
        }
    }
</script>
<?= $this->endSection() ?>
                        </li>
                        <li class="flex items-center">
                            <i class="bi bi-check-circle text-green-500 mr-3"></i>
                            <span class="text-secondary-700">No surprise deductions</span>
                        </li>
                    </ul>
                    <a href="#tenant-signup" class="w-full inline-flex items-center justify-center px-6 py-3 bg-green-600 hover:bg-green-700 text-white font-semibold rounded-lg transition-colors">
                        <i class="bi bi-person mr-2"></i>
                        Tenant Waiting List
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- How It Works Summary -->
<section id="how-it-works" class="py-20 bg-white">
    <div class="container mx-auto px-4">
        <div class="max-w-6xl mx-auto">
            <div class="text-center mb-16 animate-on-scroll">
                <h2 class="text-3xl md:text-4xl font-bold text-secondary-900 mb-6">
                    Simple. Secure. Profitable.
                </h2>
                <p class="text-xl text-secondary-600 max-w-2xl mx-auto">
                    Six steps to transform your security deposit experience
                </p>
            </div>
            
            <div class="grid md:grid-cols-3 gap-8 mb-12">
                <!-- Step 1 -->
                <div class="text-center step-card bg-gradient-to-br from-blue-50 to-primary-50 rounded-2xl p-8 transition-all animate-stagger">
                    <div class="stagger-item">
                        <div class="w-16 h-16 bg-primary-600 rounded-2xl flex items-center justify-center mx-auto mb-6">
                            <i class="bi bi-file-text text-white text-2xl"></i>
                        </div>
                        <div class="w-8 h-8 bg-primary-600 text-white rounded-full flex items-center justify-center mx-auto mb-4 text-sm font-bold">1</div>
                        <h3 class="text-xl font-bold text-secondary-900 mb-4">Digital Agreement</h3>
                        <p class="text-secondary-600">Sign tenancy terms online with blockchain security</p>
                    </div>
                </div>
                
                <!-- Step 2 -->
                <div class="text-center step-card bg-gradient-to-br from-green-50 to-emerald-50 rounded-2xl p-8 transition-all animate-stagger">
                    <div class="stagger-item">
                        <div class="w-16 h-16 bg-green-600 rounded-2xl flex items-center justify-center mx-auto mb-6">
                            <i class="bi bi-shield-check text-white text-2xl"></i>
                        </div>
                        <div class="w-8 h-8 bg-green-600 text-white rounded-full flex items-center justify-center mx-auto mb-4 text-sm font-bold">2</div>
                        <h3 class="text-xl font-bold text-secondary-900 mb-4">Deposit Escrow</h3>
                        <p class="text-secondary-600">Funds held in regulated, secure escrow account</p>
                    </div>
                </div>
                
                <!-- Step 3 -->
                <div class="text-center step-card bg-gradient-to-br from-purple-50 to-indigo-50 rounded-2xl p-8 transition-all animate-stagger">
                    <div class="stagger-item">
                        <div class="w-16 h-16 bg-purple-600 rounded-2xl flex items-center justify-center mx-auto mb-6">
                            <i class="bi bi-camera text-white text-2xl"></i>
                        </div>
                        <div class="w-8 h-8 bg-purple-600 text-white rounded-full flex items-center justify-center mx-auto mb-4 text-sm font-bold">3</div>
                        <h3 class="text-xl font-bold text-secondary-900 mb-4">Move-In Inspection</h3>
                        <p class="text-secondary-600">Digital photo documentation of property condition</p>
                    </div>
                </div>
                
                <!-- Step 4 -->
                <div class="text-center step-card bg-gradient-to-br from-yellow-50 to-orange-50 rounded-2xl p-8 transition-all animate-stagger">
                    <div class="stagger-item">
                        <div class="w-16 h-16 bg-yellow-600 rounded-2xl flex items-center justify-center mx-auto mb-6">
                            <i class="bi bi-graph-up text-white text-2xl"></i>
                        </div>
                        <div class="w-8 h-8 bg-yellow-600 text-white rounded-full flex items-center justify-center mx-auto mb-4 text-sm font-bold">4</div>
                        <h3 class="text-xl font-bold text-secondary-900 mb-4">Profit Sharing</h3>
                        <p class="text-secondary-600">Deposits earn returns while held in escrow</p>
                    </div>
                </div>
                
                <!-- Step 5 -->
                <div class="text-center step-card bg-gradient-to-br from-red-50 to-pink-50 rounded-2xl p-8 transition-all animate-stagger">
                    <div class="stagger-item">
                        <div class="w-16 h-16 bg-red-600 rounded-2xl flex items-center justify-center mx-auto mb-6">
                            <i class="bi bi-search text-white text-2xl"></i>
                        </div>
                        <div class="w-8 h-8 bg-red-600 text-white rounded-full flex items-center justify-center mx-auto mb-4 text-sm font-bold">5</div>
                        <h3 class="text-xl font-bold text-secondary-900 mb-4">Move-Out Inspection</h3>
                        <p class="text-secondary-600">Compare current vs. original property conditions</p>
                    </div>
                </div>
                
                <!-- Step 6 -->
                <div class="text-center step-card bg-gradient-to-br from-teal-50 to-cyan-50 rounded-2xl p-8 transition-all animate-stagger">
                    <div class="stagger-item">
                        <div class="w-16 h-16 bg-teal-600 rounded-2xl flex items-center justify-center mx-auto mb-6">
                            <i class="bi bi-cash-coin text-white text-2xl"></i>
                        </div>
                        <div class="w-8 h-8 bg-teal-600 text-white rounded-full flex items-center justify-center mx-auto mb-4 text-sm font-bold">6</div>
                        <h3 class="text-xl font-bold text-secondary-900 mb-4">Fair Distribution</h3>
                        <p class="text-secondary-600">Automated, instant payout to all parties</p>
                    </div>
                </div>
            </div>
            
            <div class="text-center animate-on-scroll">
                <a href="/how-it-works" class="inline-flex items-center px-8 py-4 bg-primary-600 hover:bg-primary-700 text-white font-semibold rounded-lg transition-all transform hover:scale-105 shadow-lg">
                    <i class="bi bi-arrow-right mr-2"></i>
                    See Detailed Process
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Why Choose est8Ledger -->
<section class="py-20 bg-secondary-900 text-white">
    <div class="container mx-auto px-4">
        <div class="max-w-6xl mx-auto">
            <div class="text-center mb-16 animate-on-scroll">
                <h2 class="text-3xl md:text-4xl font-bold mb-6">
                    Why 1000+ East Africans Trust est8Ledger
                </h2>
            </div>
            
            <div class="grid md:grid-cols-5 gap-8 mb-12">
                <div class="text-center animate-stagger">
                    <div class="stagger-item">
                        <div class="w-16 h-16 bg-primary-600 rounded-2xl flex items-center justify-center mx-auto mb-4">
                            <i class="bi bi-shield-lock text-white text-2xl"></i>
                        </div>
                        <h3 class="font-bold mb-2">Blockchain Security</h3>
                        <p class="text-sm text-secondary-300">Unalterable records on XRPL ledger</p>
                    </div>
                </div>
                
                <div class="text-center animate-stagger">
                    <div class="stagger-item">
                        <div class="w-16 h-16 bg-green-600 rounded-2xl flex items-center justify-center mx-auto mb-4">
                            <i class="bi bi-bank text-white text-2xl"></i>
                        </div>
                        <h3 class="font-bold mb-2">Regulated Escrow</h3>
                        <p class="text-sm text-secondary-300">Licensed financial institution partnerships</p>
                    </div>
                </div>
                
                <div class="text-center animate-stagger">
                    <div class="stagger-item">
                        <div class="w-16 h-16 bg-yellow-600 rounded-2xl flex items-center justify-center mx-auto mb-4">
                            <i class="bi bi-geo-alt text-white text-2xl"></i>
                        </div>
                        <h3 class="font-bold mb-2">Local Expertise</h3>
                        <p class="text-sm text-secondary-300">Built for East African rental laws</p>
                    </div>
                </div>
                
                <div class="text-center animate-stagger">
                    <div class="stagger-item">
                        <div class="w-16 h-16 bg-blue-600 rounded-2xl flex items-center justify-center mx-auto mb-4">
                            <i class="bi bi-phone text-white text-2xl"></i>
                        </div>
                        <h3 class="font-bold mb-2">Mobile-First</h3>
                        <p class="text-sm text-secondary-300">Works on any smartphone</p>
                    </div>
                </div>
                
                <div class="text-center animate-stagger">
                    <div class="stagger-item">
                        <div class="w-16 h-16 bg-purple-600 rounded-2xl flex items-center justify-center mx-auto mb-4">
                            <i class="bi bi-graph-up-arrow text-white text-2xl"></i>
                        </div>
                        <h3 class="font-bold mb-2">24/7 Support</h3>
                        <p class="text-sm text-secondary-300">WhatsApp & phone support</p>
                    </div>
                </div>
            </div>
            
            <!-- Trust Indicators -->
            <div class="text-center animate-on-scroll">
                <div class="inline-flex items-center bg-white/10 backdrop-blur-sm rounded-2xl px-8 py-6">
                    <div class="flex items-center space-x-12">
                        <div class="text-center">
                            <div class="text-3xl font-bold text-accent-400">800+</div>
                            <div class="text-sm text-secondary-300">Properties Protected</div>
                        </div>
                        <div class="w-px h-12 bg-white/20"></div>
                        <div class="text-center">
                            <div class="text-3xl font-bold text-accent-400">2,500+</div>
                            <div class="text-sm text-secondary-300">Active Users</div>
                        </div>
                        <div class="w-px h-12 bg-white/20"></div>
                        <div class="text-center">
                            <div class="text-3xl font-bold text-accent-400">$3.2M+</div>
                            <div class="text-sm text-secondary-300">Deposits Secured</div>
                        </div>
                        <div class="w-px h-12 bg-white/20"></div>
                        <div class="text-center">
                            <div class="text-3xl font-bold text-accent-400">90%</div>
                            <div class="text-sm text-secondary-300">Dispute Reduction</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Testimonials Section -->
<section class="py-20 bg-gradient-to-br from-blue-50 to-indigo-50">
    <div class="container mx-auto px-4">
        <div class="max-w-6xl mx-auto">
            <div class="text-center mb-16 animate-on-scroll">
                <h2 class="text-3xl md:text-4xl font-bold text-secondary-900 mb-6">
                    Real Success Stories from East Africa
                </h2>
                <p class="text-xl text-secondary-600">
                    See how est8Ledger is transforming rental relationships across Uganda, Kenya, and Tanzania
                </p>
            </div>
            
            <div class="grid md:grid-cols-3 gap-8">
                <!-- Testimonial 1 -->
                <div class="testimonial-card rounded-2xl p-8 animate-stagger">
                    <div class="stagger-item">
                        <div class="flex items-center mb-6">
                            <img src="https://images.unsplash.com/photo-1494790108755-2616b612b786?w=60&h=60&fit=crop&crop=face" 
                                 alt="Sarah Nakato, Tenant from Kampala" 
                                 class="w-12 h-12 rounded-full mr-4">
                            <div>
                                <div class="font-semibold text-secondary-900">Sarah Nakato</div>
                                <div class="text-sm text-secondary-600">Tenant, Kampala</div>
                            </div>
                        </div>
                        <div class="flex mb-4">
                            <i class="bi bi-star-fill text-yellow-400"></i>
                            <i class="bi bi-star-fill text-yellow-400"></i>
                            <i class="bi bi-star-fill text-yellow-400"></i>
                            <i class="bi bi-star-fill text-yellow-400"></i>
                            <i class="bi bi-star-fill text-yellow-400"></i>
                        </div>
                        <p class="text-secondary-700 italic mb-4">
                            "First time in 5 years I got my full UGX 2,000,000 deposit back! The photo evidence was crystal clear - no arguments from my landlord."
                        </p>
                        <div class="text-sm text-green-600 font-semibold">
                            💰 Earned UGX 160,000 in profit sharing
                        </div>
                    </div>
                </div>
                
                <!-- Testimonial 2 -->
                <div class="testimonial-card rounded-2xl p-8 animate-stagger">
                    <div class="stagger-item">
                        <div class="flex items-center mb-6">
                            <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=60&h=60&fit=crop&crop=face" 
                                 alt="James Kiprotich, Property Manager from Entebbe" 
                                 class="w-12 h-12 rounded-full mr-4">
                            <div>
                                <div class="font-semibold text-secondary-900">James Kiprotich</div>
                                <div class="text-sm text-secondary-600">Property Manager, Entebbe</div>
                            </div>
                        </div>
                        <div class="flex mb-4">
                            <i class="bi bi-star-fill text-yellow-400"></i>
                            <i class="bi bi-star-fill text-yellow-400"></i>
                            <i class="bi bi-star-fill text-yellow-400"></i>
                            <i class="bi bi-star-fill text-yellow-400"></i>
                            <i class="bi bi-star-fill text-yellow-400"></i>
                        </div>
                        <p class="text-secondary-700 italic mb-4">
                            "Zero deposit disputes in my 20-unit building since using est8Ledger. Plus, profit-sharing earned me an extra UGX 4,000,000 last year."
                        </p>
                        <div class="text-sm text-green-600 font-semibold">
                            📈 90% reduction in disputes
                        </div>
                    </div>
                </div>
                
                <!-- Testimonial 3 -->
                <div class="testimonial-card rounded-2xl p-8 animate-stagger">
                    <div class="stagger-item">
                        <div class="flex items-center mb-6">
                            <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?w=60&h=60&fit=crop&crop=face" 
                                 alt="David Ochieng, Student at Makerere University" 
                                 class="w-12 h-12 rounded-full mr-4">
                            <div>
                                <div class="font-semibold text-secondary-900">David Ochieng</div>
                                <div class="text-sm text-secondary-600">Student, Makerere University</div>
                            </div>
                        </div>
                        <div class="flex mb-4">
                            <i class="bi bi-star-fill text-yellow-400"></i>
                            <i class="bi bi-star-fill text-yellow-400"></i>
                            <i class="bi bi-star-fill text-yellow-400"></i>
                            <i class="bi bi-star-fill text-yellow-400"></i>
                            <i class="bi bi-star-fill text-yellow-400"></i>
                        </div>
                        <p class="text-secondary-700 italic mb-4">
                            "As a student, earning UGX 120,000 on my deposit while studying was incredible. The inspection process was so simple!"
                        </p>
                        <div class="text-sm text-green-600 font-semibold">
                            🎓 Perfect for students
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Testimonials Section -->
<section class="py-20 bg-gradient-to-br from-blue-50 to-indigo-50">
    <div class="container mx-auto px-4">
        <div class="max-w-6xl mx-auto">
            <div class="text-center mb-16 animate-on-scroll">
                <h2 class="text-3xl md:text-4xl font-bold text-secondary-900 mb-6">
                    Real Success Stories from East Africa
                </h2>
                <p class="text-xl text-secondary-600">
                    See how est8Ledger is transforming rental relationships across Uganda, Kenya, and Tanzania
                </p>
            </div>
            
            <div class="grid md:grid-cols-3 gap-8">
                <!-- Testimonial 1 -->
                <div class="testimonial-card rounded-2xl p-8 animate-stagger">
                    <div class="stagger-item">
                        <div class="flex items-center mb-6">
                            <img src="https://images.unsplash.com/photo-1494790108755-2616b612b786?w=60&h=60&fit=crop&crop=face" 
                                 alt="Sarah Nakato, Tenant from Kampala" 
                                 class="w-12 h-12 rounded-full mr-4">
                            <div>
                                <div class="font-semibold text-secondary-900">Sarah Nakato</div>
                                <div class="text-sm text-secondary-600">Tenant, Kampala</div>
                            </div>
                        </div>
                        <div class="flex mb-4">
                            <i class="bi bi-star-fill text-yellow-400"></i>
                            <i class="bi bi-star-fill text-yellow-400"></i>
                            <i class="bi bi-star-fill text-yellow-400"></i>
                            <i class="bi bi-star-fill text-yellow-400"></i>
                            <i class="bi bi-star-fill text-yellow-400"></i>
                        </div>
                        <p class="text-secondary-700 italic mb-4">
                            "First time in 5 years I got my full UGX 2,000,000 deposit back! The photo evidence was crystal clear - no arguments from my landlord."
                        </p>
                        <div class="text-sm text-green-600 font-semibold">
                            💰 Earned UGX 160,000 in profit sharing
                        </div>
                    </div>
                </div>
                
                <!-- Testimonial 2 -->
                <div class="testimonial-card rounded-2xl p-8 animate-stagger">
                    <div class="stagger-item">
                        <div class="flex items-center mb-6">
                            <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=60&h=60&fit=crop&crop=face" 
                                 alt="James Kiprotich, Property Manager from Entebbe" 
                                 class="w-12 h-12 rounded-full mr-4">
                            <div>
                                <div class="font-semibold text-secondary-900">James Kiprotich</div>
                            <div class="text-sm text-secondary-600">Property Manager, Entebbe</div>
                            </div>
                        </div>
                        <div class="flex mb-4">
                            <i class="bi bi-star-fill text-yellow-400"></i>
                            <i class="bi bi-star-fill text-yellow-400"></i>
                            <i class="bi bi-star-fill text-yellow-400"></i>
                            <i class="bi bi-star-fill text-yellow-400"></i>
                            <i class="bi bi-star-fill text-yellow-400"></i>
                        </div>
                        <p class="text-secondary-700 italic mb-4">
                            "Zero deposit disputes in my 20-unit building since using est8Ledger. Plus, profit-sharing earned me an extra UGX 4,000,000 last year."
                        </p>
                        <div class="text-sm text-green-600 font-semibold">
                            📈 90% reduction in disputes
                        </div>
                    </div>
                </div>
                
                <!-- Testimonial 3 -->
                <div class="testimonial-card rounded-2xl p-8 animate-stagger">
                    <div class="stagger-item">
                        <div class="flex items-center mb-6">
                            <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?w=60&h=60&fit=crop&crop=face" 
                                 alt="David Ochieng, Student at Makerere University" 
                                 class="w-12 h-12 rounded-full mr-4">
                            <div>
                                <div class="font-semibold text-secondary-900">David Ochieng</div>
                                <div class="text-sm text-secondary-600">Student, Makerere University</div>
                            </div>
                        </div>
                        <div class="flex mb-4">
                            <i class="bi bi-star-fill text-yellow-400"></i>
                            <i class="bi bi-star-fill text-yellow-400"></i>
                            <i class="bi bi-star-fill text-yellow-400"></i>
                            <i class="bi bi-star-fill text-yellow-400"></i>
                            <i class="bi bi-star-fill text-yellow-400"></i>
                        </div>
                        <p class="text-secondary-700 italic mb-4">
                            "As a student, earning UGX 120,000 on my deposit while studying was incredible. The inspection process
                                <div class="text-sm text-secondary-600">Property Manager, Entebbe</div>
                            </div>
                        </div>
                        <div class="flex mb-4">
                            <i class="bi bi-star-fill text-yellow-400"></i>
                            <i class="bi bi-star-fill text-yellow-400"></i>
                            <i class="bi bi-star-fill text-yellow-400"></i>
                            <i class="bi bi-star-fill text-yellow-400"></i>
                            <i class="bi bi-star-fill text-yellow-400"></i>
                        </div>
                        <p class="text-secondary-700 italic mb-4">
                            "Zero deposit disputes in my 20-unit building since using est8Ledger. Plus, profit-sharing earned me an extra UGX 4,000,000 last year."
                        </p>
                        <div class="text-sm text-green-600 font-semibold">
                            📈 90% reduction in disputes
                        </div>
                    </div>
                </div>
                
                <!-- Testimonial 3 -->
                <div class="testimonial-card rounded-2xl p-8 animate-stagger">
                    <div class="stagger-item">
                        <div class="flex items-center mb-6">
                            <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?w=60&h=60&fit=crop&crop=face" 
                                 alt="David Ochieng, Student at Makerere University" 
                                 class="w-12 h-12 rounded-full mr-4">
                            <div>
                                <div class="font-semibold text-secondary-900">David Ochieng</div>
                                <div class="text-sm text-secondary-600">Student, Makerere University</div>
                            </div>
                        </div>
                        <div class="flex mb-4">
                            <i class="bi bi-star-fill text-yellow-400"></i>
                            <i class="bi bi-star-fill text-yellow-400"></i>
                            <i class="bi bi-star-fill text-yellow-400"></i>
                            <i class="bi bi-star-fill text-yellow-400"></i>
                            <i class="bi bi-star-fill text-yellow-400"></i>
                        </div>
                        <p class="text-secondary-700 italic mb-4">
                            "As a student, earning UGX 120,000 on my deposit while studying was incredible. The inspection process was so simple!"
                        </p>
                        <div class="text-sm text-green-600 font-semibold">
                            🎓 Perfect for students
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div
                        <h3 class="font-bold mb-2">Profit Sharing</h3>
                        <p class="text-sm text-secondary-300">Turn deposits into investments</p>
                    </div>
                </div>
            </div>
            
            <!-- Trust Indicators -->
            <div class="text-center animate-on-scroll">
                <div class="inline-flex items-center bg-white/10 backdrop-blur-sm rounded-full px-8 py-4">
                    <div class="flex items-center space-x-8">
                        <div class="text-center">
                            <div class="text-3xl font-bold text-accent-400">800+</div>
                            <div class="text-sm text-secondary-300">Properties Protected</div>
                        </div>
                        <div class="w-px h-12 bg-white/20"></div>
                        <div class="text-center">
                            <div class="text-3xl font-bold text-accent-400">2,500+</div>
                            <div class="text-sm text-secondary-300">Active Users</div>
                        </div>
                        <div class="w-px h-12 bg-white/20"></div>
                        <div class="text-center">
                            <div class="text-3xl font-bold text-accent-400">$3.2M+</div>
                            <div class="text-sm text-secondary-300">Deposits Secured</div>
                        </div>
                        <div class="w-px h-12 bg-white/20"></div>
                        <div class="text-center">
                            <div class="text-3xl font-bold text-accent-400">90%</div>
                            <div class="text-sm text-secondary-300">Dispute Reduction</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Waiting List Section -->
<section id="waiting-list" class="py-20 bg-primary-600 text-white">
    <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto text-center">
            <div class="animate-on-scroll">
                <h2 class="text-3xl md:text-4xl font-bold mb-6">
                    Ready to Transform Your Security Deposit Experience?
                </h2>
                <p class="text-xl mb-8 text-primary-100">
                    Join 2,500+ landlords and tenants already earning profits and
                        <div class="text-center">
                            <div class="text-2xl font-bold text-accent-400">500+</div>
                            <div class="text-xs text-secondary-300">Properties</div>
                        </div>
                        <div class="w-px h-8 bg-white/20"></div>
                        <div class="text-center">
                            <div class="text-2xl font-bold text-accent-400">1000+</div>
                            <div class="text-xs text-secondary-300">Users</div>
                        </div>
                        <div class="w-px h-8 bg-white/20"></div>
                        <div class="text-center">
                            <div class="text-2xl font-bold text-accent-400">$2M+</div>
                            <div class="text-xs text-secondary-300">Secured</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Testimonials Section -->
<section class="py-20 bg-gradient-to-br from-blue-50 to-indigo-50">
    <div class="container mx-auto px-4">
        <div class="max-w-6xl mx-auto">
            <div class="text-center mb-16 animate-on-scroll">
                <h2 class="text-3xl md:text-4xl font-bold text-secondary-900 mb-6">
                    Real Stories from Uganda's Rental Market
                </h2>
            </div>
            
            <div class="grid md:grid-cols-3 gap-8">
                <!-- Testimonial 1 -->
                <div class="testimonial-card rounded-2xl p-8 animate-stagger">
                    <div class="stagger-item">
                        <div class="flex items-center mb-6">
                            <img src="https://images.unsplash.com/photo-1494790108755-2616b612b786?w=60&h=60&fit=crop&crop=face" 
                                 alt="Sarah M." 
                                 class="w-12 h-12 rounded-full mr-4">
                            <div>
                                <div class="font-semibold text-secondary-900">Sarah M.</div>
                                <div class="text-sm text-secondary-600">Tenant, Kampala</div>
                            </div>
                        </div>
                        <div class="flex mb-4">
                            <i class="bi bi-star-fill text-yellow-400"></i>
                            <i class="bi bi-star-fill text-yellow-400"></i>
                            <i class="bi bi-star-fill text-yellow-400"></i>
                            <i class="bi bi-star-fill text-yellow-400"></i>
                            <i class="bi bi-star-fill text-yellow-400"></i>
                        </div>
                        <p class="text-secondary-700 italic">
                            "I got my full deposit back for the first time in 5 years of renting in Kampala. The photo evidence was clear - no arguments."
                        </p>
                    </div>
                </div>
                
                <!-- Testimonial 2 -->
                <div class="testimonial-card rounded-2xl p-8 animate-stagger">
                    <div class="stagger-item">
                        <div class="flex items-center mb-6">
                            <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=60&h=60&fit=crop&crop=face" 
                                 alt="James K." 
                                 class="w-12 h-12 rounded-full mr-4">
                            <div>
                                <div class="font-semibold text-secondary-900">James K.</div>
                                <div class="text-sm text-secondary-600">Property Manager, Entebbe</div>
                            </div>
                        </div>
                        <div class="flex mb-4">
                            <i class="bi bi-star-fill text-yellow-400"></i>
                            <i class="bi bi-star-fill text-yellow-400"></i>
                            <i class="bi bi-star-fill text-yellow-400"></i>
                            <i class="bi bi-star-fill text-yellow-400"></i>
                            <i class="bi bi-star-fill text-yellow-400"></i>
                        </div>
                        <p class="text-secondary-700 italic">
                            "est8Ledger eliminated deposit disputes in my 20-unit building. Plus, the profit-sharing earned me an extra UGX 500,000 last year."
                        </p>
                    </div>
                </div>
                
                <!-- Testimonial 3 -->
                <div class="testimonial-card rounded-2xl p-8 animate-stagger">
                    <div class="stagger-item">
                        <div class="flex items-center mb-6">
                            <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?w=60&h=60&fit=crop&crop=face" 
                                 alt="David O." 
                                 class="w-12 h-12 rounded-full mr-4">
                            <div>
                                <div class="font-semibold text-secondary-900">David O.</div>
                                <div class="text-sm text-secondary-600">Student, Makerere University</div>
                            </div>
                        </div>
                        <div class="flex mb-4">
                            <i class="bi bi-star-fill text-yellow-400"></i>
                            <i class="bi bi-star-fill text-yellow-400"></i>
                            <i class="bi bi-star-fill text-yellow-400"></i>
                            <i class="bi bi-star-fill text-yellow-400"></i>
                            <i class="bi bi-star-fill text-yellow-400"></i>
                        </div>
                        <p class="text-secondary-700 italic">
                            "As a student, earning money on my deposit while studying was incredible. Transparent and fair."
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Partners & Backing -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto text-center animate-on-scroll">
            <h2 class="text-2xl font-bold text-secondary-900 mb-8">
                Trusted Partners & Regulatory Compliance
            </h2>
            
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8 items-center opacity-60">
                <div class="text-center">
                    <div class="h-12 bg-secondary-200 rounded-lg flex items-center justify-center mb-2">
                        <span class="text-sm font-medium text-secondary-600">Stanbic Bank</span>
                    </div>
                    <p class="text-xs text-secondary-500">Financial Partner</p>
                </div>
                <div class="text-center">
                    <div class="h-12 bg-secondary-200 rounded-lg flex items-center justify-center mb-2">
                        <span class="text-sm font-medium text-secondary-600">XRPL</span>
                    </div>
                    <p class="text-xs text-secondary-500">Blockchain Technology</p>
                </div>
                <div class="text-center">
                    <div class="h-12 bg-secondary-200 rounded-lg flex items-center justify-center mb-2">
                        <span class="text-sm font-medium text-secondary-600">Licensed</span>
                    </div>
                    <p class="text-xs text-secondary-500">Escrow Provider</p>
                </div>
                <div class="text-center">
                    <div class="h-12 bg-secondary-200 rounded-lg flex items-center justify-center mb-2">
                        <span class="text-sm font-medium text-secondary-600">Backed</span>
                    </div>
                    <p class="text-xs text-secondary-500">Investor Support</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="py-20 bg-neutral-50">
    <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto">
            <div class="text-center mb-16 animate-on-scroll">
                <h2 class="text-3xl md:text-4xl font-bold text-secondary-900 mb-6">
                    Common Questions About Deposit Management in Uganda
                </h2>
            </div>
            
            <div class="space-y-6 animate-stagger">
                <div class="bg-white rounded-xl p-6 shadow-sm stagger-item">
                    <h3 class="font-semibold text-secondary-900 mb-3">Is this legal under Ugandan rental law?</h3>
                    <p class="text-secondary-600">Yes, we comply with the Landlord and Tenant Act 2022 and work with licensed financial institutions.</p>
                </div>
                
                <div class="bg-white rounded-xl p-6 shadow-sm stagger-item">
                    <h3 class="font-semibold text-secondary-900 mb-3">What happens if there's no internet for inspections?</h3>
                    <p class="text-secondary-600">Our mobile app works offline and syncs when connected. We also provide SMS updates.</p>
                </div>
                
                <div class="bg-white rounded-xl p-6 shadow-sm stagger-item">
                    <h3 class="font-semibold text-secondary-900 mb-3">How much profit can deposits earn?</h3>
                    <p class="text-secondary-600">Returns vary, but our conservative investments typically earn 8-12% annually, shared between all parties.</p>
                </div>
                
                <div class="bg-white rounded-xl p-6 shadow-sm stagger-item">
                    <h3 class="font-semibold text-secondary-900 mb-3">What if my landlord doesn't want to use est8Ledger?</h3>
                    <p class="text-secondary-600">We're building landlord education programs. Many join after seeing reduced disputes and additional income.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Waiting List Section -->
<section id="waiting-list" class="py-20 bg-primary-600 text-white">
    <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto text-center">
            <div class="animate-on-scroll">
                <h2 class="text-3xl md:text-4xl font-bold mb-6">
                    Ready to End Deposit Disputes Forever?
                </h2>
                <p class="text-xl mb-12 text-primary-100">
                    Join 1000+ landlords and tenants already using est8Ledger across East Africa.
                </p>
            </div>
            
            <div class="max-w-2xl mx-auto animate-on-scroll">
                <form class="bg-white/10 backdrop-blur-sm rounded-2xl p-8">
                    <div class="grid md:grid-cols-2 gap-6 mb-6">
                        <div>
                            <label class="block text-sm font-medium mb-2">Your Role</label>
                            <select class="w-full px-4 py-3 rounded-lg bg-white text-secondary-900 border-0 focus:ring-2 focus:ring-accent-400">
                                <option>Select your role</option>
                                <option>Landlord</option>
                                <option>Property Manager</option>
                                <option>Tenant</option>
                            </select>
                        </div>
                        <div>
                            <label class="block text-sm font-medium mb-2">Full Name</label>
                            <input type="text" class="w-full px-4 py-3 rounded-lg bg-white text-secondary-900 border-0 focus:ring-2 focus:ring-accent-400" placeholder="Enter your full name">
                        </div>
                    </div>
                    
                    <div class="grid md:grid-cols-2 gap-6 mb-6">
                        <div>
                            <label class="block text-sm font-medium mb-2">Phone Number</label>
                            <input type="tel" class="w-full px-4 py-3 rounded-lg bg-white text-secondary-900 border-0 focus:ring-2 focus:ring-accent-400" placeholder="+256 700 000 000">
                        </div>
                        <div>
                            <label class="block text-sm font-medium mb-2">Location</label>
                            <input type="text" class="w-full px-4 py-3 rounded-lg bg-white text-secondary-900 border-0 focus:ring-2 focus:ring-accent-400" placeholder="City/District">
                        </div>
                    </div>
                    
                    <div class="mb-8">
                        <label class="block text-sm font-medium mb-2">Number of Properties (for landlords)</label>
                        <input type="number" class="w-full px-4 py-3 rounded-lg bg-white text-secondary-900 border-0 focus:ring-2 focus:ring-accent-400" placeholder="Optional">
                    </div>
                    
                    <button type="submit" class="w-full bg-accent-400 hover:bg-accent-500 text-primary-900 font-bold py-4 px-8 rounded-lg transition-colors text-lg">
                        Join 1000+ Users - It's Free
                    </button>
                    
                    <p class="text-sm text-primary-200 mt-4">
                        No setup fees • Cancel anytime • Your deposits are always secure
                    </p>
                </form>
            </div>
        </div>
    </div>
</section>

<?= $this->endSection() ?>

<?= $this->section('js') ?>
<script>
    // Initialize animations when DOM is loaded
    document.addEventListener('DOMContentLoaded', function() {
        // Check if user prefers reduced motion
        const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
        const isMobile = window.innerWidth < 768;
        
        if (!prefersReducedMotion && !isMobile) {
            initializeAnimations();
        } else {
            initializeMobileAnimations();
        }
        
        // Form submission handling
        const waitingListForm = document.querySelector('#waiting-list form');
        if (waitingListForm) {
            waitingListForm.addEventListener('submit', handleWaitingListSubmission);
        }
    });
    
    function handleWaitingListSubmission(e) {
        e.preventDefault();
        
        // Get form data
        const formData = new FormData(e.target);
        const role = formData.get('role');
        const name = formData.get('name');
        
        // Show success message
        const successMessage = `
            <div class="text-center">
                <div class="text-6xl mb-4">🎉</div>
                <h3 class="text-2xl font-bold mb-4">Welcome to est8Ledger!</h3>
                <p class="text-lg mb-4">You're on our waiting list. We'll notify you when we launch in your location.</p>
                <p class="text-primary-200">Expected launch: Q2 2024</p>
            </div>
        `;
        
        e.target.innerHTML = successMessage;
        
        // Track conversion
        if (typeof gtag !== 'undefined') {
            gtag('event', 'waiting_list_signup', {
                'user_role': role,
                'conversion_value': 1
            });
        }
    }
</script>
<?= $this->endSection() ?>
