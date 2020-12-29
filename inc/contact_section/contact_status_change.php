<?php
session_start();

	require '../db.php';
	$id = $_GET['contact_id'];
	$status = $_GET['btn'];

	$active_count_contact_query = "SELECT COUNT(*) AS active_status FROM contacts WHERE contact_status = 2";
	$active_count_contact_datas = mysqli_query($db_connect,$active_count_contact_query);
	$contact_assoc = mysqli_fetch_assoc($active_count_contact_datas)['active_status'];

	if ($status =='Active') {
		if ($contact_assoc < 1) {
	 		$contact_status_query = "UPDATE contacts SET contact_status = 2 WHERE id = $id";
	 	}else {
	 		$_SESSION['contact_error'] = "You can not active more than 1 contact section.";
	 	}
	}
	else {
		$contact_status_query = "UPDATE contacts SET contact_status = 1 WHERE id = $id";
	}

	mysqli_query($db_connect,$contact_status_query);
	header("location: contact_view.php");
?>