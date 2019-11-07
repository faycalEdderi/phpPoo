<?php

namespace App\Repository;

use App\Core\Database;

class GameRepository
{
    private $database;
    private $connection;

    public function __construct(Database $database){

        $this->database = $database;
        $this->connection = $this->database->connect();
    }
    // récupérer tout le contenu d'un table 
    public function findAll():array
    {
        $sql ="
        SELECT game.* FROM videogames.game;
        
        ";
        $query = $this->connection->prepare($sql);
        $query->execute();
        // fetchAll : recupération de plusieurs résultats
        $results = $query->fetchAll(\PDO::FETCH_CLASS, 'App\Entity\Game');

        // retour des résultats
        return $results;
    }
}