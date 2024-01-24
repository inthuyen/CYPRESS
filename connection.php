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

    $query = "CREATE DATABASE IF NOT EXISTS cypress";
    if ($conn->query($query) === TRUE) {
        echo "Database 'cypress' created successfully.<br>";
    } else {
        echo "Error creating database: " . $conn->error . "<br>";
    }

    $conn->select_db($dbname);

    $query = "CREATE TABLE IF NOT EXISTS reports (
        id INT AUTO_INCREMENT PRIMARY KEY,
        address VARCHAR(255) NOT NULL,
        problems TEXT,
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    )";
    
    $query = "CREATE TABLE IF NOT EXISTS suggestions (
        id INT AUTO_INCREMENT PRIMARY KEY,
        suggestion TEXT,
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    )";
    
    $query = "CREATE TABLE IF NOT EXISTS surveys (
        id INT AUTO_INCREMENT PRIMARY KEY,
        rating INT,
        feedback TEXT,
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    )";
?>