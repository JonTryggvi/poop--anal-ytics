<?php
	include('includes/config.php');
	loginCheck();
	include('includes/header.php');
	include('includes/nav.php');
?>


<div class="container-fluid">

	<div class="row" id="Allstory">
		<div class="col-lg-12 p-a-3 " >

				<form action="stories.php" method="GET">
				   <input type="text" name="query" />
				   <input type="submit" value="Search" />
				</form>

			<div class="row" >

				<?php
          $posts = getPosts();
            if($posts) {
              foreach ($posts as $post) {
         				check($post['id']); ?>

				<div class="user_post_stories" id="stories">

						<div class="user_post_title"><h3><?php echo $post['title'] ?></h3><p><?php echo $post['date'] ?></p></div>

            <div class="user_post_content"><img class="user_post_img" src="" /><p><?php echo $post['content'] ?></p></div>

            <div class="user_post_info"><p>-<?php echo $post['author'] ?></p></div><div class="user_post_likes">
							<div class="fb-share-button" data-href="http://localhost:8888/admin/stories.php" data-layout="button" data-size="large" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse">Share</a></div>
          </div>
				</div>
					<div class="commentbox" id="stories">
						<h3 class="demo" >Comments</h3>
						<div class="users_comments">

	          <?php
	            $comments = getPostComments($post['id']);
	            if($comments) {
	              foreach ($comments as $comment) {
									checkComment($comment['commentsid']);
									?>
							<div class="user_comment " >
			          <div class="user_comment_info"><h4><?php echo $comment['author'] ?></h4></div>
			          <div class="user_comment_content"><p><?php echo $comment['content']; ?></p></div>
			          <div class="user_comment_date"><?php echo $comment['time'] ?></div>
							</div>
		          <?php
		                }
		              }
		          ?>
						</div>
					</div>
          <div class="user_comment_box  p-a-3">
            <form action="stories.php" method="POST">
								<textarea name="content" type="text" placeholder="Your shitty comment.." ></textarea>
                <input type="hidden" name="post_id" value="<?php echo $post['id'] ?>" />
                <input type="submit" class="btn btn-sm btn-alert" name="commentSubmit" value="Comment">
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
