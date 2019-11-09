<?php

namespace App\Entity;

/*
entité : classe php reflétant une table
les colonnes sql deviennent des propriétés
*/

class Game
{
//propriété identique aux colonnes sql
    private $id;
    private $name;
    private $price;
    private $date;
    private $poster;
/*
getters / setters : méthodes permettant d'acceder et de modifier la valeur d'une propriété

*/

public function setId(?int $id):void { $this->id = $id; }
public function getId():?int { return $this->id; }

public function setName(string $name):void { $this->name = $name; }
public function getName():string { return $this->name; }

public function setPrice(float $price):void { $this->price = $price; }
public function getPrice():float { return $this->price; }

public function setDate(string $date):void { $this->date = $date; }
public function getDate():string { return $this->date; }

public function setPoster(string $poster):void { $this->poster = $poster; }
public function getPoster():string { return $this->poster; }

public function setEditor(string $editor):void { $this->editor = $editor; }
public function getEditor():string { return $this->editor; }

}