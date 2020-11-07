<?php
	session_save_path("session");
	session_start();

	$username = $_POST["username"];
	$password = $_POST["password"];

	$user_infile = "";
	$password_infile = "";

	$user_data = fopen("user_data.txt", "r");

	while(! feof($user_data)){
		$userArray = fgetcsv($user_data);

		if ($userArray[0] == $username){
			$user_infile = $userArray[0];
			$password_infile = $userArray[1];
			break;
		}
		
	}

	if ($password == $password_infile){
		$_SESSION["loggedin"] = true;
		$_SESSION["username"] = $username;
		$_SESSION["password"] = $password;
		header('Location: home.php');
		exit();
	}
	else{
		$_SESSION["error"] = "Username/Password is incorrect";
		header('Location: error.php');	
		exit();
	}
	
?>