<?php

class Skills {

	public function createSkill($dbconnect, $type, $experience) {

		$sql ="INSERT INTO skills (type, experience) VALUES (:type, :exp)";

		$stmt = $dbconnect->prepare($sql);
		$stmt->bindParam(':type', $type);
		$stmt->bindParam(':exp', $experience);
		
		if ($stmt->execute()) {
			echo "<p class='text_info'>New Skill Added !</p>" ;
		} else {
			echo "<p class='text_alert'>Problem When Adding !";
		}
	}

	public function selectSkill($dbconnect) {

		$sql = "SELECT * FROM skills";

		$stmt = $dbconnect->prepare($sql);
		$stmt->execute();

		$skills = $stmt->fetchAll();

		return $skills;
	}

	public function deleteSkill($dbconnect, $id) {

		$sql = "DELETE FROM skills WHERE id = '$id'";

		$stmt = $dbconnect->prepare($sql);
		$stmt->execute();
	}

	
}