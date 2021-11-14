<!DOCTYPE html>

<html>

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Новости/Виртуальный дизайнер</title>

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

						<!--newsscreen-->
						<div class="news_container">
							<div class="news_title">
								НОВОСТИ
							</div>
							<div class="row myrow news_block">
								<div class="col-12 col-sm-12 col-md-12 col-lg-3 col-xl-3">
									<div class="news_img">
										<img src="css/images/test.jpg" alt="" width="100%">
									</div>
								</div>
								<div class="col-12 col-sm-12 col-md-12 col-lg-9 col-xl-9">
									<div class="row myrow justify-content-between news_title_block">
										<div class="col-6 mycol">
											<div class="news_info_title">
												Добавили новый раздел
											</div>
										</div>
										<div class="col-6 mycol">
											<div class="news_date">
												27.06.2020
											</div>
										</div>
									</div>
									<div class="news_info_text">
										Теперь на нашем сайте вы можете спроектировать не только
										прямую кухню, но и угловую. Добавлено более 150 комплектаций.
										При создании этого раздела были взяты размеры от 500 мм до
										5000 и вся бытовая техника, включая посудомойку, варочную
										панель, духовой шкаф и микроволновку.
									</div>
									<div class="news_button">
										<a href="fullnews.php">ПОДРОБНЕЕ</a>
									</div>
								</div>
							</div>
							<div class="row myrow news_block">
								<div class="col-12 col-sm-12 col-md-12 col-lg-3 col-xl-3">
									<div class="news_img">
										<img src="css/images/test.jpg" alt="" width="100%">
									</div>
								</div>
								<div class="col-12 col-sm-12 col-md-12 col-lg-9 col-xl-9">
									<div class="row myrow justify-content-between news_title_block">
										<div class="col-6 mycol">
											<div class="news_info_title">
												Добавили новый раздел
											</div>
										</div>
										<div class="col-6 mycol">
											<div class="news_date">
												27.06.2020
											</div>
										</div>
									</div>
									<div class="news_info_text">
										Теперь на нашем сайте вы можете спроектировать не только
										прямую кухню, но и угловую. Добавлено более 150 комплектаций.
										При создании этого раздела были взяты размеры от 500 мм до
										5000 и вся бытовая техника, включая посудомойку, варочную
										панель, духовой шкаф и микроволновку.
									</div>
									<div class="news_button">
										<a href="fullnews.php">ПОДРОБНЕЕ</a>
									</div>
								</div>
							</div>
							<div class="row myrow news_block">
								<div class="col-12 col-sm-12 col-md-12 col-lg-3 col-xl-3">
									<div class="news_img">
										<img src="css/images/test.jpg" alt="" width="100%">
									</div>
								</div>
								<div class="col-12 col-sm-12 col-md-12 col-lg-9 col-xl-9">
									<div class="row myrow justify-content-between news_title_block">
										<div class="col-6 mycol">
											<div class="news_info_title">
												Добавили новый раздел
											</div>
										</div>
										<div class="col-6 mycol">
											<div class="news_date">
												27.06.2020
											</div>
										</div>
									</div>
									<div class="news_info_text">
										Теперь на нашем сайте вы можете спроектировать не только
										прямую кухню, но и угловую. Добавлено более 150 комплектаций.
										При создании этого раздела были взяты размеры от 500 мм до
										5000 и вся бытовая техника, включая посудомойку, варочную
										панель, духовой шкаф и микроволновку.
									</div>
									<div class="news_button">
										<a href="fullnews.php">ПОДРОБНЕЕ</a>
									</div>
								</div>
							</div>
						</div>
						<!--/newsscreen-->

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