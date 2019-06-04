<?php require "toolbar.php" ?>

<?php require "config/logcheck.php" ?>

<?php require "config/no_resend_skill.php" ?>

<div class="skills_main">
	
	<div class="skills_title">
		<h1>Edit Skills, Plateform & Software Experience</h1>
	</div>
	
	<div>

		<div class="skills_block_left disp-in-block">

			<form class="" method="post">
				<p>Add a New Skill</p>
				<input type="text" name="newskill" placeholder="Skill">
				<input type="number" name="skillxp" min="1" max="99">
				<input type="submit" name="submit" value="Send">
			</form>
			<?php
			if(isset($_POST['newskill'])) {
				$editSkill = new Skills();
				$editSkill->createSkill($dbconnect, $_POST['newskill'], $_POST['skillxp']);
			}
			?>


		</div>

		<div class="skills_block_right disp-in-block">

			<?php

			$getSkills = new Skills();
			$skills = $getSkills->selectSkill($dbconnect);

			?>
			
			<div class="flex_row_space skills_table_head">
	            <div class="disp-in-block">Delete</div>
	            <div class="disp-in-block ">Name</div>
	            <div class="disp-in-block ">XP</div>
	    	</div>
			
			<?php foreach ($skills as $skill) { ?>

			<div class="flex_row_space">
	    		<button class="disp-in-block"><a href="config/delete_skill.php?id=<?php echo $skill['id']; ?>">DEL</a></button>
	    		<div class="disp-in-block"><?php echo $skill['type']; ?></div>
	    		<div class="disp-in-block"><?php echo $skill['experience']; ?>%</div>
	    	</div>
			
			<?php } ?>

		</div>

		<div class="clear-b edit_separate"></div>

		<div class="skills_block_left disp-in-block">

			<form class="" method="post">
				<p>Add a New Platform</p>
				<input type="text" name="newplateform" placeholder="Plateform">
				<input type="number" name="plateformxp" min="1" max="99">
				<input type="submit" name="submit" value="Send">
			</form>
			<?php
			if(isset($_POST['newplateform'])) {
				$editPlateform = new Plateform();
				$editPlateform->createPlateform($dbconnect, $_POST['newplateform'], $_POST['plateformxp']);
			}
			?>

		</div>

		<div class="skills_block_right disp-in-block">

			<?php

			$getPlateform = new Plateform();
			$plateform = $getPlateform->selectPlateform($dbconnect);

			?>
			
			<div class="flex_row_space skills_table_head">
	            <div class="disp-in-block">Delete</div>
	            <div class="disp-in-block ">Name</div>
	            <div class="disp-in-block ">XP</div>
	    	</div>
			
			<?php foreach ($plateform as $plate) { ?>

			<div class="flex_row_space">
	    		<button class="disp-in-block"><a href="config/delete_plateform.php?id=<?php echo $plate['id']; ?>">DEL</a></button>
	    		<div class="disp-in-block"><?php echo $plate['name']; ?></div>
	    		<div class="disp-in-block"><?php echo $plate['experience']; ?>%</div>
	    	</div>
			
			<?php } ?>

		</div>

		<div class="clear-b edit_skill_separate"></div>

		<div class="skills_block_left disp-in-block">

			<form class="" method="post">
				<p>Add a New Software</p>
				<input type="text" name="newsoftware" placeholder="Software">
				<input type="number" name="softwarexp" min="1" max="99">
				<input type="submit" name="submit" value="Send">
			</form>
			<?php
			if(isset($_POST['newsoftware'])) {
				$editSoft = new Softwares();
				$editSoft->createSoftware($dbconnect, $_POST['newsoftware'], $_POST['softwarexp']);
			}
			?>

		</div>

		<div class="skills_block_right disp-in-block">

			<?php

			$getSofts = new Softwares();
			$software = $getSofts->selectSoftware($dbconnect);

			?>
			
			<div class="flex_row_space skills_table_head">
	            <div class="disp-in-block">Delete</div>
	            <div class="disp-in-block ">Name</div>
	            <div class="disp-in-block ">XP</div>
	    	</div>
			
			<?php foreach ($software as $soft) { ?>

			<div class="flex_row_space">
	    		<button class="disp-in-block"><a href="config/delete_softwares.php?id=<?php echo $soft['id']; ?>">DEL</a></button>
	    		<div class="disp-in-block"><?php echo $soft['name']; ?></div>
	    		<div class="disp-in-block"><?php echo $soft['experience']; ?>%</div>
	    	</div>
			
			<?php } ?>

		</div>
	</div>
</div>


<?php require "footer.php" ?>