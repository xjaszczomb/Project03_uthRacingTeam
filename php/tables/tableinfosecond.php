<?php

require "../currentgroups.php";

if($currentGroup < $lastGroup) $resultCount = $conn->query("SELECT COUNT(id) FROM users WHERE `group`=$currentGroup+1");
else $resultCount = $conn->query("SELECT COUNT(id) FROM users WHERE `group`=1");

$count = $resultCount ->fetch_row();

echo "<span>Grupa: ";
    if($currentGroup < $lastGroup) echo $currentGroup+1;
    else echo 1;
echo "</span>
    <span>Uczestnicy: ".$count[0]."</span>";

$conn->close();
?>