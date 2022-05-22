<div class="clock-holder flex">
    <div class="clock round" id="result">00:00</div>
</div>
<div class='table-info flex'>
    <div class='info'>
        <p>Na torze</p>
        <div id="table-1-info"></div>
    </div>
    <div class='dropdown-menu' aria-controls="first">
        <button class='dropdown flex'>
            <span>Zwiń</span>
            <span class="none">Rozwiń</span>
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
        <button class='dropdown flex'>
            <span>Zwiń</span>
            <span class="none">Rozwiń</span>
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
    <div class="control-content flex">
        <div class="dropdown-search">
            <div class="search flex">
                <span>Wyszukaj</span>
                <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M11.2905 19.4365C15.7088 19.4365 19.2905 15.8548 19.2905 11.4365C19.2905 7.01825 15.7088 3.43652 11.2905 3.43652C6.87225 3.43652 3.29053 7.01825 3.29053 11.4365C3.29053 15.8548 6.87225 19.4365 11.2905 19.4365Z" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M21.2906 21.4364L16.9406 17.0864" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </div>
            <div id="dropSearch" class="dropdown-search-input">
                <input id="search" type="text">
            </div>
        </div>
        <div class="dropdown-menu" aria-controls="last" >
            <button class="dropdown flex">
                <span>Zwiń</span>
                <span class="none">Rozwiń</span>
                <svg width="8" height="6" viewBox="0 0 8 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M7 4.5L4 1.5L1 4.5" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </button>
        </div>
    </div>
</div>
<div id="last" class="dropdown-content" data-visible="true">
    <span id="searchresult"></span>
</div>