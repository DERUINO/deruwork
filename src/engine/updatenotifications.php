<?php
    session_start();

    require_once('config.php');

    $sql = $link->prepare('UPDATE `deru_logs` SET `checked` = :checked WHERE `user_id` = :user_id');
    $sql->execute(array('checked' => 1, 'user_id' => $_SESSION['id']));
?>