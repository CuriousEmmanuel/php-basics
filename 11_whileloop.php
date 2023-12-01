<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>while loop</title>
</head>
<body>
    
<?php
//wlile () is true we repeat while not we stop
//while(4 < 10 ) {
    //echo "hello";
    //this code will execute in an infinite loop 
    /*to avoid this we need a counter variable to always increase or 
    decreaase to keep a certain condition true or false*/

//}
$counter = 0;// this is a counter variable that is used to increment or decrease the value to make sure no infinite loops

while ( $counter < 10 ) {

    echo "Hello student";
    $counter = $counter + 1;
}
//print 1-100
echo "<br>";
$i = 0;

while ( $i<=100) {

    echo $i;
    $i = $i + 1;
}

// the shorthand version of this is
$i = 0;

while ( $i<=100) {

    echo "Hello";
    $i = $i ++;
}

?>




</body>
</html>