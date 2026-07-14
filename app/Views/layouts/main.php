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
    <title><?= isset($title) ? esc($title) . ' - est8Ledger' : 'est8Ledger | End Rental Security Deposit Disputes in Uganda & East Africa' ?></title>
    <meta name="description" content="<?= isset($description) ? esc($description) : 'Uganda\'s first blockchain-secured deposit platform. Transparent inspections, profit-sharing deposits, and digital agreements for landlords and tenants. Join 1000+ users.' ?>">
    <meta name="keywords" content="<?= isset($keywords) ? esc($keywords) : 'Rental Security Deposit management Uganda, rental escrow East Africa, blockchain deposits, landlord tenant disputes, profit sharing deposits, digital tenancy agreements, Uganda rental platform' ?>">
    <meta name="author" content="est8Ledger">
    <meta name="robots" content="index, follow">
    <meta name="language" content="English">
    <meta name="revisit-after" content="7 days">
    <link rel="canonical" href="<?= current_url() ?>">

    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="<?= isset($title) ? esc($title) . ' - est8Ledger' : 'est8Ledger | Secure & Transparent Rental Security Deposit Management' ?>">
    <meta property="og:description" content="<?= isset($description) ? esc($description) : 'est8Ledger helps landlords and tenants handle Rental Security Deposits with trust. Secure escrow accounts, digital agreements, and transparent inspections for stress-free rentals.' ?>">
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?= current_url() ?>">
    <meta property="og:site_name" content="est8Ledger">
    <meta property="og:image" content="<?= isset($og_image) ? esc($og_image) : base_url('/logo_blue.png') ?>">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">

    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?= isset($title) ? esc($title) . ' - est8Ledger' : 'est8Ledger | Secure & Transparent Rental Security Deposit Management' ?>">
    <meta name="twitter:description" content="<?= isset($description) ? esc($description) : 'est8Ledger helps landlords and tenants handle Rental Security Deposits with trust. Secure escrow accounts and transparent inspections.' ?>">
    <meta name="twitter:image" content="<?= isset($og_image) ? esc($og_image) : base_url('/logo_blue.png') ?>">
    
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/png" href="/favicon.png">

    <!-- Organization Structured Data (JSON-LD) -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Organization",
        "name": "est8Ledger",
        "url": "https://est8ledger.com",
        "logo": "https://est8ledger.com/logo_blue.png",
        "description": "Uganda's first blockchain-secured Rental Security Deposit management platform for landlords and tenants",
        "sameAs": [
            "https://www.facebook.com/est8ledger",
            "https://www.twitter.com/est8ledger",
            "https://www.linkedin.com/company/est8ledger"
        ],
        "contactPoint": {
            "@type": "ContactPoint",
            "contactType": "Customer Support",
            "email": "support@est8ledger.com"
        },
        "address": {
            "@type": "PostalAddress",
            "addressCountry": "UG",
            "addressRegion": "Uganda"
        }
    }
    </script>

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'primary': {
                            DEFAULT: '#3f0ee3', // Brand violet primary
                            '50': '#f1edfe',
                            '100': '#e4dcfd',
                            '200': '#c9b9fb',
                            '300': '#a98ff8',
                            '400': '#845bf2',
                            '500': '#6633ec',
                            '600': '#5018e8',
                            '700': '#3f0ee3',
                            '800': '#340bb8',
                            '900': '#2b0c92',
                            '950': '#1a0654'
                        },
                        'secondary': {
                            DEFAULT: '#475569', // Professional slate
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
                        },
                        'accent': {
                            DEFAULT: '#7fe502', // Brand lime accent
                            '50': '#f3ffe0',
                            '100': '#e3ffba',
                            '200': '#c8ff7d',
                            '300': '#aef83f',
                            '400': '#95ec12',
                            '500': '#7fe502',
                            '600': '#61b800',
                            '700': '#498c03',
                            '800': '#3b6e08',
                            '900': '#335d0c'
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
        button:focus, input:focus, textarea:focus, select:focus, a:focus-visible {
            outline: 2px solid #3f0ee3;
            outline-offset: 2px;
            box-shadow: 0 0 0 4px rgba(63, 14, 227, 0.12);
        }

        /* Professional button styles */
        .btn-primary {
            background: linear-gradient(135deg, #3f0ee3 0%, #5018e8 100%);
            border: none;
            transition: all 0.2s ease-in-out;
            font-weight: 600;
            letter-spacing: 0.01em;
            box-shadow: 0 8px 20px -8px rgba(63, 14, 227, 0.55);
        }

        .btn-primary:hover {
            background: linear-gradient(135deg, #340bb8 0%, #3f0ee3 100%);
            transform: translateY(-1px);
            box-shadow: 0 12px 26px -8px rgba(63, 14, 227, 0.6);
        }

        /* Accent CTA — use dark text for contrast on lime */
        .btn-accent {
            background: #7fe502;
            color: #14210a;
            border: none;
            transition: all 0.2s ease-in-out;
            font-weight: 700;
            letter-spacing: 0.01em;
            box-shadow: 0 8px 20px -8px rgba(127, 229, 2, 0.6);
        }

        .btn-accent:hover {
            background: #95ec12;
            transform: translateY(-1px);
            box-shadow: 0 12px 26px -8px rgba(127, 229, 2, 0.7);
        }

        .btn-secondary {
            background: #ffffff;
            border: 2px solid #e2e8f0;
            color: #334155;
            transition: all 0.2s ease-in-out;
            font-weight: 600;
        }

        .btn-secondary:hover {
            border-color: #3f0ee3;
            color: #3f0ee3;
            background: #f1edfe;
            transform: translateY(-1px);
            box-shadow: 0 4px 12px rgba(63, 14, 227, 0.1);
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
            box-shadow: 0 12px 26px -8px rgba(63, 14, 227, 0.6);
        }

        /* Utility helpers for the SaaS refresh */
        .text-balance { text-wrap: balance; }

        /* Offset anchored sections so the sticky header doesn't cover headings */
        section[id], div[id="how-it-works"] { scroll-margin-top: 84px; }

        .gradient-hero {
            background:
                radial-gradient(1200px 600px at 80% -10%, rgba(127, 229, 2, 0.10), transparent 60%),
                radial-gradient(900px 500px at 0% 0%, rgba(63, 14, 227, 0.12), transparent 55%),
                linear-gradient(180deg, #ffffff 0%, #f6f4ff 100%);
        }

        .gradient-cta {
            background:
                radial-gradient(900px 500px at 90% 10%, rgba(127, 229, 2, 0.18), transparent 55%),
                linear-gradient(135deg, #3f0ee3 0%, #2b0c92 100%);
        }

        .card-lift {
            transition: transform 0.25s ease, box-shadow 0.25s ease, border-color 0.25s ease;
        }

        .card-lift:hover {
            transform: translateY(-4px);
            box-shadow: 0 20px 40px -16px rgba(15, 23, 42, 0.18);
        }

        /* Pricing-style ring for highlighted cards */
        .ring-brand { box-shadow: 0 0 0 2px #3f0ee3, 0 24px 48px -20px rgba(63, 14, 227, 0.45); }

        /* Marquee for trust logos */
        @keyframes marquee { from { transform: translateX(0); } to { transform: translateX(-50%); } }
        .animate-marquee { animation: marquee 28s linear infinite; }
        @media (prefers-reduced-motion: reduce) {
            .animate-marquee { animation: none; }
        }

        /* FAQ accordion */
        details.faq > summary { list-style: none; cursor: pointer; }
        details.faq > summary::-webkit-details-marker { display: none; }
        details.faq[open] .faq-icon { transform: rotate(180deg); }
        .faq-icon { transition: transform 0.2s ease; }
    </style>
    <?= $this->renderSection('css') ?>
</head>
<body class="bg-neutral-50">
    <!-- Professional Header -->
    <header class="bg-white/90 backdrop-blur-md border-b border-secondary-200/70 sticky top-0 z-50">
        <nav class="container mx-auto px-4 py-3" aria-label="Primary">
            <div class="flex justify-between items-center gap-4">
                <a href="/" class="flex items-center shrink-0" aria-label="est8Ledger home">
                    <img src="/long_logo.png" alt="est8Ledger" class="h-8 w-auto" width="109" height="32">
                </a>
                <div class="hidden lg:flex space-x-7 items-center">
                    <a href="/#how-it-works" class="text-secondary-600 hover:text-primary-700 transition-colors font-medium text-sm">How it Works</a>
                    <a href="/#solution" class="text-secondary-600 hover:text-primary-700 transition-colors font-medium text-sm">Solution</a>
                    <a href="/about-us" class="text-secondary-600 hover:text-primary-700 transition-colors font-medium text-sm">About</a>
                    <a href="/faqs" class="text-secondary-600 hover:text-primary-700 transition-colors font-medium text-sm">FAQs</a>
                    <a href="/blogs" class="text-secondary-600 hover:text-primary-700 transition-colors font-medium text-sm">Blog</a>
                    <a href="/contact-us" class="text-secondary-600 hover:text-primary-700 transition-colors font-medium text-sm">Contact</a>
                </div>
                <div class="hidden lg:flex items-center gap-3">
                    <a href="https://app.est8ledger.com" class="btn-primary text-white px-5 py-2.5 rounded-full text-sm font-semibold inline-flex items-center">
                        PM Platform
                        <i class="bi bi-box-arrow-up-right ml-2 text-xs"></i>
                    </a>
                </div>
                <button id="mobile-menu-button" class="lg:hidden p-2 text-secondary-700" aria-label="Open menu" aria-expanded="false" aria-controls="mobile-menu">
                    <i class="bi bi-list text-2xl" id="menu-icon"></i>
                </button>
            </div>

            <!-- Mobile Menu -->
            <div id="mobile-menu" class="hidden lg:hidden mt-3 pb-4 border-t border-secondary-200">
                <div class="flex flex-col space-y-1 pt-3">
                    <a href="/" class="text-secondary-700 hover:text-primary-700 hover:bg-primary-50 rounded-lg transition-colors font-medium py-2.5 px-3">Home</a>
                    <a href="/#how-it-works" class="text-secondary-700 hover:text-primary-700 hover:bg-primary-50 rounded-lg transition-colors font-medium py-2.5 px-3">How it Works</a>
                    <a href="/#solution" class="text-secondary-700 hover:text-primary-700 hover:bg-primary-50 rounded-lg transition-colors font-medium py-2.5 px-3">Solution</a>
                    <a href="/about-us" class="text-secondary-700 hover:text-primary-700 hover:bg-primary-50 rounded-lg transition-colors font-medium py-2.5 px-3">About</a>
                    <a href="/faqs" class="text-secondary-700 hover:text-primary-700 hover:bg-primary-50 rounded-lg transition-colors font-medium py-2.5 px-3">FAQs</a>
                    <a href="/blogs" class="text-secondary-700 hover:text-primary-700 hover:bg-primary-50 rounded-lg transition-colors font-medium py-2.5 px-3">Blog</a>
                    <a href="/contact-us" class="text-secondary-700 hover:text-primary-700 hover:bg-primary-50 rounded-lg transition-colors font-medium py-2.5 px-3">Contact</a>
                    <a href="https://app.est8ledger.com" class="btn-primary text-white px-4 py-3 rounded-xl font-semibold mt-2 mx-1 text-center inline-flex items-center justify-center">
                        PM Platform
                        <i class="bi bi-box-arrow-up-right ml-2 text-xs"></i>
                    </a>
                </div>
            </div>
        </nav>
    </header>

    <!-- Main Content -->
    <main>
        <?= $this->renderSection('content') ?>
    </main>

    <!-- Professional Footer -->
    <footer class="bg-secondary-900 text-white mt-20">
        <!-- CTA strip -->
        <div class="border-b border-white/10">
            <div class="container mx-auto px-4 py-10">
                <div class="flex flex-col lg:flex-row items-center justify-between gap-6">
                    <div class="text-center lg:text-left">
                        <h3 class="text-2xl font-extrabold text-white">Ready to make deposits dispute-proof?</h3>
                        <p class="text-secondary-300 mt-1">Manage rental deposits with full transparency on the est8Ledger PM Platform.</p>
                    </div>
                    <div class="flex flex-col sm:flex-row gap-3 shrink-0">
                        <a href="https://app.est8ledger.com" class="btn-accent px-6 py-3 rounded-xl inline-flex items-center justify-center">
                            PM Platform
                            <i class="bi bi-box-arrow-up-right ml-2 text-xs"></i>
                        </a>
                        <a href="/contact-us" class="px-6 py-3 rounded-xl font-semibold text-white border border-white/25 hover:bg-white/10 transition inline-flex items-center justify-center">
                            Talk to Sales
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Link columns -->
        <div class="container mx-auto px-4 py-14">
            <div class="grid grid-cols-2 md:grid-cols-12 gap-10">
                <!-- Brand -->
                <div class="col-span-2 md:col-span-4">
                    <img src="/long_logo.png" alt="est8Ledger" class="h-10 w-auto mb-5" width="136" height="40">
                    <p class="text-secondary-400 leading-relaxed text-sm mb-6 max-w-xs">
                        Blockchain-secured rental security deposit management. Escrow, digital tenancy agreements,
                        and tamper-proof inspections that build trust between landlords and tenants across East Africa.
                    </p>
                    <div class="flex gap-2.5">
                        <a href="https://www.linkedin.com/company/est8ledger/" target="_blank" rel="noopener noreferrer" class="w-10 h-10 bg-white/5 border border-white/10 rounded-lg flex items-center justify-center text-secondary-300 hover:text-white hover:bg-primary-700 hover:border-primary-700 transition-colors" aria-label="est8Ledger on LinkedIn">
                            <i class="bi bi-linkedin"></i>
                        </a>
                        <a href="https://www.crunchbase.com/organization/est8ledger" target="_blank" rel="noopener noreferrer" class="w-10 h-10 bg-white/5 border border-white/10 rounded-lg flex items-center justify-center text-secondary-300 hover:text-white hover:bg-primary-700 hover:border-primary-700 transition-colors" aria-label="est8Ledger on Crunchbase">
                            <i class="bi bi-graph-up"></i>
                        </a>
                        <a href="mailto:info@est8ledger.com" class="w-10 h-10 bg-white/5 border border-white/10 rounded-lg flex items-center justify-center text-secondary-300 hover:text-white hover:bg-primary-700 hover:border-primary-700 transition-colors" aria-label="Email est8Ledger">
                            <i class="bi bi-envelope"></i>
                        </a>
                        <a href="tel:+447930068728" class="w-10 h-10 bg-white/5 border border-white/10 rounded-lg flex items-center justify-center text-secondary-300 hover:text-white hover:bg-primary-700 hover:border-primary-700 transition-colors" aria-label="Call est8Ledger">
                            <i class="bi bi-telephone"></i>
                        </a>
                    </div>
                </div>

                <!-- Product -->
                <div class="md:col-span-2">
                    <h4 class="text-xs font-bold uppercase tracking-widest text-secondary-500 mb-4">Product</h4>
                    <ul class="space-y-3 text-sm">
                        <li><a href="/#solution" class="text-secondary-300 hover:text-white transition-colors">Solution</a></li>
                        <li><a href="/#how-it-works" class="text-secondary-300 hover:text-white transition-colors">How it Works</a></li>
                        <li><a href="https://app.est8ledger.com" class="text-secondary-300 hover:text-white transition-colors">PM Platform</a></li>
                        <li><a href="https://app.est8ledger.com" class="text-secondary-300 hover:text-white transition-colors">Sign In</a></li>
                    </ul>
                </div>

                <!-- Company -->
                <div class="md:col-span-2">
                    <h4 class="text-xs font-bold uppercase tracking-widest text-secondary-500 mb-4">Company</h4>
                    <ul class="space-y-3 text-sm">
                        <li><a href="/about-us" class="text-secondary-300 hover:text-white transition-colors">About Us</a></li>
                        <li><a href="/blogs" class="text-secondary-300 hover:text-white transition-colors">Blog</a></li>
                        <li><a href="/faqs" class="text-secondary-300 hover:text-white transition-colors">FAQs</a></li>
                        <li><a href="/contact-us" class="text-secondary-300 hover:text-white transition-colors">Contact</a></li>
                    </ul>
                </div>

                <!-- Resources -->
                <div class="md:col-span-2">
                    <h4 class="text-xs font-bold uppercase tracking-widest text-secondary-500 mb-4">Resources</h4>
                    <ul class="space-y-3 text-sm">
                        <li><a href="/privacy-policy" class="text-secondary-300 hover:text-white transition-colors">Privacy Policy</a></li>
                        <li><a href="/terms-of-use" class="text-secondary-300 hover:text-white transition-colors">Terms of Service</a></li>
                        <li><a href="/landlord-and-tenant-act-2022.pdf" class="text-secondary-300 hover:text-white transition-colors">Tenancy Act 2022</a></li>
                        <li><a href="mailto:info@est8ledger.com" class="text-secondary-300 hover:text-white transition-colors">Support</a></li>
                    </ul>
                </div>

                <!-- Get the app -->
                <div class="col-span-2 md:col-span-2">
                    <h4 class="text-xs font-bold uppercase tracking-widest text-secondary-500 mb-4">Get the app</h4>
                    <div class="flex flex-col gap-3">
                        <a href="https://apps.apple.com/us/app/est8ledger/id6759548753" class="flex items-center gap-3 bg-white/5 border border-white/10 rounded-xl px-3 py-2.5 hover:bg-white/10 transition-colors">
                            <i class="bi bi-apple text-2xl text-white"></i>
                            <span class="leading-tight"><span class="block text-[10px] text-secondary-400">Download on the</span><span class="block text-sm font-semibold text-white">App Store</span></span>
                        </a>
                        <a href="https://play.google.com/store/apps/details?id=com.rentalynk.est8ledger&hl=en" target="_blank" rel="noopener" class="flex items-center gap-3 bg-white/5 border border-white/10 rounded-xl px-3 py-2.5 hover:bg-white/10 transition-colors">
                            <i class="bi bi-google-play text-xl text-white"></i>
                            <span class="leading-tight"><span class="block text-[10px] text-secondary-400">Get it on</span><span class="block text-sm font-semibold text-white">Google Play</span></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bottom bar -->
        <div class="border-t border-white/10">
            <div class="container mx-auto px-4 py-6 flex flex-col md:flex-row justify-between items-center gap-4">
                <p class="text-secondary-500 text-sm order-2 md:order-1">&copy; <?= date('Y') ?> est8Ledger. All rights reserved.</p>
                <div class="flex flex-wrap items-center justify-center gap-x-5 gap-y-2 order-1 md:order-2">
                    <span class="flex items-center text-secondary-400 text-xs font-medium"><i class="bi bi-shield-check mr-1.5 text-accent-500"></i>Blockchain Secured</span>
                    <span class="flex items-center text-secondary-400 text-xs font-medium"><i class="bi bi-lock mr-1.5 text-accent-500"></i>Bank-Grade Security</span>
                    <img src="/Built-on-XRPL-Color-Horizontal-White.png" alt="Built on the XRP Ledger" class="h-5 opacity-80" loading="lazy">
                </div>
            </div>
        </div>
    </footer>

    <script>
        function closeMobileMenu() {
            const mobileMenu = document.getElementById('mobile-menu');
            const menuIcon = document.getElementById('menu-icon');
            const btn = document.getElementById('mobile-menu-button');
            if (mobileMenu) mobileMenu.classList.add('hidden');
            if (menuIcon) { menuIcon.classList.remove('bi-x'); menuIcon.classList.add('bi-list'); }
            if (btn) btn.setAttribute('aria-expanded', 'false');
        }

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
                        mobileMenuButton.setAttribute('aria-expanded', 'true');
                        GA4Tracker.trackNavigation('mobile_menu', 'open', 'mobile_menu');
                    } else {
                        mobileMenu.classList.add('hidden');
                        menuIcon.classList.remove('bi-x');
                        menuIcon.classList.add('bi-list');
                        mobileMenuButton.setAttribute('aria-expanded', 'false');
                        GA4Tracker.trackNavigation('mobile_menu', 'close', 'mobile_menu');
                    }
                });

                // Close mobile menu when a link is tapped
                mobileMenu.querySelectorAll('a').forEach(link => {
                    link.addEventListener('click', closeMobileMenu);
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
