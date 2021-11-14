<!DOCTYPE html>

<html>

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Главная/Виртуальный дизайнер</title>

	<link rel="shortcut icon" href="css/images/favicon.png" type="image/png">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/category.css">

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
					<div class="mainblock indexblock">

						<!--menu-->
						<?php include('menu.php') ?>
						<!--/menu-->

						<!--mainscreen-->
						<div class="block">
							<div class="start_block">
								<div class="main_title">
								ВИРТУАЛЬНЫЙ ДИЗАЙНЕР
								</div>
								<div class="main_text">
									Грамотное проектирование<br>вашей будущей мебели<br>за несколько минут
								</div>
								<div class="main_start">
									<div class="start button">
										НАЧАТЬ
									</div>
								</div>
							</div>
						</div>

						<div class="block2">
							<div class="category1 choice_block">
								<div class="choice_title">Какая мебель вас интересует?</div>
								<div class="row myrow justify-content-center">
									<div class="col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4">
										<div class="choiceblock choiceblock_1">
											<div class="choice_text">
												Товары для уборки
											</div>
											<div class="choice_img">
												<img src="css/images/test.jpg" alt="" width="100%">
											</div>
											<div class="category1_1 button choice_button">
												ВЫБРАТЬ
											</div>
										</div>
									</div>
									<div class="col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4">
										<div class="choiceblock choiceblock_2">
											<div class="choice_text">
												Хранение продуктов
											</div>
											<div class="choice_img">
												<img src="css/images/test.jpg" alt="" width="100%">
											</div>
											<div class="category1_2 button choice_button">
												ВЫБРАТЬ
											</div>
										</div>
									</div>
									<div class="col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4">
										<div class="choiceblock choiceblock_3">
											<div class="choice_text">
												Спортзал
											</div>
											<div class="choice_img">
												<img src="css/images/test.jpg" alt="" width="100%">
											</div>
											<div class="category1_3 button choice_button">
												ВЫБРАТЬ
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="block3">
							<div class="choice_more_block">
								<div class="choice_title">
									Какая ширина вашего шкафа?
								</div>
								<div class="choice_text">
									Введите размер в мм
								</div>
								<div class="choice_img fix_img">
									<img src="css/images/test.jpg" alt="" width="250px">
								</div>
								<div class="choice_input">
									<input type="number" name="number">
								</div>
								<div class="choice_more_button button">
									ВЫБРАТЬ
								</div>
							</div>
						</div>
						<div class="block4">
							<div class="final_block">
								<div class="row myrow fix_final">
									<div class="col-12 col-sm-12 col-md-8 col-lg-8 col-xl-8">
										<div class="final_block_img">
											<img src="css/images/test.jpg" alt="" width="100%">
										</div>
									</div>
									<div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
										<div class="final_block_text_container">
											<div class="final_block_text final_block_title">
												3D ПРОЕКТ ГОТОВ
											</div>
											<div class="final_block_text">
												<a href="#">СКАЧАТЬ КАРТИНКУ</a>
											</div>
											<div class="final_block_text">
												<a href="#">СКАЧАТЬ<br>ФАЙЛ PRO100</a>
											</div>
											<div class="final_block_text">
												<a href="#">РАСЧИТАТЬ<br>СТОИМОСТЬ В РАЗНЫХ<br>КОМПАНИЯХ</a>
											</div>
											<div class="final_block_links">
												ПОДЕЛИТЬСЯ:
												<a href="#"><img src="css/images/whatsapp.png" alt="" width="20px"></a>
												<a href="#"><img src="css/images/viber.png" alt="" width="20px"></a>
												<a href="#"><img src="css/images/telegram.png" alt="" width="20px"></a>
												<a href="#"><img src="css/images/vk.png" alt="" width="20px"></a>
						    					<a href="#"><img src="css/images/instagram.jpg" alt="" width="20px"></a>
						    					<a href="#"><img src="css/images/facebook.png" alt="" width="20px"></a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!--mainscreen-->

					</div>
				</div>

				<!--rightbanners-->
				<?php include ('rightbanners.php') ?>
				<!--/rightbanners-->

			</div>
			<div class="mobile_banner">
				блок с рекламой
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