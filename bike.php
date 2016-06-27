<?php


class Bike
{
	public $price;
	public $max_speed;
	public $miles;
	

	public function __construct ($user_price, $user_max_speed, $user_miles) 

	{
		$this->price = $user_price;
		$this->max_speed = $user_max_speed;
		$this->miles = 0; 
	}


	public function display_info ()
	{
		echo $this->price;
		echo "<br>";
		echo $this->max_speed;
		echo "<br>";
		echo $this->miles;
		echo "<br>";
	}

	public function drive($number)
	{
		$this->miles += $number;
		echo "Driving";
		echo "<br>";
	}

	public function reverse($number)
	{
		$this->miles -= $number;
		echo "Reversing";
		echo "<br>";
	}

	public function price(){

	}

}

$bike1 = new Bike(89,100,20);
 
$bike1->drive(10);
$bike1->reverse(5);
$bike1->display_info();



$bike2 = new Bike(800,200,0);
 
$bike2->drive(10);
$bike2->reverse(5);
$bike2->display_info();



$bike3 = new Bike(10,10,80);
 
$bike3->drive(10);
$bike3->reverse(5);
$bike3->display_info();


////////Pariece is the best!



?>