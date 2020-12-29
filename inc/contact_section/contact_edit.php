<?php
//session_start();

	require '../db.php';
	require '../../dashbord_assets/header.php';
	require '../../dashbord_assets/sidebar.php';

	$contact_id = $_GET['contact_id'];

	$contact_edit_query = "SELECT * FROM contacts WHERE id = $contact_id";
	$contact_edit_db = mysqli_query($db_connect,$contact_edit_query);
	$contact_assoc = mysqli_fetch_assoc($contact_edit_db);

?>
<div class="page-container hero-view">
  <div class="main-content">
    <div class="page-header">
			<div class="row">
				<div class="col-md-6 m-auto">
					<h3 class="text-center mt-4">Contact Information Edit Form</h3><hr>

						<form method="post" action="contact_edit_back.php">
							<div class="form-group">
								<input type="hidden" class="form-control" name="contact_id" value="<?=$contact_id?>">
							</div>
							<div class="form-group">
								<label>Contact Info: </label>
								<textarea class="form-control" name="contact_info" rows="6"><?=$contact_assoc['contact_info']?></textarea>
							</div>
							<div class="form-group">
								<label>Address: </label>
								<input type="text" class="form-control" name="address" value="<?=$contact_assoc['address'] ?>">
							</div>
							<div class="form-group">
								<label>Phone: </label>
								<input type="text" class="form-control" name="phone" value="<?=$contact_assoc['phone'] ?>">
							</div>
							<div class="form-group">
								<label>Email: </label>
								<input type="text" class="form-control" name="email" value="<?=$contact_assoc['email'] ?>">
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