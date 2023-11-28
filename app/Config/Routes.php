<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/login', 'Administrador\loginController::login');
$routes->get('/inicio', 'Administrador\loginController::inicio');
$routes->get('/', 'Home::index');
