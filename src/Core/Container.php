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
            'core.database' => function(){
                return new \App\Core\Database();
            },
            'controller.homepage' => function(){
                return new \App\Controller\HomepageController(
                    $this->services['repository.game']()
                );
            },
            'controller.notfound' => function(){
                return new \App\Controller\NotFoundController();
            },
            'controller.team' => function(){
                return new \App\Controller\TeamController();
            }, 
            'controller.game' => function(){
                return new \App\Controller\GameController(
                    $this->services['core.database']()
                );
            },

            
            'repository.game' => function(){
                return new \App\Repository\GameRepository(
                    $this->services['core.database']()
                );
            },
          
        ];
    }
    
    public function getService(string $serviceName){
        return $this->services[$serviceName]();
    }

}

?>