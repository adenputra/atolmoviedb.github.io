<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */


$routes->setAutoRoute(true);
$routes->get('/', 'Home::index');
$routes->get('/login', 'UserController::index');
$routes->post('/login/process', 'UserController::process');
$routes->get('/logout', 'UserController::logout');
$routes->get('/register', 'Register::index');
$routes->post('/register/process', 'Register::process');
