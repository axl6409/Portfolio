<!-- Public header.php -->
<?php require "config.php" ?>
<?php include_once "classes/Admin.php" ?>
<?php include_once "classes/Skills.php" ?>
<?php include_once "classes/Blog.php" ?>
<?php include_once "classes/Works.php" ?>
<?php include_once "classes/Plateform.php" ?>
<?php include_once "classes/Softwares.php" ?>
<?php include_once "classes/Messages.php" ?>
<?php
session_start();

if (isset($_SESSION['admin_id'])) {

	$notif_session = "You're Connect" .$_SESSION['admin_pseudo']. " !";
}
?>

<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no" />
		<meta charset="utf-8">
		<title>Alexandre Celier / French Web Developer</title>
		<meta name="description" content="Web developer in freelance, I live in France and I work on Wordpress, HTML, CSS, PHP and more. I build websites and online softwares. I also want to Work on Web Development Project, Web Sites, Database. Interest for Fromations of web development and softwares." />
	    <link rel="stylesheet" type="text/css" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.12/themes/smoothness/jquery-ui.css" />
		<link rel="stylesheet" type="text/css" href="css/custom/public/global.css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
	</head>
	<body>

		<?php if (isset($_SESSION['admin_id'])) { ?>

		<?php require "toolbar.php" ?>

		<?php } ?>
	
		<header class="header_main">

			<a id="headerBtn" class="header_logo_link" href="index.php"><img alt="logo of the web site" class="header_logo" src="img/logo2.png"></a>

			<div id="navbar" class="header_nav">
				<ul>
					<li class="header_icons">
						<a class="fas fa-home deco_none header_links" href="index.php"></a>
					</li>
					<li class="header_icons">
						<a class="fas fa-child deco_none header_links" href="about.php"></a>
					</li>
					<li class="header_icons">
						<a class="fas fa-cog deco_none header_links" href="skills.php"></a>
					</li>
					<li class="header_icons">
						<a class="far fa-eye deco_none header_links" href="projects.php"></a>
					</li>
					<li class="header_icons">
						<a class="far fa-envelope deco_none header_links" href="contact.php"></a>
					</li>
				</ul>

			</div>

			<div id="socialbar" class="header_social_nav">
				<!-- <i class="header_social fab fa-facebook ">
					<a href="#"></a>
				</i> -->
				<i class="header_social">
					<a class="fab fa-google-plus-g" href="https://plus.google.com/u/0/116728676397828914803"></a>
				</i>
			</div>

		</header>


