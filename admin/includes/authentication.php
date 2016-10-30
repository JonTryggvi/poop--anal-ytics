<?php
	include('config.php');


	$username = $_POST['username'];
	$password = $_POST['password'];


	function loginUserCheck($username, $password) {
		// prepare and bind
		$db = $GLOBALS['gdb'];
	  $mysqli = $db->getConnection();

		$stmt = $mysqli->prepare("SELECT email, password, userName, firstName, lastName FROM User");

		$stmt->execute();
		$stmt->bind_result($email, $pass, $userName, $firstName, $lastName);

		// Execute a query
		$_SESSION['isLoggedin'] = false;
		while( $stmt->fetch()) {
			if ($username == $userName && $password == $pass){
				header('Location: ../dashboard.php');
				$_SESSION['isLoggedin'] = true;
				$_SESSION['UsrNm'] = $userName;
			} else {
			}
		}
		if ($_SESSION['isLoggedin'] == false){
			 header('Location: ../login.php?login=empty');
		}
		$stmt->close();
	}
	loginUserCheck($username, $password);



?>
