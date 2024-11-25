<?php
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