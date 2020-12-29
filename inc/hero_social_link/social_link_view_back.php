<?php
	
	require '../db.php';

	$facebook_link = $_POST['facebook_link'];
	$twitter_link = $_POST['twitter_link'];
	$instagram_link = $_POST['instagram_link'];
	$pinterest_link = $_POST['pinterest_link'];

	$social_link_insert_query = "INSERT INTO hero_social_links (facebook_link,twitter_link,instagram_link,pinterest_link) VALUES ('$facebook_link','$twitter_link','$instagram_link','$pinterest_link')";
	mysqli_query($db_connect,$social_link_insert_query);
	header('location: social_link_view.php');

?>