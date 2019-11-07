<?php

namespace App\SQL;

use App\Core\Database;
/**
 * 
 * script lancé en ligne de commande : pas d'auto-chargement automatique
 */

require_once __DIR__ . '/../../vendor/autoload.php';



class MainSQL
{
    private $sql = "
    START TRANSACTION;
    DROP DATABASE IF EXISTS videogames;
    CREATE DATABASE videogames;
    CREATE TABLE videogames.game(
        id TINYINT UNSIGNED PRIMARY KEY AUTO_INCREMENT, 
        name VARCHAR(50), 
        price DECIMAL(5,2),
        date DATE,
        poster VARCHAR(50)
    );
    INSERT INTO videogames.game VALUES
    (NULL, 'The Witcher3', '25.90', '2019-01-10', 'jeu1.jpg'),
    (NULL, 'Death Stranding', '50.90', '2019-02-10', 'jeu2.jpg'),
    (NULL, 'Uncharted 4', '29.90', '2019-03-10', 'jeu3.jpg')
    ;
    COMMIT;
    
    ";
    public function execute():void
    {
        $database = new Database();
        $connection = $database ->connect();
       // var_dump($connection);

       /* 
       *prepare : par securité la requete est evalué avangt son execution 
       *execute : la requete est executée
       
       */

       $query = $connection->prepare($this->sql);
       $query->execute();
    }
}

//instanciation direcetment dans le fichier (cas particulier)
//cmd : php .\src\SQL\MainSQL.php (=makemigrations)

$mainSQL = new MainSQL();
$mainSQL->execute();