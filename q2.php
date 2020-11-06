<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<!--Web Programming Fall 2020-->
<!--Author: Wyland Crews (Modified from source given for CW06)-->
<!--Date: 10/22/2020-->
<!--Validated: Yes-->

<?php
	include 'check.php';
	$score = 1;
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
				<option value="false">A</option>
				<option value="false">B</option>
				<option value="true">C</option>
				<option value="false">D</option>
			</select>
		</p>
		
		<div>
			<input type="submit" value="Final Answer." class = "submit">
		</div>
	</form>
</body>


</html>