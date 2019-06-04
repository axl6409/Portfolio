<?php

include_once "../../config.php";
include_once "../../classes/Plateform.php";

ob_start();

$id = $_GET['id'];

$delPlateform = new Plateform();
$delPlateform->deletePlateform($dbconnect, $id);

header("Location: ../edit_skills.php", true);
exit();

?>