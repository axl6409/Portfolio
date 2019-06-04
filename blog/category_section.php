<?php include_once "../classes/Categories.php" ?>

	<nav class="main-menu">
	    <ul>
	        <li class="nav_item">
	            <button class="blog_home_btn"><a class="deco_none" href="myblog.php">Home</a>
	            </button>

				<h2 class="blog_nav_title">Quategories</h2>

				<?php 
				$DbCateg = new Categories();
				$Categories = $DbCateg->getCat($dbconnect);

				foreach ($Categories as $Categ) {
				?>

				<li class="nav_item">
		            <a href="category_view.php?id=<?php echo $Categ['id']; ?>">
		                <i class="fa fa-laptop fa-2x"></i>
		                <span class="nav-text">
		                    <?php echo $Categ['type']; ?>
		                </span>
		            </a>
		            
		        </li>

				<?php } ?>
	        </li>
	        <li class="nav_item">
	            
	            
		    </li>
	    </ul>
	    <div class="exit_blog_btn">
		    <a class="deco_none" href="../index.php" >
		        <i class="fa fa-angle-double-left fa-2x"></i>
		        <span class="nav-text">
		            Door For My Site
		        </span>
		    </a>
		</div>
	</nav>