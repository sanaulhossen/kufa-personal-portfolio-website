<?php 
	require '../db.php';

	$contact_form_id = $_GET['contact_form_id'];

	if ($contact_form_id) {


		$contact_form_delete_query = "DELETE FROM contact_forms WHERE id = $contact_form_id";
		mysqli_query($db_connect, $contact_form_delete_query);
		header("location: contact_form_view.php");
	}
?>