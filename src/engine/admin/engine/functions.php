<?php
    $url = $_SERVER["REQUEST_URI"];

    require_once('config.php');

    function accountList (PDO $link) {

        $sql = $link->prepare('SELECT * FROM `deru_users` LIMIT 10');
        $sql->execute();
        while($sql_row = $sql->fetch(PDO::FETCH_ASSOC)) {
            echo '<div><a href="?name='.$sql_row['name'].'">'.$sql_row['name'].'</a></div>';
        }

        echo '<form>
                <div class="search">
                    <input type="text" name="name" placeholder="Поиск по логину">
                    <button type="submit"><img src="/css/images/search.svg"></button>
                </div>
            </form>';

    }

    function accountInfo (PDO $link) {

        $sql = $link->prepare('SELECT * FROM `deru_users` WHERE `name` = :name');
        $sql->execute(array('name' => $_GET['name']));
        $sql_row = $sql->fetch(PDO::FETCH_ASSOC);

        if ($sql_row) {
            echo '<form id="updateInfo">
                    <input type="text" name="username" value="'.$sql_row['name'].'" hidden>
                    <div class="flex"><div class="accountinfo-row id">ID:<br><input type="text" class="input_name" name=id" value="'.$sql_row['id'].'" disabled></div><div></div></div>
                    <div class="flex"><div class="accountinfo-row name">Логин:<br><input type="text" class="input_name" name="name" value="'.$sql_row['name'].'" disabled></div><div class="edit_button name"><div class="switch"></div></div></div>
                    <div class="flex"><div class="accountinfo-row email">Эл. почта:<br><input type="text" name="email" value="'.$sql_row['email'].'" disabled></div><div class="edit_button email"><div class="switch"></div></div></div>
                    <div class="flex"><div class="accountinfo-row regdate">Дата регистрации:<br><input type="text" name="regdate" value="'.$sql_row['regdate'].'" disabled></div><div class="edit_button regdate"><div class="switch"></div></div></div>
                    <div class="flex"><div class="accountinfo-row ip">IP адрес:<br><input type="text" name="user_ip" value="'.$sql_row['user_ip'].'" disabled></div><div class="edit_button ip"><div class="switch"></div></div></div>
                    <div class="accountinfo-row group">Группа:<br><span class="bold">'.(($sql_row['user_group'] == 1) ? 'Администратор' : 'Пользователь').'</span></div>
                    <div class="accountinfo-row save"><button type="submit">Сохранить</button></div>
                </form>';
        } else {
            echo 'Аккаунт с данным логином не найден!';
        }
    }

    function accountInfoLogs (PDO $link) {
        
        $sql = $link->prepare('SELECT * FROM `deru_users` WHERE `name` = :name');
        $sql->execute(array('name' => $_GET['name']));
        $sql_row = $sql->fetch(PDO::FETCH_ASSOC);

        $user_id = $sql_row['id'];

        $sql = $link->prepare('SELECT * FROM `deru_logs` WHERE `user_id` = :user_id ORDER BY `id` DESC LIMIT 100');
        $sql->execute(array('user_id' => $user_id));
        $sql_row = $sql->fetchAll(PDO::FETCH_ASSOC);

        foreach ($sql_row as $sql_show) {
            echo '<tr>
                    <td>'.$sql_show['text'].'</td>
                    <td>'.$sql_show['ip'].'</td>
                    <td>'.$sql_show['date'].'</td>
                </tr>';
        }

    }

    function version () {
        $version = '1.1';
        echo $version;
    }

    function stats (PDO $link) {
        
        $date = date('d M Y | H:m');

        $sql = $link->prepare('SELECT COUNT(*) FROM `deru_users`');
        $sql->execute();
        $sql_row = $sql->fetch(PDO::FETCH_NUM)[0];
        
        echo '<div class="stats-row">Кол-во аккаунтов: <span class="bold">'.$sql_row.'</span></div>
            <div class="stats-row">Время на сервере: <span class="bold">'.$date.'</span> по МСК</div>';
    }
?>