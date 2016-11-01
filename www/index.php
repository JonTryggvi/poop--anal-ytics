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
	<form class="texture-form" action="" method="post">
		<section class="texture col-md-7">
			<h1>How Shitty is your day?</h1>
			<h2>Take the poop test to find out...</h2>
			<input type="radio" name="hard-lumps" value="1">
			<input type="radio" name="sausage-soft" value="2">
			<input type="radio" name="watery-lyquid" value="6">
			<input type="radio" name="soft-blob" value="7">
			<input type="radio" name="sausage-cracked" value="8">
			<input type="radio" name="fluffy" value="9">
			<input type="radio" name="soft-sticks" value="10">
			<input type="radio" name="empty" value="11">
		</section>
		<section class="shade col-md-5">
			<h1>Carry on...</h1>
			<h2>Choose your color...</h2>
			<h1>shade</h1>
			<input type="radio" name="brown" value="1">
			<input type="radio" name="green" value="2">
			<input type="radio" name="yellow" value="3">
			<input type="radio" name="black" value="4">
			<input type="radio" name="white" value="5">
			<input type="radio" name="red" value="6">
	 	</section>
		<input type="submit" name="name" value="subm" placeholder="subm">
	</form>
</div>
	<?php testTexture(); ?>
<?php include('includes/footer.php')  ?>
