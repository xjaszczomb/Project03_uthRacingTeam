<?php
require_once "connect.php";
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully";
$minutes = $_POST['minutes'];
$time = time()+$minutes*60;

$query = "UPDATE `settime` SET `settime`=$time WHERE `settime` IS NOT NULL";
$conn->query($query);

$conn->close();
?>