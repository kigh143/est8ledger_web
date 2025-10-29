<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('pages/home');
    }

    public function privacyPolicy(): string
    {
        $data = [
            'title' => 'Privacy Policy - How We Protect Your Data',
            'description' => 'Learn how est8Ledger collects, uses, and protects your personal information in our comprehensive privacy policy.',
            'keywords' => 'privacy policy, data protection, personal information, security deposits, GDPR compliance'
        ];

        return view('pages/privacy-policy', $data);
    }

    public function termsOfUse(): string
    {
        $data = [
            'title' => 'Terms of Use - Service Agreement',
            'description' => 'Read our terms of use to understand your rights and responsibilities when using est8Ledger\'s security deposit management platform.',
            'keywords' => 'terms of use, service agreement, user agreement, security deposit terms, rental platform'
        ];

        return view('pages/terms-of-use', $data);
    }

    public function aboutUs(): string
    {
        $data = [
            'title' => 'About Us - Rentalynk\'s Mission for Fair Rental Deposits',
            'description' => 'Learn about Rentalynk and est8Ledger\'s journey to revolutionize security deposit management through blockchain technology and transparent solutions.',
            'keywords' => 'about est8Ledger, Rentalynk company, security deposit solutions, property management innovation, rental technology'
        ];

        return view('pages/about-us', $data);
    }

    public function faqs(): string
    {
        $faqs = [
            [
                'question' => 'How does est8Ledger protect my security deposit?',
                'answer' => 'est8Ledger uses blockchain technology and regulated escrow accounts to protect your security deposit. All deposits are held in fully compliant escrow accounts with banking-level security. Every transaction is recorded on the blockchain, creating an immutable record that cannot be altered or disputed.'
            ],
            [
                'question' => 'What data does est8Ledger collect and how is it protected?',
                'answer' => 'We collect only essential information needed to manage your security deposit: property details, tenant/landlord information, and inspection records. All data is encrypted end-to-end using industry-standard encryption protocols. We comply with GDPR and other data protection regulations. Your personal information is never shared with third parties without your consent.'
            ],
            [
                'question' => 'How does the property inspection process work?',
                'answer' => 'Property inspections are conducted using our mobile app with geo-tagged photos and timestamps. This creates verified evidence of the property condition at move-in and move-out. Both landlords and tenants can view the inspection records, ensuring complete transparency and preventing disputes over property damage.'
            ],
            [
                'question' => 'How long does it take to resolve a security deposit dispute?',
                'answer' => 'With est8Ledger, most disputes are resolved within days instead of months. Because all evidence is documented and verified on the blockchain, there\'s a clear record of what happened. This eliminates the need for lengthy legal proceedings and allows for quick resolution.'
            ],
            [
                'question' => 'Can I earn returns on my security deposit?',
                'answer' => 'Yes! est8Ledger allows landlords to invest security deposits in low-risk, high-yield opportunities. Tenants can benefit from a portion of these returns, creating a win-win situation. Your deposit works for you while remaining fully protected and accessible when needed.'
            ],
            [
                'question' => 'Is est8Ledger available in my country?',
                'answer' => 'est8Ledger is currently available in East Africa, with a focus on Uganda, Kenya, and Tanzania. We\'re expanding to other regions. Check our website or contact us to see if we\'re available in your area.'
            ],
            [
                'question' => 'What happens if I lose my phone or forget my password?',
                'answer' => 'Your account is secured with multi-factor authentication. If you lose access, you can recover your account using your email address or phone number. All your deposit records are safely stored on the blockchain and can be accessed from any device.'
            ],
            [
                'question' => 'How much does est8Ledger cost?',
                'answer' => 'est8Ledger offers transparent, competitive pricing. There are no hidden fees. Contact us for detailed pricing information based on your specific needs.'
            ],
            [
                'question' => 'Can both landlords and tenants use est8Ledger?',
                'answer' => 'Yes! est8Ledger is designed for both landlords and tenants. Landlords can manage multiple properties and deposits, while tenants can track their deposits and ensure fair treatment. The platform creates transparency that benefits everyone.'
            ],
            [
                'question' => 'What if I have a dispute with my landlord/tenant?',
                'answer' => 'est8Ledger\'s transparent documentation makes disputes rare. If a dispute does occur, our platform provides clear evidence through verified inspections and blockchain records. We also offer dispute resolution support to help reach fair agreements quickly.'
            ]
        ];

        $data = [
            'title' => 'FAQs - Security Deposits & Data Protection Questions',
            'description' => 'Find answers to frequently asked questions about est8Ledger\'s security deposit management, data protection, and how our platform works.',
            'keywords' => 'FAQ, security deposit questions, data protection, platform features, how it works, security',
            'faqs' => $faqs
        ];

        return view('pages/faqs', $data);
    }

    public function contactUs(): string
    {
        $data = [
            'title' => 'Contact Us - Get in Touch with est8Ledger',
            'description' => 'Contact est8Ledger for support, inquiries, or to learn more about our security deposit management platform. Email, phone, and location details available.',
            'keywords' => 'contact est8Ledger, customer support, inquiries, contact form, Kampala Uganda'
        ];

        return view('pages/contact-us', $data);
    }
}
