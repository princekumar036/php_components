
<!-- BASE SETTING TO CONNECT TO A DATABASE -->

<?php

    $hostname = 'localhost';
    $username = 'root';
    $password = '';
    $db_name = 'template_website';

    $conn = mysqli_connect($hostname, $username, $password, $db_name);

    if (!$conn) {
        die('Failed to connect with database');
    }

?>