<?php require "toolbar.php" ?>

<?php require "config/logcheck.php" ?>



<?php

$id = $_GET['id'];

// version procédurale
//$article = getPostById($id);

// version objet
$getPost = new Blog();

$article = $getPost->getPostById($dbconnect, $id);

?>

<?php require "post_category.php" ?>

    <div class="redact_main">

        <h1 class="redact_title">Update A Post</h1>

        <div class="redact_post">

            <form  method="post"  enctype="multipart/form-data">

                <div class="redact_editor">
                    <input class="disp-block post_editor_title" rows="1" cols="50" type="text" name="title" placeholder="<?php echo $article['title']; ?>">
                    
                     <textarea class="content_area" name="editor1" id="editor1" rows="10" cols="80"><?php echo $article['content'] ?></textarea>
                </div>

                <div class="clear-b"></div>
                
                <div class="redact_post_sidebar">

                    <div class="redact_sidebar_section">
                        <p class="redact_sidebar_title">Upload Featured Image</p>
                        <input class="redact_sidebar_content" name="image" type="file">
                    </div>
                    
                    <div class="redact_sidebar_section">
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

                    <?php if (isset($_POST['title']) && isset($_POST['editor1']) && isset($_POST['categories']) && isset($_FILES['image'])) {

                        $post = new Blog();
                        $post->updatePost($dbconnect, $id, $_POST['categories'], $_POST['title'], $_POST['editor1']);

                        } else {
                            echo "<p class='text_alert>Write all the fields !</p>'";
                        }
                        ?>

                    
                    <div class="redact_sidebar_section">
                        <input class="post_submit" type="submit" name="submit" value="Publish">
                    </div>

                </div>

                <div class="clear-b"></div>

                
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