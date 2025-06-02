<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('terminos', 'TerminosyCondiciones::terminos');
$routes->get('Quienes_Somos', 'Somos::Quienes_Somos');
$routes->get('Privacidad', 'PoliticaPrivacidad::Privacidad');
$routes->get('Contacto', 'InformaciondeContacto::Contacto');
$routes->get('comercializacion', 'Comercializacion::comercializacion');
$routes->get('promociones', 'Promociones::promociones');
$routes->get('locales', 'Locales::locales');
$routes->get('hamburguesas', 'Hamburguesas::hamburguesas');
$routes->get('combos', 'Combos::combos');
$routes->get('bebidas', 'Bebidas_postres::bebidas_postres');
$routes->get('buscar', 'BuscarController::index');
//BD
$routes->get('/carrito', 'CarritoController::index');

$routes->post('/carrito/agregar', 'CarritoController::agregar');
$routes->post('/carrito/eliminar', 'CarritoController::eliminar');

$routes->get('/carrito/agregar/(:num)', 'CarritoController::mostrarAgregarCarrito/$1');
$routes->get('/carrito/pagar', 'CarritoController::mostrarPagar');
$routes->get('/carrito/producto/(:num)', 'CarritoController::mostrarProducto/$1');


$routes->get('producto', 'Producto::index');
$routes->get('consulta', 'Consulta::index');
$routes->post('consulta/enviar', 'Consulta::enviar');