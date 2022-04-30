<?php
    require_once "connect.php";
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $resultUsers = $conn->query("SELECT COUNT(id) FROM users");
    $resultGroups = $conn->query("SELECT COUNT(DISTINCT `group`) FROM users");
    $users = $resultUsers->fetch_row();
    $groups = $resultGroups->fetch_row();
    echo "<span>Grupy: ".$groups[0]."</span>
    <span>Uczestnicy: ".$users[0]."</span>";
    $conn->close();
?>