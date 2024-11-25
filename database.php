<?php
$servername = "localhost";
$username = "root";  // Or your custom MySQL username
$password = "";      // Or your custom MySQL password
$dbname = "MSU_Movies";  // Your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>