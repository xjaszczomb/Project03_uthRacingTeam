<div class="clock-holder flex">
    <div class="clock round" id="result">00:00</div>
</div>
<div id="table-1"></div>
<div id="table-2"></div>
<div class="table-info flex">
    <div class="info">
        <p>Uczestnicy</p>
        <?php
        require "connect.php";
        $conn = new mysqli($servername, $username, $password, $dbname);
        
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        $resultUsers = $conn->query("SELECT COUNT(id) FROM users");
        $resultGroups = $conn->query("SELECT COUNT(DISTINCT `group`) FROM users");
        $users = $resultUsers->fetch_row();
        $groups = $resultGroups->fetch_row();
        echo "<span>Grupy: ".$groups[0]."</span>
        <span>Uczestnicy: ".$users[0]."</span>";
        $conn->close();
        ?>
    </div>
    <div class="dropdown-menu">
        <!-- <button class="dropdown flex">Zwiń
            <svg width="8" height="6" viewBox="0 0 8 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M7 4.5L4 1.5L1 4.5" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        </button> -->
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
            <?php require "php/tableitem.php"; ?>
        </tbody>
    </table>
</div>