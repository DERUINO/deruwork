<?php session_start(); ?>
<?php
    if (isset($_SESSION['admin_auth'])) {
        include('main.php');
    } else {
        die('Нет доступа!');
    }
?>