<?php 
//set vars
$servername = "localhost";
$username = "root";
$password = "";
$dbName = "volt";
//$locale = $_POST['lang'];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbName);
mysqli_set_charset( $conn, 'utf8');
$data = $_POST['data'];
$table_name = $_POST['table'];
$lang = $_POST['lang'];
//print_r($data['kvaliteet']);

function updateData($tb_name) {
	global $data;
	global $conn;
	global $lang;
	if($tb_name === 'description') {
		$data = json_decode($data, true);
		$main_text = mysql_real_escape_string($data['main_text']);
		$side_text = mysql_real_escape_string($data['side_text']);
		$sql = "UPDATE description SET main_text = '$main_text', side_text = '$side_text' WHERE locale = '$lang'";

		if (mysqli_query($conn, $sql)) {
			echo "New record created successfully";
		} else {
			echo "Error: " . $sql . mysqli_error($conn);
		}
	}
	elseif ($tb_name === 'bubbles') {
		$sql = "UPDATE bubbles SET text = '$data' WHERE locale = '$lang'";
		if (mysqli_query($conn, $sql)) {
			echo "New record created successfully";
		} else {
			echo "Error: " . $sql . mysqli_error($conn);
		}
	}
	elseif($tb_name === 'services') {
		$data = json_decode($data, true);
		$sql = "";
		foreach ($data as &$value) {
			$cap = mysql_real_escape_string($value['caption']);
			$desc = mysql_real_escape_string($value['description']);
			$id = mysql_real_escape_string($value['id']);
			$sql = "UPDATE spec_items SET caption = '$cap', description='$desc' WHERE id='$id';";
			if (mysqli_query($conn, $sql)) {
				echo "New record created successfully";
			} else {
				echo "Error: " . $sql . mysqli_error($conn);
			}
		}
	}
}

updateData($table_name);