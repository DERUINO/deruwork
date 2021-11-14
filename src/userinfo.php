<?php include('header.php'); ?>

	<?php if (isset($_SESSION['email'])) { ?>

	<link href="css/userinfo.min.css" rel="stylesheet" type="text/css">

	<script type="text/javascript" src="https://malsup.github.io/min/jquery.form.min.js"></script>

	<div class="userinfo">
		<div class="userinfo_block">
			<div class="userinfo_title">Профиль</div>
			<div class="myinfo">
				<div class="myinfo_title">
					Основная информация
				</div>
				<div class="myinfo_block first">
					<form id="uploadImage" method="post">
						<input type="file" id="js-file" class="add_file" name="file" onchange="previewFile()" required>
						<div class="myinfo_img">
							<?php
								$profile_img = 'css/images/users/'.$deru_name.'.png';
								if (file_exists($profile_img)) { ?>

								<img class="preview_img" src="css/images/users/<?php echo $deru_name ?>.png">

							<?php } else { ?>

								<img class="test_img" src="css/images/users/default.svg">
							
							<?php } ?>
						</div>
						<span class="upload_button">Обновить</span>
					</form>
				</div>
				<div class="myinfo_block">
					<div class="myinfo_login">
						<?php echo $deru_name; ?>
					</div>
				</div>
				<div class="myinfo_block">
					<div class="myinfo_group">
						<div class="lowcase">
							Эл. почта
						</div>
						<div>
							<?php echo $deru_email; ?>
						</div>
					</div>
				</div>
				<div class="myinfo_block">
					<div class="myinfo_group">
						<div class="lowcase">
							Дата регистрации
						</div>
						<div>
							<?php echo $deru_regdate; ?>
						</div>
					</div>
				</div>
				<div class="myinfo_block">
					<div class="myinfo_group">
						<div class="lowcase">
							Группа
						</div>
						<div>
							<?php
								if ($group == 1) {
									echo 'Администратор';
								} else {
									echo 'Пользователь';
								}
							?>
						</div>
					</div>
				</div>
			</div>
			<div class="useredit">
				<div class="useredit_title">Редактирование профиля</div>
					<form id="changepass">
						<div class="useredit_block">
							<div class="useredit_pass2">
								<div class="edit_input">
									<input type="password" name="new_password1" placeholder="Новый пароль">
								</div>
							</div>
							<div class="useredit_pass3">
								<div class="edit_input">
									<input type="password" name="new_password2" placeholder="Повторите новый пароль">
								</div>
							</div>
							<div class="useredit_submit">
								<button class="button" type="submit">Сохранить</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

	<script type="text/javascript">
		changePassword();
		updateImage();
		previewFile();
	</script>

	<?php } ?>

<?php include('footer.php'); ?>