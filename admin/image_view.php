<?php require "toolbar.php" ?>

<?php $id = $_GET['id'] ?>

<?php
$imagePosted = new Works();
$image = $imagePosted->selectGraphicById($dbconnect, $id);
?>

<div class="image_view_container">
	<img class="image_view" src="../<?php echo $image['img']; ?>">
</div>