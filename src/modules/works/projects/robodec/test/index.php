<!DOCTYPE html>
<html>
<head>
	<title>12345</title>
	<script type="text/javascript" src="../secret/js/jquery.js"></script>
</head>
<body>
	<form action="<?= $_SERVER['SCRIPT_NAME'] ?>">
        <p>Поиск Человека: <input type="text" name="search" id=""> <input type="submit" value="Поиск"></p>
        <hr>
    </form>

    <?php

    	include('config.php');

    	$inputSearch = $_REQUEST['search']; 
 
		// Создаём SQL запрос
		$result = $link->prepare("SELECT * FROM `iconomy` WHERE `username` = ?");
		$result->execute(array($inputSearch));

		while($table = $result->fetch(PDO::FETCH_BOTH)) {
			echo "ID: ". $table['id'] ."<br>
	              Имя: ". $table['username'] ."<br>";
		}

    ?>
</body>
</html>