<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>Accommodator Login</h2>
	<form action="../php/login-accom-process.php" method="post">
		<div>
			<label>Email:</label>
			<input type="email" name="email" required>
		</div>
		<div>
			<label>Password:</label>
			<input type="password" name="password" required>
		</div>
		<div>
			<input type="submit" value="Login">
		</div>
	</form>
	<p><a href="forgot_password.php">Forgot Password?</a></p>
    <p>Do you have an account? <a href="forgot-password.php">Register</a></p>
</body>
</html>