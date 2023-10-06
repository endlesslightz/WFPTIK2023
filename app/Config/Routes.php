<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Admin\Dashboard::index'); //halaman panel
$routes->get('/buku', 'Admin\Dashboard::buku'); //halaman panel buku
