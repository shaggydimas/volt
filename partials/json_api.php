<?php
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
//description
$sql = ["SELECT * FROM description WHERE locale = $locale", "SELECT * FROM bubbles WHERE locale = $locale"];
$result = mysqli_query($conn, $sql[0]);
//bubbles
$result2 = mysqli_query($conn, $sql[1]);
while($r = mysqli_fetch_assoc($result)) {
    $rows[] = $r;
}
while($r = mysqli_fetch_assoc($result2)) {
    $rows2[] = $r;
}
$obj = array('description' => $rows,'bubbles' => $rows2);
print json_encode($obj, JSON_UNESCAPED_UNICODE);

?>