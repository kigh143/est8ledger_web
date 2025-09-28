<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class DemoController extends Controller
{
    private $waitingListFile;

    public function __construct()
    {
        $this->waitingListFile = ROOTPATH . 'contacts/waitinglist.json';
        
        // Create contacts directory if it doesn't exist
        $contactsDir = ROOTPATH . 'contacts';
        if (!is_dir($contactsDir)) {
            mkdir($contactsDir, 0755, true);
        }
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

        // Save to waiting list
        $success = $this->saveToWaitingList($data);

        if ($success) {
            return redirect()->to('/')->with('success', 'Thank you for joining our waiting list! We will notify you as soon as est8Ledger is available.');
        } else {
            return redirect()->back()->withInput()->with('error', 'Sorry, there was an error joining the waiting list. Please try again.');
        }
    }

    private function saveToWaitingList($data)
    {
        try {
            $waitingList = [];

            // Load existing waiting list if file exists
            if (file_exists($this->waitingListFile)) {
                $content = file_get_contents($this->waitingListFile);
                $waitingList = json_decode($content, true) ?: [];
            }

            // Add new entry
            $waitingList[] = $data;

            // Save back to file
            return file_put_contents($this->waitingListFile, json_encode($waitingList, JSON_PRETTY_PRINT)) !== false;
        } catch (Exception $e) {
            log_message('error', 'Failed to save to waiting list: ' . $e->getMessage());
            return false;
        }
    }
}
