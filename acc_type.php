<?php
session_start();
include "connection.php";

if ($_SESSION['acc_type'] == 'admin') {
	header("Location: admin.php");
}else if($_SESSION['acc_type'] == 'user'){
	header("Location: user.php");
}else {
	header("Location: login.php");
}