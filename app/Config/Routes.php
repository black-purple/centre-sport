<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// $routes->setTranslateURIDashes(false);
// $routes->set404Override();
// $routes->setAutoRoute(true);
// $routes->group(
//     'SportClub',
//     function ($routes) {
$routes->get('/', 'Home::index');
$routes->get('/sign-up', 'Auth::create');
$routes->get('/sign-in', 'Auth::register');
$routes->get('/reclame', 'Home::reclamation');
$routes->get('/list-reclame', 'Home::listreclamation');

    // }
// );
