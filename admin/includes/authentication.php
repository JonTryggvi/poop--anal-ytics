<?php
  include('../classes/database.class.php');

	$username = $_POST['username'];
	$password = $_POST['password'];



	function loginUserCheck($username, $password, $conn) {
    $mysqli = $conn;
    // prepare and bind
    $stmt = $mysqli->prepare("SELECT id, email, password, userName, firstName, lastName FROM User");
		error_log($mysqli->error);
    $stmt->execute();
		$stmt->bind_result($id, $email, $pass, $userName, $firstName, $lastName);

    // Execute a query
    while( $stmt->fetch()) {
      if ($username == $userName && $password == $pass){
        $_SESSION['UsrNm'] = $userName;
        $_SESSION['isLoggedin'] = true;
        $_SESSION[''];


        header('Location: ../dashboard.php');
      } else {
        $_SESSION['isLoggedin'] = false;
    		header('Location: ../login.php?login=empty');
      }
    }
		$stmt->close();
	}
  loginUserCheck($username, $password, $conn);


?>
