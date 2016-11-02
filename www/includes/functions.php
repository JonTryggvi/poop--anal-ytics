<?php
	include('classes/classes.php');

// textures
$seperatedHard =  $_POST['seperated-hard'];
$sausageSmooth =  $_POST['sausage-shaped-smooth'];
$watery =				  $_POST['watery'];
$sausageLumpy =   $_POST['saugage-lumpy'];
$softBlob =			  $_POST['soft-blob'];
$sausageCracked =	$_POST['sausage-cracked'];
$fluffy = 				$_POST['fluffy'];
$softSticky = 		$_POST['soft-sticks'];

// Shade
$brown =  $_POST['1'];
$green =  $_POST['2'];
$yellow = $_POST['3'];
$black =  $_POST['4'];
$white =  $_POST['5'];
$red =    $_POST['6'];



$textureTest = new anonTest();
$textureTest->anonTextures($texture, $shade);


function textureRadios(){
  $test = new anonTest();
  $test->getTextures();
}

function shadeRadios(){
	$test = new anonTest();
	$test-> getShades();
}

 ?>
