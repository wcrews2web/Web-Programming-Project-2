<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<!--Web Programming Fall 2020-->
<!--Author: Wyland Crews (Modified from source given for CW06)-->
<!--Date: 10/22/2020-->
<!--Validated: Yes-->

<?php
	include 'check.php';
	$score = 10;
?>

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<title>Question 3</title>
	<link href="question.css" type="text/css" rel="stylesheet" />
</head>

<body>
	<h1>WHO WANTS TO BE A MILLIONAIRE?</h1>
	<img src="logo.png"><br/>
	<table>
		<tr style="height:100px">
			<td colspan=2 >Correct!<br/>For $100.00: <br/>According to the old saying, "love of" WHAT "is the root of all evil"?</td>
		</tr>
		<tr>
			<td>A. Ukraine</td>
			<td>B. Money</td> <!--Correct-->
		</tr>
		<tr>
			<td>C. Peace</td> 
			<td>D. Reality TV</td>
		</tr>
	</table>
	<form action="q4.php" method="post">
		<p>Choose your answer:
			<select name="answer">
				<option value="false">A</option>
				<option value="true">B</option>
				<option value="false">C</option>
				<option value="false">D</option>
			</select>
		</p>
		
		<div>
			<input type="submit" value="Final Answer." class = "submit">
		</div>
	</form>
</body>


</html>