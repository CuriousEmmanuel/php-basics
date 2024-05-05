<?php
//easiest way to connect to the database
$connection = mysqli_connect('localhost','root','','cms');


if(!$connection){

	echo "error connecting";
}else{
	echo "we are conected";
}




?>
