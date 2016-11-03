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

	<section class="wrap test-results">

		<?php getStories(); ?>

	</section>
</div>

<?php include('includes/footer.php')  ?>
