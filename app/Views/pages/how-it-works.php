<?= $this->extend('layouts/main') ?>

<?= $this->section('css') ?>
<style>
    .step-detail-card {
        background: linear-gradient(135deg, rgba(255,255,255,0.9) 0%, rgba(255,255,255,0.7) 100%);
        backdrop-filter: blur(10px);
        border: 1px solid rgba(255,255,255,0.2);
    }
    
    .step-number {
        background: linear-gradient(135deg, #0d06c8 0%, #350bbf 100%);
    }
    
    .process-flow::before {
        content: '';
        position: absolute;
        top: 50%;
        left: 0;
        right: 0;
        height: 2px;
        background: linear-gradient(90deg, #0d06c8 0%, #10B981 100%);
        z-index: -1;
    }
</style>
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<!-- Hero Section -->
<section class="bg-gradient-to-br from-primary-600 to-primary-800 text-white py-20 md:py-32" data-page-type="how-it-works">
    <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto text-center">
            <h1 class="text-4xl md:text-6xl font-bold mb-6 animate-on-scroll">
                How est8Ledger Transforms Security Deposits
            </h1>
            <p class="text-xl md:text-2xl mb-8 text-primary-100 animate-on-scroll">
                Six simple steps to transparent, profitable deposit management
            </p>
            
            <!-- Process Overview -->
            <div class="relative process-flow mt-16 animate-on-scroll">
                <div class="flex justify-between items-center">
                    <div class="w-12 h-12 step-number rounded-full flex items-center justify-center text-white font-bold z-10">1</div>
                    <div class="w-12 h-12 step-number rounded-full flex items-center justify-center text-white font-bold z-10">2</div>
                    <div class="w-12 h-12 step-number rounded-full flex items-center justify-center text-white font-bold z-10">3</div>
                    <div class="w-12 h-12 step-number rounded-full flex items-center justify-center text-white font-bold z-10">4</div>
                    <div class="w-12 h-12 step-number rounded-full flex items-center justify-center text-white font-bold z-10">5</div>
                    <div class="w-12 h-12 step-number rounded-full flex items-center justify-center text-white font-bold z-10">6</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Step 1: Digital Tenancy Agreement -->
<section class="py-20 bg-gradient-to-br from-blue-50 to-primary-50">
    <div class="container mx-auto px-4">
        <div class="max-w-6xl mx-auto">
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div class="animate-on-scroll">
                    <div class="flex items-center mb-6">
                        <div class="w-16 h-16 bg-primary-600 rounded-2xl flex items-center justify-center mr-4">
                            <i class="bi bi-file-text text-white text-2xl"></i>
                        </div>
                        <div class="w-12 h-12 step-number rounded-full flex items-center justify-center text-white font-bold text-lg">1</div>
                    </div>
                    
                    <h2 class="text-3xl md:text-4xl font-bold text-secondary-900 mb-6">
                        Sign Your Agreement Online
                    </h2>
                    
                    <p class="text-lg text-secondary-600 mb-8 leading-relaxed">
                        Both landlord and tenant sign a digital tenancy agreement that includes property condition standards, deposit amount and terms, profit-sharing percentages, and move-out requirements. Everything is recorded on the blockchain for transparency.
                    </p>
                    
                    <ul class="space-y-3 mb-8">
                        <li class="flex items-center">
                            <i class="bi bi-check-circle text-green-500 mr-3"></i>
                            <span class="text-secondary-700">Property condition standards defined</span>
                        </li>
                        <li class="flex items-center">
                            <i class="bi bi-check-circle text-green-500 mr-3"></i>
                            <span class="text-secondary-700">Deposit amount and terms agreed</span>
                        </li>
                        <li class="flex items-center">
                            <i class="bi bi-check-circle text-green-500 mr-3"></i>
                            <span class="text-secondary-700">Profit-sharing percentages set</span>
                        </li>
                        <li class="flex items-center">
                            <i class="bi bi-check-circle text-green-500 mr-3"></i>
                            <span class="text-secondary-700">Blockchain-secured documentation</span>
                        </li>
                    </ul>
                    
                    <a href="#demo" class="inline-flex items-center px-6 py-3 bg-primary-600 hover:bg-primary-700 text-white font-semibold rounded-lg transition-colors">
                        <i class="bi bi-file-text mr-2"></i>
                        See Sample Agreement
                    </a>
                </div>
                
                <div class="animate-scale">
                    <div class="step-detail-card rounded-2xl p-8 shadow-xl">
                        <img src="https://images.unsplash.com/photo-1450101499163-c8848c66ca85?w=600&h=400&fit=crop" 
                             alt="Digital contract signing" 
                             class="rounded-xl w-full mb-6">
                        <div class="text-center">
                            <h3 class="font-bold text-secondary-900 mb-2">Digital Agreement</h3>
                            <p class="text-sm text-secondary-600">Secure, transparent, legally binding</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Step 2: Secure Deposit Escrow -->
<section class="py-20 bg-white">
    <div class="container mx-auto px-4">
        <div class="max-w-6xl mx-auto">
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div class="animate-scale md:order-1">
                    <div class="step-detail-card rounded-2xl p-8 shadow-xl">
                        <img src="https://images.unsplash.com/photo-1563013544-824ae1b704d3?w=600&h=400&fit=crop" 
                             alt="Secure bank vault" 
                             class="rounded-xl w-full mb-6">
                        <div class="text-center">
                            <h3 class="font-bold text-secondary-900 mb-2">Regulated Escrow</h3>
                            <p class="text-sm text-secondary-600">Licensed, insured, secure</p>
                        </div>
                    </div>
                </div>
                
                <div class="animate-on-scroll md:order-2">
                    <div class="flex items-center mb-6">
                        <div class="w-16 h-16 bg-green-600 rounded-2xl flex items-center justify-center mr-4">
                            <i class="bi bi-shield-check text-white text-2xl"></i>
                        </div>
                        <div class="w-12 h-12 step-number rounded-full flex items-center justify-center text-white font-bold text-lg">2</div>
                    </div>
                    
                    <h2 class="text-3xl md:text-4xl font-bold text-secondary-900 mb-6">
                        Deposit Goes to Regulated Escrow
                    </h2>
                    
                    <p class="text-lg text-secondary-600 mb-8 leading-relaxed">
                        Your security deposit is held in a licensed escrow account, not with the landlord. It's regulated by financial institutions, blockchain-recorded, and neither party can access without agreement. Fully insured and protected.
                    </p>
                    
                    <ul class="space-y-3 mb-8">
                        <li class="flex items-center">
                            <i class="bi bi-check-circle text-green-500 mr-3"></i>
                            <span class="text-secondary-700">Regulated financial institution</span>
                        </li>
                        <li class="flex items-center">
                            <i class="bi bi-check-circle text-green-500 mr-3"></i>
                            <span class="text-secondary-700">Blockchain-recorded transaction</span>
                        </li>
                        <li class="flex items-center">
                            <i class="bi bi-check-circle text-green-500 mr-3"></i>
                            <span class="text-secondary-700">Neither party can access alone</span>
                        </li>
                        <li class="flex items-center">
                            <i class="bi bi-check-circle text-green-500 mr-3"></i>
                            <span class="text-secondary-700">Fully insured and protected</span>
                        </li>
                    </ul>
                    
                    <a href="#security" class="inline-flex items-center px-6 py-3 bg-green-600 hover:bg-green-700 text-white font-semibold rounded-lg transition-colors">
                        <i class="bi bi-shield-check mr-2"></i>
                        Learn About Security
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Step 3: Move-In Inspection -->
<section class="py-20 bg-gradient-to-br from-purple-50 to-indigo-50">
    <div class="container mx-auto px-4">
        <div class="max-w-6xl mx-auto">
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div class="animate-on-scroll">
                    <div class="flex items-center mb-6">
                        <div class="w-16 h-16 bg-purple-600 rounded-2xl flex items-center justify-center mr-4">
                            <i class="bi bi-camera text-white text-2xl"></i>
                        </div>
                        <div class="w-12 h-12 step-number rounded-full flex items-center justify-center text-white font-bold text-lg">3</div>
                    </div>
                    
                    <h2 class="text-3xl md:text-4xl font-bold text-secondary-900 mb-6">
                        Document Property Condition
                    </h2>
                    
                    <p class="text-lg text-secondary-600 mb-8 leading-relaxed">
                        Our mobile app guides you through a comprehensive inspection. Photo every room and fixture, note existing damage or wear, both parties approve the record, and it's stored permanently on blockchain.
                    </p>
                    
                    <ul class="space-y-3 mb-8">
                        <li class="flex items-center">
                            <i class="bi bi-check-circle text-green-500 mr-3"></i>
                            <span class="text-secondary-700">Photo every room and fixture</span>
                        </li>
                        <li class="flex items-center">
                            <i class="bi bi-check-circle text-green-500 mr-3"></i>
                            <span class="text-secondary-700">Note existing damage or wear</span>
                        </li>
                        <li class="flex items-center">
                            <i class="bi bi-check-circle text-green-500 mr-3"></i>
                            <span class="text-secondary-700">Both parties approve record</span>
                        </li>
                        <li class="flex items-center">
                            <i class="bi bi-check-circle text-green-500 mr-3"></i>
                            <span class="text-secondary-700">Stored permanently on blockchain</span>
                        </li>
                    </ul>
                    
                    <a href="#demo-inspection" class="inline-flex items-center px-6 py-3 bg-purple-600 hover:bg-purple-700 text-white font-semibold rounded-lg transition-colors">
                        <i class="bi bi-camera mr-2"></i>
                        Try Demo Inspection
                    </a>
                </div>
                
                <div class="animate-scale">
                    <div class="step-detail-card rounded-2xl p-8 shadow-xl">
                        <img src="https://images.unsplash.com/photo-1560472354-b33ff0c44a43?w=600&h=400&fit=crop" 
                             alt="Property inspection with mobile app" 
                             class="rounded-xl w-full mb-6">
                        <div class="text-center">
                            <h3 class="font-bold text-secondary-900 mb-2">Mobile Inspection</h3>
                            <p class="text-sm text-secondary-600">Comprehensive, guided, transparent</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Step 4: Profit-Sharing Investment -->
<section class="py-20 bg-white">
    <div class="container mx-auto px-4">
        <div class="max-w-6xl mx-auto">
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div class="animate-scale md:order-1">
                    <div class="step-detail-card rounded-2xl p-8 shadow-xl">
                        <img src="https://images.unsplash.com/photo-1579621970563-ebec7560ff3e?w=600&h=400&fit=crop" 
                             alt="Growing investment chart" 
                             class="rounded-xl w-full mb-6">
                        <div class="text-center">
                            <h3 class="font-bold text-secondary-900 mb-2">Profit Sharing</h3>
                            <p class="text-sm text-secondary-600">8-12% annual returns</p>
                        </div>
                    </div>
                </div>
                
                <div class="animate-on-scroll md:order-2">
                    <div class="flex items-center mb-6">
                        <div class="w-16 h-16 bg-yellow-600 rounded-2xl flex items-center justify-center mr-4">
                            <i class="bi bi-graph-up text-white text-2xl"></i>
                        </div>
                        <div class="w-12 h-12 step-number rounded-full flex items-center justify-center text-white font-bold text-lg">4</div>
                    </div>
                    
                    <h2 class="text-3xl md:text-4xl font-bold text-secondary-900 mb-6">
                        Your Deposit Earns Money
                    </h2>
                    
                    <p class="text-lg text-secondary-600 mb-8 leading-relaxed">
                        While held in escrow, deposits are invested in low-risk opportunities. Conservative investment portfolio with 8-12% annual returns typical. Profits shared: 40% tenant, 40% landlord, 20% est8Ledger, with monthly earnings reports.
                    </p>
                    
                    <ul class="space-y-3 mb-8">
                        <li class="flex items-center