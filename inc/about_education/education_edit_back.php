<?php

	require '../db.php';

	$education_id = $_POST['education_id'];
	$passing_year = $_POST['passing_year'];
	$subject = $_POST['subject'];
	$result = $_POST['result'];


	$update_query = "UPDATE educations SET passing_year = '$passing_year', subject = '$subject', result = '$result' WHERE id = $education_id";
	mysqli_query($db_connect,$update_query);
	header('location: education_view.php');

?>