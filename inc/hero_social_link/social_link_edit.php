<?php
session_start();

  require '../db.php';
  require '../../dashbord_assets/header.php';
  require '../../dashbord_assets/sidebar.php';

	$social_link_id = $_GET['social_link_id'];

	$social_link_edit_query = "SELECT * FROM hero_social_links WHERE id = $social_link_id";
	$social_link_edit_db = mysqli_query($db_connect,$social_link_edit_query);
	$social_link_assoc = mysqli_fetch_assoc($social_link_edit_db);

?>
<div class="page-container hero-view">
  <div class="main-content">
    <div class="page-header">
			<div class="row">
				<div class="col-md-6 m-auto">
					<h3 class="text-center">Social Link Edit Form</h3><hr>
					
						<form method="post" action="social_link_edit_back.php">
							<div class="form-group">
								<input type="hidden" class="form-control" name="social_link_id" value="<?=$social_link_id?>">
							</div>
							<div class="form-group">
								<label>Facebook</label>
								<input type="text" class="form-control" name="facebook_link" value="<?=$social_link_assoc['facebook_link']?>">
							</div>
							<div class="form-group">
								<label>Twitter</label>
								<input type="text" class="form-control" name="twitter_link" value="<?=$social_link_assoc['twitter_link']?>">
							</div>
							<div class="form-group">
								<label>Instagram</label>
								<input type="text" class="form-control" name="instagram_link" value="<?=$social_link_assoc['instagram_link']?>">
							</div>
							<div class="form-group">
								<label>Pinterest</label>
								<input type="text" class="form-control" name="pinterest_link" value="<?=$social_link_assoc['pinterest_link']?>">
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