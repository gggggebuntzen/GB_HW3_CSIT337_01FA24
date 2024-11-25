<?php
// Include the database connection file
include 'database.php';

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get the form data
    $movie_title = $_POST['title'];
    $release_date = $_POST['release_date'];
    $genre = $_POST['genre'];

    // Prepare the SQL statement to insert the new movie
    $sql = "INSERT INTO Movie (MovieTitle, ReleaseDate, Genre) VALUES (?, ?, ?)";

    // Prepare the statement
    if ($stmt = $conn->prepare($sql)) {
        // Bind the parameters
        $stmt->bind_param("sss", $movie_title, $release_date, $genre);

        // Execute the query
        if ($stmt->execute()) {
            echo "Movie added successfully!";
            // Redirect back to the movie list (index.php)
            header("Location: index.php");
            exit();
        } else {
            echo "Error: " . $stmt->error;
        }

        // Close the statement
        $stmt->close();
    } else {
        echo "Error: " . $conn->error;
    }
}

// Close the database connection
$conn->close();
?>