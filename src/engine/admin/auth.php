<?php session_start(); ?>
<?php

    include('../config.php');
    
    $name = $_POST['login'];
    $password = $_POST['password'];
    $user_group = 1;

    $md5_password = md5($password);

    if (isset($name)) {
        $sql = $link->prepare('SELECT * FROM `deru_users` WHERE `name` = :name AND `password` = :password');
        $sql->execute(array('name' => $name, 'password' => $md5_password));
        $sql_row = $sql->fetch(PDO::FETCH_ASSOC);
        
        $auth_name = $sql_row['name'];
        $auth_password = $sql_row['password'];
        $auth_user_group = $sql_row['user_group'];

        if ($auth_name == $name && $auth_password == $md5_password && $auth_user_group == $user_group) {
            $_SESSION['admin_auth'] = 1;

            echo json_encode($data = array('auth' => 'Успешная авторизация!'));
        } else {
            echo json_encode($data = array('error' => 'Неправильный логин или пароль!'));
        }
    } else {
        die(header("HTTP/1.0 404 Not Found"));
    }

?>