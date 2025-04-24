<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/promociones', 'Promociones::index');
$routes->get('terminos', 'TerminosyCondiciones::terminos');
