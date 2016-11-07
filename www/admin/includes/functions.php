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


// test functions
if(isset($_POST['submit']) and !empty($_POST['submit'])){
	if (isset($_POST['texture']) && isset($_POST['shade']) ) {
		// textures
		$texture =  $_POST['texture'];
		// Shade
		$shade =  $_POST['shade'];
		$textureTest = new userTest();
		$textureTest->anonTextures($texture, $shade);
		function showResultIcons($t, $s) {
			$iconResult = new userTest();
			$iconResult->resultsIcons($t, $s);
		};

		function showTextureResult($t, $s){
			$textureResult = new userTest();
			$textureResult->textureResult($t, $s);
		};
	}
}


function textureRadios(){
	$test = new userTest();
	$test->getTextures();
}

function shadeRadios(){
	$test = new userTest();
	$test-> getShades();
}


// function getStories(){
// 	$stories = new userTest();
// 	$stories-> getAllStories();
// }

	function getStories(){

		$stories = new Stories();
		$stories-> getAllStories();
	}

	if(isset($_POST['commentSubmit'])){

		$content = $_POST['content'];
		$author = $_SESSION['UsrNm'];
		$comment_time = date("Y-m-d H:i:s");
		$post_id = $_POST['post_id'];
		$User_id = $_SESSION['User_id'];
		$User_roles_id = $_SESSION['User_roles_id'];
		$User_gender_id =  $_SESSION['User_gender_id'];
		$User_apps_countries_id = $_SESSION['User_apps_countries_id'];

		$createcomments = new Stories();
		$createcomments->setComments($content, $author, $comment_time, $post_id, $User_id, $User_roles_id, $User_gender_id, $User_apps_countries_id);
		echo $submitComment = "Your comment has been submited!";
	}

	function getPosts() {
      $allPosts = new Stories();
      return $allPosts->getAllStories($_SESSION['User_id']);
    }

    function getPostComments($post_id) {

      $allComments = new Stories();
      return $allComments->getPostComments($post_id);
    }


	function check($id){
		if($_SESSION['User_roles_id'] == 2){
			echo '<a class="btn btn-danger btn-sm" href="stories.php?delete=true&postid='.$postid.'"><i class="fa fa-trash" aria-hidden="true"></i></a>';
		}else {
			echo "bye";
		}

}

?>
