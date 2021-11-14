<?php
    session_start();

    if (isset($_SESSION['id'])) {
        require_once('../config.php');

        $ajax_dialog_id = $_SESSION['chat_dialog_id'];
        $ajax_author_id = $_SESSION['chat_author'];

        $chat_sql = $link->prepare("SELECT * FROM `deru_chat` INNER JOIN `deru_users` ON deru_chat.author_id = deru_users.id WHERE (`dialog_id` = :dialog_id AND `author_id` = :author_id) OR (`dialog_id` = :dialog_id AND `user_id` = :user_id) ORDER BY `date`");
        $chat_sql->execute(array('dialog_id' => $ajax_dialog_id, 'author_id' => $ajax_author_id, 'user_id' => $ajax_author_id));
        $chat = $chat_sql->fetchAll(PDO::FETCH_ASSOC);
        foreach ($chat as $key) {

            if ($key['checked'] == 0) { ?>
                <div class="messageblock unchecked">
            <?php } else { ?>
                <div class="messageblock">
            <?php } ?>
                    <div class="message">
                        <div class="title"><?php echo $key['name']; ?></div>
                        <div><?php echo $key['text']; ?></div>
                    </div>
                    <div class="dateblock">
                        <?php echo date('j M H:i', strtotime($key['date'])); ?>
                    </div>
                </div>
        <?php }

        $checked_sql = $link->prepare("UPDATE `deru_chat` SET `checked` = :checked WHERE `user_id` = :user_id AND `dialog_id` = :dialog_id");
        $checked_sql->execute(array('checked' => 1, 'dialog_id' => $ajax_dialog_id, 'user_id' => $ajax_author_id));

        $checked2_sql = $link->prepare("UPDATE `deru_dialogs` SET `checked` = :checked WHERE `user_id` = :user_id AND `dialog_id` = :dialog_id");
        $checked2_sql->execute(array('checked' => 1, 'dialog_id' => $ajax_dialog_id, 'user_id' => $ajax_author_id));
    } else {
        die('Нет доступа');
    }
?>