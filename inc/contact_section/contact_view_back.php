<?php
	
	require '../db.php';

	$contact_info = $_POST['contact_info'];
	$address = $_POST['address'];
	$phone = $_POST['phone'];
	$email = $_POST['email'];



	$contact_insert_query = "INSERT INTO contacts (contact_info,address,phone,email) VALUES ('$contact_info','$address','$phone','$email')";
	mysqli_query($db_connect,$contact_insert_query);
	header('location: contact_view.php');

?>