<?php

include_once "../../config.php";
include_once "../../classes/Works.php";

ob_start();

$id = $_GET['id'];

$delSkill = new Works();
$delSkill->deleteGraphic($dbconnect, $id);

header("Location: ../edit_projects.php", true);
exit();

?>