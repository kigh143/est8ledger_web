<?php

namespace App\Controllers;

class SeoController extends BaseController
{
    public static function getPageSeoData($page, $additionalData = [])
    {
        $seoData = [
            'home' => [
                'title' => 'est8Ledger | Revolutionary Security Deposit Management for Uganda & East Africa',
                'description' => 'End rental disputes forever with blockchain-secured security deposit management. Transparent inspections, digital tenancy agreements, and profit-sharing deposits for Uganda landlords and tenants.',
                'keywords' => 'security deposit management Uganda, rental escrow service East Africa, tenant landlord trust, digital tenancy agreements, blockchain rental platform, property deposit solution Uganda, rental transparency, move-in inspections, rental disputes solution',
                'og_type' => 'website',
                'canonical' => base_url('/')
            ],
            'blogs' => [
                'title' => 'Rental Industry Blog | Security Deposit & Property Management Insights - est8Ledger',
                'description' => 'Expert insights on security deposit management, tenant rights, landlord best practices, and rental industry trends in Uganda and East Africa. Stay informed with est8Ledger.',
                'keywords' => 'rental industry blog Uganda, security deposit insights, tenant rights East Africa, landlord best practices, property management tips Uganda, rental market analysis',
                'og_type' => 'website',
                'canonical' => base_url('/blogs')
            ],
            'contact' => [
                'title' => 'Contact est8Ledger | Get Help with Security Deposit Management in Uganda',
                'description' => 'Contact est8Ledger for support with security deposit management, rental escrow services, and digital tenancy agreements in Uganda and East Africa. We\'re here to help.',
                'keywords' => 'contact est8Ledger, security deposit support Uganda, rental escrow help, customer service East Africa, property management assistance',
                'og_type' => 'website',
                'canonical' => base_url('/contact')
            ],
            'terms-of-use' => [
                'title' => 'Terms of Use | est8Ledger Security Deposit Management Platform',
                'description' => 'Read the terms of use for est8Ledger\'s security deposit management platform. Understand your rights and responsibilities when using our rental escrow services.',
                'keywords' => 'est8Ledger terms of use, security deposit platform terms, rental escrow terms, digital tenancy agreement terms',
                'og_type' => 'article',
                'canonical' => base_url('/terms-of-use')
            ],
            'privacy-policy' => [
                'title' => 'Privacy Policy | How est8Ledger Protects Your Data',
                'description' => 'Learn how est8Ledger protects your personal data and privacy when using our security deposit management platform. Transparent data handling practices.',
                'keywords' => 'est8Ledger privacy policy, data protection Uganda, security deposit privacy, rental platform data security',
                'og_type' => 'article',
                'canonical' => base_url('/privacy-policy')
            ],
            'survey-tenants' => [
                'title' => 'Tenant Experience Survey | Share Your Rental Story - est8Ledger',
                'description' => 'Help improve rental experiences in Uganda by sharing your tenant story. Anonymous survey about security deposits, landlord relationships, and rental challenges.',
                'keywords' => 'tenant survey Uganda, rental experience survey, security deposit feedback, tenant rights survey East Africa',
                'og_type' => 'website',
                'canonical' => base_url('/survey/tenants')
            ],
            'survey-landlords' => [
                'title' => 'Landlord & Property Manager Survey | Rental Industry Insights - est8Ledger',
                'description' => 'Share your experience as a landlord or property manager in Uganda. Help us understand rental industry challenges and improve security deposit management.',
                'keywords' => 'landlord survey Uganda, property manager survey, rental industry feedback, security deposit management survey East Africa',
                'og_type' => 'website',
                'canonical' => base_url('/survey/landlords')
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