<?= $this->extend('layouts/main') ?>

<?php
$property = $listing['property'] ?? [];
$images = $listing['images'] ?? [];
$name = $property['name'] ?? 'Rental property';
$hasRent = $listing['monthlyRent'] !== null;
$enquiry = 'Hi Est8Ledger, I am interested in listing #' . (int) $listing['id'] . ' (' . $name . ($location ? ', ' . $location : '') . '): ' . current_url();
?>

<?= $this->section('css') ?>
<script type="application/ld+json">
<?= json_encode(array_filter([
    '@context'    => 'https://schema.org',
    '@type'       => 'Offer',
    'name'        => $name,
    'description' => $listing['description'] ?? null,
    'url'         => current_url(),
    'image'       => $images ?: null,
    'price'       => $hasRent ? (float) $listing['monthlyRent'] : null,
    'priceCurrency' => $listing['currency'] ?? null,
    'availability'  => 'https://schema.org/InStock',
    'itemOffered' => array_filter([
        '@type'   => 'Accommodation',
        'name'    => $name,
        'address' => array_filter([
            '@type'           => 'PostalAddress',
            'addressLocality' => $property['city'] ?? null,
            'addressRegion'   => $property['district'] ?? null,
            'addressCountry'  => $property['countryCode'] ?? null,
        ]),
    ]),
]), JSON_UNESCAPED_SLASHES | JSON_HEX_TAG | JSON_HEX_AMP) ?>
</script>
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<section class="bg-white">
    <div class="container mx-auto px-4 pt-10 pb-16 lg:pt-14">
        <nav aria-label="Breadcrumb" class="mb-8">
            <ol class="flex items-center gap-2 text-sm text-secondary-500 flex-wrap">
                <li><a href="/" class="hover:text-primary-700" data-breadcrumb>Home</a></li>
                <li aria-hidden="true"><i class="bi bi-chevron-right text-xs"></i></li>
                <li><a href="/listings" class="hover:text-primary-700" data-breadcrumb>Listings</a></li>
                <li aria-hidden="true"><i class="bi bi-chevron-right text-xs"></i></li>
                <li class="text-secondary-700 font-medium truncate max-w-[16rem]" aria-current="page"><?= esc($name) ?></li>
            </ol>
        </nav>

        <div class="grid lg:grid-cols-5 gap-10">
            <!-- Photos -->
            <div class="lg:col-span-3">
                <?php if (! empty($images)): ?>
                    <div class="rounded-2xl overflow-hidden bg-secondary-100 aspect-[4/3] mb-3">
                        <img id="listing-main-image" src="<?= esc($images[0]) ?>" alt="<?= esc($name) ?>" class="w-full h-full object-cover">
                    </div>
                    <?php if (count($images) > 1): ?>
                        <div class="grid grid-cols-3 gap-3">
                            <?php foreach ($images as $i => $img): ?>
                                <button type="button" class="listing-thumb rounded-xl overflow-hidden aspect-[4/3] bg-secondary-100 ring-2 <?= $i === 0 ? 'ring-primary-600' : 'ring-transparent' ?>"
                                        data-src="<?= esc($img) ?>" aria-label="Show photo <?= $i + 1 ?>">
                                    <img src="<?= esc($img) ?>" alt="" class="w-full h-full object-cover" loading="lazy">
                                </button>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>
                <?php else: ?>
                    <div class="rounded-2xl bg-primary-50 aspect-[4/3] flex items-center justify-center">
                        <img src="/logo_blue.png" alt="" class="w-40 opacity-70">
                    </div>
                <?php endif; ?>
            </div>

            <!-- Details -->
            <div class="lg:col-span-2">
                <?php if (! empty($property['type'])): ?>
                    <span class="inline-block bg-primary-50 text-primary-700 text-xs font-semibold px-3 py-1 rounded-full mb-4"><?= esc($property['type']) ?></span>
                <?php endif; ?>
                <h1 class="text-3xl lg:text-4xl font-extrabold text-secondary-900 leading-tight mb-2"><?= esc($name) ?></h1>
                <?php if ($location): ?>
                    <p class="text-secondary-500 mb-6"><i class="bi bi-geo-alt mr-1"></i><?= esc($location) ?><?= ! empty($property['country']) ? ', ' . esc($property['country']) : '' ?></p>
                <?php endif; ?>

                <?php if ($hasRent): ?>
                    <div class="bg-neutral-50 border border-secondary-200 rounded-2xl p-5 mb-6">
                        <p class="text-sm text-secondary-500 mb-1">Monthly rent</p>
                        <p class="text-3xl font-extrabold text-primary-700">
                            <?= esc($listing['currency'] ?? '') ?> <?= number_format((float) $listing['monthlyRent']) ?>
                        </p>
                    </div>
                <?php endif; ?>

                <a href="https://wa.me/447930068728?text=<?= rawurlencode($enquiry) ?>" target="_blank" rel="noopener noreferrer"
                   class="btn-primary text-white w-full px-6 py-3.5 rounded-xl font-semibold inline-flex items-center justify-center mb-3">
                    <i class="bi bi-whatsapp mr-2"></i> Enquire about this property
                </a>
                <a href="/contact-us" class="w-full px-6 py-3.5 rounded-xl font-semibold text-secondary-700 border border-secondary-200 hover:border-primary-300 hover:text-primary-700 transition inline-flex items-center justify-center">
                    Contact us
                </a>

                <ul class="mt-8 space-y-3 text-sm text-secondary-600">
                    <li class="flex items-start"><i class="bi bi-shield-check text-primary-700 mr-2 mt-0.5"></i>Your security deposit is protected with est8Ledger</li>
                    <li class="flex items-start"><i class="bi bi-camera text-primary-700 mr-2 mt-0.5"></i>Move-in and move-out inspections are recorded digitally</li>
                    <li class="flex items-start"><i class="bi bi-file-earmark-text text-primary-700 mr-2 mt-0.5"></i>Digital tenancy agreement</li>
                </ul>
            </div>
        </div>

        <?php if (! empty($listing['description'])): ?>
            <div class="max-w-3xl mt-12">
                <h2 class="text-xl font-bold text-secondary-900 mb-3">About this property</h2>
                <p class="text-secondary-600 leading-relaxed whitespace-pre-line"><?= esc($listing['description']) ?></p>
                <p class="text-xs text-secondary-400 mt-6">
                    Listing #<?= (int) $listing['id'] ?>
                    <?php if (! empty($listing['createdAt'])): ?>
                        · Listed <?= date('M j, Y', strtotime($listing['createdAt'])) ?>
                    <?php endif; ?>
                </p>
            </div>
        <?php endif; ?>

        <div class="mt-12">
            <a href="/listings" class="text-primary-700 font-semibold inline-flex items-center"><i class="bi bi-arrow-left mr-2"></i> Back to all listings</a>
        </div>
    </div>
</section>

<?= $this->endSection() ?>

<?= $this->section('js') ?>
<script>
    document.querySelectorAll('.listing-thumb').forEach(function (thumb) {
        thumb.addEventListener('click', function () {
            document.getElementById('listing-main-image').src = thumb.dataset.src;
            document.querySelectorAll('.listing-thumb').forEach(function (t) {
                t.classList.toggle('ring-primary-600', t === thumb);
                t.classList.toggle('ring-transparent', t !== thumb);
            });
        });
    });
</script>
<?= $this->endSection() ?>
