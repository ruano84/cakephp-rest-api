<?php

use Cake\Core\Plugin;
use Cake\Routing\Route\DashedRoute;
use Cake\Routing\RouteBuilder;
use Cake\Routing\Router;

Router::defaultRouteClass(DashedRoute::class);

Router::scope('/', function (RouteBuilder $routes) {
    $routes->connect('/foo/public-action', ['controller' => 'Foo', 'action' => 'publicAction', 'allowWithoutToken' => true]);
    $routes->fallbacks(DashedRoute::class);
});

//Load all plugin routes
Plugin::routes();
