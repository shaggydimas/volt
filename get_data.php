<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbName = "volt";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbName);
mysqli_set_charset( $conn, 'utf8');
//mysql_set_charset('UTF8',$conn);
$sql = "SELECT * FROM description WHERE locale = '$locale'";
$result = mysqli_query($conn, $sql);

$row = mysqli_fetch_assoc($result);

?>