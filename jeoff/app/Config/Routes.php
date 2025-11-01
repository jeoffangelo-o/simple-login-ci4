<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/register', 'UserController::register');
$routes->post('/store', 'UserController::store');
$routes->get('/login', 'UserController::login');
$routes->post('/auth', 'UserController::auth');
$routes->get('/logout', 'UserController::logout');
