<?php
	if (!defined('DERUWORK')) {
		die('Доступ запрещен!');
	}
?>  
 
<link href="css/calc.min.css" rel="stylesheet" type="text/css">

<script src="js/libs/jquery-ui.js" type="text/javascript"></script>
<script src="js/libs/jquery.ui.touch-punch.min.js" type="text/javascript"></script>
<script src="js/libs/jquery.inputmask.js" type="text/javascript"></script>

<div class="container">
	<div class="title">Онлайн-калькулятор</div>
	<div class="title_more">
		Мы создали <span class="orange">специальный калькулятор</span>, чтобы вам было удобнее и быстрее понять предварительную стоимость создания сайта. После заполнения всех параметров и отправки, <span class="orange">мы свяжемся с вами в ближайшее время</span>.
	</div>
	<div class="title_more_low">
		Фактическая стоимость может оказаться как больше, так и меньше.<br>Это зависит от деталей и объема работ.
	</div>
	<div class="about">
		При нажатии на текст с пометкой <span class="about_sumbol">'✶'</span> вы можете получить подробную информацию о выборе услуги.
	</div>
	<div class="line"></div>
	<form class="form">
		<div class="row myrow ui_block">
			<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 mobile">
				<div class="slides">
					<div class="text slides_title">
						<span class="hover">Сколько будет экранов *</span>
						<div class="slides_info">
							Под словом "экран" подразумевается кол-во экранов настоящего монитора в ширину и длинну, на котором будет отображаться сайт<br><br>
						(Обычно используются размеры 1920х1080 px)
						</div>
					</div>
					<div class="slides_ui">
						<div class="size slides_min">1</div>
						<div id="polzunok-1"></div>
						<div class="size slides_max">50</div>
					</div>
					<div class="slides_count">
						<div class="countblock">
							Кол-во экранов: <input type="text" name="slides" id="amount1" value="1">
						</div>
						<div class="hidenblock"></div>
					</div>
				</div>
			</div>
			<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 mobile">
				<div class="screens">
					<div class="text screens_title">
						<span class="hover">Сколько будет страниц *</span>
						<div class="screens_info">
							Сайт состоит как минимум из 1 страницы (Landing Page), бывают многостраничные сайты (Интернет-магазины, корпоративные проекты)
						</div>
					</div>
					<div class="screens_ui">
						<div class="size slides_min">1</div>
						<div id="polzunok-2"></div>
						<div class="size slides_max">25</div>
					</div>
					<div class="screens_count">
						<div class="countblock">
							Кол-во страниц: <input type="text" name="screens" id="amount2" value="1">
						</div>
						<div class="hidenblock"></div>
					</div>
				</div>
			</div>
		</div>
		<div class="row myrow select_block">
			<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 mobile">
				<div class="type">
					<div class="text type_title">
						<span class="hover">Тип сайта *</span>
						<div class="type_info">
							От типа сайта зачастую зависит направление компании<br><br>
							(Landing Page - информация об услугах, рекламная сфера<br><br>
							Интернет-магазин - продажа услуг<br><br>Корпоративный сайт - управление компанией, контроль, мониторинг)
						</div>
					</div>
					<div class="type_text">Выберите необходимый тип сайта</div>
					<div class="type_select select">
						<div><input id="radio-1" type="radio" name="select" value="3500" checked> <label for="radio-1">Landing Page</label></div>
						<div><input id="radio-2" type="radio" name="select" value="8500"> <label for="radio-2">Бизнес сайт</label></div>
						<div><input id="radio-3" type="radio" name="select" value="14000"> <label for="radio-3">Интернет-магазин</label></div>
						<div><input id="radio-4" type="radio" name="select" value="24500"> <label for="radio-4">Корпоративный сайт</label></div>
					</div>
				</div>
			</div>
			<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 mobile">
				<div class="engine">
					<div class="text engine_title">
						<span class="hover">"Начинка" сайта *</span>
						<div class="engine_info">
							Под словом "начинка" подразумевается функционал сайта.<br>
							Слово "CMS" расшифровывается как Content Management System, то есть некое подобие движка, который уже имеет весь необходимый функционал.<br><br>
							(Может быть обычная информационная страница, а может полноценный проект с регистрацией, авторизацией, формами, мониторингом и другими модулями)
						</div>
					</div>
					<div class="engine_text">Выберите необходимую структуру проекта</div>
					<div class="engine_select select">
						<div><input id="radio-5" type="radio" name="select2" value="0" checked> <label for="radio-5">Без CMS</label></div>
						<div><input id="radio-6" type="radio" name="select2" value="2500"> <label for="radio-6">Популярные CMS</label></div>
						<div><input id="radio-7" type="radio" name="select2" value="15000"> <label for="radio-7">Самописная CMS</label></div>
					</div>
				</div>
			</div>
		</div>
		<div class="row myrow">
			<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 mobile">
				<div class="options">
					<div class="text options_title">
						<span class="hover">Дополнительные опции *</span>:
						<div class="options_info">
							Мы предоставляем доп. опции для разработки сайтов:<br><br>
							- Полная или частичная адаптация под любые разрешения<br><br>
							- Разработка уникальных модулей (Форма обратной связи с отправкой на почту, интерактивный калькулятор, слайдер, вывод информации из базы данных и т.д.)<br><br>
							- Ваши пожелания (Дизайн на свое усмотрение, анимации, контент сайта и т.д.)
						</div>
					</div>
					<div class="options_select">
						<div><input id="check-1" type="checkbox" name="select3" value="5000"> <label for="check-1">Адаптация сайта</label></div>
						<div><input id="check-2" type="checkbox" name="select4" value="2500"> <label for="check-2">Самописные модули</label></div>
						<div><input id="check-3" type="checkbox" name="select5" value="0"> <label for="check-3">Другое</label></div>
					</div>
					<div class="options_textblock">
						<div class="options_text_title">
							Бонус при заказе сайта:
						</div>
						<div class="options_text">
							+ Аналитика внешнего вида сайта<br>
							+ Добавление кастомного прелоадера<br>
							+ Настройка почтовых скриптов
						</div>
					</div>
				</div>
			</div>
			<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 mobile">
				<div class="inputblock">
					<div class="text input_text">Имя</div>
					<div class="form_input">
						<input type="text" name="name" placeholder="Ваше имя" required>
					</div>
					<div class="text input_text">Телефон</div>
					<div class="form_input">
						<input class="input_mask_number" data-inputmask-clearmaskonlostfocus="true" type="text" name="phone" placeholder="Ваш телефон" required>
					</div>
					<div class="text input_text text_comment">Комментарий</div>
					<div class="form_input">
						<input type="text" name="comment" placeholder="Комментарий (необязательно)">
					</div>
				</div>
			</div>
		</div>
		<div class="row myrow final_block">
			<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 mobile">
				<div class="priceblock">
					<div class="text price_title">Предварительная стоимость:</div>
					<div class="price_count">
						<input type="text" id="amount3" name="total"> руб.
					</div>
					<div class="hidenblock"></div>
				</div>
			</div>
			<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 mobile">
				<div class="acceptblock">
					<div class="acceptbutton">
						<input class="submit" type="submit" value="Запросить расчет">
					</div>
				</div>
			</div>
		</div>
	</form>
	<div class="policy">
		Нажимая кнопку "Запросить расчет" вы соглашаетесь с <a href="#">политикой конфиденциальности</a>
	</div>
</div>

<script type="text/javascript" src="modules/calc/js/script.js"></script>