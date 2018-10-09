<?php
class Egg
{
	public $size = 8;
	public $color = 'black';
	public $bird;
	
	public function getEggDetails()
	{
		echo 'The egg is of size '. $this->size.    '  it is '. $this->color. '  in color and was layed by  '. $this->bird;  
	} 
}

    $Egg = new Egg;
    $Egg->size;
    $Egg->color;
    $Egg->bird = 'ChickenBird';
    $Egg->getEggDetails();
