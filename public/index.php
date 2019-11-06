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
use App\Core\Container;

//routeur sans l'injection des dépendances
//$router = new Router();

//container de services 
$container = new Container();
//routeur avec l'injection des dépendances
$router = $container->getService('core.router'); //clé

//Information du routeur
$routerInfos = $router->getRoute();
//echo '<pre>';
//var_dump($router->getRoute());

//instantation du contrôleur
//$controllerName = "App\\Controller\\{$routerInfos['controller']}";
//$controller = new $controllerName();

//instanciation du contrôleur avec l'injection de dépendances 
$controller = $container->getService($routerInfos['controller']);

//Appel de la méthode route
$controller->{$routerInfos['method']}(
    $routerInfos['uriVars']
);
//var_dump($controllerName);



?>