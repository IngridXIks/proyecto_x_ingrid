<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/promociones', 'Promociones::index'); /*ruta de prueba, no finalizada*/
$routes->get('terminos', 'TerminosyCondiciones::terminos');
$routes->get('Quienes_Somos', 'Somos::Quienes_Somos');
$routes->get('Privacidad', 'PoliticaPrivacidad::Privacidad');
$routes->get('Contacto', 'InformaciondeContacto::Contacto');
$routes->get('comercializacion', 'Comercializacion::comercializacion');