<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');

$routes->get('/productos/registro', 'Producto::index');
$routes->post('/productos/registro/nuevo', 'Producto::registrar');
$routes->get('/productos/listado', 'Producto::buscar');
$routes->delete('/productos/eliminar/(:num)', 'Producto::eliminar/$1');
$routes->post('/productos/editar/(:num)', 'Producto::editar/$1');

$routes->get('/animal/registro', 'Animal::index');
$routes->post('/animal/registro/nuevo', 'Animal::registrar');
$routes->get('/animal/listado', 'Animal::buscar');
$routes->delete('/animal/eliminar/(:num)', 'Animal::eliminar/$1');
$routes->post('/animal/editar/(:num)', 'Animal::editar/$1');
/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
