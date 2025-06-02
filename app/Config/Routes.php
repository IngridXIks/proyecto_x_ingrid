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
