<?php
// Database credentials
$servername = "localhost";
$username = "root"; // or your custom user
$password = ""; // or your custom password
$dbname = "MSU_Movies"; // Database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize and retrieve form data
    $name = $_POST['name'];
    $email = $_POST['email'];

    // Prepare SQL statement to insert data
    $sql = "INSERT INTO Users (Name, Email) VALUES ('$name', '$email')";

    // Execute the query
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close the connection
$conn->close();
?>