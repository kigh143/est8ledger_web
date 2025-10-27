<?php

namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;

class RateLimit implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        $ipAddress = $request->getIPAddress();
        $cacheKey = 'rate_limit_kyc_' . md5($ipAddress);
        $cache = \Config\Services::cache();
        
        $attempts = $cache->get($cacheKey) ?? 0;
        $maxAttempts = 10; // Max 10 requests per hour
        $timeWindow = 3600; // 1 hour
        
        if ($attempts >= $maxAttempts) {
            log_message('warning', 'Rate limit exceeded for KYC callback from IP: ' . $ipAddress);
            return service('response')->setStatusCode(429)->setJSON([
                'error' => 'Too many requests. Please try again later.'
            ]);
        }
        
        $cache->save($cacheKey, $attempts + 1, $timeWindow);
        return null;
    }
    
    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        return null;
    }
}