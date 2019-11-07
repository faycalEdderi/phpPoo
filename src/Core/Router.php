<?php

namespace App\Core;

class Router{
    /**
     * Listes des routes 
     * clé : motif d'expression rationnelle
     *     ^ : débute par
     *     $ : termine par
     *     \d : chiffre
     *     [a-z] : minus
     *     + : 1 ou pls
     */

    // asso -> clé/valeur
    private $routes = [
        //'#^/(?<id>\d+)$#' => [
        '#^/$#' => [
            //'controller' => 'HomepageController' sans l'injecion de dépendance
            'controller' => 'controller.homepage', // avec
            'method' => 'index'
        ],
        '#^/team$#' => [
            //'controller' => 'HomepageController' sans l'injecion de dépendance
            'controller' => 'controller.team', // avec
            'method' => 'index'
        ],
        //accepte toutes les minuscule, les majuscule et le tiret du 6 et plusieurs caracteres
        '#^/team/(?<fullname>[a-zA-Z-]+)$#' => [
        
            'controller' => 'controller.team', 
            'method' => 'detail'
        ]
        


    ];


    /**
     * recherche de concordance entre la route et
     * la liste des routes 
     */
    public function getRoute():array{
        
    //stocker les groupeS de l'expression rationnelle
    $uriVars = [];

    //stocker la route contenue dans l'url
    //route par défaut
    $route = [
        'controller' => 'controller.notfound',
        'method' => 'index'
    ];

    $uri = $_SERVER['REQUEST_URI']; //clé
    //var_dump($uri);

    //recherche | $regexp => $params
    foreach($this->routes as $key => $value){
        /**
         * Preg_match :
         * - expression rationnelle
         * - chaîne de caractères
         * - capturer les groupes de l'expression
         */
        if(preg_match($key, $uri, $uriVars)){
            $route = $value;
            break;
        }
    }
    $route['uriVars'] = $uriVars;
    return $route;
    }
}
?>