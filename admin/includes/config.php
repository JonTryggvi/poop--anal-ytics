<?php

session_start();
include('functions.php');

//Tjékkar hvort notandi sé skráður inn
function loginCheck() {
  if($_SESSION['isLoggedin'] == true) {
    header('Location: login.php');
  }
}

if($_GET['logout'] == 'true') {
  $_SESSION['isLoggedin'] = false;

  // remove all session variables
  session_unset();

  // destroy the session
  session_destroy();
}

// Constants
define('LOGINERROR', 'Username or Password is wrong!', false);
define('LOGINEMPTY', 'Username or Password is empty!', false);

$navItems = array(
  array('Dashboard', 'index.php'),
  array('Users', 'users.php'),
  array('Pages', 'pages.php'),
  array('Posts', 'posts.php'),
  array('Files', 'files.php'),
  array('login', 'login.php')
);
$userNavItems = array(
  array('Logout', 'login.php?logout=true'),
  array('My Daiarya', 'profile.php')
);
// Create Navigation
function createNavigation($nav) {

	if($nav == 'mainNav') {

		$navArr = $GLOBALS['navItems'];
		$className = 'main';

	} elseif($nav == 'userNav') {

		$navArr = $GLOBALS['userNavItems'];
		$className = 'user';

	}

	echo '<ul class="'.$className.'-nav nav nav-pills nav-stacked m-t-2">';
	foreach($navArr as $key => $value) {
		if($value[0] == 'Dashboard') {
			$active = 'active';
		} else {
			$active = '';
		}
		echo '<li class="nav-item nav-link"><a href="'.$value[1].'" class="'.$active.'">'. $value[0] .'</a></li>';
	}
	echo '</ul>';
}



 ?>
