<?php

	require_once('engine/config.php');

	$name = $_POST['name'];
	$text = $_POST['text'];
	$today = date("d.m.Y, G:i");

	$publish_id = $_POST['publish_id'];

	$status = array(
		'published' => 'published',
		'moderation' => 'moderation'
	);

	if (isset($text)) {
		if ($name == '') {
			die(header("HTTP/1.0 404 Not Found"));
		} else if ($text == '' || strlen($text) <= 49) {
			die(header("HTTP/1.0 404 Not Found"));
		} else {
			$update = $link->prepare("INSERT INTO `deru_feedback` SET `name` = :name, `text` = :text, `date` = :date, `status` = :status");
			$update->execute(array('name' => $name, 'text' => $text, 'date' => $today, 'status' => $status['moderation']));
		}
	}

	if (isset($publish_id)) {
		$publish_sql = $link->prepare("UPDATE `deru_feedback` SET `status` = :status WHERE `id` = :publish_id");
		$publish_sql->execute(array('status' => $status['published'], 'publish_id' => $publish_id));
	}

?>