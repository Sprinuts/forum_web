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

//game download
$routes->get('(?i)downloadgame', 'Index::downloadgame');

//admin login
$routes->get('adminlogin', 'Admin::login');
$routes->post('adminlogin', 'Admin::login');
$routes->get('adminlogout', 'Admin::logout');

//admin forum
$routes->get('adminforum', 'Admin::forum');
$routes->get('adminforum/delete/(:num)', 'Admin::delete/$1');
$routes->get('adminforumview/replydelete/(:num)/(:num)', 'Admin::replydelete/$1/$2');
$routes->get('adminforumview/(:num)', 'Admin::forumview/$1');
$routes->get('adminupdategame', 'Admin::updategame');
$routes->post('adminupdategame', 'Admin::updategame');


//reply and view forum
$routes->get('forumview/(:num)', 'Index::forumview/$1');
$routes->get('forumview/forumreply/(:num)', 'Index::forumreply/$1');
$routes->post('forumview/forumreply/(:num)', 'Index::forumreply/$1');

