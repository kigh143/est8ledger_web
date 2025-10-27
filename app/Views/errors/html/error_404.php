<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page Not Found - est8Ledger</title>
    <meta name="description" content="The page you're looking for doesn't exist. Return to est8Ledger's security deposit management platform.">
    <meta name="robots" content="noindex, nofollow">
    
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="/favicon.ico">
    
    <!-- Fonts and Icons -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Custom Tailwind Config -->
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: {
                            50: '#eff6ff',
                            100: '#dbeafe',
                            200: '#bfdbfe',
                            300: '#93c5fd',
                            400: '#60a5fa',
                            500: '#3b82f6',
                            600: '#2563eb',
                            700: '#1d4ed8',
                            800: '#1e40af',
                            900: '#1e3a8a'
                        },
                        secondary: {
                            50: '#f8fafc',
                            100: '#f1f5f9',
                            200: '#e2e8f0',
                            300: '#cbd5e1',
                            400: '#94a3b8',
                            500: '#64748b',
                            600: '#475569',
                            700: '#334155',
                            800: '#1e293b',
                            900: '#0f172a'
                        },
                        accent: {
                            400: '#a3e635',
                            500: '#84cc16',
                            600: '#65a30d'
                        }
                    },
                    fontFamily: {
                        'sans': ['Inter', 'system-ui', 'sans-serif']
                    }
                }
            }
        }
    </script>
    
    <style>
        body {
            font-family: 'Inter', system-ui, -apple-system, sans-serif;
            font-feature-settings: 'cv02', 'cv03', 'cv04', 'cv11';
            letter-spacing: -0.01em;
        }
        
        .animate-float {
            animation: float 6s ease-in-out infinite;
        }
        
        .animate-float-delayed {
            animation: float 6s ease-in-out infinite;
            animation-delay: -3s;
        }
        
        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-20px); }
        }
        
        .gradient-bg {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }
        
        .glass-effect {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }
        
        .search-input:focus {
            outline: none;
            box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.1);
        }
    </style>
</head>
<body class="bg-gradient-to-br from-blue-50 via-white to-indigo-50 min-h-screen">
    <!-- Header -->
    <header class="bg-white/80 backdrop-blur-sm border-b border-gray-200 sticky top-0 z-50">
        <nav class="container mx-auto px-4 py-4">
            <div class="flex justify-between items-center">
                <a href="/" class="flex items-center hover:opacity-80 transition-opacity">
                    <img src="/long_logo.png" alt="est8Ledger" class="h-8">
                </a>
                <div class="hidden md:flex space-x-6 items-center">
                    <a href="/" class="text-secondary-600 hover:text-primary-700 transition-colors font-medium">Home</a>
                    <a href="/blogs" class="text-secondary-600 hover:text-primary-700 transition-colors font-medium">Blog</a>
                    <a href="/contact" class="text-secondary-600 hover:text-primary-700 transition-colors font-medium">Contact</a>
                </div>
                <!-- Mobile menu button -->
                <button class="md:hidden text-secondary-600 hover:text-primary-700" onclick="toggleMobileMenu()">
                    <i class="bi bi-list text-2xl"></i>
                </button>
            </div>
            
            <!-- Mobile menu -->
            <div id="mobile-menu" class="hidden md:hidden mt-4 pb-4 border-t border-gray-200 pt-4">
                <div class="flex flex-col space-y-3">
                    <a href="/" class="text-secondary-600 hover:text-primary-700 transition-colors font-medium">Home</a>
                    <a href="/blogs" class="text-secondary-600 hover:text-primary-700 transition-colors font-medium">Blog</a>
                    <a href="/contact" class="text-secondary-600 hover:text-primary-700 transition-colors font-medium">Contact</a>
                </div>
            </div>
        </nav>
    </header>

    <!-- Main Content -->
    <main class="flex-1 flex items-center justify-center px-4 py-16">
        <div class="max-w-4xl mx-auto text-center">
            <!-- Floating Elements -->
            <div class="relative mb-12">
                <!-- Background decorative elements -->
                <div class="absolute -top-10 -left-10 w-20 h-20 bg-primary-100 rounded-full animate-float opacity-60"></div>
                <div class="absolute -top-5 -right-15 w-16 h-16 bg-accent-400 rounded-full animate-float-delayed opacity-40"></div>
                <div class="absolute -bottom-5 left-1/4 w-12 h-12 bg-secondary-200 rounded-full animate-float opacity-50"></div>
                
                <!-- Main 404 Display -->
                <div class="relative">
                    <div class="text-8xl md:text-9xl font-bold text-primary-600 mb-4 relative">
                        4
                        <span class="inline-block animate-float">0</span>
                        4
                        
                        <!-- Decorative icons -->
                        <i class="bi bi-search absolute -top-4 -right-8 text-3xl text-secondary-300 animate-float-delayed"></i>
                        <i class="bi bi-question-circle absolute -bottom-2 -left-6 text-2xl text-accent-500 animate-float"></i>
                    </div>
                </div>
            </div>

            <!-- Error Message -->
            <div class="mb-12">
                <h1 class="text-3xl md:text-4xl font-bold text-secondary-900 mb-4">
                    Oops! Page Not Found
                </h1>
                <p class="text-lg text-secondary-600 mb-6 max-w-2xl mx-auto leading-relaxed">
                    The page you're looking for seems to have moved, been deleted, or doesn't exist. 
                    Don't worry – let's get you back on track with est8Ledger's security deposit management platform.
                </p>
                
                <?php if (ENVIRONMENT !== 'production' && isset($message)) : ?>
                    <div class="bg-red-50 border border-red-200 rounded-lg p-4 mb-6 max-w-2xl mx-auto">
                        <div class="flex items-start">
                            <i class="bi bi-exclamation-triangle text-red-500 text-xl mr-3 mt-0.5"></i>
                            <div class="text-left">
                                <h3 class="text-sm font-medium text-red-800 mb-1">Development Error Details:</h3>
                                <p class="text-sm text-red-700"><?= nl2br(esc($message)) ?></p>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
            </div>

            <!-- Search Box -->
            <div class="mb-12 max-w-md mx-auto">
                <div class="relative">
                    <input type="text" 
                           placeholder="Search for pages, blogs, or resources..." 
                           class="search-input w-full px-6 py-4 pr-12 border border-gray-300 rounded-full text-gray-700 bg-white/80 backdrop-blur-sm focus:border-primary-500 transition-colors"
                           onkeypress="handleSearch(event)">
                    <button onclick="performSearch()" 
                            class="absolute right-2 top-1/2 transform -translate-y-1/2 bg-primary-600 hover:bg-primary-700 text-white p-2 rounded-full transition-colors">
                        <i class="bi bi-search"></i>
                    </button>
                </div>
            </div>

            <!-- Action Buttons -->
            <div class="flex flex-col sm:flex-row gap-4 justify-center mb-16">
                <a href="/" 
                   class="inline-flex items-center px-8 py-3 bg-primary-600 hover:bg-primary-700 text-white font-semibold rounded-lg transition-colors shadow-lg hover:shadow-xl">
                    <i class="bi bi-house mr-2"></i>
                    Back to Home
                </a>
                
                <a href="/blogs" 
                   class="inline-flex items-center px-8 py-3 bg-white hover:bg-gray-50 text-primary-600 font-semibold rounded-lg border-2 border-primary-600 transition-colors">
                    <i class="bi bi-journal-text mr-2"></i>
                    Browse Blog
                </a>
                
                <a href="/contact" 
                   class="inline-flex items-center px-8 py-3 bg-accent-500 hover:bg-accent-600 text-white font-semibold rounded-lg transition-colors">
                    <i class="bi bi-chat-dots mr-2"></i>
                    Get Help
                </a>
            </div>

            <!-- Popular Pages -->
            <div class="max-w-3xl mx-auto">
                <h2 class="text-xl font-semibold text-secondary-900 mb-6">Popular Pages</h2>
                <div class="grid md:grid-cols-3 gap-6">
                    <!-- Home -->
                    <a href="/" class="group bg-white/60 backdrop-blur-sm rounded-xl p-6 border border-gray-200 hover:border-primary-300 hover:shadow-lg transition-all">
                        <div class="w-12 h-12 bg-primary-100 rounded-lg flex items-center justify-center mb-4 group-hover:bg-primary-200 transition-colors">
                            <i class="bi bi-house text-primary-600 text-xl"></i>
                        </div>
                        <h3 class="font-semibold text-secondary-900 mb-2">Homepage</h3>
                        <p class="text-sm text-secondary-600">Learn about our security deposit management platform</p>
                    </a>

                    <!-- Blog -->
                    <a href="/blogs" class="group bg-white/60 backdrop-blur-sm rounded-xl p-6 border border-gray-200 hover:border-primary-300 hover:shadow-lg transition-all">
                        <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mb-4 group-hover:bg-blue-200 transition-colors">
                            <i class="bi bi-journal-text text-blue-600 text-xl"></i>
                        </div>
                        <h3 class="font-semibold text-secondary-900 mb-2">Blog & Insights</h3>
                        <p class="text-sm text-secondary-600">Rental industry insights and expert advice</p>
                    </a>

                    <!-- Contact -->
                    <a href="/contact" class="group bg-white/60 backdrop-blur-sm rounded-xl p-6 border border-gray-200 hover:border-primary-300 hover:shadow-lg transition-all">
                        <div class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center mb-4 group-hover:bg-green-200 transition-colors">
                            <i class="bi bi-chat-dots text-green-600 text-xl"></i>
                        </div>
                        <h3 class="font-semibold text-secondary-900 mb-2">Contact Support</h3>
                        <p class="text-sm text-secondary-600">Get help with your account or questions</p>
                    </a>
                </div>
            </div>

            <!-- Additional Resources -->
            <div class="mt-16 pt-8 border-t border-gray-200">
                <h3 class="text-lg font-semibold text-secondary-900 mb-4">Need More Help?</h3>
                <div class="flex flex-wrap justify-center gap-6 text-sm">
                    <a href="/survey/tenants" class="text-primary-600 hover:text-primary-800 transition-colors">
                        <i class="bi bi-person mr-1"></i>
                        Tenant Survey
                    </a>
                    <a href="/survey/landlords" class="text-primary-600 hover:text-primary-800 transition-colors">
                        <i class="bi bi-building mr-1"></i>
                        Landlord Survey
                    </a>
                    <a href="/privacy-policy" class="text-primary-600 hover:text-primary-800 transition-colors">
                        <i class="bi bi-shield-check mr-1"></i>
                        Privacy Policy
                    </a>
                    <a href="/terms-of-use" class="text-primary-600 hover:text-primary-800 transition-colors">
                        <i class="bi bi-file-text mr-1"></i>
                        Terms of Use
                    </a>
                </div>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-secondary-900 text-white py-8 mt-16">
        <div class="container mx-auto px-4 text-center">
            <div class="flex justify-center items-center mb-4">
                <img src="/long_logo.png" alt="est8Ledger" class="h-8 brightness-0 invert">
            </div>
            <p class="text-secondary-400 text-sm mb-4">
                Revolutionary security deposit management for Uganda & East Africa
            </p>
            <div class="flex justify-center space-x-6 text-sm">
                <a href="/" class="text-secondary-400 hover:text-white transition-colors">Home</a>
                <a href="/blogs" class="text-secondary-400 hover:text-white transition-colors">Blog</a>
                <a href="/contact" class="text-secondary-400 hover:text-white transition-colors">Contact</a>
                <a href="/privacy-policy" class="text-secondary-400 hover:text-white transition-colors">Privacy</a>
            </div>
            <div class="mt-4 pt-4 border-t border-secondary-800">
                <p class="text-secondary-500 text-xs">
                    &copy; <?= date('Y') ?> est8Ledger. All rights reserved.
                </p>
            </div>
        </div>
    </footer>

    <!-- JavaScript -->
    <script>
        function toggleMobileMenu() {
            const menu = document.getElementById('mobile-menu');
            menu.classList.toggle('hidden');
        }

        function handleSearch(event) {
            if (event.key === 'Enter') {
                performSearch();
            }
        }

        function performSearch() {
            const searchInput = document.querySelector('.search-input');
            const query = searchInput.value.trim();
            
            if (query) {
                // Simple search logic - redirect to Google site search or implement your own
                const searchUrl = `https://www.google.com/search?q=site:est8ledger.com ${encodeURIComponent(query)}`;
                window.open(searchUrl, '_blank');
            }
        }

        // Add some interactive animations
        document.addEventListener('DOMContentLoaded', function() {
            // Animate elements on scroll
            const observerOptions = {
                threshold: 0.1,
                rootMargin: '0px 0px -50px 0px'
            };

            const observer = new IntersectionObserver(function(entries) {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.style.opacity = '1';
                        entry.target.style.transform = 'translateY(0)';
                    }
                });
            }, observerOptions);

            // Observe all cards
            document.querySelectorAll('.group').forEach(card => {
                card.style.opacity = '0';
                card.style.transform = 'translateY(20px)';
                card.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
                observer.observe(card);
            });

            // Add click tracking for analytics
            document.querySelectorAll('a').forEach(link => {
                link.addEventListener('click', function() {
                    // Track 404 page interactions
                    if (typeof gtag !== 'undefined') {
                        gtag('event', '404_page_interaction', {
                            'link_text': this.textContent.trim(),
                            'link_url': this.href
                        });
                    }
                });
            });
        });

        // Add keyboard navigation
        document.addEventListener('keydown', function(event) {
            if (event.key === 'Escape') {
                const mobileMenu = document.getElementById('mobile-menu');
                if (!mobileMenu.classList.contains('hidden')) {
                    mobileMenu.classList.add('hidden');
                }
            }
        });
    </script>

    <!-- Analytics tracking for 404 pages -->
    <script>
        // Track 404 page views
        if (typeof gtag !== 'undefined') {
            gtag('event', 'page_view', {
                'page_title': 'Page Not Found',
                'page_location': window.location.href,
                'custom_parameter': '404_error'
            });
        }
    </script>
</body>
</html>
