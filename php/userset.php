<?php
session_start();

if(isset($_POST['adduser'])) {
    if($_POST['name'] != "" && $_POST['lastname'] != "" && $_POST['group'] != "" && $_POST['car'] != "") {
        require_once "connect.php";
        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        }
        //echo "Connected successfully"

        $name = $_POST['name'];
        $lastname = $_POST['lastname'];
        $car = $_POST['car'];
        $group = $_POST['group'];

        $query = $conn->query("INSERT INTO users (`name`, `lastname`, `car`, `group`) VALUES ('$name', '$lastname', '$car', '$group')");

        if($query)
            header('Location: ../adduser.php?alertuser=Dodano uczesnika');
        $conn->close();
    }
    else header('Location: ../adduser.php?alertuser=Uzupełnij');;
}

if(isset($_POST['deleteuser'])) {
    
        require_once "connect.php";
        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        }
        //echo "Connected successfully"

        $id = $_POST['id'];
        //echo $id;

        $query = $conn->query("DELETE FROM users WHERE id=$id");

        $conn->close();

    header('Location: ../users.php');
}
?>