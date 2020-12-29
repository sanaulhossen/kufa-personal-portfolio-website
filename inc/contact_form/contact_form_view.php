<?php
session_start();

	if (!isset($_SESSION['login'])) {
	  	header('location: ../auth/login.php');
	}

	require '../db.php';
	require '../../dashbord_assets/header.php';
	require '../../dashbord_assets/sidebar.php';

	$contact_form_section_query = "SELECT * FROM contact_forms";
	$contact_form_section_info_db = mysqli_query($db_connect,$contact_form_section_query);

?>
<div class="page-container hero-view">
  <div class="main-content">
    <div class="page-header">
      <h2 class="header-title">Contact Section Form: </h2>
      <div class="row">

  	 	<div class="col-md-8 m-auto">
  	 		<h2 class="header-title">Contact Section List: </h2>

  	 		

  	 		<table class="table">
				<thead class="thead-dark">
				    <tr>
				      <th scope="col">ID</th>
				      <th scope="col">User Name</th>
				      <th scope="col">User Email</th>
				      <th scope="col">Message</th>
				      <th scope="col">Action</th>
				    </tr>
				</thead>
				<tbody>

					<?php
						foreach($contact_form_section_info_db as $contact_form):
					?>

					<tr>
				      	<td><?php echo $contact_form['id'] ?></td>
				      	<td>
				      		<?php echo $contact_form['user_name'] ?>
				      	</td>
				      	<td><?php echo $contact_form['user_email'] ?></td>
				      	<td>
				      		<textarea name="" id="" cols="15" rows="5">
				      			<?php echo $contact_form['user_message'] ?>
				      		</textarea>
				      	</td>
				      	<td>
				      		<a href="contact_form_delete.php?contact_form_id=<?php echo $contact_form['id'] ?>" type="button" name="button" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></a>
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