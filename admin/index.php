<?php require "header.php" ?>
<?php include_once "../config.php" ?>
<?php require "../classes/Admin.php" ?>

<div class="connect_contain">

	<form class="connect" action="" method="post">
		<input class="connect_input" type="text" name="pseudo" placeholder="Pseudo">
		<input class="connect_input" type="password" name="password" placeholder="Password">
		<input class="connect_input" type="submit" name="submit" value="OK">
	</form>


	<?php


// Use to hash de original password and insert in my database for admin
//*********************************************************************
// $postPassword = password_hash(
// 	"__mot_de_passe__",
// 	PASSWORD_BCRYPT,
// 	array(
// 		'cost' => 12,
// 	));



	if (isset($_POST['pseudo'])) {

		$pseudo = $_POST['pseudo'];

		$admin = new Admin();
		$logAdmin = $admin->getAdminByPseudo($dbconnect, $pseudo);

		$DBpwd = $logAdmin['password'];


		if (password_verify($_POST['password'], $DBpwd)) {

			session_start();

			$_SESSION['admin_id'] = $logAdmin['id'];
			$_SESSION['admin_pseudo'] = $logAdmin['peudo'];
			$right_notif_connect = "You're Connect" .$logAdmin['pseudo']. " !";

			header("Location: home.php");
		} else {

			$wrong_notif_connect = "Wrong pseudo or password.";
		}

	}

	?>
</div>