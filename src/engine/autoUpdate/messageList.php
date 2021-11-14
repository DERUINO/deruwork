<?php
    session_start();

    if (isset($_SESSION['id'])) {
        require_once('../config.php');

        $dialogs_sql = $link->prepare("SELECT * FROM `deru_dialogs` WHERE `const_author` = :author_id OR `const_user` = :user_id ORDER BY `date` DESC, `checked` ASC");
        $dialogs_sql->execute(array('author_id' => $_SESSION['id'], 'user_id' => $_SESSION['id']));

        while($dialogs = $dialogs_sql->fetch(PDO::FETCH_ASSOC)) {

            if ($_SESSION['id'] != $dialogs['const_author']) {
                $name_sql = $link->prepare("SELECT `name`, `id` FROM `deru_users` WHERE `id` = :id");
                $name_sql->execute(array('id' => $dialogs['const_author']));
                $name_title = $name_sql->fetch(PDO::FETCH_ASSOC);
            } else {
                $name_sql = $link->prepare("SELECT `name`, `id` FROM `deru_users` WHERE `id` = :id");
                $name_sql->execute(array('id' => $dialogs['const_user']));
                $name_title = $name_sql->fetch(PDO::FETCH_ASSOC);
            }

        ?>
            <a onclick="autoUpdateNotifications()" href="?dialog=<?php echo $dialogs['dialog_id']; ?>">
                <?php if ($dialogs['checked'] == 0 && $_SESSION['id'] == $dialogs['user_id']) { ?>
                <div class="chatblock unread">
                <?php } else { ?>
                <div class="chatblock">
                <?php } ?>
                    <div class="imgblock">
                    <?php
                        $profile_img = 'css/images/users/'.$name_title['name'].'.png';
                        if (file_exists($profile_img)) { ?>
                            <img class="profile_img" src="css/images/users/<?php echo $name_title['name']; ?>.png">
                        <?php } else { ?>
                            <img class="profile_img" src="css/images/users/default.svg">
                        <?php }
                    ?>
                    </div>
                    <div class="textblock">
                        <div class="title search-title"><?php echo $name_title['name']; ?></div>
                        <div class="slicedblock">
                            <div class="text-img">
                            <?php
                                    if ($dialogs['author_id'] == $_SESSION['id']) {
                                    $profile_img = 'css/images/users/'.$deru_name.'.png';
                                    if (file_exists($profile_img)) { ?>
                                        <img class="profile_img" src="css/images/users/<?php echo $deru_name; ?>.png">
                                    <?php } else { ?>
                                        <img class="profile_img" src="css/images/users/default.svg">
                                    <?php }
                                }?>
                            </div>
                            <div class="text slice">
                                <?php echo $dialogs['text']; ?>
                            </div>
                        </div>
                    </div>
                    <div class="dateblock">
                        <?php
                            echo date('H:i', strtotime($dialogs['date']));
                        ?>
                    </div>
                </div>
            </a>
        <?php } 
    } else {
        die('Нет доступа');
    }
?>