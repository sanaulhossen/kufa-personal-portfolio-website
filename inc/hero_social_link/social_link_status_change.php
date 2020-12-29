<?php
session_start();

	require '../db.php';
	$id = $_GET['social_link_id'];
	$status = $_GET['btn'];


	$active_count_social_link_query = "SELECT COUNT(*) AS active_status FROM hero_social_links WHERE social_status = 2";
	$active_count_social_link_datas = mysqli_query($db_connect,$active_count_social_link_query);

	$social_link_assoc = mysqli_fetch_assoc($active_count_social_link_datas)['active_status'];


	if ($status =='Active') {
		if ($social_link_assoc < 1) {
	 		$social_link_status_query = "UPDATE hero_social_links SET social_status = 2 WHERE id = $id";
	 	}else {
	 		$_SESSION['social_link_error'] = "You can not active more than 1 hero section.";
	 	}
	}
	else {
		$social_link_status_query = "UPDATE hero_social_links SET social_status = 1 WHERE id = $id";
	}

	mysqli_query($db_connect,$social_link_status_query);

	header("location: social_link_view.php");
?>