<?php

$server = "localhost:3307";
$username = "root";
$password = "";
$db_name = "logindb";

$conn = mysqli_connect($server, $username, $password, $db_name);

if (!$conn) {
	echo "Connection Failed!";
	exit();
}