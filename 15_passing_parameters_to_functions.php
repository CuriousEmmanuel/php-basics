<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php


function greetings($message){
    echo "$message";

}

greetings("good morning"); //this message will be stored inside our variable $message and everytime we call our function the parameter gets processed then displayed


// passing parrameters in function makes if more flexible and we can do more things with it
function calculate($number1, $number2) { //multiple parameters are separated by ,
// we created a function the we passed two empty parrameters 
    $sum = $number1 + $number2;
// the two variables ware assigned to a variable called $sum for easy access
    echo $sum;
}

calculate(24,24); //initializing vallues to our parameters
//puting values on variables inside functions 24 is aotomatically assigned to $number1
//and 24 is assigned to $number2 
?>

</body>
</html>