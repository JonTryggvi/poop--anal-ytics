<?php
	include('classes/classes.php');

	if(isset($_POST['create_username']) && !empty($_POST['create_username']) && isset($_POST['create_password']) && !empty($_POST['create_password'])) {
		//createUser($link, $username, $password, $email, $lastname, $firstname);
			$email = $_POST['email'];
			$pass = $_POST['create_password'];
			$userName = $_POST['create_username'];
			$firstName = $_POST['firstName'];
			$lastName = $_POST['lastName'];
			$user_date = $_POST[''];
			$age = $_POST['age'];
			$profile_img = 'test.jpg';
			$roles_id = $_POST['roles_id'];
			$gender_id = $_POST['gender_id'];
			$apps_countries_id = $_POST['apps_countries_id'];

		$user = new User();
		$user->createUsers($conn, $email, $pass, $userName, $firstName, $lastName, $user_date, $age, $profile_img, $roles_id, $gender_id, $apps_countries_id);
	}


function getUsers() {
	$alluser = new User();
	$alluser->getAllUsers();
}

?>
