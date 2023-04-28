<!-- back_button.php -->
<?php 
  $referrer = $_SERVER['HTTP_REFERER']; // get the previous page URL
?>
<button onclick="window.location.href='<?php echo $referrer; ?>'">Back</button>
