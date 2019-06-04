<?php

class Works {

	public function createWork($dbconnect, $title, $link) {

		$img = $this->worksImg();

		$sql = "INSERT INTO works (title, img, link) VALUES ('$title', '$img', '$link')";

		$stmt = $dbconnect->prepare($sql);

		if ($stmt->execute()) {
			echo "<p class='text_info'>New Work Added !</p>" ;
		} else {
			echo "<p class='text_alert'>Problem When Adding !";
		}
	}

	public function selectWork($dbconnect) {

		$sql = "SELECT * FROM works";

		$stmt = $dbconnect->prepare($sql);
		$stmt->execute();

		$works = $stmt->fetchAll();

		return $works;
	}

	public function worksImg() {

		$folderToMove = '../img/works/';

		$folderToDb = 'img/works/';

		$imageName = $_FILES['image']['name'];

		if (move_uploaded_file($_FILES['image']['tmp_name'], $folderToMove.$imageName ) ) {

			echo "Image Moved";
		} else {
			echo "Fail to Move";
		}

		$uploadedImage = $folderToDb.$imageName;

		return $uploadedImage;
	}

	public function deleteWorks($dbconnect, $id) {

		$sql = "DELETE FROM works WHERE id = '$id'";

		$stmt = $dbconnect->prepare($sql);
		$stmt->execute();
	}

	public function createGraphic($dbconnect, $imgTitle) { 

		$img = $this->graphicImg();

		$sql = "INSERT INTO design_graphic (img, title) VALUES ('$img', '$imgTitle')";

		$stmt = $dbconnect->prepare($sql);

		if ($stmt->execute()) {
			echo "<p class='text_info'>Image Posted !</p>" ;
		} else {
			echo "<p class='text_alert'>Problem When Adding !";
		}
	}

	public function graphicImg() {

		$folderToMove = '../img/graphicWorks/';

		$folderToDb = 'img/graphicWorks/';

		$imageName = $_FILES['image']['name'];

		if (move_uploaded_file($_FILES['image']['tmp_name'], $folderToMove.$imageName ) ) {

			echo "Image Moved";

		} else {
			
			echo "Fail to Move";
		}

		$uploadedImage = $folderToDb.$imageName;

		return $uploadedImage;
	}

	public function selectGraphic($dbconnect) {

		$sql = "SELECT * FROM design_graphic";

		$stmt = $dbconnect->prepare($sql);
		$stmt->execute();

		$graphics = $stmt->fetchAll();

		return $graphics;
	}

	public function selectGraphicById($dbconnect, $id) {

		$sql = "SELECT * FROM design_graphic WHERE id = '$id'";

		$stmt = $dbconnect->prepare($sql);

		$stmt->execute();

		$articlesImg = $stmt->fetch();

		return $articlesImg;
	}

	public function deleteGraphic($dbconnect, $id) {

		$sql = "DELETE FROM design_graphic WHERE id = '$id'";

		$stmt = $dbconnect->prepare($sql);
		$stmt->execute();
	}
}