<?php
session_start();

  require '../db.php';
  require '../../dashbord_assets/header.php';
  require '../../dashbord_assets/sidebar.php';

	$service_id = $_GET['service_id'];

	$service_query = "SELECT * FROM services WHERE id = $service_id";
	$service_edit_db = mysqli_query($db_connect,$service_query);
	$service_assoc = mysqli_fetch_assoc($service_edit_db);

?>
<div class="page-container hero-view">
  <div class="main-content">
    <div class="page-header">
			<div class="row">
				<div class="col-md-6 m-auto">
					<h3 class="text-center">Service Edit Form</h3><hr>
					
						<form method="post" action="service_edit_back.php">
							<div class="form-group">
								<input type="hidden" class="form-control" name="service_id" value="<?=$service_id?>">
							</div>
							<div class="form-group">
								<label>Service Icon</label>
								<input type="text" class="form-control" name="service_icon" value="<?=$service_assoc['service_icon']?>">
							</div>
							<div class="form-group">
								<label>Service Title</label>
								<input type="text" class="form-control" name="service_title" value="<?=$service_assoc['service_title']?>">
							</div>
							<div class="form-group">
								<label>Service Description:</label>
								<textarea type="text" class="form-control" name="service_description" rows="6"><?=$service_assoc['service_description']?></textarea>
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