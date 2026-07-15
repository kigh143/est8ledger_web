<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<!-- ============================ HERO ============================ -->
<section class="relative gradient-hero overflow-hidden">
    <div class="container mx-auto px-4 pt-16 pb-14 lg:pt-24 lg:pb-16 text-center">
        <div class="inline-flex items-center bg-primary-50 border border-primary-100 text-primary-700 px-4 py-1.5 rounded-full text-sm font-semibold mb-6">
            <span class="w-2 h-2 rounded-full bg-accent-500 mr-2"></span>
            Uganda law, Act 9 of 2022
        </div>

        <h1 class="text-4xl sm:text-5xl xl:text-6xl font-extrabold text-secondary-900 leading-[1.08] mb-6 text-balance max-w-4xl mx-auto">
            The Landlord and Tenant Act, 2022
        </h1>

        <p class="text-lg text-secondary-600 max-w-2xl mx-auto leading-relaxed mb-8">
            The full text of Uganda's law governing tenancy agreements, rent, security deposits, repairs, notice to
            vacate, and eviction. Search it section by section below.
        </p>

        <div class="max-w-xl mx-auto mb-6">
            <label for="act-search" class="sr-only">Search the Landlord and Tenant Act</label>
            <div class="relative">
                <i class="bi bi-search absolute left-4 top-1/2 -translate-y-1/2 text-secondary-400" aria-hidden="true"></i>
                <input type="search" id="act-search"
                       placeholder="Search the Act, e.g. security deposit, notice, repairs"
                       class="w-full pl-11 pr-4 py-3.5 rounded-full border border-secondary-200 shadow-sm text-secondary-900 placeholder-secondary-400 focus:border-primary-400 text-base"
                       autocomplete="off">
            </div>
            <p id="act-search-count" class="text-sm text-secondary-500 mt-3" aria-live="polite">52 sections across 10 parts</p>
        </div>

        <div class="flex flex-wrap items-center justify-center gap-2">
            <?php
            $quickSearches = ['security deposit', 'notice to vacate', 'repairs', 'termination', 'eviction', 'rent increase'];
            foreach ($quickSearches as $q): ?>
            <button type="button" class="act-quick-search px-3.5 py-1.5 rounded-full bg-white border border-secondary-200 text-secondary-700 text-sm font-medium hover:border-primary-300 hover:text-primary-700 transition-colors" data-query="<?= esc($q) ?>">
                <?= esc($q) ?>
            </button>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ============================ ACT META + DISCLAIMER ============================ -->
<section class="py-10 bg-white border-b border-secondary-100">
    <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto grid sm:grid-cols-2 gap-4">
            <div class="flex flex-wrap items-center gap-x-6 gap-y-2 text-sm text-secondary-600">
                <span class="inline-flex items-center"><i class="bi bi-file-earmark-text text-primary-600 mr-2"></i>Act 9 of 2022</span>
                <span class="inline-flex items-center"><i class="bi bi-pen text-primary-600 mr-2"></i>Assented 12 Apr 2022</span>
                <span class="inline-flex items-center"><i class="bi bi-calendar-check text-primary-600 mr-2"></i>In force 17 Jun 2022</span>
            </div>
            <div class="sm:text-right">
                <a href="/landlord-and-tenant-act-2022.pdf" target="_blank" rel="noopener" class="inline-flex items-center text-primary-700 font-semibold text-sm hover:underline">
                    <i class="bi bi-file-earmark-pdf mr-2"></i>
                    Download the original PDF
                </a>
            </div>
        </div>

        <div class="max-w-4xl mx-auto mt-6 bg-amber-50 border border-amber-200 rounded-xl px-5 py-4 flex items-start gap-3">
            <i class="bi bi-info-circle-fill text-amber-600 mt-0.5 flex-shrink-0"></i>
            <p class="text-sm text-amber-800 leading-relaxed">
                This page is a digitized, searchable copy of the Act for quick reference and is not a certified legal
                text. The <a href="/landlord-and-tenant-act-2022.pdf" target="_blank" rel="noopener" class="font-semibold underline">official Uganda Gazette PDF</a>
                is the authoritative version. For advice on a specific situation, consult a lawyer.
            </p>
        </div>
    </div>
</section>

<!-- ============================ TABLE OF CONTENTS ============================ -->
<section class="section-padding bg-neutral-50">
    <div class="container mx-auto px-4">
        <div class="max-w-5xl mx-auto">
            <h2 class="text-2xl font-extrabold text-secondary-900 mb-6 flex items-center">
                <i class="bi bi-list-ul text-primary-600 mr-3"></i>
                Contents
            </h2>
            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-4">
                <?php foreach ($parts as $part): ?>
                <div class="bg-white rounded-xl border border-secondary-200 p-5">
                    <p class="text-xs font-bold uppercase tracking-widest text-primary-600 mb-1">Part <?= esc($part['roman']) ?></p>
                    <p class="font-semibold text-secondary-900 mb-3 text-sm"><?= esc($part['title']) ?></p>
                    <ul class="space-y-1.5">
                        <?php foreach ($part['sections'] as $section): ?>
                        <li>
                            <a href="#section-<?= $section['number'] ?>" class="text-sm text-secondary-600 hover:text-primary-700 transition-colors">
                                <?= $section['number'] ?>. <?= esc($section['title']) ?>
                            </a>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>

<!-- ============================ FULL TEXT ============================ -->
<section class="section-padding bg-white">
    <div class="container mx-auto px-4">
        <div id="act-empty-state" class="hidden max-w-2xl mx-auto text-center py-16">
            <i class="bi bi-search text-4xl text-secondary-300 mb-4 inline-block"></i>
            <p class="text-secondary-600">No sections match your search. Try a different word, like "deposit" or "notice".</p>
        </div>

        <div class="max-w-4xl mx-auto space-y-14">
            <?php foreach ($parts as $part): ?>
            <div class="act-part" id="part-<?= esc($part['roman']) ?>">
                <div class="mb-6 pb-3 border-b-2 border-primary-100">
                    <p class="text-xs font-bold uppercase tracking-widest text-primary-600 mb-1">Part <?= esc($part['roman']) ?></p>
                    <h2 class="text-2xl font-extrabold text-secondary-900"><?= esc($part['title']) ?></h2>
                </div>

                <div class="space-y-6">
                    <?php foreach ($part['sections'] as $section):
                        $searchText = mb_strtolower($section['number'] . ' ' . $section['title'] . ' ' . implode(' ', $section['paragraphs']));
                    ?>
                    <div class="act-section scroll-mt-24 bg-neutral-50 border border-secondary-200 rounded-2xl p-6 sm:p-7" id="section-<?= $section['number'] ?>" data-search="<?= esc($searchText) ?>">
                        <div class="flex items-start gap-3 mb-4">
                            <span class="flex-shrink-0 w-9 h-9 rounded-lg bg-primary-700 text-white flex items-center justify-center font-bold text-sm">
                                <?= $section['number'] ?>
                            </span>
                            <h3 class="text-lg font-bold text-secondary-900 mt-1"><?= esc($section['title']) ?></h3>
                        </div>
                        <div class="space-y-3 pl-12">
                            <?php foreach ($section['paragraphs'] as $paragraph): ?>
                            <p class="text-secondary-700 leading-relaxed text-sm sm:text-base"><?= esc($paragraph) ?></p>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ============================ FINAL CTA ============================ -->
<section class="py-16 lg:py-20 bg-neutral-50">
    <div class="container mx-auto px-4">
        <div class="gradient-cta rounded-3xl px-8 py-14 lg:px-16 text-center relative overflow-hidden">
            <div class="absolute inset-0 opacity-10" aria-hidden="true">
                <i class="bi bi-shield-check text-white text-[10rem] absolute -bottom-6 -right-2"></i>
            </div>
            <div class="relative z-10 max-w-2xl mx-auto">
                <h2 class="text-3xl lg:text-4xl font-extrabold text-white mb-4 text-balance">
                    est8Ledger builds this Act into every tenancy
                </h2>
                <p class="text-lg text-white/85 mb-8">
                    Security deposits, move-out inspections, and notice periods, documented the way the law expects,
                    with evidence both sides can trust.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="/move-out" class="btn-accent px-8 py-3.5 rounded-xl text-base inline-flex items-center justify-center">
                        <i class="bi bi-camera2 mr-2 text-xl"></i>
                        Prepare for my move-out
                    </a>
                    <a href="/contact-us" class="px-8 py-3.5 rounded-xl text-base font-semibold text-white border-2 border-white/30 hover:bg-white/10 transition inline-flex items-center justify-center">
                        Contact Us
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<?= $this->endSection() ?>

<?= $this->section('js') ?>
<script>
document.addEventListener('DOMContentLoaded', function () {
    var input = document.getElementById('act-search');
    var countEl = document.getElementById('act-search-count');
    var emptyState = document.getElementById('act-empty-state');
    var sections = Array.prototype.slice.call(document.querySelectorAll('.act-section'));
    var parts = Array.prototype.slice.call(document.querySelectorAll('.act-part'));
    var totalSections = sections.length;

    function applyFilter(query) {
        query = query.trim().toLowerCase();
        var visibleCount = 0;

        sections.forEach(function (el) {
            var matches = !query || el.dataset.search.indexOf(query) !== -1;
            el.classList.toggle('hidden', !matches);
            if (matches) visibleCount++;
        });

        parts.forEach(function (part) {
            var hasVisible = part.querySelector('.act-section:not(.hidden)') !== null;
            part.classList.toggle('hidden', !hasVisible);
        });

        emptyState.classList.toggle('hidden', visibleCount !== 0);

        countEl.textContent = query
            ? 'Showing ' + visibleCount + ' of ' + totalSections + ' sections'
            : totalSections + ' sections across ' + parts.length + ' parts';
    }

    input.addEventListener('input', function () {
        applyFilter(input.value);
    });

    document.querySelectorAll('.act-quick-search').forEach(function (btn) {
        btn.addEventListener('click', function () {
            input.value = btn.dataset.query;
            applyFilter(input.value);
            var firstVisiblePart = document.querySelector('.act-part:not(.hidden)');
            if (firstVisiblePart) {
                firstVisiblePart.scrollIntoView({ behavior: 'smooth', block: 'start' });
            }
        });
    });
});
</script>
<?= $this->endSection() ?>
