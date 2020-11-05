<?php 
	session_start();
	$error = $_SESSION["error"];
?>

<!DOCTYPE html>
<html>
<head>
	<title>Who Wants to be a Millionaire?</title>
</head>
<body>
	<h1>ERROR</h1>

	<h3><?php print $error ?></h3>

</body>
</html>