<?php 
	require '../db.php';

	$education_id = $_GET['education_id'];

	if ($education_id) {


		$education_delete_query = "DELETE FROM educations WHERE id = $education_id";
		mysqli_query($db_connect, $education_delete_query);
		header("location: education_view.php");
	}
?>