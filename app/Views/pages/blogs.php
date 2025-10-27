<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<!-- Blog Header Section -->
<section class="bg-gradient-to-br from-blue-50 to-indigo-100 py-16">
    <div class="container mx-auto px-4">
        <!-- Breadcrumb Navigation -->
        <nav aria-label="Breadcrumb" class="mb-8">
            <ol class="flex items-center space-x-2 text-sm">
                <li>
                    <a href="/" class="text-blue-600 hover:text-blue-800" data-breadcrumb>Home</a>
                </li>
                <li class="text-gray-500">
                    <i class="bi bi-chevron-right mx-2"></i>
                    <span>Blog</span>
                </li>
            </ol>
        </nav>
        
        <header class="text-center">
            <h1 class="text-4xl lg:text-5xl font-bold text-gray-900 mb-6">
                Rental Industry Insights & News
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">
                Expert insights on security deposit management, tenant rights, landlord best practices, 
                and the future of rental relationships in Uganda and East Africa.
            </p>
        </header>
    </div>
</section>

<!-- Blog Articles Section -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <div class="grid lg:grid-cols-3 gap-12">
            <!-- Main Content -->
            <div class="lg:col-span-2">
                <div class="space-y-12">
                    <!-- Featured Article -->
                    <article class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow">
                        <div class="aspect-w-16 aspect-h-9">
                            <img src="/assets/images/blog/security-deposit-disputes-uganda.jpg" 
                                 alt="Security deposit disputes in Uganda rental market"
                                 class="w-full h-64 object-cover">
                        </div>
                        <div class="p-8">
                            <div class="flex items-center mb-4">
                                <span class="bg-red-100 text-red-800 text-xs font-medium px-3 py-1 rounded-full">
                                    Market Analysis
                                </span>
                                <time datetime="2024-12-15" class="text-gray-500 text-sm ml-4">
                                    December 15, 2024
                                </time>
                            </div>
                            <h2 class="text-2xl font-bold text-gray-900 mb-4 hover:text-blue-600">
                                <a href="/blogs/security-deposit-disputes-uganda">
                                    The Hidden Cost of Security Deposit Disputes in Uganda's Rental Market
                                </a>
                            </h2>
                            <p class="text-gray-600 leading-relaxed mb-6">
                                An in-depth analysis of how security deposit disputes are costing Ugandan landlords 
                                and tenants millions annually, and why traditional management methods are failing 
                                in the modern rental market.
                            </p>
                            <div class="flex items-center justify-between">
                                <a href="/blogs/security-deposit-disputes-uganda" 
                                   class="text-blue-600 hover:text-blue-800 font-medium inline-flex items-center">
                                    Read Full Article
                                    <i class="bi bi-arrow-right ml-2"></i>
                                </a>
                                <div class="text-sm text-gray-500">
                                    8 min read
                                </div>
                            </div>
                        </div>
                    </article>

                    <!-- Regular Articles -->
                    <article class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow">
                        <div class="md:flex">
                            <div class="md:w-1/3">
                                <img src="/assets/images/blog/blockchain-rental-agreements.jpg" 
                                     alt="Blockchain technology in rental agreements"
                                     class="w-full h-48 md:h-full object-cover">
                            </div>
                            <div class="p-6 md:w-2/3">
                                <div class="flex items-center mb-3">
                                    <span class="bg-blue-100 text-blue-800 text-xs font-medium px-3 py-1 rounded-full">
                                        Technology
                                    </span>
                                    <time datetime="2024-12-10" class="text-gray-500 text-sm ml-4">
                                        December 10, 2024
                                    </time>
                                </div>
                                <h2 class="text-xl font-bold text-gray-900 mb-3 hover:text-blue-600">
                                    <a href="/blogs/blockchain-rental-agreements">
                                        How Blockchain Technology is Revolutionizing Rental Agreements in East Africa
                                    </a>
                                </h2>
                                <p class="text-gray-600 leading-relaxed mb-4">
                                    Discover how blockchain-secured digital tenancy agreements are creating 
                                    unprecedented transparency and trust in East African rental markets.
                                </p>
                                <div class="flex items-center justify-between">
                                    <a href="/blogs/blockchain-rental-agreements" 
                                       class="text-blue-600 hover:text-blue-800 font-medium inline-flex items-center">
                                        Read More
                                        <i class="bi bi-arrow-right ml-2"></i>
                                    </a>
                                    <div class="text-sm text-gray-500">
                                        6 min read
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>

                    <article class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow">
                        <div class="md:flex">
                            <div class="md:w-1/3">
                                <img src="/assets/images/blog/tenant-rights-uganda-2024.jpg" 
                                     alt="Tenant rights in Uganda 2024 guide"
                                     class="w-full h-48 md:h-full object-cover">
                            </div>
                            <div class="p-6 md:w-2/3">
                                <div class="flex items-center mb-3">
                                    <span class="bg-green-100 text-green-800 text-xs font-medium px-3 py-1 rounded-full">
                                        Legal Guide
                                    </span>
                                    <time datetime="2024-12-05" class="text-gray-500 text-sm ml-4">
                                        December 5, 2024
                                    </time>
                                </div>
                                <h2 class="text-xl font-bold text-gray-900 mb-3 hover:text-blue-600">
                                    <a href="/blogs/tenant-rights-uganda-2024">
                                        Complete Guide to Tenant Rights in Uganda: 2024 Legal Updates
                                    </a>
                                </h2>
                                <p class="text-gray-600 leading-relaxed mb-4">
                                    Everything tenants need to know about their rights under the Uganda Tenancy Act 2022, 
                                    including security deposit protections and dispute resolution procedures.
                                </p>
                                <div class="flex items-center justify-between">
                                    <a href="/blogs/tenant-rights-uganda-2024" 
                                       class="text-blue-600 hover:text-blue-800 font-medium inline-flex items-center">
                                        Read More
                                        <i class="bi bi-arrow-right ml-2"></i>
                                    </a>
                                    <div class="text-sm text-gray-500">
                                        12 min read
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>

                <!-- Pagination -->
                <nav aria-label="Blog pagination" class="mt-12">
                    <div class="flex justify-center">
                        <div class="flex space-x-2">
                            <button class="px-4 py-2 text-gray-500 bg-gray-100 rounded-lg cursor-not-allowed" disabled>
                                Previous
                            </button>
                            <button class="px-4 py-2 bg-blue-600 text-white rounded-lg">
                                1
                            </button>
                            <button class="px-4 py-2 text-gray-700 bg-gray-100 hover:bg-gray-200 rounded-lg">
                                2
                            </button>
                            <button class="px-4 py-2 text-blue-600 hover:bg-blue-50 rounded-lg">
                                Next
                            </button>
                        </div>
                    </div>
                </nav>
            </div>

            <!-- Sidebar -->
            <aside class="lg:col-span-1">
                <div class="space-y-8">
                    <!-- Categories -->
                    <div class="bg-gray-50 rounded-lg p-6">
                        <h3 class="text-lg font-bold text-gray-900 mb-4">Categories</h3>
                        <nav aria-label="Blog categories">
                            <ul class="space-y-2">
                                <li>
                                    <a href="/blogs/category/market-analysis" 
                                       class="text-gray-600 hover:text-blue-600 flex items-center justify-between">
                                        Market Analysis
                                        <span class="text-sm text-gray-400">(3)</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="/blogs/category/technology" 
                                       class="text-gray-600 hover:text-blue-600 flex items-center justify-between">
                                        Technology
                                        <span class="text-sm text-gray-400">(5)</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="/blogs/category/legal-guides" 
                                       class="text-gray-600 hover:text-blue-600 flex items-center justify-between">
                                        Legal Guides
                                        <span class="text-sm text-gray-400">(4)</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="/blogs/category/best-practices" 
                                       class="text-gray-600 hover:text-blue-600 flex items-center justify-between">
                                        Best Practices
                                        <span class="text-sm text-gray-400">(6)</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>

                    <!-- Newsletter Signup -->
                    <div class="bg-blue-50 rounded-lg p-6">
                        <h3 class="text-lg font-bold text-gray-900 mb-4">Stay Updated</h3>
                        <p class="text-gray-600 mb-4">
                            Get the latest insights on rental market trends and security deposit management.
                        </p>
                        <form class="space-y-3">
                            <input type="email" 
                                   placeholder="Enter your email" 
                                   class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                                   required>
                            <button type="submit" 
                                    class="w-full bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700 transition-colors">
                                Subscribe
                            </button>
                        </form>
                    </div>

                    <!-- Popular Posts -->
                    <div class="bg-gray-50 rounded-lg p-6">
                        <h3 class="text-lg font-bold text-gray-900 mb-4">Popular Posts</h3>
                        <div class="space-y-4">
                            <article class="flex space-x-3">
                                <img src="/assets/images/blog/popular-1.jpg" 
                                     alt="Popular blog post thumbnail"
                                     class="w-16 h-16 object-cover rounded">
                                <div>
                                    <h4 class="text-sm font-medium text-gray-900 hover:text-blue-600">
                                        <a href="/blogs/landlord-best-practices-uganda">
                                            5 Essential Landlord Best Practices for Uganda
                                        </a>
                                    </h4>
                                    <p class="text-xs text-gray-500 mt-1">
                                        November 28, 2024
                                    </p>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
            </aside>
        </div>
    </div>
</section>

<!-- Structured Data for Blog -->
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "Blog",
    "name": "est8Ledger Blog",
    "description": "Expert insights on security deposit management, tenant rights, and rental industry trends in Uganda and East Africa",
    "url": "https://est8ledger.com/blogs",
    "publisher": {
        "@type": "Organization",
        "name": "est8Ledger",
        "logo": {
            "@type": "ImageObject",
            "url": "https://est8ledger.com/assets/images/logo.png"
        }
    },
    "blogPost": [
        {
            "@type": "BlogPosting",
            "headline": "The Hidden Cost of Security Deposit Disputes in Uganda's Rental Market",
            "url": "https://est8ledger.com/blogs/security-deposit-disputes-uganda",
            "datePublished": "2024-12-15",
            "author": {
                "@type": "Organization",
                "name": "est8Ledger"
            }
        }
    ]
}
</script>
<?= $this->endSection() ?>
