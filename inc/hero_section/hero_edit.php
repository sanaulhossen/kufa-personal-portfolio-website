<?php
session_start();

  require '../db.php';
  require '../../dashbord_assets/header.php';
  require '../../dashbord_assets/sidebar.php';

	$hero_id = $_GET['hero_id'];

	$hero_edit_query = "SELECT * FROM hero_descriptions WHERE id = $hero_id";
	$hero_edit_db = mysqli_query($db_connect,$hero_edit_query);
	$hero_assoc = mysqli_fetch_assoc($hero_edit_db);

	
?>
<div class="page-container hero-view">
  <div class="main-content">
    <div class="page-header">
			<div class="row">
				<div class="col-md-6 m-auto">
					<h3 class="text-center">Hero Edit Form</h3><hr>

						<form method="post" action="hero_edit_back.php" enctype="multipart/form-data">
							<div class="form-group">
								<input type="hidden" class="form-control" name="hero_id" value="<?=$hero_id?>">
							</div>
							<div class="form-group">
								<label>Hero Name</label>
								<input type="text" class="form-control" name="hero_name" value="<?=$hero_assoc['hero_name']?>">
							</div>
							<div class="form-group">
								<label>Hero Description</label>
								<textarea class="form-control" name="hero_description" rows="7"><?=$hero_assoc['hero_description']?></textarea>
							</div>
							<div class="form-group">
								<label>Hero Old Image</label>
								<br>
								<img class="img-fluid" src="/practice/uploads/hero/<?=$hero_assoc['hero_image']?>" alt="<?=$hero_assoc['hero_image']?>">
								<br><br>
							</div>
							<div class="form-group">
								<label>Hero New Image</label>
								<input type="file" name="hero_image" class="form-control">
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