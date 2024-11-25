<?php
include 'database.php'; // Connection to your database

if (isset($_GET['id'])) {
    $movieID = $_GET['id'];

    // Delete movie record based on the MovieID
    $query = "DELETE FROM Movie WHERE MovieID = $movieID";
    mysqli_query($conn, $query);

    // Redirect after deletion
    header("Location: index.php");
}
?>