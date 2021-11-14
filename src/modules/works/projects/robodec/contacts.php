<!DOCTYPE html>

<html>

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Контакты/Виртуальный дизайнер</title>

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
					<div class="mainblock static">

						<!--menu-->
						<?php include('menu.php') ?>
						<!--/menu-->

						<!--contactsscreen-->
						<div class="about_container">
							<div class="about_title">
								КОНТАКТЫ
							</div>
							<div class="row myrow">
								<div class="col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4 mycol">
									<div class="about_img">
										<img src="css/images/contacts.png" alt="" width="100%">
									</div>
								</div>
								<div class="col-12 col-sm-8 col-md-8 col-lg-8 col-xl-8 mycol">
									<div class="about_text">
										текст
									</div>
								</div>
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
						<!--/contactsscreen-->

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