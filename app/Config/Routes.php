<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/admin', 'admin::login');
$routes->get('/admin/login', 'admin::login');
$routes->get('/admin/register', 'admin::register');
$routes->post('/admin/doRegister', 'admin::doRegister');
$routes->post('/admin/doLogin', 'admin::doLogin');
$routes->get('/admin/logout', 'admin::logout');
$routes->get('/admin/dashboard', 'dashboard::index');
