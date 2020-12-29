<?php
session_start();

	require '../db.php'; //LOGIN PAGE DONE


	if (empty($_POST['user_email'])) {
		echo 'Where is your email?';
	}
	else if(!filter_var($_POST['user_email'], FILTER_VALIDATE_EMAIL)){
		    echo 'Provide a valid email address';
	}
	else if (empty($_POST['user_password'])) {
		echo 'Where is your password?';
	}
	else if (empty($_POST['user_confirm_password'])) {
		echo 'Confirm your password!';
	}
	else {
		$user_email = $_POST['user_email'];
		$user_password = md5($_POST['user_password']);
		$user_confirm_password = md5($_POST['user_confirm_password']);

		if ($user_password == $user_confirm_password) {

			$check_query = "SELECT * FROM users WHERE user_email = '$user_email'";
		  $checking_query = mysqli_query($db_connect,$check_query);

		  if ($checking_query->num_rows == 1) {
		  	$_SESSION['used_email'] = "Used Email";
			header('location: register.php');
		  }
		  else {
		  	$insert_query = "INSERT INTO users (user_email, user_password, user_confirm_password) VALUES ('$user_email', '$user_password', '$user_confirm_password')";
				mysqli_query($db_connect,$insert_query);

				header("location: login.php"); //show location after submit
		  }
		}
		else {
			$_SESSION['error_password'] = "Confirm Password Does Not Match!!";
			header('location: register.php');
		}
	}
	
?>