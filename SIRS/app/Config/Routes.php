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
$routes->setDefaultController('Welcome');
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
$routes->get('/welcome', 'Welcome::index');
$routes->get('/welcome/login', 'Welcome::login');
$routes->get('/welcome/cekLogin', 'Welcome::cekLogin');
$routes->get('/welcome/logout', 'Welcome::logout');

$routes->get('/dashboard', 'Dashboard::index');
$routes->get('/dashboard/aboutUs', 'Dashboard::aboutUs');

$routes->get('/dokter', 'Dokter::index');
$routes->get('/dokter/save', 'Dokter::index');
$routes->get('/dokter/create', 'Dokter::create');
$routes->get('/dokter/edit/(:any)', 'Dokter::edit/$1');
$routes->post('dokter/update/(:any)', 'Dokter::update/$1');
$routes->delete('dokter/(:any)', 'Dokter::delete/$1');

$routes->get('/rawatinap', 'Rawatinap::index');
$routes->get('/rawatinap/view', 'Rawatinap::view');
$routes->get('/rawatinap/simpan', 'Rawatinap::simpan');
$routes->get('/rawatinap/detail/(:any)', 'Rawatinap::detail/$1');
$routes->get('/rawatinap/cetak/(:any)', 'Rawatinap::cetak/$1');

$routes->get('/pasien', 'Pasien::index');
$routes->get('/pasien/edit/(:any)', 'Pasien::edit/$1');
$routes->post('pasien/update/(:any)', 'Pasien::update/$1');
$routes->delete('pasien/(:any)', 'Pasien::delete/$1');

$routes->get('/ruangan', 'Ruangan::index');
$routes->get('/ruangan/edit/(:any)', 'Ruangan::edit/$1');
$routes->post('ruangan/update/(:any)', 'Ruangan::update/$1');
$routes->delete('ruangan/(:any)', 'Ruangan::delete/$1');


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
