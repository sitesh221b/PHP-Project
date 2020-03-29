<?php
    session_start();
    unset($_SESSION['verified_user']);
    unset($_SESSION['verified_phone']);
    header("Location: login.php")
?>