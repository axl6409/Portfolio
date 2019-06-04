<?php

class Blog {

	public function createPost($dbconnect, $authorId, $categoryId, $title, $content) {

		$img = $this->uploadImg();

		$sql = "INSERT INTO blog (FK_admin, FK_category, title, content, img) VALUES ('$authorId', '$categoryId', '$title', '$content', '$img')";

		$stmt = $dbconnect->prepare($sql);

		if ($stmt->execute()) {
			echo "<p class='text_info'>Post Created !</p>" ;
		} else {
			echo "<p class='text_alert'>Problem In Creation !";
		}

	}

	public function deletePost($dbconnect, $id) {
		$sql = "DELETE FROM blog WHERE id = '$id'";

		$stmt = $dbconnect->prepare($sql);

		$stmt->execute();
	}

	public function uploadImg() {


		$folderToMove = '../img/upload/';

		$folderToDb = '/img/upload/';

		$imageName = $_FILES['image']['name'];

		move_uploaded_file($_FILES['image']['tmp_name'],$folderToMove.$imageName );

		$uploadedImage = $folderToDb.$imageName;

		return $uploadedImage;

	}

	public function getPosts($dbconnect) {

		$sql = "SELECT * FROM blog";

		$stmt = $dbconnect->prepare($sql);
		$stmt->execute();

		$posts = $stmt->fetchAll();
		
		return $posts;
	}

	public function getLastPosts($dbconnect) {

		$sql = "SELECT * FROM blog ORDER BY id DESC LIMIT 4";

		$stmt = $dbconnect->prepare($sql);
		$stmt->execute();

		$posts = $stmt->fetchAll();
		return $posts;
	}

	public function getPostById($dbconnect, $id) {

		$sql = "SELECT * FROM blog WHERE id = '$id'";

		$stmt = $dbconnect->prepare($sql);
		$stmt->execute();

		$article = $stmt->fetch();

		return $article;
	}

	public function getPostByCat($dbconnect, $Cat) {

		$sql = "SELECT * FROM blog WHERE FK_category = '$Cat'";

		$stmt = $dbconnect->prepare($sql);
		$stmt->execute();

		$posts = $stmt->fetchAll();

		return $posts;
	}

	public function updatePost($dbconnect, $id, $category, $title, $content) {

		$img = $this->uploadImg();

		$sql = "UPDATE blog SET FK_category='$category', title='$title', content='$content', img='$img' WHERE id='$id'";

		$stmt = $dbconnect->prepare($sql);
		
		if ($stmt->execute()) {
			echo "<p class='text_info'>Post Update !</p>" ;
		} else {
			echo "<p class='text_alert'>Problem In Update !";
		}

	}


}