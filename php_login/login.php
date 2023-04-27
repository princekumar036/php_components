
<!-- LOGIN FORM -->

<?php
    session_start();

    // IF SESSION VARS EXISTS -> USER ALREADY AUTHENTICATED -> REDIRECT TO HOME
    if ( isset($_SESSION['username']) && isset($_SESSION['password']) ) {
        header('location: index.php');
        exit;
    }

    // USING SAME HEADER SETTINGS FOR EACH PAGE
    // SET_TITLE ENSURES DIFFERENT TITLE FOR EACH PAGE
    include('./__head__.php');
    function set_title() {
        echo 'Login';
    }
?>

<!-- SIMPLE LOGIN FORM FOR AUTHENTICATION -->
<form action="./login_handler.php" method="post">

    <input type="text" name="username" placeholder="Username" required>
    <input type="text" name="password" placeholder="Password" required>
    <input type="submit" value="Login">

    <!-- DISPALYS ERROR WHICH IS RETURENED AS PART OF URL -->
    <?php if (isset($_GET['error'])) { ?>
        <p>* <?php echo $_GET['error']; ?></p>
    <?php } ?>

</form>