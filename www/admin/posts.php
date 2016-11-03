<?php
	include('includes/config.php');
	loginCheck();
	include('includes/header.php');
?>
<div class="container-fluid">
	<div class="row">

		<nav class="navbar navbar-light bg-faded">
		<?php createNavigation('mainNav'); ?>
			<?php createNavigation('userNav'); ?>
			<?php echo $_SESSION['UsrNm']  ?>

		</nav>


	</div>

	<div class="row"  id="story">
		<div class="col-md-6 p-a-3">
			<div class="row">
				<nav class="breadcrumb">
				  <a class="breadcrumb-item" href="#">Home</a>
				  <span class="breadcrumb-item active" href="#">Stories</span>
				</nav>

        <form action="posts.php" method="POST" role="tabpanel" >
          <div class="form-group" role="tabpanel">
            <label for="title">Title</label>
            <input type="text" class="form-control" name="title" value="">
          </div>
          <div class="form-group">
            <label for="content">Content</label>
            <!-- <input type="text" class="form-control" name="content" value=""> -->
							<textarea name="content" type="text"></textarea>
          </div>
          <div class="form-group" role="tabpanel">
            <label for="author">Author</label>
            <input type="text" class="form-control" name="author" value="">
          </div>
          <div class="form-group">
            <input type="submit" class="btn btn-primary btn-lg btn-block">
          </div>
        </form>
					<?php if(isset($_GET['delete']) && $_GET['delete'] == 'true') : ?>

						<p>
						Your story has been deleted
						</p>
						<?php endif; ?>

				<div class="">
          <?php getPost(); ?>
				</div>

			</div>
		</div>

	</div>
</div>
<?php include('includes/footer.php')  ?>
