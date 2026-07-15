<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        $faqs = [
            [
                'question' => 'What is a rental security deposit and why do disputes happen?',
                'answer' => 'A rental security deposit is money a tenant pays upfront to cover potential property damage, unpaid rent, or cleaning costs. Disputes happen at the end of a tenancy because there is usually no shared, tamper-proof evidence of the property condition at move-in versus move-out, so landlords and tenants disagree on what deductions are fair.'
            ],
            [
                'question' => 'How does est8Ledger stop security deposit disputes?',
                'answer' => 'est8Ledger holds the deposit in secure escrow, records a digital tenancy agreement, and captures timestamped, geo-tagged move-in and move-out inspections. Because every record is stored on a tamper-proof blockchain ledger, both parties see the same evidence — so deductions are based on facts, not arguments.'
            ],
            [
                'question' => 'Who controls the deposit money — the landlord or est8Ledger?',
                'answer' => 'Neither party can unilaterally take the money. Deposits are held in regulated escrow and released according to the signed agreement and the documented inspection results. This protects tenants from unfair withholding and protects landlords from tenants refusing legitimate deductions.'
            ],
            [
                'question' => 'How does blockchain make deposit records trustworthy?',
                'answer' => 'Every agreement, inspection, and transaction is written to a tamper-proof ledger built on the XRP Ledger (XRPL). Once recorded, the evidence cannot be secretly altered or deleted, creating a single source of truth that is cryptographically verifiable by tenants, landlords, and property managers.'
            ],
            [
                'question' => 'Can my deposit earn returns while it is held?',
                'answer' => 'Yes. With mutual agreement, deposits can be placed in low-risk money-market investments. Profits are shared transparently, so idle deposit money can work for both the tenant and the landlord instead of sitting untouched.'
            ],
            [
                'question' => 'How fast are refunds processed at the end of a tenancy?',
                'answer' => 'Because the move-out inspection is compared directly against the documented move-in baseline, refund calculations are clear and fast — typically days instead of the months a contested dispute can take.'
            ],
            [
                'question' => 'Is est8Ledger available in Uganda and East Africa?',
                'answer' => 'Yes. est8Ledger is built mobile-first for East Africa, with an initial focus on Uganda, Kenya, and Tanzania, and is expanding to more regions.'
            ],
        ];

        $data = [
            'title'       => 'Rental Security Deposit Escrow & Dispute Protection',
            'description' => 'End rental security deposit disputes. est8Ledger uses blockchain escrow, digital tenancy agreements, and tamper-proof move-in/move-out inspections to protect landlords and tenants in Uganda & East Africa.',
            'keywords'    => 'rental security deposit, security deposit disputes, deposit escrow, rental deposit protection, blockchain escrow Uganda, digital tenancy agreement, property inspection app, landlord tenant deposit, deposit refund, East Africa rental platform',
            'faqs'        => $faqs,
        ];

        return view('pages/home', $data);
    }

    public function privacyPolicy(): string
    {
        $data = [
            'title' => 'Privacy Policy - How We Protect Your Data',
            'description' => 'Learn how est8Ledger collects, uses, and protects your personal information in our comprehensive privacy policy.',
            'keywords' => 'privacy policy, data protection, personal information, Rental Security Deposits, GDPR compliance'
        ];

        return view('pages/privacy-policy', $data);
    }

    public function termsOfUse(): string
    {
        $data = [
            'title' => 'Terms of Use - Service Agreement',
            'description' => 'Read our terms of use to understand your rights and responsibilities when using est8Ledger\'s Rental Security Deposit management platform.',
            'keywords' => 'terms of use, service agreement, user agreement, Rental Security Deposit terms, rental platform'
        ];

        return view('pages/terms-of-use', $data);
    }

    public function aboutUs(): string
    {
        $data = [
            'title' => 'About Us - Rentalynk\'s Mission for Fair Rental Deposits',
            'description' => 'Learn about Rentalynk and est8Ledger\'s journey to revolutionize Rental Security Deposit management through blockchain technology and transparent solutions.',
            'keywords' => 'about est8Ledger, Rentalynk company, Rental Security Deposit solutions, property management innovation, rental technology'
        ];

        return view('pages/about-us', $data);
    }

    public function faqs(): string
    {
        $faqs = [
            [
                'question' => 'How does est8Ledger protect my Rental Security Deposit?',
                'answer' => 'est8Ledger uses blockchain technology and regulated escrow accounts to protect your Rental Security Deposit. All deposits are held in fully compliant escrow accounts with banking-level security. Every transaction is recorded on the blockchain, creating an immutable record that cannot be altered or disputed.'
            ],
            [
                'question' => 'What data does est8Ledger collect and how is it protected?',
                'answer' => 'We collect only essential information needed to manage your Rental Security Deposit: property details, tenant/landlord information, and inspection records. All data is encrypted end-to-end using industry-standard encryption protocols. We comply with GDPR and other data protection regulations. Your personal information is never shared with third parties without your consent.'
            ],
            [
                'question' => 'How does the property inspection process work?',
                'answer' => 'Property inspections are conducted using our mobile app with geo-tagged photos and timestamps. This creates verified evidence of the property condition at move-in and move-out. Both landlords and tenants can view the inspection records, ensuring complete transparency and preventing disputes over property damage.'
            ],
            [
                'question' => 'How long does it take to resolve a Rental Security Deposit dispute?',
                'answer' => 'With est8Ledger, most disputes are resolved within days instead of months. Because all evidence is documented and verified on the blockchain, there\'s a clear record of what happened. This eliminates the need for lengthy legal proceedings and allows for quick resolution.'
            ],
            [
                'question' => 'Can I earn returns on my Rental Security Deposit?',
                'answer' => 'Yes! est8Ledger allows landlords to invest Rental Security Deposits in low-risk, high-yield opportunities. Tenants can benefit from a portion of these returns, creating a win-win situation. Your deposit works for you while remaining fully protected and accessible when needed.'
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
            'title' => 'FAQs - Rental Security Deposits & Data Protection Questions',
            'description' => 'Find answers to frequently asked questions about est8Ledger\'s Rental Security Deposit management, data protection, and how our platform works.',
            'keywords' => 'FAQ, Rental Security Deposit questions, data protection, platform features, how it works, security',
            'faqs' => $faqs
        ];

        return view('pages/faqs', $data);
    }

    public function moveOut(): string
    {
        $faqs = [
            [
                'question' => 'How do I get my full rental deposit back when moving out in Uganda?',
                'answer' => 'Document the property\'s condition with dated, photo-backed evidence at move-out and compare it against your move-in record. Most deposit refund disputes in Uganda happen because there is no shared proof of condition, so a joint, timestamped move-out inspection that both you and your landlord approve is the clearest way to support a full refund.'
            ],
            [
                'question' => 'Can my landlord refuse to refund my deposit?',
                'answer' => 'Not without justification. Under Uganda\'s Landlord and Tenant Act 2022, deductions must relate to actual damage beyond fair wear and tear, unpaid rent, or unpaid bills. If there is no documented evidence of damage, there is no fair basis to withhold your deposit.'
            ],
            [
                'question' => 'How much notice do I need to give before vacating a rented house?',
                'answer' => 'Notice periods are set by your tenancy agreement, but Uganda\'s Landlord and Tenant Act 2022 generally expects at least one month\'s written notice unless your lease states otherwise. Always check what your signed agreement requires before you give notice to vacate.'
            ],
            [
                'question' => 'How do you tell wear-and-tear apart from real damage?',
                'answer' => 'During your guided move-out inspection, each item you photograph is flagged as either normal wear and tear (like faded paint or a worn carpet) or genuine damage (like a hole in the wall or a stain). That distinction is recorded alongside the evidence, so deductions are based on what actually needs repair.'
            ],
            [
                'question' => 'Does my landlord need to download anything?',
                'answer' => 'No. Your landlord gets a simple link to view and approve the agreement and the move-out inspection. No app download or account is required on their end.'
            ],
            [
                'question' => 'Does this cost anything?',
                'answer' => 'No. Adding your agreement, inviting your landlord, and completing a fair move-out inspection is free.'
            ],
            [
                'question' => 'What happens to my deposit?',
                'answer' => 'That part is optional. If you and your landlord want to, you can place the deposit in regulated escrow on est8Ledger for extra protection, but you can complete a fair move-out record without it.'
            ],
        ];

        $data = [
            'title'       => 'Moving Out? How to Get Your Rental Deposit Back',
            'description' => 'Moving out of your rented house in Uganda, Kenya, or Tanzania? Get a fair, timestamped move-out inspection with est8Ledger, free, in minutes, so you get your full deposit back without a dispute with your landlord.',
            'keywords'    => 'move out inspection Uganda, how to get my deposit back, rental deposit refund Uganda, landlord refusing to refund deposit, moving out of a rented house checklist, notice to vacate Uganda, vacating a rented house, tenant rights Uganda deposit, security deposit dispute Kampala, end of tenancy inspection, fair wear and tear vs damage, landlord and tenant act Uganda deposit, move out checklist East Africa, rental deposit refund Kenya, rental deposit refund Tanzania',
            'faqs'        => $faqs,
        ];

        return view('pages/move-out', $data);
    }

    public function landlordTenantAct(): string
    {
        $sections = json_decode(
            file_get_contents(APPPATH . 'Content/landlord-tenant-act-2022.json'),
            true
        ) ?? [];

        $parts = [];
        foreach ($sections as $section) {
            $roman = $section['part_roman'];
            if (!isset($parts[$roman])) {
                $parts[$roman] = [
                    'roman'    => $roman,
                    'title'    => $section['part_title'],
                    'sections' => [],
                ];
            }
            $parts[$roman]['sections'][] = $section;
        }
        $parts = array_values($parts);

        $data = [
            'title'       => 'The Landlord and Tenant Act, 2022 (Uganda): Full Text and Search',
            'description' => "Search the full text of Uganda's Landlord and Tenant Act, 2022 (Act 9 of 2022): security deposits, rent, repairs, notice to vacate, termination, and eviction, section by section.",
            'keywords'    => 'landlord and tenant act uganda, uganda tenancy act 2022, tenant rights uganda law, security deposit law uganda, notice to vacate law uganda, rent act uganda, uganda rental law, eviction law uganda, tenancy agreement uganda law, act 9 of 2022',
            'parts'       => $parts,
        ];

        return view('pages/landlord-tenant-act', $data);
    }

    public function contactUs(): string
    {
        $data = [
            'title' => 'Contact Us - Get in Touch with est8Ledger',
            'description' => 'Contact est8Ledger for support, inquiries, or to learn more about our Rental Security Deposit management platform. Email, phone, and location details available.',
            'keywords' => 'contact est8Ledger, customer support, inquiries, contact form, Kampala Uganda'
        ];

        return view('pages/contact-us', $data);
    }
}
