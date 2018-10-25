<?php

abstract class Shapes
{
    abstract public function getPerimeter();
}

class circle extends Shapes
{
    public function getPerimeter()

    {
        $radius = 20;
        echo pi() * 2 * $radius;
    }

    public function Greeting()
    {
        echo(' HelloWorld ');
    }
}


$circle_one = new circle();
$circle_one->getPerimeter();
$circle_one->Greeting();


/**
 * Created by PhpStorm.
 * User: ayumba
 * Date: 10/11/18
 * Time: 10:47 AM
 */