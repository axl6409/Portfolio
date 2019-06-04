<?php

include_once "../../config.php";
include_once "../../classes/Messages.php";

ob_start();

$id = $_GET['id'];

$delMessage = new Messages();
$delMessage->deleteMessage($dbconnect, $id);

header("Location: ../messages.php", true);
exit();

?>