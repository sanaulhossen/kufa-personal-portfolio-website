<?php
session_start();

	if (!isset($_SESSION['login'])) {
	  	header('location: ../auth/login.php');
	}

	require '../db.php';
	require '../../dashbord_assets/header.php';
	require '../../dashbord_assets/sidebar.php';

	$about_section_query = "SELECT * FROM abouts";
	$about_section_info_db = mysqli_query($db_connect,$about_section_query);

?>
<div class="page-container hero-view">
  <div class="main-content">
    <div class="page-header">
      <h2 class="header-title">About Section Form: </h2>
      <div class="row">
      	<div class="col-sm-4">

    	 		<form method="post" action="about_view_back.php" enctype="multipart/form-data">
				  <div class="form-group">
				    <label>Description</label>
				    <textarea class="form-control" placeholder="Your Description" name="about_description"></textarea>
				  </div>
				  <div class="form-group">
				    <label>Image</label>
				    <input type="file" class="form-control" placeholder="Attach Image" name="about_image">
				  </div>
				  	<button type="submit" class="btn btn-primary">Submit</button>
				</form>

	      </div>
  	 	<div class="col-md-8">
  	 		<h2 class="header-title">About Section List: </h2>

  	 		<?php if(isset($_SESSION['about_error'])):?>

						<div class="alert alert-danger">
							<?= $_SESSION['about_error'] ?>
						</div>

			<?php 
				endif;
				unset($_SESSION['about_error']);
			?>

  	 		<table class="table">
				  <thead class="thead-dark">
				    <tr>
				      <th scope="col">ID</th>
				      <th scope="col">Description</th>
				      <th scope="col">Image</th>
				      <th scope="col">Modify</th>
				      <th scope="col">Activity</th>
				      <th scope="col">Action</th>
				    </tr>
					</thead>
						<tbody>

					<?php
						foreach($about_section_info_db as $about):
					?>

						<tr>
				      <th><?php echo $about['id'] ?></th>
				      <td><?php echo $about['about_description'] ?></td>
				      <td>
				      		<img src="/practice/uploads/about/<?php echo $about['about_image'] ?>" alt="<?php echo $about['about_image'] ?>">
				      </td>
				      <td>
				      	<a href="about_edit.php?about_id=<?php echo $about['id'] ?>" type="button" class="btn-info btn btn-sm">Edit</a>
				      </td>
				      <td>
				      	<?php if ($about['about_status'] == 1): ?>
				      		<a href="about_status_change.php?about_id=<?php echo $about['id'] ?>&btn=Active" type="button" class="btn-success btn btn-sm">Active</a>
				      	<?php endif; ?>
				      	<?php if ($about['about_status'] == 2): ?>
				      		<a href="about_status_change.php?about_id=<?php echo $about['id'] ?>&btn=Deactive" type="button" class="btn-primary btn btn-sm">Deactive</a>
				      	<?php endif; ?>
				      </td>
				      <td>
				      	<a href="about_delete.php?about_id=<?php echo $about['id'] ?>" type="button" name="button" class="btn btn-danger btn-sm">Delete</a>
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