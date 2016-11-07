<?php
	include('includes/config.php');
	loginCheck();
	include('includes/header.php');
?>

<div class="container-fluid">
	<div class="row">
		<nav class="navbar navbar-light bg-faded">
		<?php createNavigation('mainNav'); ?>
			<?php createNavigation('userNav'); ?>
			<?php echo $_SESSION['UsrNm']  ?>
		</nav>
	</div>

	<div class="row"  id="story">
		<div class="col-md-6 p-a-3">
			<div class="row">
				<nav class="breadcrumb">
				  <a class="breadcrumb-item" href="#">Home</a>
				  <span class="breadcrumb-item active" href="#">Everyone stories</span>
				</nav>

        <section class="wrap test-results">

          <?php getStories(); ?>

        

          <?php getAllComments(); ?>

        </section>



			</div>

		</div>

	</div>
</div>
<?php include('includes/footer.php')  ?>
