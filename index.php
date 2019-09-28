<?php
error_reporting(-1);
ini_set('display_errors', 'On');
require 'core/vendor/autoload.php';
include 'bootstrap.php';

$dispatcher = FastRoute\simpleDispatcher(function(FastRoute\RouteCollector $route) {
	require 'routes.php';
});

// Fetch method and URI from somewhere
$httpMethod = $_SERVER['REQUEST_METHOD'];
$uri = $_SERVER['REQUEST_URI'];

// Strip query string (?foo=bar) and decode URI
if (false !== $pos = strpos($uri, '?')) {
    $uri = substr($uri, 0, $pos);
}
$uri = rawurldecode($uri);

$routeInfo = $dispatcher->dispatch($httpMethod, $uri);
switch ($routeInfo[0]) {
    case FastRoute\Dispatcher::NOT_FOUND:
        Response::json(404,'Route not found');
        break;
    case FastRoute\Dispatcher::METHOD_NOT_ALLOWED:
        $allowedMethods = $routeInfo[1];
        Response::json(405,'Method not allowed. Allowed methods are ',$allowedMethods);
        break;
    case FastRoute\Dispatcher::FOUND:
        $handler = explode('::', $routeInfo[1]);
        $obj = new $handler[0];
        $method = $handler[1];
        $vars = $routeInfo[2];
        call_user_func_array(array($obj,$method),$vars);
        break;
}