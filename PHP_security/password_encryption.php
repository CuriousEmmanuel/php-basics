<?php
//Check php password encryption documentation to see defferent formats and types of hash, sal and how to use them
function updateTable(){
global $connection;
   $username = $_POST['username'];
   $password = $_POST['password'];
   $id = $_POST['id'];

   //use the following php function
  $username = mysqli_real_escape_string($connection,$username);
  $password = mysqli_real_escape_string($connection,$password);

   //before data is inserted trrough our forms we need to clean it so that it cannot manupulate our database and delete tables or much worse

  // we use khash format and salt to make pasword random characters and a crypt() function 
//increase the size of your password field to enable it to hold the 22 orr more characters
  $HashFormat = "$2y$10$";
  $salt = "somerandom22characters";
  $hashAndSalt = $HashFormat . $salt;

  $password = crypt($hashAndSalt,$password);

   // "INSERT INTO users (username,password) VALUES ($username,$password)";

   // $query = "UPDATE users SET username = '$username' , password = '$password' WHERE id = $id";
   $query = "UPDATE users SET ";
   $query .= "username ='$username', ";
   $query .= "password = '$password' ";
   $query .= "WHERE id = $id";   

   $result = mysqli_query($connection,$query);

   if (!$result) {

    die("query failed". mysqli_error($connection));
   }