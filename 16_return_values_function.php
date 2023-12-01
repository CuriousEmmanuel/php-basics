<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
// returning values out of the function makes it more flexble rather than just echoeng it out that cant do more but wth return we can use the results of that function elsewhee in our program in different pages 
//using values from a function elsewhere outside the function using return keyword

function addnumbers($number1, $number2)  {
    $sum = $number1 + $number2;

    return $sum;// this returns the value of the calculations sum
    
}

$results = addnumbers(30, 20);// adding a variable to the function makes it easy to call it just by summoning the varriable

echo $results; //prints results after every calculation for visibility its not a must 
echo"<br>";
$results = addnumbers(100, $results);
//you can reuse the variable $result Aand pass another values and it will still do the magic
echo $results;
echo"<br>";
$results = addnumbers(100, $results);
echo $results;

//the first return is now worth 50 not 30 and 20 and the second is worth 150 not 100 and 50



//it makes a fuction more flexible and limitless

//with this we can continue without limmits


?>



</body>
</html>