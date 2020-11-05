<?php
	session_start();

	
	if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){
		header('Location: home.php');
		exit();
	}
	else{
		
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link href="question.css" type="text/css" rel="stylesheet" />
</head>
<body>
	<h1>WHO WANTS TO BE A MILLIONAIRE?</h1>
	<img src="logo.png"><br/>

	<h1>Login here</h1>

	<div>
	<form action="login-process.php" method="post">
		
		<label for="username">username:</label>
		<input type="text" name="username" required="">

		<br><br>

		<label for="password">Password:</label>
		<input type="password" name="password" required="">

		<br><br>

		<button>Submit</button>

		<br><br>

		<a href="register.php">New User? Register here.</a>

	</form>
	</div>


</body>
</html>