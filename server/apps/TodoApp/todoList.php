  <?php
    // Database connection
    include($_SERVER['DOCUMENT_ROOT'] . '/api/db.php');

    // Retrieve and display todos
    $result = $conn->query("SELECT * FROM todos ORDER BY created_at DESC");

    if ($result->num_rows > 0) {
        echo "<ul>";
        while ($row = $result->fetch_assoc()) {
            echo "<li>" . htmlspecialchars($row['task']) . " <a href='/apps/TodoApp/actions.php?delete=" . $row['id'] . "'><button class='delete-btn'>Delete</button></a></li>";
        }
        echo "</ul>";
    } else {
        echo "<p>No todos yet!</p>";
    }

    $conn->close();
    ?>