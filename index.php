<?php
require_once 'controllers/StudentController.php';

$controller = new StudentController();

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$method = $_SERVER['REQUEST_METHOD'];

// Simulate method override for HTML forms
if ($method === 'POST' && isset($_POST['_method'])) {
    $method = strtoupper($_POST['_method']);
}

if ($uri === '/' && $method === 'GET') {
    $controller->index();
} elseif ($uri === '/store' && $method === 'POST') {
    $controller->store();
} elseif (preg_match('/\/delete\/(\d+)/', $uri, $matches) && $method === 'POST') {
    $controller->delete($matches[1]);
} elseif (preg_match('/\/update\/(\d+)/', $uri, $matches) && $method === 'POST') {
    $controller->update($matches[1]);
} else {
    http_response_code(404);
    echo "Page not found";
}
