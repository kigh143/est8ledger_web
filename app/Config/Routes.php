<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

// Blog routes
$routes->get('/blogs', 'BlogController::index');
$routes->get('/blog/(:segment)', 'BlogController::show/$1');
$routes->post('/blog/comment', 'BlogController::addComment');

// Waiting list route
$routes->post('/join-waitinglist', 'DemoController::submit');

// Legacy demo request route (redirect to waiting list)
$routes->post('/request-demo', 'DemoController::submit');

// Legal pages
$routes->get('/privacy-policy', 'Home::privacyPolicy');
$routes->get('/terms-of-use', 'Home::termsOfUse');

// Contact form route
$routes->post('/contact', 'ContactController::submit');

// Survey routes
$routes->get('/surveys', 'SurveyController::index');
$routes->get('/survey/(:segment)', 'SurveyController::show/$1');
$routes->post('/survey/(:segment)', 'SurveyController::submit/$1');

// Admin routes
$routes->get('/admin', 'AdminController::index');
$routes->get('/admin/login', 'AdminController::login');
$routes->post('/admin/authenticate', 'AdminController::authenticate');
$routes->get('/admin/logout', 'AdminController::logout');
$routes->get('/admin/contacts', 'AdminController::contacts');
$routes->get('/admin/surveys', 'AdminController::surveys');
$routes->get('/admin/surveys/tenants', 'AdminController::tenantSurveys');
$routes->get('/admin/surveys/landlords', 'AdminController::landlordSurveys');

// KYC verification callback route with rate limiting
$routes->get('/didit', 'KycController::diditCallback', ['filter' => 'ratelimit']);
