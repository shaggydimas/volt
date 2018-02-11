<?php
include 'modules/filter.php';
header('Content-type: application/json');
//set vars
$servername = "localhost";
$username = "root";
$password = "";
$dbName = "volt";
$locale = $_GET['lang'];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbName);
mysqli_set_charset( $conn, 'utf8');
// sql queries
$sql = [
	"SELECT * FROM description WHERE locale = '$locale'",
	"SELECT * FROM bubbles WHERE locale = '$locale'",
	"SELECT * FROM services WHERE locale = '$locale'",
	"SELECT * FROM spec_items WHERE locale = '$locale'"
];

//description
$desc_results = mysqli_query($conn, $sql[0]);
//bubbles
$bubble_results = mysqli_query($conn, $sql[1]);
//services
$services_results = mysqli_query($conn, $sql[2]);
//spec items
$spec_items_results = mysqli_query($conn, $sql[3]);

/******** WHILE LOOPS *********/

while($r = mysqli_fetch_assoc($desc_results)) {
    $desc_rows[] = $r;
}
while($r = mysqli_fetch_assoc($bubble_results)) {
    $bubble_rows[] = $r;
}
while($r = mysqli_fetch_assoc($spec_items_results)) {
    $spec_items_rows[] = $r;
    $spec_ids[] = $r['id'];
}
while($r = mysqli_fetch_assoc($services_results)) {
		global $spec_items_rows;
		$filtered = array_filter($spec_items_rows, array(new LowerThanFilter($r['id']), 'matchingItems'));
		$r['items'] = array_map("mapFunc", $filtered);
    $services_rows[] = $r;
}

//json object
$obj = array('description' => $desc_rows,'bubbles' => $bubble_rows, 'services' => $services_rows, 'spec_items' => $spec_items_rows);
//json output
print json_encode($obj, JSON_UNESCAPED_UNICODE);
//print_r($spec_items_rows);
?>