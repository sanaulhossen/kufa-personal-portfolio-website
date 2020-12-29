<?php
session_start();

	if (!isset($_SESSION['login'])) {
	  	header('location: ../auth/login.php');
	}

	require '../db.php';
	require '../../dashbord_assets/header.php';
	require '../../dashbord_assets/sidebar.php';

	$testimonial_section_query = "SELECT * FROM testimonials";
	$testimonial_section_info_db = mysqli_query($db_connect,$testimonial_section_query);

?>
<div class="page-container hero-view">
  <div class="main-content">
    <div class="page-header">
      <h2 class="header-title">Testimonial Section Form: </h2>
      <div class="row">
      	<div class="col-sm-3">

			 		<form method="post" action="testimonial_view_back.php" enctype="multipart/form-data">
				  	<div class="form-group">
				    	<label>Client Name: </label>
				    	<input type="text" class="form-control" placeholder="Enter Client Name" name="client_name">
				  	</div>
				  	<div class="form-group">
					    <label>Client Review: </label>
					    <textarea class="form-control" placeholder="Enter Client Review" rows="5" name="client_review"></textarea>
						</div>
						<div class="form-group">
					    <label>Client Position: </label>
					    <input type="text" class="form-control" placeholder="Enter Client Position" name="client_position">
						</div>
						<div class="form-group">
					    <label>Client Image: </label>
					    <input type="file" class="form-control" placeholder="Enter Client Image" name="client_image">
						</div>
					  	<button type="submit" class="btn btn-primary">Submit</button>
					</form>

	    </div>
  	 	<div class="col-md-9">
  	 		<h2 class="header-title">Testimonial Section List: </h2>

  	 		<table class="table">
					<thead class="thead-dark">
				    <tr>
				      <th scope="col">ID</th>
				      <th scope="col">Name</th>
				      <th scope="col">Position</th>
				      <th scope="col">Review</th>
				      <th scope="col">Image</th>
				      <th scope="col">Modify</th>
				      <th scope="col">Action</th>
				    </tr>
					</thead>
				<tbody>

					<?php
						foreach($testimonial_section_info_db as $testimonial):
					?>

					<tr>
		      	<th><?php echo $testimonial['id'] ?></th>
		      	<th><?php echo $testimonial['client_name'] ?></th>
		      	<th><?php echo $testimonial['client_position'] ?></th>
		      	<th>
		      		<textarea cols="20" rows="5">
		      			<?php echo $testimonial['client_review'] ?>
		      		</textarea>
		      	</th>
		      	<td>
					     <img src="/practice/uploads/testimonial/<?php echo $testimonial['client_image'] ?>" alt="<?php echo $testimonial['client_image'] ?>">
					      </td>
		      	<th>
		      		<a href="testimonial_edit.php?testimonial_id=<?php echo  $testimonial['id'] ?>" type="button" class="btn-info btn btn-sm"><i class="fas fa-edit"></i></a>
		      	</th>
		      	<th>
		      		<a href="testimonial_delete.php?testimonial_id=<?php echo $testimonial['id'] ?>" type="button" name="button" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></a>
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