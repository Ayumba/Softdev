<?php
class Sports
{
	function sportsCategories()
	{
	echo 'Football, Basketball, Cricket, Tennis';
	}
	public function regionalParticipants()
	{
		echo 'Asia, Africa, Europe';
	}
}
$worldsports = new sports();
$worldsports->sportsCategories();
$worldsports->regionalParticipants();

?>