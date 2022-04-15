<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UTH Racing Team</title>
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

</body>
</html>