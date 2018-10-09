<?php

class Clothes
{
    protected $size;
    protected $color;
    protected $designer;

    public function setColor($color)
    {
        $this->color = $color;
    }

    public function setSize($size)
    {
        $this->size = $size;
    }

    public function setDesigner($designer)
    {
        $this->designer = $designer;
    }

    public function getClotheDescription()
    {
        echo ' color ' . $this->color . ' size ' . $this->size . ' designer ' . $this->designer;
    }

}
class Trouser extends Clothes
{
// we are borrowing traits from the parent
}

$trouser_one = new Trouser();
$trouser_one->setColor('Yellow');
$trouser_one->setSize(32);
$trouser_one->setDesigner('CK');
$trouser_one->getClotheDescription();
/**
 * Created by PhpStorm.
 * User: ayumba
 * Date: 10/9/18
 * Time: 11:58 AM
 */