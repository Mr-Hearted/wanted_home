<?php
$current_page = $_SERVER['PHP_SELF'];
if (strpos($current_page, 'homepage.php') !== false) {
  // If the current page is homepage.php, link back to the homepage
  $back_link = 'homepage.php';
} else {
  // Otherwise, link back to the index page
  $back_link = '../index.php';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
</head>
<body>
    <h1>About Us</h1>
    <p>This web-based platform that will act as medium to connect the
    accommodation providers and seekers. Progressive Web App
    approach will be utilized to target multiple platforms. The
    application targets sectors are people that are interested in
    finding a room to stay like students looking for a boarding house
    or travelers looking for a temporary accommodation. This
    application incorporates several common functions and design
    elements found on most websites, allowing clients to find vacant
    rooms and to check its specification and information.
    </p>
    <a href="<?php echo $back_link; ?>">Back</a>
</body>
</html>