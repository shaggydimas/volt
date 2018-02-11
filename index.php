<?php include 'header.php'; ?>
<body>
	<div style="top: 200px;position: relative;z-index: 2344;padding: 25px; background: #fff;">
		<?php
		// $pw = hash_hmac('sha512', 'dmitri55581136', 'cfergwgw45wc6w75');
		// echo $pw;
		print_r($services_rows);
		 ?>
	</div>
	<a href="#" class="burger-btn"><span></span></a>
	<div class="mobile-menu">
		<ul>
			<li><a href="#" data-scroll="#about">MEIST</a></li>
			<li><a href="#" data-scroll="#services" data-item="0">ELEKTRITÖÖD</a></li>
			<li><a href="#" data-scroll="#services" data-item="1">VIDEOVALVESÜSTEEMID</a></li>
			<li><a href="#" data-scroll="#services" data-item="2">JUURDEPÄÄASU KONTROLL</a></li>
			<li><a href="#" data-scroll="#services" data-item="3">SIGNALISATSIOON</a></li>
			<li><a href="#" data-scroll="#services" data-item="5">TARK MAJA SÜSTEEMID</a></li>
			<li><a href="#" data-scroll="#contact">KONTAKT</a></li>
		</ul>
	</div>
	<header class="main-nav">
		<nav class="clearfix">
			<div class="logo">
				<a href="/">
					<img src="img/logo.svg" alt="VoltPartner">
				</a>
				<?php include 'partials/nav_langs.php'; ?>
			</div>
			<ul>
				<li><a href="#" data-scroll="#about">MEIST</a></li>
				<li>
					<a href="#" data-scroll="#services" data-item="0">
						Elektritööd
					</a>
				</li>
				<li class="dropdown-toggle">
					<a href="#" data-scroll="#services">
						Nõrkvoolutood
					</a>
					<ul class="dropdown">
						<li><a href="#" data-scroll="#services" data-item="1">Videovalvesüsteemid</a></li>
						<li><a href="#" data-scroll="#services" data-item="2">Juurdepääsu kontroll</a></li>
						<li><a href="#" data-scroll="#services" data-item="3">Signalisatsioon</a></li>
						<li><a href="#" data-scroll="#services" data-item="5">Tark maja süsteemid</a></li>
					</ul>
				</li>
				<li>
					<a href="#services" data-scroll="#services" data-item="4">Projekteerimine</a>
				</li>
				<li class="dropdown-toggle">
					<a href="#">TEHTUD TÖÖD</a>
					<ul class="dropdown">
						<li>
							<a href="https://www.instagram.com/voltpartner/?hl=ru" target="_blank">INSTAGRAM<span><img style="vertical-align: top; margin-left: 5px;" src="img/ig-icon.png" alt="Instagram" width="15px"></span>
							</a>
						</li>
						<li>
							<a href="https://www.facebook.com/Voltpartner-O%C3%9C-125441428113099/" target="_blank">FACEBOOK<span><img style="vertical-align: top; margin-left: 5px;" src="img/fb-icon.png" alt="Instagram" width="15px"></span></a>
						</li>
					</ul>
				</li>
				<li><a href="#" data-scroll="#contact">KONTAKT</a></li>
			</ul>
			<?php include 'partials/social_headers.php' ?>
		</nav>
	</header>
	<section class="volt--top mh100">
		<div class="video-wrapper">
			<video id="video" src="500p.mp4" autoplay loop></video>
		</div>
		<div class="above-video">
			<h1>Usaldusväärsed<br><span>elektri</span>süsteemid<br>VoltPartneriga.</h1>
		</div>
		<a href="#" data-scroll="#about" class="scroll-bottom">
			<img src="img/arrow_down.png" alt="">
		</a>
	</section>
	<section class="volt--about" id="about">
		<div class="container">
			<div class="clearfix">
				<div class="wide-column left">
					<h2>KES ME OLEME?</h2>
					<p class="sub-heading">Mida me teeme?</p>
					<p class="white-color">
						<?php echo htmlspecialchars($row["main_text"], ENT_QUOTES, 'UTF-8'); ?>
					</p>
					<!-- <img src="img/cable.svg" class="cable" alt="cable"> -->
				</div>
				<div class="aside-column right">
					<p class="white-color">
						<?php echo htmlspecialchars($row["side_text"], ENT_QUOTES, 'UTF-8'); ?>
					</p>
				</div>
			</div>
			<div class="full-column clear-both">
				<?php include 'partials/info_graphic.php' ?>
			</div>
		</div>
	</section>
	<?php include 'partials/services_et.php' ?>
	<section class="volt--contact mh100" id="contact">
		<div class="container mt-15 clearfix">
				<img width="240px" src="img/logo.svg" class="left" alt="VoltPartner">
				<div class="form right">
					<div id="response"></div>
					<form action="mail.php" method="POST" id="email-form">
						<p class="white-color"><b style="font-size: 23px;">Võta meiega ühendust, et saada tasuta konsultatsioon</b></p> <br><br>
						<input type="email" name="email" placeholder="email"><br>
						<input type="text" name="phone" placeholder="Tel. number"><br>
						<input type="text" name="name" placeholder="Nimi"><br>
						<textarea name="text" id="" cols="30" rows="10" placeholder="Sõnum"></textarea><br>
						<input type="submit" value="SAADA">
						<img src="img/loading.gif" alt="" class="form-loader">
					</form>
				</div>
		</div>
	</section>
	<?php include 'footer.php'; ?>
	<?php include 'partials/scripts.php'; ?>
</body>
</html>