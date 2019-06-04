<?php require "toolbar.php" ?>

<?php require "config/logcheck.php" ?>


<div class="messages_head">

	<h1 class="messages_title">Your Messages</h1>
	
</div>

<div class="messages_list">
	<h2 class="message_list_main_title">Your Last Messages</h2>
	<div class="messages_tab message_list_main">
		<?php

		$postMessages = new Messages();
		$messages = $postMessages->getMessages($dbconnect);

		?>

		<div class="message_tb_head">
            <div class="disp-in-block ">Delete</div>
            <div class="disp-in-block ">Name</div>
            <div class="disp-in-block message_tb_email">E-Mail</div>
            <div class="disp-in-block message_tb_subject">Subject</div>
            <p class="disp-in-block message_tb_subject">Message</p>
    	</div>
			
		<?php foreach ($messages as $mail) {
		?>	

		<div class="message_tb_head">
    		<button class="disp-in-block "><a href="config/delete_message.php?id=<?php echo $mail['id']; ?>">DEL</a></button>
    		<div class="disp-in-block "><?php echo $mail['name']; ?></div>
    		<div class="disp-in-block message_tb_email"><?php echo $mail['email']; ?></div>
    		<div class="disp-in-block message_tb_subject"><?php echo $mail['subject']; ?></div>
    		<p class="disp-in-block message_tb_subject"><?php echo $mail['message']; ?></p>
    	</div>

		<?php 
		} 
		?>
	</div>
</div>

<?php require "footer.php" ?>