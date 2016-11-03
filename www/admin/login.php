<?php
	include('includes/config.php');
	// signUpCheck();
	include('includes/header.php');



?>
	<div class="container ">
		<div class="row tab-content">
			<div class="login-form center-block tab-pane active in" >
			<?php if(isset($_GET['login']) and $_GET['login'] == 'denied' || $_GET['login'] == 'empty' ) : ?>

				<div class="alert alert-danger" role="alert">
					<?php if($_GET['login'] == 'denied') : ?>

						<?php echo LOGINERROR; ?>

					<?php elseif($_GET['login'] == 'empty') : ?>

						<?php echo LOGINEMPTY; ?>

					<?php endif; ?>
				<?php endif; ?>

				</div>

		<?php
		 $GenderSign  = new User();
		 $countryLocation  = new User();


		 if(isset($_POST['age'])) {

		 ?>

			<ul class="nav nav-pills" role="tablist">
			  <li class="nav-item heading-text">
			    <a class="nav-link" data-toggle="tab" href="#signin" role="tab">Log in</a>
			  </li>
			  <li class="nav-item">
			    <a class="nav-link active" data-toggle="tab" href="#signup" role="tab">Sign Up</a>
			  </li>
			</ul>

			<div class="tab-content">
				<div class="tab-pane" id="signin" role="tabpanel">
					<form action="includes/authentication.php" method="POST" role="tabpanel">
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
				<div class="tab-pane active" id="signup" role="tabpanel">

			<?php }
			else {
				?>

				<ul class="nav nav-pills" role="tablist">
							<li class="nav-item login">
								<a class="nav-link heading" data-toggle="tab" href="#signin" role="tab">Log in</a>
							</li>
							<li class="nav-item sign-up">
								<a class="nav-link heading" data-toggle="tab" href="#signup" role="tab">Sign Up</a>
							</li>
				</ul>

				<div class="tab-content">
					<div class="tab-pane active" id="signin" role="tabpanel">
						<form action="includes/authentication.php" method="POST" role="tabpanel">
							<div class="form-group body-text" role="tabpanel">
								<label for="username">Username</label>
								<input type="text" class="form-control" name="username" placeholder="Username or Email" value="disa">
							</div>
							<div class="form-group">
								<label for="password">Password</label>
								<input type="password" class="form-control" name="password" placeholder="Password" value="kuka">
							</div>
							<div class="form-group">
								<input type="submit" class="btn btn-block btn-blue" value="Log me into this shit!">
							</div>
						</form>
					</div>
					<div class="tab-pane" id="signup" role="tabpanel">
			<?php
					}
			?>
					<form action="" method="POST" role="tabpanel" >
						<div class="form-group">
							<label for="firstName">First Name</label>
							<input type="text" class="form-control"  name="firstName" placeholder="First name" value="">
						</div>
						<div class="form-group">
							<label for="lastName">Last Name</label>
							<input type="text" class="form-control" name="lastName" placeholder="Last name" value="">
						</div>
						<div class="form-group">
							<label for="email">Email</label>
							<input type="text" class="form-control" name="email" placeholder="Email" value="">
						</div>
						<div class="form-group">
							<label for="create_username">Username</label>
							<input type="text" class="form-control"  required  name="create_username" placeholder="choose username" value="">
						</div>
						<div class="form-group">
							<label for="create_password">Password</label>
							<input type="password" class="form-control"  required  name="create_password" placeholder="choose password" value="">
						</div>
						<div class="form-group">
							<label for="verify_password">Verify Password</label>
							<input type="password" class="form-control"  required  name="verify_password" placeholder="verify password" value="">
						</div>
						<div class="radio">
							<label for="gender_id">Gender</label>
								<select name="gender_id">
									<?php $GenderSign->Gender(); ?>
								</select>
						</div>
						<div class="form-group">
							<label for="age">Age</label>
							<input type="number" class="form-control" name="age" value="">
						</div>
						<!-- <div class="form-group">
							<label for="profile_img">Profile picture</label>
							<input type="image" class="form-control" name="profile_img" value="">
						</div> -->
						<!-- <div class="form-group">
							<label for="roles_id">Roles</label>
							<input type="text" class="form-control" name="roles_id" value="">
						</div> -->
						<!-- <div class="form-group">
							<label for="user_date">Date</label>
							<input type="text" class="form-control" name="user_date" value="">
						</div> -->
						<div class="form-group">
							<label for="apps_countries_id">Countries</label>
							<select name="apps_countries_id" value="" >
								<?php $countryLocation->countries(); ?>
							</select>
						</div>
						<div class="checkbox">
							<label>
								 <input class="checkbox" type="checkbox"><a href="#">I have read and understand the terms and conditions</a></input>
							</label>
						</div>
						<input name="btn-signup ormSubmit" type="submit" class="btn btn-block btn-blue" value="Sign me up for this shit!">
					</form>
				</div>
			</div>
		</div>

	</div><!-- end row -->

	</div><!-- end container -->



<?php include('includes/footer.php'); ?>
