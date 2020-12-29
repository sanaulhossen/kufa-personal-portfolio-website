<?php
session_start();

  require '../db.php';
  require '../../dashbord_assets/header.php';
  require '../../dashbord_assets/sidebar.php';

	$testimonial_id = $_GET['testimonial_id'];

	$testimonial_edit_query = "SELECT * FROM testimonials WHERE id = $testimonial_id";
	$testimonial_edit_db = mysqli_query($db_connect,$testimonial_edit_query);
	$testimonial_assoc = mysqli_fetch_assoc($testimonial_edit_db);

	
?>
<div class="page-container hero-view">
  <div class="main-content">
    <div class="page-header">
			<div class="row">
				<div class="col-md-6 m-auto">
					<h3 class="text-center">Testimonial Edit Form</h3><hr>

						<form method="post" action="testimonial_edit_back.php" enctype="multipart/form-data">
							<div class="form-group">
								<input type="hidden" class="form-control" name="testimonial_id" value="<?=$testimonial_id?>">
							</div>
							<div class="form-group">
								<label>Client Name: </label>
								<input type="text" class="form-control" name="client_name" value="<?=$testimonial_assoc['client_name']?>">
							</div>
							<div class="form-group">
								<label>Client Review: </label>
								<textarea class="form-control" name="client_review" rows="7"><?=$testimonial_assoc['client_review']?></textarea>
							</div>
							<div class="form-group">
								<label>Client Position: </label>
								<input type="text" class="form-control" name="client_position" value="<?=$testimonial_assoc['client_position']?>">
							</div>
							<div class="form-group">
								<label>Client Old Image</label>
								<br>
								<img class="img-fluid" src="/practice/uploads/testimonial/<?=$testimonial_assoc['client_image']?>" alt="<?=$testimonial_assoc['client_image']?>">
								<br><br>
							</div>
							<div class="form-group">
								<label>Client New Image</label>
								<input type="file" name="client_image" class="form-control">
							</div>
								<button type="submit" class="btn btn-primary">Submit</button>
						</form>

				</div>
			</div>
		</div>
	</div>
</div>

<?php
  require '../../dashbord_assets/footer.php';
?>