<?php 
$lang = '';
if($_SERVER['REQUEST_URI'] === '/ru') {
	$lang = 'ru';
}
elseif($_SERVER['REQUEST_URI'] === '/en') {
	$lang = 'en';
}
else {
	$lang = 'et';
}
?>
<?php 
$obj = json_decode($row2['text']);
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
			<?php echo $obj->{'kvaliteet'}; ?>
		</span>
	</div>
	<div>
		<img src="img/turvalisus_icon.png" alt="Turvalisus">
		<br><small><?php echo $features[$lang][1]; ?></small>
		<span>
			<?php echo $obj->{'turvalisus'}; ?>
		</span>
	</div>
	<div>
		<img src="img/kogemus_icon.png" alt="Kogemus">
		<br><small><?php echo $features[$lang][2]; ?></small>
		<span>
			<?php echo $obj->{'kogemus'}; ?>
		</span>
	</div>
	<div>
		<img src="img/mugavaeg_icon.png" alt="Mugav aeg">
		<br><small><?php echo $features[$lang][3]; ?></small>
		<span>
			<?php echo $obj->{'mugav_aeg'}; ?>
		</span>
	</div>
	<div>
		<img src="img/garantii_icon.png" alt="Garantii">
		<br><small><?php echo $features[$lang][4]; ?></small>
		<span>
			<?php echo $obj->{'garantii'}; ?>
		</span>
	</div>
	<div>
		<img src="img/head_pakkumised_icon.png" alt="Head pakkumised">
		<br><small><?php echo $features[$lang][5]; ?></small>
		<span>
			<?php echo $obj->{'head_pakkumised'}; ?>
		</span>
	</div>
</div>
				<!-- info graphic end -->