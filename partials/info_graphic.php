<?php 
$lang = '';
if($_SERVER['REQUEST_URI'] === '/volt/ru') {
	$lang = 'ru';
}
elseif($_SERVER['REQUEST_URI'] === '/volt/en') {
	$lang = 'en';
}
else {
	$lang = 'et';
}
?>
<?php 
$data = array(
	'et' => [
			'Tööd valmistatakse vastavalt reeglitele ja dokumentatsioonile',
			'Spetsialistide poolt tehtud tööd teenivad Teile usaldusväärselt ning pikka aega',
			'Meie spetsialistide kõrge kvalifikatsioon võimaldab teostada erinevate raskustasemete töid.',
			'Meie spetsalistid töötavad Teile mugavaimal ajal',
			'Garantii tehtud töödele alates 2 aastast',
			'Tasuta spetsialisti kutsung hindamaks raskeid töid'
		],
		'ru' => [
			'Работы осуществляются в соответствии с правилами и документации',
			'Работы проделанная нашим специалистом прослужит вам долгое время',
			'Высокая квалификация наших специалистов позволяет осуществлять работу разного уровня сложности',
			'Наши специалисты работают в удобное вам время',
			'Гарантия на проделанные работы начиная с 2 лет',
			'Бесплатный вызов специалиста для оценки сложных работ'
		],
		'en' => [
			'Work is carried out in accordance with rules and allowance',
			'Work that\'s done by our employee will last you long',
			'Employees high qualification allows to carry out any complexity work',
			'Our experts will work at convenient time for you',
			'Warranty from 2 years for our services',
			'Free visit for evaluation complex works'
		]
);
$features = array(
	'et' => [
		'Kvaliteet',
		'Turvalisus',
		'Kogemus',
		'Mugav aeg',
		'Garantii',
		'Head pakkumised'
	],
	'en' => [
		'Quality',
		'Security',
		'Experience',
		'Convenient time',
		'Warranty',
		'Good offers'
	],
	'ru' => [
		'Качество',
		'Безопасность',
		'Опыт',
		'Удобное время',
		'Гарантия',
		'Хорошие предложения'
	]
);
 ?>
<div class="info-graphic">
	<div>
		<img src="img/kvaliteet_icon.png" alt="Kvaliteet">
		<br><small><?php echo $features[$lang][0]; ?></small>
		<span>
			<?php echo $data[$lang][0]; ?>
		</span>
	</div>
	<div>
		<img src="img/turvalisus_icon.png" alt="Turvalisus">
		<br><small><?php echo $features[$lang][1]; ?></small>
		<span>
			<?php echo $data[$lang][1]; ?>
		</span>
	</div>
	<div>
		<img src="img/kogemus_icon.png" alt="Kogemus">
		<br><small><?php echo $features[$lang][2]; ?></small>
		<span>
			<?php echo $data[$lang][2]; ?>
		</span>
	</div>
	<div>
		<img src="img/mugavaeg_icon.png" alt="Mugav aeg">
		<br><small><?php echo $features[$lang][3]; ?></small>
		<span>
			<?php echo $data[$lang][3]; ?>
		</span>
	</div>
	<div>
		<img src="img/garantii_icon.png" alt="Garantii">
		<br><small><?php echo $features[$lang][4]; ?></small>
		<span>
			<?php echo $data[$lang][4]; ?>
		</span>
	</div>
	<div>
		<img src="img/head_pakkumised_icon.png" alt="Head pakkumised">
		<br><small><?php echo $features[$lang][5]; ?></small>
		<span>
			<?php echo $data[$lang][5]; ?>
		</span>
	</div>
</div>
				<!-- info graphic end -->