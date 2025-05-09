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

/* ROUTER CRUD TBL PEGAWAI*/
$routes->get('/', 'Home::index');
$routes->get('/crud', 'Crud::index');
$routes->get('/create-crud', 'Crud::create');
$routes->post('/create-crud', 'Crud::save');
$routes->get('/crud-edit/(:num)', 'Crud::edit/$1');
$routes->post('/crud-edit/(:num)', 'Crud::update/$1');
$routes->get('/crud-hapus/(:num)', 'Crud::delete/$1');
/* ROUTUER CRUD TBL DEPARTEMEN */
$routes->get('/departemen', 'Departemen::index');
$routes->get('/create-departemen', 'Departemen::create');
$routes->post('/create-departemen', 'Departemen::save');
$routes->get('/departemen-edit/(:num)', 'Departemen::edit/$1');
$routes->post('/departemen-edit/(:num)', 'Departemen::update/$1');
$routes->get('/departemen-hapus/(:num)', 'Departemen::delete/$1');


/* ROUTUER CRUD TBL PENILAIAN 
$routes->get('/', 'Home::index');
$routes->get('/create-penilaian', 'Penilaian::create');
$routes->post('/create-penilaian', 'Penilaian::save');
$routes->get('/penilaian-edit/(:num)', 'Penilaian::edit/$1');
$routes->post('/penilaian-update/(:num)', 'Penilaian::update/$1');
$routes->get('/penilaian-hapus/(:num)', 'Penilaian::delete/$1');
*/
$routes->get('/penilaian', 'Penilaian::index');
$routes->get('/create-penilaian', 'Penilaian::create');
$routes->post('/create-penilaian', 'Penilaian::save');
$routes->get('/penilaian-edit/(:num)', 'Penilaian::edit/$1');
$routes->post('/penilaian-edit/(:num)', 'Penilaian::update/$1');
$routes->get('/penilaian-hapus/(:num)', 'Penilaian::delete/$1');


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
