<?php
// Connect to database
include 'database.php'; // This file contains your DB connection info

// Query to get all movies
$query = "SELECT * FROM Movie";
$result = mysqli_query($conn, $query);
?>

<table>
    <tr>
        <th>Movie Title</th>
        <th>Release Date</th>
        <th>Genre</th>
        <th>Actions</th>
    </tr>

    <?php while ($row = mysqli_fetch_assoc($result)): ?>
        <tr>
            <td><?php echo $row['MovieTitle']; ?></td>
            <td><?php echo $row['ReleaseDate']; ?></td>
            <td><?php echo $row['Genre']; ?></td>
            <td>
                <!-- Edit Button -->
                <a href="edit_movie.php?id=<?php echo $row['MovieID']; ?>">Edit</a> | 
                <!-- Delete Button -->
                <a href="delete_movie.php?id=<?php echo $row['MovieID']; ?>">Delete</a>
            </td>
        </tr>
    <?php endwhile; ?>
</table>