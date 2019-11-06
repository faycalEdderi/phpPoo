<?php

namespace App\Controller;
use App\Controller\AbstractController;

class HomepageController{

    public function index(array $uriVars):void {
        var_dump($uriVars);
        //echo 'Homepage controller index';
        //appel de la vue située dans le dossier templates
        $this->render('homepage/index'
            //,['idFromUri' => $uriVars['id']]
        );
    }

    //2ème param , array $data = null;
    private function render(string $template):void{

        //extract : convertir une clé en variable
        //extract($data);
        // __DIR__ ->directory / dossier actuel
        require_once __DIR__ . "/../../templates/$template.php";
    }
}
?>