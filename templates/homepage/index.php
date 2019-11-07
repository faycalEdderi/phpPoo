<?php
    //inclusion des fichiers
    require_once __DIR__ . '/../_includes/header.php';
    require_once __DIR__ . '/../_includes/nav.php';
    ///var_dump($results); exit;
?>

<div class ="container">
    <div class ="row">
        <div class ="col">
            <h1 class='text-center'>Acceuil</h1>
            <div class="row">
            <?php
             $html = '';
             foreach($results as $game){
                 $html .="
                 
                 <div class='col-sm-4'>
                 
                 <img src='/images/{$game->getPoster()}'  class='img-fluid'>
                 <h3 class='text-center '>{$game->getName()}</h3>
                 <p class='text-center lead'>{$game->getPrice()} €</p>
                 <p class='text-center'><button class='btn btn-info'>Acheter</button> </p>
                 </div>
                 ";
                
                 
             } 

             echo $html;
  
            ?>

            
            </div>
             
            
            
            
            
        </div>
    </div>
</div>

