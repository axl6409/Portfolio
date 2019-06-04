<!-- Public header.php -->
<?php require "../config.php" ?>
<?php require "../classes/Admin.php" ?>
<?php require "../classes/Blog.php" ?>
<?php
session_start();

if (isset($_SESSION['admin_id'])) {

	$notif_session = "You're Connect " .$_SESSION['admin_id']. " !";
}
?>

<!DOCTYPE html>

<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no" />
		<title>My Blog</title>
		<meta description="Blog" content="Here are my blog posts and tutos on web development">
		<link rel="stylesheet" type="text/css" href="../css/custom/public/global.css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
	</head>

	<body class="blog_main">

	<header class="blog_section_head">

		<h1 class="glitch section_head_title" data-text="WALL">WALL</h1>
		<p class="section_head_sub">Hope you can find my artilces and tutorials great ;)</p>
	</header>