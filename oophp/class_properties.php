<?php 

//creating properties of our class

class Car {
	//keyword var is used to create properties

	var $wheels = 4;
	var $doors = 4
	var $hood =1;
	var $engine =1;


	function movewheels(){
		$this->wheels = 8; //inside a class we use the keyword this no need to repeat the classname

	}
	//lets create a new method
	function ndoors(){
		$this->doors = 6;//so that we can use it on a bigger vehicle
	}

}//make sure to capitalize the first name of the classname or else it will not recognized as a class

//you can use a buildin function to check if the class is created successfully or not

$bmw = new Car();
echo $bmw->wheels;

// we can change the values of the properties with method inside the class
$bmw-> movewheels();

//or

$bmw->wheels = 10;//still changes the value of wheels

//lets create a new instance called truck which has more wheels than a bmw

$truc = new Car();

// change the number of wheels and echoing them out at the same time

echo $truc->wheels = 24;