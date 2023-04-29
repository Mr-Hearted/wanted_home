<?php
// Initialize the session
session_start();

// Check if the user is already logged in, if yes then redirect them to homepage
if(isset($_SESSION["logged_in"]) && $_SESSION["logged_in"] === true){
    header("location: homepage.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Chooser</title>
    <style>
    body {
      background-image: url("../images/bg-image.jpg");
      background-size: cover;
    }
  	</style>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous"></script>

</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light">
    <a class="navbar-brand" href="../index.php">
    <img src="../images/home-logo.jpg" alt="Home Logo" class="img-thumbnail" style="width: 80px; height: 80px; margin-left: 30px;">
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="contactus.php">
          <i class="fas fa-phone-alt"></i> Contact Us
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="aboutus.php">
          <i class="fas fa-info-circle"></i> About Us
        </a>
      </li>
    </ul>
  </div>
</nav>

<section class="d-flex justify-content-center align-items-center" style="margin-top: 20px;">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-6 text-center">
      <h1>Welcome to Wanted Home</h1>
    <p class="lead">Choose your role and find the perfect match for your housing needs. Whether you are an Accomodator looking for tenants or a Student searching for a home, Wanted Home is here to help you.</p>
        <div class="btn-group" role="group">
          <a href="register-accomodator.php" class="btn btn-outline-info btn-lg mr-2">Accomodator</a>
          <a href="register-student.php" class="btn btn-outline-info btn-lg mr-2">Student</a>
          <a href="../index.php" class="btn btn-outline-info btn-lg">Back</a>
        </div>
      </div>
    </div>
  </div>
</section>

<footer></footer>
<!-- Bootstrap JS and jQuery -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>