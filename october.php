<?php

class Egg
{
    public $size = 8;
    public $color = 'black';
    private $nature;
    public $bird;

    public function getEggDetails()
    {
        echo 'The egg is of size ' . $this->size . '  it is ' . $this->color . '  in color and was layed by  ' . $this->bird;
    }

//    getters & setters

    public function setNature($nature)
    {
        $this->nature = $nature;
    }

    public function getNature()
    {
        echo $this->nature;
    }

   }

$Egg = new Egg;
$Egg->size;
$Egg->color;
//$Egg->nature = 'malleable';
$Egg->bird = 'ChickenBird';

//echo $Egg->nature;
//echo $Egg->bird;
$Egg->getEggDetails();'</br>';
$Egg->setNature('Malleable');
$Egg->getNature();