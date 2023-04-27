
<?php
session_start();
include('./db_conn.php');

    // CHECK USERNAME AND PASSWORD NOT EMPTY
    if ( empty($_POST['username']) || empty($_POST['password']) ) {
        header("location: login.php?error=Missing username or password");
        exit;
    }

    // VALIDATE USERNAME AND PASSWORD
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    $username = validate($_POST['username']);
    $password = validate($_POST['password']);

    // VALIDATE WITH DATABASE
    $sql = "SELECT * FROM administrators WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    
    if ( $row['username'] !== $username || $row['password'] !== $password ) {
        header('location: login.php?error=Invalid username or password');
        exit;
    }
    
    // IF EVERYTHING OK -> SET SESSION VARIABLES AND REDIRECT TO HOME
    $_SESSION['username'] = $username;
    $_SESSION['password'] = $password;
    header('location: index.php');
?>