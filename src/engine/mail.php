<?php
	$name = $_POST['name'];
	$number = $_POST['number'];
	$site = $_POST['location'];
	$accept = $_POST['accept'];

	$fromName = 'Deruino Working';
	$fromMail = 'main@deruwork.ru';

	$emailTo = 'main@deruwork.ru';
	$subject = 'Заявка на обратный звонок';
	$subject = '=?utf-8?b?'. base64_encode($subject) .'?=';
	$headers = "Content-type: text/plain; charset=\"utf-8\"\r\n";
	$headers .= "From: ". $fromName ." <". $fromMail ."> \r\n";

	$body = "Имя: $name\nТелефон: $number\n\nДомен сайта: $site";

	if (isset($name)) {
		if ($accept == true) {
			if (strlen($name) <= 16) {
				$mail = mail($emailTo, $subject, $body, $headers, '-f'. $fromMail);
			}
		}
	} else {
		die(header("HTTP/1.0 404 Not Found"));
	}
?>