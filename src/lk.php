<?php
	if (!defined('DERUWORK')) {
		die('Доступ запрещен!');
	}
?>

<?php if ($group > 4) { ?>

<div class="authblock window">
  <div class="authblock_flex">
    <div class="close_auth"><img src="css/images/close_menu.svg"></div>
    <div class="authblock__authcontainer">
      <div class="authblock__title">Авторизация</div>
      <div class="authblock__inputblock">
        <form id="auth">
          <input type="text" placeholder="Эл. почта" name="login" /><br />
          <input type="password" placeholder="Пароль" name="password" />
          <div class="controls">
            <div class="lk_submit">
              <button type="submit">Войти</button>
            </div>
            <div class="row myrow">
              <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                <div class="reg_link">
                  <a href="/registration.php">Регистрация</a>
                </div>
              </div>
              <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                <div class="lostpass_link">
                  <a href="#">Забыли пароль?</a>
                </div>
              </div>
            </div>
          </div>
        </form>
      <?php include('lostpassword.php'); ?>
      </div>
    </div>
  </div>
</div>

<div class="toolbar">
  <form>
  <div class="searchblock">
      <div class="submit">
        <input type="submit">
        <img src="css/images/search.svg">
      </div>
      <div class="input">
        <input type="text" name="search" placeholder="Поиск по новостям">
      </div>
  </div>
  </form> 
  <div class="profileblock">
    <div class="profileblock__img open_auth">
      <img src="css/images/users/default.svg">
    </div>
  </div>
</div>

<?php } else { ?>

<div class="authblock window">
  <div class="authblock_flex">
    <div class="close_auth"><img src="css/images/close_menu.svg"></div>
    <div class="authblock__authcontainer">
      <div class="authblock__title">Личный кабинет</div>
      <div class="authblock__links">

        <?php if ($deru_group == 1) { ?>

        <div class="link">
          <div class="imgblock">
              <img src="css/images/admin.svg">
          </div>
          <div class="ablock">
              <a href="/admin.php">Админ-панель</a>
          </div>
        </div>

        <?php } ?>

        <div class="link">
          <div class="imgblock">
              <img src="css/images/userinfo.svg">
          </div>
          <div class="ablock">
              <a href="/userinfo.php">Профиль</a>
          </div>
        </div>
        <div class="link">
        <div class="imgblock">
              <img src="css/images/chat.svg">
          </div>
          <div class="ablock">
              <a href="/chat.php">Сообщения</a>
          </div>
        </div>
        <div class="link logout">
          <a href="engine/logout.php">Выйти</a>
        </div>
      </div>
    </div>
  </div>
</div>

<?php
  $count_sql = $link->prepare('SELECT COUNT(*) FROM `deru_logs` WHERE `user_id` = :user_id AND `checked` = :checked');
  $count_sql->execute(array('user_id' => $deru_id, 'checked' => 0));
  $count_row = $count_sql->fetch(PDO::FETCH_NUM)[0];

  $count_sql2 = $link->prepare('SELECT COUNT(*) FROM `deru_dialogs` WHERE `user_id` = :user_id AND `checked` = :checked');
  $count_sql2->execute(array('user_id' => $deru_id, 'checked' => 0));
  $count_row2 = $count_sql2->fetch(PDO::FETCH_NUM)[0];
?>

<div class="toolbar">
  <form>  
  <div class="searchblock">
      <div class="submit">
        <input type="submit">
        <img src="css/images/search.svg">
      </div>
      <div class="input">
        <input type="text" name="search" placeholder="Поиск по новостям">
      </div>
    </form>
  </div>
  </form>
  <div class="profileblock logged">
    <a href="/chat.php"><div class="profileblock_messages">
      <div class="messages_img"><img src="css/images/message.svg"></div>
      <?php if ($count_row2 == 0) { ?>
      <div class="messages_count null"></div>
      <?php } else { ?>
      <div class="messages_count"><?php echo $count_row2; ?></div>
    <?php } ?>
    </div></a>
    <form id="updateNotifications">
    <div class="profileblock__notification window">
      <div class="notification_img"><img src="css/images/ico_notification.svg"></div>
      <?php if ($count_row == 0) { ?>
      <div class="notification_count null"></div>
      <?php } else { ?>
      <div class="notification_count"><?php echo $count_row; ?></div>
      <?php } ?>
    </div>
    </form>
    <div class="notification_list">
      <div class="notification_list_title">Оповещения</div>
      <div class="notification_list_container">
        <?php
          $sql = $link->prepare("SELECT * FROM `deru_logs` WHERE `user_id` = :user_id ORDER BY `id` DESC LIMIT 10");
          $sql->execute(array('user_id' => $deru_id));
          $sql_row = $sql->fetchAll(PDO::FETCH_ASSOC);
          
          foreach ($sql_row as $sql_show) {
            if ($sql_show['checked'] == 0) {
              echo '<div class="notification_list_text unchecked">
                    <div class="text_info">'.$sql_show['text'].'</div>
                    <div class="text_date">'.$sql_show['date'].'</div>
                  </div>';
            } else {
              echo '<div class="notification_list_text">
                    <div class="text_info">'.$sql_show['text'].'</div>
                    <div class="text_date">'.$sql_show['date'].'</div>
                  </div>';
            }
          }
        ?>
      </div>
      <div class="notification_list_properties">
        <div class="properties_more">
          <a href="/userinfo.php">Показать все...</a>
        </div>
        <div class="properties_settings">
          <a href="#">Настройки</a>
        </div>
      </div>
    </div>
    <div class="profileblock__img open_auth">
      <img src="css/images/users/<?php $profile_img = 'css/images/users/'.$deru_name.'.png'; if (file_exists($profile_img)) { echo ''.$deru_name.'.png'; } else { echo 'default.svg'; } ?>">
    </div>
  </div>
</div>

<?php } ?>

<script type="text/javascript">
  updateNotifications();
</script>