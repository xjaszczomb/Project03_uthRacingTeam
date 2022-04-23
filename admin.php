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
    <link rel="stylesheet" href="css/style.css">
    <script src="js/jquery.min.js"></script>
</head>
<body>
        <div class="clock-settings flex">
            <div class="clock-holder flex">
                <div class="clock round" id="result">00:00</div>
            </div>
            <form class="clock-form" action="setclock.php" method="POST">
                <div class="form-items-holder flex">
                    <div class="form-items flex">
                        <div class="form-btns flex">
                            <input class="form-btn" type="submit" name="setclock" value="ustaw">
                            <input class="form-btn" type="submit" name="stopclock" value="stop">
                            <input class="form-btn" type="submit" name="startclock" value="start">
                            <input class="form-btn" type="submit" name="reset" value="reset">
                        </div>
                        <input type="number" name="minutes">
                        <p>Aktualne ustawienie: <?php require_once "php/currentsettime.php";?></p>
                    </div>
                </div>
            </form>
        </div>
        <nav class="nav-admin bottom fixed flex">
            <div class="nav-admin-list flex">
                <a href="admin.php">
                    <div class="nav-admin-item flex round">
                        <img src="icons/clock.svg" alt="adduser">
                    </div>
                </a>
                <a href="users.php">
                    <div class="nav-admin-item flex round">
                        <img src="icons/users.svg" alt="adduser">
                    </div>
                </a>
                <a href="adduser.php">
                    <div class="nav-admin-item flex round">
                        <img src="icons/user-plus.svg" alt="adduser">
                    </div>
                </a>
            </div>
        </nav>
    

    <script src="js/script.js"></script>
</body>
</html>