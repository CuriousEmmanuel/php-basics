<?php 

//check if something is posted
if (isset($_POST['submit'])) {
	echo "something posted";

	$username = $_POST['username'];
	$password = $_POST['password'];

	//echo $username;
	//echo $password;

	$max = 10;
	$min = 2;

	$pass = 5;

	if ($username < $min ) {


	echo "username incorrect format";
		// code...
	}


}





?>







<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>form</title>
</head>
<body>
	<form action="form.php" method="post">
		<label for="username" >username</label><br>
		<input type="text" name="username"><br>
		<label for="password" >password</label><br>
		<input type="password" name="password"><br>
		<label for="submit" >submit</label><br>
		<input type="submit" name="submit">
		
	</form>

</body>
</html>