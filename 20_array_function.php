<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
// array functions are oredefined by php and you can find them on the manual

//php.net/manual/en/ref.array.php


$list = [345,2343,45,5667,7,45,2,5,6,23,65,];

echo max($list);//prints the maximum value in the array
echo "<br";

echo min($list);//prints the minimum value in the array
echo "<br";

sort($list);
print_r($list);// prints index and its value in accsending order because of sort()
?>






</body>
</html>