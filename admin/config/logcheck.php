<?php

if(!isset($_SESSION["admin_id"]) || (isset($_SESSION["admin_id"]) && !$_SESSION["admin_id"])) {
  header('LOCATION: ../index.php');
exit;
}
    
?>