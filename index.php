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
    <nav class="fixed" data-position="left" data-version="desktop">
        <button class="btn-dark round">Track Day</button>
        <div>

        </div>
        <button class="btn-white">Racing Team</button>
    </nav>

    <nav class="sm-nav top sticky flex" data-version="mobile">
        <button class="btn-dark round">Track Day</button>
        <a href="login.php"><button class="btn-light round">Zaloguj</button></a>
    </nav>

    <nav class="sm-nav bottom fixed flex" data-version="mobile">
        <button class="btn-white">Racing Team</button>
        <button class="btn-white">Sponsorzy</button>
    </nav>
    <main class="flex main">
        <article>
            <div class="logo flex">
                <img src="img/logo.png" alt="logo uth racing team">
            </div>
            <section>
                <header>
                    <div class="line">
                        <hr>
                    </div>
                    <div class="title-holder">
                        <h2 class="title">uth</h2>
                        <h2 class="title">racing</h2>
                        <h2 class="title">team</h2>
                    </div>
                    <div class="tags flex">
                        <div class="tag">Motoryzacja</div>
                        <div class="tag">Track Days</div>
                        <div class="tag">Zabawa</div>
                    </div>
                </header>
                <div class="img-xl">
                    <img src="img/car.png" alt="samochód">
                </div>
            </section>
            <section>
                <header>
                    <div class="line">
                        <hr>
                    </div>
                    <div class="title-holder">
                        <h2 class="title">Track Day</h2>
                    </div>
                    <div class="tags flex">
                        <div class="tag">Motorsport</div>
                        <div class="tag">Konkursy</div>
                        <div class="tag">Trening</div>
                    </div>
                </header>
                <?php 
                    require_once "php/trackdaystatus.php";
                    if($status['status']) require_once "php/trackdayon.php";
                    else require_once "php/trackdayoff.php";;
                ?>
            </section>
        </article>
    </main>
    <nav class="fixed" data-position="right" data-version="desktop">
        <button>Zaloguj</button>
        <div>
            
        </div>
        <button>Sponsorzy</button>
    </nav>
    <script src="js/script.js"></script>
</body>
</html>


