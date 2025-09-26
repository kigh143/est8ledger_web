<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class DemoController extends Controller
{
    private $contactsFile;

    public function __construct()
    {
        $this->contactsFile = ROOTPATH . 'contacts.json';
    }

    public function submit()
    {
        $validation = \Config\Services::validation();

        $validation->setRules([
            'name' => 'required|min_length[2]|max_length[100]',
            'email' => 'required|valid_email',
            'user_type' => 'required|in_list[landlord,tenant,property_manager,other]',
            'phone' => 'max_length[20]',
            'message' => 'max_length[500]'
        ]);

        if (!$validation->withRequest($this->request)->run()) {
            return redirect()->back()->withInput()->with('errors', $validation->getErrors());
        }

        $data = [
            'id' => uniqid(),
            'name' => htmlspecialchars($this->request->getPost('name'), ENT_QUOTES, 'UTF-8'),
            'email' => htmlspecialchars($this->request->getPost('email'), ENT_QUOTES, 'UTF-8'),
            'user_type' => htmlspecialchars($this->request->getPost('user_type'), ENT_QUOTES, 'UTF-8'),
            'phone' => htmlspecialchars($this->request->getPost('phone'), ENT_QUOTES, 'UTF-8'),
            'message' => htmlspecialchars($this->request->getPost('message'), ENT_QUOTES, 'UTF-8'),
            'ip_address' => $this->request->getIPAddress(),
            'user_agent' => $this->request->getUserAgent()->getAgentString(),
            'created_at' => date('Y-m-d H:i:s'),
            'timestamp' => time()
        ];

        // Save to contacts.json
        $success = $this->saveContact($data);

        if ($success) {
            return redirect()->to('/')->with('success', 'Thank you! Your request has been submitted. We will contact you soon.');
        } else {
            return redirect()->back()->withInput()->with('error', 'Sorry, there was an error submitting your request. Please try again.');
        }
    }

    private function saveContact($data)
    {
        try {
            $contacts = [];

            // Load existing contacts if file exists
            if (file_exists($this->contactsFile)) {
                $content = file_get_contents($this->contactsFile);
                $contacts = json_decode($content, true) ?: [];
            }

            // Add new contact
            $contacts[] = $data;

            // Save back to file
            return file_put_contents($this->contactsFile, json_encode($contacts, JSON_PRETTY_PRINT)) !== false;
        } catch (Exception $e) {
            log_message('error', 'Failed to save contact: ' . $e->getMessage());
            return false;
        }
    }
}