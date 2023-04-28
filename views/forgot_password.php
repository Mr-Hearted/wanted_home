<!DOCTYPE html>
<html>
<head>
	<title>Reset Password</title>
</head>
<body>
	<h2>Reset Password</h2>
	<form action="../php/forgot-pass-process.php" method="post">
		<div>
			<label for="email">Email:</label>
			<input type="email" id="email" name="email" required>
		</div>
		<div>
			<label for="password">New Password:</label>
			<input type="password" id="password" name="password" required>
		</div>
		<div>
			<label for="confirm_password">Confirm Password:</label>
			<input type="password" id="confirm_password" name="confirm_password" required>
		</div>
		<div>
			<input type="submit" value="Reset Password">
		</div>
	</form>
</body>
</html>
