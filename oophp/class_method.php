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
if (method_exists("Car","movewheels")) {

echo "wheels moving";
}
else {
	echo "it did not";
}