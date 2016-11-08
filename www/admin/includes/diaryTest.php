
<div class="container-fluid row">
	<form id="test-diary-form" class="texture-form row row-no-gutter" action="" method="post">
		<section class="texture col-md-6">
			<h1>How Shitty is your day?</h1>
			<h2>Take the poop test to find out...</h2>
			<h1>texture</h1>
			<?php textureRadiosDiary(); ?>
		</section>
		<section class="shade col-md-4 pull-right">
			<h1>Carry on...</h1>
			<h2>Choose your color...</h2>
			<h1>shade</h1>
			<?php shadeRadiosDiary(); ?>


	 	</section>
		<section class="diary">
			<input class="diary-title" type="text" name="diary-title" value="">
			<input class="diary-content" type="text" name="diary-content" value="">
			<input class="diary-submit" id="formSubmitD" type="submit" name="submit-diary" value="submit">
		</section>


		<section class="col-md-12 row test-results ">
			<div class="col-md-8 centerme row">
				<?php
					if (isset($_POST['texture-diary']) && isset($_POST['shade-diary']) ) {
						showResultIconsDiary($texture, $shade);
					}
				?>

			<?php
				if (isset($_POST['texture-diary']) && isset($_POST['shade-diary']) ) {
					showTextureResultDiary($texture, $shade);
				}
			?>
			</div>
		</section>
	</form>

</div>
