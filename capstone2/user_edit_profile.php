
<?php function display_content(){
	require 'connection.php';
	$username = $_SESSION['username'];
	?>
	<?php 
	if (isset($_GET['update'])){
		echo "<script>Materialize.toast('Update Success', 3000);</script>"; 
	}
	?> 
	<div class="row viewWearCont">
		<div class="col l12 s12 m12">
			<h5 class="z-depth-3 green lighten-1 white-text center">Edit Profile</h5>
		</div>
		<div class="col l12 s12 m12">
			<div class="row grey lighten-4">
				<?php 
				$sql = "SELECT * FROM users WHERE user_name = '$username'";
				$result = mysqli_query($conn, $sql);
				$user = mysqli_fetch_assoc($result);
				$first_name = $user['first_name'];
				$last_name = $user['last_name'];
				$user_name = $user['user_name'];
				$address = $user['address'];
				$contact = $user['contact_number'];
				$eadd = $user['email_address'];
				?>
				<ul class="collapsible" data-collapsible="accordion">
					<li>
						<div class="collapsible-header">Edit Profile</div>
						<div class="collapsible-body">
							<div class="row">
								<form class="col s12" action="update_user_profile.php?id=1" method="POST" enctype="multipart/form-data">
									<div class="row">
										<div class="input-field col s6">
											<input id="edit_first_name" type="text" class="validate" value="<?php echo $first_name ?> " name="first_name">
											<label for="edit_first_name">First Name</label>
										</div>
										<div class="input-field col s6">
											<input id="edit_last_name" type="text" class="validate" value="<?php echo $last_name ?> " name="last_name">
											<label for="edit_last_name">Last Name</label>
										</div>
									</div>
									<div class="row">
										<div class="input-field col s12">
											<input id="edit_contact" class="validate" placeholder="09***********" value="<?php echo $contact ?> " name="contact" min="11">
											<label for="edit_contact" class="active">Contact Number</label>
										</div>
									</div>
									<div class="row">
										<div class="input-field col s12">
											<input id="edit_email" type="email" class="validate" value="<?php echo $eadd ?> " name="email_name">
											<label for="edit_email">Email</label>
										</div>
									</div>
									<div class="row">
										<div class="input-field col s12">
											<input id="edit_address" type="text" class="validate" value="<?php echo $address ?> " name="address">
											<label for="edit_address">Address</label>
										</div>
									</div>
									<div class="row">
										<div class="col s12 l12 m12">
											<p class="center"><input type="submit" class="btn green white-text" value="Update"></p>
										</div>
									</div>
								</form>
							</div>
						</div>
					</li>
					<li>
						<div class="collapsible-header">Change Password</div>
						<div class="collapsible-body">
							<div class="row">
								<form class="col s12" action="update_user_profile.php?id=2" method="POST" id="passEdit">
								<div class="input-field col s12">
									<div class="row">
										<input id="edit_password" type="password" class="validate" name="editPass">
										<label for="edit_password">Password</label>
									</div>
								</div>
								<div class="row">
									<div class="input-field col s12">
										<input id="edit__confirm_password" type="password" class="validate" name="editCPass">
										<label for="edit__confirm_password">Confirm Password</label>
									</div>
								</div>
								<div class="row">
									<div class="col s12 l12 m12">
										<p class="center"><input type="submit" class="btn green white-text" value="Update" id="updatePass"></p>
									</div>
								</div>
								</form>
							</div>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</div>

	<?php } 
	require "template.php";
	?>