  <?php
    // Database connection
    include($_SERVER['DOCUMENT_ROOT'] . '/api/db.php');

    $todos = array();
    // Retrieve and display todos
    $result = $conn->query("SELECT * FROM todos ORDER BY created_at DESC");

    if ($result->num_rows > 0) {
        // Output data of each row
        while ($row = $result->fetch_assoc()) {
            $todos[] = $row;
        }
    }

    // Return todos as JSON
    echo json_encode($todos);

    $conn->close();
    ?>