<?php session_start(); ?>
<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="адаптация,верстка,cms,dle,landing,page,ajax,php,html,css,сайт,javascript,bootstrap,скрипт,мобильная верстка,кроссбраузерность">
    <meta name="description" content="Разработка и создание сайтов любой сложности<br>Наш хорошо отлаженный процесс работы позволяет обеспечить высокое качество<br>Контактный телефон: +7 (921) 756-30-11">

    <title>Deru Working - создание сайтов под ключ</title>

    <link rel="stylesheet" type="text/css" href="css/libs.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.min.css">

    <link rel="icon" type="image/png" href="css/images/favicon.png">

    <script type="text/javascript" src="js/libs/jquery.js"></script>

  	<script src="js/script.js" type="text/javascript"></script>

    <?php require_once('engine/ajax.php') ?>
  </head>

  <body>

    <?php
        define('DERUWORK', 'DERUWORK', true);
        $url = $_SERVER["REQUEST_URI"];

        require_once('engine/groups.php');

        if (!isset($_SESSION['id'])) {
          $group = 5;
        } else {
          $group = $deru_group;
        }
    ?>

    <div class="form_alert"></div>

    <div class="menu_button">
      <img src="css/images/ico_menu.svg">
    </div>

    <?php if ($group <= 4) {?>
    <div class="error_form_block">
    	<div class="close_button">x</div>
    	<div class="flexbox">
	    	<div class="errorform">
	    		<div class="error_form_block_title">Отправить сообщение об ошибке</div>
	    		<form id="errorform">
	    			<div class="input">
	    				<textarea type="text" name="text" placeholder="Введите здесь описание проблемы" required></textarea>
	    			</div>
	    			<div class="input accept">
	    				<button type="submit">Отправить</button>
	    			</div>
	    		</form>
	    	</div>
	    </div>
    </div>
    <?php } ?>

    </div>
  
    <div class="wrapper">
      <div class="sidebar">
        <div class="sidebar_flex">
          <div class="close_sidebar"><img src="css/images/close_menu.svg"></div>
          <div class="sidebar__contactsblock">
            <div class="sidebar__contactsblock__logoblock">
              <div class="deru">DERU</div>
              <div class="working">WORKING</div>
            </div>
            <div class="sidebar__contactsblock__links">
              <div class="number">+7 (921) 756-30-11</div>
              <div class="email">main@deruwork.ru</div>
            </div>
          </div>
          <div class="sidebar__menublock">
            <div class="sidebar__menublock__linksblock">
              <div class="sidebar__menublock__linksblock__title">
                Основное
              </div>
              <div class="sidebar__menublock__linksblock__links">
                <a href="/">
                  <div <?php if ($url == '/') { echo 'class="link active"'; } else { echo 'class="link"'; } ?>>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26.39 26.39"><path d="M3.588,24.297c0,0-0.024,0.59,0.553,0.59c0.718,0,6.652-0.008,6.652-0.008l0.01-5.451c0,0-0.094-0.898,0.777-0.898h2.761c1.031,0,0.968,0.898,0.968,0.898l-0.012,5.434c0,0,5.628,0,6.512,0c0.732,0,0.699-0.734,0.699-0.734V14.076L13.33,5.913l-9.742,8.164C3.588,14.077,3.588,24.297,3.588,24.297z"/><path d="M0,13.317c0,0,0.826,1.524,2.631,0l10.781-9.121l10.107,9.064c2.088,1.506,2.871,0,2.871,0L13.412,1.504L0,13.317z"/><polygon points="23.273,4.175 20.674,4.175 20.685,7.328 23.273,9.525"/></svg>
                  Главная
                  </div>
                </a>
                <a href="/works.php">
                  <div <?php if ($url == '/works.php') { echo 'class="link active"'; } else { echo 'class="link"'; } ?>>
                    <svg viewBox="0 -31 512 512" xmlns="http://www.w3.org/2000/svg"><path d="m497.09375 60.003906c-.03125 0-.0625-.003906-.09375-.003906h-136v-15c0-24.8125-20.1875-45-45-45h-120c-24.8125 0-45 20.1875-45 45v15h-136c-8.351562 0-15 6.84375-15 15v330c0 24.8125 20.1875 45 45 45h422c24.8125 0 45-20.1875 45-45v-329.683594c0-.019531 0-.039062 0-.058594-.574219-9.851562-6.632812-15.199218-14.90625-15.253906zm-316.09375-15.003906c0-8.269531 6.730469-15 15-15h120c8.269531 0 15 6.730469 15 15v15h-150zm295.1875 45-46.582031 139.742188c-2.042969 6.136718-7.761719 10.257812-14.226563 10.257812h-84.378906v-15c0-8.285156-6.714844-15-15-15h-120c-8.285156 0-15 6.714844-15 15v15h-84.378906c-6.464844 0-12.183594-4.121094-14.226563-10.257812l-46.582031-139.742188zm-175.1875 150v30h-90v-30zm181 165c0 8.269531-6.730469 15-15 15h-422c-8.269531 0-15-6.730469-15-15v-237.566406l23.933594 71.796875c6.132812 18.40625 23.289062 30.769531 42.6875 30.769531h84.378906v15c0 8.285156 6.714844 15 15 15h120c8.285156 0 15-6.714844 15-15v-15h84.378906c19.398438 0 36.554688-12.363281 42.6875-30.769531l23.933594-71.796875zm0 0"/></svg>
                    Портфолио
                  </div>
                </a>
                <a href="/feedback.php">
                  <div <?php if ($url == '/feedback.php') { echo 'class="link active"'; } else { echo 'class="link"'; } ?>>
                    <svg viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="m256 512c-50.351562 0-98.894531-14.546875-140.710938-42.125l-87.988281 27.339844c-3.546875 1.101562-7.414062.148437-10.039062-2.476563-2.625-2.628906-3.578125-6.492187-2.476563-10.039062l27.339844-87.988281c-27.578125-41.816407-42.125-90.359376-42.125-140.710938 0-68.378906 26.628906-132.667969 74.980469-181.019531 48.351562-48.351563 112.640625-74.980469 181.019531-74.980469s132.667969 26.628906 181.019531 74.980469c48.351563 48.351562 74.980469 112.640625 74.980469 181.019531s-26.628906 132.667969-74.980469 181.019531c-48.351562 48.351563-112.640625 74.980469-181.019531 74.980469zm-139.101562-63.097656c1.996093 0 3.976562.601562 5.660156 1.757812 39.371094 27.046875 85.515625 41.339844 133.441406 41.339844 130.132812 0 236-105.867188 236-236s-105.867188-236-236-236-236 105.867188-236 236c0 47.925781 14.292969 94.070312 41.339844 133.441406 1.730468 2.523438 2.214844 5.703125 1.304687 8.628906l-23.121093 74.402344 74.40625-23.117187c.972656-.300781 1.972656-.453125 2.96875-.453125zm0 0"/><path d="m256 401c-1.964844 0-3.925781-.578125-5.621094-1.730469-1.417968-.964843-35.105468-23.964843-69.355468-55.648437-47.371094-43.824219-71.390626-81.574219-71.390626-112.203125 0-53.164063 39.917969-96.417969 88.984376-96.417969 21.023437 0 41.425781 8.171875 57.382812 22.722656 15.957031-14.550781 36.359375-22.722656 57.378906-22.722656 49.070313 0 88.988282 43.253906 88.988282 96.417969 0 30.628906-24.019532 68.378906-71.394532 112.203125-34.246094 31.683594-67.933594 54.683594-69.351562 55.648437-1.695313 1.152344-3.65625 1.730469-5.621094 1.730469zm-57.378906-246c-38.042969 0-68.988282 34.28125-68.988282 76.417969 0 48.097656 86.421876 119.1875 126.367188 147.410156 39.941406-28.238281 126.367188-99.355469 126.367188-147.410156 0-42.136719-30.945313-76.417969-68.984376-76.417969-18.976562 0-36.667968 8.371094-49.816406 23.574219-1.902344 2.199219-4.660156 3.460937-7.5625 3.460937-2.90625 0-5.664062-1.261718-7.566406-3.460937-13.148438-15.203125-30.839844-23.574219-49.816406-23.574219zm0 0"/><path d="m256.625 73c-.007812 0-.015625 0-.023438 0h-.601562c-5.523438 0-10-4.476562-10-10s4.476562-10 10-10h.648438c5.523437.015625 9.988281 4.5 9.976562 10.023438-.011719 5.515624-4.488281 9.976562-10 9.976562zm0 0"/><path d="m392.378906 129.433594c-2.558594 0-5.117187-.972656-7.066406-2.921875-25.699219-25.664063-57.996094-42.949219-93.40625-49.992188-5.417969-1.078125-8.933594-6.34375-7.855469-11.757812 1.078125-5.417969 6.339844-8.9375 11.757813-7.859375 39.296875 7.816406 75.132812 26.992187 103.636718 55.457031 3.90625 3.902344 3.910157 10.234375.007813 14.140625-1.953125 1.957031-4.515625 2.933594-7.074219 2.933594zm0 0"/></svg>
                    Отзывы
                  </div>
                </a>
                <a href="/calc.php">
                  <div <?php if ($url == '/calc.php') { echo 'class="link active"'; } else { echo 'class="link"'; } ?>>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 480 480"><path d="M392,0H88C65.92,0.026,48.026,17.92,48,40v400c0.026,22.08,17.92,39.974,40,40h304c22.08-0.026,39.974-17.92,40-40V40C431.974,17.92,414.08,0.026,392,0z M160,16h160v16H160V16z M384,48v80H96V48H384z M416,440c0,13.255-10.745,24-24,24H88c-13.255,0-24-10.745-24-24V40c0-13.255,10.745-24,24-24h56v16H88c-4.418,0-8,3.582-8,8v96c0,4.418,3.582,8,8,8h304c4.418,0,8-3.582,8-8V40c0-4.418-3.582-8-8-8h-56V16h56c13.255,0,24,10.745,24,24V440z"/><path d="M240,160c-22.091,0-40,17.909-40,40c0.026,22.08,17.92,39.974,40,40c22.091,0,40-17.909,40-40S262.091,160,240,160z M240,224c-13.255,0-24-10.745-24-24s10.745-24,24-24s24,10.745,24,24S253.255,224,240,224z"/><path d="M344,160c-22.091,0-40,17.909-40,40c0.026,22.08,17.92,39.974,40,40c22.091,0,40-17.909,40-40S366.091,160,344,160zM344,224c-13.255,0-24-10.745-24-24s10.745-24,24-24s24,10.745,24,24S357.255,224,344,224z"/><path d="M136,160c-22.091,0-40,17.909-40,40c0.026,22.08,17.92,39.974,40,40c22.091,0,40-17.909,40-40S158.091,160,136,160z M136,224c-13.255,0-24-10.745-24-24s10.745-24,24-24s24,10.745,24,24S149.255,224,136,224z"/><path d="M240,256c-22.091,0-40,17.909-40,40c0.026,22.08,17.92,39.974,40,40c22.091,0,40-17.909,40-40C280,273.909,262.091,256,240,256z M240,320c-13.255,0-24-10.745-24-24s10.745-24,24-24s24,10.745,24,24S253.255,320,240,320z"/><path d="M344,256c-22.091,0-40,17.909-40,40c0.026,22.08,17.92,39.974,40,40c22.091,0,40-17.909,40-40C384,273.909,366.091,256,344,256z M344,320c-13.255,0-24-10.745-24-24s10.745-24,24-24s24,10.745,24,24S357.255,320,344,320z"/><path d="M136,256c-22.091,0-40,17.909-40,40c0.026,22.08,17.92,39.974,40,40c22.091,0,40-17.909,40-40C176,273.909,158.091,256,136,256z M136,320c-13.255,0-24-10.745-24-24s10.745-24,24-24s24,10.745,24,24S149.255,320,136,320z"/><path d="M240,352c-22.091,0-40,17.909-40,40c0.026,22.08,17.92,39.974,40,40c22.091,0,40-17.909,40-40C280,369.909,262.091,352,240,352z M240,416c-13.255,0-24-10.745-24-24s10.745-24,24-24s24,10.745,24,24S253.255,416,240,416z"/><path d="M136,352c-22.091,0-40,17.909-40,40c0.026,22.08,17.92,39.974,40,40c22.091,0,40-17.909,40-40C176,369.909,158.091,352,136,352z M136,416c-13.255,0-24-10.745-24-24s10.745-24,24-24s24,10.745,24,24S149.255,416,136,416z"/><path d="M376,352h-64c-4.418,0-8,3.582-8,8v80c0,4.418,3.582,8,8,8h64c4.418,0,8-3.582,8-8v-80C384,355.582,380.418,352,376,352zM368,432h-48v-64h48V432z"/><rect x="320" y="96" width="16" height="16"/><rect x="352" y="96" width="16" height="16"/><polygon points="144,80 144,64 128,64 128,80 112,80 112,96 128,96 128,112 144,112 144,96 160,96 160,80"/><path d="M352,408h-8c-4.418,0-8,3.582-8,8s3.582,8,8,8h8c4.418,0,8-3.582,8-8S356.418,408,352,408z"/></svg>
                    Расчет стоимости
                  </div>
                </a>
              </div>
            </div>
          </div>
          <div class="sidebar__lkblock">
            <div class="button open_auth">
              <?php if ($group > 4) { ?>
              Личный кабинет
              <?php
              } else {
                echo $deru_name;
              }
              ?>
            </div>
          </div>
          <div class="footer">
            <span class="errorform_link">Сообщить об ошибке</span>
          </div>
        </div>
      </div>
      
      <script type="text/javascript">
        loginAuth();
        lostPassword();
        errorForm();
        autoUpdateNotifications();
      </script>

      <div class="content">
        <?php include('lk.php'); ?>
        
