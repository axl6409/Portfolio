
<?php include_once "config.php" ?>
<?php require "classes/Admin.php" ?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no" />
		<title>A.C Web & Dev / Admin Connect</title>
		<link rel="stylesheet" type="text/css" href="css/custom/admin/adminglobal.css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
	</head>


	<body class="log_background">

		<header class="admin_header">

			<div class="header_logo_admin">

				<a href="index.php">
					<img  class="admin_logo" src="img/logo2.png">
				</a>
				
			</div>
		</header>


		<div class="connect_contain">

			<form class="connect" action="" method="post">
				<input class="connect_input" type="text" name="pseudo" placeholder="Pseudo">
				<input class="connect_input" type="password" name="password" placeholder="Password">
				<input class="connect_input connect_submit" type="submit" name="submit" value="OK">
			</form>


			<?php


		// Use to hash de original password and insert in my database for admin
		// *********************************************************************
		// $postPassword = password_hash(
		// 	"Slh1123581321ac",
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
					$_SESSION['admin_pseudo'] = $logAdmin['pseudo'];
					echo "You're Connect" .$logAdmin['pseudo']. " !";

					header("Location: admin/home.php");
				} else {

					echo '<p class="acces_message_denied">Wrong pseudo or password.</p>';

				}

			}

			?>
		</div>


<?php require "footer.php" ?>