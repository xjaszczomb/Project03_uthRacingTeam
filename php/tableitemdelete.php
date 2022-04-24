<?php

require_once "connect.php";
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully"

$resultUsers = $conn->query("SELECT * FROM users");
$users = $resultUsers->fetch_assoc();

foreach($resultUsers as $users) {
    echo "<tr>
        <td>".$users['name']."</td>
        <td>".$users['lastname']."</td>
        <td>".$users['car']."</td>
        <td class='group'>".$users['group']."</td>
        <td>
        <form action='php/userset.php' method='POST'>
            <button class='delete' type='submit' name='deleteuser'>
                <div class='img flex'>
                    <img src='icons/x-circle.svg' alt=''>
                </div>
            </button>
            <input type='hidden' name='id' value='".$users['id']."'>
        </form>
        </td>
    </tr>";
}

$conn->close();
?>