<?php

require "currentgroups.php";



if($currentGroup < $lastGroup) {
    $resultUsers = $conn->query("SELECT * FROM users WHERE `group`=$currentGroup+1 ORDER BY `name`");
    $resultCount = $conn->query("SELECT COUNT(id) FROM users WHERE `group`=$currentGroup+1");
}
else {
    $resultUsers = $conn->query("SELECT * FROM users WHERE `group`=1 ORDER BY `name`");
    $resultCount = $conn->query("SELECT COUNT(id) FROM users WHERE `group`=1");
}
$users = $resultUsers->fetch_assoc();
$count = $resultCount ->fetch_row();

echo "<div class='table-info flex'>
        <div class='info'>
            <p>Oczekuje</p>
            <span>Grupa: ";
            if($currentGroup < $lastGroup) echo $currentGroup+1;
            else echo 1;
    echo   "</span>
            <span>Uczestnicy: ".$count[0]."</span>
        </div>
        <div class='dropdown-menu'>
            <button class='dropdown flex'>Zwiń
                <svg width='8' height='6' viewBox='0 0 8 6' fill='none' xmlns='http://www.w3.org/2000/svg'>
                    <path d='M7 4.5L4 1.5L1 4.5' stroke='black' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'/>
                </svg>
            </button>
        </div>
        </div>
        <div class='dropdown-content' data-visible='true'>
        <table class='trackday-table'>
            <thead>
                <tr>
                    <th>Imię</th>
                    <th>Nazwisko</th>
                    <th>Auto</th>
                    <th class='group'>Gr.</th>
                </tr>
            </thead>
            <tbody>";
        foreach($resultUsers as $users) {
            echo "<tr>
                    <td>".$users['name']."</td>
                    <td>".$users['lastname']."</td>
                    <td>".$users['car']."</td>
                    <td class='group'>".$users['group']."</td>
                </tr>";
        }
    echo  "</tbody>
    </table>
</div>";

$conn->close();
?>