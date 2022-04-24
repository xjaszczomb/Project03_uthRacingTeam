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
                <div class="clock-holder flex">
                    <div class="clock round" id="result">00:00</div>
                </div>
                <div class="table-info flex">
                    <div class="info">
                        <p>Na torze</p>
                        <span>Grupa: </span>
                        <span>Uczestnicy: </span>
                    </div>
                    <div class="dropdown-menu">
                        <button class="dropdown flex">Zwiń
                            <svg width="8" height="6" viewBox="0 0 8 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M7 4.5L4 1.5L1 4.5" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="dropdown-content" data-visible="true">
                    <table class="trackday-table">
                        <thead>
                            <tr>
                                <th>Imię</th>
                                <th>Nazwisko</th>
                                <th>Auto</th>
                                <th class="group">Gr.</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php require_once "php/tableitem.php"; ?>
                        </tbody>
                    </table>
                </div>
                <div class="table-info flex">
                    <div class="info">
                        <p>Oczekuje</p>
                        <span>Grupa: </span>
                        <span>Uczestnicy: </span>
                    </div>
                    <div class="dropdown-menu">
                        <button class="dropdown flex">Zwiń
                            <svg width="8" height="6" viewBox="0 0 8 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M7 4.5L4 1.5L1 4.5" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="dropdown-content" data-visible="true">
                    <table class="trackday-table">
                        <thead>
                            <tr>
                                <th>Imię</th>
                                <th>Nazwisko</th>
                                <th>Auto</th>
                                <th class="group">Gr.</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Martyna</td>
                                <td>Jastrzębska</td>
                                <td>Honda Civic</td>
                                <td class="group">1</td>
                            </tr>
                            <tr>
                                <td>Artur</td>
                                <td>Orkwiszewski</td>
                                <td>Subaru Impreza</td>
                                <td class="group">1</td>
                            </tr>
                            <tr>
                                <td>abcdefghijklmnopr</td>
                                <td>SRATATATATAATaaaaaaa</td>
                                <td>Subaru Imprezaaaaaaaaaaa</td>
                                <td class="group">1</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="table-info flex">
                    <div class="info">
                        <p>Uczestnicy</p>
                        <span>Grupy: </span>
                        <span>Uczestnicy: </span>
                    </div>
                    <div class="dropdown-menu">
                        <button class="dropdown flex">Zwiń
                            <svg width="8" height="6" viewBox="0 0 8 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M7 4.5L4 1.5L1 4.5" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="dropdown-content" data-visible="true">
                    <table class="trackday-table">
                        <thead>
                            <tr>
                                <th>Imię</th>
                                <th>Nazwisko</th>
                                <th>Auto</th>
                                <th class="group">Gr.</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Martyna</td>
                                <td>Jastrzębska</td>
                                <td>Honda Civic</td>
                                <td class="group">1</td>
                            </tr>
                            <tr>
                                <td>Artur</td>
                                <td>Orkwiszewski</td>
                                <td>Subaru Impreza</td>
                                <td class="group">1</td>
                            </tr>
                            <tr>
                                <td>abcdefghijklmnopr</td>
                                <td>SRATATATATAATaaaaaaa</td>
                                <td>Subaru Imprezaaaaaaaaaaa</td>
                                <td class="group">1</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
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


