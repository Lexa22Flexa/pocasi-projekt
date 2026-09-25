<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Main::index');
$routes->get('zeme/(:num)', 'Main::zemezeme/$1');
$routes->get('zeme-stanice/(:num)', 'Main::zeme/$1');
$routes->get('vsechny-stanice', 'Main::vsechnyStanice');
$routes->get('stanice/(:num)', 'Main::stanice/$1');
$routes->get('mapkaVlajkazeme/(:num)', 'Main::udajeZeme/$1');
$routes->post('item/delete', 'Item::delete/$1');