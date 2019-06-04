	
<?php require "blog_header.php" ?>

<?php $id = $_GET['id'] ?>

<?php
$blogpost = new Blog();
$article = $blogpost->getPostById($dbconnect, $id);
?>

<div>

	<div class="post_head" style="background-image: url('..<?php echo $article['img'] ?>')">
		
	</div>


	<div class="post_content">
		<h1 class="post_title">
			<?php echo $article['title']; ?>
		</h1>
		<div>
			<?php echo $article['content']; ?>
		</div>
	</div>

	<div></div>

</div>

<?php require "blog_footer.php" ?>