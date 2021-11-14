<?php
	include('config.php');
	include('ip.php');

    $name = $_POST['name'];
    $email = $_POST['email'];
    $password1 = $_POST['password1'];
	$password2 = $_POST['password2'];

    $regdate = date("d.m.Y, G:i");

    $format = '/^[a-z0-9]+$/i';
	$lowername = strtolower($name);
    $group = 4;

    $fromName = 'Deru Working';
    $fromMail = 'main@deruwork.ru';

    $emailTo = $email;
	$subject = 'Регистрация на сайте deruwork.ru';
	$headers = "Content-type: text/html; charset=\"utf-8\"\r\n";
	$headers .= "From: ". $fromName ." <". $fromMail ."> \r\n";
	$body = "<font style='font-size:22px;font-weight:bolder;margin-bottom:10px;'>$name, Ваш аккаунт успешно зарегистрирован на сайте deruwork.ru</font><br>
			<font style='font-size: 18px;margin: 15px;'>Данные вашего аккаунта:</font><br>
			<font style='color:#820000;margin-left:15px;'>Логин:</font> $name<br>
			<font style='color:#820000;margin-left:15px;'>Эл. почта:</font> $email<br>
			<font style='color:#820000;margin-left:15px;'>Пароль:</font> $password1<br>
			<font style='padding-top: 10px;border-top: 1px solid rgba(0,0,0,0.5);margin-top: 30px;width:500px;'>С уважением, Администрация сайта deruwork.ru</font>";

    if (isset($name)) {
    	$check_mail = $link->prepare('SELECT `email` FROM `deru_users` WHERE `email` = :email');
    	$check_mail->execute(array('email' => $email));
		$exists_email = $check_mail->fetchColumn();
		
		$check_name = $link->prepare('SELECT `name` FROM `deru_users` WHERE LOWER(`name`) = :name');
    	$check_name->execute(array('name' => $lowername));
    	$exists_name = $check_name->fetchColumn();

    	if ($exists_email || strlen($email) <= 0) {
    		echo json_encode($error = array('email' => 'Данная эл. почта уже занята!'));
    	} else if ($exists_name || strlen($name) <= 0) {
			echo json_encode($error = array('name' => 'Данный логин уже занят!'));
		} else {

			if ($password1 == $password2) {
				if (preg_match($format, $name)) {
					$hidden_password = md5($password1);

		            $register = $link->prepare("INSERT INTO `deru_users` SET `name` = :name, `password` = :password, `email` = :email, `user_group` = :user_group, `regdate` = :regdate, `user_ip` = :user_ip");
		            $register->execute(array('name' => $name, 'password' => $hidden_password, 'email' => $email, 'user_group' => $group, 'regdate' => $regdate, 'user_ip' => $ip));

		            $mail = mail($emailTo, $subject, $body, $headers, '-f'. $fromMail);
		            
		            echo json_encode($error = array('register' => 'Успешная регистрация!<br>Авторизуйтесь в ЛК.'));

				} else {
					echo json_encode($error = array('format' => 'Некорректный логин!'));
				}

	        } else {
	            echo json_encode($error = array('password' => 'Пароли не совпадают!'));
	        }
	    }

    } else {
    	die(header("HTTP/1.0 404 Not Found"));
    }
?>