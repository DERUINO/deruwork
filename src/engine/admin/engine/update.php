<?php
    include('config.php');

    $username = $_POST['username'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $regdate = $_POST['regdate'];
    $user_ip = $_POST['user_ip'];

    if (isset($name)) {
        $update = $link->prepare('UPDATE `deru_users` SET `name` = :name, `email` = :email, `regdate` = :regdate, `user_ip` = :user_ip WHERE `name` = :username');
        $update->execute(array('name' => $name, 'email' => $email, 'regdate' => $regdate, 'user_ip' => $user_ip, 'username' => $username));
    }
?>