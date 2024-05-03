<?php 

/**
 * class format
 
class ClassName extends AnotherClass
{
	
	function __construct(argument)
	{
		// code...
	}
}

*/

class Car {


	function movewheels(){
		echo "wheels moving";
	}

}//make sure to capitalize the first name of the classname or else it will not recognized as a class

//you can use a buildin function to check if the class is created successfully or not


/*if (method_exists("Car","movewheels")) {

echo "wheels moving";
}
else {
	echo "it did not";
}

*/
// after creating the class and methods inside it we need a way of using it and that is when we create the instance of aa class or objects
//according to Edwin lets race

//new Car();//this is how we can now start to use it

$bmw = new Car();//this is an object now ($bmw) and we can creAATE ANOTHER ONE

$benz = new Car();

//lets move the wheels and start our race game

$bmw ->movewheels();
$benz ->movewheels();