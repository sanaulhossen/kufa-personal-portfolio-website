<?php

	require '../db.php';

	$contact_id = $_POST['contact_id'];
	$contact_info = $_POST['contact_info'];
	$address = $_POST['address'];
	$phone = $_POST['phone'];
	$email = $_POST['email'];


	$update_query = "UPDATE contacts SET contact_info = '$contact_info', address = '$address', phone = '$phone', email = '$email' WHERE id = $contact_id";
	mysqli_query($db_connect,$update_query);
	header('location: contact_view.php');

?>