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
			<td colspan=2 >Correct!<br/>For $100.00: <br/>How many U.S. Presidents have served? (Not including 2020 election results)</td>
		</tr>
		<tr>
			<td>A. 44</td>
			<td>B. 41</td>
		</tr>
		<tr>
			<td>C. 50</td> 
			<td>D. 45</td> <!--Correct-->
		</tr>
	</table>
	<form action="q4.php" method="post">
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