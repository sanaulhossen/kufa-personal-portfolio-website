<?php
	
	require '../db.php';

	$service_title = $_POST['service_title'];
	$service_icon = $_POST['service_icon'];
	$service_description = $_POST['service_description'];


	$service_insert_query = "INSERT INTO services (service_title,service_icon,service_description) VALUES ('$service_title','$service_icon','$service_description')";
	mysqli_query($db_connect,$service_insert_query);
	header('location: service_view.php');

?>