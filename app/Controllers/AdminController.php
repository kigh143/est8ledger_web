<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class AdminController extends Controller
{
    private $contactsDir;
    private $surveysDir;

    public function __construct()
    {
        $this->contactsDir = ROOTPATH . 'contacts';
        $this->surveysDir = ROOTPATH . 'surveys';
    }

    public function index()
    {
        if (!$this->isLoggedIn()) {
            return redirect()->to('/admin/login');
        }

        $surveyCounts = $this->getSurveyCountsByType();

        $data = [
            'title' => 'Admin Dashboard',
            'totalContacts' => $this->getContactCount(),
            'totalSurveyResponses' => $this->getSurveyResponseCount(),
            'tenantSurveyCount' => $surveyCounts['tenants'],
            'landlordSurveyCount' => $surveyCounts['landlords'],
            'recentContacts' => $this->getRecentContacts(5),
            'recentSurveys' => $this->getRecentSurveyResponses(5)
        ];

        return view('admin/dashboard', $data);
    }

    public function login()
    {
        if ($this->isLoggedIn()) {
            return redirect()->to('/admin');
        }

        return view('admin/login');
    }

    public function authenticate()
    {
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        $adminUsername = env('admin.username', 'admin');
        $adminPassword = env('admin.password', 'password');

        if ($username === $adminUsername && $password === $adminPassword) {
            session()->set([
                'admin_logged_in' => true,
                'admin_login_time' => time()
            ]);
            return redirect()->to('/admin')->with('success', 'Welcome to admin dashboard');
        }

        return redirect()->to('/admin/login')->with('error', 'Invalid credentials');
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/admin/login')->with('success', 'Logged out successfully');
    }

    public function contacts()
    {
        if (!$this->isLoggedIn()) {
            return redirect()->to('/admin/login');
        }

        $contacts = $this->getAllContacts();
        $waitingList = $this->getWaitingList();

        $data = [
            'title' => 'Contact Messages',
            'contacts' => $contacts,
            'waitingList' => $waitingList
        ];

        return view('admin/contacts', $data);
    }

    public function surveys()
    {
        if (!$this->isLoggedIn()) {
            return redirect()->to('/admin/login');
        }

        $allResponses = $this->getAllSurveyResponses();
        $tenantResponses = $this->getSurveyResponsesByType('tenants-survey');
        $landlordResponses = $this->getSurveyResponsesByType('landlords-survey');

        $data = [
            'title' => 'Survey Responses Overview',
            'allResponses' => $allResponses,
            'tenantCount' => count($tenantResponses),
            'landlordCount' => count($landlordResponses),
            'totalCount' => count($allResponses)
        ];

        return view('admin/surveys-overview', $data);
    }

    public function tenantSurveys()
    {
        if (!$this->isLoggedIn()) {
            return redirect()->to('/admin/login');
        }

        $tenantResponses = $this->getSurveyResponsesByType('tenants-survey');

        $data = [
            'title' => 'Tenant Survey Responses',
            'surveyResponses' => $tenantResponses,
            'surveyType' => 'tenants',
            'surveyTitle' => 'Renters Experience Survey'
        ];

        return view('admin/surveys-detail', $data);
    }

    public function landlordSurveys()
    {
        if (!$this->isLoggedIn()) {
            return redirect()->to('/admin/login');
        }

        $landlordResponses = $this->getSurveyResponsesByType('landlords-survey');

        $data = [
            'title' => 'Landlord Survey Responses',
            'surveyResponses' => $landlordResponses,
            'surveyType' => 'landlords',
            'surveyTitle' => 'Landlord & Property Manager Survey'
        ];

        return view('admin/surveys-detail', $data);
    }

    private function isLoggedIn()
    {
        $isLoggedIn = session()->get('admin_logged_in');
        $loginTime = session()->get('admin_login_time');
        $timeout = env('admin.session_timeout', 3600);

        if (!$isLoggedIn || !$loginTime) {
            return false;
        }

        if (time() - $loginTime > $timeout) {
            session()->destroy();
            return false;
        }

        return true;
    }

    private function getContactCount()
    {
        $messagesFile = $this->contactsDir . '/messages.json';
        if (!file_exists($messagesFile)) return 0;

        $messages = json_decode(file_get_contents($messagesFile), true) ?: [];
        return count($messages);
    }

    private function getSurveyResponseCount()
    {
        $count = 0;
        $surveyFiles = glob($this->surveysDir . '/*-answers.json');
        
        foreach ($surveyFiles as $file) {
            $responses = json_decode(file_get_contents($file), true) ?: [];
            $count += count($responses);
        }

        return $count;
    }

    private function getSurveyCountsByType()
    {
        return [
            'tenants' => count($this->getSurveyResponsesByType('tenants-survey')),
            'landlords' => count($this->getSurveyResponsesByType('landlords-survey'))
        ];
    }

    private function getRecentContacts($limit = 5)
    {
        $messagesFile = $this->contactsDir . '/messages.json';
        if (!file_exists($messagesFile)) return [];

        $messages = json_decode(file_get_contents($messagesFile), true) ?: [];
        
        // Sort by timestamp descending
        usort($messages, function($a, $b) {
            return $b['timestamp'] - $a['timestamp'];
        });

        return array_slice($messages, 0, $limit);
    }

    private function getRecentSurveyResponses($limit = 5)
    {
        $allResponses = [];
        $surveyFiles = glob($this->surveysDir . '/*-answers.json');
        
        foreach ($surveyFiles as $file) {
            $responses = json_decode(file_get_contents($file), true) ?: [];
            $allResponses = array_merge($allResponses, $responses);
        }

        // Sort by timestamp descending
        usort($allResponses, function($a, $b) {
            return $b['timestamp'] - $a['timestamp'];
        });

        return array_slice($allResponses, 0, $limit);
    }

    private function getAllContacts()
    {
        $messagesFile = $this->contactsDir . '/messages.json';
        if (!file_exists($messagesFile)) return [];

        $messages = json_decode(file_get_contents($messagesFile), true) ?: [];
        
        // Sort by timestamp descending
        usort($messages, function($a, $b) {
            return $b['timestamp'] - $a['timestamp'];
        });

        return $messages;
    }

    private function getWaitingList()
    {
        $waitingListFile = $this->contactsDir . '/waitinglist.json';
        if (!file_exists($waitingListFile)) return [];

        $waitingList = json_decode(file_get_contents($waitingListFile), true) ?: [];
        
        // Sort by timestamp descending
        usort($waitingList, function($a, $b) {
            return $b['timestamp'] - $a['timestamp'];
        });

        return $waitingList;
    }

    private function getAllSurveyResponses()
    {
        $allResponses = [];
        $surveyFiles = glob($this->surveysDir . '/*-answers.json');
        
        foreach ($surveyFiles as $file) {
            $responses = json_decode(file_get_contents($file), true) ?: [];
            $surveyName = basename($file, '-answers.json');
            
            foreach ($responses as &$response) {
                $response['survey_name'] = $surveyName;
            }
            
            $allResponses = array_merge($allResponses, $responses);
        }

        // Sort by timestamp descending
        usort($allResponses, function($a, $b) {
            return $b['timestamp'] - $a['timestamp'];
        });

        return $allResponses;
    }

    private function getSurveyResponsesByType($surveyType)
    {
        $responses = [];
        $surveyFile = $this->surveysDir . "/{$surveyType}-answers.json";
        
        if (file_exists($surveyFile)) {
            $fileResponses = json_decode(file_get_contents($surveyFile), true) ?: [];
            
            foreach ($fileResponses as $response) {
                $response['survey_name'] = $surveyType;
                $responses[] = $response;
            }
        }

        // Sort by timestamp descending
        usort($responses, function($a, $b) {
            return $b['timestamp'] - $a['timestamp'];
        });

        return $responses;
    }
}
