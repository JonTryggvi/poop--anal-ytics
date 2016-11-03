<?php
	include('classes/classes.php');

	if(isset($_POST['submit']) and !empty($_POST['submit'])){
		if (isset($_POST['texture']) && isset($_POST['shade']) ) {
			// textures
			$texture =  $_POST['texture'];
			// Shade
			$shade =  $_POST['shade'];

			$textureTest = new anonTest();
			$textureTest->anonTextures($texture, $shade);

			function showTextureResult($texture, $shade){
				$textureResult = new anonTest();
				$textureResult->textureResult($texture, $shade);
			}
			// function showShadeResult($shade) {
			// 	$shadeResult = new anonTest();
			// 	$shadeResult->shadeResult($shade);
			// }
		}
	}


	function textureRadios(){
			$test = new anonTest();
			$test->getTextures();
	}

	function shadeRadios(){
		$test = new anonTest();
		$test-> getShades();
	}


?>
