<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('terminos', 'TerminosyCondiciones::terminos');
$routes->get('Quienes_Somos', 'Somos::Quienes_Somos');
$routes->get('Privacidad', 'PoliticaPrivacidad::Privacidad');
$routes->get('Contacto', 'InformaciondeContacto::Contacto'); // 
$routes->get('informacion-contacto', 'Consulta::index');    
$routes->post('consulta/enviar', 'Consulta::enviar');      
$routes->get('comercializacion', 'Comercializacion::comercializacion');
$routes->get('locales', 'Locales::locales');
$routes->get('/hamburguesas', 'ProductoController::index');


$routes->get('buscar', 'BuscarController::index');

// Rutas de autenticación

$routes->get('login', 'AuthController::login');
$routes->post('login', 'AuthController::processLogin');

$routes->get('register', 'AuthController::register'); // Muestra el formulario
$routes->post('register', 'AuthController::processRegister'); // Procesa el formulario

$routes->get('logout', 'AuthController::logout');
$routes->get('perfil', 'ProfileController::index', ['filter' => 'auth']);
$routes->get('pedidos', 'OrdersController::index', ['filter' => 'auth']);
$routes->get('dashboard', 'DashboardController::index', ['filter' => 'auth']);
$routes->get('direcciones/crear', 'DireccionesController::crear');
$routes->post('direcciones/guardar', 'DireccionesController::guardar');
$routes->get('direcciones/eliminar/(:num)', 'DireccionesController::eliminar/$1');
$routes->post('direcciones/eliminar/(:num)', 'DireccionesController::eliminar/$1');
$routes->post('perfil/actualizar', 'ProfileController::actualizarPerfil');
$routes->get('carrito', 'CarritoController::index');
$routes->post('carrito/agregar', 'CarritoController::agregar');
$routes->post('carrito/eliminar', 'CarritoController::eliminar');
$routes->get('carrito/pagar', 'CarritoController::pagar');
$routes->post('carrito/actualizar', 'CarritoController::actualizar');