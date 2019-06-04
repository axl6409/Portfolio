<?php

include_once "../../config.php";
include_once "../../classes/Categories.php";

ob_start();

$id = $_GET['id'];

$postCateg = new Categories();
$postCateg->deleteCat($dbconnect, $id);

header("Location: ../home.php", true);
exit();

?>