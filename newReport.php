<?php

    $address = $_POST['address'];
    $problem = $_POST['problem'];
    $reports = file('reports.txt', FILE_IGNORE_NEW_LINES);
    
    file_put_contents('reports.txt', $address . ":" . $problem . "\r\n", FILE_APPEND);
  
    echo "<script> window.open('allReports.php', '_self') </script>";

?>
