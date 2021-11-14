<?php
    session_start();

    if (isset($_SESSION['id'])) {
        require_once('../config.php');

        $count_sql2 = $link->prepare('SELECT COUNT(*) FROM `deru_dialogs` WHERE `user_id` = :user_id AND `checked` = :checked');
        $count_sql2->execute(array('user_id' => $_SESSION['id'], 'checked' => 0));
        $count_row2 = $count_sql2->fetch(PDO::FETCH_NUM)[0];

        echo '<div class="messages_img"><img src="css/images/message.svg"></div>';
        if ($count_row2 == 0) {
            echo '<div class="messages_count null"></div>';
        } else {
            echo '<div class="messages_count">'.$count_row2.'</div>';
        }
    } else {
        die('Нет доступа');
    }
?>