<?php

namespace App\Core;

/**
 * Classe dédiée à l'instanciation des objets
 */

class Container{
    //liste des services()
    private $services = [];

    //constructeur
    public function __construct(){
        /**
         * clé : identifiant au service
         * valeur : fonction anonyme renvoyant l'instance
         */
        $this->services = [
            'core.router' => function(){
                return new \App\Core\Router();
            },
            'controller.homepage' => function(){
                return new \App\Controller\HomepageController();
            },
            'controller.notfound' => function(){
                return new \App\Controller\NotFoundController();
            },
            'controller.team' => function(){
                return new \App\Controller\TeamController();
            }
        ];
    }

    public function getService(string $serviceName){
        return $this->services[$serviceName]();
    }

}

?>