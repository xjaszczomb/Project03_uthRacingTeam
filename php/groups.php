<?php
session_start();

if(isset($_POST['nextgroup'])) {
    
    require_once "currentgroups.php";
    if($currentGroup < $lastGroup) $conn->query("UPDATE groups SET `current`=$currentGroup+1 WHERE `current` IS NOT NULL");
    else $conn->query("UPDATE groups SET `current`=1 WHERE `current` IS NOT NULL");

    //echo $maxGroup[0];
    $conn->close();

    header('Location: ../admin.php');
}

if(isset($_POST['prevgroup'])) {
    
    require_once "currentgroups.php";
    if($currentGroup > 1) $conn->query("UPDATE groups SET `current`=$currentGroup-1 WHERE `current` IS NOT NULL");
    else $conn->query("UPDATE groups SET `current`=$lastGroup WHERE `current` IS NOT NULL");

    //echo $maxGroup[0];
    $conn->close();

    header('Location: ../admin.php');
}


if(isset($_POST['off'])) {
    
    require_once "trackdaystatus.php";

    if($status['status']) $conn->query("UPDATE statustrackday SET `status`=0 WHERE `status` IS NOT NULL");
    else $conn->query("UPDATE statustrackday SET `status`=1 WHERE `status` IS NOT NULL");

    $conn->query("UPDATE groups SET `current`=1 WHERE `current` IS NOT NULL");
    $conn->close();
    header('Location: ../admin.php');
}
?>