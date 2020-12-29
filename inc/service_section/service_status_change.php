<?php
session_start();

	require '../db.php';
	$service_id = $_GET['service_id'];
	$status = $_GET['btn'];

	$active_count_service_query = "SELECT COUNT(*) AS active_status FROM services WHERE service_status = 2";
	$active_count_service_datas = mysqli_query($db_connect,$active_count_service_query);
	$service_assoc = mysqli_fetch_assoc($active_count_service_datas)['active_status'];


	if ($status =='Active') {
		if ($service_assoc < 6) {
	 		$service_status_query = "UPDATE services SET service_status = 2 WHERE id = $service_id";
	 	}else {
	 		$_SESSION['service_error'] = "You can not active more than 6 hero section.";
	 	}
	}
	else {
		$service_status_query = "UPDATE services SET service_status = 1 WHERE id = $service_id";
	}

	mysqli_query($db_connect,$service_status_query);
	header("location: service_view.php");
?>