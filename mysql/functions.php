
<?php
include "db.php";

function FetchAllData(){
       global $connection;
$query = "SELECT * FROM users";


// make $connection a global variable
       $result = mysqli_query($connection,$query); 

       if (!$result) {

        die("query failed");
           
       }


while ($row = mysqli_fetch_assoc($result)) {
    $id = $row['id'];
    
  echo "<option value='$id'>$id</option>";//pull ids dynamically
}
}