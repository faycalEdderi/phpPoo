<?php

namespace App\Controller;
use App\Form\GameForm;
use App\Controller\AbstractController;


class GameController extends AbstractController{

    
   

    public function form(array $uriVars):void {
    //echo '<pre>' . var_dump($this-> echo '</pre>'; exit;
    
    $form = new GameForm();
        $this->render('game/form', [
            'form'=>$form
            ]);
    }


}
?>