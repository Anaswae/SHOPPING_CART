<?php 
$servername = 'localhost';
$username = 'your_username';
$password = 'your_password';
$db = 'your_databasename';
// Create connection
$con = mysqli_connect($servername, $username, $password, $db);
 // Check connection
if (!$con) {
	die ("connection failed.". mysqli_connect_error()); //close connection
}
 ?>