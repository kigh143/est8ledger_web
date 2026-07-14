<?= $this->extend('layouts/main') ?>

<?= $this->section('css') ?>
<style>
    /* Reading progress bar */
    #read-progress { position: fixed; top: 0; left: 0; height: 3px; width: 0; z-index: 60; background: linear-gradient(90deg, #3f0ee3, #7fe502); transition: width 0.1s linear; }

    .prose-primary { color: #334155; max-width: 70ch; }
    .prose-primary h1, .prose-primary h2 { color: #1e293b; font-weight: 800; line-height: 1.2; margin-top: 2.75rem; margin-bottom: 1.25rem; }
    .prose-primary h1 { font-size: 2rem; }
    .prose-primary h2 { font-size: 1.625rem; }
    .prose-primary h3 { color: #1e293b; font-weight: 700; font-size: 1.3rem; margin-top: 2rem; margin-bottom: 0.75rem; line-height: 1.3; }
    .prose-primary p { margin-bottom: 1.4rem; line-height: 1.8; color: #475569; }
    .prose-primary ul, .prose-primary ol { margin-bottom: 1.4rem; padding-left: 1.4rem; }
    .prose-primary li { margin-bottom: 0.5rem; line-height: 1.7; color: #475569; }
    .prose-primary ul li { list-style: disc; }
    .prose-primary ol li { list-style: decimal; }
    .prose-primary blockquote { border-left: 4px solid #7fe502; background: #f6f4ff; padding: 1rem 1.5rem; margin: 1.75rem 0; border-radius: 0 0.75rem 0.75rem 0; font-style: italic; color: #1e293b; }
    .prose-primary a { color: #3f0ee3; text-decoration: underline; text-underline-offset: 2px; font-weight: 500; }
    .prose-primary a:hover { color: #2b0c92; }
    .prose-primary strong { font-weight: 700; color: #1e293b; }
    .prose-primary img { border-radius: 0.75rem; margin: 1.75rem 0; }
    .prose-primary code { background: #f1f5f9; padding: 0.15rem 0.45rem; border-radius: 0.375rem; font-size: 0.875rem; }
    .prose-primary pre { background: #0f172a; color: #f8fafc; padding: 1.25rem; border-radius: 0.75rem; overflow-x: auto; margin: 1.75rem 0; }
    .prose-primary pre code { background: transparent; padding: 0; color: inherit; }
</style>

<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "BlogPosting",
    "headline": <?= json_encode($blog['title'] ?? 'Blog Article') ?>,
    "description": <?= json_encode($blog['excerpt'] ?? substr($blog['content'] ?? '', 0, 160)) ?>,
    "image": "<?= !empty($blog['featured_image']) ? 'https://est8ledger.com' . esc($blog['featured_image']) : 'https://est8ledger.com/logo_blue.png' ?>",
    "datePublished": "<?= esc($blog['published_date'] ?? date('Y-m-d')) ?>",
    "dateModified": "<?= esc($blog['updated_date'] ?? $blog['published_date'] ?? date('Y-m-d')) ?>",
    "author": { "@type": "Organization", "name": <?= json_encode($blog['author'] ?? 'est8Ledger') ?> },
    "publisher": { "@type": "Organization", "name": "est8Ledger", "logo": { "@type": "ImageObject", "url": "https://est8ledger.com/logo_blue.png" } },
    "mainEntityOfPage": { "@type": "WebPage", "@id": "<?= current_url() ?>" }
}
</script>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div id="read-progress" aria-hidden="true"></div>

<!-- ============================ ARTICLE HEADER ============================ -->
<header class="gradient-hero">
    <div class="container mx-auto px-4 pt-12 pb-10 lg:pt-16">
        <nav aria-label="Breadcrumb" class="mb-8">
            <ol class="flex items-center gap-2 text-sm text-secondary-500">
                <li><a href="/" class="hover:text-primary-700">Home</a></li>
                <li aria-hidden="true"><i class="bi bi-chevron-right text-xs"></i></li>
                <li><a href="/blogs" class="hover:text-primary-700">Blog</a></li>
                <li aria-hidden="true"><i class="bi bi-chevron-right text-xs"></i></li>
                <li class="text-secondary-700 font-medium truncate max-w-[12rem] sm:max-w-xs" aria-current="page"><?= esc($blog['title']) ?></li>
            </ol>
        </nav>

        <div class="max-w-3xl">
            <div class="flex flex-wrap gap-2 mb-5">
                <?php foreach (($blog['tags'] ?? []) as $index => $tag): ?>
                    <span class="<?= $index % 2 === 0 ? 'bg-primary-50 text-primary-700' : 'bg-accent-100 text-accent-800' ?> px-3 py-1 rounded-full text-xs font-semibold"><?= esc($tag) ?></span>
                <?php endforeach; ?>
            </div>

            <h1 class="text-3xl md:text-4xl lg:text-[2.75rem] font-extrabold text-secondary-900 leading-tight mb-5 text-balance"><?= esc($blog['title']) ?></h1>

            <p class="text-lg text-secondary-600 leading-relaxed mb-7"><?= esc($blog['excerpt']) ?></p>

            <div class="flex flex-wrap items-center gap-x-5 gap-y-2 text-sm text-secondary-500 border-t border-secondary-200/70 pt-5">
                <span class="inline-flex items-center font-medium text-secondary-700"><i class="bi bi-person-circle mr-2 text-primary-600"></i><?= esc($blog['author']) ?></span>
                <span class="inline-flex items-center"><i class="bi bi-calendar3 mr-2 text-primary-600"></i><?= date('M j, Y', strtotime($blog['published_date'])) ?></span>
                <span class="inline-flex items-center"><i class="bi bi-eye mr-2 text-primary-600"></i><?= number_format($blog['views']) ?> views</span>
            </div>
        </div>
    </div>
</header>

<!-- Featured image -->
<?php if (!empty($blog['featured_image'])): ?>
<div class="bg-gradient-to-b from-[#f6f4ff] to-white">
    <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto -mt-2">
            <img src="<?= esc($blog['featured_image']) ?>"
                 onerror="this.onerror=null;this.style.display='none';"
                 alt="<?= esc($blog['title']) ?>"
                 class="w-full h-auto max-h-[28rem] object-cover rounded-2xl shadow-xl border border-secondary-100">
        </div>
    </div>
</div>
<?php endif; ?>

<!-- ============================ CONTENT ============================ -->
<article class="py-12 lg:py-16 bg-white">
    <div class="container mx-auto px-4">
        <div class="max-w-3xl mx-auto">
            <div class="prose-primary mx-auto">
                <?= $blog['formatted_content'] ?>
            </div>

            <!-- Share -->
            <div class="mt-12 pt-8 border-t border-secondary-200">
                <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4">
                    <h2 class="text-base font-bold text-secondary-900">Share this article</h2>
                    <div class="flex flex-wrap gap-2.5">
                        <a href="https://twitter.com/intent/tweet?text=<?= urlencode($blog['title']) ?>&url=<?= urlencode(current_url()) ?>" target="_blank" rel="noopener" class="inline-flex items-center gap-2 bg-neutral-100 hover:bg-neutral-200 text-secondary-800 px-4 py-2 rounded-lg text-sm font-medium transition-colors">
                            <i class="bi bi-twitter-x"></i> Post
                        </a>
                        <a href="https://www.linkedin.com/sharing/share-offsite/?url=<?= urlencode(current_url()) ?>" target="_blank" rel="noopener" class="inline-flex items-center gap-2 bg-primary-700 hover:bg-primary-800 text-white px-4 py-2 rounded-lg text-sm font-medium transition-colors">
                            <i class="bi bi-linkedin"></i> LinkedIn
                        </a>
                        <button type="button" onclick="copyToClipboard('<?= current_url() ?>', this)" class="inline-flex items-center gap-2 bg-neutral-100 hover:bg-neutral-200 text-secondary-800 px-4 py-2 rounded-lg text-sm font-medium transition-colors">
                            <i class="bi bi-link-45deg"></i> <span class="copy-label">Copy link</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</article>

<!-- ============================ COMMENTS ============================ -->
<section class="py-12 lg:py-16 bg-neutral-50">
    <div class="container mx-auto px-4">
        <div class="max-w-3xl mx-auto">
            <h2 class="text-2xl font-extrabold text-secondary-900 mb-8">Comments (<?= count($blog['comments']) ?>)</h2>

            <!-- Comment Form -->
            <div class="bg-white p-6 lg:p-8 rounded-2xl border border-secondary-200 shadow-sm mb-10">
                <h3 class="text-lg font-bold text-secondary-900 mb-5 flex items-center">
                    <i class="bi bi-chat-square-dots text-primary-700 mr-2"></i> Leave a comment
                </h3>

                <?php if (session('success')): ?>
                    <div class="bg-accent-100 border border-accent-300 text-accent-900 px-4 py-3 rounded-lg mb-5 flex items-center" role="status">
                        <i class="bi bi-check-circle-fill mr-2"></i> <?= esc(session('success')) ?>
                    </div>
                <?php endif; ?>
                <?php if (session('error')): ?>
                    <div class="bg-red-50 border border-red-200 text-red-700 px-4 py-3 rounded-lg mb-5 flex items-center" role="alert">
                        <i class="bi bi-exclamation-circle-fill mr-2"></i> <?= esc(session('error')) ?>
                    </div>
                <?php endif; ?>

                <form action="/blog/comment" method="POST" class="space-y-4">
                    <?= csrf_field() ?>
                    <input type="hidden" name="blog_id" value="<?= $blog['id'] ?>">
                    <div class="grid sm:grid-cols-2 gap-4">
                        <div>
                            <label for="name" class="block text-sm font-semibold text-secondary-700 mb-1.5">Name *</label>
                            <input type="text" id="name" name="name" required autocomplete="name" class="w-full px-3.5 py-2.5 border border-secondary-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-primary-500 transition-colors">
                        </div>
                        <div>
                            <label for="email" class="block text-sm font-semibold text-secondary-700 mb-1.5">Email *</label>
                            <input type="email" id="email" name="email" required autocomplete="email" class="w-full px-3.5 py-2.5 border border-secondary-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-primary-500 transition-colors">
                        </div>
                    </div>
                    <div>
                        <label for="comment" class="block text-sm font-semibold text-secondary-700 mb-1.5">Comment * <span class="font-normal text-secondary-400">(200 characters max)</span></label>
                        <textarea id="comment" name="comment" rows="4" maxlength="200" required class="w-full px-3.5 py-2.5 border border-secondary-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-primary-500 transition-colors"></textarea>
                        <div class="text-xs text-secondary-500 mt-1"><span id="char-count">0</span>/200</div>
                    </div>
                    <button type="submit" class="btn-primary text-white px-6 py-2.5 rounded-lg font-semibold inline-flex items-center">
                        <i class="bi bi-send mr-2"></i> Post comment
                    </button>
                </form>
            </div>

            <!-- Existing Comments -->
            <?php if (!empty($blog['comments'])): ?>
                <div class="space-y-4">
                    <?php foreach (array_reverse($blog['comments']) as $index => $comment): ?>
                        <div class="bg-white p-6 rounded-2xl border border-secondary-200">
                            <div class="flex items-center mb-3">
                                <div class="w-10 h-10 rounded-xl <?= $index % 2 === 0 ? 'bg-primary-700 text-white' : 'bg-accent-500 text-accent-900' ?> flex items-center justify-center mr-3 font-bold">
                                    <?= strtoupper(substr($comment['name'], 0, 1)) ?>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-secondary-900"><?= esc($comment['name']) ?></h4>
                                    <p class="text-xs text-secondary-500"><?= date('M j, Y \a\t g:i A', strtotime($comment['date'])) ?></p>
                                </div>
                            </div>
                            <p class="text-secondary-700 leading-relaxed"><?= esc($comment['comment']) ?></p>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php else: ?>
                <div class="text-center text-secondary-500 py-10 bg-white rounded-2xl border border-secondary-200">
                    <i class="bi bi-chat-square-text text-4xl mb-3 text-primary-300"></i>
                    <p>No comments yet. Be the first to share your thoughts!</p>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>

<!-- ============================ BACK / CTA ============================ -->
<section class="py-14 bg-white">
    <div class="container mx-auto px-4">
        <div class="max-w-3xl mx-auto flex flex-col sm:flex-row items-center justify-between gap-4">
            <a href="/blogs" class="inline-flex items-center text-primary-700 font-semibold hover:gap-2 transition-all">
                <i class="bi bi-arrow-left mr-2"></i> Back to all articles
            </a>
            <a href="https://app.est8ledger.com" class="btn-primary text-white px-6 py-3 rounded-xl inline-flex items-center justify-center">
                PM Platform <i class="bi bi-box-arrow-up-right ml-2 text-xs"></i>
            </a>
        </div>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Char counter
        var ta = document.getElementById('comment'), cc = document.getElementById('char-count');
        if (ta && cc) ta.addEventListener('input', function () { cc.textContent = this.value.length; });

        // Reading progress
        var bar = document.getElementById('read-progress');
        if (bar) {
            var update = function () {
                var h = document.documentElement.scrollHeight - window.innerHeight;
                bar.style.width = (h > 0 ? (window.scrollY / h) * 100 : 0) + '%';
            };
            window.addEventListener('scroll', update, { passive: true });
            update();
        }
    });

    function copyToClipboard(text, btn) {
        navigator.clipboard.writeText(text).then(function () {
            var label = btn.querySelector('.copy-label');
            if (label) { var orig = label.textContent; label.textContent = 'Copied!'; setTimeout(function () { label.textContent = orig; }, 2000); }
        });
    }
</script>
<?= $this->endSection() ?>
