

<?php include "db.php"; ?>
<?php include "functions.php"; ?>

<?php
//lets take this code to another file called function so that it looks a litle bit cleaner

//all this queries are important because they connect and pull info from database



          //select all from users (its just a simple query) 
//this is the query that is pulling the information from the database (ids)


/*
    $query = "SELECT * FROM users";

       $result = mysqli_query($connection,$query); // without the variables $connection and $query we will need to write the whole insert query and connection query inside this function

        //its done but we need to check on the query to see what is happens and in case it failes we need to know
        // i will assigne a variable to that quer called result

       if (!$result) {

        die("query failed");
           
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
<form action="update.php" method="post">
    <input type="text" name="username" placeholder="Enter Username"><br>
    <input type="password" name="password" placeholder="Enter password"> <br>

    <select name="id" id="">

<?php
//take this also to functions

/*while ($row = mysqli_fetch_assoc($result)) {
    $id = $row['id'];
  echo "<option value='$id'>$id</option>";//pull ids dynamically
  }
*/

// noe we can just do all that fetching staff by calling one function

   FetchAllData();
 ?>   
    </select>
    <input type="submit" name="submit" value="UPDATE">
    </form>
</body>
</html>