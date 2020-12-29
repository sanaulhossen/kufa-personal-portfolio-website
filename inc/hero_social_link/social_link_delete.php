<?php 
	require '../db.php';

	$social_link_id = $_GET['social_link_id'];

	if ($social_link_id) {


		$social_link_delete_query = "DELETE FROM hero_social_links WHERE id = $social_link_id";
		mysqli_query($db_connect, $social_link_delete_query);
		
		header("location: social_link_view.php");
	}
?>