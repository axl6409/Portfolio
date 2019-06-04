<?php require "toolbar.php" ?>

<?php require "config/logcheck.php" ?>	

<div class="home_head">

	<h1 class="home_title">Your Dashboard</h1>
	
</div>


<div class="home_posts">
	<h2 class="home_post_main_title">Your Last Posts</h2>
	<div class="home_post_main">
		<?php

		$blogPost = new Blog();
		$post = $blogPost->getLastPosts($dbconnect);

		foreach ($post as $articles) 
		{ 
		?>
			<div class="home_post_container">
				<img class="home_post_thumb" src="../<?php echo $articles['img']; ?>">
				<a class="home_post_overlay" href="post.php?id=<?php echo $articles['id']; ?>">
					<h2 class="home_post_text"><?php echo $articles['title']; ?></h2>
				</a>
			</div>

		<?php
		}
		?>
	</div>
</div>
<div class="home_messages">
	<h2 class="home_post_main_title">Your Last Messages</h2>
	<div class="home_post_main message_main">
		<?php

		$postMessages = new Messages();
		$messages = $postMessages->getLastMessages($dbconnect);

		?>



			<div class="message_table_head">
	            <div class="disp-in-block ">Name</div>
	            <div class="disp-in-block message_email">E-Mail</div>
	            <div class="disp-in-block message_subject">Subject</div>
	    	</div>

		<?php foreach ($messages as $mail) {
		?>			
			

			<div class="message_table_head">
	    		<div class="disp-in-block "><?php echo $mail['name']; ?></div>
	    		<div class="disp-in-block message_email"><?php echo $mail['email']; ?></div>
	    		<div class="disp-in-block message_subject"><?php echo $mail['subject']; ?></div>
	    	</div>

		<?php 
		} 
		?>
	</div>
</div>
<div class="clear-b"></div>
<?php require "post_category.php" ?>


<?php require "footer.php" ?>