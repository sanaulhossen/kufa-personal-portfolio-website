<?php

	require '../db.php';

	$about_id = $_POST['about_id'];
	$about_description = $_POST['about_description'];



	 if ($_FILES['about_image']['name']) {

	 	//DELETE OLD PHOTO START

	 	$old_photo_name_from_db = "SELECT about_image FROM abouts WHERE id = $about_id";
	 	$old_photo_info_from_db = mysqli_query($db_connect,$old_photo_name_from_db);
	 	$old_photo_name = mysqli_fetch_assoc($old_photo_info_from_db)['about_image'];


	 	$old_photo_location = '../../uploads/about/'.$old_photo_name;
	 	unlink($old_photo_location);

	// 	//DELETE OLD PHOTO END

	// 	//INSERT NEW PHOTO START

	 	$file_name = $_FILES['about_image']['name'];
	 	$after_explode = explode(".",$file_name);
	 	$new_file_extension = end($after_explode);
	 	$new_file_name = $about_id.".".$new_file_extension;

		
	 	$new_photo_location = "../../uploads/about/".$new_file_name;
	 	move_uploaded_file($_FILES['about_image']['tmp_name'], $new_photo_location);

	 	$new_about_image_update = "UPDATE abouts SET about_image = '$new_file_name' WHERE id = $about_id";
	 	mysqli_query($db_connect,$new_about_image_update);

	 //INSERT NEW PHOTO END

	}

	$update_query = "UPDATE abouts SET about_description = '$about_description' WHERE id = $about_id";
	mysqli_query($db_connect,$update_query);
	header('location: about_view.php');
?>