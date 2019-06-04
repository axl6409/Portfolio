<?php require "../config.php" ?>
<?php require "../classes/Admin.php" ?>
<?php require "../classes/Blog.php" ?>

<?php $id = $_GET['id'] ?>

<?php
$blogpost = new Blog();
$article = $blogpost->getPostById($dbconnect, $id);
?>


<!DOCTYPE html>

<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no" />
		<title>My Blog</title>
		<meta name="description" content="<?php echo $article['title']; ?>" />
		<link rel="stylesheet" type="text/css" href="../css/custom/public/global.css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
	</head>

	<body class="blog_main">

	<header class="blog_section_head">

		<h1 class="glitch section_head_title" data-text="WALL">WALL</h1>
		<p class="section_head_sub">Hope you can find my artilces and tutorials great ;)</p>
	</header>

	<div class="post_container">

		<div class="post_thumbnail" style="background-image: url('..<?php echo $article['img'] ?>')">
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

<?php require "blog_footer.php" ?>