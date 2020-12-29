<?php
session_start();

	if (!isset($_SESSION['login'])) {
	  	header('location: ../auth/login.php');
	}

	require '../db.php';
	require '../../dashbord_assets/header.php';
	require '../../dashbord_assets/sidebar.php';

	$contact_section_query = "SELECT * FROM contacts";
	$contact_section_info_db = mysqli_query($db_connect,$contact_section_query);

?>
<div class="page-container hero-view">
  <div class="main-content">
    <div class="page-header">
      <h2 class="header-title">Contact Section Form: </h2>
      <div class="row">
      	<div class="col-sm-3">

	 		<form method="post" action="contact_view_back.php">
			  	<div class="form-group">
			    	<label>Contact Info: </label>
			    	<textarea class="form-control" placeholder="Enter Contact Info" name="contact_info" rows="6"></textarea>
			  	</div>
			  	<div class="form-group">
				    <label>Address: </label>
				    <input type="text" class="form-control" placeholder="Enter Address" name="address">
				</div>
				<div class="form-group">
				    <label>Phone: </label>
				    <input type="text" class="form-control" placeholder="Enter Phone Number" name="phone">
				</div>
				<div class="form-group">
				    <label>Email: </label>
				    <input type="text" class="form-control" placeholder="Enter Contact Email" name="email">
				</div>
			  	<button type="submit" class="btn btn-primary">Submit</button>
			</form>

	    </div>
  	 	<div class="col-md-9">
  	 		<h2 class="header-title">Contact Section List: </h2>

  	 		<?php if(isset($_SESSION['contact_error'])): ?>

				<div class="alert alert-danger">
					<?php echo $_SESSION['contact_error'] ?>
				</div>

			<?php 
				endif;
				unset($_SESSION['contact_error']);
			?>

  	 		<table class="table">
				<thead class="thead-dark">
				    <tr>
				      <th scope="col">ID</th>
				      <th scope="col">Info</th>
				      <th scope="col">Address</th>
				      <th scope="col">Phone</th>
				      <th scope="col">Email</th>
				      <th scope="col">Modify</th>
				      <th scope="col">Activity</th>
				      <th scope="col">Action</th>
				    </tr>
				</thead>
				<tbody>

					<?php
						foreach($contact_section_info_db as $contact):
					?>

					<tr>
				      	<td><?php echo $contact['id'] ?></td>
				      	<td>
				      		<textarea name="" id="" cols="15" rows="10">
				      			<?php echo $contact['contact_info'] ?>
				      		</textarea>
				      	</td>
				      	<td><?php echo $contact['address'] ?></td>
				      	<td><?php echo $contact['phone'] ?></td>
				      	<td>
				      		<textarea name="" id="" cols="14" rows="10">
				      			<?php echo $contact['email'] ?>
				      		</textarea>
				      	</td>
				      	<td>
				      		<a href="contact_edit.php?contact_id=<?php echo  $contact['id'] ?>" type="button" class="btn-info btn btn-sm"><i class="fas fa-edit"></i></a>
				      	</td>
				      	<td>
					      	<?php if ($contact['contact_status'] == 1): ?>
					      		<a href="contact_status_change.php?contact_id=<?php echo $contact['id'] ?>&btn=Active" type="button" class="btn-success btn btn-sm">Active</a>
					      	<?php endif; ?>
					      	<?php if ($contact['contact_status'] == 2): ?>
					      		<a href="contact_status_change.php?contact_id=<?php echo $contact['id'] ?>&btn=Deactive" type="button" class="btn-primary btn btn-sm">Deactive</a>
					      	<?php endif; ?>
					      </td>
				      	<td>
				      		<a href="contact_delete.php?contact_id=<?php echo $contact['id'] ?>" type="button" name="button" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></a>
				      	</td>
				      	
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