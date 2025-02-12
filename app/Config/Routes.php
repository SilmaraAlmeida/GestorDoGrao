<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'HomeController::index');

$routes->get('/enviarEmail', 'EnviarEmailController::index',    ['as' => 'enviar_email']);
$routes->post('/enviarEmail', 'EnviarEmailController::index',   ['as' => 'enviar_email']);
