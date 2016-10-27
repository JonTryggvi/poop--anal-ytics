<?php
  include('../classes/database.class.php');

	$username = $_POST['username'];
	$password = $_POST['password'];


	function loginUserCheck($username, $password, $conn) {

    $mysqli = $conn;
    // prepare and bind
    $stmt = $mysqli->prepare("SELECT * FROM User");
		error_log($mysqli->error);
    $stmt->execute();
		$stmt->bind_result($id, $email, $pass, $userName, $firstName, $lastName, $user_date, $age, $profile_img, $roles_id, $gender_id, $apps_countries_id);


    // Execute a query
    while( mysqli_stmt_fetch($stmt) ) {
      if ($username == $userName && $password == $pass){
        $_SESSION['isLoggedin'] = true;
        header('Location: ../dashboard.php');
        }
      }
			  $stmt->close();
	}


	if($username != '' and $password != '') {
		loginUserCheck($username, $password, $conn);
	} else {

		$_SESSION['isLoggedin'] = false;
		header('Location: ../login.php?login=empty');

	}



?>
