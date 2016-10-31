<?php
	include($_SERVER['DOCUMENT_ROOT'].'/classes/classes.php');

/*isset checks if var exists */

if(isset($_POST['create_username']) && !empty($_POST['create_username']) && isset($_POST['create_password']) && !empty($_POST['create_password']) && strlen($_POST['create_password']) > 6 && isset($_POST['email']) && !empty($_POST['email'])) {


		$email = $_POST['email'];
		$pass = $_POST['create_password'];
		$userName = $_POST['create_username'];
		$firstName = $_POST['firstName'];
		$lastName = $_POST['lastName'];
		$user_date = '2016-10-27 09:24:49';
		$age = $_POST['age'];
		$profile_img = [''];
		$roles_id = $_POST['roles_id'];
		$gender_id = $_POST['gender_id'];
		$apps_countries_id = $_POST['apps_countries_id'];



		if (empty($email) || empty($pass) || empty($userName) || empty($firstName) || empty($lastName))
	  {
	  	echo "Complete all fields";
	  }
		else if(!filter_var($email, FILTER_VALIDATE_EMAIL))
	  {
	    echo $emailvalid = "Enter a  valid email" ;
		}
		else {
			$user = new User();
			$user->createUsers($email, $firstName, $lastName, $userName, $pass, $age, $profile_img, $roles_id, $gender_id, $apps_countries_id, $user_date);
		}
		
}

?>
