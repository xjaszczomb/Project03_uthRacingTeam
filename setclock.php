<?php
if(isset($_POST['setclock'])) {
    if($_POST['minutes']!="") {
        require_once "connect.php";
        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        }
        //echo "Connected successfully"

        $minutes = $_POST['minutes'];
        $time = time()+$minutes*60;

        $conn->query("UPDATE `minutes` SET `minutes`=$minutes WHERE `minutes` IS NOT NULL");
        $conn->query("UPDATE `settime` SET `time`=$time WHERE `time` IS NOT NULL");

        $conn->close();
    }
    header('Location: admin.php');
}

if(isset($_POST['reset'])) {
    require_once "connect.php";
    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }
    //echo "Connected successfully"
    
    $resultMinutes = $conn->query("SELECT * FROM `minutes` LIMIT 1");

    $minutes = $resultMinutes->fetch_assoc();
    $time = time()+$minutes['minutes']*60;

    $conn->query("UPDATE `settime` SET `time`=$time WHERE `time` IS NOT NULL");

    $conn->close();
    header('Location: admin.php');
}

if(isset($_POST['stopclock'])) {
    require_once "connect.php";
    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }

    $resultClock = $conn->query("SELECT * FROM  startstop LIMIT 1");
    $stoppedClock = $resultClock->fetch_assoc();

    if(!$stoppedClock['stopped']) {
        $time = time();
        $conn->query("UPDATE `startstop` SET `stopped`=1 WHERE `stopped` IS NOT NULL");
        $conn->query("UPDATE `stopdate` SET `time`=$time WHERE `time` IS NOT NULL");
    }

    $conn->close();
    header('Location: admin.php');
}

if(isset($_POST['startclock'])) {
    require_once "connect.php";
    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $resultClock = $conn->query("SELECT * FROM  startstop LIMIT 1");
    $stoppedClock = $resultClock->fetch_assoc();

    if($stoppedClock['stopped']) {
        $resultSet = $conn->query("SELECT * FROM settime LIMIT 1");
        $resultStopDate = $conn->query("SELECT * FROM  stopdate LIMIT 1");

        $time = time();
        $setTime = $resultSet->fetch_assoc();
        $stopDate = $resultStopDate->fetch_assoc();

        $setTime['time']=$setTime['time']+($time-$stopDate['time']);

        $conn->query("UPDATE `startstop` SET `stopped`=0 WHERE `stopped` IS NOT NULL");
        $conn->query('UPDATE `settime` SET `time`='.$setTime['time'].' WHERE `time` IS NOT NULL');

    }
    $conn->close();
    header('Location: admin.php');
}
?>