<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<!--Web Programming Fall 2020-->
<!--Author: Wyland Crews (Modified from source given for CW06)-->
<!--Date: 10/22/2020-->
<!--Validated: Yes-->

<?php
	include 'check.php';
	$score = 50000;
?>

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<title>Question 7</title>
	<link href="question.css" type="text/css" rel="stylesheet" />
</head>

<body>
	<h1>WHO WANTS TO BE A MILLIONAIRE?</h1>
	<img src="logo.png"><br/>
	<table>
		<tr style="height:100px">
			<td colspan=2 >Correct!<br/>For $100,000.00: <br/>Which two U.S. states don’t observe Daylight Saving Time?</td>
		</tr>
		<tr>
			<td>A. Georgia and Florida</td> 
			<td>B. Wyoming and Ohio</td> 
		</tr>
		<tr>
			<td>C. Montana and Vermont</td> 
			<td>D. Arizona and Hawaii</td> <!--Correct-->
		</tr>
	</table>
	<form action="q8.php" method="post">
		<p>Choose your answer:
			<select name="answer">
				<option value="false">A</option>
				<option value="false">B</option>
				<option value="false">C</option>
				<option value="true">D</option>
			</select>
		</p>
		
		<div>
			<input type="submit" value="Final Answer.">
		</div>
	</form>
</body>


</html>