<?php

require_once "connect.php";
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully"

$resultEvents = $conn->query("SELECT * FROM events");
$events = $resultEvents->fetch_assoc();

foreach($resultEvents as $users) {
    echo "<tr>
        <td>".$events['place']."</td>
        <td>".$events['date']."</td>
        <td>".$events['hourstart']."-".$events['hourend']."</td>
        <td class='group'>".$events['type']."</td>
        <td>
        <form action='php/event.php' method='POST'>
            <button class='delete' type='submit' name='deleteevent'>
                <div class='img flex'>
                    <img src='icons/x-circle.svg' alt=''>
                </div>
            </button>
            <input type='hidden' name='id' value='".$events['id']."'>
        </form>
        </td>
    </tr>";
}

$conn->close();
?>