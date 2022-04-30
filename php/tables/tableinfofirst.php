<?php

require_once '../currentgroups.php';

$resultCount = $conn->query("SELECT COUNT(id) FROM users WHERE `group`=$currentGroup");
$count = $resultCount->fetch_row();

echo "<span>Grupa: ".$currentGroup."</span>
    <span>Uczestnicy: ".$count[0]." </span>";

$conn->close();
?>