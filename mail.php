<?php 
	$from = $_POST['email'];
	$to = "info@voltpartner.ee";
	//$to = "dimastln1996@gmail.com";
	$name = $_POST['name'];
	$phone = $_POST['phone'];
	$msg = $_POST['text'];
	$params = [$from, $to, $name, $msg];

	function checkIfSet($stuff){
		for ($i = 0; $i < count($stuff); $i++){
			if((empty($stuff[$i])) ) {
				return false;
			}
		}
		return true;
	}
	if(checkIfSet($params)){
		mail(
			$to,
			'Volt Partner',
			'<b>Nimi:</b> '.$name."<br><br>".'<b>Sõnum:</b> '.$msg.'<br><br><b>Telefon: </b>'.$phone ,
			'From: '.$from."\r\n".'Content-Type: text/html; charset=ISO-8859-1');
		echo "<div class='success'>Your message has been successfuly sent.</div>";
	}
	else {
		echo "<div class='error'>Something went wrong, please fill in all the fields.</div>";
	}
?>