<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php 

//works only with arrays
//it assaign indexs to valus in an array
// we dont need to tell it when to stop it will when the array stop

$numbers = array(43,4,432,543,543,543,54,543,654,76,87,8765,65,54,43);

foreach( $numbers as $number ) {

    echo $number . "<br>";// it assigned each values in the array the variable $number
    // it choed the value where the loop was it was in the first value in the array it echoed that value then the second value up to the end
}







?>



</body>
</html>