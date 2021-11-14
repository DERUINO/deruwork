<?php
	$slides = ($_POST['slides']);
	$screens = ($_POST['screens']);
	$select = ($_POST['select']);
	$select2 = ($_POST['select2']);
	$select3 = ($_POST['select3']);
	$select4 = ($_POST['select4']);
	$select5 = ($_POST['select5']);
	$name = trim($_POST['name']);
	$phone = ($_POST['phone']);
	$comment = ($_POST['comment']);
	$total = ($_POST['total']);

	if ($select == 3500) {
		$select = 'Landing Page';
	} else if ($select == 8500) {
		$select = 'Бизнес сайт';
	} else if ($select == 14000) {
		$select = 'Интернет-магазин';
	} else if ($select == 24500) {
		$select = 'Корпоративный сайт';
	}

	if ($select2 == 0) {
		$select2 = 'Без CMS';
	} else if ($select2 == 2500) {
		$select2 = 'Популярные CMS';
	} else if ($select2 == 15000) {
		$select2 = 'Самописная CMS';
	}

	if (isset($select3) == true) {
		$select3 = 'Да';
	} else {
		$select3 = 'Нет';
	}

	if (isset($select4) == true) {
		$select4 = 'Да';
	} else {
		$select4 = 'Нет';
	}

	if (isset($select5) == true) {
		$select5 = 'Да';
	} else {
		$select5 = 'Нет';
	}

	$fromName = 'Deruino Working';
	$fromMail = 'main@deruwork.ru';

	$emailTo = 'main@deruwork.ru';
	$subject = 'Заявка на расчет';
	$subject = '=?utf-8?b?'. base64_encode($subject) .'?=';
	$headers = "Content-type: text/plain; charset=\"utf-8\"\r\n";
	$headers .= "From: ". $fromName ." <". $fromMail ."> \r\n";

	$body = "Имя: $name\nТелефон: $phone\nКомментарий: $comment\n\nСколько будет страниц: $slides шт.\nСколько будет экранов: $screens шт.\nТип сайта: $select\nНачинка сайта: $select2\n\nДополнительные опции:\nАдаптация: $select3\nМодули: $select4\nДругое: $select5\n\nИтоговая стоимость: $total р.";

	if (strlen($phone) > 0) {
	    $mail = mail($emailTo, $subject, $body, $headers, '-f'. $fromMail);
		echo 'ok';
	} else {
		die(header("HTTP/1.0 404 Not Found"));
	}
?>