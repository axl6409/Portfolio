<?php

ob_start();

require "toolbar.php";

$id = $_GET['id'];

$postCateg = new Categories();
$postCateg->deleteCat($dbconnect, $id);

header("Location: post_article.php", true);
exit();

?>