<?php require "toolbar.php" ?>

<?php require "config/logcheck.php" ?>

<?php require "config/no_resend.php" ?>

<div class="posts_main">

    <h1 class="posts_title">All Posts</h1>


    <div class="list_article_container">
        <?php

        $blogpost = new Blog();
        $posts = $blogpost->getPosts($dbconnect);

        ?>



        <div class="article_block_header">
            <p class="post_list_bttn">Update</p>
            <p class="post_list_bttn">Delete</p>
            <p class="post_list_bttn">View</p>
            <p class="disp-in-block post_list_id">ID</p>
            <h2 class="disp-in-block post_list_title">Title</h2>
            <p class="disp-in-block post_list_date">Date</p>
        </div>

        <?php
        foreach ($posts as $article) { ?>
            
        <div class="article_block">
            <button class="post_list_bttn"><a href="update.php?id=<?php echo $article['id']; ?>">MOD</a></button>
            <button class="post_list_bttn"><a href="delete_post.php?id=<?php echo $article['id']; ?>">DEL</a></button>
            <button class="post_list_bttn"><a href="post.php?id=<?php echo $article['id']; ?>">VIEW</a></button>
            <p class="disp-in-block post_list_id"><?php echo $article['id']; ?></p>
            <h2 class="disp-in-block post_list_title"><?php echo $article['title']; ?></h2>
            <p class="disp-in-block post_list_date"><?php echo $article['date']; ?></p>
        </div>
        
        <?php } ?>
        
    </div>

</div>

<?php require "footer.php" ?>