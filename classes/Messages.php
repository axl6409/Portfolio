<?php

class Messages {

	public function insertMessage($dbconnect, $name, $email, $subject, $message) {

		$sql = "INSERT INTO messages (name, email, subject, message) VALUES (:name,:email,:subject,:message)";

		$stmt = $dbconnect->prepare($sql);

		$stmt->bindParam(':name', $name);
		$stmt->bindParam(':email', $email);
		$stmt->bindParam(':subject', $subject);
		$stmt->bindParam(':message', $message);

		if ($stmt->execute()) {
			echo "<p class='contact_text_info'>Message Send !</p>";
		} else {
			echo "<p class='contact_text_alert>Failed to send your message</p>";
		}

	}

	public function getMessages($dbconnect) {

		$sql = "SELECT * FROM messages";

		$stmt = $dbconnect->prepare($sql);
		$stmt->execute();

		$messages = $stmt->fetchAll();

		return $messages;
	}

	public function getLastMessages($dbconnect) {

		$sql = "SELECT * FROM messages ORDER BY id DESC LIMIT 10";

		$stmt = $dbconnect->prepare($sql);
		$stmt->execute();

		$messages = $stmt->fetchAll();

		return $messages;
	}

	public function deleteMessage($dbconnect, $id) {

		$sql = "DELETE FROM messages WHERE id = '$id'";

		$stmt = $dbconnect->prepare($sql);

		$stmt->execute();
	}


}