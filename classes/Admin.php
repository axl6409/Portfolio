<?php

class Admin {

	public function getAdminByPseudo($dbconnect, $pseudo) {

		$sql = "SELECT * FROM admin WHERE pseudo = '$pseudo'";

		$stmt = $dbconnect->prepare($sql);

		$stmt->execute();

		$admin = $stmt->fetch();

		return $admin;
	}

	public function ageCompt($dbconnect) {

		$d1 = new DateTime('1992-07-09 20:30:00'); 
		$d2 = new DateTime('today'); 
		$diff = $d1->diff($d2); 

		return $diff->format('%Y');
	} 
}