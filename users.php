<?php
session_start();
if(!$_SESSION['logged'])
header('Location: index.php');
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
    <nav class="sm-nav top fixed flex" data-version="mobile">
        <form action="php/logincheck.php" method="POST">
            <button class="btn-light round" type="submit" name="logout" >Wyloguj</button>
        </form>
    </nav>
    <main class="main flex">
        <table class="trackday-table">
            <thead>
                <tr>
                    <th>Imię</th>
                    <th>Nazwisko</th>
                    <th>Auto</th>
                    <th class="group">Gr.</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php require_once "php/tableitemdelete.php";?>
            </tbody>
        </table>
    </main>
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
</body>
</html>