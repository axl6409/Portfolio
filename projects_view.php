<?php require "header.php" ?>

<?php

$id = $_GET['id'];

?>

<div class="background_projects">

	<div class="noiseContain">

		<div class="projects_main">	
			
			<?php
			$ImageDB = new Works();
			$images = $ImageDB->selectGraphicById($dbconnect, $id);
			?>
			<div class="block_view">
				<div class="projects_container_view">
					<h2 class="glitch projects_title_view" data-text="<?php echo $images['title']; ?>"><?php echo $images['title']; ?></h2>

					<div class="project_post_container">
						<img alt="<?php $images['title']; ?>" class="project_post_thumb" src="<?php echo $images['img']; ?>">
					</div>
				</div>
			</div>

		</div>
		
	</div>
</div>
<?php require "footer.php" ?>