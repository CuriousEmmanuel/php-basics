<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
//scope means the environment in which a certain element is available  there are two scopes
// global
// local

// we have a global variable which will be available .both inside and outside the function
$x = "outside"; //global

function convert(){
    global $x;//to change the scope of this variable we use the keywork global with it now we can change the ,values of aur variables anywhere in the .program
    $x = "inside"; //inside
}
echo $x; // this will print the first x which is "outside"
echo"<br>";
echo $x; //because of global keyword this now will print inside and without it it will just print l"outside"

//now the value of $x is pammanently chganged every time you will echo $x ti will always return "inside"
?>