

<?php

if (isset($_POST['submit'])) {

    echo "welcome";

    $username = $_POST['username'];
    $password = $_POST['password'];


    $connection = mysqli_connect('localhost','root','','login');
    if ($connection) {

        echo "we are connected";
       
    }else {
        die("unable to connect");
    }
          //first username and password we dont need quatation marks because they are collumns in our table but in the second brackets we put both username and password in quatation because they are variables and they hold data fromm our forms
    $query = "INSERT INTO users (username,password) VALUES ( '$username','$password')";

       $result = mysqli_query($connection,$query); // without the variables $connection and $query we will need to write the whole insert query and connection query inside this function

        //its done but we need to check on the query to see what is happens and in case it failes we need to know
        // i will assigne a variable to that quer called result

       if (!$result) {

        die("query failed");
           
       }

}




/* this below code worked correctly but we have to try aother way anyway

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


*/

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