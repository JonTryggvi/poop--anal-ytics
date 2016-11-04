
<div class="container-fluid row">
	<form id="test-form" class="texture-form wrap" action="" method="post">
		<section class="texture col-md-7">
			<h1>How Shitty is your day?</h1>
			<h2>Take the poop test to find out...</h2>
			<?php textureRadios(); ?>
		</section>
		<section class="shade col-md-5">
			<h1>Carry on...</h1>
			<h2>Choose your color...</h2>
			<h1>shade</h1>
			<?php shadeRadios(); ?>
	 	</section>
	
		<section class="wrap test-results">
			<div>
				<?php
					if (isset($_POST['texture']) && isset($_POST['shade']) ) {
						showResultIcons($texture, $shade);
					}
				?>
			</div>
			<?php
				if (isset($_POST['texture']) && isset($_POST['shade']) ) {
					showTextureResult($texture, $shade);
				}
			?>

		</section>
	</form>

</div>
