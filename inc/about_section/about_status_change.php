<?php
session_start();

	require '../db.php';

	 $id = $_GET['about_id'];
	 $status = $_GET['btn'];


	$active_count_about_query = "SELECT COUNT(*) AS active_status FROM abouts WHERE about_status = 2";
	$active_count_datas = mysqli_query($db_connect,$active_count_about_query);

	$about_assoc = mysqli_fetch_assoc($active_count_datas)['active_status'];



	if ($status =='Active') {
	 	if ($about_assoc < 1) {
	  		$about_status_query = "UPDATE abouts SET about_status = 2 WHERE id = $id";
	  	}else {
			$_SESSION['about_error'] = "You can not active more than 1 hero section.";
	  	}
	}
	else {
		$about_status_query = "UPDATE abouts SET about_status = 1 WHERE id = $id";
	}

	mysqli_query($db_connect,$about_status_query);

	header("location: about_view.php");
?>