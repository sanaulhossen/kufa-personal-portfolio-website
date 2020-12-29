<?php 
	require '../db.php';

	$hero_id = $_GET['hero_id'];

	if ($hero_id) {

		//DELETE PHOTO START

		$photo_name_from_db = "SELECT hero_image FROM hero_descriptions WHERE id = $hero_id";
		$photo_info_from_db = mysqli_query($db_connect,$photo_name_from_db);
		$photo_name = mysqli_fetch_assoc($photo_info_from_db)['hero_image'];

		$photo_location = '../../uploads/hero/'.$photo_name;
		unlink($photo_location);

		//DELETE PHOTO END

		$hero_delete_query = "DELETE FROM hero_descriptions WHERE id = $hero_id";
		mysqli_query($db_connect, $hero_delete_query);
		
		header("location: hero_view.php");
	}
?>