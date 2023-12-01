<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php

//it test one single condition against multiple values

$number = 100;// for example testing this $umber against other numbers without rewriting the if statement

switch ($number) {

    case 30:
    echo "it is 30";
    break;
    case 10:
    echo "it is 10";
    break;
    case 20:
    echo "it is 20";
    break;
    case 40:
    echo "it is 40";
    break;

    default :
    echo "we couldint find anything";
    break;


}


// a good example is when testing a users action against many different probability of actions to help the database determine where hes gonna land









$age = 18;

switch($age){
    
    case 5:
    echo "under";
    break;

    case 10:
    echo "almost";
    break;

    case 18:
    echo "of age";
    break;

    default :
    echo "PASSED";
    break;

}













?>



</body>
</html>