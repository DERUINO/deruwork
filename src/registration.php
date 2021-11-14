<?php include('header.php'); ?>

<?php
	if (isset($_SESSION['email'])) {
		die();
	}
?>

<link href="css/registration.min.css" rel="stylesheet" type="text/css">
		
<div class="registration">
	<div class="register">
		<div class="reg_title">Регистрация</div>
		<div class="reg_line"></div>
		<form id="registration">
			<div class="register_block">				
				<div class="reg_block">
					<div class="reg_input_block">
						<img src="css/images/ico_name.svg"><input type="text" name="name" class="f_input reg_input" placeholder="Логин" autocomplete="off" required />
					</div>
				</div>					
				<div class="reg_block">
					<div class="reg_input_block">
						<img src="css/images/ico_email.svg"><input type="email" name="email" class="f_input reg_input" placeholder="Эл. почта" autocomplete="off" required />
					</div>						
				</div>				
				<div class="reg_block">
					<div class="reg_input_block reg_pass">
						<img src="css/images/ico_password.svg"><input type="password" name="password1" class="f_input reg_input" placeholder="Пароль" autocomplete="off" required />
					</div>
				</div>					
				<div class="reg_block">
					<div class="reg_input_block">
						<img src="css/images/ico_password2.svg"><input type="password" name="password2" class="f_input reg_input" placeholder="Повтор пароля" autocomplete="off" required />
					</div>
				</div>
				<div class="reg_submit">
					<button name="submit" class="reg_button button" type="submit">Зарегистрироваться</button>
				</div>
			</div>
		</form>
	</div>
</div>

<script type="text/javascript">
	registration();	
</script>

<?php include('footer.php'); ?>
