<?php

class Plateform {

	public function createPlateform($dbconnect, $name, $experience) {

		$sql = "INSERT INTO plateform (name, experience) VALUES (:name, :exp)";

		$stmt = $dbconnect->prepare($sql);
		$stmt->bindParam(':name', $name);
		$stmt->bindParam(':exp', $experience);

		if ($stmt->execute()) {
			echo "<p class='text_info'>Platform Added !</p>" ;
		} else {
			echo "<p class='text_alert'>Problem In The Creation Of The Post!";
		}
	}

	public function selectPlateform($dbconnect) {

		$sql = "SELECT * FROM plateform";

		$stmt = $dbconnect->prepare($sql);
		$stmt->execute();

		$plateforms = $stmt->fetchAll();

		return $plateforms;
	}

	public function deletePlateform($dbconnect, $id) {

		$sql = "DELETE FROM plateform WHERE id = '$id'";

		$stmt = $dbconnect->prepare($sql);
		$stmt->execute();
	}
}