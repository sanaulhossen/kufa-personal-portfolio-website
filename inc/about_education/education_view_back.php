<?php
	
	require '../db.php';

	$passing_year = $_POST['passing_year'];
	$subject = $_POST['subject'];
	$result = $_POST['result'];


	$education_insert_query = "INSERT INTO educations (passing_year,subject,result) VALUES ('$passing_year','$subject','$result')";
	mysqli_query($db_connect,$education_insert_query);
	header('location: education_view.php');

?>