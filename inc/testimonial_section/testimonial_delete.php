<?php 
	require '../db.php';

	$testimonial_id = $_GET['testimonial_id'];

	if ($testimonial_id) {

		//DELETE PHOTO START

		$photo_name_from_db = "SELECT client_image FROM testimonials WHERE id = $testimonial_id";
		$photo_info_from_db = mysqli_query($db_connect,$photo_name_from_db);
		$photo_name = mysqli_fetch_assoc($photo_info_from_db)['client_image'];

		$photo_location = '../../uploads/testimonial/'.$photo_name;
		unlink($photo_location);

		//DELETE PHOTO END

		$testimonials_delete_query = "DELETE FROM testimonials WHERE id = $testimonial_id";
		mysqli_query($db_connect, $testimonials_delete_query);
		
		header("location: testimonial_view.php");
	}
?>