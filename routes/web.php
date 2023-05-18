<?php

use Symfony\Component\Routing\Route;
use Symfony\Component\Routing\RouteCollection;

// Routes
$routes = new RouteCollection();
$routes->add('Product', new Route(constant('URL_SUBFOLDER') . '/product/{id}', array('controller' => 'ProductController', 'method => showAction'), array('id' => '[0-9]+')));
