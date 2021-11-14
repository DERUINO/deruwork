<?php
	if (!defined('DERUWORK')) {
		die('Доступ запрещен!');
	}
?>

<link href="css/feedback.min.css" rel="stylesheet" type="text/css">

<div class="container_fluid">
	<div class="feedback">
		<div class="wrapper_title">Наши отзывы</div>
		<div class="row myrow justify-content-center">
			<div class="feed_block col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
				<div class="feed_create_title">Оставить свой отыв:</div>
				<?php if ($group <= 4) { ?>
					<div class="feed_create">
						<form id="form">
							<input class="hidden_name" type="text" name="name" value="<?php echo $deru_name; ?>">
							<div class="feed_input">
								<textarea minlength="50" class="input_text" type="text" name="text" placeholder="Пожалуйста оставьте свой отзыв о нашей работе, он поможет нам развиваться в лучшую сторону!" required></textarea>
							</div>
							<div class="feed_input feed_submit">
								<input class="input_submit" type="submit" value="Отправить">
							</div>
						</form>
				<?php } else { ?>
					<div class="feed_input feed_submit">
						<div class="feed_auth open_auth">Авторизуйтесь!</div>
					</div>
				<?php } ?>
			</div>
			<div class="feed_line"></div>
		</div>
		<div class="feed_others row myrow justify-content-center">
			<div class="col-12">
				<div class="feed_others_title">Отзывы других клиентов</div>
				<?php
					if ($group == 1) {
						$sql = $link->prepare("SELECT * FROM `deru_feedback` ORDER BY `status`, `id` DESC");
						$sql->execute();
						if($sql->rowCount() > 0) {
							while($table = $sql->fetch(PDO::FETCH_BOTH)) {
								echo '<div class="feed_others_block">
										<div class="feed_user_date">Дата публикации: '.$table['date'].'</div>
										<div class="feed_user_title">'.$table['name'].'</div>
										<div class="feed_user_text">'.$table['text'].'</div>';
										if ($table['status'] == 'published') {
											echo '<div class="feed_status">статус: <span class="status_published">опубликован</div>';
										} else if ($table['status'] == 'moderation') {
											echo '<div class="feed_status">статус: <span class="status_moderation">на модерации</div>';
											echo '<div class="publish_button">
													<form id="publish">
														<input type="text" name="publish_id" value="'.$table['id'].'" hidden>
														<button type="accept">Опубликовать</button>
													</form>
												</div>';
										}
								echo '</div>';
							}
						}
					} else {
						$status = 'published';
						$sql = $link->prepare("SELECT * FROM `deru_feedback` WHERE `status` = :status ORDER BY `id` DESC");
						$sql->execute(array('status' => $status));
						if($sql->rowCount() > 0) {
							while($table = $sql->fetch(PDO::FETCH_BOTH)) {
								echo '<div class="feed_others_block">
										<div class="feed_user_date">Дата публикации: '.$table['date'].'</div>
										<div class="feed_user_title">'.$table['name'].'</div>
										<div class="feed_user_text">'.$table['text'].'</div>
									</div>';
							}
						}
					}
				?>
			</div>
			<div class="row myrow justify-content-center">
				<div class="col-12">
					<div class="feed_others_block_more">
						Показать больше
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
	
<script type="text/javascript" src="modules/feedback/js/script.js"></script>