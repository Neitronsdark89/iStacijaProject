<?php
$servername = "localhost";
$username = "kristaps";
$password = "Ziema2021";
$db = "istacija_page";

$conn = new mysqli($servername, $username, $password, $db);

if (!$conn->connect_error) {
	//echo "Savienojums ir izveidots";
}
else {
	die("Savienojums neizdevās: " .$conn->connect_error);
}
?>