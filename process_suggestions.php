<?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
    
    include 'connection.php';

    $suggestion = $_POST["suggestions"];

    // Prepare and execute an SQL query to insert the data into your database
    $sql = "INSERT INTO suggestions (suggestion) VALUES (?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $suggestion);

    if ($stmt->execute()) {
        echo "Report submitted successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $stmt->close();
    $conn->close();

?>