<?php

  // Database credentials
  $servername = "82.148.66.32";
  $username = "herdis";
  $password = "vskoli";
  $database = "h5";

  // Create connection
// http://php.net/manual/en/function.mysqli-connect.php
  $conn = new mysqli($servername, $username,
			$password, $database);

  // Check connection
  if (mysqli_connect_errno()) {
      die("Connection failed: " . mysqli_connect_error());
  }





?>
