<?php
require "blog_header.php";
include_once "../classes/Blog.php";
?>


<?php $Cat = $_GET['id'] ?>

	<section class="blog_section_articles">
		
		<div class="articles_blog">
			<h2 class="articles_blog_title">The lasts posts</h2>
			<?php 

			$blogPosts = new Blog();
			$blogArticles = $blogPosts->getPostByCat($dbconnect, $Cat);

			foreach ($blogArticles as $post) { ?>

			<div class="blog_post_container">
				<h2 class="blog_post_title"><?php echo $post['title']; ?></h2>
				<div class="blog_post_text">
					<?php echo $post['content']; ?>
				</div>
				<a class="blog_post_link" href="post_view.php?id=<?php echo $post['id']; ?>"> Reed More -->
				</a>
			</div>

			<?php
			}
			?>

		</div>
		<?php require "category_section.php" ?>


	</section>
</div>

<?php require "blog_footer.php" ?>