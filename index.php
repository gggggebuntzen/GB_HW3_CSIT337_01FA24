<?php
// Include the database connection file
include 'database.php';



// Query to fetch all movies from the Movie table
$sql = "SELECT MovieID, MovieTitle, ReleaseDate, Genre FROM Movie";
$result = $conn->query($sql);

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
    <h1>MSU Movie Center</h1>

    <?php if ($result->num_rows > 0): ?>
        <!-- Table to display movies -->
        <table border="1">
            <thead>
                <tr>
                    <th>Movie ID</th>
                    <th>Title</th>
                    <th>Release Date</th>
                    <th>Genre</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Loop through and display each movie
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row['MovieID'] . "</td>";
                    echo "<td>" . $row['MovieTitle'] . "</td>";
                    echo "<td>" . $row['ReleaseDate'] . "</td>";
                    echo "<td>" . $row['Genre'] . "</td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    <?php else: ?>
        <p>No movies found in the database.</p>
    <?php endif; ?>

    <!-- Add a link to the form to submit new data -->
    <br>
    <a href="form.php">Add a Movie</a>
</body>
</html>

<?php
// Close the database connection
$conn->close();
?>