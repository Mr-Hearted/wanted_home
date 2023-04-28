<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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

<section style="margin-top: 20px;">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <h1 class="text-center">Accommodator</h1>
        <form action="../php/reg-accom-process.php" method="POST">
          <div class="form-group">
            <label for="email">Enter your email address here: </label>
            <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
          </div>
          <div class="form-group">
            <label for="password">Enter your password here: </label>
            <input type="password" class="form-control" name="password" id="password" placeholder="Password" required>
          </div>
          <div class="form-group">
            <label for="confirm_password">Confirm Password:</label>
            <input type="password" class="form-control" name="confirm_password" id="confirm_password" placeholder="Confirm Password" required>
          </div>
          <div class="form-group">
            <label for="contact_number">Contact no.</label>
            <input type="tel" class="form-control" name="contact_number" id="contact_number" placeholder="Enter your contact number" required>
          </div>
          <div class="form-group">
            <label for="name">Business Info:</label>
            <input type="text" class="form-control" name="name" id="name" placeholder="Name" required>
          </div>
          <div class="form-group">
            <label for="business_name">Business Name:</label>
            <input type="text" class="form-control" name="business_name" id="business_name" placeholder="Business name" required>
          </div>
          <div class="form-group">
            <label for="address">Location: </label>
            <input type="text" class="form-control" name="address" id="address" placeholder="Address" required>
          </div>
          <div class="form-group">
            <div class="form-check">
              <input type="checkbox" class="form-check-input" id="terms" required>
              <label class="form-check-label" for="terms">I agree to the <a href="#" data-toggle="modal" data-target="#termsModal">Terms and Conditions</a>.</label>
            </div>
          </div>
          <button type="submit" class="btn btn-primary" id="submit-btn" disabled>Register</button>
        </form>
        <a href="register-user-choose.php" class="text-info font-weight-bold">Back</a>
      </div>
    </div>
  </div>
</section>

<div class="modal fade" id="termsModal" tabindex="-1" role="dialog" aria-labelledby="termsModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="termsModalLabel">Terms and Conditions</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>
        Accommodators must be 18 years old or above.
        Accommodators are individuals or organizations that provide accommodation, or a place to stay, for travelers or visitors. This statement means that in order to be an accommodator, an individual must be at least 18 years old. This age requirement may be in place for various reasons, such as legal liability or the assumption that individuals who are 18 or older are more responsible and able to handle the duties and responsibilities that come with being an accommodator.
        Room seekers must be verified to send a review.
        In order to leave a review on this platform, room seekers must be verified. Verification is a process of confirming the identity or authenticity of something. In this case, it means that the platform is checking to make sure that the person leaving the review is a real individual who actually stayed at the accommodation in question. This requirement helps to ensure the integrity of the review system and prevent fake or fraudulent reviews from being posted. Verification may involve requiring room seekers to provide certain information or documentation to confirm their identity or their stay at the accommodation.
        Room seekers must be verified to send message.
        This requirement may help to ensure the security and privacy of the platform and prevent spam or fraudulent activity. Verification may involve requiring room seekers to provide certain information or documentation to confirm their identity. This requirement may be in place to help ensure that the platform is used for its intended purpose and that communication between room seekers and accommodators is legitimate and respectful. It may also help to build trust and confidence between the two parties.
        Accommodators must be verified to upload rooms.
        This requirement may help to ensure the quality and reliability of the rooms and accommodations available on the platform, and prevent fake or fraudulent listings from being posted. Verification may involve requiring accommodators to provide certain information or documentation to confirm their identity and their status as an accommodator. This requirement may be in place to help protect the interests of both room seekers and accommodators, and to maintain the integrity and trustworthiness of the platform.
        
        We do not cover transactions and payment.
        This statement means that the organization or platform in question is not responsible for handling or facilitating transactions or payments between room seekers and accommodators. It is the responsibility of the room seekers and accommodators to arrange and complete any transactions or payments that are necessary in connection with the accommodation. By stating that it does not cover transactions and payment, the organization or platform is indicating that it is not involved in these aspects of the accommodation process and that it is up to the room seekers and accommodators to handle these matters on their own. This may include making arrangements for payment methods, completing financial transactions, and ensuring that payment is made in a timely and satisfactory manner.
        We will not share the collected data.
        In the context of an accommodation platform, collected data may include information about the rooms that are available for rent or booking, as well as information about the individuals or organizations offering the rooms (accommodators) and the individuals or organizations seeking accommodation (room seekers). This data may include details such as the location, size, and amenities of the rooms, as well as contact information and other personal details about the accommodators and room seekers.By stating that it will not share this data, the organization or platform is committing to protecting the privacy and confidentiality of the individuals and organizations involved in the accommodation process. This may help to build trust and confidence in the platform, and ensure that the data is used only for the purposes for which it was collected.
        We are not responsible for what the seekers and accommodators activity outside this platform.
        This statement means that the organization or platform in question is not responsible for the actions or activities of room seekers or accommodators that occur outside of the platform. It is limited to the activities and interactions that take place within the platform and has no control or responsibility for what happens outside of it. In the context of an accommodation platform, room seekers and accommodators may interact with each other and make arrangements for accommodation through the platform, but they may also have other interactions or activities that are not related to the platform or that take place outside of it. These activities could include things like communication or transactions that occur outside of the platform, or events or situations that are unrelated to the accommodation process. By stating that it is not responsible for these activities, the organization or platform is making it clear that it has no control over or liability for what happens outside of the platform, and that room seekers and accommodators are solely responsible for their own actions and interactions.
        </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
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