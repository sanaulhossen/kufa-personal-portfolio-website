<?php
session_start();

	if (!isset($_SESSION['login'])) {
	  	header('location: ../auth/login.php');
	}

	require '../db.php';
	require '../../dashbord_assets/header.php';
	require '../../dashbord_assets/sidebar.php';

	$service_query = "SELECT * FROM services";
	$service_info_db = mysqli_query($db_connect,$service_query);

?>
<div class="page-container hero-view">
  <div class="main-content">
    <div class="page-header">
      <h2 class="header-title">Service Section Form: </h2>
      <div class="row">
      	<div class="col-sm-3">

			 		<form method="post" action="service_view_back.php">
					  	<div class="form-group">
					    	<label>Service Title: </label>
					    	<input type="text" class="form-control" placeholder="Enter service Title" name="service_title">
					  	</div>
					  	<div class="form-group">
						    <label>Service Icon: </label>
						    <input type="text" class="form-control" placeholder="Enter Service Icon" name="service_icon">
							</div>
							<div class="form-group">
						    <label>Service Description: </label>
						    <textarea type="text" class="form-control" placeholder="Enter Service Description" name="service_description" rows="6"></textarea>
							</div>
					  		<button type="submit" class="btn btn-primary">Submit</button>
					</form>

	    	</div>
  	 		<div class="col-md-9">
  	 			<h2 class="header-title">Service Section List: </h2>

  	 			<?php if(isset($_SESSION['service_error'])):?>

						<div class="alert alert-danger">
							<?= $_SESSION['service_error'] ?>
						</div>

				<?php 
					endif;
					unset($_SESSION['service_error']);
				?>

  	 				<table class="table">
							<thead class="thead-dark">
						    <tr>
						      <th scope="col">ID</th>
						      <th scope="col">Title</th>
						      <th scope="col">Icon</th>
						      <th scope="col">Description</th>
						      <th scope="col">Modify</th>
						      <th scope="col">Activity</th>
						      <th scope="col">Action</th>
						    </tr>
							</thead>
							<tbody>

								<?php
									foreach($service_info_db as $service):
								?>

								<tr>
				      		<th><?php echo $service['id'] ?></th>
				      		<th><?php echo $service['service_icon'] ?></th>
				      		<th><?php echo $service['service_title'] ?></th>
				      		<th><?php echo $service['service_description'] ?></th>
				      		<th>
					      		<a href="service_edit.php?service_id=<?php echo $service['id'] ?>" type="button" class="btn-info btn btn-sm"><i class="fas fa-edit"></i></a>
					      	</th>
					      	<td>
						      	<?php if ($service['service_status'] == 1): ?>
						      		<a href="service_status_change.php?service_id=<?php echo $service['id'] ?>&btn=Active" type="button" class="btn-success btn btn-sm">Active</a>
						      	<?php endif; ?>
						      	<?php if ($service['service_status'] == 2): ?>
						      		<a href="service_status_change.php?service_id=<?php echo $service['id'] ?>&btn=Deactive" type="button" class="btn-primary btn btn-sm">Deactive</a>
						      	<?php endif; ?>
						      </td>
					      	<th>
					      		<a href="service_delete.php?service_id=<?php echo $service['id'] ?>" type="button" name="button" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></a>
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
</div>


<?php
  require '../../dashbord_assets/footer.php';
?>