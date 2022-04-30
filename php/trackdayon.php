<div class="clock-holder flex">
    <div class="clock round" id="result">00:00</div>
</div>
<div class='table-info flex'>
    <div class='info'>
        <p>Na torze</p>
        <div id="table-1-info"></div>
    </div>
    <div class='dropdown-menu' aria-controls="first">
        <button class='dropdown flex'>Zwiń
            <svg width='8' height='6' viewBox='0 0 8 6' fill='none' xmlns='http://www.w3.org/2000/svg'>
                <path d='M7 4.5L4 1.5L1 4.5' stroke='black' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'/>
            </svg>
        </button>
    </div>
</div>
<div id="first" class='dropdown-content' data-visible='true'>
    <table class='trackday-table'>
        <thead>
            <tr>
                <th>Imię</th>
                <th>Nazwisko</th>
                <th>Auto</th>
                <th class='group'>Gr.</th>
            </tr>
        </thead>
        <tbody id="table-1"></tbody>
    </table>
</div>
<div class='table-info flex'>
    <div class='info'>
        <p>Oczekuje</p>
        <div id="table-2-info"></div>
    </div>
    <div class='dropdown-menu' aria-controls="second">
        <button class='dropdown flex'>Zwiń
            <svg width='8' height='6' viewBox='0 0 8 6' fill='none' xmlns='http://www.w3.org/2000/svg'>
                <path d='M7 4.5L4 1.5L1 4.5' stroke='black' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'/>
            </svg>
        </button>
    </div>
</div>
<div id="second" class='dropdown-content' data-visible='true'>
    <table class='trackday-table'>
        <thead>
            <tr>
                <th>Imię</th>
                <th>Nazwisko</th>
                <th>Auto</th>
                <th class='group'>Gr.</th>
            </tr>
        </thead>
        <tbody id="table-2"></tbody>
    </table>
</div>

<div class="table-info flex">
    <div class="info">
        <p>Uczestnicy</p>
        <?php require "tableinfolast.php"?>
    </div>
    <div class="dropdown-menu" aria-controls="last" >
        <button class="dropdown flex">Zwiń
            <svg width="8" height="6" viewBox="0 0 8 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M7 4.5L4 1.5L1 4.5" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        </button>
    </div>
</div>
<div id="last" class="dropdown-content" data-visible="true">
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
            <?php require "tableitemlast.php"?>
        </tbody>
    </table>
</div>