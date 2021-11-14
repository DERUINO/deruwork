<?php
    session_start();

    include('config.php');
    include('groups.php');
    include('ip.php');

    $date = date("d.m.Y, G:i:s");
    $status = 'logOut';
    
    $auth = $link->prepare('INSERT INTO deru_auth_logs SET `name` = :name, `date` = :date, `user_ip` = :user_ip, `status` = :status');
    $auth->execute(array('name' => $deru_name, 'date' => $date, 'user_ip' => $ip, 'status' => $status));

    unset($_SESSION['name']);
    unset($_SESSION['id']);
    unset($_SESSION['email']);
    unset($_SESSION['user_group']);
    unset($_SESSION['admin_auth']);
    
    session_destroy();

    Header('Location: ../');
?>