<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/Pages', 'Pages::index');
$routes->get('/Pages/about', 'Pages::about');
