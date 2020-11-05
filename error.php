
<?php 
	session_start();
	$error = $_SESSION["error"];
?>

<!DOCTYPE html>
<html>
<head>
	<title>Who Wants to be a Millionaire?</title>
	<link href="question.css" type="text/css" rel="stylesheet" />
</head>
<body>
	<h1>ERROR</h1>
	<div>
	<h3><?php print $error ?></h3>
	</div>
</body>
</html>