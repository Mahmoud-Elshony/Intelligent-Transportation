<?php
$conn = mysqli_connect("localhost","root","","credit_card");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>