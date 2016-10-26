<?php

session_start();
include('functions.php');

//Tjékkar hvort notandi sé skráður inn
function loginCheck() {
  if($_SESSION['isLoggedin'] == false) {
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
// 
// $cms = "Andromedia";
// $version = "0.1";
// $users = array(
//   array(
//     'Name' => 'Árni',
//     'Email' => 'arni@jarn.is',
//     'Username' => 'arnijarn',
//     'Password' => '123'
//   ), array(
//     'Name' => 'Kalla Bjarna',
//     'Email' => 'kalli@bjarni.is',
//     'Username' => 'kallibjarn',
//     'Password' => '1234'
//   ), array(
//     'Name' => 'David Halldorsson',
//     'Email' => 'david@david.is',
//     'Username' => 'david',
//     'Password' => '12345'
//   ), array(
//     'Name' => 'Mína',
//     'Email' => 'mina@mus.is',
//     'Username' => 'mina',
//     'Password' => '123456'
//   )
// );

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
  array('My Profile', 'profile.php')
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
