<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<!-- Hero Section -->
<div class="relative bg-white py-20 lg:py-28 overflow-hidden">
    <!-- Building Background Image -->
    <div class="absolute inset-0">
        <img src="/website_images/building.png" alt="" class="w-full h-full object-cover" aria-hidden="true">
        <!-- Dark overlay for text readability -->
        <div class="absolute inset-0 bg-gradient-to-r from-black/60 via-black/50 to-black/60"></div>
    </div>

    <!-- Logo Background Pattern -->
    <div class="absolute inset-0 opacity-[0.08]">
        <img src="/logo_white.png" alt="" class="absolute top-10 left-10 w-48 h-48 object-contain" aria-hidden="true">
        <img src="/logo_white.png" alt="" class="absolute bottom-20 right-10 w-64 h-64 object-contain" aria-hidden="true">
    </div>

    <div class="container mx-auto px-4 text-center relative z-10">
        <h1 class="text-4xl lg:text-5xl xl:text-6xl font-bold text-white mb-6 leading-tight animate-on-scroll">
            Get in Touch
        </h1>

        <p class="text-lg lg:text-xl text-gray-100 mb-8 max-w-3xl mx-auto leading-relaxed animate-on-scroll">
            Have questions about est8Ledger? We're here to help. Reach out to us through any of the channels below.
        </p>
    </div>
</div>

<!-- Contact Information Section -->
<div class="section-padding bg-white">
    <div class="container mx-auto px-4">
        <div class="grid md:grid-cols-3 gap-8 max-w-4xl mx-auto mb-16 animate-stagger">
            <!-- Email -->
            <div class="stagger-item text-center p-8 bg-gradient-to-br from-primary-50 to-primary-100 rounded-2xl border border-primary-200">
                <div class="w-16 h-16 bg-primary rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="bi bi-envelope text-2xl text-white"></i>
                </div>
                <h3 class="text-xl font-semibold text-gray-800 mb-2">Email</h3>
                <a href="mailto:info@est8ledger.com" class="text-primary-700 hover:text-primary-900 font-medium break-all">
                    info@est8ledger.com
                </a>
            </div>

            <!-- Phone -->
            <div class="stagger-item text-center p-8 bg-gradient-to-br from-accent-50 to-accent-100 rounded-2xl border border-accent-200">
                <div class="w-16 h-16 bg-accent rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="bi bi-telephone text-2xl text-gray-800"></i>
                </div>
                <h3 class="text-xl font-semibold text-gray-800 mb-2">Phone</h3>
                <a href="tel:+447930068728" class="text-accent-700 hover:text-accent-900 font-medium">
                    +44 7930 068728
                </a>
            </div>

            <!-- Location -->
            <div class="stagger-item text-center p-8 bg-gradient-to-br from-blue-50 to-blue-100 rounded-2xl border border-blue-200">
                <div class="w-16 h-16 bg-blue-600 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="bi bi-geo-alt text-2xl text-white"></i>
                </div>
                <h3 class="text-xl font-semibold text-gray-800 mb-2">Location</h3>
                <p class="text-blue-700 font-medium">
                    Kampala, Uganda
                </p>
            </div>
        </div>
    </div>
</div>

<!-- Contact Form Section -->
<div class="section-padding bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="max-w-2xl mx-auto">
            <div class="text-center mb-12 animate-on-scroll">
                <h2 class="text-3xl lg:text-4xl font-bold text-gray-800 mb-4">Send us a Message</h2>
                <p class="text-lg text-gray-600">Fill out the form below and we'll get back to you within 24 hours.</p>
            </div>

            <!-- Display success/error messages -->
            <?php if (session()->getFlashdata('success')): ?>
                <div class="mb-6 p-4 bg-green-50 border border-green-200 rounded-lg">
                    <div class="flex items-center">
                        <i class="bi bi-check-circle text-green-600 text-xl mr-3"></i>
                        <p class="text-green-700"><?= session()->getFlashdata('success') ?></p>
                    </div>
                </div>
            <?php endif; ?>

            <?php if (session()->getFlashdata('error')): ?>
                <div class="mb-6 p-4 bg-red-50 border border-red-200 rounded-lg">
                    <div class="flex items-center">
                        <i class="bi bi-exclamation-circle text-red-600 text-xl mr-3"></i>
                        <p class="text-red-700"><?= session()->getFlashdata('error') ?></p>
                    </div>
                </div>
            <?php endif; ?>

            <form action="/contact" method="POST" class="bg-white p-8 rounded-2xl shadow-lg animate-on-scroll">
                <?= csrf_field() ?>

                <div class="mb-6">
                    <label for="name" class="block text-sm font-semibold text-gray-700 mb-2">Full Name *</label>
                    <input type="text" id="name" name="name" value="<?= old('name') ?>" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent" placeholder="Your name">
                    <?php if (isset($errors['name'])): ?>
                        <p class="text-red-600 text-sm mt-1"><?= $errors['name'] ?></p>
                    <?php endif; ?>
                </div>

                <div class="mb-6">
                    <label for="email" class="block text-sm font-semibold text-gray-700 mb-2">Email Address *</label>
                    <input type="email" id="email" name="email" value="<?= old('email') ?>" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent" placeholder="your@email.com">
                    <?php if (isset($errors['email'])): ?>
                        <p class="text-red-600 text-sm mt-1"><?= $errors['email'] ?></p>
                    <?php endif; ?>
                </div>

                <div class="mb-6">
                    <label for="phone" class="block text-sm font-semibold text-gray-700 mb-2">Phone Number</label>
                    <input type="tel" id="phone" name="phone" value="<?= old('phone') ?>" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent" placeholder="+256 700 000000">
                    <?php if (isset($errors['phone'])): ?>
                        <p class="text-red-600 text-sm mt-1"><?= $errors['phone'] ?></p>
                    <?php endif; ?>
                </div>

                <div class="mb-6">
                    <label for="message" class="block text-sm font-semibold text-gray-700 mb-2">Message *</label>
                    <textarea id="message" name="message" rows="6" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent" placeholder="Tell us how we can help..."></textarea>
                    <?php if (isset($errors['message'])): ?>
                        <p class="text-red-600 text-sm mt-1"><?= $errors['message'] ?></p>
                    <?php endif; ?>
                </div>

                <button type="submit" class="w-full bg-primary-700 hover:bg-primary-800 text-white px-8 py-3 rounded-lg font-semibold transition-colors inline-flex items-center justify-center">
                    <i class="bi bi-send mr-2"></i>
                    Send Message
                </button>
            </form>
        </div>
    </div>
</div>

<!-- Response Time Section -->
<div class="section-padding bg-white">
    <div class="container mx-auto px-4">
        <div class="max-w-3xl mx-auto text-center">
            <h2 class="text-2xl font-bold text-gray-800 mb-6">We're Here to Help</h2>
            <div class="grid md:grid-cols-3 gap-8">
                <div class="animate-on-scroll">
                    <div class="bg-primary-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="bi bi-clock text-primary-700 text-2xl"></i>
                    </div>
                    <h3 class="font-semibold text-gray-800 mb-2">Quick Response</h3>
                    <p class="text-gray-600">We respond to all inquiries within 24 hours</p>
                </div>

                <div class="animate-on-scroll">
                    <div class="bg-accent-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="bi bi-headset text-accent-700 text-2xl"></i>
                    </div>
                    <h3 class="font-semibold text-gray-800 mb-2">Expert Support</h3>
                    <p class="text-gray-600">Our team has deep expertise in rental management</p>
                </div>

                <div class="animate-on-scroll">
                    <div class="bg-blue-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="bi bi-chat-dots text-blue-700 text-2xl"></i>
                    </div>
                    <h3 class="font-semibold text-gray-800 mb-2">Multiple Channels</h3>
                    <p class="text-gray-600">Reach us via email, phone, or contact form</p>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>

