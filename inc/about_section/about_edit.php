<?php
//session_start();

	require '../db.php';
	require '../../dashbord_assets/header.php';
	require '../../dashbord_assets/sidebar.php';

	$about_id = $_GET['about_id'];

	$about_edit_query = "SELECT * FROM abouts WHERE id = $about_id";
	$about_edit_db = mysqli_query($db_connect,$about_edit_query);
	$about_assoc = mysqli_fetch_assoc($about_edit_db);

?>
<div class="page-container hero-view">
  <div class="main-content">
    <div class="page-header">
			<div class="row">
				<div class="col-md-6 m-auto">
					<h3 class="text-center mt-4">About Edit Form</h3><hr>

						<form method="post" action="about_edit_back.php" enctype="multipart/form-data">
							<div class="form-group">
								<input type="hidden" class="form-control" name="about_id" value="<?=$about_id?>">
							</div>
							<div class="form-group">
								<label>About Description</label>
								<textarea class="form-control" name="about_description"rows="7"><?=$about_assoc['about_description']?></textarea>
							</div>
							<div class="form-group">
								<label>About Old Image</label>
								<br>
								<img class="img-fluid" src="/practice/uploads/about/<?=$about_assoc['about_image']?>" alt="<?=$about_assoc['about_image']?>">
								<br><br>
								<label>Hero New Image</label>
								<input type="file" name="about_image" class="form-control">
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