

<?php

    $connection = mysqli_connect('localhost','root','','login');
    if ($connection) {

        echo "we are connected";
       
    }else {
        die("unable to connect");
    }
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
   

<?php
//now we need to display data from the database with an array 

// mysqli_fetch_row will fetch data but not preset in in a good form so its beter to use assoc an associate array where we can read the column and the values in it
while ($row = mysqli_fetch_assoc($result)) {
   

?>



<pre>


    <?php
    // lets wrap this information on html wit a pre tag so that the data can be presentable


   print_r($row);
?>
   </pre>
<?php

}

?>








</body>
</html>