<?php

namespace App\Controller;
use App\Controller\AbstractController;

class TeamController extends AbstractController{

     private  $list = [
            'Jean-Jacque'=> [ 
                "nom" => "Jacque",
                "prenom" => "Jean",
                "email" => "yutsu@hotmail.fr",
                "poste" => "meh",
                //definir le chemin des image ici 
                "photo" => "/images/jean.jpg" 
            ],
            'Elon-Musk'=> [ 
                "nom" => "Musk",
                "prenom" => "Elon",
                "email" => "Lafa@hotmail.fr",
                "poste" => "meh",
                "photo" => "/images/elon.jpeg" 
            ]
            
        ];
    

    public function index(array $uriVars = []){
        
        $this->render('team/index', ['team' => $this->list]);
    }


    public function detail(array $uriVars = []){
       // echo '<pre>', var_dump($uriVars); echo '</pre>'; exit;
        $this->render('team/detail', [
            'person'=>$this->list[$uriVars['fullname']]
        ]);
    }
}
?>