
<?php function display_content(){
	require 'connection.php'; ?>
	<div class="section mainSection">
		<div class="row">
			<div class="col l12 m12 s12">
				<ul id="tabs-swipe-demo" class="tabs">
					<li class="tab col s3"><a class="active green-text" href="#add">Add Items</a></li>
					<li class="tab col s3"><a href="#edit" class=" green-text">Edit Items</a></li>
					<li class="tab col s3"><a href="#delete" class=" green-text">Delete Items</a></li>
				</ul>
				<div id="add" class="col s12 grey lighten-4">
					<ul class="collapsible" data-collapsible="accordion">
						<li>
							<div class="collapsible-header"><i class="material-icons">phone_android</i>Phone</div>
							<div class="collapsible-body">
								<div class="row">
									<h2 class="center">Add Phone</h2>
									<form class="col s12" action="add_item_endpoint.php?id=1" method="POST" enctype="multipart/form-data">
										<div class="row">
											<div class="input-field col l3 m12 s12">
												<input  id="phone_name" type="text" class="validate" name="phone_name">
												<label for="phone_name">Phone Name</label>
											</div>
										</div>
										<div class="row">
											<div class="input-field col l6 m12 s12">
												<textarea id="description" class="materialize-textarea" name="description"></textarea>
												<label for="description">Description</label>
											</div>
											<div class="input-field col l6 m12 s12">
												<textarea id="operating_system" class="materialize-textarea" name="operating_system"></textarea>
												<label for="operating_system">Operating System</label>
											</div>
										</div>
										<div class="row">
											<div class="input-field col l6 m12 s12">
												<textarea id="display" class="materialize-textarea" name="display"></textarea>
												<label for="display">Display</label>
											</div>
											<div class="input-field col l6 m12 s12">
												<textarea id="memory_storage" class="materialize-textarea" name="memory_storage"></textarea>
												<label for="memory_storage">Memory Storage</label>
											</div>
										</div>
										<div class="row">
											<div class="input-field col l6 m12 s12">
												<textarea id="dimension_weight" class="materialize-textarea" name="dimension_weight"></textarea>
												<label for="dimension_weight">Dimension & weight</label>
											</div>
											<div class="input-field col l6 m12 s12">
												<textarea id="rear_camera" class="materialize-textarea" name="rear_camera"></textarea>
												<label for="rear_camera">Rear Camera</label>
											</div>
										</div>
										<div class="row">
											<div class="input-field col l6 m12 s12">
												<textarea id="front_camera" class="materialize-textarea" name="front_camera"></textarea>
												<label for="front_camera">Front Camera</label>
											</div>
											<div class="input-field col l6 m12 s12">
												<textarea id="processor" class="materialize-textarea" name="processor"></textarea>
												<label for="processor">Processors</label>
											</div>
										</div>
										<div class="row">
											<div class="input-field col l6 m12 s12">
												<textarea id="media" class="materialize-textarea" name="media"></textarea>
												<label for="media">Media</label>
											</div>
											<div class="input-field col l6 m12 s12">
												<textarea id="battery" class="materialize-textarea" name="battery"></textarea>
												<label for="battery">Battery</label>
											</div>
										</div>
										<div class="row">
											<div class="input-field col l6 m12 s12">
												<textarea id="wireless_location" class="materialize-textarea" name="wireless_location"></textarea>
												<label for="wireless_location">Wireless & Location</label>
											</div>
											<div class="input-field col l6 m12 s12">
												<textarea id="sensor" class="materialize-textarea" name="sensor"></textarea>
												<label for="sensor">Sensor</label>
											</div>
										</div>
										<div class="row">
											<div class="input-field col l6 m12 s12">
												<textarea id="port" class="materialize-textarea" name="port"></textarea>
												<label for="port">Ports</label>
											</div>
											<div class="input-field col l6 m12 s12">
												<textarea id="material" class="materialize-textarea" name="material"></textarea>
												<label for="material">Materials</label>
											</div>
										</div>
										<div class="row">
											<div class="input-field col l6 m12 s12">
												<textarea id="network" class="materialize-textarea" name="network"></textarea>
												<label for="network">Netwroks</label>
											</div>
										</div>
										<div class="row">
											<div class="file-field input-field col l6 m12 s12">
												<div class="btn">
													<span>File</span>
													<input type="file" name="front_image">
												</div>
												<div class="file-path-wrapper">
													<input class="file-path validate" type="text" placeholder="Upload Front Product Image">
												</div>
											</div>
											<div class="file-field input-field col l6 m12 s12">
												<div class="btn">
													<span>File</span>
													<input type="file" name="product_image1">
												</div>
												<div class="file-path-wrapper">
													<input class="file-path validate" type="text" placeholder="Upload Product Image" name="product_image1">
												</div>
											</div>
										</div>
										<div class="row">
											<div class="file-field input-field col l6 m12 s12">
												<div class="btn">
													<span>File</span>
													<input type="file" name="product_image2">
												</div>
												<div class="file-path-wrapper">
													<input class="file-path validate" type="text" placeholder="Upload Front Product Image">
												</div>
											</div>
											<div class="file-field input-field col l6 m12 s12">
												<div class="btn">
													<span>File</span>
													<input type="file" name="product_image3">
												</div>
												<div class="file-path-wrapper">
													<input class="file-path validate" type="text" placeholder="Upload Product Image" name="product_image3">
												</div>
											</div>
										</div>
										<div class="row center">
											<div class="col l12 s12 m12">
												<input class="btn-large" type="submit" name="submit" value="ADD ITEMS">
											</div>
										</div>

									</form>
								</div>
							</div>
						</li>
						<li>
							<div class="collapsible-header"><i class="material-icons">tablet_android</i>Tablet</div>
							<div class="collapsible-body">
								<div class="row">
									<h2 class="center">Add Tablet</h2>
									<form class="col s12" action="add_item_endpoint.php?id=2" method="POST" enctype="multipart/form-data">
										<div class="row">
											<div class="input-field col l3 m12 s12">
												<input  id="phone_name_tablet" type="text" class="validate" name="phone_name_tablet">
												<label for="phone_name_tablet">Tablet Name</label>
											</div>
										</div>
										<div class="row">
											<div class="input-field col l6 m12 s12">
												<textarea id="description_tablet" class="materialize-textarea" name="description_tablet"></textarea>
												<label for="description_tablet">Description</label>
											</div>
											<div class="input-field col l6 m12 s12">
												<textarea id="operating_system_tablet" class="materialize-textarea" name="operating_system_tablet"></textarea>
												<label for="operating_system_tablet">Operating System</label>
											</div>
										</div>
										<div class="row">
											<div class="input-field col l6 m12 s12">
												<textarea id="display_tablet" class="materialize-textarea" name="display_tablet"></textarea>
												<label for="display_tablet">Display</label>
											</div>
											<div class="input-field col l6 m12 s12">
												<textarea id="memory_storage_tablet" class="materialize-textarea" name="memory_storage_tablet"></textarea>
												<label for="memory_storage_tablet">Memory Storage</label>
											</div>
										</div>
										<div class="row">
											<div class="input-field col l6 m12 s12">
												<textarea id="dimension_weight_tablet" class="materialize-textarea" name="dimension_weight_tablet"></textarea>
												<label for="dimension_weight_tablet">Dimension & weight</label>
											</div>
											<div class="input-field col l6 m12 s12">
												<textarea id="rear_camera_tablet" class="materialize-textarea" name="rear_camera_tablet"></textarea>
												<label for="rear_camera_tablet">Rear Camera</label>
											</div>
										</div>
										<div class="row">
											<div class="input-field col l6 m12 s12">
												<textarea id="front_camera_tablet" class="materialize-textarea" name="front_camera_tablet"></textarea>
												<label for="front_camera_tablet">Front Camera</label>
											</div>
											<div class="input-field col l6 m12 s12">
												<textarea id="processor_tablet" class="materialize-textarea" name="processor_tablet"></textarea>
												<label for="processor_tablet">Processors</label>
											</div>
										</div>
										<div class="row">
											<div class="input-field col l6 m12 s12">
												<textarea id="media_tablet" class="materialize-textarea" name="media_tablet"></textarea>
												<label for="media_tablet">Media</label>
											</div>
											<div class="input-field col l6 m12 s12">
												<textarea id="battery_tablet" class="materialize-textarea" name="battery_tablet"></textarea>
												<label for="battery_tablet">Battery</label>
											</div>
										</div>
										<div class="row">
											<div class="input-field col l6 m12 s12">
												<textarea id="wireless_location_tablet" class="materialize-textarea" name="wireless_location_tablet"></textarea>
												<label for="wireless_location_tablet">Wireless & Location</label>
											</div>
											<div class="input-field col l6 m12 s12">
												<textarea id="sensor_tablet" class="materialize-textarea" name="sensor_tablet"></textarea>
												<label for="sensor_tablet">Sensor</label>
											</div>
										</div>
										<div class="row">
											<div class="input-field col l6 m12 s12">
												<textarea id="port_tablet" class="materialize-textarea" name="port_tablet"></textarea>
												<label for="port_tablet">Ports</label>
											</div>
											<div class="input-field col l6 m12 s12">
												<textarea id="material_tablet" class="materialize-textarea" name="material_tablet"></textarea>
												<label for="material_tablet">Materials</label>
											</div>
										</div>
										<div class="row">
											<div class="input-field col l6 m12 s12">
												<textarea id="network_tablet" class="materialize-textarea" name="network_tablet"></textarea>
												<label for="network_tablet">Netwroks</label>
											</div>
										</div>
										<div class="row">
											<div class="file-field input-field col l6 m12 s12">
												<div class="btn">
													<span>File</span>
													<input type="file" name="front_image_tablet">
												</div>
												<div class="file-path-wrapper">
													<input class="file-path validate" type="text" placeholder="Upload Front Product Image">
												</div>
											</div>
											<div class="file-field input-field col l6 m12 s12">
												<div class="btn">
													<span>File</span>
													<input type="file" name="product_image1_tablet">
												</div>
												<div class="file-path-wrapper">
													<input class="file-path validate" type="text" placeholder="Upload Product Image" name="product_image1">
												</div>
											</div>
										</div>
										<div class="row">
											<div class="file-field input-field col l6 m12 s12">
												<div class="btn">
													<span>File</span>
													<input type="file" name="product_image2_tablet">
												</div>
												<div class="file-path-wrapper">
													<input class="file-path validate" type="text" placeholder="Upload Front Product Image">
												</div>
											</div>
											<div class="file-field input-field col l6 m12 s12">
												<div class="btn">
													<span>File</span>
													<input type="file" name="product_image3_tablet">
												</div>
												<div class="file-path-wrapper">
													<input class="file-path validate" type="text" placeholder="Upload Product Image" name="product_image3">
												</div>
											</div>
										</div>
										<div class="row center">
											<div class="col l12 s12 m12">
												<input class="btn-large" type="submit" name="submit" value="ADD ITEMS">
											</div>
										</div>

									</form>
								</div>
							</div>
						</li>
						<li>
							<div class="collapsible-header"><i class="material-icons">watch</i>Watch</div>
							<div class="collapsible-body">
								<div class="row">
									<h2 class="center">Add Watch</h2>
									<form class="col s12" action="add_item_endpoint.php?id=3" method="POST" enctype="multipart/form-data">
										<div class="row">
											<div class="input-field col l3 m12 s12">
												<input  id="watch_name" type="text" class="validate" name="watch_name">
												<label for="watch_name">Watch Name</label>
											</div>
										</div>
										<div class="row">
											<div class="input-field col l6 m12 s12">
												<textarea id="description_watch" class="materialize-textarea" name="description_watch"></textarea>
												<label for="description_watch">Description</label>
											</div>
											<div class="input-field col l6 m12 s12">
												<textarea id="watch_price" class="materialize-textarea" name="watch_price"></textarea>
												<label for="price">price</label>
											</div>
										</div>
										<div class="row">
											<div class="file-field input-field col l6 m12 s12">
												<div class="btn">
													<span>File</span>
													<input type="file" name="product_image_watch">
												</div>
												<div class="file-path-wrapper">
													<input class="file-path validate" type="text" placeholder="Upload Front Product Image">
												</div>
											</div>
										</div>
										<div class="row center">
											<div class="col l12 s12 m12">
												<input class="btn-large" type="submit" name="submit" value="ADD ITEMS">
											</div>
										</div>
										</form>
									</div>
								</div>
							</li>
							<li>
								<div class="collapsible-header"><i class="material-icons">tv</i>TV</div>
								<div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
							</li>
						</ul>
					</div>
					<div id="edit" class="col s12">
						<div class="row">
							<div class="input-field col l3">
								<select id="categories">
									<option value="select" selected disabled="">Select Category</option>
									<?php
									$sql = "SELECT * FROM category";
									$result = mysqli_query($conn, $sql);
									while($rows = mysqli_fetch_assoc($result)) {
										?>
										<option value="<?php echo $rows['id'] ?>"><?php echo $rows['category_name'] ?></option>
										<?php } ?>
									</select>

									<label>Choose Products</label>
								</div>
							</div>
							<div class="row grey lighten-4" id="product-body">

							</div>
						</div>
						<div id="delete" class="col s12 ">
							<div class="row">
							<div class="input-field col l3">
								<select id="categories">
									<option value="select" selected disabled="">Select Category</option>
									<?php
									$sql = "SELECT * FROM category";
									$result = mysqli_query($conn, $sql);
									while($rows = mysqli_fetch_assoc($result)) {
										?>
										<option value="<?php echo $rows['id'] ?>"><?php echo $rows['category_name'] ?></option>
										<?php } ?>
									</select>

									<label>Choose Products</label>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<?php } ?>

			<?php
			require "template.php";
			?>	