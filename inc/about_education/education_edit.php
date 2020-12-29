<?php
//session_start();

	require '../db.php';
	require '../../dashbord_assets/header.php';
	require '../../dashbord_assets/sidebar.php';

	$education_id = $_GET['education_id'];

	$education_edit_query = "SELECT * FROM educations WHERE id = $education_id";
	$education_edit_db = mysqli_query($db_connect,$education_edit_query);
	$education_assoc = mysqli_fetch_assoc($education_edit_db);

?>
<div class="page-container hero-view">
  <div class="main-content">
    <div class="page-header">
			<div class="row">
				<div class="col-md-6 m-auto">
					<h3 class="text-center mt-4">Education Edit Form</h3><hr>

						<form method="post" action="education_edit_back.php">
							<div class="form-group">
								<input type="hidden" class="form-control" name="education_id" value="<?=$education_id?>">
							</div>
							<div class="form-group">
								<label>Passing Year</label>
								<input type="text" class="form-control" name="passing_year" value="<?=$education_assoc['passing_year']?>">
							</div>
							<div class="form-group">
								<label>Subject</label>
								<input type="text" class="form-control" name="subject" value="<?=$education_assoc['subject'] ?>">
							</div>
							<div class="form-group">
								<label>Result</label>
								<input type="text" class="form-control" name="result" value="<?=$education_assoc['result'] ?>">
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