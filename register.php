<?php
require 'db.php'; // Connect to database

// Get data from form
$username = trim($_POST['username']);
$email = trim($_POST['email']);
$password = trim($_POST['password']);

// Hash password
$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

// Insert user into database
$sql = "INSERT INTO users (username, email, password) VALUES (?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sss", $username, $email, $hashedPassword);

if ($stmt->execute()) {
  echo "Registered successfully! <a href='index.html'>Login</a>";
} else {
  echo "Error: " . $conn->error;
}

$stmt->close();
$conn->close();
?>
