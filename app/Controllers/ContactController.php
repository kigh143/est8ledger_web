<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class ContactController extends Controller
{
    private $contactsDir;
    private $messagesFile;

    public function __construct()
    {
        $this->contactsDir = ROOTPATH . 'contacts';
        $this->messagesFile = $this->contactsDir . '/messages.json';
        
        // Create contacts directory if it doesn't exist
        if (!is_dir($this->contactsDir)) {
            mkdir($this->contactsDir, 0755, true);
        }
    }

    public function submit()
    {
        $validation = \Config\Services::validation();

        $validation->setRules([
            'name' => 'required|min_length[2]|max_length[100]',
            'email' => 'required|valid_email|max_length[255]',
            'phone' => 'permit_empty|max_length[20]',
            'message' => 'required|min_length[10]|max_length[1000]'
        ]);

        if (!$validation->withRequest($this->request)->run()) {
            return redirect()->to('/#contact')->withInput()->with('errors', $validation->getErrors());
        }

        $data = [
            'id' => uniqid(),
            'name' => htmlspecialchars($this->request->getPost('name'), ENT_QUOTES, 'UTF-8'),
            'email' => htmlspecialchars($this->request->getPost('email'), ENT_QUOTES, 'UTF-8'),
            'phone' => htmlspecialchars($this->request->getPost('phone'), ENT_QUOTES, 'UTF-8'),
            'message' => htmlspecialchars($this->request->getPost('message'), ENT_QUOTES, 'UTF-8'),
            'ip_address' => $this->request->getIPAddress(),
            'user_agent' => $this->request->getUserAgent()->getAgentString(),
            'created_at' => date('Y-m-d H:i:s'),
            'timestamp' => time()
        ];

        // Save contact message
        $success = $this->saveMessage($data);

        if ($success) {
            return redirect()->to('/#contact')->with('success', 'Thank you for your message! We will get back to you within 24 hours.');
        } else {
            return redirect()->to('/#contact')->withInput()->with('error', 'Sorry, there was an error sending your message. Please try again.');
        }
    }

    private function saveMessage($data)
    {
        try {
            $messages = [];

            // Load existing messages if file exists
            if (file_exists($this->messagesFile)) {
                $content = file_get_contents($this->messagesFile);
                $messages = json_decode($content, true) ?: [];
            }

            // Add new message
            $messages[] = $data;

            // Save back to file
            return file_put_contents($this->messagesFile, json_encode($messages, JSON_PRETTY_PRINT)) !== false;
        } catch (Exception $e) {
            log_message('error', 'Failed to save contact message: ' . $e->getMessage());
            return false;
        }
    }
}