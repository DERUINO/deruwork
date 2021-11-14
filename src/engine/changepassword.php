<?php
	session_start();

	require_once('config.php');
	require_once('messages.php');

	$new_password1 = $_POST['new_password1'];
	$new_password2 = $_POST['new_password2'];
	$id = $_SESSION['id'];
	$url = $_SESSION['user_ip'];

	$hidden_password = md5($new_password1);

	if (isset($new_password1)) {
		if (strlen($new_password1) > 0 && strlen($new_password2) > 0) {
			if ($new_password1 == $new_password2) {
			$update = $link->prepare('UPDATE `deru_users` SET `password` = :password WHERE `id` = :id');
			$update->execute(array('password' => $hidden_password, 'id' => $id));

			$writelogs = $link->prepare('INSERT INTO `deru_logs` SET `user_id` = :user_id, `text` = :text, `ip` = :ip, `date` = :date');
			$writelogs->execute(array('text' => $message['changepassword'], 'user_id' => $id, 'ip' => $url, 'date' => date('d M Y H:m')));

			echo json_encode($error = array('change' => 'Пароль успешно изменен!'));
				
			} else {
				echo json_encode($error = array('mirror' => 'Новый пароль должен совпадать!'));
			}
		} else {
			echo json_encode($error = array('empty' => 'Введите пароль!'));
		}

	} else {
		die(header("HTTP/1.0 404 Not Found"));
	}

?>