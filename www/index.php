<?php
	include('admin/includes/config.php');
	include('includes/header.php');
?>
<div class="container-fluid">
	<div class="row">

		<nav class="navbar navbar-light bg-faded">
		<?php createUserNavigation('userNav'); ?>
		</nav>
	</div>
	<div class="row">
		<div class="col-md-3 p-a-3">
			<h1>test</h1>
		</div>
		<div class="col-md-9 p-a-3">
			<div class="row">
				<nav class="breadcrumb">
				  <a class="breadcrumb-item" href="#">Home</a>
				  <span class="breadcrumb-item active" href="#">Dashboard</span>
				</nav>
			</div>
		</div>

	</div>
</div>
<?php include('includes/footer.php')  ?>
