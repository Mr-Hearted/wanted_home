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
				<h1 class="text-center">Accommodator</h1>
				<form action = "../php/reg-accom-process.php" method = "POST">
					<div class="form-group">
						<label for="email">Enter your email address here: </label>
						<input type="email" class="form-control" name="email" id="email" placeholder="Email">
					</div>
					<div class="form-group">
						<label for="password">Enter your password here: </label>
						<input type="password" class="form-control" name="password" id="password" placeholder="Password">
					</div>
					<div class="form-group">
						<label for="confirm_password">Confirm Password:</label>
						<input type="password" class="form-control" name="confirm_password" id="confirm_password" placeholder="Confirm Password">
					</div>
					<div class="form-group">
						<label for="contact_number">Contact no.</label>
						<input type="tel" class="form-control" name="contact_number" id="contact_number" placeholder="Enter your contact number">
					</div>
                    <div class="form-group">
						<label for="name">Business Info:</label>
						<input type="text" class="form-control" name="name" id="name" placeholder="Name">
					</div>
					<div class="form-group">
						<label for="business_name">Business Name:</label>
						<input type="text" class="form-control" name="business_name" id="business_name" placeholder="Business name">
					</div>
					<div class="form-group">
						<label for="address">Location: </label>
						<input type="text" class="form-control" name="address" id="address" placeholder="Address">
					</div>
					<button type="submit" class="btn btn-primary">Register</button>
				</form>
                <a href="#" class="text-info font-weight-bold">Back</a>
			</div>
		</div>
	</div>
</body>
</html>