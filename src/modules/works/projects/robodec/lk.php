<!DOCTYPE html>

<html>

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Кабинет/Виртуальный дизайнер</title>

	<link rel="shortcut icon" href="css/images/favicon.png" type="image/png">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.bundle.js"></script>
  </head>

  <body>

    <div class="container_fluid wrapper">

		<!--header-->
    	<?php include ('header.php') ?>
    	<!--/header-->

    	<!--mainblock-->
		<div class="container_fluid">
			<div class="row myrow justify-content-center">

				<!--leftbanners-->
				<?php include ('leftbanners.php') ?>
				<!--/leftbanners-->

				<div class="mycol col-12 col-sm-12 col-md-10 col-lg-8 col-xl-8">
					<div class="mainblock static lk_static">

						<!--menu-->
						<?php include('menu.php') ?>
						<!--/menu-->

						<!--lkscreen-->
						<div class="lk_container">
							<div class="lk_title">
								КАБИНЕТ
							</div>
							<div class="lk_text">
								<table>
									<tbody>
										<tr>
											<td>
												Логин:
											</td>
											<td>
												test
											</td>
										</tr>
										<tr>
											<td>
												Email:
											</td>
											<td>
												test@test.ru
											</td>
										</tr>
										<tr>
											<td>
												Телефон:
											</td>
											<td>
												1234567890
											</td>
										</tr>
										<tr>
											<td>
												Пароль
											</td>
											<td>
												******** <span class="change_pass">(изменить)</span>
											</td>
										</tr>
									</tbody>
								</table>
								<form>
									<div class="change_pass_block">
										<input type="text" name="old_pass" placeholder="Старый пароль">
										<input type="text" name="new_pass" placeholder="Новый пароль">
										<input class="input_submit lk_button" type="submit" value="Сохранить">
									</div>
								</form>
							</div>
							<div class="lk_text_last">
								Последние 3D картинки, которые вы смотрели:
							</div>
							<div class="lk_img_last">
								<img src="css/images/test.jpg" alt="">
								<img src="css/images/test.jpg" alt="">
								<img src="css/images/test.jpg" alt="">
								<img src="css/images/test.jpg" alt="">
								<img src="css/images/test.jpg" alt="">
							</div>
							<div class="lk_subscribe">
								<table>
									<tbody>
										<tr>
											<td>Подписка</td>
											<td><input type="checkbox"></td>
										</tr>
									</tbody>
								</table>
							</div>
							<div class="contacts_form">
								<div class="form_title">
									Есть вопросы? Свяжитесь с нами
								</div>
								<form action="">
									<div class="row myrow justify-content-center">
										<div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
											<div class="input_form input_name">
												<input type="text" name="name" placeholder="Ваше имя">
											</div>
											<div class="input_form input_email">
												<input type="text" name="email" placeholder="Ваш E-mail">
											</div>
										</div>
										<div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
											<div class="input_form input_text">
												<textarea type="text" name="text" placeholder="Ваш вопрос"></textarea>
											</div>
										</div>
									</div>
									<div class="input_submit">
										<input class="news_button" type="submit" value="ОТПРАВИТЬ">
									</div>
								</form>
							</div>
						</div>
						<!--/lkscreen-->

					</div>
				</div>

				<!--rightbanners-->
				<?php include ('rightbanners.php') ?>
				<!--/rightbanners-->

			</div>
		</div>
    	<!--/mainblock-->
		
		<!--footer-->
    	<?php include('footer.php') ?>
    	<!--/footer-->

    </div>

    <script type="text/javascript" src="js/script.js"></script>
  </body>

</html>