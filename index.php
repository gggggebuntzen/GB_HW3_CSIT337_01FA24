<?php
// Example PHP code: connecting to the database or performing operations
include 'database.php'; // Database connection

// You can also use PHP to handle form data or errors if necessary
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie Database</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Movie Database</h1>
    <form action="view.php" method="POST">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
        <br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <br>
        <label for="movie">Favorite Movie:</label>
        <select id="movie" name="movie" required>
            <?php
            // Fetch movie titles dynamically from the database
            $result = $conn->query("SELECT MovieTitle FROM Movie");
            while ($row = $result->fetch_assoc()) {
                echo "<option value='" . $row['MovieTitle'] . "'>" . $row['MovieTitle'] . "</option>";
            }
            ?>
        </select>
        <br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>
