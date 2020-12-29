<?php 
	require '../db.php';

	$about_id = $_GET['about_id'];

	if ($about_id) {

		//DELETE PHOTO START

		$photo_name_from_db = "SELECT about_image FROM abouts WHERE id = $about_id";
		$photo_info_from_db = mysqli_query($db_connect,$photo_name_from_db);
		$photo_name = mysqli_fetch_assoc($photo_info_from_db)['about_image'];

		$photo_location = '../../uploads/about/'.$photo_name;
		unlink($photo_location);

		//DELETE PHOTO END

		$about_delete_query = "DELETE FROM abouts WHERE id = $about_id";
		mysqli_query($db_connect, $about_delete_query);
		
		header("location: about_view.php");
	}
?>