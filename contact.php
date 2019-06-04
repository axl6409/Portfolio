<?php require "header.php" ?>

<div class="contact_main">
	<div class="contact_sections">
		<div class="contact_main_title">
			<h1 class="glitch" data-text="Contact Me :)">Contact Me :)</h1>
			<p class="contact_main_text">
				<span>You want your Web Site ? or collaborate on projects ? Write this Contact Form and receive your message ;)
				</span>
			</p>
		</div>
		<form class="contact_form" method="post">
			<div class="form_sections">
				<input class="first_input" type="" name="name" placeholder="YOUR NAME">
				<input class="first_input" type="" name="email" placeholder="YOUR E-MAIL">
			</div>
			<div class="form_sections">
				<input class="second_input" type="" name="subject" placeholder="THE OBJECT OF YOUR MESSAGE">
			</div>
			<div class="form_sections">
				<textarea class="third_input" name="message" placeholder="ENTER YOUR MESSAGE"></textarea>
			</div>
			<div class="form_sections">
				<input class="submit_input" type="submit" name="submit" value="Contact Me">
			</div>
			
			<?php
			if (empty($_POST['name']) && empty($_POST['email']) && empty($_POST['subject']) && empty($_POST['message'])) {
				
			} else {
				$message = new Messages();
				$message->insertMessage($dbconnect,$_POST['name'], $_POST['email'], $_POST['subject'], $_POST['message']);
				
				include_once "mail.php";
			}
			?>	

		</form>

		<div class="footer_border_top"></div>
		<div class="footer_cgu_main">
			<a href="cgu.php">Mentions Legales du Site </a>
			<p> suite à la loi </p>
			<a href="https://www.cnil.fr/fr/loi-78-17-du-6-janvier-1978-modifiee"> N° 78-17 </a>
		</div>

	</div>

	<div class="contact_sections">
		<iframe class="contact_map" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d807432.6509900601!2d-1.2333442280343043!3d43.53858559859786!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sfr!2sfr!4v1529323041954" width="800" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
	</div>

</div>

<?php require "footer.php" ?>