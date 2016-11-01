<?php
	include('admin/includes/config.php');
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
	<section class="texture col-md-7">
		<h1>How Shitty is your day?</h1>
		<h2>Take the poop test to find out...</h2>
		<h1>Texture</h1>
		<form class="texture-form" action="" method="post">
			<input type="button" name="hard-lumps" value="1">
			<input type="button" name="sausage-soft" value="2">
			<input type="button" name="watery-lyquid" value="6">
			<input type="button" name="soft-blob" value="7">
			<input type="button" name="sausage-cracked" value="8">
			<input type="button" name="fluffy" value="9">
			<input type="button" name="soft-sticks" value="10">
			<input type="button" name="empty" value="11">
		</form>
	</section>
	<section class="shade col-md-5">
		<h1>Carry on...</h1>
		<h2>Choose your color...</h2>
		<h1>shade</h1>
		<form class="texture-form" action="" method="post">
			<input type="button" name="brown" value="1">
			<input type="button" name="green" value="2">
			<input type="button" name="yellow" value="3">
			<input type="button" name="black" value="4">
			<input type="button" name="white" value="5">
			<input type="button" name="red" value="6">
		</form>
	</section>
</div>

<?php include('includes/footer.php')  ?>
