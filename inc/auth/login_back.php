<?php
session_start();

	require '../db.php'; //LOGIN PAGE DONE

	$user_email = $_POST['user_email'];
	$user_password = md5($_POST['user_password']);

	$login_query = "SELECT * FROM users WHERE user_email = '$user_email' AND user_password = '$user_password'";
	$login_data_from_db = mysqli_query($db_connect,$login_query);

	if ($login_data_from_db->num_rows == 1) {
		$_SESSION['login'] = "Login Successful";
		$_SESSION['user_email'] = $user_email;
		header('location: /practice/dashbord.php');
	}
	else {
		$_SESSION['error'] = "Something is wrong";
		header('location: login.php');
	}
?>