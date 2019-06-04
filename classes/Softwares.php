<?php

class Softwares {

	public function createSoftware($dbconnect, $name, $experience) {

		$sql = "INSERT INTO softwares (name, experience) VALUES (:name, :exp)";

		$stmt = $dbconnect->prepare($sql);

		$stmt->bindParam(':name', $name);
		$stmt->bindParam(':exp', $experience);

		if ($stmt->execute()) {
			echo "<p class='text_info'>New Software Added !</p>" ;
		} else {
			echo "<p class='text_alert'>Problem When Adding !";
		}

	}

	public function selectSoftware($dbconnect) {

		$sql = "SELECT * FROM softwares";

		$stmt = $dbconnect->prepare($sql);
		$stmt->execute();

		$softwares = $stmt->fetchAll();

		return $softwares;
	}

	public function deleteSoftware($dbconnect, $id) {

		$sql = "DELETE FROM softwares WHERE id = '$id'";

		$stmt = $dbconnect->prepare($sql);
		$stmt->execute();
	}
}