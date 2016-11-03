<?php
	include('includes/configFront.php');
	include('includes/header.php');
?>

		<nav class="mainNav">
			<div class="wrap">
				<a class="" href="#">
	        <img alt="Brand" src="img/icons/burger.svg">
	      </a>
				<a class="" href="#">
					<img alt="Brand" src="img/icons/logo.svg">
				</a>
	      <a class="" href="#">
	        <img alt="Brand" src="img/icons/user.svg">
	      </a>
			</div>
	</nav>
<div class="container-fluid row">
	<form class="texture-form wrap" action="" method="post">
		<section class="texture col-md-7">
			<h1>SHOW ALL STORIES</h1>
			<!-- <h2>Take the poop test to find out...</h2>
			<?php textureRadios(); ?> -->
		</section>
		<section class="shade col-md-5">
			<h1>Carry on...</h1>
			<!-- <h2>Choose your color...</h2>
			<h1>shade</h1>
			<?php shadeRadios(); ?> -->
	 	</section>
		<input type="submit" name="submit" value="submit">
	</form>
	<section class="wrap test-results">

		<!-- <?php showTextureResult($texture, $shade); ?> -->

	</section>
</div>

<?php include('includes/footer.php')  ?>
