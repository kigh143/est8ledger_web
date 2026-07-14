<?= $this->extend('layouts/main') ?>

<?= $this->section('css') ?>
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "Blog",
    "name": "est8Ledger Blog",
    "description": "Expert insights on rental security deposit management, tenant rights, and rental industry trends in Uganda and East Africa.",
    "url": "https://est8ledger.com/blogs",
    "publisher": {
        "@type": "Organization",
        "name": "est8Ledger",
        "logo": { "@type": "ImageObject", "url": "https://est8ledger.com/logo_blue.png" }
    }
}
</script>
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<!-- ============================ HERO ============================ -->
<section class="relative gradient-hero overflow-hidden">
    <div class="container mx-auto px-4 pt-14 pb-16 lg:pt-20 lg:pb-20">
        <nav aria-label="Breadcrumb" class="mb-8">
            <ol class="flex items-center gap-2 text-sm text-secondary-500">
                <li><a href="/" class="hover:text-primary-700" data-breadcrumb>Home</a></li>
                <li aria-hidden="true"><i class="bi bi-chevron-right text-xs"></i></li>
                <li class="text-secondary-700 font-medium" aria-current="page">Blog</li>
            </ol>
        </nav>

        <div class="max-w-3xl">
            <div class="inline-flex items-center bg-primary-50 border border-primary-100 text-primary-700 px-4 py-1.5 rounded-full text-sm font-semibold mb-5">
                <span class="w-2 h-2 rounded-full bg-accent-500 mr-2"></span>
                Insights &amp; resources
            </div>
            <h1 class="text-4xl sm:text-5xl font-extrabold text-secondary-900 leading-[1.1] mb-5 text-balance">
                Rental deposit
                <span class="relative whitespace-nowrap">
                    <span class="relative z-10">insights</span>
                    <span class="absolute left-0 bottom-1 h-3 w-full bg-accent-300/70 rounded -z-0" aria-hidden="true"></span>
                </span>
                &amp; news
            </h1>
            <p class="text-lg text-secondary-600 leading-relaxed">
                Expert takes on rental security deposit management, tenant rights, landlord best practices, and
                the future of rentals in Uganda and East Africa.
            </p>
        </div>
    </div>
</section>

<!-- ============================ ARTICLES ============================ -->
<section class="section-padding bg-white">
    <div class="container mx-auto px-4">
        <?php if (empty($blogs)): ?>
            <div class="max-w-xl mx-auto bg-neutral-50 border border-secondary-200 rounded-2xl p-12 text-center">
                <div class="w-16 h-16 rounded-2xl bg-primary-50 text-primary-700 flex items-center justify-center mx-auto mb-5">
                    <i class="bi bi-journal-text text-2xl"></i>
                </div>
                <h3 class="text-xl font-bold text-secondary-900 mb-2">No articles yet</h3>
                <p class="text-secondary-600">Check back soon for insights on rental management and security deposits.</p>
            </div>
        <?php else: ?>
            <?php
            $featured = ($currentPage === 1) ? $blogs[0] : null;
            $rest = ($currentPage === 1) ? array_slice($blogs, 1) : $blogs;
            $fallback = '/logo_blue.png';
            ?>

            <?php if ($featured): ?>
            <!-- Featured -->
            <article class="card-lift bg-white border border-secondary-200 rounded-2xl overflow-hidden grid lg:grid-cols-2 mb-12">
                <a href="/blog/<?= esc($featured['slug'] ?? '') ?>" class="block relative bg-secondary-100 aspect-[16/10] lg:aspect-auto overflow-hidden">
                    <img src="<?= !empty($featured['featured_image']) ? esc($featured['featured_image']) : $fallback ?>"
                         onerror="this.onerror=null;this.src='<?= $fallback ?>';this.classList.add('object-contain','p-10','bg-primary-50');"
                         alt="<?= esc($featured['title'] ?? 'Featured article') ?>"
                         class="w-full h-full object-cover">
                    <span class="absolute top-4 left-4 bg-accent-500 text-accent-900 text-xs font-bold px-3 py-1 rounded-full shadow">Featured</span>
                </a>
                <div class="p-8 lg:p-10 flex flex-col justify-center">
                    <div class="flex items-center flex-wrap gap-3 text-sm text-secondary-500 mb-4">
                        <?php if (!empty($featured['tags'][0])): ?>
                            <span class="bg-primary-50 text-primary-700 text-xs font-semibold px-3 py-1 rounded-full"><?= esc($featured['tags'][0]) ?></span>
                        <?php endif; ?>
                        <time datetime="<?= esc($featured['published_date'] ?? date('Y-m-d')) ?>"><i class="bi bi-calendar3 mr-1"></i><?= date('M j, Y', strtotime($featured['published_date'] ?? date('Y-m-d'))) ?></time>
                        <span><i class="bi bi-eye mr-1"></i><?= number_format($featured['views'] ?? 0) ?></span>
                    </div>
                    <h2 class="text-2xl lg:text-3xl font-extrabold text-secondary-900 mb-4 leading-tight">
                        <a href="/blog/<?= esc($featured['slug'] ?? '') ?>" class="hover:text-primary-700 transition-colors"><?= esc($featured['title'] ?? 'Untitled') ?></a>
                    </h2>
                    <p class="text-secondary-600 leading-relaxed mb-6"><?= esc(substr($featured['excerpt'] ?? $featured['content'] ?? '', 0, 200)) ?>…</p>
                    <a href="/blog/<?= esc($featured['slug'] ?? '') ?>" class="text-primary-700 font-semibold inline-flex items-center hover:gap-2 transition-all">
                        Read full article <i class="bi bi-arrow-right ml-2"></i>
                    </a>
                </div>
            </article>
            <?php endif; ?>

            <!-- Grid -->
            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6 animate-stagger">
                <?php foreach ($rest as $blog): ?>
                <article class="stagger-item card-lift bg-white border border-secondary-200 rounded-2xl overflow-hidden flex flex-col">
                    <a href="/blog/<?= esc($blog['slug'] ?? '') ?>" class="block relative bg-secondary-100 aspect-[16/10] overflow-hidden">
                        <img src="<?= !empty($blog['featured_image']) ? esc($blog['featured_image']) : $fallback ?>"
                             onerror="this.onerror=null;this.src='<?= $fallback ?>';this.classList.add('object-contain','p-8','bg-primary-50');"
                             alt="<?= esc($blog['title'] ?? 'Blog article') ?>"
                             class="w-full h-full object-cover" loading="lazy">
                    </a>
                    <div class="p-6 flex flex-col flex-1">
                        <div class="flex items-center flex-wrap gap-2 text-xs text-secondary-500 mb-3">
                            <?php if (!empty($blog['tags'][0])): ?>
                                <span class="bg-primary-50 text-primary-700 font-semibold px-2.5 py-1 rounded-full"><?= esc($blog['tags'][0]) ?></span>
                            <?php endif; ?>
                            <time datetime="<?= esc($blog['published_date'] ?? date('Y-m-d')) ?>"><?= date('M j, Y', strtotime($blog['published_date'] ?? date('Y-m-d'))) ?></time>
                        </div>
                        <h3 class="text-lg font-bold text-secondary-900 mb-2 leading-snug line-clamp-2">
                            <a href="/blog/<?= esc($blog['slug'] ?? '') ?>" class="hover:text-primary-700 transition-colors"><?= esc($blog['title'] ?? 'Untitled') ?></a>
                        </h3>
                        <p class="text-secondary-600 text-sm leading-relaxed mb-4 line-clamp-3"><?= esc(substr($blog['excerpt'] ?? $blog['content'] ?? '', 0, 130)) ?>…</p>
                        <div class="mt-auto flex items-center justify-between pt-4 border-t border-secondary-100">
                            <a href="/blog/<?= esc($blog['slug'] ?? '') ?>" class="text-primary-700 text-sm font-semibold inline-flex items-center hover:gap-1.5 transition-all">
                                Read more <i class="bi bi-arrow-right ml-1.5"></i>
                            </a>
                            <span class="text-xs text-secondary-400"><i class="bi bi-eye mr-1"></i><?= number_format($blog['views'] ?? 0) ?></span>
                        </div>
                    </div>
                </article>
                <?php endforeach; ?>
            </div>

            <!-- Pagination -->
            <?php if ($totalPages > 1): ?>
            <nav aria-label="Blog pagination" class="mt-14">
                <div class="flex justify-center items-center gap-2 flex-wrap">
                    <?php if ($currentPage > 1): ?>
                        <a href="/blogs?page=<?= $currentPage - 1 ?>" class="px-4 py-2.5 text-secondary-700 bg-white border border-secondary-200 hover:border-primary-300 hover:text-primary-700 rounded-lg transition-colors inline-flex items-center font-medium">
                            <i class="bi bi-chevron-left mr-1.5"></i> Previous
                        </a>
                    <?php else: ?>
                        <span class="px-4 py-2.5 text-secondary-400 bg-neutral-100 rounded-lg inline-flex items-center font-medium cursor-not-allowed"><i class="bi bi-chevron-left mr-1.5"></i> Previous</span>
                    <?php endif; ?>

                    <?php
                        $startPage = max(1, $currentPage - 2);
                        $endPage = min($totalPages, $currentPage + 2);
                        if ($startPage > 1): ?>
                            <a href="/blogs?page=1" class="w-10 h-10 flex items-center justify-center text-secondary-700 bg-white border border-secondary-200 hover:border-primary-300 rounded-lg transition-colors font-medium">1</a>
                            <?php if ($startPage > 2): ?><span class="px-2 text-secondary-400">…</span><?php endif; ?>
                        <?php endif; ?>

                        <?php for ($i = $startPage; $i <= $endPage; $i++): ?>
                            <?php if ($i === $currentPage): ?>
                                <span aria-current="page" class="w-10 h-10 flex items-center justify-center bg-primary-700 text-white rounded-lg font-semibold"><?= $i ?></span>
                            <?php else: ?>
                                <a href="/blogs?page=<?= $i ?>" class="w-10 h-10 flex items-center justify-center text-secondary-700 bg-white border border-secondary-200 hover:border-primary-300 rounded-lg transition-colors font-medium"><?= $i ?></a>
                            <?php endif; ?>
                        <?php endfor; ?>

                        <?php if ($endPage < $totalPages): ?>
                            <?php if ($endPage < $totalPages - 1): ?><span class="px-2 text-secondary-400">…</span><?php endif; ?>
                            <a href="/blogs?page=<?= $totalPages ?>" class="w-10 h-10 flex items-center justify-center text-secondary-700 bg-white border border-secondary-200 hover:border-primary-300 rounded-lg transition-colors font-medium"><?= $totalPages ?></a>
                        <?php endif; ?>

                    <?php if ($currentPage < $totalPages): ?>
                        <a href="/blogs?page=<?= $currentPage + 1 ?>" class="px-4 py-2.5 text-secondary-700 bg-white border border-secondary-200 hover:border-primary-300 hover:text-primary-700 rounded-lg transition-colors inline-flex items-center font-medium">
                            Next <i class="bi bi-chevron-right ml-1.5"></i>
                        </a>
                    <?php else: ?>
                        <span class="px-4 py-2.5 text-secondary-400 bg-neutral-100 rounded-lg inline-flex items-center font-medium cursor-not-allowed">Next <i class="bi bi-chevron-right ml-1.5"></i></span>
                    <?php endif; ?>
                </div>
                <p class="text-center mt-4 text-sm text-secondary-500">Page <?= $currentPage ?> of <?= $totalPages ?> · <?= $totalBlogs ?> articles</p>
            </nav>
            <?php endif; ?>
        <?php endif; ?>
    </div>
</section>

<!-- ============================ CTA ============================ -->
<section class="py-16 bg-neutral-50">
    <div class="container mx-auto px-4">
        <div class="gradient-cta rounded-3xl px-8 py-12 lg:px-16 flex flex-col lg:flex-row items-center justify-between gap-6 relative overflow-hidden">
            <div class="text-center lg:text-left relative z-10">
                <h2 class="text-2xl lg:text-3xl font-extrabold text-white mb-2">Put these insights into practice</h2>
                <p class="text-white/85">Manage your rental deposits the transparent, dispute-proof way.</p>
            </div>
            <a href="https://app.est8ledger.com" class="btn-accent px-8 py-3.5 rounded-xl inline-flex items-center justify-center shrink-0 relative z-10">
                PM Platform <i class="bi bi-box-arrow-up-right ml-2 text-xs"></i>
            </a>
        </div>
    </div>
</section>

<?= $this->endSection() ?>
