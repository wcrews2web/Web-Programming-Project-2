<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<!--Web Programming Fall 2020-->
<!--Author: Wyland Crews (Modified from source given for CW06)-->
<!--Date: 10/22/2020-->
<!--Validated: Yes-->

<?php
	$answer = $_POST['answer'];
	$total = 1; //Previous question is worth $1. Next is worth $10, $100, so on. This amount will be needed for the leaderboard.
	$check = strcmp($answer,"A"); //Hard code answer from previous question here
	if($check != 0) { //$check will equal 0 if the answer is correct
		header("Location: https://codd.cs.gsu.edu/~wcrews2/project2/loser.php"); //Go to loser.php if the answer is wrong. Game over. Else, Continue.
		exit;
	}
?>

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<title>Question 2</title>
	<!--Question 1 likely won't have the answer checking script above-->
	<link href="question.css" type="text/css" rel="stylesheet" />
</head>

<body>
	<h1>WHO WANTS TO BE A MILLIONAIRE?</h1>
	<img src="logo.png"><br/>
	<table>
		<tr style="height:100px">
			<td colspan=2 >Correct!<br/>For $10.00: <br/>What team won the 2020 World Series?</td>
		</tr>
		<tr>
			<td>A. San Francisco Giants</td>
			<td>B. Los Angeles Angels of Anaheim</td>
		</tr>
		<tr>
			<td>C. Los Angeles Dodgers</td> <!--Correct-->
			<td>D. Tampa Bay Rays</td>
		</tr>
	</table>
	<form action="q3.php" method="post">
		<p>Choose your answer:
			<select name="answer">
				<option value="A">A</option>
				<option value="B">B</option>
				<option value="C">C</option>
				<option value="D">D</option>
			</select>
		</p>
		
		<div>
			<input type="submit" value="Final Answer.">
		</div>
	</form>
</body>


</html>