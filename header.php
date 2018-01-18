<?php 
header('Content-Type: text/html; charset=utf-8');
$locale = '';
$uri = explode('/', $_SERVER['REQUEST_URI']);
if($uri[2] === 'ru') {
	$locale = 'ru';
}
elseif($uri[2] === 'en') {
	$locale = 'en';
}
else {
	$locale = 'et';
}
include 'get_data.php';
?>
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
<style>
	.showMoreBtn {
		text-decoration: none !important;
	}
</style>