<?php 

ob_start();

require "toolbar.php";

$id = $_GET['id'];

$post = new Blog();
$post->deletePost($dbconnect, $id);

header("Location: list_article.php", true);
exit();

?>