<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/about', 'Page::about'); 
$routes->get('/contact', 'Page::contact'); 
$routes->get('/artikel', 'Page::artikel');
$routes->get('/faqs', 'Page::faqs');
$routes->get('/tos', 'Page::tos'); 

$routes->setAutoRoute(true);