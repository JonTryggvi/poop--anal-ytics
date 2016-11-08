<?php
	include('config.php');


	$username = $_POST['username'];
	$password = $_POST['password'];


	function loginUserCheck($username, $password) {
		// prepare and bind
		$db = $GLOBALS['gdb'];
	  $mysqli = $db->getConnection();

		$stmt = $mysqli->prepare("SELECT id, password, userName, roles_id, gender_id, apps_countries_id, profile_img FROM User");

		$stmt->execute();
		$stmt->bind_result($id, $pass, $userName, $User_roles_id, $User_gender_id, $User_apps_countries_id, $profile_img);

		// Execute a query
		$_SESSION['isLoggedin'] = false;
		while( $stmt->fetch()) {
			if ($username == $userName && $password == $pass){
				header('Location: ../dashboard.php');
				$_SESSION['isLoggedin'] = true;
				$_SESSION['UsrNm'] = $userName;
				$_SESSION['User_id'] = $id;
				$_SESSION['User_roles_id'] = $User_roles_id;
				$_SESSION['User_gender_id'] = $User_gender_id;
				$_SESSION['User_apps_countries_id'] = $User_apps_countries_id;
				$_SESSION['User_profile_img'] = $profile_img;
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
