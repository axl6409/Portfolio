
<div class="category_main">
    
    <div class="category_title">
        <h1>Posts Categories</h1>
    </div>

    <div class="post_category_info">
        <div class="category_block_left disp-in-block">
            <form class="" method="post">
                <p>Add a category :</p>
                <input type="text" name="newcat" placeholder="New Category">
                <input type="submit" name="submit" value="OK">
            <?php
            if (isset($_POST['newcat'])) {
                $post = new Categories();
                $post->createCat($dbconnect, $_POST['newcat']);
            }

            ?>


            </form>

        </div>

        <div class="category_block_right disp-in-block">

            <?php

            $blogCategory = new Categories();
            $categories = $blogCategory->selectCat($dbconnect);

            ?>
            <div class="flex_row_space category_table_head">
                <div class="disp-in-block">Delete</div>
                <div class="disp-in-block ">Name</div>
                <div class="disp-in-block ">ID</div>
            </div>

            <?php foreach ($categories as $category) { ?>

            <div class="flex_row_space">
                <button class="category_bttn disp-in-block"><a href="config/delete_categ.php?id=<?php echo $category['id']; ?>">DEL</a></button>
                <div class="disp-in-block"><?php echo $category['type']; ?></div>
                <div class="disp-in-block"><?php echo $category['id']; ?></div>
            </div>

            <?php } ?>
        </div>

    </div>

</div>