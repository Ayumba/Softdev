<?php
class Car
{
    public function hello()
    {
        echo 'Hey there! HelloWorld';
    }
}
class sportsCar extends Car

{
    public function hello()
{
    echo 'Hey! Feel free to select a car & do a test drive';
}
}
$car_one = new sportsCar();
$car_one->hello();
/**
 * Created by PhpStorm.
 * User: ayumba
 * Date: 10/9/18
 * Time: 12:48 PM
 */