<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<!-- Blog Header -->
<div class="bg-gradient-to-br from-slate-50 to-white py-20">
    <div class="container mx-auto px-4 text-center">
        <div class="inline-flex items-center bg-[#9eff6b]/10 text-[#0d06c8] px-4 py-2 rounded-full text-sm font-medium mb-6">
            <i class="bi bi-journal-text mr-2"></i>
            Latest Insights
        </div>
        <h1 class="text-5xl font-bold text-slate-900 mb-6">Latest Insights & Tips</h1>
        <p class="text-xl text-slate-600 max-w-3xl mx-auto">Stay updated with the latest in security deposit management, rental technology, and property management best practices</p>
    </div>
</div>

<!-- Blog Posts -->
<div class="py-20 bg-white">
    <div class="container mx-auto px-4">
        <?php if (empty($blogs)): ?>
            <div class="text-center text-slate-500 bg-slate-50 p-16 rounded-3xl">
                <i class="bi bi-journal-text text-6xl mb-6 text-[#9eff6b]"></i>
                <h3 class="text-2xl font-semibold mb-2">Blog posts coming soon...</h3>
                <p class="text-slate-400">We're working on some amazing content for you!</p>
            </div>
        <?php else: ?>
            <div class="grid lg:grid-cols-3 md:grid-cols-2 gap-8">
                <?php foreach ($blogs as $index => $blog): ?>
                    <article class="group bg-white rounded-2xl overflow-hidden hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2">
                        <!-- Image Container -->
                        <div class="relative overflow-hidden">
                            <img src="<?= esc($blog['featured_image']) ?>" 
                                 alt="<?= esc($blog['title']) ?>" 
                                 class="w-full h-56 object-cover group-hover:scale-105 transition-transform duration-500">
                            
                            <!-- Tag Overlay -->
                            <div class="absolute top-4 left-4">
                                <span class="bg-white/90 backdrop-blur-sm text-[#0d06c8] px-3 py-1 rounded-full text-sm font-semibold shadow-lg">
                                    <?= esc($blog['tags'][0] ?? 'Blog') ?>
                                </span>
                            </div>
                            
                            <!-- Gradient Overlay -->
                            <div class="absolute inset-0 bg-gradient-to-t from-black/30 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                        </div>

                        <!-- Content -->
                        <div class="p-6">
                            <!-- Meta Info -->
                            <div class="flex items-center text-sm text-slate-500 mb-4 space-x-4">
                                <div class="flex items-center">
                                    <i class="bi bi-calendar mr-1 text-[#9eff6b]"></i>
                                    <span><?= date('M j, Y', strtotime($blog['published_date'])) ?></span>
                                </div>
                                <div class="flex items-center">
                                    <i class="bi bi-eye mr-1 text-[#0d06c8]"></i>
                                    <span><?= number_format($blog['views']) ?></span>
                                </div>
                            </div>

                            <!-- Title -->
                            <h2 class="text-xl font-bold text-slate-900 mb-3 line-clamp-2 group-hover:text-[#0d06c8] transition-colors">
                                <a href="/blog/<?= esc($blog['slug']) ?>">
                                    <?= esc($blog['title']) ?>
                                </a>
                            </h2>

                            <!-- Excerpt -->
                            <p class="text-slate-600 mb-6 line-clamp-3 leading-relaxed">
                                <?= esc($blog['excerpt']) ?>
                            </p>

                            <!-- Footer -->
                            <div class="flex items-center justify-between pt-4 border-t border-slate-100">
                                <!-- Author -->
                                <div class="flex items-center">
                                    <div class="w-8 h-8 bg-[#9eff6b]/20 text-[#0d06c8] rounded-full flex items-center justify-center mr-3">
                                        <i class="bi bi-person text-sm"></i>
                                    </div>
                                    <span class="text-sm text-slate-600 font-medium"><?= esc($blog['author']) ?></span>
                                </div>

                                <!-- Read More -->
                                <a href="/blog/<?= esc($blog['slug']) ?>" 
                                   class="text-[#0d06c8] hover:text-[#0b05b0] font-semibold text-sm flex items-center group-hover:translate-x-1 transition-transform">
                                    Read More 
                                    <i class="bi bi-arrow-right ml-1"></i>
                                </a>
                            </div>
                        </div>
                    </article>
                <?php endforeach; ?>
            </div>

            <!-- Popular Topics -->
            <div class="mt-20 text-center">
                <h3 class="text-3xl font-bold text-slate-900 mb-8">Popular Topics</h3>
                <div class="flex flex-wrap justify-center gap-3 max-w-4xl mx-auto">
                    <?php
                    $allTags = [];
                    foreach ($blogs as $blog) {
                        $allTags = array_merge($allTags, $blog['tags']);
                    }
                    $popularTags = array_unique($allTags);
                    ?>
                    <?php foreach (array_slice($popularTags, 0, 8) as $index => $tag): ?>
                        <span class="bg-slate-100 hover:bg-[#9eff6b]/20 hover:text-[#0d06c8] text-slate-700 px-4 py-2 rounded-full text-sm font-medium transition-all cursor-pointer hover:shadow-md transform hover:-translate-y-0.5">
                            <?= esc($tag) ?>
                        </span>
                    <?php endforeach; ?>
                </div>
            </div>
        <?php endif; ?>
    </div>
</div>

<!-- Newsletter Signup -->
<div class="py-20 bg-gradient-to-br from-slate-50 to-white">
    <div class="container mx-auto px-4 text-center">
        <div class="max-w-2xl mx-auto">
            <div class="inline-flex items-center bg-[#0d06c8]/10 text-[#0d06c8] px-4 py-2 rounded-full text-sm font-medium mb-6">
                <i class="bi bi-envelope mr-2"></i>
                Newsletter
            </div>
            <h3 class="text-4xl font-bold text-slate-900 mb-4">Stay Updated</h3>
            <p class="text-slate-600 mb-8 text-lg">Get the latest insights on security deposit management and rental technology delivered to your inbox.</p>

            <div class="flex flex-col sm:flex-row gap-4 max-w-md mx-auto">
                <input type="email" 
                       placeholder="Enter your email" 
                       class="flex-1 px-4 py-3 border border-slate-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-[#9eff6b] focus:border-[#9eff6b] bg-white transition-all shadow-sm">
                <button class="bg-[#0d06c8] hover:bg-[#0b05b0] text-white px-6 py-3 rounded-xl font-semibold transition-all shadow-lg hover:shadow-xl transform hover:-translate-y-0.5">
                    Subscribe
                </button>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>
