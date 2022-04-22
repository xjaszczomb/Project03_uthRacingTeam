<?php
    require_once "connect.php";
    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    $resultMinutes = $conn->query("SELECT * FROM `minutes` LIMIT 1");
    $minutes = $resultMinutes->fetch_assoc();
    echo $minutes['minutes']." min";
?>