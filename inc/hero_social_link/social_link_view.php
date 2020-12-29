<?php
session_start();

 	if (!isset($_SESSION['login'])) {
  	header('location: ../auth/login.php');
	}
	
	require '../db.php';
	require '../../dashbord_assets/header.php';
	require '../../dashbord_assets/sidebar.php';

	$hero_social_link_section_query = "SELECT * FROM hero_social_links";
	$hero_social_link_section_info_db = mysqli_query($db_connect,$hero_social_link_section_query);

?>

<div class="page-container hero-view">
  <div class="main-content">
    <div class="page-header">
      <h2 class="header-title">Hero Link Form: </h2>
      <div class="row">
      	<div class="col-sm-3">

    	 		<form method="post" action="social_link_view_back.php">
					  <div class="form-group">
					    <label>Facebook</label>
					    <input type="text" class="form-control" placeholder="Enter Your Facebook URL" name="facebook_link">
					  </div>
					  <div class="form-group">
					    <label>Twitter</label>
					    <input type="text" class="form-control" placeholder="Enter Your Twitter URL" name="twitter_link">
					  </div>
					  <div class="form-group">
					    <label>Instagram</label>
					    <input type="text" class="form-control" placeholder="Enter Your Instagram URL" name="instagram_link">
					  </div>
					  <div class="form-group">
					    <label>Pinterest</label>
					    <input type="text" class="form-control" placeholder="Enter Your pinterest URL" name="pinterest_link">
					  </div>
				  	<button type="submit" class="btn btn-primary">Submit</button>
					</form>

	      </div>
  	 	<div class="col-md-9">
  	 		<h2 class="header-title">Hero Section List: </h2>

  	 		<?php if(isset($_SESSION['social_link_error'])):?>

					<div class="alert alert-danger">
						<?= $_SESSION['social_link_error'] ?>
					</div>

			<?php 
				endif;
				unset($_SESSION['social_link_error']);
			?>

  	 		<table class="table">
				  <thead class="thead-dark">
				    <tr>
				      <th scope="col">ID</th>
				      <th scope="col">Facebook</th>
				      <th scope="col">Twitter</th>
				      <th scope="col">Instagram</th>
				      <th scope="col">Pinterest</th>
				      <th scope="col">Modify</th>
				      <th scope="col">Activity</th>
				      <th scope="col">Action</th>
				    </tr>
					</thead>
						<tbody>

							<?php
								foreach($hero_social_link_section_info_db as $social_link):
							?>
								<tr>
									<th><?php echo $social_link['id'] ?></th>
							      	<th>
							      		<textarea cols="10" rows="5">
							      			<?php echo $social_link['facebook_link'] ?>
							      		</textarea>
							      	</th>
							      	<th>
							      		<textarea cols="10" rows="5">
							      			<?php echo $social_link['twitter_link'] ?>
							      		</textarea>
							      	</th>
							      	<th>
							      		<textarea cols="10" rows="5">
							      			<?php echo $social_link['instagram_link'] ?>
							      		</textarea>
							      	</th>
							      	<th>
							      		<textarea cols="10" rows="5">
							      			<?php echo $social_link['pinterest_link'] ?>
							      		</textarea>
							      	</th>
							      	<th>
							      		<a href="social_link_edit.php?social_link_id=<?php echo $social_link['id'] ?>" type="button" class="btn-info btn btn-sm"><i class="fas fa-edit"></i></a>
							      	</th>
							      	<td>
								      	<?php if ($social_link['social_status'] == 1): ?>
								      		<a href="social_link_status_change.php?social_link_id=<?php echo $social_link['id'] ?>&btn=Active" type="button" class="btn-success btn btn-sm"><i class="fab fa-creative-commons"></i></a>
								      	<?php endif; ?>
								      	<?php if ($social_link['social_status'] == 2): ?>
								      		<a href="social_link_status_change.php?social_link_id=<?php echo $social_link['id'] ?>&btn=Deactive" type="button" class="btn-primary btn btn-sm"><i class="fab fa-creative-commons-pd"></i></a>
								      	<?php endif; ?>
								      </td>
							      	<th>
							      		<a href="social_link_delete.php?social_link_id=<?php echo $social_link['id'] ?>" type="button" name="button" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></a>
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