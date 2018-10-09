<?php

class Furniture
{
    public $name;
    public $color;
    public $cost;
    public $manufacturer;

    public function setname($name)
    {
        $this->name = $name;
        return $this;
    }

    public function setcolor($color)
    {
        $this->color = $color;
        return $this;
    }

    public function setcost($cost)
    {
        $this->cost = $cost;
        return $this;
    }

    public function setmanufacturer($manufacturer)
    {
        $this->manufacturer = $manufacturer;
        return $this;
    }

    public function displayFurnitureDescription()
    {
        echo 'The furniture is  ' . $this->name . ' it is ' . $this->color . ' in color. It costs ' . $this->cost . ' and it was manufactured by ' . $this->manufacturer;
    }
}

$furniture_one = new Furniture();
$furniture_one->setname('stool')->setcolor('white')->setcost('20,000')->setmanufacturer('office_matt')->displayFurnitureDescription();