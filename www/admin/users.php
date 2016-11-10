<?php
	include('includes/config.php');
	loginCheck();

	include('includes/header.php');
	include('includes/nav.php');

	//Check if parameter exists and is set to true
	if(isset($_GET['update']) && $_GET['update'] == 'true') {
		$userid = $_POST['update_userid'];
		$email = $_POST['update_email'];
		$pass = $_POST['update_password'];
		$userName = $_POST['update_userName'];
		$firstName = $_POST['update_firstName'];
		$lastName =  $_POST['update_lastName'];
		$roles_id = $_POST['update_roles_id'];

		$user = new User();
		$user->updateUser($userid, $firstName, $lastName, $userName, $email, $pass, $roles_id);
	}


?>
<div class="container-fluid">

		<div class="col-md-11 pull-right p-a-3">
			<div class="row">
				<div class="holdmetight">
					<?php if(isset($_GET['updated']) && $_GET['updated'] == 'true') : ?>
						<div class="alert alert-success" role="alert">
  						<strong>Well done!</strong> You successfully update the user.
						</div>
					<?php endif; ?>
					<?php if(isset($_GET['deleteuser']) && $_GET['deleteuser'] == 'true') : ?>
						<div class="alert alert-danger" role="alert">
  						<strong>Well done!</strong> You successfully deleted the user.
						</div>
					<?php endif; ?>
					<table class="table table-striped">
						<thead> <tr><th>First Name</th> <th>Last Name</th> <th>Username</th><th>Email</th><th>Action</th> </tr> </thead>
						<tbody>
						<?php showAllUsers(); ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
<?php include('includes/footer.php')  ?>
