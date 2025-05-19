<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'Index::index');

$routes->get('(?i)create', 'Index::create');
$routes->post('(?i)create', 'Index::create');
