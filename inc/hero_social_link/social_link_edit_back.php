<?php

	require '../db.php';

	$social_link_id = $_POST['social_link_id'];
	$facebook_link = $_POST['facebook_link'];
	$twitter_link = $_POST['twitter_link'];
	$instagram_link = $_POST['instagram_link'];
	$pinterest_link = $_POST['pinterest_link'];


	$update_query = "UPDATE hero_social_links SET facebook_link = '$facebook_link', twitter_link = '$twitter_link', instagram_link = '$instagram_link', pinterest_link = '$pinterest_link' WHERE id = $social_link_id";
	mysqli_query($db_connect,$update_query);
	header('location: social_link_view.php');

?>