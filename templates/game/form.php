<?php
    //inclusion des fichiers
    require_once __DIR__ . '/../_includes/header.php';
    require_once __DIR__ . '/../_includes/nav.php';
    ///var_dump($results); exit;

    ///var_dump($_POST);

?>

<div class ="container">
    <div class ="row">
        <div class ="col">
            <h1 class='text-center'>Formulaire</h1>
            <?php
               $html = '<ul>';
               foreach ($form->getMessages() as $message) {
                   $html .= "<li>$message</li>";
               } 
               $html .='</ul>';
               echo $html;
            
            ?>
          <form method='POST'  enctype="multipart/form-data">
          <p class="form-group">
              <label for="name">Nom : </label>

            <input name="name" type="text" value="<?= $form->getValues()['name']['value'] ; ?>" class="form-control">
        
        </p>
        <p class="form-group">
              <label for="price">Prix : </label>

            <input name="price" type="text" value="<?= $form->getValues()['price']['value'] ; ?>" class="form-control">
        
        </p>

        <p class="form-group">
              <label for="date">Date : </label>

            <input name="date" type="date" value="" class="form-control">
        
        </p>

        <p class="form-group">
            <label for="poster">Jaquette : </label>

            <input name="poster" type="file" value="" class="form-control">
        
        </p>
        <p class="form-group">
           

            <input name="submit" type="submit" value="Valider" class="btn btn-info">
        
        </p>
          
        
        
        </form>
            
            
            
            
        </div>
    </div>
</div>

