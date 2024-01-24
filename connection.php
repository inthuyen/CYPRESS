<?php
    $servername = "mysql";
    $username = "root";
    $password = "yourpassword";
    $dbname = "cypress";
    $port = 3306; // Default MySQL port

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
?>