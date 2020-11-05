<!DOCTYPE html>
<html>
<head>
	<title>Who Wants to be a Millionaire?</title>
</head>
<body>

	<h1>Register to Play</h1>

	<form action="register-process.php" method="post">
		
		<table>
			<tr>
				<td>Username:</td>
				<td><input type="text" name="username" required=""></td>
			</tr>
			<tr>
				<td>Password:</td>
				<td><input type="password" name="password1" required=""></td>
			</tr>
			<tr>
				<td>Confirm Password:</td>
				<td><input type="password" name="password2" required=""></td>
			</tr>
		</table>

		<br>
			
		<button>Submit</button>

		<br><br>

		<a href="login.php">Already Registered? Login here</a>

		

	</form>



</body>
</html>