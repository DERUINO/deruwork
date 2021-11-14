<?php session_start(); ?>
<?php if (isset($_SESSION['admin_auth'])) {
    include('engine/class.php');
    include('engine/functions.php');
    include('engine/ajax.php');
?>
<!DOCTYPE html>

    <head>
        <meta charset="UTF-8">
        <title>Главная - Панель управления</title>

        <link href="/css/admin.min.css" rel="stylesheet" type="text/css">

        <script type="text/javascript" src="/js/libs/jquery.js"></script>
    </head>

    </body>

        <?php include('toolbar.php'); ?>

        <div class="wrapper">
            <div class="flex">

                <?php include('sidebar.php'); ?>

                <div class="contentblock">
                    <div class="flex">
                        <?php if ($url == '/engine/admin/index.php') {

                            include('blocks.php');

                        } else if ($url == '/engine/admin/index.php?name='.$_GET['name'].'') {

                            include('accountinfo.php');

                        } ?>
                    </div>
                </div>
            </div>
        </div>

    </body>

    <script type="text/javascript">
        updateInfo();
    </script>

    <script type="text/javascript" src="js/script.js"></script>

</html>
<?php } ?>