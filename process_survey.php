<?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    include 'connection.php';

    // Retrieve form data
    $rating = $_POST['rating'];
    $feedback = $_POST['feedback'];

    // Store the data in a SQL database
    $sql = "INSERT INTO surveys (rating, feedback) VALUES (?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $rating, $feedback);

    if ($stmt->execute()) {
        echo "Report submitted successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $stmt->close();
    $conn->close();
    
?>