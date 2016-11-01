<?php
	include($_SERVER['DOCUMENT_ROOT'].'/admin/classes/classes.php');

/*isset checks if var exists */

if(isset($_POST['create_username']) && !empty($_POST['create_username']) && isset($_POST['create_password']) && !empty($_POST['create_password']) && isset($_POST['email']) && !empty($_POST['email'])) {


		$email = $_POST['email'];
		$pass = $_POST['create_password'];
		$userName = $_POST['create_username'];
		$firstName = $_POST['firstName'];
		$lastName = $_POST['lastName'];
		// $user_date = '2016-10-27 09:24:49';
		$age = $_POST['age'];
		// $profile_img = 'test.pdf';
		$roles_id = '1';
		$gender_id = $_POST['gender_id'];
		$apps_countries_id = $_POST['apps_countries_id'];

		$user = new User();
		$emailCheck = $user->emailCheck($email);
		var_dump($emailCheck);
		if($emailCheck === 0) {
			$creteuser = new User();
			$creteuser->createUsers($email, $firstName, $lastName, $userName, $pass, $age, $roles_id, $gender_id, $apps_countries_id);
		} else if ($emailCheck > 0) {
			echo "email already exist";
		}
		else if (empty($email) || empty($pass) || empty($userName) || empty($firstName) || empty($lastName))
	  {
	  	echo "Complete all fields";
	  }
		else if(!filter_var($email, FILTER_VALIDATE_EMAIL))
	  {
	    echo $emailvalid = "Enter a  valid email" ;
		}
		 else if(strlen($_POST['create_password']) < 6)
		{
			echo $error = "Your password must be longer than 6 letters" ;
		}
		else {
			echo "Something else";
		}

}
?>
