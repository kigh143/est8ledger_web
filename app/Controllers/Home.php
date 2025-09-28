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
}
