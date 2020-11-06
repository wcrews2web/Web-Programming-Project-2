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
	<title>Who Wants to be a Millionaire?</title>
	<link href="question.css" type="text/css" rel="stylesheet" />
</head>
<body>

	<h1>WHO WANTS TO BE A MILLIONAIRE?</h1>
	<img src="logo.png"><br/>
<div>
	<h1>WELCOME, <?php print $_SESSION["username"] ?></h1>
	
	<p>RULES: Answer incorrectly, and the game is over.<br/>
	Answer correctly, and move on to the next question.<br/>
	10 correct answers makes you a millionaire!</p>


    <div>
        <button onclick="document.location='q1.php'">Questions</button>
		<button onclick="document.location='leaderboard.php'"> See Leaderboard</button>
		<button onclick="document.location='logout.php'">Log Out</button>
    </div>
</div>
</body>