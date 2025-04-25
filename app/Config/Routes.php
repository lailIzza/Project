<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Profil::home');
$routes->get('/matkul/(:num)', 'Profil::matkul/$1'); // halaman detail
