<?php
session_start();

	if (!isset($_SESSION['login'])) {
 	header('location: ../auth/login.php');
}
	require '../db.php';
	require '../../dashbord_assets/header.php';
	require '../../dashbord_assets/sidebar.php';

	$hero_section_query = "SELECT * FROM hero_descriptions";
	$hero_section_info_db = mysqli_query($db_connect,$hero_section_query);

?>

<div class="page-container hero-view">
  <div class="main-content">
    <div class="page-header">
      <h2 class="header-title">Hero Section Form: </h2>
      <div class="row">
      	<div class="col-sm-4">

    	 		<form method="post" action="hero_view_back.php" enctype="multipart/form-data">
				  <div class="form-group">
				    <label>Name</label>
				    <input type="text" class="form-control" placeholder="Enter Your Name" name="hero_name">
				  </div>
				  <div class="form-group">
				    <label>Discription</label>
				    <input type="text" class="form-control" placeholder="Enter Diescription" name="hero_description">
				  </div>
				  <div class="form-group">
				    <label>Image</label>
				    <input type="file" class="form-control" placeholder="Attach Image" name="hero_image">
				  </div>
				  	<button type="submit" class="btn btn-primary">Submit</button>
				</form>

	      </div>
  	 	<div class="col-md-8">
  	 		<h2 class="header-title">Hero Section List: </h2>

  	 		  	<?php if(isset($_SESSION['hero_error'])):?>

						<div class="alert alert-danger">
							<?= $_SESSION['hero_error'] ?>
						</div>

				<?php 
					endif;
					unset($_SESSION['hero_error']);
				?>

  	 		<table class="table">
				  <thead class="thead-dark">
				    <tr>
				      <th scope="col">ID</th>
				      <th scope="col">Name</th>
				      <th scope="col">Description</th>
				      <th scope="col">Image</th>
				      <th scope="col">Modify</th>
				      <th scope="col">Activity</th>
				      <th scope="col">Action</th>
				    </tr>
					</thead>
						<tbody>

				  		<?php
					  		$serial = 1;
							foreach($hero_section_info_db as $hero):
						?>

						<tr>
					      <th><?php echo $hero['id'] ?></th>
					      <td><?php echo $hero['hero_name'] ?></td>
					      <td><?php echo $hero['hero_description'] ?></td>
					      <td>
					      	<img src="/practice/uploads/hero/<?php echo $hero['hero_image'] ?>" alt="<?php echo $hero['hero_image'] ?>">
					      </td>
					      <td>
					      	<a href="hero_edit.php?hero_id=<?php echo $hero['id'] ?>" type="button" class="btn-info btn btn-sm">Edit</a>
					      </td>
					      <td>
					      	<?php if ($hero['hero_status'] == 1): ?>
					      		<a href="hero_status_change.php?hero_id=<?php echo $hero['id'] ?>&btn=Active" type="button" class="btn-success btn btn-sm">Active</a>
					      	<?php endif; ?>
					      	<?php if ($hero['hero_status'] == 2): ?>
					      		<a href="hero_status_change.php?hero_id=<?php echo $hero['id'] ?>&btn=Deactive" type="button" class="btn-primary btn btn-sm">Deactive</a>
					      	<?php endif; ?>
					      </td>
					      <td>
					      	<a href="hero_delete.php?hero_id=<?php echo $hero['id'] ?>" type="button" name="button" class="btn btn-danger btn-sm">Delete</a>
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