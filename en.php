<?php include 'header.php'; ?>
<body>
	<a href="#" class="burger-btn"><span></span></a>
	<div class="mobile-menu">
		<ul>
			<li><a href="#" data-scroll="#about">ABOUT US</a></li>
			<li><a href="#" data-scroll="#services" data-item="0">ELECTRICAL WORKS</a></li>
			<li><a href="#" data-scroll="#services" data-item="1">CCTV video surveillance</a></li>
			<li><a href="#" data-scroll="#services" data-item="2">Access control</a></li>
			<li><a href="#" data-scroll="#services" data-item="2">Alarms</a></li>
			<li><a href="#" data-scroll="#services" data-item="4">Smart house systems</a></li>
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
				<li><a href="#" data-scroll="#services" data-item="0">ELECTRICAL WORKS</a></li>
				<li class="dropdown-toggle">
					<a href="#" data-scroll="#services">security systems</a>
					<ul class="dropdown">
						<li><a href="#" data-scroll="#services" data-item="1">CCTV video surveillance</a></li>
						<li><a href="#" data-scroll="#services" data-item="2">Access control</a></li>
						<li><a href="#" data-scroll="#services" data-item="3">Alarms</a></li>
						<li><a href="#" data-scroll="#services" data-item="5">Smart house systems</a></li>
					</ul>
				</li>
				<li><a href="#" data-scroll="#services" data-item="3">Design</a></li>
				<li class="dropdown-toggle"><a href="#">WORKS</a>
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
				<li><a href="#" data-scroll="#contact">CONTACT</a></li>
			</ul>
			<?php include 'partials/social_headers.php' ?>
		</nav>
	</header>
	<section class="volt--top mh100">
		<div class="video-wrapper">
			<video id="video" src="500p.mp4" autoplay loop></video>
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
						<?php echo $row["main_text"]; ?>
					</p>
					<!-- <img src="img/cable.svg" class="cable" alt="cable"> -->
				</div>
				<div class="aside-column right">
					<p class="white-color">
						<?php echo $row["side_text"]; ?>
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
						<p class="white-color"><b style="font-size: 23px;">Contact us for free consultation</b></p> <br><br>
						<input type="email" name="email" placeholder="Email"><br>
						<input type="text" name="name" placeholder="Name"><br>
						<input type="text" name="phone" placeholder="Phone number"><br>
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