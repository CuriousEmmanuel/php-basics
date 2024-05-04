<?php

class Car {
	//keyword var is used to create properties

	var $wheels = 4;
	var $doors = 4;
	var $hood =1;
	var $engine =1;


	function movewheels(){
		$this->wheels = 8; 
	}
	//lets create a constructor
	function __construct(){
		echo $this->doors = 6;//inside a constructor
	}
	

}
$bmw = new Car();
//if we create another object it will get excecuted immediately
