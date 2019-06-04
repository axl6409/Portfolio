<?php

include_once "../../config.php";
include_once "../../classes/Softwares.php";

ob_start();

$id = $_GET['id'];

$delSoftware = new Softwares();
$delSoftware->deleteSoftware($dbconnect, $id);

header("Location: ../edit_skills.php", true);
exit();

?>