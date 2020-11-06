<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<!--Web Programming Fall 2020-->
<!--Author: Wyland Crews (Modified from source given for CW06)-->
<!--Date: 10/22/2020-->
<!--Validated: Yes-->

<?php
	include 'check.php';
	$score = 250000;
?>

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<title>Question 9</title>
	<link href="question.css" type="text/css" rel="stylesheet" />
</head>

<body>
	<h1>WHO WANTS TO BE A MILLIONAIRE?</h1>
	<img src="logo.png"><br/>
	<table>
		<tr style="height:100px">
			<td colspan=2 >Correct!<br/>For $500,000.00: <br/>Which country consumes the most chocolate per capita?</td>
		</tr>
		<tr>
			<td>A. US</td> 
			<td>B. Switzerland</td> <!--Correct-->
		</tr>
		<tr>
			<td>C. Sweden</td> 
			<td>D. Paris</td> 
		</tr>
	</table>
	<form action="q10.php" method="post">
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