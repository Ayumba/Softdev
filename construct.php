<?php
class Car
{
    private $model;
    public function  __construct($model)
    {
        $this->model = $model;
    }
    public function getCarModel()
    {
        echo $this->model;
    }
}
$car_one = new Car('Nissan');
$car_one->getCarModel();
/**
 * Created by PhpStorm.
 * User: ayumba
 * Date: 10/9/18
 * Time: 11:49 AM
 */