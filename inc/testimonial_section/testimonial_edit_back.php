<?php

	require '../db.php';

	$testimonial_id = $_POST['testimonial_id'];
	$client_name = $_POST['client_name'];
	$client_review = $_POST['client_review'];
	$client_position = $_POST['client_position'];



	if ($_FILES['client_image']['name']) {

		//DELETE OLD PHOTO START

		$old_photo_name_from_db = "SELECT client_image FROM testimonials WHERE id = $testimonial_id";
		$old_photo_info_from_db = mysqli_query($db_connect,$old_photo_name_from_db);
		$old_photo_name = mysqli_fetch_assoc($old_photo_info_from_db)['client_image'];

		$old_photo_location = '../../uploads/testimonial/'.$old_photo_name;
		unlink($old_photo_location);

		//DELETE OLD PHOTO END

		//INSERT NEW PHOTO START

		$file_name = $_FILES['client_image']['name'];
		$after_explode = explode(".",$file_name);
		$new_file_extension = end($after_explode);
		$new_file_name = $testimonial_id.".".$new_file_extension;

		

		$new_photo_location = "../../uploads/testimonial/".$new_file_name;
		move_uploaded_file($_FILES['client_image']['tmp_name'], $new_photo_location);

		$new_client_image_update = "UPDATE testimonials SET client_image = '$new_file_name' WHERE id = $testimonial_id";
		mysqli_query($db_connect,$new_client_image_update);

	//INSERT NEW PHOTO END

	}

	$update_query = "UPDATE testimonials SET client_name = '$client_name', client_review = '$client_review', client_position = '$client_position' WHERE id = $testimonial_id";
	mysqli_query($db_connect,$update_query);
	header('location: testimonial_view.php');

?>