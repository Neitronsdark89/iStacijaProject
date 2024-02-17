<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'kristaps');
define('DB_PASSWORD', 'ziema2021');
define('DB_NAME', 'istacija_page');
 
/* Attempt to connect to MySQL database */
$mysqli = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($mysqli === false){
    die("Kļūda: Nevarēja izveidot savienojumu. " . $mysqli->connect_error);
}
?>