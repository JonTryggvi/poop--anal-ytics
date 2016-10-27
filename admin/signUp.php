<?php

  include('includes/config.php');
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

 		<form action="classes/user.class.php" method="post" >
 			<div class="form-group">
 				<label for="username">First Name</label>
 				<input type="text" class="form-control" name="firstName" value="">
 			</div>
 			<div class="form-group">
 				<label for="password">Last Name</label>
 				<input type="password" class="form-control" name="lastName" value="">
 			</div>
      <div class="form-group">
 				<label for="email">Email</label>
 				<input type="text" class="form-control" name="email" value="">
 			</div>
      <div class="form-group">
 				<label for="">Username</label>
 				<input type="text" class="form-control" name="userName" value="">
 			</div>
      <div class="radio">
 				<label for="">Gender
   				<input type="radio" class="form-control" name="gender_id" value="">Male</input>
          <input type="radio" class="form-control" name="gender_id" value="">Female</input>
          <input type="radio" class="form-control" name="gender_id" value="">Others</input>
        </label>
    	</div>
      <div class="form-group">
        <label for="">Age</label>
        <input type="number" class="form-control" name="age" value="">
      </div>
      <div class="form-group">
 				<label for="">Profile picture</label>
 				<input type="image" class="form-control" name="profile_img" value="">
 			</div>


 			<div class="form-group">
 				<input type="submit" class="btn btn-primary btn-lg btn-block" value="Sign up">
 			</div>
 		</form>
 	</div>
 </div><!-- end row -->
 </div><!-- end container -->

<?php include('includes/footer.php'); ?>
