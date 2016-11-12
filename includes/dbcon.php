<?php
$con = mysqli_connect("localhost","<username>","<password>","<database_name>");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>
