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
