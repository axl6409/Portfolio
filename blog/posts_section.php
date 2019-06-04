
		
	<div class="articles_blog">
		<h2 class="articles_blog_title">The lasts posts</h2>
		<?php 

		$blogPosts = new Blog();
		$blogArticles = $blogPosts->getPosts($dbconnect);

		foreach ($blogArticles as $articles) { ?>

		<div class="blog_post_container">
			<h2 class="blog_post_title"><?php echo $articles['title']; ?></h2>
			<div class="blog_post_text">
				<?php echo $articles['content']; ?>
			</div>
			<a class="blog_post_link" href="post_view.php?id=<?php echo $articles['id']; ?>"> Reed More -->
			</a>
		</div>

		<?php } ?>	
	</div>