<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Student</title>
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
  <a class="navbar-brand" href="#">
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
      <div class="col-md-8">
        <h2 class="mb-4">Student Registration Form</h2>
        <form action="../php/reg-student-process.php" method="POST">
          <div class="form-group">
            <label for="full_name"><i class="fas fa-user"></i> Full Name:</label>
            <input type="text" class="form-control" id="full_name" name="full_name" required>
          </div>
          <div class="form-group">
            <label for="birthday"><i class="fas fa-calendar-alt"></i> Birthday:</label>
            <input type="date" class="form-control" id="birthday" name="birthday" required>
          </div>
          <div class="form-group">
            <label for="email"><i class="fas fa-envelope"></i> Email:</label>
            <input type="email" class="form-control" id="email" name="email" required>
          </div>
          <div class="form-group">
            <label for="password"><i class="fas fa-lock"></i> Password:</label>
            <input type="password" class="form-control" id="password" name="password" required>
          </div>
          <div class="form-group">
            <label for="confirm_password"><i class="fas fa-lock"></i> Confirm Password:</label>
            <input type="password" class="form-control" id="confirm_password" name="confirm_password" required>
          </div>
          <div class="form-check">
              <input type="checkbox" class="form-check-input" id="terms" required>
              <label class="form-check-label" for="terms">I agree to the <a href="term_condition.php">terms and conditions</a>.</label>
            </div>
            <button type="submit" class="btn btn-primary" id="submit-btn" disabled><i class="fas fa-user-plus"></i>Register</button>
        </form>
        <a href="register-user-choose.php" class="text-info font-weight-bold mt-2"><i class="fas fa-chevron-left"></i> Back</a>
      </div>
    </div>
  </div>
</section>
<script>
  document.getElementById("terms").addEventListener("change", function() {
    document.getElementById("submit-btn").disabled = !this.checked;
  });
</script>
	
	<footer></footer>
	<!-- Bootstrap JS and jQuery -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>