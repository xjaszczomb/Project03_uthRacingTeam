<?php
session_start();
if(isset($_SESSION['logged'])) {
    if($_SESSION['logged'])
    header('Location: admin.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UTH Racing Team - Logowanie</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="js/jquery.min.js"></script>
</head>
<body>
    <nav class="sm-nav top fixed flex" data-version="mobile">
        <a href="index.php"><button class="btn-light round">Powrót</button></a>
    </nav>
    <main class="window-center flex">
        <form action="php/logincheck.php" method="POST">
            <div class="form-items-holder flex">
                <div class="form-items flex">
                    <div class="info login-info">
                        <p>Logowanie</p>
                    </div>
                    <div class="form-inputs flex">
                        <input type="text" name="login" placeholder="Login">
                        <input type="password" name="password" placeholder="Hasło">
                    </div>
                    <div class="form-btns flex end" data-typehold="button">
                        <button class="btn-dark round" type="submit" name="logging">Zaloguj</button>
                    </div>
                </div>
            </div>
        </form>
    </main>
</body>
</html>