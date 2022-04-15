<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
</head>
<body>
    <div id="result">00:00</div>

    <script>
        const inter = setInterval(Timer,1000);
        function Timer(){
            let xmlhttp= new XMLHttpRequest();
            xmlhttp.open("GET","clock.php",false);
            xmlhttp.send(null);
            document.getElementById("result").innerHTML=xmlhttp.responseText;
        } 
    </script>

    <form action="setclock.php" method="POST">
        <input type="number" name="minutes">
        <input type="submit" name="setclock" value="ustaw">
        <input type="submit" name="stopclock" value="stop">
        <input type="submit" name="startclock" value="start">
        <input type="submit" name="reset" value="reset">
    </form>
    <div>
        <p>Aktualne ustawienie: 
            <?php
            require_once "connect.php";
            $conn = new mysqli($servername, $username, $password, $dbname);
        
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
            
            $resultMinutes = $conn->query("SELECT * FROM `minutes` LIMIT 1");
            $minutes = $resultMinutes->fetch_assoc();
            echo $minutes['minutes']." min";
            ?>
        </p>
    </div>
</body>
</html>