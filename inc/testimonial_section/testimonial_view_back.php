<?php
		require '../db.php';


	if ($_FILES['client_image']['name']) {
		$image_file_name = $_FILES['client_image']['name'];
		$after_explode = explode(".",$image_file_name);
		$image_file_extension = end($after_explode);
		$expected_extension = array("jpg","png","jpeg","JPG","PNG","JPEG");
		if (in_array($image_file_extension, $expected_extension)) {
			if ($_FILES['client_image']['size'] <= 1000000) {

				$client_name = $_POST['client_name'];
				$client_position = $_POST['client_position'];
				$client_review = $_POST['client_review'];

				$testmonial_insert_query = "INSERT INTO testimonials (client_name,client_review,client_position) VALUES ('$client_name','$client_review','$client_position')";
				mysqli_query($db_connect,$testmonial_insert_query);

				$last_id = mysqli_insert_id($db_connect);
				$new_image_file_name = $last_id.".".$image_file_extension;
				$new_location = "../../uploads/testimonial/".$new_image_file_name;
				move_uploaded_file($_FILES['client_image']['tmp_name'], $new_location);

				$client_image_update = "UPDATE testimonials SET client_image = '$new_image_file_name' WHERE id = $last_id";
				mysqli_query($db_connect,$client_image_update);
				header('location: testimonial_view.php');
			}
			else{
				echo 'Your file size is more than 50KB';
			}
		}
		else{
			echo 'Your File is not supported.';
		}
	}else{
		echo 'Please attach a photo';
	}
?>