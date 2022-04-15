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
</head>
<body>
    <!-- <div id="result">00:00</div>

    <script>
        const inter = setInterval(Timer,1000);
        function Timer(){
            let xmlhttp= new XMLHttpRequest();
            xmlhttp.open("GET","clock.php",false);
            xmlhttp.send(null);
            document.getElementById("result").innerHTML=xmlhttp.responseText;
        } 
    </script> -->

    <main class="flex">
        <nav class="fixed" data-position="left" data-version="desktop">
            <button class="">Track Day</button>
            <div>

            </div>
            <button>Racing Team</button>
        </nav>
        <nav class="sm-nav top fixed flex" data-version="mobile">
            <button class="btn-dark round">Track Day</button>
            <button class="btn-light round">Zaloguj</button>
        </nav>
        <nav class="sm-nav bottom fixed flex" data-version="mobile">
            <button class="btn-white">Racing Team</button>
            <button class="btn-white">Sponsorzy</button>
        </nav>
        <article>
            <section>
                <div>
                    <img src="img/logo.png" alt="logo uth racing team">
                </div>
                <header>
                    <div><hr></div>
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
                <div>
                    <!-- <img src="img/car.png" alt="samochód"> -->
                </div>
            </section>
            <section>
                <header>
                    <div><hr></div>
                    <div class="title-holder">
                        <h2 class="title">Track Day</h2>
                    </div>
                    <div class="tags flex">
                        <div class="tag">Motorsport</div>
                        <div class="tag">Konkursy</div>
                        <div class="tag">Trening</div>
                    </div>
                </header>
            </section>
        </article>
        <nav class="fixed" data-position="right" data-version="desktop">
            <button>Zaloguj</button>
            <div>
                
            </div>
            <button>Sponsorzy</button>
        </nav>
    </main>
</body>
</html>