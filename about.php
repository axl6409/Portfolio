<?php require "header.php" ?>

<div class="background_stripes">

	<div class="noiseContain">

		<div class="about_title">
			<h1 class="glitch about_title_1" data-text="HELLO WORLD !">HELLO WORLD !</h1>
		</div>

	    <div class="about_section1">

			<?php 
			$Age = new Admin();
			$myAge = $Age->ageCompt($dbconnect);
			?>
			<p class="about_present" id="typedtext">
				
			</p>			
	    </div>

    	<div class="about_section2">
			<img class="image_profil" alt="profil image of me" src="img/profil.jpg">
			<?php echo '<p class="glitch profil_age" data-text="__ Years Old">'.$myAge.' Years Old</p>' ?>
		</div>

	</div>
</div>


<?php require "footer.php" ?>