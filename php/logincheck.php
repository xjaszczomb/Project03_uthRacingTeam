<?php
session_start();

if(isset($_POST['logging'])) {
    if(!empty($_POST['login']) && !empty($_POST['password'])) {
        require_once "connect.php";
        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $login = $conn->real_escape_string($_POST['login']);
        $password = $conn->real_escape_string($_POST['password']);
        
        $stmt = $conn->prepare("SELECT * FROM `admin` WHERE `login`=?");
        $stmt->bind_param("s", $login);
        $stmt->execute();
        $result = $stmt->get_result();

        if($result->num_rows === 1) {
        $user = $result->fetch_array(MYSQLI_ASSOC);

        $user_login = $user['login'];
        $user_password = $user['password'];

            if($login == $user_login) {
                if (password_verify($password, $user_password)) {
                    $_SESSION['logged'] = true;
                    $_SESSION['user_login'] = $user_login;
                    header('Location: ../admin.php');
                } 
                else header('Location: ../login.php?error=Niepoprawny login lub hasło');
            }
            else header('Location: ../login.php?error=Niepoprawny login lub hasło');
        } 
        else header('Location: ../login.php?error=Niepoprawny login lub hasło');

        
        $conn->close();
    }
    else header('Location: ../login.php?error=E-mail lub hasło nie zostało podane');
}

if(isset($_POST['logout'])) {
    
    session_unset();
    session_destroy();

    header('Location: ../index.php');
}

?>