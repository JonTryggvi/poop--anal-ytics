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
				  <span class="breadcrumb-item active" href="#">Everyone stories</span>
				</nav>

        <section class="wrap test-results">

        </section>
					<?php
            $posts = getPosts();
              if($posts) {
                foreach ($posts as $post) {
           				check($post['id']); ?>

          <div class="user_post post-<?php echo $post['title'] ?>">
            <div class="user_post_info"><img class="user_post_img" src="" /><h3><?php echo $post['content'] ?></h3></div>
            <div class="user_post_content"><p><?php echo $post['author'] ?></p></div><div class="user_post_likes"><?php echo $post['title'] ?>
            <div class="user_post_date"><?php echo $post['date'] ?></div>
          </div>
					<div class="commentbox">
						<p class="demo" >Comments</p>
						<div class="">
	          <?php

	            $comments = getPostComments($post['id']);
	            if($comments) {
	              foreach ($comments as $comment) {
									checkComment($comment['commentsid']);
									?>
			          <div class="user_comment_info"><h4><?php echo $comment['author'] ?></h4></div>
			          <div class="user_comment_content"><p><?php echo $comment['content']; ?></p></div>
			          <div class="user_comment_date"><?php echo $comment['time'] ?></div>

		          <?php
		                }
		              }
		          ?>
						</div>
					</div>
          <div class="user_comment">
            <form action="stories.php" method="POST">
              <div class="form-control">
                <!-- <input type="text" name="content" placeholder="Skrifa komment.." /> -->
								<textarea name="content" type="text" placeholder="Skrifa komment.." ></textarea>
                <input type="hidden" name="post_id" value="<?php echo $post['id'] ?>" />
                <input type="submit" class="btn btn-sm btn-alert" name="commentSubmit" value="Kommenta">
              </div>
            </form>
          </div>
          <?php
                }
              }
          ?>
			</div>
		</div>
	</div>
</div>
<?php include('includes/footer.php')  ?>
