<?php

require_once '../currentgroups.php';

$resultUsers = $conn->query("SELECT * FROM users WHERE `group`=$currentGroup ORDER BY `name`");
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