<?php
require "connect.php";
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$resultMaxGroup = $conn->query("SELECT DISTINCT MAX(`group`) FROM users LIMIT 1");
$resultCurrent = $conn->query("SELECT current FROM groups LIMIT 1");
$maxGroup = $resultMaxGroup->fetch_row();
$current = $resultCurrent->fetch_assoc();

$currentGroup=$current['current'];
$lastGroup =$maxGroup[0];
?>