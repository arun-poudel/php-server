<?php
include($_SERVER['DOCUMENT_ROOT'] . "/env.php");

$serverName = "mysql";  // This should match the service name in Docker Compose
$username = $_ENV['MYSQL_USER'];
$password = $_ENV['MYSQL_PASSWORD'];
$database = $_ENV['MYSQL_DATABASE'];

// Create connection
$conn = new mysqli($serverName, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
