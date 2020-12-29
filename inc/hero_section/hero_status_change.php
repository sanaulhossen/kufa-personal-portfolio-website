<?php
session_start();

	require '../db.php';
	$id = $_GET['hero_id'];
	$status = $_GET['btn'];


	$active_count_hero_query = "SELECT COUNT(*) AS active_status FROM hero_descriptions WHERE hero_status = 2";
	$active_count_datas = mysqli_query($db_connect,$active_count_hero_query);

	$hero_assoc = mysqli_fetch_assoc($active_count_datas)['active_status'];


	if ($status =='Active') {
		if ($hero_assoc < 1) {
	 		$hero_status_query = "UPDATE hero_descriptions SET hero_status = 2 WHERE id = $id";
	 	}else {
	 		$_SESSION['hero_error'] = "You can not active more than 1 hero section.";
	 	}
	}
	else {
		$hero_status_query = "UPDATE hero_descriptions SET hero_status = 1 WHERE id = $id";
	}

	mysqli_query($db_connect,$hero_status_query);

	header("location: hero_view.php");
?>