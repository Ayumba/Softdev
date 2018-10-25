<?php
//An interface commits its child class to abstract methods they should implement
//we are using implements because we are using interface

interface Car
{
    public function getModel();

    public function setModel($name);
}

class miniCar implements Car
{
    public  $model;

    public function greetings()
    {
        echo('HelloWorld');
    }


    public  function setModel($name)
    {
        $this->model = $name;
    }

    public function getModel()
    {
        echo $this->model;
    }


}

$Car_one = new miniCar();
$Car_one->greetings();
$Car_one->setModel('Toyota');
$Car_one->getModel();

// TODO: Implement setModel() method.