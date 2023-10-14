<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Admin\Dashboard::index'); //halaman panel
$routes->get('/buku', 'Admin\Dashboard::buku'); //halaman panel buku
$routes->get('/user', 'Admin\UserController::index'); //halaman panel user
$routes->get('/user/(:segment)', 'Admin\UserController::detail/$1'); //halaman panel detail user
