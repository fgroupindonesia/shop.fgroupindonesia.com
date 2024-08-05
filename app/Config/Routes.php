<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/item', 'Home::item');
$routes->get('/payment', 'Home::payment');
$routes->get('/company-profile', 'Home::compro');
$routes->get('/ketentuan-umum', 'Home::ketentuan');
$routes->get('/lokasi-kami', 'Home::lokasi');
$routes->get('/privacy-policy', 'Home::privacy');