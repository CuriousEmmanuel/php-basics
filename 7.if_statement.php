<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // is statement controles the flow of our programs 
    //if the user is loged in you want to show him a certain page if not you show em another 
    if(3 > 10){
        echo "three is less than 10";
        //if(condition to be tested ) {instructions to be exeuted if the condition is true}


    } elseif(4 > 5){ //this is another condition to be tested after the false in the first and if it is also false the program will jump to the default one "else"
        echo "wrong";

    }else{ //the else statement is a backup just incase the condition is false it tells php to execute another instruction

        echo "its not";
    }
    
    
    
    ?>






</body>
</html>