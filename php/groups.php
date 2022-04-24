<?php
session_start();

if(isset($_POST['nextgroup'])) {
    
    require_once "connect.php";
    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $resultMaxGroup = $conn->query("SELECT DISTINCT MAX(`group`) FROM users LIMIT 1");
    $maxGroup = $resultMaxGroup->fetch_row();
    echo $maxGroup[0];
    $conn->close();

  //  header('Location: ../admin.php');
}


if(isset($_POST['off'])) {
    
    require_once "trackdaystatus.php";

    if($status['status']) $conn->query("UPDATE statustrackday SET `status`=0 WHERE `status` IS NOT NULL");
    else $conn->query("UPDATE statustrackday SET `status`=1 WHERE `status` IS NOT NULL");

    $conn->close();
    header('Location: ../admin.php');
}
?>