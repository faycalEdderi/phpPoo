<?php

/**
 * - contrôleur frontal : fichier qui va intercepter
 * toutes les requêtes http
 * - tâches exécutées par le contrôleur frontal :
 * -> déterminer quel est le contrôleur gérant 
 *    la route (url)
 * -> dans le contrôleur, quelle est la méthode 
 *    associée à la route
*/

//auto-chargement des classes
require_once '../vendor/autoload.php';
use App\Core\Router;

//routeur 
$router = new Router();
$routerInfos = $router->getRoute();
echo '<pre>';
//var_dump($router->getRoute());

//instantation du contrôleur
$controllerName = "App\\Controller\\{$routerInfos['controller']}";
$controller = new $controllerName();
$controller->{$routerInfos['method']}(
    $routerInfos['uriVars']
);
//var_dump($controllerName);



?>