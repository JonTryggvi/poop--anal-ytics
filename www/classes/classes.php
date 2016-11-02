<?php
  //Database
	include('./admin/classes/database.class.php');
	$GLOBALS['gdb'] = Database::getInstance();

	include('anonTest.class.php');
	// include('test.class.php');
?>
