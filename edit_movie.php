<?php
include 'database.php'; // Connection to your database

if (isset($_GET['id'])) {
    $movieID = $_GET['id'];

    // Fetch movie data based on the MovieID
    $query = "SELECT * FROM Movie WHERE MovieID = $movieID";
    $result = mysqli_query($conn, $query);
    $movie = mysqli_fetch_assoc($result);

    // Your form and update logic here...
}
?>