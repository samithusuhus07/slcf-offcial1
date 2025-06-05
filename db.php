<?php
$host = "localhost"; // or 127.0.0.1
$dbname = "slcf_db";
$username = "root"; // default in XAMPP/MAMP
$password = "S@mithu#23";     // default in XAMPP/MAMP (empty)

$conn = new mysqli($host, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>
