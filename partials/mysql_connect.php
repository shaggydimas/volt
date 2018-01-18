<?php
//set vars
$servername = "localhost";
$username = "root";
$password = "";
$dbName = "volt";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbName);
mysqli_set_charset( $conn, 'utf8');
?>