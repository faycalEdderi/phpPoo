<?php

namespace App\Controller;
use App\Controller\AbstractController;

class TeamController extends AbstractController{
    public function index():void{
        $list = [
            'p1'=> [ 
                "nom" => "Kondo",
                "prenom" => "Yutsu",
                "email" => "yutsu@hotmail.fr",
                "poste" => "meh",
                "photo" => "akko" 
            ],
            'p2'=> [ 
                "nom" => "Lala",
                "prenom" => "Fafa",
                "email" => "Lafa@hotmail.fr",
                "poste" => "meh",
                "photo" => "ikk" 
            ]
            
        ];
        AbstractController::render('team/index', ['list' => $list]);
    }

    public function firtlastName():string{
        
        AbstractController::render('team/index2', ['list' => $list]);
    }
}
?>