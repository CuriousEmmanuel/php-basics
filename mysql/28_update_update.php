<?php include "27_db.php"; ?>
<?php include "23_functions.php"; ?>

<?php
if (isset($_POST['submit'])) {
   
   $username = $_POST['username'];
   $password = $_POST['password'];
   $id = $_POST['id'];

   // $query = "UPDATE users SET username = '$username' , password = '$password' WHERE id = $id";
   $query = "UPDATE users SET ";
   $query .= "username ='$username', ";
   $query .= "password = '$password' ";
   $query .= "WHERE id = $id";

   $result = mysqli_query($connection,$query);

   if (!$result) {

    die("query failed". mysqli_error($connection));
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
<form action="28_update_update.php" method="post">
    <input type="text" name="username" placeholder="Enter Username"><br>
    <input type="password" name="password" placeholder="Enter password"> <br>

    <select name="id" id="">

<?php

   FetchAllData();
 ?>   
    </select>
    <input type="submit" name="submit" value="UPDATE">
    </form>
</body>
</html>