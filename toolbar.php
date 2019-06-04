<?php

if (isset($_SESSION['admin_id'])) {

	$notif_session = $_SESSION['admin_pseudo']." !";
}

?>		

		<div>
	
			<nav class="main-menu">
	            <ul>
	                <li class="nav_item">
	                    <a href="admin/home.php">
	                        <i class="fa fa-home fa-2x"></i>
	                        <span class="nav-text">
	                            Dashboard
	                        </span>
	                    </a>
	                  
	                </li>
	                <li class="nav_item">
	                    <a href="admin/list_article.php">
	                        <i class="fa fa-laptop fa-2x"></i>
	                        <span class="nav-text">
	                            Posts List
	                        </span>
	                    </a>
	                    
	                </li>
	                <li class="nav_item">
	                    <a href="admin/post_article.php">
	                       <i class="fa fa-list fa-2x"></i>
	                        <span class="nav-text">
	                            New Post
	                        </span>
	                    </a>
	                    
	                </li>
	                <li class="nav_item">
	                    <a href="admin/edit_skills.php">
	                        <i class="fa fa-font fa-2x"></i>
	                        <span class="nav-text">
	                           	Skills
	                        </span>
	                    </a>
	                </li>
	                <li class="nav_item">
	                    <a href="admin/edit_projects.php">
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

									<p class="notif_session"><?php echo $notif_session; ?></p>

								<?php } ?>
	                        </span>
	                    </a>
	                   
	                </li>
	                <li class="nav_item">
	                    <a href="admin/messages.php">
	                        <i class="fa fa-font fa-2x"></i>
	                        <span class="nav-text">
	                           Messages
	                        </span>
	                    </a>
	                </li>
	                <li class="nav_item">
	                    <a href="admin/config/deconnect.php">
	                        <i class="fa fa-power-off fa-2x"></i>
	                        <span class="nav-text">
	                           Log Out
	                        </span>
	                    </a>
	                </li>
	            </ul>

	        </nav>
			

		</div>
