<?php

$servername = "localhost";
$username = "foodpantry";
$password = "Dadp4Boxrl";
$database = "foodpantry";

// Create connection

$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

echo "-connected successfully to db-";
?>
