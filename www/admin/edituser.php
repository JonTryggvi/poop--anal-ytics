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
				<form action="users.php?update=true" method="post">
					<div class="form-group">
						<label for="update_username">Username</label>
						<input type="text" class="form-control" name="update_userName" value="<?php echo $userInfo['userName']; ?>">
					</div>
					<div class="form-group">
						<label for="update_email">Email</label>
						<input type="email" class="form-control" name="update_email" value="<?php echo $userInfo['email']; ?>">
					</div>
					<div class="form-group">
						<label for="update_password">Password</label>
						<input type="email" class="form-control" name="update_password" value="<?php echo $userInfo['password']; ?>">
					</div>
					<div class="form-group">
						<label for="update_firstname">First name</label>
						<input type="text" class="form-control" name="update_firstName" value="<?php echo $userInfo['firstName']; ?>">
					</div>
					<div class="form-group">
						<label for="update_lastname">Last name</label>
						<input type="text" class="form-control" name="update_lastName" value="<?php echo $userInfo['lastName']; ?>">
					</div>
					<div class="form-group">
						<label for="update_roles_id">Roles id</label>
						<input type="text" class="form-control" name="update_roles_id" value="<?php echo $userInfo['roles_id']; ?>">
					</div>
					<input type="hidden" name="update_userid" value="<?php echo $userid ?>">
					<input type="submit" class="btn btn-primary btn-lg btn-block" value="Update User">
				</form>
			</div>
		</div>
	</div>
</div>
<?php include('includes/footer.php')  ?>
