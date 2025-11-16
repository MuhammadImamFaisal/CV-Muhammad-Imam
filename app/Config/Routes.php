<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'CV::index');

$routes->get('pendidikan', 'Pendidikan::index');
$routes->get('organisasi', 'Organisasi::index');
$routes->get('skills', 'Skills::index');
$routes->get('pengalaman', 'Pengalaman::index');
$routes->get('portofolio', 'Portofolio::index');
