<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-8">
            <h2>Student Registration Form</h2>
	        <form action="../php/reg-student-process.php" method="POST">
		        <label for="full_name">Full Name:</label><br>
		        <input type="text" id="full_name" name="full_name" required><br><br>

		        <label for="birthday">Birthday:</label><br>
		        <input type="date" id="birthday" name="birthday" required><br><br>

		        <label for="email">Email:</label><br>
		        <input type="email" id="email" name="email" required><br><br>

		        <label for="password">Password:</label><br>
		        <input type="password" id="password" name="password" required><br><br>

		        <label for="confirm_password">Confirm Password:</label><br>
		        <input type="password" id="confirm_password" name="confirm_password" required><br><br>

		        <input type="submit" value="Register">
	        </form>
                <a href="#" class="text-info font-weight-bold">Back</a>
			</div>
		</div>
	</div>
</body>
</html>