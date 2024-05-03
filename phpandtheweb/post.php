<?php
// a quick way of retrieving data using a post super global variable

if (isset($_POST['name'])) {

$name = $_POST['name'];
	echo $name;
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>doc</title>
</head>
<body>
<form method="post" action="post.php">
	<input type="text" name="name">
	<input type="submit" value="submit">
</form>
</body>
</html>