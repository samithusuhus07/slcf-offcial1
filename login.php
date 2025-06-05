<?php
session_start();
require 'db.php';

// Get form data
$email = trim($_POST['email']);
$password = trim($_POST['password']);

// Find user by email
$sql = "SELECT * FROM users WHERE email = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows === 1) {
  $user = $result->fetch_assoc();
  
  // Verify password
  if (password_verify($password, $user['password'])) {
    $_SESSION['username'] = $user['username'];
    header("Location: dashboard.php"); // Redirect to dashboard
    exit();
  } else {
    echo "Incorrect password.";
  }
} else {
  echo "User not found.";
}

$stmt->close();
$conn->close();
?>
