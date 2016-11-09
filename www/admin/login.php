<?php
	include('includes/config.php');

	include('includes/header.php');
		include('includes/topHeader.php');
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
		       <li class="nav-item login">
		         <a class="nav-link heading" data-toggle="tab" href="#signin" role="tab">Log in</a>
		       </li>
		       <li class="nav-item sign-up two">
		         <a class="nav-link heading" data-toggle="tab" href="#signup" role="tab">Sign Up</a>
		       </li>
		   <hr />
		 </ul>

			<div class="tab-content">
				<div class="tab-pane" id="signin" role="tabpanel">
					<form action="includes/authentication.php" method="POST" role="tabpanel">
						<div class="form-group" role="tabpanel">
							<label for="username">Username</label>
							<input type="text" class="form-control" name="username" value="">
						</div>
						<div class="form-group">
							<label for="password">Password</label>
							<input type="password" class="form-control" name="password" value="">
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
							<li class="nav-item sign-up two">
								<a class="nav-link heading" data-toggle="tab" href="#signup" role="tab">Sign Up</a>
							</li>
    			<hr />
				</ul>

				<div class="tab-content">
					<div class="tab-pane active" id="signin" role="tabpanel">
						<form action="includes/authentication.php" method="POST" role="tabpanel">
							<div class="form-group body-text" role="tabpanel">
								<label for="username"></label>
								<input type="text" class="form-control" name="username" placeholder="Username or Email" value="">
							</div>
							<div class="form-group">
								<label for="password"></label>
								<input type="password" class="form-control" name="password" placeholder="Password" value="">
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
							<label for="firstName"></label>
							<input type="text" class="form-control"  name="firstName" placeholder="First name" value="">
						</div>
						<div class="form-group">
							<label for="lastName"></label>
							<input type="text" class="form-control" name="lastName" placeholder="Last name" value="">
						</div>
						<div class="form-group">
							<label for="email"></label>
							<input type="text" class="form-control" name="email" placeholder="Email" value="">
						</div>
						<div class="form-group">
							<label for="create_username"></label>
							<input type="text" class="form-control"  required  name="create_username" placeholder="choose username" value="">
						</div>
						<div class="form-group">
							<label for="create_password"></label>
							<input type="password" class="form-control"  required  name="create_password" placeholder="choose password" value="">
						</div>
						<div class="form-group">
							<label for="verify_password"></label>
							<input type="password" class="form-control"  required  name="verify_password" placeholder="verify password" value="">
						</div>

						<div class="radio">
							<label for="gender_id"></label>
								<select name="gender_id" value="">
									<option>Select Gender</option>
									<?php $GenderSign->Gender(); ?>
								</select>
						</div>

						<div class="form-group">
							<label for="age"></label>
							<input type="number" class="form-control" name="age" placeholder="age" value="">
						</div>

						<div class="form-group">
							<label for="apps_countries_id"></label>
							<select name="apps_countries_id" value="" >
								<option>Select Country</option>
								<?php $countryLocation->countries(); ?>
							</select>
						</div>

						<div class="checkbox">
								<input class="" type="checkbox"><a class="terms" href="#"> I have read and understand the terms and conditions</a></input>
						</div>
						<input name="btn-signup ormSubmit" type="submit" class="btn btn-block btn-blue" value="Sign me up for this shit!">
					</form>
			</div>
		</div>

	</div><!-- end row -->

	</div><!-- end container -->



<?php include('includes/footer.php'); ?>
