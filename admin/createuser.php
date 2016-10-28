<?php
  include('includes/config.php');
  loginCheck();
  include('includes/header.php');

 ?>
 <div class="container">
 	<div class="row">
 		<div class="login-form center-block">
 		<?php if(isset($_GET['login']) and $_GET['login'] == 'denied' || $_GET['login'] == 'empty' ) : ?>

 			<div class="alert alert-danger" role="alert">
 				<?php if($_GET['login'] == 'denied') : ?>

 					<?php echo LOGINERROR; ?>

 				<?php elseif($_GET['login'] == 'empty') : ?>

 					<?php echo LOGINEMPTY; ?>

 				<?php endif; ?>

 			</div>

 		<?php endif; ?>

 		<h1 >Signup</h1>

 		<form action="createuser.php" method="post" >
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

 			<div class="form-group">
 				<input type="submit" class="btn btn-primary btn-lg btn-block" value="Sign up">
 			</div>

 		</form>
 	</div>
 </div><!-- end row -->
 </div><!-- end container -->

<?php include('includes/footer.php'); ?>
