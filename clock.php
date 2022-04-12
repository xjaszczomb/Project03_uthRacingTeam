<?php
require_once "connect.php";
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully";
$time = time();
$query = "UPDATE `time` SET `time`=$time WHERE `time` IS NOT NULL";
$query2 = "SELECT * FROM settime";

$conn->query($query);
$result = $conn->query($query2);
$row = mysqli_fetch_row($result);
$timeleft = $row[0]-time();

if($timeleft>0) echo gmdate("i:s", $timeleft);
else echo "00:00";

$conn->close();
?>

