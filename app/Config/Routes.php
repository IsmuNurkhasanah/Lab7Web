<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->setAutoRoute(true);

$routes->match(['get', 'post'], 'user/login', 'User::login');
$routes->match(['get', 'post'], 'user/logout', 'User::logout');

$routes->get('/', 'Home::index');
$routes->get('/about', 'Page::about');
$routes->get('/contact', 'Page::contact');
$routes->get('/artikel', 'Artikel::index');
$routes->get('/faqs', 'Page::faqs');
$routes->get('/tos', 'Page::tos');

$routes->get('/artikel/(:any)', 'Artikel::view/$1');

$routes->group('admin', ['filter' => 'auth'], function($routes) {
    $routes->get('artikel', 'Artikel::admin_index');
    $routes->add('artikel/add', 'Artikel::add');
    $routes->add('artikel/edit/(:any)', 'Artikel::edit/$1');
    $routes->get('artikel/delete/(:any)', 'Artikel::delete/$1');
});

$routes->get('ajax', 'AjaxController::index');
$routes->get('ajax/getData', 'AjaxController::getData');
$routes->post('ajax/add', 'AjaxController::add');
$routes->get('ajax/getDataById/(:num)', 'AjaxController::getDataById/$1');
$routes->post('ajax/edit', 'AjaxController::edit');
$routes->delete('ajax/delete/(:num)', 'AjaxController::delete/$1');
