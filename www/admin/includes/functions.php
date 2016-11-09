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

if(isset($_POST['title']) && !empty($_POST['title']) && isset($_POST['content']) && !empty($_POST['content'])) {

	$title =  $_POST['title'];
	$content =$_POST['content'];
	$author = $_SESSION['UsrNm'];
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
if(isset($_GET['delete']) && $_GET['delete'] == true) {
	$id = $_GET['postid'];
	$DeletePost= new Post();
	$DeletePost->deletePost($id);
}



// test functions
if(isset($_POST['submit']) and !empty($_POST['submit'])){
	if (isset($_POST['texture']) && isset($_POST['shade']) ) {

		// textures
		$texture =  $_POST['texture-dash'];
		// Shade
		$shade =  $_POST['shade-dash'];
		$textureTest = new userTest();
		$textureTest->userTextures($texture, $shade);



		function showResultIcons($t, $s) {
			$iconResult = new userTest();
			$iconResult->resultsIcons($t, $s);
		}

		function showTextureResult($t, $s){
			$textureResult = new userTest();
			$textureResult->textureResult($t, $s);
		}
	}

}





// diary test functions

	function textureRadios(){
		$test = new userTest();
		$test->getTextures();
	}


	function shadeRadios(){
		$test = new userTest();
		$test-> getShades();
	}

if(isset($_POST['submit-diary']) and !empty($_POST['submit-diary'])){
	if (isset($_POST['texture-diary']) && isset($_POST['shade-diary']) ) {
		// textures
		$texture =  $_POST['texture-diary'];
		// Shade
		$shade =  $_POST['shade-diary'];

		$diaryTitle = $_POST['diary-title'];
		$diaryContent = $_POST['diary-content'];

		$textureTest = new diaryTest();
		$textureTest->diaryTextures($texture, $shade, $diaryTitle, $diaryContent);



		function showResultIconsDiary($t, $s) {
			$iconResult = new diaryTest();
			$iconResult->resultsIcons($t, $s);
		}

		function showTextureResultDiary($t, $s){
			$textureResult = new diaryTest();
			$textureResult->textureResult($t, $s);
		}
	}

}

function textureRadiosDiary(){
	$test = new diaryTest();
	$test->getTextures();
}

function shadeRadiosDiary(){
	$test = new diaryTest();
	$test->getShades();
}









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


		if(isset($_GET['deletecomment']) && $_GET['deletecomments'] == 'true') {
			$commentsid = $_GET['userid'];

			$user = new Stories();
			$user->deleteComments($commentsid);

			}

	function check($commentsid){

		// if($_SESSION['User_roles_id'] == 2){
			echo '<a class="btn btn-danger btn-sm" href="stories.php?deletecomments=true&postid='.$commentsid.'"><i class="fa fa-trash" aria-hidden="true"></i></a>';

		// }else {
		//
		// }
	}



function showAllUsers() {
	$alluser = new User();
	$alluser->showAllUsers();
}

//Check if parameter exists and is set to true
if(isset($_GET['deleteuser']) && $_GET['deleteuser'] == 'true') {
	$userid = $_GET['userid'];

	$user = new User();
	$user->deleteUser($userid);
}



?>
