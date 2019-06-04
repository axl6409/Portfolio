<?php require "toolbar.php" ?>

<?php require "config/logcheck.php" ?>

<?php require "config/no_resend_works.php" ?>

<div class="works_main">
	
	<div class="works_title">
		<h1>Web Projects</h1>
	</div>
	
	<div>

		<div class="works_block_left disp-in-block">

			<form class="" method="post" enctype="multipart/form-data">
				<div class="edit_project_name">
					<p>Add a New Project</p>
					<input type="text" name="newproject" placeholder="Project Name">
				</div>
				
				<div class="edit_project_image">
                	<p class="redact_sidebar_title">Upload Featured Image</p>
                	<input type="hidden" name="MAX_FILE_SIZE" value="5000000000000">
                	<input id="images" name="image" type="file">
                </div>

				<div class="edit_project_url">
					<p>Project Url</p>
                	<input id="monURL" name="monURL" type="url" placeholder="http://www.example.com">
                </div>

				<input class="works_submit_bttn" type="submit" name="submit" value="Send">
				
				<?php

				if (isset($_POST['newproject']) && isset($_POST['monURL'])) {
					
					$editWork = new Works();
					$editWork->createWork($dbconnect, $_POST['newproject'], $_POST['monURL']);
				?>
					<p class="text_info">Work Posted !</p>

				<?php
				} else {
				?>

					<p class="text_alert"></p>

				<?php
				}
				?>

			</form>
		</div>
		<div class="works_block_right disp-in-block">

			<?php

			$getSkills = new Works();
			$works = $getSkills->selectWork($dbconnect);

			?>
			
			<div class="flex_row_space works_table_head">
	            <div class="disp-in-block works_table_head_1">Delete</div>
	            <div class="disp-in-block works_table_head_3">Name</div>
	            <div class="disp-in-block works_table_head_4">link</div>
	    	</div>
			
			<?php foreach ($works as $project) { ?>

			<div class="flex_row_space">
	    		<button class="disp-in-block"><a href="config/delete_works.php?id=<?php echo $project['id']; ?>">DEL</a></button>
	    		<div class="disp-in-block"><?php echo $project['title']; ?></div>
	    		<div class="disp-in-block"><?php echo $project['link']; ?></div>
	    	</div>
			
			<?php }
			?>
		</div>
	</div>
	
	<div class="clear-b edit_separate"></div>

	<div class="works_title">
		<h1>Graphics Design</h1>
	</div>
	
	<div>

		<div class="works_block_left disp-in-block">

			<form class="" method="post" enctype="multipart/form-data">
				<div class="edit_project_name">
					<p>Add a New Graphic Creation</p>
					<input type="text" name="newgraphic" placeholder="Image Name">
				</div>
				
				<div class="edit_project_image">
                	<p class="redact_sidebar_title">Upload the Image</p>
                	<input type="hidden" name="MAX_FILE_SIZE" value="400000000000">
                	<input accept=".png, .jpg, .jpeg, .svg" id="images" name="image" type="file">
                </div>

				<input class="works_submit_bttn" type="submit" name="submit" value="Send">
				
				<?php

				if (isset($_POST['newgraphic']) && isset($_FILES['image'])) {

					$imageTitle = $_POST['newgraphic']; 
					$imgTitle = addslashes( $imageTitle );
			
					$editImage = new Works();
					$editImage->createGraphic($dbconnect, $imgTitle);
				}
				?>

			</form>
		</div>
		<div class="works_block_right disp-in-block">

			<?php

			$getImages = new Works();
			$Images = $getImages->selectGraphic($dbconnect);

			?>
			
			<div class="flex_row_space works_table_head">
	            <div class="disp-in-block works_table_head_1">Delete</div>
	            <div class="disp-in-block works_table_head_3">Title</div>
	    	</div>
			
			<?php foreach ($Images as $img) { ?>

			<div class="flex_row_space">
	    		<button class="disp-in-block"><a href="config/delete_graphics.php?id=<?php echo $img['id']; ?>">DEL</a></button>
	    		<button class="disp-in-block">
	    			<a href="image_view.php?id=<?php echo $img['id']; ?>">VIEW</a>
	    		</button>
	    		<h2 class="disp-in-block"><?php echo $img['title']; ?></h2>
	    	</div>
			
			<?php }
			?>
		</div>
	</div>
</div>



<?php require "footer.php" ?>