<?php

	require '../db.php';

	$hero_id = $_POST['hero_id'];
	$hero_name = $_POST['hero_name'];
	$hero_description = $_POST['hero_description'];



	if ($_FILES['hero_image']['name']) {

		//DELETE OLD PHOTO START

		$old_photo_name_from_db = "SELECT hero_image FROM hero_descriptions WHERE id = $hero_id";
		$old_photo_info_from_db = mysqli_query($db_connect,$old_photo_name_from_db);
		$old_photo_name = mysqli_fetch_assoc($old_photo_info_from_db)['hero_image'];

		$old_photo_location = '../../uploads/hero/'.$old_photo_name;
		unlink($old_photo_location);

		//DELETE OLD PHOTO END

		//INSERT NEW PHOTO START

		$file_name = $_FILES['hero_image']['name'];
		$after_explode = explode(".",$file_name);
		$new_file_extension = end($after_explode);
		$new_file_name = $hero_id.".".$new_file_extension;

		

		$new_photo_location = "../../uploads/hero/".$new_file_name;
		move_uploaded_file($_FILES['hero_image']['tmp_name'], $new_photo_location);

		$new_hero_image_update = "UPDATE hero_descriptions SET hero_image = '$new_file_name' WHERE id = $hero_id";
		mysqli_query($db_connect,$new_hero_image_update);

	//INSERT NEW PHOTO END

	}

	$update_query = "UPDATE hero_descriptions SET hero_name = '$hero_name', hero_description = '$hero_description' WHERE id = $hero_id";
	mysqli_query($db_connect,$update_query);
	header('location: hero_view.php');

?>