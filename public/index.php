<?php
require '../vendor/autoload.php';

use Dotenv\Dotenv;
use FastRoute\RouteCollector;

// Load environment variables
$dotenv = Dotenv::createImmutable(__DIR__ . '/../');
$dotenv->load();

// Get environment variable (e.g., APP_NAME)
$appName = $_ENV['APP_NAME'] ?? 'Default App Name';

$dispatcher = FastRoute\simpleDispatcher(function (RouteCollector $r) {
    $r->addRoute('GET', '/', function() {
        global $appName;
        echo "Welcome to " . $appName . "!";
    });

    $r->addRoute('GET', '/about', function() {
        echo "This is the About Page!";
    });
});

// Fetch method and URI from server variables
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
        echo "404 - Not Found";
        break;
    case FastRoute\Dispatcher::METHOD_NOT_ALLOWED:
        echo "405 - Method Not Allowed";
        break;
    case FastRoute\Dispatcher::FOUND:
        $handler = $routeInfo[1];
        $handler();
        break;
}
