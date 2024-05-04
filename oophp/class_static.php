<?php

class Car {
	//keyword var is used to create properties

	static $wheels = 4;
	var $doors = 4;
	var $hood =1;
	var $engine =1;
	
//static method
	static function move(){

		Car::$wheels=10;
	}
	

}
$bmw = new Car();
 //$bmw -> wheels; we can no longer refer to it like this 
Car::move();// calling a static methiod
echo Car::$wheels;// now we refer to it in a different way as a variable
//we can have methods and functions static and attache them to class

