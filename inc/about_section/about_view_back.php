<?php

	require '../db.php';


	if ($_FILES['about_image']['name']) {

		$image_file_name = $_FILES['about_image']['name'];
		$after_explode = explode(".",$image_file_name);
		$image_file_extension = end($after_explode);
		$expected_extension = array("jpg","png","jpeg","JPG","PNG","JPEG");

		if (in_array($image_file_extension, $expected_extension)) {
			if ($_FILES['about_image']['size'] <= 1000000) {

				$about_description = $_POST['about_description'];

				$about_insert_query = "INSERT INTO abouts (about_description) VALUES ('$about_description')";
				mysqli_query($db_connect,$about_insert_query);

				$last_id = mysqli_insert_id($db_connect);
				$new_image_file_name = $last_id.".".$image_file_extension;
				$new_location = "../../uploads/about/".$new_image_file_name;
				move_uploaded_file($_FILES['about_image']['tmp_name'], $new_location);

				$about_image_update = "UPDATE abouts SET about_image = '$new_image_file_name' WHERE id = $last_id";
				mysqli_query($db_connect,$about_image_update);
				header('location: about_view.php');
			}
			else{
				echo 'Your file size is more than 1MB';
			}
		}
		else{
			echo 'Your File is not supported.';
		}
	}else{
		echo 'Please attach a photo';
	}
?>