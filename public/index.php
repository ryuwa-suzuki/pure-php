<?php
$view_path = '../src/';
$path = str_replace('/', '', parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));

if ($_SERVER['REQUEST_URI'] === '/') {
    require $view_path . 'index.php';
    return;
}

if (file_exists($view_path . $path . '.php')) {
    require $view_path . $path . '.php';
} else {
    http_response_code(404);
    require $view_path. '404.php';
}