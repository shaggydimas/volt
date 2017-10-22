<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<?php if( !(isset($_GET['desktop']))) { ?>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php } ?>
	<title>VoltPartner</title>
	<link rel="icon" href="img/favicon.png">
	<?php include 'partials/ga.php' ?>
	<link rel="stylesheet" href="css/reset.css">
	<link rel="stylesheet" href="css/fonts.css">
	<link rel="stylesheet" href="css/minified.css?v=<?php echo rand(); ?>">
	<link rel="stylesheet" href="css/owl.css">
</head>

<body>
	<a href="#" class="burger-btn"><span></span></a>
	<div class="mobile-menu">
		<ul>
			<li><a href="#" data-scroll="#about">О НАС</a></li>
			<li><a href="#" data-scroll="#services">УСЛУГИ</a></li>
			<li><a href="#">РАБОТЫ</a></li>
			<li><a href="#" data-scroll="#contact">КОНТАКТ</a></li>
		</ul>
	</div>
	<header class="main-nav">
		<nav class="clearfix">
			<div class="logo">
				<a href="/">
					<img src="img/logo.svg" alt="VoltPartner">
				</a>
				<?php include 'partials/nav_langs.php' ?>
			</div>
			<ul>
				<li><a href="#" data-scroll="#about">О НАС</a></li>
				<li class="dropdown-toggle">
					<a href="#" data-scroll="#services">УСЛУГИ</a>
					<ul class="dropdown">
						<li><a href="#" data-scroll="#services" data-item="0">Электротехнические работы</a></li>
						<li><a href="#" data-scroll="#services" data-item="1">Система видеонаблюдения</a></li>
						<li><a href="#" data-scroll="#services" data-item="2">Контроль доступа</a></li>
						<li><a href="#" data-scroll="#services" data-item="3">Сигнализация</a></li>
						<li><a href="#" data-scroll="#services" data-item="4">Проектирование</a></li>
						<li><a href="#" data-scroll="#services" data-item="5">Система умный дом</a></li>
					</ul>
				</li>
				<li><a href="#">РАБОТЫ</a></li>
				<li><a href="#" data-scroll="#contact">КОНТАКТ</a></li>
			</ul>
			<?php include 'partials/social_headers.php' ?>
		</nav>
	</header>
	<section class="volt--top mh100">
		<div class="video-wrapper">
			<video id="video" src="video_tln.mp4" autoplay loop></video>
		</div>
		<div class="above-video">
			<h1>Надёжные системы<br>вместе с <span>VoltPartner</span></h1>
		</div>
		<a href="#" data-scroll="#about" class="scroll-bottom">
			<img src="img/arrow_down.png" alt="">
		</a>
	</section>
	<section class="volt--about" id="about">
		<div class="container">
			<div class="clearfix">
				<div class="wide-column left">
					<h2>КТО МЫ ТАКИЕ?</h2>
					<p class="sub-heading">Чем мы занимаемся?</p>
					<p class="white-color">
						Компания VoltPartner – команда опытных специалистов, выполняющих электромонтажные работы
						на территории Таллинна, и всей Эстонии. Мы прикладываем немало усилий и используем
						новейшие технологии, чтобы облегчить вашу жизнь, сделав её проще, удобнее и безопаснее.
						Наши профессионалы – это высококвалифицированные инженеры-электрики, за плечами которых
						большое количество выполненных проектов.
					</p>
					<!-- <img src="img/cable.svg" class="cable" alt="cable"> -->
				</div>
				<div class="aside-column right">
					<p class="white-color">
						Благодаря многолетнему опыту и наличию всех необходимых инструментов и оборудования
						специалисты компании VoltPartner берутся за проекты любой сложности, выполняя их на 100 %!
						Мы сделаем работу даже тогда, когда другие электрики вам отказали. Мы решаем поставленные
						перед нами задачи с максимальной ответственностью, соблюдая требования действующих
						нормативных документов.
					</p>
				</div>
			</div>
			<div class="full-column clear-both">
				<?php include 'partials/info_graphic.php'; ?>
			</div>
		</div>
	</section>
	<?php include 'partials/services_ru.php' ?>
	<section class="volt--contact mh100" id="contact">
		<div class="container mt-15 clearfix">
				<img width="220px" src="img/logo.svg" class="left" alt="VoltPartner">
				<div class="form right">
					<div id="response"></div>
					<form action="mail.php" method="POST" id="email-form">
						<p class="white-color"><b style="font-size: 23px;">Свяжитесь с нами</b></p> <br><br>
						<input type="email" name="email" placeholder="Эл. почта"><br>
						<input type="text" name="name" placeholder="Имя"><br>
						<textarea name="text" id="" cols="30" rows="10" placeholder="Сообщение"></textarea><br>
						<input type="submit" value="Отправить">
						<img src="img/loading.gif" alt="" class="form-loader">
					</form>
				</div>
		</div>
	</section>
	<?php include 'footer.php'; ?>
	<?php include 'partials/scripts.php'; ?>
</body>
</html>