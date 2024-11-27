<?php

require_once __DIR__ . '/../controllers/MainController.php';
require_once __DIR__ . '/../../../vendor/autoload.php';


$router = new AltoRouter();

$basePath = rtrim(dirname($_SERVER['SCRIPT_NAME']), '/');
$router->setBasePath($basePath);

$router->map('GET', '/', 'MainController#home', 'home');
$router->map('GET', '/about', 'MainController#about', 'about');
$router->map('GET', '/catalog', 'MainController#catalog', 'catalog');
$router->map('GET', '/product/[i:id]', 'MainController#product', 'product');
$router->map('GET|POST', '/login', 'MainController#login', 'login');
$router->map('GET|POST', '/register', 'MainController#register', 'register');
$router->map('GET|POST', '/cart', 'MainController#cart', 'cart');
$router->map('POST', '/cart/add', 'MainController#addToCart', 'cart_add');



return $router;
