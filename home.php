<?php
	session_start();

	// if(!isset($_SESSION["username"]["password"])){


	// }

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<h1>WELCOME, <?php print $_SESSION["username"] ?></h1>


	<a href="logout.php">Logout</a>

</body>
</html>