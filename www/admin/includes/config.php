<?php
	session_start();
	include('functions.php');

	//Tjékkar hvort notandi sé skráður inn
	function loginCheck() {
		if($_SESSION['isLoggedin'] == false) {
			header('Location: login.php');
		}
	}

	if(isset($_GET['logout']) && $_GET['logout'] == 'true') {
		$_SESSION['isLoggedin'] = false;

		// remove all session variables
		session_unset();

		// destroy the session
		session_destroy();
	}

	// Constants
	define('LOGINERROR', 'Username or Password is wrong!', false);
	define('LOGINEMPTY', 'Username or Password is empty!', false);


	// var_dump($_SESSION['User_roles_id']);
// if($_SESSION['User_roles_id']==2) {
		$navItems = array(
			array('Dashboard', 'index.php'),
			array('Diarya', 'diarya.php'),
			array('Advice', 'users.php'),
			array('Static', 'pages.php'),
			array('Posts', 'posts.php'),
			array('Files', 'files.php')
		);
	// }
	// elseif($_SESSION['User_roles_id']==1) {
	// 	$navItems = array(
	// 		array('Dashboard', 'index.php'),
	// 		array('Advice', 'users.php'),
	// 		// array('Static', 'pages.php'),
	// 		array('Posts', 'posts.php'),
	// 		array('Files', 'files.php')
	// 	);
	// }




	$navItems = array(
		array('Dashboard', 'index.php'),
		array('Advice', 'users.php'),
		array('Static', 'pages.php'),
		array('Your Posts', 'posts.php'),
		array('Stories', 'stories.php')
	);

	$userNav2 = array(
		array('Take test', 'landingpage.php'),
		array('advice', 'advice.php'),
		array('static', 'static.php'),
		array('Sign', 'login.php')
	);
	$userNavItems = array(
		array('Logout', 'login.php?logout=true'),
		array('My Profile', 'profile.php')
	);

// Create Navigation
// function createNavigation($nav) {
//
// 	if($nav == 'mainNav') {
//
// 		$navArr = $GLOBALS['navItems'];
// 		$className = 'main';
//
// 	} elseif($nav == 'userNav') {
//
// 		$navArr = $GLOBALS['userNavItems'];
// 		$className = 'user';
//
// 	} elseif($nav == 'userNav2') {
//
// 		$navArr = $GLOBALS['userNav2'];
// 		$className = 'user2';
//
// 	}
//
// 	echo '<ul class="'.$className.'-nav nav nav-pills nav-stacked m-t-2">';
// 	foreach($navArr as $key => $value) {
//
// 		if($value[1] == 'Dashboard') {
// 			$active = 'active';
//
// 		} else {
// 			$active = '';
// 		}
// 		echo '<li class="nav-item nav-link"><a href="'.$value[1].'" class="'.$active.'">'. $value[0] .'</a></li>';
// 	}
// 	echo '</ul>';
// }
//
// Create Navigation
function createNavigation($nav) {

	if($nav == 'mainNav') {

		$navArr = $GLOBALS['navItems'];
		$className = 'main';
		$bootstrapClass = '';

	} elseif($nav == 'userNav') {

		$navArr = $GLOBALS['userNavItems'];
		$className = 'user';
		$bootstrapClass = 'navbar-nav m-t-2';
	}

	echo '<ul class="'.$className.'nav '.$bootstrapClass.'">';
	foreach($navArr as $key => $value) {

		if($value[1] == 'Dashboard') {
			$active = 'active';

		} else {
			$active = '';
		}
		echo '<li class="nav-item nav-link '.$nav.'-item"><a href="'.$value[1].'" class="'.$active.'">'. $value[0] .'</a></li>';
	}
	echo '</ul>';
}

// Create NavigationLogIn
function createUserNavigation($Usernav) {

	if($Usernav == 'userNav') {

		$navArr = $GLOBALS['userNav2'];
		$className = 'user';

	}

	echo '<ul class="'.$className.'nav navbar-nav m-t-2">';
	foreach($navArr as $key => $value) {

		if($value[1] == 'Dashboard') {
			$active = 'active';

		} else {
			$active = '';
		}
		echo '<li class="nav-item nav-link"><a href="'.$value[1].'" class="'.$active.'">'. $value[0] .'</a></li>';
	}
	echo '</ul>';
}

?>
