<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<!--Web Programming Fall 2020-->
<!--Author: Wyland Crews (Modified from source given for CW06)-->
<!--Date: 10/22/2020-->
<!--Validated: Yes-->

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<title>Question 1</title>
	<link href="question.css" type="text/css" rel="stylesheet" />
</head>

<body>
	<h1>WHO WANTS TO BE A MILLIONAIRE?</h1>
	<img src="logo.png"><br/>
	<table>
		<tr style="height:100px">
			<td colspan=2 >For $1.00: <br/>How many characters are in the English alphabet?</td>
		</tr>
		<tr>
			<td>A. 26</td> <!--Correct-->
			<td>B. 24</td>
		</tr>
		<tr>
			<td>C. 3</td>
			<td>D. 15</td>
		</tr>
	</table>
	<form action="q2.php" method="post">
		<p>Choose your answer:
			<select name="answer" size="1">
				<option value="true">A</option>
				<option value="false">B</option>
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