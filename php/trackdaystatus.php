<?php
require_once "connect.php";
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$resultStatus = $conn->query("SELECT * FROM statustrackday");
$status = $resultStatus->fetch_assoc();
//echo $status['status'];
    
?>