<?php require "toolbar.php" ?>

    <div class="redact_main">

        <h1 class="redact_title">Write A New Post</h1>

    	<div class="redact_post">

            <form  method="post"  enctype="multipart/form-data">

                <div class="redact_editor">
                    <input class="disp-block post_editor_title" type="text" name="title" placeholder="Enter Your Title Here">
                    
                     <textarea class="content_area" name="editor1" id="editor1" rows="10" cols="80">
                     </textarea>
                </div>
                

                <div class="category_post_image">

                    <div class="category_post_image">
                        <p class="category_image_btn">Upload Featured Image</p>
                        <input class="redact_sidebar_content" name="image" type="file">
                    </div>
                    
                    <div class="category_sidebar_section">
                        <p class="redact_sidebar_title">Shoose the category :</p>
                        <select name="categories">
                            <?php

                                $blogPost = new Categories();
                                $postCat = $blogPost->selectCat($dbconnect);


                               foreach ($postCat as $category) 
                               {

                                echo "<option value='".$category['id']."'>".$category['type']."</option>";
                               }
                              
                            ?>
                        </select>
                    </div>

                    <div class="redact_sidebar_section">
                        <input class="post_submit" type="submit" name="submit" value="Publish">
                    </div>

                </div>

                
                <?php if (isset($_POST['title']) && isset($_POST['editor1'])) {

                    $post = new Blog();
                    $post->createPost($dbconnect, $_SESSION['admin_id'], $_POST['categories'], $_POST['title'], $_POST['editor1']);

                }
                ?>
                <?php require "config/no_resend.php" ?>
            </form>
    	
        

    	</div>

    </div>

    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script src="../ckeditor/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'editor1', {
            filebrowserBrowseUrl: '../ckfinder/ckfinder.html',
            filebrowserImageBrowseUrl: '../ckfinder/ckfinder.html?type=Images',
            filebrowserFlashBrowseUrl: '../ckfinder/ckfinder.html?type=Flash',
            filebrowserUploadUrl: '../ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
            filebrowserImageUploadUrl: '../ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
            filebrowserFlashUploadUrl: '../ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'
        });        
    </script>
        
<?php require "footer.php" ?>