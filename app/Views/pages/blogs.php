<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<!-- Blog Header -->
<div class="bg-gradient-to-br from-primary-50 to-primary-100 py-16">
    <div class="container mx-auto px-4 text-center">
        <div class="inline-flex items-center bg-primary-100 border border-primary-200 text-primary-700 px-4 py-2 rounded-lg text-sm font-medium mb-6">
            <i class="bi bi-journal-text mr-2"></i>
            Latest Insights
        </div>
        <h1 class="text-4xl font-bold text-primary-900 mb-6">Latest Insights & Tips</h1>
        <p class="text-xl text-primary-700 max-w-3xl mx-auto">Stay updated with the latest in security deposit management, rental technology, and property management best practices</p>
    </div>
</div>

<!-- Blog Posts -->
<div class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <?php if (empty($blogs)): ?>
            <div class="text-center text-secondary-500">
                <i class="bi bi-journal-text text-6xl mb-4 text-primary-300"></i>
                <p class="text-xl">Blog posts coming soon...</p>
            </div>
        <?php else: ?>
            <div class="grid lg:grid-cols-3 gap-8">
                <?php foreach ($blogs as $blog): ?>
                    <article class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-all duration-300 border border-gray-100 hover:border-primary-200">
                        <div class="relative">
                            <img src="<?= esc($blog['featured_image']) ?>" alt="<?= esc($blog['title']) ?>" class="w-full h-48 object-cover">
                            <div class="absolute top-4 left-4">
                                <span class="bg-primary-600 text-white px-3 py-1 rounded-full text-sm font-semibold shadow-lg">
                                    <?= esc($blog['tags'][0] ?? 'Blog') ?>
                                </span>
                            </div>
                        </div>

                        <div class="p-6">
                            <div class="flex items-center text-sm text-secondary-500 mb-3">
                                <i class="bi bi-calendar mr-2 text-primary-500"></i>
                                <span><?= date('M j, Y', strtotime($blog['published_date'])) ?></span>
                                <span class="mx-2">•</span>
                                <i class="bi bi-eye mr-1 text-accent-600"></i>
                                <span><?= number_format($blog['views']) ?> views</span>
                            </div>

                            <h2 class="text-xl font-bold text-secondary-900 mb-3 line-clamp-2">
                                <a href="/blog/<?= esc($blog['slug']) ?>" class="hover:text-primary-600 transition-colors">
                                    <?= esc($blog['title']) ?>
                                </a>
                            </h2>

                            <p class="text-secondary-600 mb-4 line-clamp-3">
                                <?= esc($blog['excerpt']) ?>
                            </p>

                            <div class="flex items-center justify-between">
                                <div class="flex items-center">
                                    <div class="w-8 h-8 bg-primary-100 rounded-full flex items-center justify-center mr-3">
                                        <i class="bi bi-person text-primary-600 text-sm"></i>
                                    </div>
                                    <span class="text-sm text-secondary-600"><?= esc($blog['author']) ?></span>
                                </div>

                                <a href="/blog/<?= esc($blog['slug']) ?>" class="text-primary-600 hover:text-primary-700 font-semibold text-sm transition-colors flex items-center">
                                    Read More 
                                    <i class="bi bi-arrow-right ml-1"></i>
                                </a>
                            </div>
                        </div>
                    </article>
                <?php endforeach; ?>
            </div>

            <!-- Featured Tags -->
            <div class="mt-16 text-center">
                <h3 class="text-2xl font-bold text-secondary-900 mb-6">Popular Topics</h3>
                <div class="flex flex-wrap justify-center gap-3">
                    <?php
                    $allTags = [];
                    foreach ($blogs as $blog) {
                        $allTags = array_merge($allTags, $blog['tags']);
                    }
                    $popularTags = array_unique($allTags);
                    ?>
                    <?php foreach (array_slice($popularTags, 0, 8) as $tag): ?>
                        <span class="bg-secondary-100 hover:bg-primary-50 text-secondary-700 hover:text-primary-700 px-4 py-2 rounded-full text-sm transition-colors cursor-pointer border border-secondary-200 hover:border-primary-300">
                            <?= esc($tag) ?>
                        </span>
                    <?php endforeach; ?>
                </div>
            </div>
        <?php endif; ?>
    </div>
</div>

<!-- Newsletter Signup -->
<div class="py-16 bg-gradient-to-br from-primary-50 to-accent-50">
    <div class="container mx-auto px-4 text-center">
        <div class="max-w-2xl mx-auto">
            <div class="inline-flex items-center bg-white border border-primary-200 text-primary-700 px-4 py-2 rounded-lg text-sm font-medium mb-6">
                <i class="bi bi-envelope mr-2"></i>
                Newsletter
            </div>
            <h3 class="text-3xl font-bold text-primary-900 mb-4">Stay Updated</h3>
            <p class="text-primary-700 mb-8">Get the latest insights on security deposit management and rental technology delivered to your inbox.</p>

            <div class="flex flex-col sm:flex-row gap-4 max-w-md mx-auto">
                <input type="email" placeholder="Enter your email" class="flex-1 px-4 py-3 border border-primary-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-primary-500">
                <button class="bg-accent-600 hover:bg-accent-700 text-white px-6 py-3 rounded-lg font-semibold transition-colors shadow-lg">
                    Subscribe
                </button>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>
