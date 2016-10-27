<?php
	include('classes/classes.php');

	if(isset($_POST['create_username']) && !empty($_POST['create_username']) && isset($_POST['create_password']) && !empty($_POST['create_password'])) {
		//createUser($link, $username, $password, $email, $lastname, $firstname);
		$username = $_POST['create_username'];
		$password = $_POST['create_password'];
		$email = $_POST['create_email'];
		$lastname = $_POST['create_lastname'];
		$firstname = $_POST['create_firstname'];

		$user = new User();
		$user->createUsers($firstname, $lastname, $email);
	}


function getUsers() {
	$alluser = new User();
	$alluser->getAllUsers();
}

?>
