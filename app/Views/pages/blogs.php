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
                <div class="space-y-8">
                    <?php if (empty($blogs)): ?>
                        <!-- Empty State -->
                        <div class="bg-white rounded-lg shadow-lg p-12 text-center">
                            <i class="bi bi-inbox text-6xl text-gray-300 mb-4"></i>
                            <h3 class="text-xl font-semibold text-gray-900 mb-2">No articles found</h3>
                            <p class="text-gray-600">Check back soon for more insights on rental management and security deposits.</p>
                        </div>
                    <?php else: ?>
                        <?php foreach ($blogs as $index => $blog): ?>
                            <article class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
                                <?php if ($index === 0 && $currentPage === 1): ?>
                                    <!-- Featured Article (First item on first page) -->
                                    <div class="aspect-w-16 aspect-h-9">
                                        <img src="<?= isset($blog['featured_image']) && !empty($blog['featured_image']) ? esc($blog['featured_image']) : 'https://placehold.co/800x450?text=' . urlencode($blog['title'] ?? 'Blog Article') ?>"
                                             alt="<?= esc($blog['title'] ?? 'Blog article') ?>"
                                             class="w-full h-64 object-cover">
                                    </div>
                                    <div class="p-8">
                                        <div class="flex items-center mb-4 flex-wrap gap-3">
                                            <span class="bg-red-100 text-red-800 text-xs font-medium px-3 py-1 rounded-full">
                                                <?= esc($blog['category'] ?? 'Article') ?>
                                            </span>
                                            <time datetime="<?= esc($blog['published_date'] ?? date('Y-m-d')) ?>" class="text-gray-500 text-sm">
                                                <?= date('F j, Y', strtotime($blog['published_date'] ?? date('Y-m-d'))) ?>
                                            </time>
                                            <span class="text-gray-500 text-sm">
                                                <i class="bi bi-eye mr-1"></i><?= esc($blog['views'] ?? 0) ?> views
                                            </span>
                                        </div>
                                        <h2 class="text-2xl font-bold text-gray-900 mb-4 hover:text-blue-600 transition-colors">
                                            <a href="/blog/<?= esc($blog['slug'] ?? '') ?>">
                                                <?= esc($blog['title'] ?? 'Untitled') ?>
                                            </a>
                                        </h2>
                                        <p class="text-gray-600 leading-relaxed mb-6">
                                            <?= esc(substr($blog['excerpt'] ?? $blog['content'] ?? '', 0, 200)) ?>...
                                        </p>
                                        <div class="flex items-center justify-between">
                                            <a href="/blog/<?= esc($blog['slug'] ?? '') ?>"
                                               class="text-blue-600 hover:text-blue-800 font-medium inline-flex items-center transition-colors">
                                                Read Full Article
                                                <i class="bi bi-arrow-right ml-2"></i>
                                            </a>
                                            <div class="text-sm text-gray-500">
                                                <?= esc($blog['read_time'] ?? '5') ?> min read
                                            </div>
                                        </div>
                                    </div>
                                <?php else: ?>
                                    <!-- Regular Article -->
                                    <div class="md:flex">
                                        <div class="md:w-1/3">
                                            <img src="<?= isset($blog['featured_image']) && !empty($blog['featured_image']) ? esc($blog['featured_image']) : 'https://placehold.co/400x300?text=' . urlencode($blog['title'] ?? 'Blog') ?>"
                                                 alt="<?= esc($blog['title'] ?? 'Blog article') ?>"
                                                 class="w-full h-48 md:h-full object-cover">
                                        </div>
                                        <div class="p-6 md:w-2/3 flex flex-col justify-between">
                                            <div>
                                                <div class="flex items-center mb-3 flex-wrap gap-2">
                                                    <span class="bg-blue-100 text-blue-800 text-xs font-medium px-3 py-1 rounded-full">
                                                        <?= esc($blog['category'] ?? 'Article') ?>
                                                    </span>
                                                    <time datetime="<?= esc($blog['published_date'] ?? date('Y-m-d')) ?>" class="text-gray-500 text-sm">
                                                        <?= date('F j, Y', strtotime($blog['published_date'] ?? date('Y-m-d'))) ?>
                                                    </time>
                                                    <span class="text-gray-500 text-sm">
                                                        <i class="bi bi-eye mr-1"></i><?= esc($blog['views'] ?? 0) ?>
                                                    </span>
                                                </div>
                                                <h2 class="text-xl font-bold text-gray-900 mb-3 hover:text-blue-600 transition-colors">
                                                    <a href="/blog/<?= esc($blog['slug'] ?? '') ?>">
                                                        <?= esc($blog['title'] ?? 'Untitled') ?>
                                                    </a>
                                                </h2>
                                                <p class="text-gray-600 leading-relaxed mb-4">
                                                    <?= esc(substr($blog['excerpt'] ?? $blog['content'] ?? '', 0, 150)) ?>...
                                                </p>
                                            </div>
                                            <div class="flex items-center justify-between">
                                                <a href="/blog/<?= esc($blog['slug'] ?? '') ?>"
                                                   class="text-blue-600 hover:text-blue-800 font-medium inline-flex items-center transition-colors">
                                                    Read More
                                                    <i class="bi bi-arrow-right ml-2"></i>
                                                </a>
                                                <div class="text-sm text-gray-500">
                                                    <?= esc($blog['read_time'] ?? '5') ?> min read
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endif; ?>
                            </article>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </div>

                <!-- Pagination -->
                <?php if ($totalPages > 1): ?>
                    <nav aria-label="Blog pagination" class="mt-12">
                        <div class="flex justify-center items-center space-x-2">
                            <!-- Previous Button -->
                            <?php if ($currentPage > 1): ?>
                                <a href="/blogs?page=<?= $currentPage - 1 ?>"
                                   class="px-4 py-2 text-gray-700 bg-gray-100 hover:bg-gray-200 rounded-lg transition-colors flex items-center">
                                    <i class="bi bi-chevron-left mr-1"></i>
                                    Previous
                                </a>
                            <?php else: ?>
                                <button class="px-4 py-2 text-gray-500 bg-gray-100 rounded-lg cursor-not-allowed" disabled>
                                    <i class="bi bi-chevron-left mr-1"></i>
                                    Previous
                                </button>
                            <?php endif; ?>

                            <!-- Page Numbers -->
                            <div class="flex space-x-1">
                                <?php
                                    $startPage = max(1, $currentPage - 2);
                                    $endPage = min($totalPages, $currentPage + 2);

                                    if ($startPage > 1): ?>
                                        <a href="/blogs?page=1" class="px-3 py-2 text-gray-700 bg-gray-100 hover:bg-gray-200 rounded-lg transition-colors">1</a>
                                        <?php if ($startPage > 2): ?>
                                            <span class="px-3 py-2 text-gray-500">...</span>
                                        <?php endif; ?>
                                    <?php endif; ?>

                                    <?php for ($i = $startPage; $i <= $endPage; $i++): ?>
                                        <?php if ($i === $currentPage): ?>
                                            <button class="px-3 py-2 bg-blue-600 text-white rounded-lg font-semibold">
                                                <?= $i ?>
                                            </button>
                                        <?php else: ?>
                                            <a href="/blogs?page=<?= $i ?>" class="px-3 py-2 text-gray-700 bg-gray-100 hover:bg-gray-200 rounded-lg transition-colors">
                                                <?= $i ?>
                                            </a>
                                        <?php endif; ?>
                                    <?php endfor; ?>

                                    <?php if ($endPage < $totalPages): ?>
                                        <?php if ($endPage < $totalPages - 1): ?>
                                            <span class="px-3 py-2 text-gray-500">...</span>
                                        <?php endif; ?>
                                        <a href="/blogs?page=<?= $totalPages ?>" class="px-3 py-2 text-gray-700 bg-gray-100 hover:bg-gray-200 rounded-lg transition-colors"><?= $totalPages ?></a>
                                    <?php endif; ?>
                                ?>
                            </div>

                            <!-- Next Button -->
                            <?php if ($currentPage < $totalPages): ?>
                                <a href="/blogs?page=<?= $currentPage + 1 ?>"
                                   class="px-4 py-2 text-gray-700 bg-gray-100 hover:bg-gray-200 rounded-lg transition-colors flex items-center">
                                    Next
                                    <i class="bi bi-chevron-right ml-1"></i>
                                </a>
                            <?php else: ?>
                                <button class="px-4 py-2 text-gray-500 bg-gray-100 rounded-lg cursor-not-allowed" disabled>
                                    Next
                                    <i class="bi bi-chevron-right ml-1"></i>
                                </button>
                            <?php endif; ?>
                        </div>

                        <!-- Page Info -->
                        <div class="text-center mt-4 text-sm text-gray-600">
                            Page <?= $currentPage ?> of <?= $totalPages ?>
                            <span class="text-gray-500">(<?= $totalBlogs ?> total articles)</span>
                        </div>
                    </nav>
                <?php endif; ?>
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
