<?php

	include('includes/config.php');

	if($_SESSION['isLoggedin']) {

		header('Location: dashboard.php');

	} else {

		header('Location: login.php');

	}

?>
