<?php

class Car {
	//keyword var is used to create properties

	var $wheels = 4;
	var $doors = 4
	var $hood =1;
	var $engine =1;


	function movewheels(){
		$this->wheels = 8; 
	}
	//lets create a new method
	function ndoors(){
		$this->doors = 6;//so that we can use it on a bigger vehicle
	}

}


class Plane extends Car {

//this class is emoty but we still can use properties from another class

	}
	$jet = new Plane();//instantiate first

	$jet -> wheels;
	//you cn echo jet wheels which is inherited from car class

	//we can try out methods
	 $jet -> movewheels();
