<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
//functions helps us organize your code into pieces of blocks of code and we can use that code over and over just by naming it and refering into it by the name

//functions are more powerful than arrays, variables

//you must be very descriptive when writing your funvtion for easy rememberence during calling
function say_something () {//end of parenthesis we put curly brackets just like if statements

echo "hello this sentence does not needed to be copied to many
 DIFFERENTY PAGES YOUcan just call the function";

}
//call the function outside the bloc{}

say_something ();

function init() {
    echo "<br>";
calculate();// everytime we call init it will call calculate() function and then call say() function
echo "<br>"; //break to next line
say();// we  have just called function with multiple functions
}

function calculate() {

    echo 23 + 20;
}
 function say() {

    echo "i love php";
 }


// i told you functions are powerful we can call functions inside othe functions
 /*init();


function say(){
    echo "hello";
    calculate();
}

//if we call the function say() it will print out its function and rhen call out another function which is calculate()
*/
?>




</body>
</html>