<?php

session_start();

// Suppression des variables de session
$_SESSION = array();
session_destroy();
header('Location: ../../index.php');

?>