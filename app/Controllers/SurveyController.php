<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class SurveyController extends Controller
{
    private $surveysDir;

    public function __construct()
    {
        $this->surveysDir = ROOTPATH . 'surveys';
        
        // Create surveys directory if it doesn't exist
        if (!is_dir($this->surveysDir)) {
            mkdir($this->surveysDir, 0755, true);
        }
    }

    public function index()
    {
        $surveys = $this->getAvailableSurveys();
        
        $data = [
            'title' => 'Surveys - Help Shape the Future of Rental Deposits',
            'description' => 'Share your experience with security deposits and help us build better solutions for landlords and tenants.',
            'keywords' => 'rental survey, security deposit feedback, tenant experience, landlord survey',
            'surveys' => $surveys
        ];

        return view('pages/surveys', $data);
    }

    public function show($surveyId = null)
    {
        if (!$surveyId) {
            return redirect()->to('/surveys')->with('error', 'Survey not found.');
        }

        $survey = $this->loadSurvey($surveyId);
        
        if (!$survey) {
            return redirect()->to('/surveys')->with('error', 'Survey not found.');
        }

        $data = [
            'title' => $survey['title'] . ' - est8Ledger Survey',
            'description' => $survey['description'],
            'keywords' => 'survey, feedback, rental experience, security deposits',
            'survey' => $survey
        ];

        return view('pages/survey-form', $data);
    }

    public function submit($surveyId = null)
    {
        if (!$surveyId) {
            return redirect()->to('/surveys')->with('error', 'Survey not found.');
        }

        $survey = $this->loadSurvey($surveyId);
        
        if (!$survey) {
            return redirect()->to('/surveys')->with('error', 'Survey not found.');
        }

        // Validate survey responses
        $validation = $this->validateSurveyResponses($survey);
        
        if (!$validation['valid']) {
            return redirect()->to("/survey/{$surveyId}")
                           ->withInput()
                           ->with('errors', $validation['errors']);
        }

        // Process and save responses
        $responses = $this->processSurveyResponses($survey);
        $success = $this->saveSurveyResponse($surveyId, $responses);

        if ($success) {
            return redirect()->to('/surveys')
                           ->with('success', 'Thank you for completing the survey! Your feedback is valuable to us.');
        } else {
            return redirect()->to("/survey/{$surveyId}")
                           ->withInput()
                           ->with('error', 'Sorry, there was an error saving your responses. Please try again.');
        }
    }

    private function getAvailableSurveys()
    {
        $surveys = [];
        $files = glob($this->surveysDir . '/*-survey.json');
        
        foreach ($files as $file) {
            $content = file_get_contents($file);
            $survey = json_decode($content, true);
            
            if ($survey) {
                $surveys[] = [
                    'id' => $survey['id'],
                    'title' => $survey['title'],
                    'description' => $survey['description'],
                    'estimated_time' => $survey['estimated_time']
                ];
            }
        }
        
        return $surveys;
    }

    private function loadSurvey($surveyId)
    {
        $filename = $this->surveysDir . "/{$surveyId}.json";
        
        if (!file_exists($filename)) {
            return null;
        }
        
        $content = file_get_contents($filename);
        return json_decode($content, true);
    }

    private function validateSurveyResponses($survey)
    {
        $validation = \Config\Services::validation();
        $rules = [];

        foreach ($survey['questions'] as $question) {
            $fieldName = $question['id'];
            $rule = '';
            
            if ($question['required']) {
                $rule = 'required';
            } else {
                $rule = 'permit_empty';
            }

            // Add specific validation based on question type
            switch ($question['type']) {
                case 'email':
                    $rule .= '|valid_email|max_length[255]';
                    break;
                case 'tel':
                    $rule .= '|max_length[20]';
                    break;
                case 'textarea':
                case 'text':
                    $rule .= '|max_length[1000]';
                    break;
                case 'rating':
                    $rule .= "|in_list[1,2,3,4,5]";
                    break;
                case 'select':
                case 'radio':
                    // Allow any value for select/radio - they're constrained by the form options
                    $rule .= '|max_length[100]';
                    break;
                case 'checkbox':
                    // Checkbox arrays are handled differently
                    if ($question['required']) {
                        $rule = 'required';
                    } else {
                        $rule = 'permit_empty';
                    }
                    break;
            }
            
            $rules[$fieldName] = $rule;
        }

        $validation->setRules($rules);
        
        if (!$validation->withRequest($this->request)->run()) {
            return [
                'valid' => false,
                'errors' => $validation->getErrors()
            ];
        }

        return ['valid' => true, 'errors' => []];
    }

    private function processSurveyResponses($survey)
    {
        $responses = [];
        
        foreach ($survey['questions'] as $question) {
            $fieldName = $question['id'];
            $value = $this->request->getPost($fieldName);
            
            // Handle empty values
            if ($value === null || $value === '') {
                if (!$question['required']) {
                    $responses[$fieldName] = [
                        'question' => $question['question'],
                        'type' => $question['type'],
                        'answer' => ''
                    ];
                }
                continue;
            }
            
            // Sanitize input
            if (is_array($value)) {
                $value = array_map(function($item) {
                    return htmlspecialchars($item, ENT_QUOTES, 'UTF-8');
                }, $value);
            } else {
                $value = htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
            }
            
            $responses[$fieldName] = [
                'question' => $question['question'],
                'type' => $question['type'],
                'answer' => $value
            ];
        }
        
        return $responses;
    }

    private function saveSurveyResponse($surveyId, $responses)
    {
        try {
            $answersFile = $this->surveysDir . "/{$surveyId}-answers.json";
            $existingAnswers = [];

            // Load existing answers if file exists
            if (file_exists($answersFile)) {
                $content = file_get_contents($answersFile);
                $existingAnswers = json_decode($content, true) ?: [];
            }

            // Create new response record
            $responseData = [
                'id' => uniqid(),
                'survey_id' => $surveyId,
                'submitted_at' => date('Y-m-d H:i:s'),
                'timestamp' => time(),
                'ip_address' => $this->request->getIPAddress(),
                'user_agent' => $this->request->getUserAgent()->getAgentString(),
                'responses' => $responses
            ];

            // Add to existing answers
            $existingAnswers[] = $responseData;

            // Save back to file
            return file_put_contents($answersFile, json_encode($existingAnswers, JSON_PRETTY_PRINT)) !== false;
            
        } catch (Exception $e) {
            log_message('error', 'Failed to save survey response: ' . $e->getMessage());
            return false;
        }
    }
}
