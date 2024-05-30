<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('leaflet', 'Home::leaflet');
$routes->get('openlayers', 'Home::openLayers');