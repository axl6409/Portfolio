<?php

// Connect to the Database
$hostname = 'localhost';
$username = 'root';
$password = '';


try {

	$dbconnect = new PDO("mysql:host=$hostname;dbname=portfolio1",$username,$password);
	$dbconnect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOexception $e) {
	print "Error ! : " .$e->getMessage(). "</br>";
}


?>