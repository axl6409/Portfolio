
<?php include_once "../config.php" ?>

<?php include_once "../classes/Admin.php" ?>
<?php include_once "../classes/Blog.php" ?>
<?php include_once "../classes/Categories.php" ?>
<?php include_once "../classes/Skills.php" ?>
<?php include_once "../classes/Works.php" ?>
<?php include_once "../classes/Plateform.php" ?>
<?php include_once "../classes/Softwares.php" ?>
<?php include_once "../classes/Messages.php" ?>


<?php session_start();

if (isset($_SESSION['admin_id'])) {

	$notif_session = "You're Connect " .$_SESSION['admin_pseudo']. " !";
} else {
	header('LOCATION: ../index.php');
}

?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no" />
		<title>A.C Web & Dev / My Admin / <?php echo $_SESSION['admin_pseudo']; ?></title>
		<link rel="stylesheet" type="text/css" href="../css/custom/admin/adminglobal.css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
	</head>


	<body class="body_background">

		<div class="toolbar_main">

			<nav class="main-menu">
	            <ul>
	                <li class="nav_item">
	                    <a href="home.php">
	                        <i class="fa fa-home fa-2x"></i>
	                        <span class="nav-text">
	                            Dashboard
	                        </span>
	                    </a>
	                  
	                </li>
	                <li class="nav_item">
	                    <a href="list_article.php">
	                        <i class="fa fa-laptop fa-2x"></i>
	                        <span class="nav-text">
	                            Posts List
	                        </span>
	                    </a>
	                    
	                </li>
	                <li class="nav_item">
	                    <a href="post_article.php">
	                       <i class="fa fa-list fa-2x"></i>
	                        <span class="nav-text">
	                            New Post
	                        </span>
	                    </a>
	                    
	                </li>
	                <li class="nav_item">
	                    <a href="edit_skills.php">
	                        <i class="fa fa-font fa-2x"></i>
	                        <span class="nav-text">
	                           	Skills
	                        </span>
	                    </a>
	                </li>
	                <li class="nav_item">
	                    <a href="edit_projects.php">
	                        <i class="fa fa-font fa-2x"></i>
	                        <span class="nav-text">
	                        	Projects
	                        </span>
	                    </a>
	                </li>
	                <li class="nav_item">
	                    <a href="#">
	                       <i class="fa fa-user fa-2x"></i>
	                        <span class="nav-text">
								
								
								<?php if (isset($_SESSION['admin_id'])) { ?>

									<h2 class="notif_session_admin"><?php echo $_SESSION['admin_pseudo']; ?></h2>

								<?php } ?>

	                        </span>
	                    </a>
	                   
	                </li>
	                <li class="nav_item">
	                    <a href="messages.php">
	                        <i class="fa fa-font fa-2x"></i>
	                        <span class="nav-text">
	                           Messages
	                        </span>
	                    </a>
	                </li>
	                <li class="nav_item">
	                    <a href="../index.php">
	                        <i class="fa fa-font fa-2x"></i>
	                        <span class="nav-text">
	                           Site Return
	                        </span>
	                    </a>
	                </li>
	            </ul>

	            <ul class="logout">
	                <li>
	                   <a href="config/deconnect.php">
	                         <i class="fa fa-power-off fa-2x"></i>
	                        <span class="nav-text">
	                            Logout
	                        </span>
	                    </a>
	                </li>  
	            </ul>
	        </nav>
			
		</div>