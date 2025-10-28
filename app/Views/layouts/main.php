<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <script async src="https://www.googletagmanager.com/gtag/js?id=G-T4Z9HEBQ3Z"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'G-T4Z9HEBQ3Z', {
            // Enable debug mode for testing (remove in production)
            debug_mode: <?= ENVIRONMENT === 'development' ? 'true' : 'false' ?>,
            send_page_view: true
        });
    </script>

    <!-- GA4 Event Tracking System -->
    <script>
        // Modular GA4 Event Tracking System
        window.GA4Tracker = {
            // Core tracking function
            trackEvent: function(eventName, parameters = {}) {
                if (typeof gtag === 'undefined') {
                    console.warn('GA4: gtag not loaded');
                    return;
                }

                // Ensure event name follows GA4 best practices
                const cleanEventName = eventName.toLowerCase().replace(/[^a-z0-9_]/g, '_').substring(0, 40);
                
                // Add default parameters
                const defaultParams = {
                    page_title: document.title,
                    page_location: window.location.href,
                    timestamp: new Date().toISOString()
                };

                const eventParams = { ...defaultParams, ...parameters };

                // Send event to GA4
                gtag('event', cleanEventName, eventParams);

                // Debug logging
                if (<?= ENVIRONMENT === 'development' ? 'true' : 'false' ?>) {
                    console.log('GA4 Event Tracked:', cleanEventName, eventParams);
                }
            },

            // Form submission tracking
            trackFormSubmission: function(formType, formId = null, additionalData = {}) {
                this.trackEvent('form_submit', {
                    form_type: formType,
                    form_id: formId,
                    ...additionalData
                });
            },

            // CTA click tracking
            trackCTAClick: function(ctaName, ctaLocation, ctaType = 'button') {
                this.trackEvent('cta_click', {
                    cta_name: ctaName,
                    cta_location: ctaLocation,
                    cta_type: ctaType
                });
            },

            // Navigation tracking
            trackNavigation: function(linkText, destination, navType = 'menu') {
                this.trackEvent('navigation_click', {
                    link_text: linkText,
                    destination: destination,
                    nav_type: navType
                });
            },

            // Modal interactions
            trackModalInteraction: function(modalName, action) {
                this.trackEvent('modal_interaction', {
                    modal_name: modalName,
                    action: action
                });
            },

            // Blog interactions
            trackBlogInteraction: function(action, blogTitle = null, blogSlug = null) {
                this.trackEvent('blog_interaction', {
                    action: action,
                    blog_title: blogTitle,
                    blog_slug: blogSlug
                });
            },

            // Survey interactions
            trackSurveyInteraction: function(surveyId, action, questionId = null) {
                this.trackEvent('survey_interaction', {
                    survey_id: surveyId,
                    action: action,
                    question_id: questionId
                });
            },

            // Scroll depth tracking
            trackScrollDepth: function(percentage) {
                this.trackEvent('scroll_depth', {
                    scroll_percentage: percentage
                });
            },

            // File download tracking
            trackFileDownload: function(fileName, fileType) {
                this.trackEvent('file_download', {
                    file_name: fileName,
                    file_type: fileType
                });
            },

            // Error tracking
            trackError: function(errorType, errorMessage, errorLocation = null) {
                this.trackEvent('error_occurred', {
                    error_type: errorType,
                    error_message: errorMessage,
                    error_location: errorLocation
                });
            }
        };

        // Auto-track page views with enhanced data
        document.addEventListener('DOMContentLoaded', function() {
            GA4Tracker.trackEvent('page_view_enhanced', {
                page_type: document.body.dataset.pageType || 'unknown',
                user_agent: navigator.userAgent,
                screen_resolution: screen.width + 'x' + screen.height,
                viewport_size: window.innerWidth + 'x' + window.innerHeight
            });
        });
    </script>
    
    <!-- SEO Meta Tags -->
    <title><?= isset($title) ? esc($title) . ' - est8Ledger' : 'est8Ledger | End Security Deposit Disputes in Uganda & East Africa' ?></title>
    <meta name="description" content="<?= isset($description) ? esc($description) : 'Uganda\'s first blockchain-secured deposit platform. Transparent inspections, profit-sharing deposits, and digital agreements for landlords and tenants. Join 1000+ users.' ?>">
    <meta name="keywords" content="<?= isset($keywords) ? esc($keywords) : 'security deposit management Uganda, rental escrow East Africa, blockchain deposits, landlord tenant disputes, profit sharing deposits, digital tenancy agreements, Uganda rental platform' ?>">
    <meta name="author" content="est8Ledger">
    <meta name="robots" content="index, follow">

    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="<?= isset($title) ? esc($title) . ' - est8Ledger' : 'est8Ledger | Secure & Transparent Security Deposit Management' ?>">
    <meta property="og:description" content="<?= isset($description) ? esc($description) : 'est8Ledger helps landlords and tenants handle security deposits with trust. Secure escrow accounts, digital agreements, and transparent inspections for stress-free rentals.' ?>">
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?= current_url() ?>">
    <meta property="og:site_name" content="est8Ledger">

    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?= isset($title) ? esc($title) . ' - est8Ledger' : 'est8Ledger | Secure & Transparent Security Deposit Management' ?>">
    <meta name="twitter:description" content="<?= isset($description) ? esc($description) : 'est8Ledger helps landlords and tenants handle security deposits with trust. Secure escrow accounts and transparent inspections.' ?>">
    
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/png" href="/favicon.png">
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'primary': {
                            DEFAULT: '#0d06c8', // Deep blue primary
                            '50': '#f0f0ff',
                            '100': '#e5e3ff',
                            '200': '#ccc9ff',
                            '300': '#a8a1ff',
                            '400': '#7c6fff',
                            '500': '#5940ff',
                            '600': '#4c1df7',
                            '700': '#3f0ee3',
                            '800': '#350bbf',
                            '900': '#0d06c8'
                        },
                        'secondary': {
                            DEFAULT: '#374151', // Professional gray
                            '50': '#f9fafb',
                            '100': '#f3f4f6',
                            '200': '#e5e7eb',
                            '300': '#d1d5db',
                            '400': '#9ca3af',
                            '500': '#6b7280',
                            '600': '#4b5563',
                            '700': '#374151',
                            '800': '#1f2937',
                            '900': '#111827'
                        },
                        'accent': {
                            DEFAULT: '#9eff6b', // Bright green accent
                            '50': '#f7ffe6',
                            '100': '#efffcc',
                            '200': '#deff99',
                            '300': '#c8ff66',
                            '400': '#b3ff33',
                            '500': '#9eff6b',
                            '600': '#7ee600',
                            '700': '#6bcc00',
                            '800': '#58b300',
                            '900': '#459900'
                        },
                        'neutral': {
                            DEFAULT: '#f8fafc', // Clean background
                            '50': '#f8fafc',
                            '100': '#f1f5f9',
                            '200': '#e2e8f0',
                            '300': '#cbd5e1',
                            '400': '#94a3b8',
                            '500': '#64748b',
                            '600': '#475569',
                            '700': '#334155',
                            '800': '#1e293b',
                            '900': '#0f172a'
                        }
                    },
                    fontFamily: {
                        'sans': ['Inter', 'system-ui', 'sans-serif'],
                        'display': ['Inter', 'system-ui', 'sans-serif']
                    },
                    boxShadow: {
                        'professional': '0 1px 3px 0 rgba(0, 0, 0, 0.1), 0 1px 2px 0 rgba(0, 0, 0, 0.06)',
                        'professional-lg': '0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06)',
                        'professional-xl': '0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05)'
                    }
                }
            }
        }
    </script>
    
    <!-- Google Fonts - Inter for Professional Typography -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">

    <!-- GSAP Animation Library -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>

    <!-- Professional Banking CSS -->
    <style>
        /* Professional Typography */
        body {
            font-family: 'Inter', system-ui, -apple-system, sans-serif;
            font-feature-settings: 'cv02', 'cv03', 'cv04', 'cv11';
            letter-spacing: -0.01em;
        }

        /* Professional line clamping */
        .line-clamp-2 {
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        .line-clamp-3 {
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        /* Smooth scrolling for anchor links */
        html {
            scroll-behavior: smooth;
        }

        /* Professional focus states */
        button:focus, input:focus, textarea:focus, select:focus {
            outline: 2px solid #0d06c8;
            outline-offset: 2px;
            box-shadow: 0 0 0 4px rgba(13, 6, 200, 0.1);
        }

        /* Professional button styles */
        .btn-primary {
            background: linear-gradient(135deg, #0d06c8 0%, #350bbf 100%);
            border: none;
            transition: all 0.2s ease-in-out;
            font-weight: 600;
            letter-spacing: 0.025em;
        }

        .btn-primary:hover {
            background: linear-gradient(135deg, #350bbf 0%, #4c1df7 100%);
            transform: translateY(-1px);
            box-shadow: 0 4px 12px rgba(13, 6, 200, 0.25);
        }

        .btn-secondary {
            background: #ffffff;
            border: 2px solid #e5e7eb;
            color: #374151;
            transition: all 0.2s ease-in-out;
            font-weight: 500;
        }

        .btn-secondary:hover {
            border-color: #0d06c8;
            color: #0d06c8;
            background: #f0f0ff;
            transform: translateY(-1px);
            box-shadow: 0 4px 12px rgba(13, 6, 200, 0.1);
        }

        /* Professional card styles */
        .card-professional {
            background: #ffffff;
            border: 1px solid #e5e7eb;
            border-radius: 8px;
            box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.1), 0 1px 2px 0 rgba(0, 0, 0, 0.06);
            transition: all 0.2s ease-in-out;
        }

        .card-professional:hover {
            border-color: #d1d5db;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
            transform: translateY(-2px);
        }

        /* Professional gradients */
        .gradient-professional {
            background: linear-gradient(135deg, #f8fafc 0%, #f1f5f9 100%);
        }

        .gradient-primary {
            background: linear-gradient(135deg, #0d06c8 0%, #350bbf 100%);
        }

        /* Professional section spacing */
        .section-padding {
            padding: 5rem 0;
        }

        @media (max-width: 768px) {
            .section-padding {
                padding: 3rem 0;
            }
        }

        /* Mobile-optimized prose styles */
        .prose h1, .prose h2, .prose h3 {
            scroll-margin-top: 100px;
        }

        /* Enhanced mobile spacing and animations */
        @media (max-width: 768px) {
            .container {
                padding-left: 1rem;
                padding-right: 1rem;
            }

            .prose {
                font-size: 16px;
                line-height: 1.6;
            }

            .prose h1 {
                font-size: 2rem;
                line-height: 1.2;
            }

            .prose h2 {
                font-size: 1.5rem;
                line-height: 1.3;
            }

            .prose h3 {
                font-size: 1.25rem;
                line-height: 1.4;
            }

            /* Mobile-optimized animations */
            .animate-on-scroll,
            .animate-scale,
            .animate-stagger .stagger-item {
                transform: none !important;
                opacity: 1 !important;
            }

            /* Reduce motion for mobile performance */
            .group:hover {
                transform: none !important;
            }

            /* Mobile-friendly button sizes */
            button, .btn {
                min-height: 44px;
                min-width: 44px;
                touch-action: manipulation;
            }

            /* Optimize floating elements for mobile */
            .animate-float {
                animation: none !important;
            }

            /* Mobile-specific spacing */
            .py-20 {
                padding-top: 3rem;
                padding-bottom: 3rem;
            }

            .py-24 {
                padding-top: 4rem;
                padding-bottom: 4rem;
            }

            /* Mobile card adjustments */
            .rounded-2xl {
                border-radius: 1rem;
            }

            .rounded-3xl {
                border-radius: 1.5rem;
            }

            /* Mobile text sizing */
            .text-4xl {
                font-size: 2rem;
            }

            .text-5xl {
                font-size: 2.5rem;
            }

            .text-6xl {
                font-size: 3rem;
            }
        }

        /* Tablet optimizations */
        @media (min-width: 769px) and (max-width: 1024px) {
            /* Reduce animation intensity on tablets */
            .animate-on-scroll {
                transform: translateY(30px) !important;
            }

            .animate-scale {
                transform: scale(0.95) !important;
            }
        }

        /* High-performance mode for older devices */
        @media (max-width: 480px) {
            * {
                animation-duration: 0.01ms !important;
                animation-delay: 0.01ms !important;
                transition-duration: 0.01ms !important;
                transition-delay: 0.01ms !important;
            }

            .shadow-xl,
            .shadow-2xl {
                box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1) !important;
            }
        }

        /* Loading animation for better UX */
        .loading {
            opacity: 0.6;
            pointer-events: none;
        }

        /* Better button hover states */
        .btn-primary {
            transition: all 0.2s ease-in-out;
        }

        .btn-primary:hover {
            transform: translateY(-1px);
            box-shadow: 0 4px 12px rgba(13, 6, 200, 0.3);
        }
    </style>
    <?= $this->renderSection('css') ?>
</head>
<body class="bg-neutral-50">
    <!-- Professional Header -->
    <header class="bg-white border-b border-secondary-200 sticky top-0 z-50">
        <nav class="container mx-auto px-4 py-4">
            <div class="flex justify-between items-center">
                <a href="/" class="flex items-center">
                    <img src="/long_logo.png" alt="est8Ledger" class="h-8">
                </a>
                <div class="hidden md:flex space-x-8 items-center">
                    <a href="/" class="text-secondary-600 hover:text-primary-700 transition-colors font-medium">Home</a>
                    <a href="#how-it-works" class="text-secondary-600 hover:text-primary-700 transition-colors font-medium">How it Works</a>
                    <a href="/blogs" class="text-secondary-600 hover:text-primary-700 transition-colors font-medium">Blogs</a>
                    <a href="#contact" class="text-secondary-600 hover:text-primary-700 transition-colors font-medium">Contact</a>
                    <button onclick="openDemoModal()" class="btn-primary px-6 py-2 rounded-lg text-sm font-semibold text-white">
                        Join Waiting List
                    </button>
                </div>
                <button id="mobile-menu-button" class="md:hidden p-2 text-secondary-600">
                    <i class="bi bi-list text-2xl" id="menu-icon"></i>
                </button>
            </div>

            <!-- Mobile Menu -->
            <div id="mobile-menu" class="hidden md:hidden mt-4 pb-4 border-t border-secondary-200">
                <div class="flex flex-col space-y-4 pt-4">
                    <a href="/" class="text-secondary-600 hover:text-primary-700 transition-colors font-medium py-2">Home</a>
                    <a href="#how-it-works" class="text-secondary-600 hover:text-primary-700 transition-colors font-medium py-2">How it Works</a>
                    <a href="/blogs" class="text-secondary-600 hover:text-primary-700 transition-colors font-medium py-2">Blog</a>
                    <a href="#contact" class="text-secondary-600 hover:text-primary-700 transition-colors font-medium py-2">Contact</a>
                    <button onclick="openDemoModal()" class="btn-primary px-6 py-2 rounded-lg font-semibold text-white w-full">
                        Join Waiting List
                    </button>
                </div>
            </div>
        </nav>
    </header>

    <!-- Demo Request Modal -->
    <div id="demoModal" class="fixed inset-0 bg-black bg-opacity-50 hidden z-50">
        <div class="flex items-center justify-center min-h-screen p-4">
            <div class="bg-white rounded-lg max-w-md w-full p-6">
                <div class="flex justify-between items-center mb-6">
                    <h2 class="text-2xl font-bold text-secondary-900">Join the est8Ledger Waiting List</h2>
                    <button onclick="closeDemoModal()" class="text-secondary-400 hover:text-secondary-600 p-1">
                        <i class="bi bi-x-lg text-xl"></i>
                    </button>
                </div>

                <p class="text-secondary-600 mb-6">Be among the first to experience secure, transparent security deposit management when we launch.</p>

                <form id="demoForm" action="/join-waitinglist" method="POST">
                    <?= csrf_field() ?>

                    <div class="mb-5">
                        <label for="name" class="block text-sm font-semibold text-secondary-700 mb-2">Full Name *</label>
                        <input type="text" id="name" name="name" required
                               class="w-full px-4 py-3 border border-secondary-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-primary-500 transition-colors">
                    </div>

                    <div class="mb-5">
                        <label for="email" class="block text-sm font-semibold text-secondary-700 mb-2">Email Address *</label>
                        <input type="email" id="email" name="email" required
                               class="w-full px-4 py-3 border border-secondary-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-primary-500 transition-colors">
                    </div>

                    <div class="mb-5">
                        <label for="user_type" class="block text-sm font-semibold text-secondary-700 mb-2">Professional Role *</label>
                        <select id="user_type" name="user_type" required
                                class="w-full px-4 py-3 border border-secondary-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-primary-500 transition-colors">
                            <option value="">Select your role</option>
                            <option value="landlord">Property Owner</option>
                            <option value="property_manager">Property Manager</option>
                            <option value="tenant">Tenant</option>
                            <option value="other">Other</option>
                        </select>
                    </div>

                    <div class="mb-5">
                        <label for="phone" class="block text-sm font-semibold text-secondary-700 mb-2">Phone Number</label>
                        <input type="tel" id="phone" name="phone"
                               class="w-full px-4 py-3 border border-secondary-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-primary-500 transition-colors">
                    </div>

                    <div class="mb-6">
                        <label for="message" class="block text-sm font-semibold text-secondary-700 mb-2">What else do we need to address? (Optional)</label>
                        <textarea id="message" name="message" rows="3" placeholder="Tell us about your specific needs, challenges, or questions about security deposit management..."
                                  class="w-full px-4 py-3 border border-secondary-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-primary-500 transition-colors"></textarea>
                    </div>

                    <div class="flex gap-3">
                        <button type="submit" class="flex-1 btn-primary px-4 py-3 rounded-lg font-semibold text-white">
                            Join Waiting List
                        </button>
                        <button type="button" onclick="closeDemoModal()" class="px-4 py-3 btn-secondary rounded-lg font-medium">
                            Cancel
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Main Content -->
    <main>
        <?= $this->renderSection('content') ?>
    </main>

    <!-- Professional Footer -->
    <footer class="bg-secondary-900 text-white py-16 mt-16" id="contact">
        <div class="container mx-auto px-4">
            <!-- Contact Form Section -->
            <div class="mb-16">
                <div class="max-w-4xl mx-auto">
                    <div class="text-center mb-12">
                        <h3 class="text-3xl font-bold text-white mb-4">Get in Touch</h3>
                        <p class="text-secondary-300 text-lg">Ready to transform your rental deposit experience? Contact us today.</p>
                    </div>

                    <!-- Display Flash Messages -->
                    <?php if (session()->getFlashdata('success')): ?>
                        <div class="bg-[#9eff6b]/20 border border-[#9eff6b]/30 text-[#9eff6b] px-6 py-4 rounded-lg mb-8 flex items-center">
                            <i class="bi bi-check-circle-fill mr-3 text-xl"></i>
                            <span><?= session()->getFlashdata('success') ?></span>
                        </div>
                    <?php endif; ?>

                    <?php if (session()->getFlashdata('error')): ?>
                        <div class="bg-red-500/20 border border-red-500/30 text-red-300 px-6 py-4 rounded-lg mb-8 flex items-center">
                            <i class="bi bi-exclamation-triangle-fill mr-3 text-xl"></i>
                            <span><?= session()->getFlashdata('error') ?></span>
                        </div>
                    <?php endif; ?>

                    <?php if (session()->getFlashdata('errors')): ?>
                        <div class="bg-red-500/20 border border-red-500/30 text-red-300 px-6 py-4 rounded-lg mb-8">
                            <div class="flex items-center mb-2">
                                <i class="bi bi-exclamation-triangle-fill mr-3 text-xl"></i>
                                <span class="font-semibold">Please correct the following errors:</span>
                            </div>
                            <ul class="list-disc list-inside ml-6 space-y-1">
                                <?php foreach (session()->getFlashdata('errors') as $error): ?>
                                    <li><?= $error ?></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    <?php endif; ?>

                    <form action="/contact" method="POST" class="bg-secondary-800/50 backdrop-blur-sm border border-secondary-700 rounded-2xl p-8">
                        <?= csrf_field() ?>
                        
                        <div class="grid md:grid-cols-2 gap-6 mb-6">
                            <!-- Name Field -->
                            <div>
                                <label for="contact_name" class="block text-sm font-semibold text-white mb-2">
                                    Full Name *
                                </label>
                                <input type="text" 
                                       id="contact_name" 
                                       name="name" 
                                       value="<?= old('name') ?>"
                                       required
                                       class="w-full px-4 py-3 bg-secondary-800 border border-secondary-600 rounded-lg text-white placeholder-secondary-400 focus:outline-none focus:ring-2 focus:ring-[#9eff6b] focus:border-[#9eff6b] transition-colors"
                                       placeholder="Enter your full name">
                            </div>

                            <!-- Email Field -->
                            <div>
                                <label for="contact_email" class="block text-sm font-semibold text-white mb-2">
                                    Email Address *
                                </label>
                                <input type="email" 
                                       id="contact_email" 
                                       name="email" 
                                       value="<?= old('email') ?>"
                                       required
                                       class="w-full px-4 py-3 bg-secondary-800 border border-secondary-600 rounded-lg text-white placeholder-secondary-400 focus:outline-none focus:ring-2 focus:ring-[#9eff6b] focus:border-[#9eff6b] transition-colors"
                                       placeholder="your.email@example.com">
                            </div>
                        </div>

                        <!-- Phone Field -->
                        <div class="mb-6">
                            <label for="contact_phone" class="block text-sm font-semibold text-white mb-2">
                                Phone Number (Optional)
                            </label>
                            <input type="tel" 
                                   id="contact_phone" 
                                   name="phone" 
                                   value="<?= old('phone') ?>"
                                   class="w-full px-4 py-3 bg-secondary-800 border border-secondary-600 rounded-lg text-white placeholder-secondary-400 focus:outline-none focus:ring-2 focus:ring-[#9eff6b] focus:border-[#9eff6b] transition-colors"
                                   placeholder="+256 700 000 000">
                        </div>

                        <!-- Message Field -->
                        <div class="mb-8">
                            <label for="contact_message" class="block text-sm font-semibold text-white mb-2">
                                Message *
                            </label>
                            <textarea id="contact_message" 
                                      name="message" 
                                      rows="5" 
                                      required
                                      class="w-full px-4 py-3 bg-secondary-800 border border-secondary-600 rounded-lg text-white placeholder-secondary-400 focus:outline-none focus:ring-2 focus:ring-[#9eff6b] focus:border-[#9eff6b] transition-colors resize-vertical"
                                      placeholder="Tell us about your rental deposit needs, property management challenges, or any questions you have about est8Ledger..."><?= old('message') ?></textarea>
                        </div>

                        <!-- Submit Button -->
                        <div class="text-center">
                            <button type="submit" 
                                    class="bg-[#9eff6b] hover:bg-[#8ee55a] text-secondary-900 px-8 py-4 rounded-lg font-semibold text-lg transition-all duration-200 transform hover:scale-105 focus:outline-none focus:ring-2 focus:ring-[#9eff6b] focus:ring-offset-2 focus:ring-offset-secondary-900 inline-flex items-center">
                                <i class="bi bi-send mr-2"></i>
                                Send Message
                            </button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="grid md:grid-cols-4 gap-8 mb-12 pt-12 mt-12 border-t border-secondary-700">
                <div class="col-span-2">
                         <img src="/long_logo.png" alt="est8Ledger" class="h-14">
                    <p class="text-secondary-300 mb-6 leading-relaxed">Professional security deposit management for property owners, managers, and tenants. Building trust through transparency and regulatory compliance.</p>
                    <div class="flex space-x-4">
                        <a href="https://www.linkedin.com/company/est8ledger/" class="w-10 h-10 bg-secondary-800 rounded-lg flex items-center justify-center text-secondary-300 hover:text-white hover:bg-primary-700 transition-colors">
                            <i class="bi bi-linkedin"></i>
                        </a>
                        <a href="#" class="w-10 h-10 bg-secondary-800 rounded-lg flex items-center justify-center text-secondary-300 hover:text-white hover:bg-primary-700 transition-colors">
                            <i class="bi bi-envelope"></i>
                        </a>
                        <a href="#" class="w-10 h-10 bg-secondary-800 rounded-lg flex items-center justify-center text-secondary-300 hover:text-white hover:bg-primary-700 transition-colors">
                            <i class="bi bi-telephone"></i>
                        </a>
                    </div>
                </div>
                <div>
                    <h4 class="text-lg font-semibold mb-4 text-white">Platform</h4>
                    <ul class="space-y-3">
                        <li><a href="/" class="text-secondary-300 hover:text-white transition-colors">Home</a></li>
                        <li><a href="#how-it-works" class="text-secondary-300 hover:text-white transition-colors">How it Works</a></li>
                        <li><a href="/blogs" class="text-secondary-300 hover:text-white transition-colors">Blog</a></li>
                        <li><a href="#" class="text-secondary-300 hover:text-white transition-colors">Security</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-lg font-semibold mb-4 text-white">Legal & Compliance</h4>
                    <ul class="space-y-3">
                        <li><a href="/privacy-policy" class="text-secondary-300 hover:text-white transition-colors">Privacy Policy</a></li>
                        <li><a href="/terms-of-use" class="text-secondary-300 hover:text-white transition-colors">Terms of Service</a></li>
                        <li><a href="#" class="text-secondary-300 hover:text-white transition-colors">Regulatory Compliance</a></li>
                        <li><a href="#contact" class="text-secondary-300 hover:text-white transition-colors">Contact</a></li>
                    </ul>
                </div>
            </div>
            <div class="border-t border-secondary-700 pt-8">
                <div class="flex flex-col md:flex-row justify-between items-center">
                    <p class="text-secondary-400 text-sm">&copy; <?= date('Y') ?> est8Ledger. All rights reserved.</p>
                    <div class="flex items-center mt-4 md:mt-0 space-x-6">
                        <div class="flex items-center text-secondary-400 text-sm">
                            <i class="bi bi-shield-check mr-2 text-accent-600"></i>
                            Blockchain Secured
                        </div>
                        <div class="flex items-center text-secondary-400 text-sm">
                            <i class="bi bi-lock mr-2 text-accent-600"></i>
                            Bank-Grade Security
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script>
        function openDemoModal() {
            document.getElementById('demoModal').classList.remove('hidden');
            document.body.style.overflow = 'hidden';
            
            // Track modal open
            GA4Tracker.trackModalInteraction('waiting_list_modal', 'open');
        }

        function closeDemoModal() {
            document.getElementById('demoModal').classList.add('hidden');
            document.body.style.overflow = 'auto';
            
            // Track modal close
            GA4Tracker.trackModalInteraction('waiting_list_modal', 'close');
        }

        // Close modal when clicking outside
        document.getElementById('demoModal').addEventListener('click', function(e) {
            if (e.target === this) {
                closeDemoModal();
                GA4Tracker.trackModalInteraction('waiting_list_modal', 'close_outside_click');
            }
        });

        // Track form submission
        document.getElementById('demoForm').addEventListener('submit', function(e) {
            const formData = new FormData(this);
            GA4Tracker.trackFormSubmission('waiting_list', 'demoForm', {
                user_type: formData.get('user_type'),
                has_phone: formData.get('phone') ? 'yes' : 'no',
                has_message: formData.get('message') ? 'yes' : 'no'
            });
        });

        // Mobile menu functionality with tracking
        document.addEventListener('DOMContentLoaded', function() {
            const mobileMenuButton = document.getElementById('mobile-menu-button');
            const mobileMenu = document.getElementById('mobile-menu');
            const menuIcon = document.getElementById('menu-icon');

            if (mobileMenuButton && mobileMenu) {
                mobileMenuButton.addEventListener('click', function() {
                    const isHidden = mobileMenu.classList.contains('hidden');
                    
                    if (isHidden) {
                        mobileMenu.classList.remove('hidden');
                        menuIcon.classList.remove('bi-list');
                        menuIcon.classList.add('bi-x');
                        GA4Tracker.trackNavigation('mobile_menu', 'open', 'mobile_menu');
                    } else {
                        mobileMenu.classList.add('hidden');
                        menuIcon.classList.remove('bi-x');
                        menuIcon.classList.add('bi-list');
                        GA4Tracker.trackNavigation('mobile_menu', 'close', 'mobile_menu');
                    }
                });
            }

            // Track all navigation clicks
            document.querySelectorAll('nav a, .nav-link').forEach(link => {
                link.addEventListener('click', function(e) {
                    const linkText = this.textContent.trim();
                    const destination = this.getAttribute('href');
                    GA4Tracker.trackNavigation(linkText, destination, 'main_nav');
                });
            });

            // Track CTA buttons
            document.querySelectorAll('.btn-primary, .cta-button').forEach(button => {
                button.addEventListener('click', function(e) {
                    const buttonText = this.textContent.trim();
                    const buttonLocation = this.closest('section')?.id || 'unknown';
                    GA4Tracker.trackCTAClick(buttonText, buttonLocation);
                });
            });

            // Track contact form submission
            const contactForm = document.querySelector('form[action="/contact"]');
            if (contactForm) {
                contactForm.addEventListener('submit', function(e) {
                    const formData = new FormData(this);
                    GA4Tracker.trackFormSubmission('contact', 'contact_form', {
                        has_phone: formData.get('phone') ? 'yes' : 'no',
                        message_length: formData.get('message')?.length || 0
                    });
                });
            }
        });

        // Scroll depth tracking
        let scrollDepthTracked = [];
        window.addEventListener('scroll', function() {
            const scrollPercent = Math.round((window.scrollY / (document.body.scrollHeight - window.innerHeight)) * 100);
            
            [25, 50, 75, 90].forEach(threshold => {
                if (scrollPercent >= threshold && !scrollDepthTracked.includes(threshold)) {
                    scrollDepthTracked.push(threshold);
                    GA4Tracker.trackScrollDepth(threshold);
                }
            });
        });

        // Track JavaScript errors
        window.addEventListener('error', function(e) {
            GA4Tracker.trackError('javascript_error', e.message, e.filename + ':' + e.lineno);
        });

        // Track unhandled promise rejections
        window.addEventListener('unhandledrejection', function(e) {
            GA4Tracker.trackError('promise_rejection', e.reason?.message || 'Unknown promise rejection');
        });
    </script>

    <!-- GSAP Initialization -->
    <script>
        // Register GSAP plugins
        gsap.registerPlugin(ScrollTrigger);

        // Set up reduced motion preference
        const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

        // Global GSAP settings
        gsap.config({
            force3D: true,
            nullTargetWarn: false
        });

        // Mobile detection
        const isMobile = window.innerWidth <= 768;
        const isTablet = window.innerWidth > 768 && window.innerWidth <= 1024;
        const isLowPowerDevice = navigator.hardwareConcurrency && navigator.hardwareConcurrency <= 4;

        // Initialize animations when DOM is loaded
        document.addEventListener('DOMContentLoaded', function() {
            // Only run animations if user doesn't prefer reduced motion and device can handle them
            if (!prefersReducedMotion && !isLowPowerDevice) {
                initializeAnimations();
            } else if (isMobile) {
                // Simplified animations for mobile
                initializeMobileAnimations();
            }
        });

        function initializeAnimations() {
            // Professional, subtle fade in elements on scroll
            gsap.utils.toArray('.animate-on-scroll').forEach(element => {
                gsap.fromTo(element,
                    {
                        opacity: 0,
                        y: 20
                    },
                    {
                        opacity: 1,
                        y: 0,
                        duration: 0.6,
                        ease: "power2.out",
                        scrollTrigger: {
                            trigger: element,
                            start: "top 90%",
                            end: "bottom 10%",
                            toggleActions: "play none none reverse"
                        }
                    }
                );
            });

            // Professional, subtle stagger animations
            gsap.utils.toArray('.animate-stagger').forEach(container => {
                const items = container.querySelectorAll('.stagger-item');
                gsap.fromTo(items,
                    {
                        opacity: 0,
                        y: 15
                    },
                    {
                        opacity: 1,
                        y: 0,
                        duration: 0.5,
                        stagger: 0.1,
                        ease: "power2.out",
                        scrollTrigger: {
                            trigger: container,
                            start: "top 90%",
                            toggleActions: "play none none reverse"
                        }
                    }
                );
            });

            // Subtle scale animations for cards
            gsap.utils.toArray('.animate-scale').forEach(element => {
                gsap.fromTo(element,
                    {
                        scale: 0.98,
                        opacity: 0
                    },
                    {
                        scale: 1,
                        opacity: 1,
                        duration: 0.5,
                        ease: "power2.out",
                        scrollTrigger: {
                            trigger: element,
                            start: "top 90%",
                            toggleActions: "play none none reverse"
                        }
                    }
                );
            });

            // Professional counter animations
            gsap.utils.toArray('.animate-counter').forEach(element => {
                const target = parseInt(element.dataset.target);
                const counter = { value: 0 };

                gsap.to(counter, {
                    value: target,
                    duration: 1.5,
                    ease: "power2.out",
                    onUpdate: () => {
                        element.textContent = Math.round(counter.value).toLocaleString();
                    },
                    scrollTrigger: {
                        trigger: element,
                        start: "top 90%",
                        toggleActions: "play none none none"
                    }
                });
            });

            // Professional, subtle button interactions
            gsap.utils.toArray('button, .btn').forEach(button => {
                button.addEventListener('mouseenter', () => {
                    gsap.to(button, {
                        scale: 1.02,
                        duration: 0.15,
                        ease: "power2.out"
                    });
                });

                button.addEventListener('mouseleave', () => {
                    gsap.to(button, {
                        scale: 1,
                        duration: 0.15,
                        ease: "power2.out"
                    });
                });
            });
        }

        // Simplified animations for mobile devices
        function initializeMobileAnimations() {
            // Simple fade-in only for mobile
            gsap.utils.toArray('.animate-on-scroll, .animate-scale').forEach(element => {
                gsap.fromTo(element,
                    {
                        opacity: 0
                    },
                    {
                        opacity: 1,
                        duration: 0.5,
                        ease: "power2.out",
                        scrollTrigger: {
                            trigger: element,
                            start: "top 90%",
                            toggleActions: "play none none none"
                        }
                    }
                );
            });

            // Simple stagger for mobile
            gsap.utils.toArray('.animate-stagger').forEach(container => {
                const items = container.querySelectorAll('.stagger-item');
                gsap.fromTo(items,
                    {
                        opacity: 0
                    },
                    {
                        opacity: 1,
                        duration: 0.3,
                        stagger: 0.1,
                        ease: "power2.out",
                        scrollTrigger: {
                            trigger: container,
                            start: "top 90%",
                            toggleActions: "play none none none"
                        }
                    }
                );
            });
        }

        // Performance monitoring
        function monitorPerformance() {
            if ('performance' in window) {
                const observer = new PerformanceObserver((list) => {
                    const entries = list.getEntries();
                    entries.forEach((entry) => {
                        if (entry.duration > 16) { // Frame drops
                            // Disable complex animations if performance is poor
                            gsap.globalTimeline.timeScale(0.5);
                        }
                    });
                });

                observer.observe({ entryTypes: ['measure'] });
            }
        }

        // Initialize performance monitoring
        if (!isMobile) {
            monitorPerformance();
        }
    </script>

    <!-- Additional JS -->
    <?= $this->renderSection('js') ?>
</body>
</html>
