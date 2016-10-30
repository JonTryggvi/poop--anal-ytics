<?php
	include('includes/config.php');

	include('includes/header.php');
?>
<div class="container-fluid">
	<div class="row tab-content"   >
		<div class="login-form center-block tab-pane active in" >
		<?php if(isset($_GET['login']) and $_GET['login'] == 'denied' || $_GET['login'] == 'empty' ) : ?>

			<div class="alert alert-danger" role="alert">
				<?php if($_GET['login'] == 'denied') : ?>

					<?php echo LOGINERROR; ?>

				<?php elseif($_GET['login'] == 'empty') : ?>

					<?php echo LOGINEMPTY; ?>

				<?php endif; ?>

			</div>

		<?php endif; ?>



		<ul class="nav nav-tabs" role="tablist">
		  <li class="nav-item">
		    <a class="nav-link active" data-toggle="tab" href="#signin" role="tab">Sign In</a>
		  </li>
		  <li class="nav-item">
		    <a class="nav-link" data-toggle="tab" href="#signup" role="tab">Sign Up</a>
		  </li>
		</ul>

		<div class="tab-content">
		  <div class="tab-pane active" id="signin" role="tabpanel">
				<form action="includes/authentication.php" method="POST" role="tabpanel" id="signin">
					<div class="form-group" role="tabpanel">
						<label for="username">Username</label>
						<input type="text" class="form-control" name="username" value="disa">
					</div>
					<div class="form-group">
						<label for="password">Password</label>
						<input type="password" class="form-control" name="password" value="kuka">
					</div>
					<div class="form-group">
						<input type="submit" class="btn btn-primary btn-lg btn-block" value="Login">
					</div>
				</form>
			</div>
		  <div class="tab-pane" id="signup" role="tabpanel">
				<form action="dashboard.php" method="POST" role="tabpanel" id="signup">
					<div class="form-group">
						<label for="username">First Name</label>
						<input type="text" class="form-control" name="firstName" value="">
					</div>
					<div class="form-group">
						<label for="lastName">Last Name</label>
						<input type="text" class="form-control" name="lastName" value="">
					</div>
					<div class="form-group">
						<label for="email">Email</label>
						<input type="text" class="form-control" name="email" value="">
					</div>
					<div class="form-group">
						<label for="create_username">Username</label>
						<input type="text" class="form-control" name="create_username" value="">
					</div>
					<div class="form-group">
						<label for="create_password">Password</label>
						<input type="password" class="form-control" name="create_password" value="">
					</div>
					<div class="radio">
						<label for="gender_id">Gender
							<input type="number" class="form-control" name="gender_id" value="">
						</label>
					</div>
					<div class="form-group">
						<label for="age">Age</label>
						<input type="number" class="form-control" name="age" value="">
					</div>
					<div class="form-group">
						<label for="profile_img">Profile picture</label>
						<input type="image" class="form-control" name="profile_img" value="">
					</div>
					<div class="form-group">
						<label for="roles_id">Roles</label>
						<input type="text" class="form-control" name="roles_id" value="">
					</div>
					<div class="form-group">
						<label for="user_date">Date</label>
						<input type="text" class="form-control" name="user_date" value="">
					</div>
					<div class="form-group">
						<label for="apps_countries_id">counrties</label>
						<input type="number" class="form-control" name="apps_countries_id" value="">
					</div>
					<input name="btn-signup" type="submit" class="btn btn-primary btn-lg btn-block" value="Sign Up">
				</form>
			</div>
		</div>
	</div>


</div><!-- end row -->

</div><!-- end container -->



<?php include('includes/footer.php'); ?>
