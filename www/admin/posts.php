<?php
	include('includes/config.php');
	loginCheck();
	include('includes/header.php');
	include('includes/nav.php');
?>
<div class="container-fluid">


	<div class="row"  id="story">
		<div class="col-md-7 p-a-3">


        <form action="posts.php" method="POST" role="tabpanel" >
          <div class="form-group" role="tabpanel">
            <label for="title">Title</label>
            <input type="text" class="form-control" name="title" value="">
          </div>
          <div class="form-group">
            <label for="content">Content</label>
							<textarea name="content" type="text"></textarea>
          </div>
          <input type="hidden" class="form-control" name="author" value="">
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
<?php include('includes/footer.php')  ?>
