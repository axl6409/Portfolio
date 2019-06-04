<?php

include_once "../../config.php";
include_once "../../classes/Skills.php";

ob_start();

$id = $_GET['id'];

$delSkill = new Skills();
$delSkill->deleteSkill($dbconnect, $id);

header("Location: ../edit_skills.php", true);
exit();

?>