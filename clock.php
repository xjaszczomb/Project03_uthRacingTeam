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

$stoppedClock = mysqli_fetch_row($resultClock);
$setTime = mysqli_fetch_row($resultSet);
$stopDate = mysqli_fetch_row($resultStopDate);

if($stoppedClock[0]) {
    $timeLeft =  $setTime[0]-$stopDate[0];
} else $timeLeft = $setTime[0]-time();

if($timeLeft>0) echo gmdate("i:s", $timeLeft);
    else echo "00:00";

$conn->close();
?>

