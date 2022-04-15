<?php
require_once "connect.php";
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully";
$time = time();

$resultSet = $conn->query("SELECT * FROM settime");
$resultClock = $conn->query("SELECT * FROM  startstop");
$resultStopDate = $conn->query("SELECT * FROM  stopdate");

$stoppedClock = $resultClock->fetch_assoc();
$setTime = $resultSet->fetch_assoc();
$stopDate = $resultStopDate->fetch_assoc();

if($stoppedClock['stopped']) {
    $timeLeft =  $setTime['time']-$stopDate['time'];
} else $timeLeft = $setTime['time']-time();

if($timeLeft>0) echo gmdate("i:s", $timeLeft);
    else echo "00:00";

$conn->close();
?>

