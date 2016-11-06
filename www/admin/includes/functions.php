<?php
	include($_SERVER['DOCUMENT_ROOT'].'/admin/classes/classes.php');

/*isset checks if var exists */

if(isset($_POST['create_username']) && !empty($_POST['create_username']) && isset($_POST['create_password']) && !empty($_POST['create_password']) && isset($_POST['email']) && !empty($_POST['email'])) {
		$email = $_POST['email'];
		$pass = $_POST['create_password'];
		$userName = $_POST['create_username'];
		$firstName = $_POST['firstName'];
		$lastName = $_POST['lastName'];
		$user_date = date("Y-m-d H:i:s");
		$age = $_POST['age'];
		// $profile_img = 'test.pdf';
		$roles_id = '1';
		$gender_id = $_POST['gender_id'];
		$apps_countries_id = $_POST['apps_countries_id'];

		$user = new User();
		$emailCheck = $user->emailCheck($email);

		if($emailCheck === 0) {
			$creteuser = new User();
			$creteuser->createUsers($email, $firstName, $lastName, $userName, $pass, $age, $roles_id, $gender_id, $apps_countries_id, $user_date);
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

if(isset($_POST['title']) && !empty($_POST['title']) && isset($_POST['author']) && !empty($_POST['author']) && isset($_POST['content']) && !empty($_POST['content'])) {

	$title =  $_POST['title'];
	$content =$_POST['content'];
	$author = $_POST['author'];
	$date_post = date("Y-m-d H:i:s");
	$User_id = $_SESSION['User_id'];
	$User_roles_id = $_SESSION['User_roles_id'];
	$User_gender_id =  $_SESSION['User_gender_id'];
	$User_apps_countries_id = $_SESSION['User_apps_countries_id'];

	if(true){
	$createpost = new Post();
	$createpost->createPost($title, $content, $author, $date_post, $User_id, $User_roles_id, $User_gender_id, $User_apps_countries_id);
	echo $submitStory = "Your Story has been submited!";
	}

}

function getPost() {

	$allpost = new Post();
	$allpost->showAllPost($_SESSION['User_id']);

}

//Check if parameter exists and is set to true
if(isset($_GET['delete']) && $_GET['delete'] == 'true') {
	$id = $_GET['postid'];

	$DeletePost= new Post();
	$DeletePost->deletePost($id);
}


?>
