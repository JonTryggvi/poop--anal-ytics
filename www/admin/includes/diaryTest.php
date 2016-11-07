
<div class="container-fluid row">
	<form id="test-diary-form" class="texture-form row row-no-gutter" action="" method="post">
		<section class="texture col-md-6">
			<h1>How Shitty is your day?</h1>
			<h2>Take the poop test to find out...</h2>
			<h1>texture</h1>
			<?php textureRadios(); ?>
		</section>
		<section class="shade col-md-4 pull-right">
			<h1>Carry on...</h1>
			<h2>Choose your color...</h2>
			<h1>shade</h1>
			<?php shadeRadios(); ?>


	 	</section>
		<section>
			<input type="text" name="diary-title" value="">
			<input type="text" name="diary-content" value="">
			<input id="formSubmitD" type="submit" name="submit" value="submit">
		</section>


		<section class="col-md-12 row test-results ">
			<div class="col-md-8 centerme row">
				<?php
					if (isset($_POST['texture']) && isset($_POST['shade']) ) {
						showResultIcons($texture, $shade);
					}
				?>

			<?php
				if (isset($_POST['texture']) && isset($_POST['shade']) ) {
					showTextureResult($texture, $shade);
				}
			?>
			</div>
		</section>
	</form>

</div>
