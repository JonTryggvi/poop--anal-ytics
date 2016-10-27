<?php
	include('includes/config.php');
	loginCheck();

	include('includes/header.php');

	if(isset($_GET['edit']) && $_GET['edit'] == 'true') {
		$userid = $_GET['userid'];
		$user = new User();
		$userInfo = $user->getUserById($userid);
	}

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
				  <span class="breadcrumb-item active" href="#">Edit User</span>
					<a class="btn btn-primary btn-sm pull-right" style="float: right;" href="users.php">Back to list</a>
				</nav>
				<form action="users.php?update=true" method="post">
					<div class="form-group">
						<label for="update_username">Username</label>
						<input type="text" class="form-control" name="update_username" value="<?php echo $userInfo['username']; ?>">
					</div>
					<div class="form-group">
						<label for="update_password">Password</label>
						<input type="password" class="form-control" name="update_password" value="">
					</div>
					<div class="form-group">
						<label for="update_email">Email</label>
						<input type="email" class="form-control" name="update_email" value="<?php echo $userInfo['email']; ?>">
					</div>
					<div class="form-group">
						<label for="update_firstname">First name</label>
						<input type="text" class="form-control" name="update_firstname" value="<?php echo $userInfo['firstname']; ?>">
					</div>
					<div class="form-group">
						<label for="update_lastname">Last name</label>
						<input type="text" class="form-control" name="update_lastname" value="<?php echo $userInfo['lastname']; ?>">
					</div>
					<fieldset class="form-group">
				    <div class="form-check">
				      <label class="form-check-label">
				        <input type="radio" class="form-check-input" name="update_status" value="1">
				        Active
				      </label>
				    </div>
				    <div class="form-check">
				    <label class="form-check-label">
				        <input type="radio" class="form-check-input" name="update_status" value="0">
				        Inactive
				      </label>
				    </div>
  				</fieldset>
					<input type="hidden" name="update_userid" value="<?php echo $userid ?>">
					<input type="submit" class="btn btn-primary btn-lg btn-block" value="Update User">
				</form>
			</div>
		</div>
	</div>
</div>
<?php include('includes/footer.php')  ?>
