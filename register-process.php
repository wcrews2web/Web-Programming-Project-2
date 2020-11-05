<?php 

	$username = $_POST["username"];
	$password1 = $_POST["password1"];
	$password2 = $_POST["password2"];
	$score = 0;

	if ($password1 != $password2 ){
		header('Location: error.php');
		exit();
	}

	$user_data = fopen("user_data.txt", "a");
	$data = $username . "," . $password1 . "," . $score;
	fwrite($user_data, $data.PHP_EOL);

	header('Location: login.php');
	exit();

?>