<?php
    //inclusion des fichiers
    require_once __DIR__ . '/../_includes/header.php';
    require_once __DIR__ . '/../_includes/nav.php';
    require_once __DIR__ . '/../_includes/footer.php';
?>   

<div class ="container">
    <div class ="row">
        <div class ="col">
            <h1>TEAM</h1>
            <?php 
            var_dump($list);
            foreach($list as $key => $value){
                echo "<br>";
                foreach ($value as $key1 => $personne){
                    echo "$key1 => $personne  <br>"  ;
                }
                echo "<br>";
            }
            ?>
        </div>
    </div>
</div>

<?php
require_once __DIR__ . '/../_includes/footer.php';
?>   