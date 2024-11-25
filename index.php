<?php
// Include the database connection
include 'database.php';

// Fetch movies from the database
$query = "SELECT * FROM Movie";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies List</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Movies</h1>
    <table>
        <tr>
            <th>Movie Title</th>
            <th>Release Date</th>
            <th>Genre</th>
            <th>Actions</th>
        </tr>
        <!-- Loop through the results and display them in the table -->
        <?php while ($row = mysqli_fetch_assoc($result)): ?>
        <tr>
            <td><?php echo htmlspecialchars($row['MovieTitle']); ?></td>
            <td><?php echo htmlspecialchars($row['ReleaseDate']); ?></td>
            <td><?php echo htmlspecialchars($row['Genre']); ?></td>
            <td>
                <a href="edit_movie.php?id=<?php echo $row['MovieID']; ?>">Edit</a> |
                <a href="delete_movie.php?id=<?php echo $row['MovieID']; ?>">Delete</a>
            </td>
        </tr>
        <?php endwhile; ?>
    </table>
</body>
</html>