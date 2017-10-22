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
			<li><a href="#" data-scroll="#about">ABOUT US</a></li>
			<li><a href="#" data-scroll="#services">SERVICES</a></li>
			<li><a href="#">WORKS</a></li>
			<li><a href="#" data-scroll="#contact">CONTACT</a></li>
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
				<li><a href="#" data-scroll="#about">ABOUT US</a></li>
				<li class="dropdown-toggle">
					<a href="#" data-scroll="#services">SERVICES</a>
					<ul class="dropdown">
						<li><a href="#" data-scroll="#services" data-item="0">Electrical works</a></li>
						<li><a href="#" data-scroll="#services" data-item="1">CCTV video surveillance</a></li>
						<li><a href="#" data-scroll="#services" data-item="2">Access control</a></li>
						<li><a href="#" data-scroll="#services" data-item="3">Alarms</a></li>
						<li><a href="#" data-scroll="#services" data-item="4">Design</a></li>
						<li><a href="#" data-scroll="#services" data-item="5">Smart house systems</a></li>
					</ul>
				</li>
				<li><a href="#">WORKS</a></li>
				<li><a href="#" data-scroll="#contact">CONTACT</a></li>
			</ul>
			<?php include 'partials/social_headers.php' ?>
		</nav>
	</header>
	<section class="volt--top mh100">
		<div class="video-wrapper">
			<video id="video" src="video_tln.mp4" autoplay loop></video>
		</div>
		<div class="above-video">
			<h1>Reliable Electrical<br>Systems with <span>VoltPartner</span></h1>
		</div>
		<a href="#" data-scroll="#about" class="scroll-bottom">
			<img src="img/arrow_down.png" alt="">
		</a>
	</section>
	<section class="volt--about" id="about">
		<div class="container">
			<div class="clearfix">
				<div class="wide-column left">
					<h2>WHO WE ARE?</h2>
					<p class="sub-heading">WHAT ARE WE DOING?</p>
					<p class="white-color">
						&quot;VoltPartner OU&quot; provides a full range of electrical installation works in Tallinn and Estonia. The range of
						services includes: design works, wiring, video surveillance, access control, alarm and ‘smart home’ systems for
						residential buildings, apartments, as well as industrial premises and offices.
						Our goal is to make your life more convenient and safer, thanks to our experience and latest technologies.
					</p>
					<!-- <img src="img/cable.svg" class="cable" alt="cable"> -->
				</div>
				<div class="aside-column right">
					<p class="white-color">
						VoltPartner is actively developing in electrical engineering field. We professionally and qualitatively carry out
						projects, as our work is a guarantee for your safety. All electrical work carried out using the most modern
						solutions and in accordance with current regulation document requirements.
						Work is carried out by highly professional electrical engineers with more than ten years experience. Therefore,
						we can guarantee that works installed by our specialists will serve you reliably for a long time.
					</p>
				</div>
			</div>
			<div class="full-column clear-both">
				<?php include 'partials/info_graphic.php'; ?>
			</div>
		</div>
	</section>
	<?php include 'partials/services_en.php' ?>
	<section class="volt--contact mh100" id="contact">
		<div class="container mt-15 clearfix">
				<img width="220px" src="img/logo.svg" class="left" alt="VoltPartner">
				<div class="form right">
					<div id="response"></div>
					<form action="mail.php" method="POST" id="email-form">
						<p class="white-color"><b style="font-size: 23px;">Contact us</b></p> <br><br>
						<input type="email" name="email" placeholder="Email"><br>
						<input type="text" name="name" placeholder="Name"><br>
						<textarea name="text" id="" cols="30" rows="10" placeholder="Message"></textarea><br>
						<input type="submit" value="Send">
						<img src="img/loading.gif" alt="" class="form-loader">
					</form>
				</div>
		</div>
	</section>
	<?php include 'footer.php'; ?>
	<?php include 'partials/scripts.php'; ?>
</body>
</html>