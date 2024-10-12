<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/usuario', 'CurriculumsController::index');
$routes->post('/usuario/store', 'CurriculumsController::store');
$routes->get('/usuario/success', 'CurriculumsController::success');
$routes->get('/usuario/lista', 'CurriculumsController::list');
$routes->get('usuario/show/(:num)', 'CurriculumsController::show/$1');

