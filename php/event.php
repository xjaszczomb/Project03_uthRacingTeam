<?php
if(isset($_POST['addevent'])) {
    if($_POST['place'] != "" && $_POST['hourstart'] != "" && $_POST['hourend'] != "" && $_POST['date'] != "" && $_POST['type'] != "") {
        require_once "connect.php";
        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        //echo "Connected successfully"

        $place = $_POST['place'];
        $date = $_POST['date'];
        $hourstart = $_POST['hourstart'];
        $hourend = $_POST['hourend'];
        $type = $_POST['type'];

        if($hourstart < $hourend) {
            $query = $conn->query("INSERT INTO events (`place`, `date`, `type`, `hourstart`, `hourend`) VALUES ('$place', '$date', '$type', '$hourstart', '$hourend')");
            if($query) {
                header('Location: ../adduser.php?alertevent=Dodano nowe wydarzenie');
            } else header('Location: ../adduser.php?alertevent=Nastąpił błąd');
        } else header('Location: ../adduser.php?alertevent=Błędna data');

        $conn->close();

    } else header('Location: ../adduser.php?alertevent=Uzupełnij');
}

if(isset($_POST['deleteevent'])) {
    
    require_once "connect.php";
    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }
    //echo "Connected successfully"

    $id = $_POST['id'];
    //echo $id;

    $query = $conn->query("DELETE FROM events WHERE id=$id");

    $conn->close();

header('Location: ../users.php');
}
?>