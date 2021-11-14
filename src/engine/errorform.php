<?php

	include('config.php');

	$text = $_POST['text'];

	$sql = $link->prepare('INSERT INTO `deru_errors` SET `text` = :text');
	$sql->execute(array('text' => $text));

?>