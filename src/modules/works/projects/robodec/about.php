<!DOCTYPE html>

<html>

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>О сайте/Виртуальный дизайнер</title>

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

						<!--aboutscreen-->
						<div class="about_container">
							<div class="about_title">
								О САЙТЕ ROBODEC
							</div>
							<div class="about_text">
								<p><img src="css/images/about.png" alt="" width="30%">
								<span>Сайт ROBODEC создан группой дизайнеров по мебели из Санкт-Петербурга.</p>
								<p>Данный сервис позволяет грамотно и быстро спроектировать 3D проект вашей будущей мебели,
								который полностью будет удовлетворять вашим желаниям и потребностям. В конце серии
								вопросов, вы получите 3D проект. Вы сможете скачать картинку или файл программы PRO100, а
								также перейти по ссылке для расчета проекта в компаниях – производителях мебели.</p>
								<p>Идея создать «Виртуального дизайнера» родилась после многочисленных встреч с клиентами,
								которые знали, что они будут хранить и как пользоваться тем или иным изделием, но не
								понимали, как грамотно распределить полезное пространство.</p>
								<p>Имея многолетний опыт работы в этой сфере, дизайнеры по мебели, выработали скрипт работы с
								клиентом. Смысл этого способа работы прост. Специалист задает несколько вопросов, которые
								раскрывают потребности клиента. И на основе ответов клиента, за считанные минуты, создается
								грамотный проект. Который отвечает всем требованиям и пожеланиям человека.</p>
								<p>Еще одним толчком, к созданию данного проекта, послужили жалобы клиентов на то, что более
								90% дизайнеров мебели при встрече не могут грамотно спроектировать будущую мебель, а
								просто требуют от клиентов их понимания конструкции.</p>
								<p>Этот сервис сэкономит ваше время, деньги, а также поможет профессионально создать изделия,
								которые будут радовать вас на протяжении долгого времени.</span></p>
							</div>
							<div class="row myrow align-items-center">
								<div class="col-12 about_links align-self-center">
									<span>ПОДЕЛИТЬСЯ:</span>
									<a href="#"><img src="css/images/whatsapp.png" alt="" width="26px"></a>
									<a href="#"><img src="css/images/viber.jpg" alt="" width="26px"></a>
									<a href="#"><img src="css/images/telegram.png" alt="" width="26px"></a>
									<a href="#"><img src="css/images/vk.png" alt="" width="26px"></a>
									<a href="#"><img src="css/images/instagram.jpg" alt="" width="26px"></a>
									<a href="#"><img src="css/images/facebook.png" alt="" width="26px"></a>
								</div>	
							</div>
						</div>
						<!--/aboutscreen-->

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