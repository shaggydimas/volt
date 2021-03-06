<?php
include 'modules/filter.php';
$servername = "localhost";
$username = "root";
$password = "";
$dbName = "volt";

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
while($r = mysqli_fetch_assoc($spec_items_results)) {
    $spec_items_rows[] = $r;
    $spec_ids[] = $r['id'];
}
while($r = mysqli_fetch_assoc($services_results)) {
		global $spec_items_rows;
		$filtered = array_filter($spec_items_rows, array(new LowerThanFilter($r['id']), 'matchingItems'));
		$r['items'] = $filtered;
    $services_rows[] = $r;
}

$row = mysqli_fetch_assoc($desc_results);
$row2 = mysqli_fetch_assoc($bubble_results);

?>