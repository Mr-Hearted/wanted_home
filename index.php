<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wanted Home</title>
    <style>
    body {
      background-image: url("images/bg-image.jpg");
      background-size: cover;
    }
  	</style>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href=" ../css/style.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous"></script>
</head>
<body class="home-body">
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<a class="navbar-brand" href="index.php">Wanted Home</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNav">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item">
					<a class="nav-link text-primary" href="views/login.php">Contact Us</a>
				</li>
				<li class="nav-item">
					<a class="nav-link text-primary" href="views/favorite.php"> About Us</a>
				</li>
			</ul>
		</div>
	</nav>
	<a href="views/register-user-choose.php" class="text-info font-weight-bold">Create Account</a>
	<a href="views/login-user-choose.php" class="text-info font-weight-bold">Login</a>
</body>
</html>