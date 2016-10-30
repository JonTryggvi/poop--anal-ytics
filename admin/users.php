<?php
	include('includes/config.php');
	loginCheck();

	include('includes/header.php');

	//Check if parameter exists and is set to true
	if(isset($_GET['update']) && $_GET['update'] == 'true') {
		$email = $_POST['email'];
		$pass = $_POST['create_password'];
		$userName = $_POST['create_username'];
		$firstName = $_POST['firstName'];
		$lastName = $_POST['lastName'];
		$user_date = $_POST['user_date'];
		$age = $_POST['age'];
		$profile_img = 'test.jpg';
		$roles_id = $_POST['roles_id'];
		$gender_id = $_POST['gender_id'];
		$apps_countries_id = $_POST['apps_countries_id'];

		$user = new User();
		$user->updateUser($userid, $firstname, $lastname, $username, $password, $email, $status);
	}

	//Check if parameter exists and is set to true
	if(isset($_GET['delete']) && $_GET['delete'] == 'true') {
		$userid = $_GET['userid'];

		$user = new User();
		$user->deleteUser($userid);
	}
?>
<div class="container-fluid">
	<div class="row">

		<nav class="navbar navbar-light bg-faded">
		<?php createNavigation('mainNav'); ?>
			<?php createNavigation('userNav'); ?>
			<?php echo $_SESSION['UsrNm']  ?>

		</nav>
	</div>
	<div class="row">
		<div class="col-md-3 p-a-3">


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
