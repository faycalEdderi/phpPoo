<?php
    //inclusion des fichiers
    require_once __DIR__ . '/../_includes/header.php';
    require_once __DIR__ . '/../_includes/nav.php';
    ///var_dump($results); exit;
?>

<div class ="container">
    <div class ="row">
        <div class ="col">
            <h1 class='text-center'>Accueil</h1>
            <div class="row">
            <?php
             $html = '';
             
             foreach($results as $game){
                 $date = (new DateTime($game->getDate()))->format('d/m/Y');
                 $price= number_format($game->getPrice(), 2, ',', ' ');
                 $html .="
                 
                 <div class='col-sm-4'>
                 
                 <img src='/images/{$game->getPoster()}'  class='img-fluid'>
                 <h3 class='text-center '>{$game->getName()}</h3>
                 
                 <h3 class='text-center '>Editeur : {$game->getEditor()}</h3>
                 <p class='text-center lead'>{$price} €</p>
                 <p class='text-center'><time>Date de sortie : {$date}  </time></p>
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

