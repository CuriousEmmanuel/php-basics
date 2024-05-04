<?php

class Car {
	//keyword var is used to create properties

	public $wheels = 4;
	protected $doors = 4;
	private $hood =1;
	var $engine =1;
//public properties and functions are accessible througout the program
	// protected properties can only be accessed inside the class and the extendsa of that class
	// private cannot be used outside that class nor in extends of that class nor cant be inherited

	// methods can also be private protected or public

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
