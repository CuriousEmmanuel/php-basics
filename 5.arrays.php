<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    
    //Arrays are just like a variables with super powers
    $numberlist = array(34,34,34,34,34,33,34,"I love arrays", '<h1>hello</h1>') ;
    //echo $numberlist; this pr4oduces an error
    //arrays are arranged using index stareting from 0

    echo $numberlist[0];

    print_r($numberlist);
    //this function prints the structure of array with its indexes
    
    ?>
</body>
</html>