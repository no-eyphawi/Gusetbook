<?php
$servername = "localhost";
$username = "cpe6370";
$password = "2145@pwt";
$db_name = "cpe6370";

// Create connection
$conn = new mysqli($servername, $username, $password, $db_name);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>