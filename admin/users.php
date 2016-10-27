<?php
	include('includes/config.php');
	loginCheck();

	include('includes/header.php');

	//Check if parameter exists and is set to true
	// if(isset($_GET['update']) && $_GET['update'] == 'true') {
	// 	$userid = $_POST['update_userid'];
	// 	$firstName = $_POST['update_firstname'];
	// 	$lastName = $_POST['update_lastname'];
	// 	$username = $_POST['update_username'];
	// 	$email = $_POST['update_email'];
	// 	$pass = $_POST['update_password'];
	//
	// 	$user = new User();
	// 	$user->updateUser($firstName, $lastName, $username, $password, $email);
	// }

	//Check if parameter exists and is set to true
	// if(isset($_GET['delete']) && $_GET['delete'] == 'true') {
	// 	$userid = $_GET['userid'];
	//
	// 	$user = new User();
	// 	$user->deleteUser($userid);
	// }
?>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-3 p-a-3">

			<h4><?php echo $cms.' - '.$version; ?></h4>
			<div class="row">
				<div class="input-group m-t-2">
			      <input type="text" class="form-control" placeholder="Search for...">
			      <span class="input-group-btn">
			        <button class="btn btn-secondary" type="button">Go!</button>
			      </span>

			    </div>
			</div>
			<div class="row">
				<?php createNavigation('mainNav'); ?>
			</div>
			<div class="row">
				<?php createNavigation('userNav'); ?>
			</div>
		</div>
		<div class="col-md-9 p-a-3">
			<div class="row">
				<nav class="breadcrumb">
				  <a class="breadcrumb-item" href="#">Home</a>
				  <span class="breadcrumb-item active" href="#">Dashboard</span>
					<a class="btn btn-primary btn-sm pull-right" style="float: right;" href="createuser.php">Create User</a>
				</nav>
				<div class="">
					<?php if(isset($_GET['updated']) && $_GET['updated'] == 'true') : ?>
						<div class="alert alert-success" role="alert">
  						<strong>Well done!</strong> You successfully update the user.
						</div>
					<?php endif; ?>
					<?php if(isset($_GET['delete']) && $_GET['delete'] == 'true') : ?>
						<div class="alert alert-danger" role="alert">
  						<strong>Well done!</strong> You successfully deleted the user.
						</div>
					<?php endif; ?>
					<table class="table table-striped">
						<thead> <tr> <th>#</th> <th>First Name</th> <th>Last Name</th> <th>Username</th><th>Email</th><th>Status</th> <th>Action</th> </tr> </thead>
						<tbody>
							<?php getUsers(); ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
<?php include('includes/footer.php')  ?>
