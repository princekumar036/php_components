
<!-- BASE SETTING TO CONNECT TO A DATABASE -->

<?php

    $hostname = '';  // 'localhost'
    $username = '';  // 'root'
    $password = '';  // leave blank
    $db_name = '';  // name of the database

    $conn = mysqli_connect($hostname, $username, $password, $db_name);

    if (!$conn) {
        die('Failed to connect with database');
    }

?>