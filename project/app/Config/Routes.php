<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Index::index');

$routes->get('(?i)create', 'Index::create');

$routes->get('(?i)test', 'Index::test');