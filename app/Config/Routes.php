<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home');
$routes->get('biodata', 'Biodata');
$routes->get('/latihan1', 'Latihan::latihan1');
$routes->get('/latihan2/penjumlahan/(:num)/(:num)', 'Latihan::latihan2/$1/$2');
$routes->get('/latihan3/penjumlahan/(:num)/(:num)', 'Latihan::latihan3/$1/$2');
$routes->get('/latihan4/mata-kuliah', 'Latihan4');
$routes->post('/latihan4/mata-kuliah-cetak', 'Latihan4::cetak');  


$routes->get('/latihan5', 'Latihan5');
$routes->get('/latihan5/about', 'Latihan5::about');




