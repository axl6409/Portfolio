<?php require "toolbar.php" ?>

<?php $id = $_GET['id'] ?>

<?php
$blogpost = new Blog();
$article = $blogpost->getPostById($dbconnect, $id);
?>

<div class="post_container">

	<div class="post_thumbnail" alt="<?php echo $article['title']; ?>" style="background-image: url('..<?php echo $article['img'] ?>')">
		<h1 class="post_main_title">
			<?php echo $article['title']; ?>
		</h1>
		
	</div>
	
	<div class="second_container">

		<div class="blog_post_content">
			<div>
				<?php echo $article['content']; ?>
			</div>
		</div>
	
	</div>

	<div></div>

</div>

<?php require "footer.php" ?>