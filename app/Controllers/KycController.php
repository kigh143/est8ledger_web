<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class KycController extends BaseController
{
    public function diditCallback()
    {
        // Get query parameters
        $verificationSessionId = $this->request->getGet('verificationSessionId');
        $status = $this->request->getGet('status');
        
        // Validate required parameters
        if (empty($verificationSessionId) || empty($status)) {
            log_message('warning', 'KYC callback missing required parameters. SessionId: ' . ($verificationSessionId ?? 'null') . ', Status: ' . ($status ?? 'null'));
            return $this->handleInvalidRequest();
        }
        
        // Validate status value
        $validStatuses = ['Approved', 'Declined', 'In Review'];
        if (!in_array($status, $validStatuses)) {
            log_message('warning', 'KYC callback invalid status: ' . $status . ' for session: ' . $verificationSessionId);
            return $this->handleInvalidRequest();
        }
        
        // Log verification attempt for audit
        $this->logVerificationAttempt($verificationSessionId, $status);
        
        // Prepare data for view
        $data = [
            'title' => 'Identity Verification Results - est8Ledger',
            'description' => 'Your identity verification results with est8Ledger secure platform.',
            'keywords' => 'identity verification, KYC, security, est8Ledger',
            'verificationSessionId' => esc($verificationSessionId),
            'status' => esc($status),
            'statusConfig' => $this->getStatusConfig($status)
        ];
        
        return view('pages/kyc-results', $data);
    }
    
    private function handleInvalidRequest()
    {
        $data = [
            'title' => 'Verification Error - est8Ledger',
            'description' => 'There was an error processing your verification request.',
            'keywords' => 'verification error, est8Ledger',
            'error' => true
        ];
        
        return view('pages/kyc-results', $data);
    }
    
    private function getStatusConfig($status)
    {
        $configs = [
            'Approved' => [
                'icon' => 'bi-check-circle-fill',
                'color' => 'green',
                'bgColor' => 'bg-green-50',
                'textColor' => 'text-green-800',
                'iconColor' => 'text-green-600',
                'borderColor' => 'border-green-200',
                'title' => 'Verification Approved',
                'message' => 'Congratulations! Your identity has been successfully verified. You can now access all features of the est8Ledger platform.',
                'buttonText' => 'Continue to Dashboard',
                'buttonClass' => 'bg-green-600 hover:bg-green-700 text-white'
            ],
            'Declined' => [
                'icon' => 'bi-x-circle-fill',
                'color' => 'red',
                'bgColor' => 'bg-red-50',
                'textColor' => 'text-red-800',
                'iconColor' => 'text-red-600',
                'borderColor' => 'border-red-200',
                'title' => 'Verification Declined',
                'message' => 'We were unable to verify your identity at this time. Please contact our support team for assistance or try the verification process again.',
                'buttonText' => 'Contact Support',
                'buttonClass' => 'bg-red-600 hover:bg-red-700 text-white'
            ],
            'In Review' => [
                'icon' => 'bi-clock-fill',
                'color' => 'yellow',
                'bgColor' => 'bg-yellow-50',
                'textColor' => 'text-yellow-800',
                'iconColor' => 'text-yellow-600',
                'borderColor' => 'border-yellow-200',
                'title' => 'Verification In Review',
                'message' => 'Your identity verification is currently being reviewed by our team. We will notify you once the review is complete, typically within 24-48 hours.',
                'buttonText' => 'Return to Home',
                'buttonClass' => 'bg-yellow-600 hover:bg-yellow-700 text-white'
            ]
        ];
        
        return $configs[$status] ?? $configs['In Review'];
    }
    
    private function logVerificationAttempt($sessionId, $status)
    {
        $logData = [
            'timestamp' => date('Y-m-d H:i:s'),
            'session_id' => $sessionId,
            'status' => $status,
            'ip_address' => $this->request->getIPAddress(),
            'user_agent' => $this->request->getUserAgent()->getAgentString()
        ];
        
        log_message('info', 'KYC Verification Result: ' . json_encode($logData));
        
        // Optionally save to database or file for audit trail
        $this->saveVerificationLog($logData);
    }
    
    private function saveVerificationLog($logData)
    {
        $logsDir = WRITEPATH . 'logs/kyc/';
        
        // Create directory if it doesn't exist
        if (!is_dir($logsDir)) {
            mkdir($logsDir, 0755, true);
        }
        
        $logFile = $logsDir . 'verification-' . date('Y-m') . '.json';
        $existingLogs = [];
        
        if (file_exists($logFile)) {
            $existingLogs = json_decode(file_get_contents($logFile), true) ?: [];
        }
        
        $existingLogs[] = $logData;
        file_put_contents($logFile, json_encode($existingLogs, JSON_PRETTY_PRINT));
    }
}