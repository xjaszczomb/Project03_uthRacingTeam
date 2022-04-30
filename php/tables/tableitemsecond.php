<?php

require "../currentgroups.php";

if($currentGroup < $lastGroup) $resultUsers = $conn->query("SELECT * FROM users WHERE `group`=$currentGroup+1 ORDER BY `name`");
else $resultUsers = $conn->query("SELECT * FROM users WHERE `group`=1 ORDER BY `name`");

$users = $resultUsers->fetch_assoc();

foreach($resultUsers as $users) {
    echo "<tr>
            <td>".$users['name']."</td>
            <td>".$users['lastname']."</td>
            <td>".$users['car']."</td>
            <td class='group'>".$users['group']."</td>
        </tr>";
}

$conn->close();
?>