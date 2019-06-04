<?php require "header.php" ?>
<div class="background_projects">

	<div class="noiseContain">
	
		<h1 class="projects_main_title">My Projects</h1>
		<p class="projects_main_text"><span>All my projects of Web Sites and Web development, but also my graphics réalisations.</span></p>
		<div class="projects_main">	
			<?php
				$worksDB = new Works();
				$works = $worksDB->selectWork($dbconnect);
			?>
			
			<div class="block">
			
				<div class="projects_container">
					<h2 class="glitch projects_title" data-text="Web Development">Web Development</h2>
					<?php foreach ($works as $work) { ?>

					<div class="project_post_container">
						<img alt="<?php $work['title']; ?>" class="project_post_thumb" src="<?php echo $work['img']; ?>">
						<a class="project_post_overlay" href="<?php echo $work['link']; ?>">
							<h3 class="project_post_text"><?php echo $work['title']; ?></h3>
						</a>
					</div>

					<?php } ?>

				</div>
			</div>
			

			<?php
				$ImageDB = new Works();
				$images = $ImageDB->selectGraphic($dbconnect);
			?>
			<div class="block">
				<div class="projects_container">
					<h2 class="glitch projects_title" data-text="Graphics & Design">Graphics & Design</h2>
					<?php foreach ($images as $img) { ?>

					<div class="project_post_container">
						<img alt="<?php $img['title']; ?>" class="project_post_thumb" src="<?php echo $img['img']; ?>">
						<a class="project_post_overlay" href="projects_view.php?id=<?php echo $img['id']; ?>">
							<h3 class="project_post_text"><?php echo $img['title']; ?></h3>
						</a>
					</div>

					<?php } ?>

				</div>
			</div>
		</div>

	</div>
</div>
<?php require "footer.php" ?>