<?php require "header.php" ?>

<div class="skill_section">
	<div class="">
		<video class="skill_video" autoplay>
			<source src="videos/html.mp4" type="video/mp4">
			<source src="videos/html.mp4" type="video/ogg">
		</video>
	</div>
</div>


<div class="container">
  <div class="skills_main_title">
    <h1 class="glitch" data-text="My Skills">My Skills</h1>
  </div>
  <?php
  $skillsDB = new Skills();
  $skills = $skillsDB->selectSkill($dbconnect);
  ?>
  <div class="col">
    <h2 class="programation skill_title">Programation</h2>
    <ul class="skill">

      <?php foreach ($skills as $skill) { ?>

      <li>
        <span class="blueline load_bar" style="width:<?php echo $skill['experience']; ?>%;"></span>
        <em><?php echo $skill['type'] ?></em>
      </li>

      <?php } ?>

    </ul>
  </div>



  
  <?php
  $plateformDB = new Plateform();
  $plateform = $plateformDB->selectPlateform($dbconnect);
  ?>
  <div class="col">
    <h2 class="plateform skill_title">Plateform</h2>
    <ul class="skill">
      
      <?php foreach ($plateform as $plate) { ?>
      <li>
        <span class="greenline load_bar" style="width:<?php echo $plate['experience']; ?>%;"></span>
        <em><?php echo $plate['name'] ?></em>
      </li>
      <?php } ?>

    </ul>
  </div>
  
  <?php
  $softwareDB = new Softwares();
  $softwares = $softwareDB->selectSoftware($dbconnect);
  ?>
  <div class="col">
    <h2 class="software skill_title">Software</h2>
    <ul class="skill">
      
      <?php foreach ($softwares as $soft) { ?>
      <li>
        <span class="redline load_bar" style="width:<?php echo $soft['experience']; ?>%;"></span>
        <em><?php echo $soft['name']; ?></em>
      </li>
      <?php } ?>

    </ul>
  </div>
  
  
</div>

<?php require "footer.php" ?>