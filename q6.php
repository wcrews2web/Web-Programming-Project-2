<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<!--Web Programming Fall 2020-->
<!--Author: Wyland Crews (Modified from source given for CW06)-->
<!--Date: 10/22/2020-->
<!--Validated: Yes-->

<?php
	include 'check.php';
	$score = 10000;
?>

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<title>Question 6</title>
	<link href="question.css" type="text/css" rel="stylesheet" />
</head>

<body>
	<h1>WHO WANTS TO BE A MILLIONAIRE?</h1>
	<img src="logo.png"><br/>
	<table>
		<tr style="height:100px">
			<td colspan=2 >Correct!<br/>For $50,000.00: <br/>What day is Bastille Day?</td>
		</tr>
		<tr>
			<td>A. July 14th</td> <!--Correct-->
			<td>B. July 26th</td> 
		</tr>
		<tr>
			<td>C. July 3rd</td> 
			<td>D. July 16th</td> 
		</tr>
	</table>
	<form action="q7.php" method="post">
		<p>Choose your answer:
			<select name="answer">
				<option value="true">A</option>
				<option value="false">B</option>
				<option value="false">C</option>
				<option value="false">D</option>
			</select>
		</p>
		
		<div>
			<input type="submit" value="Final Answer.">
		</div>
	</form>
</body>


</html>