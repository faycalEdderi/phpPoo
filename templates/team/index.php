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
            foreach($list as $key => $value){?>
            <br>
            <a href="/team/"<?php $list[$key]["nom"] . "/" . $list[$key]['prenom']?>>En savoir plus</a>
             <?php
                echo "<br>";
                echo "Nom : " . $list[$key]['nom'] . "<br>";
                echo "Prénom : " . $list[$key]['prenom'] . "<br>";
                echo "Photo : "?> <img src='/../images/pp.png'><?php
                echo "<br><br>";
            }
            ?>
        </div>
    </div>
</div>

<?php
require_once __DIR__ . '/../_includes/footer.php';
?>   