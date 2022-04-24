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
    </tr>";
}

$conn->close();
?>