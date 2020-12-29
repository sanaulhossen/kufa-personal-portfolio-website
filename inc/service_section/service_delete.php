<?php 
	require '../db.php';

	$service_id = $_GET['service_id'];

	if ($service_id) {


		$service_delete_query = "DELETE FROM services WHERE id = $service_id";
		mysqli_query($db_connect, $service_delete_query);
		
		header("location: service_view.php");
	}
?>