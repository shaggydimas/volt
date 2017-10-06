<?php
$items = array(
	'CCTV video surveillance' => [
		'cameras.jpg',
		[
			'Video surveillance system Installation',
			'Installation of CCTV cameras',
			'DVRs',
			'Ready-made video surveillance kits',
			'Wireless video surveillance',
			'Street video surveillance',
			'IP video surveillance',
			'AHD video surveillance',
			'Hidden cameras',
			'Video Surveillance Online'
		],
		'Access control' => [
		'juurdepaasukontroll.jpg',
		['Electromagnetic locks',
			'Ready-made kits',
			'Code and with a card',
			'video intercom',
			'fingerprint',
			'working hours account',
			'With remote control',
			'Doorphone installation',
			'Installation Video intercom',
			'Doorphone kits',
			'Intercom with video surveillance',
			'Wireless video intercom',
			'Doorphone service',
			'doorphones repair',
			'doorphones access',
			'Biometric panels',
			'Code locks',
			'Personnel time recording',
			'Automatic gates',
			'Gate automation']
		]
		],
		'Alarms' => [
			'signalisatsioon.jpg',
			[	'Intruder alarm Installation',
				'Sirens and code keypad',
				'Motion Sensor',
				'Magnetic Door Sensor',
				'Remote control panel',
				'Fire alarm',
				'Security alarm']
		],
		'Design' => [
			'projekteerimine.jpg',
			[		'Electrical system design',
				'Low voltage system design']
		]
);
?>
<section class="volt--services mh100" id="services">
		<div class="container">
			<h3><b>SERVIC</b><span><b>ES</b></span></h3>
		</div>
		<div class="service-boxes container" style="margin-top: 100px;">
			<div class="control-left">
				<img src="img/arrow_left.png" alt="">
			</div>
			<div class="control-right">
				<img src="img/arrow_right.png" alt="">
			</div>
			<div class="owl-carousel" id="owl">
			<!-- owl end -->
			<div class="accordion" data-img="services.jpg">
				<header>Electrical works</header>
				<div class="item">
					<p>Installation and circuit breakers replacement</p>
					<div>
						Like other technical devices, they often fail. The reasons for this may be work at the
						maximum limit in general and systematic thermal protection triggering. We will eliminate the
						cause of such consequences.
					</div>
					<span class="hasText">
						+
					</span>
				</div>

				<div class="item">
					<p>Rewiring</p>
					<div>
						Wrong wiring operation, when its rated power exceeded, leads to significant life service reduction, and may
						cause a short circuit. We avaluate your needs and advise the most economical and best option.
					</div>
					<span class="hasText">+</span>
				</div>

				<div class="item">
					<p>Grounding</p>
					<div>
						Important to choose right grounding method, as it is necessary for electrical safety and
						person protection from electric shock.
					</div>
					<span class="hasText">+</span>
				</div>

				<div class="item">
					<p>Assembly and electrical board installation</p>
					<div>
						This device vested with vital functions, such as:
						<ul>
							<li>energy control;</li>
							<li>consumption and circuit management;</li>
							<li>selective trigger protection</li>
						</ul>
						We will choose right case for you. Analyse how many circuits, as not to overload network and operate functions
						properly.
					</div>
					<span class="hasText">+</span>
				</div>

				<div class="item">
					<p>Electrical wiring Installation</p>
					<div>
						Do plan lay out, and how it will change. Where will be sockets installed, switches, chandeliers, sconces, junction
						boxes and ect. Also where powerful appliances will be installed. We take into account safe usege and
						comfortable living.<br><br>
						Properly perform open installation, hided and combined wiring.
					</div>
					<span class="hasText">+</span>
				</div>

				<div class="item">
					<p>Cabling</p>
					<div>
						We choose in accordance with electrical installation rules. All categories of premises also trenches, trays and so
						on.
					</div>
					<span class="hasText">+</span>
				</div>

				<div class="item">
					<p>Niches Installation, switches and sockets replacement</p>
					<div>
						They are not only an important component of comfortable living, but also an element of design which can
						emphasize owner individuality. <br><br>
						Their location depends on daily life usage convenience and safety, especially for children.
					</div>
					<span class="hasText">+</span>
				</div>

				<div class="item">
					<p>Sleeves lining for supply cables</p>
				</div>

				<div class="item">
					<p>Thunder conductor</p>
					<div>
						Lightning consequences into the house can be very serious and unpredictable. We choose the place where
						lightning conductor will be built, so you and your property will be safe.
					</div>
					<span class="hasText">+</span>
				</div>

				<div class="item">
					<p>Lighting systems Installation</p>
					<div>
						With numerous research, approved that errors in lighting organisation and selection necessary equipment can
						significantly reduce production quality.
						We help to choose high-quality lighting for effective staff productivity, to ensure personnel health, and the
						most comfortable conditions.
					</div>
					<span class="hasText">+</span>
				</div>

				<div class="item">
					<p>LED lighting Installation</p>
					<div>
						LED spotlights <br>
						LED ceiling <br>
						LED modules <br>
						interior lighting <br>
						building LED lighting
					</div>
					<span class="hasText">+</span>
				</div>

				<div class="item">
					<p>Home appliances Installation and connection</p>
					<div>
						<ul>
							<li>Electric stove Installation and connection</li>
							<li>Ovens built-in connection</li>
							<li>Washing machine Installation</li>
							<li>Dishwasher Installing</li>
							<li>Cooker hood connecting</li>
							<li>Electric water heater connection</li>
						</ul>
					</div>
					<span class="hasText">+</span>
				</div>

				<div class="item">
					<p>Warm floors Installation</p>
					<div>
						We choose right system for your room and heating type you prefer. Taking into account standards and financial
						possibilities.
					</div>
					<span class="hasText">+</span>
				</div>
			</div>
			<?php
				foreach($items as $heading => $arr) {
					echo '<div class="accordion" '.'data-img="'.$arr[0].'">';
					echo '<header>'.$heading.'</header>';
					for($x = 0; $x < count($arr[1]); $x++) {
						if(count($arr[1]) > 10) {
							if($x === 10){
								echo '<a href="javascript:void(0)" class="showMoreBtn">Näita kõik</a>';
								echo '<div class="hidden-items">';
								echo '<div class="item">';
								echo '<p>'.$arr[1][$x].'</p>';
								echo '</div>';
							}
							elseif($x === count($arr[1]) - 1){
								echo '<div class="item">';
								echo '<p>'.$arr[1][$x].'</p>';
								echo '</div></div>';	
							}
							else {
								echo '<div class="item">';
								echo '<p>'.$arr[1][$x].'</p>';
								echo '</div>';
							}
						}
						else {
							echo '<div class="item">';
							echo '<p>'.$arr[1][$x].'</p>';
							echo '</div>';
						}
					}
					echo '</div>';
				}
			?>
			</div>
		</div>
	</section>