

<?php

if (isset($_POST['submit'])) {

        $username = $_POST['username'];// variables to capture username and password
        $password = $_POST['password'];
   

$dbhost ="localhost";
$dbuser="root";
$dbpass ="";
$dbname ="login";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
// connecting with database

{
    die("failed to connect!");
} else{
   // echo "succeed";
}



//inserting data to the database
 $query = "insert into users (username,password) values ('$username','$password')";


//push the query to the database
  mysqli_query($con, $query);


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
    <form action="send_data_to_database.php" method="post">
    <input type="text" name="username" placeholder="Enter Username"><br>
    <input type="password" name="password" placeholder="Enter password"> <br>
    <input type="submit" name="submit">
    <!--name doesnt matter but you have to be descriptive-->
    </form>
</body>
</html>