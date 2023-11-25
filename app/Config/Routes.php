<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Admin\Dashboard::index',['filter'=>'auth']); //halaman panel
$routes->get('/buku', 'Admin\Dashboard::buku',['filter'=>'auth']); //halaman panel buku
$routes->get('/user', 'Admin\UserController::index',['filter'=>'auth']); //halaman panel user
$routes->get('/user/data', 'Admin\UserController::getData'); //ambil data tabel user
$routes->get('/user/tambah', 'Admin\UserController::tambah'); // tampil form insert user
$routes->get('/user/edit/(:segment)', 'Admin\UserController::edit/$1'); // tampil form edit user
$routes->get('/user/(:segment)', 'Admin\UserController::detail/$1'); //halaman panel detail user
$routes->post('user/insert', 'Admin\UserController::insert'); //fungsi insert user
$routes->put('/user/update/(:segment)', 'Admin\UserController::update/$1'); //fungsi ubah user
$routes->delete('/user/delete/(:segment)', 'Admin\UserController::delete/$1'); //fungsi hapus user


$routes->get('/otentikasi', 'Otentikasi::index',['filter'=>'noauth']); //halaman login
$routes->post('/masuk', 'Otentikasi::login'); //halaman login
$routes->get('/keluar', 'Otentikasi::logout'); //halaman login


$routes->get('/faker', 'testFaker::index'); //halaman faker