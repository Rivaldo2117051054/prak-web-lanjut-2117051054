<?php

use App\Controllers\Home;
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/profile/(:any)/(:any)/(:any)', [Home::class, 'profile']);

// cara 2 $routes->get('/profile/(:any)', [Home::class, 'profile/$1/$2']);
