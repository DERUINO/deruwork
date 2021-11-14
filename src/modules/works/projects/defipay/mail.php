<?php
	$name = $_POST['name'];
	$mail = $_POST['mail'];

	$fromName = 'DeFiPay';
	$fromMail = 'info@defipay.me';

	$emailTo = 'main@deruino.ru';
	$subject = 'Форма обратной связи';
	$subject = '=?utf-8?b?'. base64_encode($subject) .'?=';
	$headers = "Content-type: text/plain; charset=\"utf-8\"\r\n";
	$headers .= "From: ". $fromName ." <". $fromMail ."> \r\n";

	$body = "Имя: $name\nЭл. Почта: $mail";

	if (strlen($name) > 0) {
	    $mail_send = mail($emailTo, $subject, $body, $headers, '-f'. $fromMail);
	}
?>