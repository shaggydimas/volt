<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<?php if( !(isset($_GET['desktop']))) { ?>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php } ?>
	<title>VoltPartner</title>
	<link rel="stylesheet" href="css/reset.css">
	<link rel="stylesheet" href="css/fonts.css">
	<link rel="stylesheet" href="css/style.css?v=<?php echo rand(); ?>">
	<link rel="stylesheet" href="css/owl.css">
</head>

<body>
	<div id="loader">
		      <div class="sk-circle">
        <div class="sk-circle1 sk-child"></div>
        <div class="sk-circle2 sk-child"></div>
        <div class="sk-circle3 sk-child"></div>
        <div class="sk-circle4 sk-child"></div>
        <div class="sk-circle5 sk-child"></div>
        <div class="sk-circle6 sk-child"></div>
        <div class="sk-circle7 sk-child"></div>
        <div class="sk-circle8 sk-child"></div>
        <div class="sk-circle9 sk-child"></div>
        <div class="sk-circle10 sk-child"></div>
        <div class="sk-circle11 sk-child"></div>
        <div class="sk-circle12 sk-child"></div>
      </div>
	</div>
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
					<img width="80px" src="img/logo.svg" alt="VoltPartner">
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
				<div class="info-graphic">
					<div>
						<img src="img/kvaliteet_icon.png" alt="Kvaliteet">
						<span>
							Work is carried out in accordance with rules and allowance
						</span>
					</div>
					<div>
						<img src="img/turvalisus_icon.png" alt="Turvalisus">
						<span>
							Work that's done by our employee will last you long
						</span>
					</div>
					<div>
						<img src="img/kogemus_icon.png" alt="Kogemus">
						<span>
							Employees high qualification allows to carry out any complexity work
						</span>
					</div>
					<div>
						<img src="img/mugavaeg_icon.png" alt="Mugav aeg">
						<span>
							Our experts will work at convenient time for you
						</span>
					</div>
					<div>
						<img src="img/garantii_icon.png" alt="Garantii">
						<span>
							Warranty from 2 years for our services
						</span>
					</div>
					<div>
						<img src="img/head_pakkumised_icon.png" alt="Head pakkumised">
						<span>
							Free visit for evaluation complex works
						</span>
					</div>
				</div>
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
						<input type="email" name="email" placeholder="Email"><br>
						<input type="text" name="name" placeholder="Name"><br>
						<textarea name="text" id="" cols="30" rows="10" placeholder="Message"></textarea><br>
						<input type="submit" value="Отправить">
						<img src="img/loading.gif" alt="" class="form-loader">
					</form>
				</div>
		</div>
	</section>
	<footer>
		<div class="container clearfix">
			<div class="left footer-logo">
				<img style="margin-right: 6px;" width="90px" src="img/logo.svg" class="" alt="VoltPartner">
				<span class="company" style="color: #fff; font-size: 11px;line-height: 1.3; display: inline-block;">
					Volt Partner OÜ<br>
					registrikood: 14232151<br>
					Pirita tee 124/12,<br>
					Tallinn 740129, Harjumaa
				</span>
			</div>
			<div class="right">
				<span class="left kontakt" style="color: #fff;">
					Email: voltpartner@info.ee<br>
					Tel: +372 6855 1324<br>
					Mob: +372 55 68 1314
				</span>
				<div class="social right">
					<a href="https://www.instagram.com/voltpartner/?hl=ru" target="_blank"><img src="img/insta.png" alt="Instagram"></a>
					<a href="https://www.facebook.com/Voltpartner-O%C3%9C-125441428113099/" target="_blank"><img src="img/fb.png" alt="Facebook"></a>
				</div>
				<div class="desktop-version">
					<a href="/?desktop=true" style="display: inline-block; color: #fff; margin-top: 20px;">Desktop version</a>
				</div>
			</div>
		</div>
	</footer>
	<script>
	var video = document.getElementById('video');
	var loader = document.getElementById('loader');
	var x = setInterval(function(){
		if ( video.readyState === 4 ) {
			loader.classList.add('hidden');
			clearInterval(x);
			console.log('hi')
		}
	}, 200);
	</script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="js/minified.js?v=1"></script>
	<script src="js/owl.js"></script>
	<script>
			$('.owl-carousel').owlCarousel({
			loop:false,
			margin:10,
			nav:false,
			responsive:{
				0:{
					items:1
				}
			},
			onDragged: function(event){
				var data = $('.owl-item.active').find('.accordion').attr('data-img');
				if(window.innerWidth < 700){
					data = 'mobile/'+data; 
				}
				$('.volt--services').css({
					'background':'url(img/'+data+')',
					'background-size':'cover',
					'background-repeat':'no-repeat',
					'background-position':'center top'
				});
			}
		});
	</script>
</body>
</html>