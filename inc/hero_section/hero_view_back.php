<?php
		require '../db.php';


	if ($_FILES['hero_image']['name']) {
		$image_file_name = $_FILES['hero_image']['name'];
		$after_explode = explode(".",$image_file_name);
		$image_file_extension = end($after_explode);
		$expected_extension = array("jpg","png","jpeg","JPG","PNG","JPEG");
		if (in_array($image_file_extension, $expected_extension)) {
			if ($_FILES['hero_image']['size'] <= 1000000) {
				$hero_name = $_POST['hero_name'];
				$hero_description = $_POST['hero_description'];

				$hero_insert_query = "INSERT INTO hero_descriptions (hero_name,hero_description) VALUES ('$hero_name','$hero_description')";
				mysqli_query($db_connect,$hero_insert_query);

				$last_id = mysqli_insert_id($db_connect);
				$new_image_file_name = $last_id.".".$image_file_extension;
				$new_location = "../../uploads/hero/".$new_image_file_name;
				move_uploaded_file($_FILES['hero_image']['tmp_name'], $new_location);

				$hero_image_update = "UPDATE hero_descriptions SET hero_image = '$new_image_file_name' WHERE id = $last_id";
				mysqli_query($db_connect,$hero_image_update);
				header('location: hero_view.php');
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