<?php
	include('config.php');
  include('./classes/database.class.php');

	$username = $_POST['username'];
	$password = $_POST['password'];
  

	function loginUserCheck($username, $password, $users) {

    $mysqli = $conn;
    // prepare and bind
    $stmt = $mysqli->prepare("SELECT * FROM Users");
    $stmt->bind_param("i", $userid);
    $stmt->execute();

    $stmt->close();

    // Execute a query
    $query = mysqli_query($conn, $strSQL);
    while( $result = mysqli_fetch_array($query) ) {
      if ($username == $result["userName"] && $password == $result["password"]){
        $_SESSION['isLoggedin'] = true;
        header('Location: ../dashboard.php');
        }
      }
	}

	if($username != '' and $password != '') {
		loginUserCheck($username, $password, $users);
	} else {

		$_SESSION['isLoggedin'] = false;
		header('Location: ../login.php?login=empty');

	}



?>
