<?php
session_start();

	if (!isset($_SESSION['login'])) {
	  	header('location: ../auth/login.php');
	}

	require '../db.php';
	require '../../dashbord_assets/header.php';
	require '../../dashbord_assets/sidebar.php';

	$education_section_query = "SELECT * FROM educations";
	$education_section_info_db = mysqli_query($db_connect,$education_section_query);

?>
<div class="page-container hero-view">
  <div class="main-content">
    <div class="page-header">
      <h2 class="header-title">Education Section Form: </h2>
      <div class="row">
      	<div class="col-sm-3">

	 		<form method="post" action="education_view_back.php">
			  	<div class="form-group">
			    	<label>Passing Year</label>
			    	<input type="text" class="form-control" placeholder="Enter Passing Year" name="passing_year">
			  	</div>
			  	<div class="form-group">
				    <label>Subject</label>
				    <input type="text" class="form-control" placeholder="Enter Your Subject" name="subject">
				</div>
				<div class="form-group">
				    <label>Result</label>
				    <input type="text" class="form-control" placeholder="Enter Your result" name="result">
				</div>
			  	<button type="submit" class="btn btn-primary">Submit</button>
			</form>

	    </div>
  	 	<div class="col-md-9">
  	 		<h2 class="header-title">Education Section List: </h2>

  	 		<?php if(isset($_SESSION['education_error'])):?>

				<div class="alert alert-danger">
					<?= $_SESSION['education_error'] ?>
				</div>

			<?php 
				endif;
				unset($_SESSION['education_error']);
			?>

  	 		<table class="table">
				<thead class="thead-dark">
				    <tr>
				      <th scope="col">ID</th>
				      <th scope="col">Year</th>
				      <th scope="col">Subject</th>
				      <th scope="col">Result</th>
				      <th scope="col">Modify</th>
				      <th scope="col">Activity</th>
				      <th scope="col">Action</th>
				    </tr>
				</thead>
				<tbody>

					<?php
						foreach($education_section_info_db as $education):
					?>

					<tr>
				      	<th><?php echo $education['id'] ?></th>
				      	<th><?php echo $education['passing_year'] ?></th>
				      	<th><?php echo $education['subject'] ?></th>
				      	<th><?php echo $education['result'] ?></th>
				      	<th>
				      		<a href="education_edit.php?education_id=<?php echo  $education['id'] ?>" type="button" class="btn-info btn btn-sm"><i class="fas fa-edit"></i></a>
				      	</th>
				      	<td>
					      	<?php if ($education['education_status'] == 1): ?>
					      		<a href="education_status_change.php?education_id=<?php echo $education['id'] ?>&btn=Active" type="button" class="btn-success btn btn-sm">Active</a>
					      	<?php endif; ?>
					      	<?php if ($education['education_status'] == 2): ?>
					      		<a href="education_status_change.php?education_id=<?php echo $education['id'] ?>&btn=Deactive" type="button" class="btn-primary btn btn-sm">Deactive</a>
					      	<?php endif; ?>
					      </td>
				      	<th>
				      		<a href="education_delete.php?education_id=<?php echo $education['id'] ?>" type="button" name="button" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></a>
				      	</th>
					</tr>

					<?php
						endforeach;
					?>

				</tbody>
			</table>
      	</div>
    </div>
  </div>
</div>


<?php
  require '../../dashbord_assets/footer.php';
?>