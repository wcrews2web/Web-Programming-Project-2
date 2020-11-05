<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<!--Web Programming Fall 2020-->
<!--Author: Wyland Crews (Modified from source given for CW06)-->
<!--Date: 10/22/2020-->
<!--Validated: Yes-->

<?php
	include 'check.php';
	$score = 500000;
?>

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<title>Question 10</title>
	<link href="question.css" type="text/css" rel="stylesheet" />
</head>

<body>
	<h1>WHO WANTS TO BE A MILLIONAIRE?</h1>
	<img src="logo.png"><br/>
	<table>
		<tr style="height:100px">
			<td colspan=2 >Correct!<br/>The Literal $1,000,000 Question: <br/>How old was Alan Turing when he died?</td>
		</tr>
		<tr>
			<td>A. 41</td> <!--Correct-->
			<td>B. 52</td> 
		</tr>
		<tr>
			<td>C. 61</td> 
			<td>D. 34</td> 
		</tr>
	</table>
	<form action="winner.php" method="post">
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