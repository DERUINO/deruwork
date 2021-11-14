<?php

	include('config.php');

	$lost_mail = $_POST['lost_mail'];

	$generation = '1234567890abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
	$token = substr(str_shuffle($generation), 0, 20);

	$fromName = 'Deru Working';
    $fromMail = 'main@deruwork.ru';

	$emailTo = $lost_mail;
	$subject = 'Запрос на восстановление пароля';
	$headers = "Content-type: text/html; charset=\"utf-8\"\r\n";
	$headers .= "From: ". $fromName ." <". $fromMail ."> \r\n";
	$body = "Здравствуйте, с сайта deruwork.ru было запрошено восстановление пароля.<br>Если вы этого не делали, то не реагируйте на данное сообщение.<br><br>Восстановить пароль вы можете по данной <a href='https://deruwork.ru/engine/lostpassword.php?lost_mail=$lost_mail&token=$token'>ссылке</a>";

	if (isset($lost_mail)) {

		$info = $link->prepare('SELECT `email` FROM `deru_users` WHERE `email` = :email');
		$info->execute(array('email' => $lost_mail));
		$exists = $info->fetchColumn();

		if ($exists) {

			$lost = $link->prepare('UPDATE `deru_users` SET `pass_token` = :pass_token WHERE `email` = :email');
			$lost->execute(array('pass_token' => $token, 'email' => $lost_mail));

			$mail = mail($emailTo, $subject, $body, $headers, '-f'. $fromMail);

			echo json_encode($done = array('done' => 'Инструкция по смене пароля отправлена на указанную почту.'));

		} else {
			echo json_encode($error = array('error' => 'Такой почты не существует!'));
		}
	}

?>