<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<style>
    .prose-primary {
        color: #374151;
    }
    .prose-primary h1 {
        color: #0d06c8;
        font-weight: 700;
        margin-top: 3rem;
        margin-bottom: 2rem;
        line-height: 1.2;
    }
    .prose-primary h2 {
        color: #0d06c8;
        font-weight: 700;
        margin-top: 2.5rem;
        margin-bottom: 1.5rem;
        line-height: 1.3;
    }
    .prose-primary h3 {
        color: #374151;
        font-weight: 600;
        margin-top: 2rem;
        margin-bottom: 1rem;
        line-height: 1.4;
    }
    .prose-primary p {
        margin-bottom: 1.5rem;
        line-height: 1.7;
        color: #4b5563;
    }
    .prose-primary ul, .prose-primary ol {
        margin-bottom: 1.5rem;
        padding-left: 1.5rem;
    }
    .prose-primary li {
        margin-bottom: 0.5rem;
        line-height: 1.6;
    }
    .prose-primary blockquote {
        border-left: 4px solid #9eff6b;
        background-color: #f0fdf4;
        padding: 1rem 1.5rem;
        margin: 1.5rem 0;
        font-style: italic;
        color: #166534;
    }
    .prose-primary code {
        background-color: #f3f4f6;
        padding: 0.25rem 0.5rem;
        border-radius: 0.375rem;
        font-size: 0.875rem;
        font-family: 'Courier New', monospace;
    }
    .prose-primary pre {
        background-color: #1f2937;
        color: #f9fafb;
        padding: 1.5rem;
        border-radius: 0.5rem;
        overflow-x: auto;
        margin: 1.5rem 0;
    }
    .prose-primary pre code {
        background-color: transparent;
        padding: 0;
        color: inherit;
    }
    .prose-primary a {
        color: #0d06c8;
        text-decoration: underline;
        font-weight: 500;
    }
    .prose-primary a:hover {
        color: #0a0599;
    }
    .prose-primary strong {
        font-weight: 600;
        color: #374151;
    }
</style>

<!-- Blog Header -->
<div class="bg-gradient-to-br from-primary-50 to-primary-100 py-16">
    <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto text-center">
            <div class="flex flex-wrap justify-center gap-2 mb-4">
                <?php foreach ($blog['tags'] as $tag): ?>
                    <span class="bg-primary-600 text-white px-3 py-1 rounded-full text-sm font-semibold shadow-lg">
                        <?= esc($tag) ?>
                    </span>
                <?php endforeach; ?>
            </div>

            <h1 class="text-4xl lg:text-5xl font-bold text-primary-900 mb-6"><?= esc($blog['title']) ?></h1>

            <div class="flex items-center justify-center text-primary-700 mb-6">
                <div class="flex items-center mr-6">
                    <i class="bi bi-person mr-2"></i>
                    <span><?= esc($blog['author']) ?></span>
                </div>
                <div class="flex items-center mr-6">
                    <i class="bi bi-calendar mr-2"></i>
                    <span><?= date('M j, Y', strtotime($blog['published_date'])) ?></span>
                </div>
                <div class="flex items-center">
                    <i class="bi bi-eye mr-2"></i>
                    <span><?= number_format($blog['views']) ?> views</span>
                </div>
            </div>

            <p class="text-xl text-primary-700 max-w-3xl mx-auto"><?= esc($blog['excerpt']) ?></p>
        </div>
    </div>
</div>

<!-- Blog Content -->
<div class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto">
            <article class="prose prose-lg prose-primary max-w-none">
                <?= $blog['formatted_content'] ?>
            </article>

            <!-- Share Buttons -->
            <div class="mt-12 pt-8 border-t border-secondary-200">
                <h3 class="text-lg font-semibold text-secondary-900 mb-4">Share this article</h3>
                <div class="flex space-x-4">
                    <a href="https://twitter.com/intent/tweet?text=<?= urlencode($blog['title']) ?>&url=<?= urlencode(current_url()) ?>"
                       target="_blank"
                       class="bg-primary-600 hover:bg-primary-700 text-white px-4 py-2 rounded-lg transition-colors shadow-lg">
                        <i class="bi bi-twitter mr-2"></i>Twitter
                    </a>
                    <a href="https://www.linkedin.com/sharing/share-offsite/?url=<?= urlencode(current_url()) ?>"
                       target="_blank"
                       class="bg-primary-700 hover:bg-primary-800 text-white px-4 py-2 rounded-lg transition-colors shadow-lg">
                        <i class="bi bi-linkedin mr-2"></i>LinkedIn
                    </a>
                    <button onclick="copyToClipboard('<?= current_url() ?>')"
                            class="bg-secondary-600 hover:bg-secondary-700 text-white px-4 py-2 rounded-lg transition-colors shadow-lg">
                        <i class="bi bi-link mr-2"></i>Copy Link
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Comments Section -->
<div class="py-16 bg-gradient-to-br from-secondary-50 to-primary-50">
    <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto">
            <h3 class="text-2xl font-bold text-secondary-900 mb-8">Comments (<?= count($blog['comments']) ?>)</h3>

            <!-- Comment Form -->
            <div class="bg-white p-6 rounded-xl shadow-lg border border-primary-100 mb-8">
                <h4 class="text-lg font-semibold text-secondary-900 mb-4">Leave a Comment</h4>

                <?php if (session('success')): ?>
                    <div class="bg-accent-100 border border-accent-400 text-accent-800 px-4 py-3 rounded mb-4">
                        <i class="bi bi-check-circle mr-2"></i>
                        <?= session('success') ?>
                    </div>
                <?php endif; ?>

                <?php if (session('error')): ?>
                    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
                        <i class="bi bi-exclamation-circle mr-2"></i>
                        <?= session('error') ?>
                    </div>
                <?php endif; ?>

                <form action="/blog/comment" method="POST" class="space-y-4">
                    <?= csrf_field() ?>
                    <input type="hidden" name="blog_id" value="<?= $blog['id'] ?>">

                    <div class="grid md:grid-cols-2 gap-4">
                        <div>
                            <label for="name" class="block text-sm font-medium text-secondary-700 mb-1">Name *</label>
                            <input type="text" id="name" name="name" required
                                   class="w-full px-3 py-2 border border-secondary-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-primary-500">
                        </div>
                        <div>
                            <label for="email" class="block text-sm font-medium text-secondary-700 mb-1">Email *</label>
                            <input type="email" id="email" name="email" required
                                   class="w-full px-3 py-2 border border-secondary-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-primary-500">
                        </div>
                    </div>

                    <div>
                        <label for="comment" class="block text-sm font-medium text-secondary-700 mb-1">Comment * (200 characters max)</label>
                        <textarea id="comment" name="comment" rows="4" maxlength="200" required
                                  class="w-full px-3 py-2 border border-secondary-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-primary-500"></textarea>
                        <div class="text-sm text-secondary-500 mt-1">
                            <span id="char-count">0</span>/200 characters
                        </div>
                    </div>

                    <button type="submit" class="bg-accent-600 hover:bg-accent-700 text-white px-6 py-2 rounded-lg font-semibold transition-colors shadow-lg">
                        <i class="bi bi-send mr-2"></i>
                        Post Comment
                    </button>
                </form>
            </div>

            <!-- Existing Comments -->
            <?php if (!empty($blog['comments'])): ?>
                <div class="space-y-6">
                    <?php foreach (array_reverse($blog['comments']) as $comment): ?>
                        <div class="bg-white p-6 rounded-xl shadow-lg border border-secondary-100">
                            <div class="flex items-center mb-3">
                                <div class="w-10 h-10 bg-primary-100 rounded-full flex items-center justify-center mr-3">
                                    <i class="bi bi-person text-primary-600"></i>
                                </div>
                                <div>
                                    <h5 class="font-semibold text-secondary-900"><?= esc($comment['name']) ?></h5>
                                    <p class="text-sm text-secondary-500"><?= date('M j, Y \a\t g:i A', strtotime($comment['date'])) ?></p>
                                </div>
                            </div>
                            <p class="text-secondary-700"><?= esc($comment['comment']) ?></p>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php else: ?>
                <div class="text-center text-secondary-500 py-8">
                    <i class="bi bi-chat text-4xl mb-4 text-primary-300"></i>
                    <p>No comments yet. Be the first to share your thoughts!</p>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>

<!-- Related Posts -->
<div class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto text-center">
            <h3 class="text-2xl font-bold text-secondary-900 mb-8">Continue Reading</h3>
            <a href="/blogs" class="bg-primary-600 hover:bg-primary-700 text-white px-8 py-3 rounded-lg font-semibold transition-colors inline-block shadow-lg">
                <i class="bi bi-arrow-left mr-2"></i>
                View All Blog Posts
            </a>
        </div>
    </div>
</div>

<script>
    // Character counter for comment textarea
    document.addEventListener('DOMContentLoaded', function() {
        const commentTextarea = document.getElementById('comment');
        const charCount = document.getElementById('char-count');

        if (commentTextarea && charCount) {
            commentTextarea.addEventListener('input', function() {
                charCount.textContent = this.value.length;
            });
        }
    });

    // Copy to clipboard function
    function copyToClipboard(text) {
        navigator.clipboard.writeText(text).then(function() {
            alert('Link copied to clipboard!');
        });
    }
</script>
<?= $this->endSection() ?>
