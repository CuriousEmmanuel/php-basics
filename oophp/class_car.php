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

}//make sure to capitalize the first name of the classname or else it will not recognized as a class

//you can use a buildin function to check if the class is created successfully or not
if (class_exists(Car)) {

echo "it does";
}
else {
	echo "it did not";
}