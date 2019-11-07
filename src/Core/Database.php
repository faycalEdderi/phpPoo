<?php 

namespace App\Core;

class Database 
{
    /*
    *classe PDO est dédiée à la conexion, à la gestion des request, à la securisation des requetes
    */
    //informations de connexion

    const   HOST = 'localhost', 
            DB_NAME = 'videogames',
            USER = 'root', 
            PWD = ''
        ;
    // variable qui stock connexion
    private $connection; 
    public function __construct()
    {   // anti-slash permet d'indiquer au systeme de chercher une class native du PHP 
        $this->connection = new \PDO(
            'mysql:host='. self::HOST . ';dbname=' . self::DB_NAME . ';charset=utf8',
            self::USER, 
            self::PWD, 
            [
                \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION
            ]
        );
    }


    public function connect():\PDO
    {
        return $this->connection;
    }
    }