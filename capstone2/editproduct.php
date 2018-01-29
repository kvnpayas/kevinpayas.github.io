
<?php function display_content(){
	require 'connection.php'; 
	$id = $_GET['index'];
	?>
	<div class="contianer">
		<div class="row">
			<div class="col l12 m12 s12">
				<div class="carousel carouselImage" id="carouselProd">
					<?php 
					$sql1 = "SELECT * FROM product_image WHERE product_id = '$id' AND category_id = 1";
					$result1 = mysqli_query($conn,$sql1);
					while($image = mysqli_fetch_assoc($result1)) {
						?>
						<div class="carousel-item carouselItem" ><img src="<?php echo $image['image'] ?>" class="responsive-img" id="imgCarousel">
						</div>
						<?php } ?>
					</div>
				</div>
			</div>
			<?php 
			$sql = "SELECT * FROM phone_tablet WHERE id = '$id'";
			$result = mysqli_query($conn,$sql) or die(mysqli_error($conn));
			while($item = mysqli_fetch_assoc($result)) { ?>
				<div class="row grey lighten-4">
					<h3 class="center z-depth-3 green lighten-1 white-text">Edit Items</h3>
					<form class="col s12" action="update_item_endpoint.php?index=<?php echo $id ?>" method="POST">
						<div class="row">
							<div class="input-field col l3 m12 s12">
								<input  id="phone_name" type="text" class="validate" name="phone_name" value="<?php echo $item['name'] ?>">
								<label for="phone_name">Phone Name</label>
							</div>
						</div>
						<div class="row">
							<div class="input-field col l6 m12 s12">
								<textarea id="description" class="materialize-textarea" name="description"><?php echo $item['description'] ?></textarea>
								<label for="description">Description</label>
							</div>
							<div class="input-field col l6 m12 s12">
								<textarea id="operating_system" class="materialize-textarea" name="operating_system"><?php echo $item['operating_system'] ?></textarea>
								<label for="operating_system">Operating System</label>
							</div>
						</div>
						<div class="row">
							<div class="input-field col l6 m12 s12">
								<textarea id="display" class="materialize-textarea" name="display"><?php echo $item['display'] ?></textarea>
								<label for="display">Display</label>
							</div>
							<div class="input-field col l6 m12 s12">
								<textarea id="memory_storage" class="materialize-textarea" name="memory_storage"><?php echo $item['memory_storage'] ?></textarea>
								<label for="memory_storage">Memory Storage</label>
							</div>
						</div>
						<div class="row">
							<div class="input-field col l6 m12 s12">
								<textarea id="dimension_weight" class="materialize-textarea" name="dimension_weight"><?php echo $item['dimension_weight'] ?></textarea>
								<label for="dimension_weight">Dimension & weight</label>
							</div>
							<div class="input-field col l6 m12 s12">
								<textarea id="rear_camera" class="materialize-textarea" name="rear_camera"><?php echo $item['rear_camera'] ?></textarea>
								<label for="rear_camera">Rear Camera</label>
							</div>
						</div>
						<div class="row">
							<div class="input-field col l6 m12 s12">
								<textarea id="front_camera" class="materialize-textarea" name="front_camera"><?php echo $item['front_camera'] ?></textarea>
								<label for="front_camera">Front Camera</label>
							</div>
							<div class="input-field col l6 m12 s12">
								<textarea id="processor" class="materialize-textarea" name="processor"><?php echo $item['processor'] ?></textarea>
								<label for="processor">Processors</label>
							</div>
						</div>
						<div class="row">
							<div class="input-field col l6 m12 s12">
								<textarea id="media" class="materialize-textarea" name="media"><?php echo $item['media'] ?></textarea>
								<label for="media">Media</label>
							</div>
							<div class="input-field col l6 m12 s12">
								<textarea id="battery" class="materialize-textarea" name="battery"><?php echo $item['battery'] ?></textarea>
								<label for="battery">Battery</label>
							</div>
						</div>
						<div class="row">
							<div class="input-field col l6 m12 s12">
								<textarea id="wireless_location" class="materialize-textarea" name="wireless_location"><?php echo $item['wireless_location'] ?></textarea>
								<label for="wireless_location">Wireless & Location</label>
							</div>
							<div class="input-field col l6 m12 s12">
								<textarea id="sensor" class="materialize-textarea" name="sensor"><?php echo $item['sensor'] ?></textarea>
								<label for="sensor">Sensor</label>
							</div>
						</div>
						<div class="row">
							<div class="input-field col l6 m12 s12">
								<textarea id="port" class="materialize-textarea" name="port"><?php echo $item['port'] ?></textarea>
								<label for="port">Ports</label>
							</div>
							<div class="input-field col l6 m12 s12">
								<textarea id="material" class="materialize-textarea" name="material"><?php echo $item['material'] ?></textarea>
								<label for="material">Materials</label>
							</div>
						</div>
						<div class="row">
							<div class="input-field col l6 m12 s12">
								<textarea id="network" class="materialize-textarea" name="network"><?php echo $item['network'] ?></textarea>
								<label for="network">Netwroks</label>
							</div>
						</div>
						<div class="row center">
							<div class="col l12 s12 m12">
								<input class="btn-large" type="submit" name="submit" value="UPDATE">
							</div>
						</div>

					</form>
				</div>
				<?php } ?>
			</div>
		</div>
		<?php } ?>

		<?php
		require "template.php";
		?>	