<?php

namespace App\Controller;

use App\Controller\AbstractController;

class NotFoundController extends AbstractController{

    public function index(array $uriVars):void {
        var_dump($uriVars);
        //echo 'Homepage controller index';
        //appel de la vue située dans le dossier templates
        $this->render('not-found/index'
            //,['idFromUri' => $uriVars['id']]
        );
    }

    /*
    //2ème param , array $data = null;
    private function render(string $template, array $data = []):void{

        //extract : convertir une clé en variable
        extract($data);
        // __DIR__ ->directory / dossier actuel
        require_once __DIR__ . "/../../templates/$template.php";
    }*/
}
?>