<?php

class Categories {

	public function selectCat($dbconnect) {

	    $sql = "SELECT id, type FROM category;";
	    $stmt = $dbconnect->prepare($sql);
	    $stmt->execute();
	    
	    $categories = $stmt->fetchAll();

	    return $categories;

	}

	public function createCat($dbconnect, $type) {

		$sql = "INSERT INTO category (type) VALUES (:type)";

		$stmt = $dbconnect->prepare($sql);

		$stmt->bindParam(':type', $type);

		if ($stmt->execute()) {
			echo "<p class='text_info'>Category Created !</p>" ;
		} else {
			echo "<p class='text_alert'>Problem In Creation !";
		}
	}

	public function deleteCat($dbconnect, $id) {

		$sql = "DELETE FROM category WHERE id = '$id'";

		$stmt = $dbconnect->prepare($sql);
		$stmt->execute();
	}

	public function getCat($dbconnect) {
		
		$sql = "SELECT * FROM category";

		$stmt = $dbconnect->prepare($sql);
		$stmt->execute();

		$categories = $stmt->fetchAll();

		return $categories;
	}


}