<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/login', 'Administrador\loginController::login');
$routes->post('/inicio', 'Administrador\loginController::inicio');
$routes->get('/', 'Home::index');
$routes->get('/portada', 'Home::portada');
$routes->get('/libros', 'Home::Listarlibros');
$routes->post('/buscar', 'Home::BuscarLibros');
$routes->get('/librosPorTema', 'Home::verXTema');
