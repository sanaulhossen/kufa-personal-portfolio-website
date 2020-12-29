<?php 
	require '../db.php';

	$contact_id = $_GET['contact_id'];

	if ($contact_id) {


		$contact_delete_query = "DELETE FROM contacts WHERE id = $contact_id";
		mysqli_query($db_connect, $contact_delete_query);
		header("location: contact_view.php");
	}
?>