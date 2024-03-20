<?php
session_start();
include "connection.php";

if (isset($_POST['email']) && isset($_POST['password']) && isset($_POST['acc_type'])) {

	function test_input($data) {
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}

	$email = test_input($_POST['email']);
	$password = test_input($_POST['password']);
	$acc_type = test_input($_POST['acc_type']);

	if (empty($email)) {
		header("Location: index.php?error=Email is Required");
	}else if (empty($password)) {
		header("Location: index.php?error=Password is Required");
	}else {

        $sql = "SELECT * FROM login_tbl WHERE email='$email' AND password='$password'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
			if ($row['password'] === $password && $row['acc_type'] == $acc_type) {
				$_SESSION['name'] = $row['name'];
				$_SESSION['id'] = $row['id'];
				$_SESSION['acc_type'] = $row['acc_type'];
				$_SESSION['email'] = $row['email'];
				header("Location: acc_type.php");
			}else {
				header("Location: index.php?error=Incorrect Credentials");
			}
        }else {
			header("Location: index.php?error=Incorrect Credentials");
        }
	}
}else {
	header("Location: index.php");
}