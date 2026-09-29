<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<?php
$fallback = '/logo_blue.png';
$pageUrl = static function (int $p) use ($q): string {
    $params = ['page' => $p];
    if ($q !== '') {
        $params['q'] = $q;
    }
    return '/listings?' . http_build_query($params);
};
?>

<!-- ============================ HERO ============================ -->
<section class="relative gradient-hero overflow-hidden">
    <div class="container mx-auto px-4 pt-14 pb-16 lg:pt-20 lg:pb-20">
        <nav aria-label="Breadcrumb" class="mb-8">
            <ol class="flex items-center gap-2 text-sm text-secondary-500">
                <li><a href="/" class="hover:text-primary-700" data-breadcrumb>Home</a></li>
                <li aria-hidden="true"><i class="bi bi-chevron-right text-xs"></i></li>
                <li class="text-secondary-700 font-medium" aria-current="page">Listings</li>
            </ol>
        </nav>

        <div class="max-w-3xl">
            <div class="inline-flex items-center bg-primary-50 border border-primary-100 text-primary-700 px-4 py-1.5 rounded-full text-sm font-semibold mb-5">
                <span class="w-2 h-2 rounded-full bg-accent-500 mr-2"></span>
                Properties for rent
            </div>
            <h1 class="text-4xl sm:text-5xl font-extrabold text-secondary-900 leading-[1.1] mb-5 text-balance">
                Find your next
                <span class="relative whitespace-nowrap">
                    <span class="relative z-10">home</span>
                    <span class="absolute left-0 bottom-1 h-3 w-full bg-accent-300/70 rounded -z-0" aria-hidden="true"></span>
                </span>
            </h1>
            <p class="text-lg text-secondary-600 leading-relaxed mb-8">
                Rentals from landlords on est8Ledger, where your security deposit is protected and move-in and move-out
                inspections are recorded digitally.
            </p>

            <form action="/listings" method="get" role="search" class="flex flex-col sm:flex-row gap-3 max-w-2xl">
                <label for="listing-search" class="sr-only">Search listings</label>
                <div class="relative flex-1">
                    <i class="bi bi-search absolute left-4 top-1/2 -translate-y-1/2 text-secondary-400" aria-hidden="true"></i>
                    <input id="listing-search" type="search" name="q" value="<?= esc($q) ?>" maxlength="100"
                           placeholder="Search by area, city or property name"
                           class="w-full pl-11 pr-4 py-3.5 rounded-xl border border-secondary-200 bg-white text-secondary-900 focus:outline-none focus:ring-2 focus:ring-primary-500">
                </div>
                <button type="submit" class="btn-primary text-white px-6 py-3.5 rounded-xl font-semibold inline-flex items-center justify-center">
                    Search
                </button>
            </form>
        </div>
    </div>
</section>

<!-- ============================ LISTINGS ============================ -->
<section class="section-padding bg-white">
    <div class="container mx-auto px-4">
        <?php if ($loadFailed): ?>
            <div class="max-w-xl mx-auto bg-neutral-50 border border-secondary-200 rounded-2xl p-12 text-center">
                <div class="w-16 h-16 rounded-2xl bg-primary-50 text-primary-700 flex items-center justify-center mx-auto mb-5">
                    <i class="bi bi-wifi-off text-2xl"></i>
                </div>
                <h2 class="text-xl font-bold text-secondary-900 mb-2">Listings are unavailable right now</h2>
                <p class="text-secondary-600">Please try again in a few minutes.</p>
            </div>
        <?php elseif (empty($listings)): ?>
            <div class="max-w-xl mx-auto bg-neutral-50 border border-secondary-200 rounded-2xl p-12 text-center">
                <div class="w-16 h-16 rounded-2xl bg-primary-50 text-primary-700 flex items-center justify-center mx-auto mb-5">
                    <i class="bi bi-house-door text-2xl"></i>
                </div>
                <?php if ($q !== ''): ?>
                    <h2 class="text-xl font-bold text-secondary-900 mb-2">No listings match “<?= esc($q) ?>”</h2>
                    <p class="text-secondary-600 mb-5">Try a different area or property name.</p>
                    <a href="/listings" class="text-primary-700 font-semibold">View all listings</a>
                <?php else: ?>
                    <h2 class="text-xl font-bold text-secondary-900 mb-2">No properties listed yet</h2>
                    <p class="text-secondary-600">Check back soon for new rentals.</p>
                <?php endif; ?>
            </div>
        <?php else: ?>
            <p class="text-sm text-secondary-500 mb-6">
                <?= number_format($total) ?> <?= $total === 1 ? 'property' : 'properties' ?><?= $q !== '' ? ' matching “' . esc($q) . '”' : '' ?>
            </p>

            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6 animate-stagger">
                <?php foreach ($listings as $listing): ?>
                <?php
                    $property = $listing['property'] ?? [];
                    $image = $listing['images'][0] ?? null;
                    $location = implode(', ', array_filter([$property['city'] ?? null, $property['district'] ?? null]));
                    $url = '/listings/' . (int) $listing['id'];
                ?>
                <article class="stagger-item card-lift bg-white border border-secondary-200 rounded-2xl overflow-hidden flex flex-col">
                    <a href="<?= $url ?>" class="block relative bg-secondary-100 aspect-[4/3] overflow-hidden">
                        <img src="<?= $image ? esc($image) : $fallback ?>"
                             onerror="this.onerror=null;this.src='<?= $fallback ?>';this.classList.add('object-contain','p-8','bg-primary-50');"
                             alt="<?= esc($property['name'] ?? 'Rental property') ?>"
                             class="w-full h-full object-cover" loading="lazy">
                        <?php if (! empty($property['type'])): ?>
                            <span class="absolute top-3 left-3 bg-white/95 text-secondary-800 text-xs font-semibold px-3 py-1 rounded-full shadow"><?= esc($property['type']) ?></span>
                        <?php endif; ?>
                    </a>
                    <div class="p-6 flex flex-col flex-1">
                        <?php if ($listing['monthlyRent'] !== null): ?>
                            <p class="text-2xl font-extrabold text-primary-700 mb-1">
                                <?= esc($listing['currency'] ?? '') ?> <?= number_format((float) $listing['monthlyRent']) ?>
                                <span class="text-sm font-medium text-secondary-500">/ month</span>
                            </p>
                        <?php endif; ?>
                        <h2 class="text-lg font-bold text-secondary-900 leading-snug line-clamp-1">
                            <a href="<?= $url ?>" class="hover:text-primary-700 transition-colors"><?= esc($property['name'] ?? 'Rental property') ?></a>
                        </h2>
                        <?php if ($location): ?>
                            <p class="text-sm text-secondary-500 mt-1 mb-3"><i class="bi bi-geo-alt mr-1"></i><?= esc($location) ?></p>
                        <?php endif; ?>
                        <p class="text-secondary-600 text-sm leading-relaxed mb-4 line-clamp-3"><?= esc($listing['description'] ?? '') ?></p>
                        <div class="mt-auto pt-4 border-t border-secondary-100">
                            <a href="<?= $url ?>" class="text-primary-700 text-sm font-semibold inline-flex items-center hover:gap-1.5 transition-all">
                                View details <i class="bi bi-arrow-right ml-1.5"></i>
                            </a>
                        </div>
                    </div>
                </article>
                <?php endforeach; ?>
            </div>

            <!-- Pagination -->
            <?php if ($totalPages > 1): ?>
            <nav aria-label="Listings pagination" class="mt-14">
                <div class="flex justify-center items-center gap-2 flex-wrap">
                    <?php if ($currentPage > 1): ?>
                        <a href="<?= esc($pageUrl($currentPage - 1)) ?>" class="px-4 py-2.5 text-secondary-700 bg-white border border-secondary-200 hover:border-primary-300 hover:text-primary-700 rounded-lg transition-colors inline-flex items-center font-medium">
                            <i class="bi bi-chevron-left mr-1.5"></i> Previous
                        </a>
                    <?php else: ?>
                        <span class="px-4 py-2.5 text-secondary-400 bg-neutral-100 rounded-lg inline-flex items-center font-medium cursor-not-allowed"><i class="bi bi-chevron-left mr-1.5"></i> Previous</span>
                    <?php endif; ?>

                    <?php for ($i = max(1, $currentPage - 2); $i <= min($totalPages, $currentPage + 2); $i++): ?>
                        <?php if ($i === $currentPage): ?>
                            <span aria-current="page" class="w-10 h-10 flex items-center justify-center bg-primary-700 text-white rounded-lg font-semibold"><?= $i ?></span>
                        <?php else: ?>
                            <a href="<?= esc($pageUrl($i)) ?>" class="w-10 h-10 flex items-center justify-center text-secondary-700 bg-white border border-secondary-200 hover:border-primary-300 rounded-lg transition-colors font-medium"><?= $i ?></a>
                        <?php endif; ?>
                    <?php endfor; ?>

                    <?php if ($currentPage < $totalPages): ?>
                        <a href="<?= esc($pageUrl($currentPage + 1)) ?>" class="px-4 py-2.5 text-secondary-700 bg-white border border-secondary-200 hover:border-primary-300 hover:text-primary-700 rounded-lg transition-colors inline-flex items-center font-medium">
                            Next <i class="bi bi-chevron-right ml-1.5"></i>
                        </a>
                    <?php else: ?>
                        <span class="px-4 py-2.5 text-secondary-400 bg-neutral-100 rounded-lg inline-flex items-center font-medium cursor-not-allowed">Next <i class="bi bi-chevron-right ml-1.5"></i></span>
                    <?php endif; ?>
                </div>
                <p class="text-center mt-4 text-sm text-secondary-500">Page <?= $currentPage ?> of <?= $totalPages ?></p>
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
                <h2 class="text-2xl lg:text-3xl font-extrabold text-white mb-2">Are you a landlord?</h2>
                <p class="text-white/85">Advertise your property from the est8Ledger app and find tenants faster.</p>
            </div>
            <a href="https://app.est8ledger.com" class="btn-accent px-8 py-3.5 rounded-xl inline-flex items-center justify-center shrink-0 relative z-10">
                List your property <i class="bi bi-box-arrow-up-right ml-2 text-xs"></i>
            </a>
        </div>
    </div>
</section>

<?= $this->endSection() ?>
