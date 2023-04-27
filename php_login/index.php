
<?php

    session_start();
    include('./db_conn.php');

    // IF SESSION VARS DNE -> USER NOT AUTHENTICATED -> GO BACK TO LOGIN PAGE
    if ( !isset($_SESSION['username']) || !isset($_SESSION['password']) ) {
        header('location: login.php');
        exit;
    }

    // USING SAME HEADER SETTINGS FOR EACH PAGE
    // SET_TITLE ENSURES DIFFERENT TITLE FOR EACH PAGE
    include('./__head__.php');
    function set_title() {
        echo "Home";     // THIS IS THE TITLE FOR THIS PAGE
    }
?>

<!-- MAIN BODY OF THE PAGE -->
<body>
    <h1>Welcome to HOME</h1>
    <p>This page is accessible only after successful authentication</p>
    <a href="./logout.php">Logout</a>
</body>
</html>

