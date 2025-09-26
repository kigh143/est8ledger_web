<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<!-- Blog Header -->
<div class="bg-slate-50 py-16">
    <div class="container mx-auto px-4 text-center">
        <div class="inline-flex items-center bg-white border border-[#9eff6b] text-slate-700 px-4 py-2 rounded-lg text-sm font-medium mb-6 shadow-lg">
            <i class="bi bi-journal-text mr-2 text-[#0d06c8]"></i>
            Latest Insights
        </div>
        <h1 class="text-4xl font-bold text-slate-900 mb-6">Latest Insights & Tips</h1>
        <p class="text-xl text-slate-700 max-w-3xl mx-auto bg-white p-4 rounded-lg border border-slate-200 shadow-sm">Stay updated with the latest in security deposit management, rental technology, and property management best practices</p>
    </div>
</div>

<!-- Blog Posts -->
<div class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <?php if (empty($blogs)): ?>
            <div class="text-center text-slate-500 bg-slate-50 p-12 rounded-2xl shadow-lg border border-slate-100">
                <i class="bi bi-journal-text text-6xl mb-4 text-[#9eff6b]"></i>
                <p class="text-xl">Blog posts coming soon...</p>
            </div>
        <?php else: ?>
            <div class="grid lg:grid-cols-3 gap-8">
                <?php foreach ($blogs as $index => $blog): ?>
                    <?php 
                    $cardColors = [
                        'border-[#9eff6b] hover:border-[#8ef55a]',
                        'border-[#0d06c8] hover:border-[#0b05b0]'
                    ];
                    $tagColors = [
                        'bg-[#9eff6b] text-slate-800',
                        'bg-[#0d06c8] text-white'
                    ];
                    $cardClass = $cardColors[$index % count($cardColors)];
                    $tagClass = $tagColors[$index % count($tagColors)];
                    ?>
                    <article class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-all duration-300 border-2 <?= $cardClass ?> transform hover:-translate-y-1">
                        <div class="relative">
                            <img src="<?= esc($blog['featured_image']) ?>" alt="<?= esc($blog['title']) ?>" class="w-full h-48 object-cover">
                            <div class="absolute top-4 left-4">
                                <span class="<?= $tagClass ?> px-3 py-1 rounded-full text-sm font-semibold shadow-lg">
                                    <?= esc($blog['tags'][0] ?? 'Blog') ?>
                                </span>
                            </div>
                            <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent"></div>
                        </div>

                        <div class="p-6">
                            <div class="flex items-center text-sm text-slate-500 mb-3">
                                <i class="bi bi-calendar mr-2 text-[#9eff6b]"></i>
                                <span><?= date('M j, Y', strtotime($blog['published_date'])) ?></span>
                                <span class="mx-2">•</span>
                                <i class="bi bi-eye mr-1 text-[#0d06c8]"></i>
                                <span><?= number_format($blog['views']) ?> views</span>
                            </div>

                            <h2 class="text-xl font-bold text-slate-800 mb-3 line-clamp-2">
                                <a href="/blog/<?= esc($blog['slug']) ?>" class="hover:text-[#0d06c8] transition-all">
                                    <?= esc($blog['title']) ?>
                                </a>
                            </h2>

                            <p class="text-slate-600 mb-4 line-clamp-3">
                                <?= esc($blog['excerpt']) ?>
                            </p>

                            <div class="flex items-center justify-between">
                                <div class="flex items-center">
                                    <?php 
                                    $authorColors = [
                                        'bg-[#9eff6b] text-slate-800',
                                        'bg-[#0d06c8] text-white'
                                    ];
                                    $authorClass = $authorColors[$index % count($authorColors)];
                                    ?>
                                    <div class="w-8 h-8 <?= $authorClass ?> rounded-full flex items-center justify-center mr-3">
                                        <i class="bi bi-person text-sm"></i>
                                    </div>
                                    <span class="text-sm text-slate-600"><?= esc($blog['author']) ?></span>
                                </div>

                                <a href="/blog/<?= esc($blog['slug']) ?>" class="bg-[#0d06c8] hover:bg-[#0b05b0] text-white font-semibold text-sm transition-all flex items-center px-3 py-1.5 rounded-lg shadow-md hover:shadow-lg transform hover:-translate-y-0.5">
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
                <h3 class="text-2xl font-bold text-slate-900 mb-6">Popular Topics</h3>
                <div class="flex flex-wrap justify-center gap-3">
                    <?php
                    $allTags = [];
                    foreach ($blogs as $blog) {
                        $allTags = array_merge($allTags, $blog['tags']);
                    }
                    $popularTags = array_unique($allTags);
                    ?>
                    <?php foreach (array_slice($popularTags, 0, 8) as $index => $tag): ?>
                        <?php 
                        $tagHoverColors = [
                            'hover:bg-[#9eff6b] hover:text-slate-800 hover:border-[#9eff6b]',
                            'hover:bg-[#0d06c8] hover:text-white hover:border-[#0d06c8]'
                        ];
                        $hoverClass = $tagHoverColors[$index % count($tagHoverColors)];
                        ?>
                        <span class="bg-white <?= $hoverClass ?> text-slate-700 px-4 py-2 rounded-full text-sm transition-all cursor-pointer border border-slate-200 shadow-md hover:shadow-lg transform hover:-translate-y-0.5">
                            <?= esc($tag) ?>
                        </span>
                    <?php endforeach; ?>
                </div>
            </div>
        <?php endif; ?>
    </div>
</div>

<!-- Newsletter Signup -->
<div class="py-16 bg-slate-50">
    <div class="container mx-auto px-4 text-center">
        <div class="max-w-2xl mx-auto">
            <div class="inline-flex items-center bg-white border border-[#0d06c8] text-slate-700 px-4 py-2 rounded-lg text-sm font-medium mb-6 shadow-lg">
                <i class="bi bi-envelope mr-2 text-[#9eff6b]"></i>
                Newsletter
            </div>
            <h3 class="text-3xl font-bold text-slate-900 mb-4">Stay Updated</h3>
            <p class="text-slate-700 mb-8 bg-white p-4 rounded-lg border border-slate-200 shadow-sm">Get the latest insights on security deposit management and rental technology delivered to your inbox.</p>

            <div class="flex flex-col sm:flex-row gap-4 max-w-md mx-auto">
                <input type="email" placeholder="Enter your email" class="flex-1 px-4 py-3 border border-slate-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#9eff6b] focus:border-[#9eff6b] bg-white transition-all">
                <button class="bg-[#0d06c8] hover:bg-[#0b05b0] text-white px-6 py-3 rounded-lg font-semibold transition-all shadow-lg hover:shadow-xl transform hover:-translate-y-0.5">
                    Subscribe
                </button>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>
