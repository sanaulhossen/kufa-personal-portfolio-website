<?php
session_start();

	require '../db.php';
	$id = $_GET['education_id'];
	$status = $_GET['btn'];

	$active_count_education_query = "SELECT COUNT(*) AS active_status FROM educations WHERE education_status = 2";
	$active_count_education_datas = mysqli_query($db_connect,$active_count_education_query);
	$education_assoc = mysqli_fetch_assoc($active_count_education_datas)['active_status'];

	if ($status =='Active') {
		if ($education_assoc < 4) {
	 		$education_status_query = "UPDATE educations SET education_status = 2 WHERE id = $id";
	 	}else {
	 		$_SESSION['education_error'] = "You can not active more than 4 hero section.";
	 	}
	}
	else {
		$education_status_query = "UPDATE educations SET education_status = 1 WHERE id = $id";
	}

	mysqli_query($db_connect,$education_status_query);
	header("location: education_view.php");
?>