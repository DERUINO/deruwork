<link href="css/works.min.css" rel="stylesheet" type="text/css">

<?php

	require_once('engine/config.php');

	$firstname = $_POST['firstname'];
	$secondname = $_POST['secondname'];
	$image = $_FILES['image'];
	$color = $_POST['color'];
	$url = $_POST['url'];
	$delete = $_POST['delete'];
	$delete_image = $_POST['delete_image'];

	function can_upload($file){
		// если имя пустое, значит файл не выбран
	    if($file['name'] == '')
			return 'Вы не выбрали файл.';
		
		/* если размер файла 0, значит его не пропустили настройки 
		сервера из-за того, что он слишком большой */
		if($file['size'] == 0)
			return 'Файл слишком большой.';
		
		// разбиваем имя файла по точке и получаем массив
		$getMime = explode('.', $file['name']);
		// нас интересует последний элемент массива - расширение
		$mime = strtolower(end($getMime));
		// объявим массив допустимых расширений
		$types = array('jpg', 'png', 'jpeg');
		
		// если расширение не входит в список допустимых - return
		if(!in_array($mime, $types))
			return 'Недопустимый тип файла.';
		
		return true;
	  }

	function make_upload($file) {	
		// формируем уникальное имя картинки: случайное число и name
		global $name;
		$name = mt_rand(0, 10000) . '.png';
		copy($file['tmp_name'], 'css/images/works/' . $name);
	  }

	if (isset($firstname)) {

		$check = can_upload($image);

		if($check === true) {
	        make_upload($image);
			$sql = $link->prepare("INSERT INTO `deru_works` SET `firstname` = :firstname, `secondname` = :secondname, `image` = :image, `color` = :color, `url` = :url");
			$sql->execute(array('firstname' => $firstname, 'secondname' => $secondname, 'image' => $name, 'color' => $color, 'url' => $url));
			echo '<div class="goodblock">
					<div class="good_container">
						<div class="text">Запись успешно добавлена!</div>
						<a href="/works.php">
							<div class="back_button">Вернуться назад</div>
						</a>
					</div>
				  </div>';
	    } else {
	    	echo 'Недопустимое фото!';
	    }
	} else {
		die(header("HTTP/1.0 404 Not Found"));
	}

	if (isset($delete)) {
		$delete_sql = $link->prepare("DELETE FROM `deru_works` WHERE `id` = :del");
		$delete_sql->execute(array('del' => $delete));
		unlink('css/images/works/'.$delete_image.'');
		echo 'ok';
	} else {
		die(header("HTTP/1.0 404 Not Found"));
	}

?>