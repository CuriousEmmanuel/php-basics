<?php
// this form sends data to an external form 
// form action is the destination form so remember to create a new file named form_process.php open it and when entering data to this form it will be displayed to another form




// 1. getting data from form
if(isset($_POST["submit"])){//receives data after submit button is clicked
    
    
    
    $name = array("Teacher","student","peter","john","tom","jane");
    $minimum = 5;
    $maximum = 10;
    $username = $_POST["username"];
    $password = $_POST["password"];

    // 2. extract data from the form
   // echo "hello" . $username;
    //echo "your password is " .$password;

// 3. validating data

    if(strlen($username) < $minimum) {
        echo "username has to be longer than 5";
    }
    if(strlen($username) > $maximum) {
        echo "username has to be less than 10";
    }
//function to check if the user is in the array
        if(! in_array($username,$name)){

            echo "sorry user not found";


        }else{
            echo "Welcome";
        }




}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="form_process.php" method="post">
        <!---this actiopn sends the data to a page called form.php----->
    <input type="text" name="username" placeholder="Enter Username"><br>
    <input type="password" name="password" placeholder="Enter password"> <br>
    <input type="submit" name="submit">
    <!--name doesnt matter but you have to be descriptive-->
    </form>
</body>
</html>