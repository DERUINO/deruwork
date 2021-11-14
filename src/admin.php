<?php session_start(); ?>
<?php include('engine/ajax.php'); ?>
<!DOCTYPE html>

<head>

    <title>Админ-панель</title>
    <link href="css/admin.min.css" rel="stylesheet" type="text/css">

    <script type="text/javascript" src="js/libs/jquery.js"></script>

</head>

<body>

    <?php if ($_SESSION['admin_auth'] == 1) { ?>
            <script type="text/javascript">
                window.location.replace('engine/admin/index.php');
            </script>
    <?php } ?>

    <?php if ($_SESSION['user_group'] == 1) { ?>

    <div class="container">
        <div class="flex">
            <div class="container-title">
                Вход в админ-панель
            </div>
            <div class="container-block">
                <form id="admin">
                    <div class="input">
                        <input type="text" name="login" placeholder="Логин">
                    </div>
                    <div class="input">
                        <input type="password" name="password" placeholder="Пароль">
                    </div>
                    <div class="enter">
                        <button type="submit">Вход</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
    <?php } else { die('Нет доступа!'); }?>

    <script type="text/javascript">
        adminAuth();
    </script>

</body>

</html>