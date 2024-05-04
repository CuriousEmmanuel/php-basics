<?php

$file = "example.txt";
$handle = fopen($file, 'w');

fclose($handle);

//mostly you will be faced with an error because appache does not have the parmission to write to your file 
// find a way to give appache necesary permisions to read and write to your file
?>