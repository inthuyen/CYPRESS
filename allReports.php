<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include 'connection.php';

// Query to retrieve reports from the database
$sql = "SELECT * FROM reports";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output the table header
    echo '<table>';
    echo '<tr><th>ID</th><th>Address</th><th>Problems</th><th>Created At</th></tr>';

    // Output data of each row
    while ($row = $result->fetch_assoc()) {
        echo '<tr>';
        echo '<td>' . $row["id"] . '</td>';
        echo '<td>' . $row["address"] . '</td>';
        echo '<td>' . $row["problems"] . '</td>';
        echo '<td>' . $row["created_at"] . '</td>';
        echo '</tr>';
    }
    echo '</table>';
} else {
    echo "No reports found.";
}

$conn->close();
?>
