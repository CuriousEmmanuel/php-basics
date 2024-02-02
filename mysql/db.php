<?php
// we will be using this file for connection instead of repeating the same code to connect in all pages

 $connection = mysqli_connect('localhost','root','','login');
    if (!$connection) {
//lets remove this line because its annoying at the top of the page and only display a message if there is a problem with connection to the database
        //echo "we are connected";
       
   // }else {
        die("unable to connect");
    } 