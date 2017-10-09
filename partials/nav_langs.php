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
<div class="langs">
	<a href="/ru" class="<?php echo $lang === 'ru' ? 'active' : '' ?>">RU</a>|<a href="/" class="<?php echo $lang === 'et' ? 'active' : '' ?>">EST</a>|<a href="/en" class="<?php echo $lang === 'en' ? 'active' : '' ?>">EN</a>
</div>