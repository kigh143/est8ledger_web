<?php

namespace App\Controllers;

class SeoController extends BaseController
{
    public static function getPageSeoData($page, $additionalData = [])
    {
        $seoData = [
            'home' => [
                'title' => 'Rental Security Deposit Management Uganda | Blockchain Rental Escrow East Africa - est8Ledger',
                'description' => 'Transform Rental Security Deposit disputes with Uganda\'s first blockchain-secured rental escrow platform. 90% fewer disputes, 8-12% profit sharing, transparent digital inspections. Join 2,500+ users across East Africa.',
                'keywords' => 'Rental Security Deposit management Uganda, rental escrow East Africa, blockchain deposits, landlord tenant disputes, profit sharing deposits, digital tenancy agreements, transparent property inspections, Uganda rental platform, Kenya Tanzania deposits',
                'og_type' => 'website',
                'canonical' => base_url('/')
            ],
            'blogs' => [
                'title' => 'East Africa Rental Industry Blog | Rental Security Deposit & Property Management Insights - est8Ledger',
                'description' => 'Expert insights on Rental Security Deposit management, tenant rights, landlord best practices, and rental industry trends across Uganda, Kenya, and Tanzania. Stay informed with est8Ledger.',
                'keywords' => 'rental industry blog East Africa, Rental Security Deposit insights Uganda, tenant rights Kenya Tanzania, landlord best practices, property management tips Uganda, rental market analysis East Africa',
                'og_type' => 'website',
                'canonical' => base_url('/blogs')
            ],
            'contact' => [
                'title' => 'Contact est8Ledger | Rental Security Deposit Management Support Uganda & East Africa',
                'description' => 'Get support with blockchain-secured Rental Security Deposit management, rental escrow services, and digital tenancy agreements across Uganda, Kenya, and Tanzania. WhatsApp and phone support available.',
                'keywords' => 'contact est8Ledger Uganda, Rental Security Deposit support East Africa, rental escrow help Kenya, customer service Tanzania, property management assistance, blockchain deposit support',
                'og_type' => 'website',
                'canonical' => base_url('/contact')
            ],
            'terms-of-use' => [
                'title' => 'Terms of Use | est8Ledger Blockchain Rental Security Deposit Management Platform',
                'description' => 'Read the terms of use for est8Ledger\'s blockchain-secured Rental Security Deposit management platform. Understand your rights and responsibilities when using our rental escrow services in East Africa.',
                'keywords' => 'est8Ledger terms of use, Rental Security Deposit platform terms East Africa, rental escrow terms Uganda, digital tenancy agreement terms, blockchain deposit terms',
                'og_type' => 'article',
                'canonical' => base_url('/terms-of-use')
            ],
            'privacy-policy' => [
                'title' => 'Privacy Policy | How est8Ledger Protects Your Data in East Africa',
                'description' => 'Learn how est8Ledger protects your personal data and privacy when using our blockchain-secured Rental Security Deposit management platform across Uganda, Kenya, and Tanzania.',
                'keywords' => 'est8Ledger privacy policy, data protection East Africa, Rental Security Deposit privacy Uganda, rental platform data security, blockchain privacy Kenya Tanzania',
                'og_type' => 'article',
                'canonical' => base_url('/privacy-policy')
            ],
            'survey-tenants' => [
                'title' => 'Tenant Experience Survey Uganda | Share Your Rental Deposit Story - est8Ledger',
                'description' => 'Help improve rental experiences across East Africa by sharing your tenant story. Anonymous survey about Rental Security Deposits, landlord relationships, and rental challenges in Uganda, Kenya, Tanzania.',
                'keywords' => 'tenant survey Uganda, rental experience survey East Africa, Rental Security Deposit feedback Kenya, tenant rights survey Tanzania, rental challenges East Africa',
                'og_type' => 'website',
                'canonical' => base_url('/survey/tenants')
            ],
            'survey-landlords' => [
                'title' => 'Landlord & Property Manager Survey East Africa | Rental Industry Insights - est8Ledger',
                'description' => 'Share your experience as a landlord or property manager across Uganda, Kenya, and Tanzania. Help us understand rental industry challenges and improve Rental Security Deposit management.',
                'keywords' => 'landlord survey East Africa, property manager survey Uganda, rental industry feedback Kenya, Rental Security Deposit management survey Tanzania, property management challenges',
                'og_type' => 'website',
                'canonical' => base_url('/survey/landlords')
            ],
            'how-it-works' => [
                'title' => 'How It Works | 6-Step Blockchain Rental Security Deposit Management Process - est8Ledger',
                'description' => 'Learn how est8Ledger\'s 6-step process transforms Rental Security Deposit management across East Africa. From digital agreements to profit distribution in under 30 minutes.',
                'keywords' => 'how Rental Security Deposit management works, blockchain rental escrow process, digital tenancy agreement steps, transparent property inspection process, profit sharing deposits East Africa',
                'og_type' => 'website',
                'canonical' => base_url('/how-it-works')
            ]
        ];

        $defaultData = $seoData[$page] ?? $seoData['home'];
        
        // Merge with additional data if provided
        return array_merge($defaultData, $additionalData);
    }

    public static function generateStructuredData($type, $data = [])
    {
        switch ($type) {
            case 'article':
                return [
                    '@context' => 'https://schema.org',
                    '@type' => 'Article',
                    'headline' => $data['title'] ?? '',
                    'description' => $data['description'] ?? '',
                    'author' => [
                        '@type' => 'Organization',
                        'name' => 'est8Ledger'
                    ],
                    'publisher' => [
                        '@type' => 'Organization',
                        'name' => 'est8Ledger',
                        'logo' => [
                            '@type' => 'ImageObject',
                            'url' => base_url('assets/images/logo.png')
                        ]
                    ],
                    'datePublished' => $data['datePublished'] ?? date('c'),
                    'dateModified' => $data['dateModified'] ?? date('c'),
                    'mainEntityOfPage' => [
                        '@type' => 'WebPage',
                        '@id' => $data['url'] ?? current_url()
                    ]
                ];
                
            case 'breadcrumb':
                return [
                    '@context' => 'https://schema.org',
                    '@type' => 'BreadcrumbList',
                    'itemListElement' => $data['items'] ?? []
                ];
                
            default:
                return [];
        }
    }
}
