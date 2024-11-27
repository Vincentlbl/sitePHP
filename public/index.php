<?php

session_start();

require_once __DIR__ . '/../vendor/autoload.php';

$routerFile = __DIR__ . '/src/router/routes.php';
if (!file_exists($routerFile)) {
    die('Erreur : Le fichier routes.php est introuvable.');
}

$router = require_once $routerFile;

$match = $router->match();

if ($match) {
    [$controller, $method] = explode('#', $match['target']);
    $params = $match['params'];

    if (class_exists($controller)) {
        $controllerInstance = new $controller();

        if (method_exists($controllerInstance, $method)) {
            try {
                $controllerInstance->$method(...array_values($params));
            } catch (Exception $e) {
                http_response_code(500);
                echo "Erreur interne du serveur : " . htmlspecialchars($e->getMessage());
            }
        } else {
            http_response_code(404);
            (new MainController())->render('404');
        }
    } else {
        http_response_code(404);
        (new MainController())->render('404');
    }
} else {
    http_response_code(404);
    (new MainController())->render('404');
}
