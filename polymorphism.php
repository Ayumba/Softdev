<?php

interface Shape
{
    public function calculateTheArea();
}

class Circle implements Shape
{
    private $radius;
    public function  __construct($radius)
    {
        $this->radius = $radius;
    }

    public function calculateTheArea()
    {
        echo $this->radius*$this->radius*pi();
    }

}
$My_Circle = new Circle(20);
$My_Circle->calculateTheArea();
/**
 * Created by PhpStorm.
 * User: ayumba
 * Date: 10/11/18
 * Time: 12:08 PM
 */