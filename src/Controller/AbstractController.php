<?php

namespace App\Controller;

abstract class AbstractController{
    protected function render(string $template, array $data = []):void{

        //extract : convertir une clé en variable
        extract($data);
        // __DIR__ ->directory / dossier actuel
        require_once __DIR__ . "/../../templates/$template.php";
    }
}


?>