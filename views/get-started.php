<?php
session_start();

// If user is not logged in, redirect to login page
if (!isset($_SESSION["logged_in"]) || $_SESSION["logged_in"] !== true) {
    header("location: login-user-choose.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get Started</title>

    <style>
        body {
          background-image: url("../images/bg-image.jpg");
          background-size: cover;
        }
        /* Basic styling for the tutorial slides */
        .tutorial-slide {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;;
            text-align: center;
            padding: 20px;
            box-sizing: border-box;
        }

        .tutorial-slide h2 {
            font-size: 36px;
            margin-bottom: 20px;
        }

        .tutorial-slide p {
            font-size: 18px;
            margin-bottom: 40px;
            max-width: 80%;
        }

        .next-slide-btn {
            font-size: 24px;
            padding: 10px 30px;
            border: none;
            border-radius: 5px;
            background-color: #4CAF50;
            color: #fff;
            cursor: pointer;
        }

        .next-slide-btn:hover {
            background-color: #3e8e41;
        }

        .next-slide-btn:focus {
            outline: none;
        }

        /* Hide the second slide initially */
        .tutorial-slide:nth-of-type(2) {
            display: none;
        }
    </style>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous"></script>


</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light">
      <a class="navbar-brand" href="homepage.php">
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
          <li class="nav-item">
            <a class="nav-link text-danger" href="../php/logout.php">
              <i class="fas fa-sign-out-alt"></i> Logout
            </a>
          </li>
        </ul>
      </div>
    </nav>
    <!-- Slide 1 -->
    <div class="tutorial-slide">
        <h2>Welcome!!!</h2>
        <p>You can now be able to find your desirable home in an affordable price.</p>
        <button class="next-slide-btn">Next</button>
    </div>

    <!-- Slide 2 -->
    <div class="tutorial-slide">
        <h2>Welcome!!!</h2>
        <p>We will be happy to help you in promoting your business.</p>
        <form method="post" action="homepage.php">
            <input type="submit" class="next-slide-btn" value="Finish">
        </form>
    </div>
    <footer></footer>
<!-- Bootstrap JS and jQuery -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


    <script>
        // Add functionality to the "Next" button to switch between slides
        const nextSlideBtn = document.querySelector('.next-slide-btn');
        const tutorialSlides = document.querySelectorAll('.tutorial-slide');
        let currentSlideIndex = 0;

        nextSlideBtn.addEventListener('click', () => {
            tutorialSlides[currentSlideIndex].style.display = 'none';
            currentSlideIndex++;
            tutorialSlides[currentSlideIndex].style.display = 'flex';
        });
    </script>
</body>
</html>
