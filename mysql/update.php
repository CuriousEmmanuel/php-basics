

<?php include "db.php";

          //select all from users (its just a simple query)
    $query = "SELECT * FROM users";

       $result = mysqli_query($connection,$query); // without the variables $connection and $query we will need to write the whole insert query and connection query inside this function

        //its done but we need to check on the query to see what is happens and in case it failes we need to know
        // i will assigne a variable to that quer called result

       if (!$result) {

        die("query failed");
           
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
<form action="update.php" method="post">
    <input type="text" name="username" placeholder="Enter Username"><br>
    <input type="password" name="password" placeholder="Enter password"> <br>

    <select name="id" id="">
        <option value="">1</option>
    </select>
    <input type="submit" name="submit" value="UPDATE">
    </form>



</body>
</html>