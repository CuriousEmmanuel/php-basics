<?php 

print_r($_GET)
//print_r function is uset to print things from an array 
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>using get super glabal variable</title>
</head>
<body>


	<?php
	//instead of putting the value inthe id unside the href tag we can put it here dynamically with variables
	$val = 100;
	$btn = "clickhere";
//even the href can be put dyamically
	//with this id we can do allot of things with it like redirecting the user to another page or other bunch of stuff

	?>
	<a href="get.php?id=<?php echo $val ?>;"><?php echo $btn ?></a>

</body>
</html>