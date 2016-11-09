<?php
  //Database
	include('database.class.php');
	$GLOBALS['gdb'] = Database::getInstance();

	include('user.class.php');
	include('post.class.php');

	include('userTest.class.php');
	include('diaryTest.class.php');

	include('stories.class.php');
	include('stats.class.php');



	// include('test.class.php');
?>
