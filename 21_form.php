<?php
// 1. getting data from form
if(isset($_POST["submit"])){// post is a super global variable that receives data from forms after submit button is clicked
    
    //isset is a function to check if something is posted 

    // without the keyword "name" you cant send anything to _post variable we put it in submit button and other buttons in html and its value is what we check with the isset($_post[name value here]
    
    $name = array("Teacher","student","peter","john","tom","jane");
    $minimum = 5;
    $maximum = 10;
    $text = $_POST["text"];
    $password = $_POST["password"];

    // 2. extract data from the form
   // echo "hello" . $text;
    //echo "your password is " .$password;

// 3. validating data

    if(strlen($text) < $minimum) {
        echo "username has to be longer than 5";
    }
    if(strlen($text) > $maximum) {
        echo "username has to be less than 10";
    }
//function to check if the user is in the array
        if(! in_array($text,$name)){

            echo "sorry user not found";


        }else{
            echo "Welcome";
        }




}

// the users names and password becomes an associative array then stored to a super global variable _post
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="form.php" method="post">
        <!---this actiopn sends the data to a page called form.php----->
    <input type="text" name="text" placeholder="Enter Username"><br>
    <input type="password" name="password" placeholder="Enter password"> <br>
    <input type="submit" name="submit">
    <!--name doesnt matter but you have to be descriptive-->
    </form>
</body>
</html>