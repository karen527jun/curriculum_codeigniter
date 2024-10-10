<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/usuario', 'UsuarioController::index');
$routes->post('/usuario/store', 'UsuarioController::store');
$routes->get('/usuario/success', 'UsuarioController::success');
$routes->get('/usuario/lista', 'UsuarioController::list');
