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

$routes->setAutoRoute(true);
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.

//$routes->get('/', 'Home::index');

//Homepage
$routes->get('/dashboard', 'Dashboard::index',['filter' => 'auth']);

//About
$routes->get('/about', 'About::index',['filter' => 'auth']);

//Privacy Policy
$routes->get('/privacy', 'Privacy::index',['filter' => 'auth']);

//View Products
$routes->get('/products', 'Products::index',['filter' => 'auth']);

//View Cart
$routes->get('/cart', 'Cart::index',['filter' => 'auth']);

//Complete Purchase
$routes->get('/cart/complete', 'Cart::complete',['filter' => 'auth']);

//Add Products
$routes->get('/addproducts', 'AddProducts::index',['filter' => 'auth']);
$routes->post('/addproducts/save', 'AddProducts::save',['filter' => 'auth']);

//Edit Products
$routes->get('/editproducts', 'EditProducts::index',['filter' => 'auth']);
$routes->post('/editproducts/save', 'EditProducts::save',['filter' => 'auth']);

//View Sales
$routes->get('/sales', 'Sales::index',['filter' => 'auth']);

//Delete Sales
$routes->get('/sales/delete/(:any)', 'Sales::delete/$1',['filter' => 'auth']);
$routes->post('/sales/delete/(:any)', 'Sales::delete/$1',['filter' => 'auth']);

//Contact
$routes->get('/contact', 'Contact::index',['filter' => 'auth']);

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
