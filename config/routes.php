<?php

use Cake\Routing\RouteBuilder;
use Cake\Routing\Router;
use Cake\Routing\Route\DashedRoute;

Router::plugin('FontAwesome', ['path' => '/font-awesome'], function (RouteBuilder $routes) {
    $routes->fallbacks(DashedRoute::class);
});
