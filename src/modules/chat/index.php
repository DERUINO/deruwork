<?php
	if (!defined('DERUWORK')) {
		die('Доступ запрещен!');
	}
?>	
	
<link href="css/chat.min.css" rel="stylesheet" type="text/css">

<script type="text/javascript" src="js/libs/bootstrap.bundle.js"></script>
<script type="text/javascript" src="js/libs/bootstrap-select.min.js"></script>

<?php
	$date = date('y-m-d H:i:s');
	$dialog_id = $_GET['dialog'];
?>

<div class="chat">
	<div class="title">Личный чат</div>		

	<?php if ($url != '/chat.php') {
		echo '<div class="back_dialogs"><a href="/chat.php">К списку диалогов</a></div>';
	}
	?>

		<div class="chatcontainer">
		<?php
		if ($url == '/chat.php') { ?>
			<div class="chataddcontainer">
				<div class="flexbox">
					<div class="chataddcontainer-title">Новый диалог с:</div>
					<div class="chataddcontainer-addblock">
						<form id="add-dialog">
							<div class="selectblock">
								<select name="dialogname" class="selectpicker" data-live-search="true">
									<option disabled selected>Выберите пользователя...</option>
									<?php
										$show_names_sql = $link->prepare("SELECT `name` FROM `deru_users`");
										$show_names_sql->execute();
										while ($show_names = $show_names_sql->fetch(PDO::FETCH_ASSOC)) {
											echo '<option>'.$show_names['name'].'</option>';
										}
									?>
								</select>
							</div>
							<div class="messageblock">
								<textarea name="dialogtext" placeholder="Напишите что-нибудь :)" required></textarea>
							</div>
							<div class="submitblock">
								<button type="submit">Написать</button>
							</div>
						</form>
					</div>
				</div>
			</div>
			<div class="chat-navigationblock">
				<div class="searchblock">
					<img src="css/images/search.svg">
					<input class="search" type="text" placeholder="Поиск">
				</div>
				<div class="add-dialogblock">
					<img src="css/images/add-dialog.svg">
				</div>
			</div>
			<div class="ajax-chatlist">
		<?php } ?>
	<?php
		if ($url == '/chat.php') {
			$dialogs_sql = $link->prepare("SELECT * FROM `deru_dialogs` WHERE `const_author` = :author_id OR `const_user` = :user_id ORDER BY `date` DESC, `checked` ASC");
			$dialogs_sql->execute(array('author_id' => $deru_id, 'user_id' => $deru_id));

			while($dialogs = $dialogs_sql->fetch(PDO::FETCH_ASSOC)) {

				if ($deru_id != $dialogs['const_author']) {
					$name_sql = $link->prepare("SELECT `name`, `id` FROM `deru_users` WHERE `id` = :id");
					$name_sql->execute(array('id' => $dialogs['const_author']));
					$name_title = $name_sql->fetch(PDO::FETCH_ASSOC);
				} else {
					$name_sql = $link->prepare("SELECT `name`, `id` FROM `deru_users` WHERE `id` = :id");
					$name_sql->execute(array('id' => $dialogs['const_user']));
					$name_title = $name_sql->fetch(PDO::FETCH_ASSOC);
				}

			?>
				<a onclick="autoUpdateNotifications()" href="?dialog=<?php echo $dialogs['dialog_id']; ?>">
					<?php if ($dialogs['checked'] == 0 && $deru_id == $dialogs['user_id']) { ?>
					<div class="chatblock unread">
					<?php } else { ?>
					<div class="chatblock">
					<?php } ?>
						<div class="imgblock">
						<?php
							$profile_img = 'css/images/users/'.$name_title['name'].'.png';
							if (file_exists($profile_img)) { ?>
								<img class="profile_img" src="css/images/users/<?php echo $name_title['name']; ?>.png">
							<?php } else { ?>
								<img class="profile_img" src="css/images/users/default.svg">
							<?php }
						?>
						</div>
						<div class="textblock">
							<div class="title search-title"><?php echo $name_title['name']; ?></div>
							<div class="slicedblock">
								<div class="text-img">
								<?php
										if ($dialogs['author_id'] == $deru_id) {
										$profile_img = 'css/images/users/'.$deru_name.'.png';
										if (file_exists($profile_img)) { ?>
											<img class="profile_img" src="css/images/users/<?php echo $deru_name; ?>.png">
										<?php } else { ?>
											<img class="profile_img" src="css/images/users/default.svg">
										<?php }
									}?>
								</div>
								<div class="text slice">
									<?php echo $dialogs['text']; ?>
								</div>
							</div>
						</div>
						<div class="dateblock">
							<?php
								echo date('H:i', strtotime($dialogs['date']));
							?>
						</div>
					</div>
				</a>
			<?php }
		} else {
			
			$dialogs_sql = $link->prepare("SELECT * FROM `deru_dialogs` WHERE (`const_author` = :author_id AND `dialog_id` = :dialog_id) OR (`const_user` = :user_id AND `dialog_id` = :dialog_id)");
			$dialogs_sql->execute(array('author_id' => $deru_id, 'user_id' => $deru_id, 'dialog_id' => $dialog_id));
			$dialogs = $dialogs_sql->fetch(PDO::FETCH_ASSOC);

			if ($deru_id != $dialogs['const_author']) {
				$name_sql = $link->prepare("SELECT `name`, `id` FROM `deru_users` WHERE `id` = :id");
				$name_sql->execute(array('id' => $dialogs['const_author']));
				$name_title = $name_sql->fetch(PDO::FETCH_ASSOC);
			} else {
				$name_sql = $link->prepare("SELECT `name`, `id` FROM `deru_users` WHERE `id` = :id");
				$name_sql->execute(array('id' => $dialogs['const_user']));
				$name_title = $name_sql->fetch(PDO::FETCH_ASSOC);
			}

			if ($dialogs['checked'] == 0) {
				$checked_sql = $link->prepare("UPDATE `deru_dialogs` SET `checked` = :checked WHERE `dialog_id` = :dialog_id AND `user_id` = :user_id");
				$checked_sql->execute(array('checked' => 1, 'dialog_id' => $dialogs['dialog_id'], 'user_id' => $deru_id));
			}
		?>
			<div class="opened_chatblock">
				<div class="chatblock_header">
					<div class="imgblock">
					<?php
						$profile_img = 'css/images/users/'.$name_title['name'].'.png';
						if (file_exists($profile_img)) { ?>
							<img class="profile_img" src="css/images/users/<?php echo $name_title['name']; ?>.png">
						<?php } else { ?>
							<img class="profile_img" src="css/images/users/default.svg">
						<?php }
					?>
					</div>
					<div class="title"><?php echo $name_title['name']; ?></div>
				</div>
				<div class="messagecontainer">
					<div class="ajax_messagecontainer" id="scroll">
					<?php
					$chat_sql = $link->prepare("SELECT * FROM `deru_chat` INNER JOIN `deru_users` ON deru_chat.author_id = deru_users.id WHERE (`dialog_id` = :dialog_id AND `author_id` = :author_id) OR (`dialog_id` = :dialog_id AND `user_id` = :user_id) ORDER BY `date`");
					$chat_sql->execute(array('dialog_id' => $dialog_id, 'author_id' => $deru_id, 'user_id' => $deru_id));
					$chat = $chat_sql->fetchAll(PDO::FETCH_ASSOC);
					foreach ($chat as $key) {

						if ($key['checked'] == 0) { ?>
							<div class="messageblock unchecked">
						<?php } else { ?>
							<div class="messageblock">
						<?php } ?>
								<div class="message">
									<div class="title"><?php echo $key['name']; ?></div>
									<div><?php echo $key['text']; ?></div>
								</div>
								<div class="dateblock">
									<?php echo date('j M H:i', strtotime($key['date'])); ?>
								</div>
							</div>
					<?php } ?>
					</div>
				</div>
				<form id="text">
					<div class="inputblock">
							<div class="textarea">
								<input class="textarea_text" type="text" name="text" placeholder="Написать..." required>
							</div>
							<div class="acceptbutton">
								<button type="submit"><img src=""></button>
								<img src="css/images/enter.svg">
							</div>
					</div>
				</form>
			</div>
		<?php }
	?>
	</div>
	</div>
</div>

<?php
	$_SESSION['chat_dialog_id'] = $dialog_id;
	$_SESSION['chat_author'] = $deru_id;
?>

<?php

	$show_dialogs_sql = $link->prepare("SELECT * FROM `deru_dialogs` WHERE (`author_id` = :author_id AND `dialog_id` = :dialog_id) OR (`user_id` = :user_id AND `dialog_id` = :dialog_id)");
	$show_dialogs_sql->execute(array('author_id' => $deru_id, 'user_id' => $deru_id, 'dialog_id' => $dialog_id));
	$show_dialogs = $show_dialogs_sql->fetch(PDO::FETCH_ASSOC);

	$text = $_POST['text'];
	$dialogname = $_POST['dialogname'];
	$dialogtext = $_POST['dialogtext'];

	if (isset($text)) {
		if ($show_dialogs['author_id'] == $deru_id) {
			$update_dialogs_sql = $link->prepare("UPDATE `deru_dialogs` SET `author_id` = :author_id, `user_id` = :user_id, `text` = :text, `date` = :date, `checked` = :checked WHERE `dialog_id` = :dialog_id");
			$update_dialogs_sql->execute(array('author_id' => $deru_id, 'user_id' => $show_dialogs['user_id'], 'text' => $text, 'date' => $date, 'dialog_id' => $dialog_id, 'checked' => 0));

			$add_message_sql = $link->prepare("INSERT INTO `deru_chat` SET `dialog_id` = :dialog_id, `author_id` = :author_id, `user_id` = :user_id, `text` = :text, `date` = :date");
			$add_message_sql->execute(array('dialog_id' => $show_dialogs['dialog_id'], 'author_id' => $deru_id, 'user_id' => $show_dialogs['user_id'], 'text' => $text, 'date' => $date));
		} else {
			$update_dialogs_sql = $link->prepare("UPDATE `deru_dialogs` SET `author_id` = :author_id, `user_id` = :user_id, `text` = :text, `date` = :date, `checked` = :checked WHERE `dialog_id` = :dialog_id");
			$update_dialogs_sql->execute(array('author_id' => $deru_id, 'user_id' => $show_dialogs['author_id'], 'text' => $text, 'date' => $date, 'dialog_id' => $dialog_id, 'checked' => 0));
		
			$add_message_sql = $link->prepare("INSERT INTO `deru_chat` SET `dialog_id` = :dialog_id, `author_id` = :author_id, `user_id` = :user_id, `text` = :text, `date` = :date");
			$add_message_sql->execute(array('dialog_id' => $show_dialogs['dialog_id'], 'author_id' => $deru_id, 'user_id' => $show_dialogs['author_id'], 'text' => $text, 'date' => $date));
		}
	}

	if (isset($dialogname)) {
		$check_names_sql = $link->prepare("SELECT * FROM `deru_users` WHERE `name` = :name");
		$check_names_sql->execute(array('name' => $dialogname));
		$check_names = $check_names_sql->fetch(PDO::FETCH_ASSOC);

		if ($check_names) {

			if ($check_names['id'] != $deru_id) {
				$check_dialog_sql = $link->prepare("SELECT * FROM `deru_dialogs` WHERE (`const_author` = :const_author AND `const_user` = :const_user) OR (`const_author` = :const_user AND `const_user` = :const_author)");
				$check_dialog_sql->execute(array('const_author' => $deru_id, 'const_user' => $check_names['id']));
				$check_dialog = $check_dialog_sql->fetch(PDO::FETCH_ASSOC);

				if ($check_dialog) {
					$update_dialog_sql = $link->prepare("UPDATE `deru_dialogs` SET `author_id` = :author_id, `user_id` = :user_id, `text` = :text, `date` = :date, `checked` = :checked WHERE `dialog_id` = :dialog_id");
					$update_dialog_sql->execute(array('author_id' => $deru_id, 'user_id' => $check_names['id'], 'text' => $dialogtext, 'date' => $date, 'checked' => 1, 'dialog_id' => $check_dialog['dialog_id']));

					$add_message_sql = $link->prepare("INSERT INTO `deru_chat` SET `dialog_id` = :dialog_id, `author_id` = :author_id, `user_id` = :user_id, `text` = :text, `date` = :date");
					$add_message_sql->execute(array('dialog_id' => $check_dialog['dialog_id'], 'author_id' => $deru_id, 'user_id' => $check_names['id'], 'text' => $dialogtext, 'date' => $date));
				} else {
					$update_dialog_sql = $link->prepare("INSERT INTO `deru_dialogs` SET `author_id` = :author_id, `user_id` = :user_id, `text` = :text, `date` = :date, `const_author` = :const_author, `const_user` = :const_user, `checked` = :checked");
					$update_dialog_sql->execute(array('author_id' => $deru_id, 'user_id' => $check_names['id'], 'text' => $dialogtext, 'date' => $date, 'const_author' => $deru_id, 'const_user' => $check_names['id'], 'checked' => 0));

					$fix_dialog_sql = $link->prepare("SELECT * FROM `deru_dialogs` WHERE `const_author` = :const_author AND `const_user` = :const_user");
					$fix_dialog_sql->execute(array('const_author' => $deru_id, 'const_user' => $check_names['id']));
					$fix_dialog = $fix_dialog_sql->fetch(PDO::FETCH_ASSOC);

					$add_message_sql = $link->prepare("INSERT INTO `deru_chat` SET `dialog_id` = :dialog_id, `author_id` = :author_id, `user_id` = :user_id, `text` = :text, `date` = :date");
					$add_message_sql->execute(array('dialog_id' => $fix_dialog['dialog_id'], 'author_id' => $deru_id, 'user_id' => $check_names['id'], 'text' => $dialogtext, 'date' => $date));
				}
			}
		}
	}
?>

<script src="modules/chat/js/script.js" type="text/javascript"></script>