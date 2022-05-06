<?php


$server ="sql302.epizy.com";
$username ="epiz_31635826";
$password ="GFKDpdPtTiH";
$dbname ="epiz_31635826_obd";


$conn = mysqli_connect($server, $username, $password, $dbname);

if (!$conn) {
	die("Connection Failed:".mysqli_connect_error());
}

?>