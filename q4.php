<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<!--Web Programming Fall 2020-->
<!--Author: Wyland Crews (Modified from source given for CW06)-->
<!--Date: 10/22/2020-->
<!--Validated: Yes-->

<?php
	include 'check.php';
	$score = 100;
?>

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<title>Question 4</title>
	<link href="question.css" type="text/css" rel="stylesheet" />
</head>

<body>
	<h1>WHO WANTS TO BE A MILLIONAIRE?</h1>
	<img src="logo.png"><br/>
	<table>
		<tr style="height:100px">
			<td colspan=2 >Correct!<br/>For $1,000.00: <br/>What year was the Republic of Turkey established?</td>
		</tr>
		<tr>
			<td>A. 1914</td> 
			<td>B. 1923</td> <!--Correct-->
		</tr>
		<tr>
			<td>C. 1932</td> 
			<td>D. 1947</td>
		</tr>
	</table>
	<form action="q5.php" method="post">
		<p>Choose your answer:
			<select name="answer">
				<option value="false">A</option>
				<option value="true">B</option>
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