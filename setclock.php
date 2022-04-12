<?php
if(isset($_POST['setclock'])) {
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
    header('Location: index.php');
}

if(isset($_POST['stopclock'])) {
    require_once "connect.php";
    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }

    $resultClock = $conn->query("SELECT * FROM  startstop");
    $stoppedClock = mysqli_fetch_row($resultClock);

    if(!$stoppedClock[0]) {
        $time = time();
        $conn->query("UPDATE `startstop` SET `stopped`=1 WHERE `stopped` IS NOT NULL");
        $conn->query("UPDATE `stopdate` SET `time`=$time WHERE `time` IS NOT NULL");
    }

    $conn->close();
    header('Location: index.php');
}

if(isset($_POST['startclock'])) {
    require_once "connect.php";
    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $resultClock = $conn->query("SELECT * FROM  startstop");
    $stoppedClock = mysqli_fetch_row($resultClock);

    if($stoppedClock[0]) {
        $resultSet = $conn->query("SELECT * FROM settime");
        $resultStopDate = $conn->query("SELECT * FROM  stopdate");

        $time = time();
        $setTime = mysqli_fetch_row($resultSet);
        $stopDate = mysqli_fetch_row($resultStopDate);

        $setTime[0]=$setTime[0]+($time-$stopDate[0]);

        $conn->query("UPDATE `startstop` SET `stopped`=0 WHERE `stopped` IS NOT NULL");
        $conn->query("UPDATE `settime` SET `settime`=$setTime[0] WHERE `settime` IS NOT NULL");

    }
    $conn->close();
    header('Location: index.php');
}
?>