<?php
	session_start();

	//this php script should be included in any page where where must be logged in to access
	//check whether user is logged in or not
	if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){

	}
	// if not logged in, refirect to login page.
	else{
		header('Location: login.php');
		exit();
	}

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