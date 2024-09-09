<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/ekstrakurikuler', 'EkstrakurikulerController::index');
$routes->get('/ekstra/hariini', 'EkstraJadwalController::getEkstraHariIni');


