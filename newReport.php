<?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
    
    include 'connection.php';

    $address = $_POST['address'];
    $problems = $_POST['problems'];
  
    // Convert the array of selected problems into a comma-separated string
    $problemStr = implode(', ', $problems);

    // Prepare and execute an SQL query to insert the data into your database
    $sql = "INSERT INTO reports (address, problems) VALUES (?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $address, $problemStr);

    if ($stmt->execute()) {
        echo "Report submitted successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $stmt->close();
    $conn->close();
?>
