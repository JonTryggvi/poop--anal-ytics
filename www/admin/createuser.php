<?php
	include('includes/config.php');
	loginCheck();

	include('includes/header.php');

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
				  <a class="breadcrumb-item" href="dashboard.php">Home</a>
					<a class="breadcrumb-item" href="users.php">Users</a>
				  <span class="breadcrumb-item active" href="#">Create User</span>
					<a class="btn btn-primary btn-sm pull-right" style="float: right;" href="users.php">Back to list</a>
				</nav>
				<!-- <form action="createuser.php" method="post" >
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
					<input type="submit" class="btn btn-primary btn-lg btn-block" value="Create User">
				</form> -->
			</div>
		</div>
	</div>
</div>
<?php include('includes/footer.php')  ?>
