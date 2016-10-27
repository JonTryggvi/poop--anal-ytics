<?php
  include('../classes/database.class.php');

	$username = $_POST['username'];
	$password = $_POST['password'];



	function loginUserCheck($username, $password, $conn, $users) {

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
				$_SESSION['username'] = $username;
        header('Location: ../dashboard.php');
        }
      }
			  $stmt->close();
	}

	if($username != '' and $password != '') {
		loginUserCheck($username, $password, $conn, $users);
	} else {

		$_SESSION['isLoggedin'] = false;
		header('Location: ../login.php?login=empty');

	}


	// 
	// function CreateUser()
	// {
	// 	$email = $_POST['email'];
	// 	$pass = $_POST['password'];
	// 	$userName = $_POST['username'];
	// 	$firstName = $_POST['firstName'];
	// 	$lastName = $_POST['lastName'];
	// 	$user_date = $_POST['user_date'];
	// 	$age = $_POST['age'];
	// 	$profile_img = $_POST['profile_img'];
	// 	$roles_id = $_POST['roles_id'];
	// 	$gender_id = $_POST['gender_id'];
	// 	$apps_countries_id = $_POST['apps_countries_id'];
	// 	$query = "INSERT INTO User (email, pass, userName, firstName, lastName, user_date, age, profile_img, roles_id, gender_id, apps_countries_id) VALUES ('$email', '$pass', '$userName', '$firstName', '$lastName', '$user_date', '$age', '$profile_img', '$roles_id', '$gender_id', '$apps_countries_id')";
	// 	$data = mysql_query ($query) or die(mysql_error());
	// 	if($data)
	// 	{
	// 		echo "YOUR REGISTRATION IS COMPLETED...";
	// 	}
	//
	// }





?>
