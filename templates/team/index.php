<?php
    //inclusion des fichiers
    require_once __DIR__ . '/../_includes/header.php';
    require_once __DIR__ . '/../_includes/nav.php';
    require_once __DIR__ . '/../_includes/footer.php';    
?>   

<div class ="container" >
    <div class ="row">
        <div class ="col">
            <h1>TEAM</h1>
            <br>
            <?php
            $html = '';
            foreach($team as $fullname => $person){
                // le "." permet de faire grossir le html
                $html .= "
                <div class='col-sm-6'>
                <img src='{$person["photo"]}' class='img-fluid'>
                <p class='mt-5'>
                    <a href='/team/$fullname' class='btn btn-primary'>
                    
                    {$person["nom"]} {$person["prenom"]}
                    
                    </a>
                </p>
                </div>
                ";
            }
            //affichage du html 
            echo $html;
            ?>
            <?php /*
            foreach($list as $key => $value){?>
            <br>
            <a href="/team/"<?php $list[$key]["nom"] . "/" . $list[$key]['prenom']?>>En savoir plus</a>
             <?php
             //chaque chemin d'image est stocké dans une variable photo
             $photo = $list[$key]['photo'];
                echo "<br>";
                echo "Nom : " . $list[$key]['nom'] . "<br>";
                echo "Prénom : " . $list[$key]['prenom'] . "<br>";
            //attention a bien mettre les image dans le dossier public :)
                echo 'Photo : <img src="'.$photo.'">';
                echo "<br><br>";
            }*/
            ?>
        </div>
    </div>
</div>

<?php
require_once __DIR__ . '/../_includes/footer.php';
?>   