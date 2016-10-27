<?php

  include('includes/config.php');


  // include('login.php');

  if($isLoggedIn) {

		header('Location: dashboard.php');

	} else {

		header('Location: login.php');

	}



 ?>
