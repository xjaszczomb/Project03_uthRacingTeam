<?php
require_once "connect.php";
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$output = "";
if (isset($_POST['query'])) {
    $search = $conn->real_escape_string(strtolower($_POST['query']));
    $sql = "SELECT `name`, `lastname`, `car`, `group` FROM users WHERE LOWER(`name`) LIKE '%$search%' || LOWER(`lastname`) LIKE '%$search%' || 
            LOWER(`car`) LIKE '%$search%' || LOWER(`group`) LIKE '%$search%'";
} else $sql = "SELECT `name`, lastname, `car`, `group` FROM users ORDER BY `lastname`";

$query = $conn->query($sql);
$countnum = $query->num_rows;
$row = $query->fetch_assoc();
if ($countnum > 0) {
    $output .= "<table class='trackday-table'>
                    <thead>
                        <tr>
                            <th>Imię</th>
                            <th>Nazwisko</th>
                            <th>Auto</th>
                            <th class='group'>Gr.</th>
                        </tr>
                    </thead>
                <tbody>";
    foreach ($query as $row) {
        $output .=  "   <tr>
                            <td>".$row['name']."</td>
                            <td>".$row['lastname']."</td>
                            <td>".$row['car']."</td>
                            <td class='group'>".$row['group']."</td>
                        </tr>";
    }
    $output .="</tbody>
                </table>";
    echo $output;
}   else echo 'Brak wyników wyszukiwania.';

$conn->close();
?>