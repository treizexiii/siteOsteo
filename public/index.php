<?php

require dirname(__DIR__) . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';

$uri = $_SERVER['REQUEST_URI'];
$router = new AltoRouter();

$router->map('GET', '/', 'home', 'home');
$router->map('GET', '/ostepathie', 'osteopathie', 'osteopathie');
$router->map('GET', '/votreOsteo', 'votreosteo', 'votreOsteo');
$router->map('GET', '/tarif', 'tarif', 'tarif');
$router->map('GET', '/contact', 'contact', 'contact');

$match = $router->match();
require dirname(__DIR__) . DIRECTORY_SEPARATOR . 'utilities' . DIRECTORY_SEPARATOR . 'functions.php';
require dirname(__DIR__) . DIRECTORY_SEPARATOR . 'elements' . DIRECTORY_SEPARATOR . 'header.php';
if (is_array($match)) {
    if (is_callable($match['target'])) {
        call_user_func_array($match['target'], $match['params']);
    } else {
        $params = $match['params'];
        require dirname(__DIR__) . DIRECTORY_SEPARATOR . 'vues' . DIRECTORY_SEPARATOR . $match['target'] . ".php";
    }
} else {
    require dirname(__DIR__) . DIRECTORY_SEPARATOR . 'public' . DIRECTORY_SEPARATOR . "errors" . DIRECTORY_SEPARATOR . "404.php";
}
require dirname(__DIR__) . DIRECTORY_SEPARATOR . 'elements' . DIRECTORY_SEPARATOR . 'footer.php';
