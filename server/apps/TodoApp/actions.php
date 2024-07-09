<?php
// Database connection
include($_SERVER['DOCUMENT_ROOT'] . '/api/db.php');

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["todo"])) {
	$todo = trim($_POST["todo"]);

	if (!empty($todo)) {
		$stmt = $conn->prepare("INSERT INTO todos (task) VALUES (?)");
		$stmt->bind_param("s", $todo);
		$stmt->execute();
		$stmt->close();
	}
}

// Handle delete request
if (isset($_GET['delete'])) {
	$id = intval($_GET['delete']);
	$stmt = $conn->prepare("DELETE FROM todos WHERE id = ?");
	$stmt->bind_param("i", $id);
	$stmt->execute();
	$stmt->close();
}

// Redirect to prevent re-submission on refresh
header('Location: ../../index.php');

$conn->close();
