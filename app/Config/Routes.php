<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

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
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */


$routes->get('create-db', function () {
    $forge = \Config\Database::forge();
    if ($forge->createDatabase('proyekci4')) {
        echo 'Database created!';
    }
});

// We get a performance increase by specifying the default
// route since we don't have to scan directories.



// landing page
$routes->get('/', 'Home::index');
$routes->get('/pendaftaran_Sma', 'Home::pendaftaran_Sma');
$routes->get('/pendaftaran_Opd', 'Home::pendaftaran_Opd');
$routes->get('/panduan', 'Home::panduan');
$routes->get('/login', 'Home::login');
$routes->get('/loginLogic', 'Home::loginLogic');
$routes->get('/logout', 'Home::logout');
$routes->get('/daftar', 'Home::daftar');


// admin
$routes->get('/dashboard', 'Admin::dashboard');
$routes->get('/daftar_juri', 'Admin::daftar_juri');
$routes->get('/pendaftar_Sma', 'Admin::pendaftar_Sma');
$routes->get('/pendaftar_Opd', 'Admin::pendaftar_Opd');
$routes->get('/tambahOpd', 'Admin::tambahOpd');
$routes->get('/tambahSma', 'Admin::tambahSma');
$routes->get('/addDataSma', 'Admin::addDataSma');
$routes->get('/addDataOpd', 'Admin::addDataOpd');
$routes->get('/updateDataSma', 'Admin::updateDataSma');
$routes->get('/deleteDataSma/(:num)', 'Admin::deleteDataSma/$1');
$routes->get('/updateDataOpd', 'Admin::updateDataOpd');
$routes->get('/deleteDataOpd/(:num)', 'Admin::deleteDataOpd/$1');
$routes->get('/updateDataUser', 'Admin::updateDataUser');
$routes->get('/deleteDataUser/(:num)', 'Admin::deleteDataUser/$1');
$routes->get('/addUser', 'Admin::addUser');
$routes->get('/addUserLogic', 'Admin::addUserLogic');





// user
$routes->get('/user', 'User::user');
$routes->get('/pendaftar_Sma', 'User::pendaftar_Sma');
$routes->get('/pendaftar_Opd', 'User::pendaftar_Opd');
$routes->get('/editStatusSma/(:num)', 'User::editStatusSma/$1');
$routes->get('/updateStatusSma', 'User::updateStatusSma');
$routes->get('/editStatusOpd/(:num)', 'User::editStatusOpd/$1');
$routes->get('/updateStatusOpd', 'User::updateStatusOpd');




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
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
