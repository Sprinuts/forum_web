<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

//forum view
$routes->get('/', 'Index::index');

//create forum
$routes->get('(?i)create', 'Index::create');
$routes->post('(?i)create', 'Index::create');

//admin login
$routes->get('adminlogin', 'Admin::login');
$routes->post('adminlogin', 'Admin::login');

//admin forum
$routes->get('adminforum', 'Admin::forum');
$routes->get('adminforum/delete/(:num)', 'Admin::delete/$1');
$routes->get('adminforumview/replydelete/(:num)', 'Admin::replydelete/$1');
$routes->get('adminforumview/(:num)', 'Admin::forumview/$1');


//reply and view forum
$routes->get('forumview/(:num)', 'Index::forumview/$1');
$routes->get('forumview/forumreply/(:num)', 'Index::forumreply/$1');
$routes->post('forumview/forumreply/(:num)', 'Index::forumreply/$1');

