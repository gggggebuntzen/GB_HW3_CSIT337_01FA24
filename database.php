<?php
$servername = "localhost";
$username = "mgs_user";  // Use the appropriate user
$password = "pa55word";   // The password you set
$dbname = "MSU_Movies";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>