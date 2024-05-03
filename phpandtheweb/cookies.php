<?php
$name = "somename";
$value = 100;
$expiration = time() + (60*60*24*7); //time()function has all seconds upto date now we add one week by multiplying the seconds minutes hours and days.
setcookie($name,$value,$expiration);


?>





<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>doc</title>
</head>
<body>

</body>
</html>