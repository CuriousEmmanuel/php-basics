<?php

$file = "example.txt";

if($handle = fopen($file, 'r')){
   echo $contents = fread($handle, 10);//each bite represent a character in this case our file content contails only 10 characters

	//if you want to read the whole file php has it have function for you 

	echo $contents = fread($handle, filesize($file));


fclose($handle);	
}
else{

	echo "failed to ead file";
}

// if you have problems reading from the file make sure you give proper permisions to the file we might give permision to the folder and forget the file or does not automatically apply to the file

?>