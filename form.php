<?php
// Include the database connection file
include 'database.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add a Movie</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Add a New Movie</h1>

    <!-- Form to add a movie -->
    <form action="add_movie.php" method="POST">
        <label for="title">Movie Title:</label>
        <input type="text" id="title" name="title" required><br>

        <label for="release_date">Release Date:</label>
        <input type="date" id="release_date" name="release_date" required><br>

        <label for="genre">Genre:</label>
        <input type="text" id="genre" name="genre" required><br>

        <button type="submit">Add Movie</button>
    </form>

    <br>
    <a href="index.php">Back to Movies List</a>
</body>
</html>