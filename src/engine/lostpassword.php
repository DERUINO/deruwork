<head>
	<meta charset="utf-8">

	<title>Успешное восстановление пароля</title>

	<style type="text/css">
		.success_password {
			width: 100%;
			height: 100vh;
			display: flex;
			justify-content: center;
			align-items: center;
		}

		.success_password_text {
			font-size: 24px;
		}
	</style>
</head>

<?php

	include('config.php');

	$token = $_GET['token'];
	$lost_mail = $_GET['lost_mail'];

	$generation = '1234567890abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
	$new_password = substr(str_shuffle($generation), 0, 10);

	$hidden_password = md5($new_password);

	$fromName = 'Deru Working';
    $fromMail = 'main@deruwork.ru';

	$emailTo = $lost_mail;

	$subject = 'Запрос на восстановление пароля';
	$headers .= "From: ". $fromName ." <". $fromMail ."> \r\n";
	$body = "Ваши новые данные для входа на сайт deruwork.ru:\n\nЛогин: $lost_mail\nПароль: $new_password\n\nНастоятельно рекомендуем вам сменить данный пароль в личном кабинете.";

	if (isset($lost_mail)) {

		$info = $link->prepare('SELECT `email` FROM `deru_users` WHERE `email` = :email');
		$info->execute(array('email' => $lost_mail));
		$exists = $info->fetchColumn();

		if ($exists) {

			$lost = $link->prepare('UPDATE `deru_users` SET `password` = :password, `pass_token` = :pass_token WHERE `email` = :email');
			$lost->execute(array('password' => $hidden_password, 'pass_token' => '', 'email' => $lost_mail));

			$mail = mail($emailTo, $subject, $body, $headers, '-f'. $fromMail);

			echo '<div class="success_password">
					<div class="success_password_text">Новые данные для входа были отправлены вам на почту!</div>
				</div>';

		} else {
			echo 'нет такой почты';
		}
	}

?>