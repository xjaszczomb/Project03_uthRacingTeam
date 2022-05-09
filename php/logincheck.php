<?php
session_start();

if(isset($_POST['logging'])) {
    if($_POST['login'] != "" && $_POST['password'] != "") {
        require_once "connect.php";
        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        }
        //echo "Connected successfully"

        $login = $conn->real_escape_string($_POST['login']);
        $passwd = $conn->real_escape_string($_POST['password']);
        
        $check = $conn->query("SELECT * FROM `admin` WHERE `login`='$login' AND `password`='$passwd'");
        $countnums = $check->num_rows;
        if($countnums == 1) {
            $_SESSION['logged']=true;
            header('Location: ../admin.php');
        } else header('Location: ../login.php');

        $conn->close();
    }
    header('Location: ../login.php');
}
if(isset($_POST['logout'])) {
    
    $_SESSION['logged']=false;
    header('Location: ../index.php');
}

?>