<?php 

	$username = $_POST["username"];
	$password1 = $_POST["password1"];
	$password2 = $_POST["password2"];

	if ($password1 != $password2 ){
		print "password fields does not match!";
	}

	$user_data = fopen("user_data.txt", "a");
	$data = $username . ", " . $password1;
	fwrite($user_data, $data.PHP_EOL);

	header('Location: login.php');
	exit();

?>