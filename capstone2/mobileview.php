
<?php function display_content(){
	require 'connection.php';

	$id = $_GET['index'];
	$x = $_GET['id'];
	?>
	<?php 
	$sql = "SELECT * FROM phone_tablet WHERE id = '$id'";
	$result = mysqli_query($conn,$sql);
	while($item = mysqli_fetch_assoc($result)) {
		?>
		<div class="row">
			<div class="col l6 s12 m12 white ligthen-1 card-panel">
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
				<div class="col l6 m12 s12 grey lighten-4" id="infoCont">
					<h2 class="center"><?php echo $item['name']?></h2>
					<p class="center"><?php echo $item['description']?></p>
					<div class="divider"></div>	
				<?php
				if(isset($_SESSION['role']) && $_SESSION['role']=='admin'){
					?>
					
					<div class="col l12 m12 s12 center viewWearCont">
						<a href="editproduct.php?index=<?php echo $item['id'] ?>" class="btn blue white-text"><i class="large material-icons left white-text">edit</i>Edit</a>
						<a href="#" class="btn red white-text"><i class="large material-icons left white-text">delete</i>Delete</a>
					</div>
			<?php		
				}else{
			?>	
				<div class="col l12 m12 s12 center viewWearCont">
						<a href="add_to_cart.php?index=<?php echo $item['id'] ?>&&cat=<?php echo $item['category_id'] ?>&&id=<?php echo $x ?>" class="btn green white-text"><i class="large material-icons left white-text">add_shopping_cart</i>GET YOURS</a>
					</div>
			<?php } ?>
				</div>
			</div>
			
			<div class="row">
				<div class="col l12 m12 s12">
					<h3 class="center z-depth-3 green lighten-1 white-text">Features and Specs</h3>
				</div>
				<div class="col l12 m12 s12">
					<ul class="collapsible" data-collapsible="accordion">
						<li>
							<div class="collapsible-header">
							<h5 class="green-text text-ligthen-1">Operating System</h5>
							</div>
							<div class="collapsible-body grey lighten-4">
								<ul class="listBullet">
									<?php echo $item['operating_system']; ?>
								</ul>
							</div>
						</li>
						<li>
							<div class="collapsible-header">
								<h5 class="green-text text-ligthen-1">
									Display
								</h5>
							</div>
							<div class="collapsible-body grey lighten-4">
								<ul class="listBullet">
									<?php echo $item['display']; ?>
								</ul>
							</div>
						</li>
						<li>
							<div class="collapsible-header">
								<h5 class="green-text text-ligthen-1">
									Memory & Storage
								</h5>
							</div>
							<div class="collapsible-body">
								<ul class="listBullet">
									<?php echo $item['memory_storage']; ?>
								</ul>
							</div>
						</li>
						<li>
							<div class="collapsible-header">
								<h5 class="green-text text-ligthen-1">
									Dimensions & weight
								</h5>
							</div>
							<div class="collapsible-body">
								<ul class="listBullet">
									<?php echo $item['dimension_weight']; ?>
								</ul>
							</div>
						</li>
						<li>
							<div class="collapsible-header">
								<h5 class="green-text text-ligthen-1">
									Rear Camera
								</h5>
							</div>
							<div class="collapsible-body">
								<ul class="listBullet">
									<?php echo $item['rear_camera']; ?>
								</ul>
							</div>
						</li>
						<li>
							<div class="collapsible-header">
								<h5 class="green-text text-ligthen-1">
									Front Camera
								</h5>
							</div>
							<div class="collapsible-body">
								<ul class="listBullet">
									<?php echo $item['front_camera']; ?>
								</ul>
							</div>
						</li>
						<li>
							<div class="collapsible-header">
								<h5 class="green-text text-ligthen-1">
									Processors
								</h5>
							</div>
							<div class="collapsible-body">
								<ul class="listBullet">
									<?php echo $item['processor']; ?>
								</ul>
							</div>
						</li>
						<li>
							<div class="collapsible-header">
								<h5 class="green-text text-ligthen-1">
									Media
								</h5>
							</div>
							<div class="collapsible-body">
								<ul class="listBullet">
									<?php echo $item['media']; ?>
								</ul>
							</div>
						</li>
						<li>
							<div class="collapsible-header">
								<h5 class="green-text text-ligthen-1">
									Battery
								</h5>
							</div>
							<div class="collapsible-body">
								<ul class="listBullet">
									<?php echo $item['battery']; ?>
								</ul>
							</div>
						</li>
						<li>
							<div class="collapsible-header">
								<h5 class="green-text text-ligthen-1">
									Wireless & Location
								</h5>
							</div>
							<div class="collapsible-body">
								<ul class="listBullet">
									<?php echo $item['wireless_location']; ?>
								</ul>
							</div>
						</li>
						<li>
							<div class="collapsible-header">
								<h5 class="green-text text-ligthen-1">
									Sensors
								</h5>
							</div>
							<div class="collapsible-body">
								<ul class="listBullet">
									<?php echo $item['sensor']; ?>
								</ul>
							</div>
						</li>
						<li>
							<div class="collapsible-header">
								<h5 class="green-text text-ligthen-1">
									Ports
								</h5>
							</div>
							<div class="collapsible-body">
								<ul class="listBullet">
									<?php echo $item['port']; ?>
								</ul>
							</div>
						</li>
						<li>
							<div class="collapsible-header">
								<h5 class="green-text text-ligthen-1">
									Materials
								</h5>
							</div>
							<div class="collapsible-body">
								<ul class="listBullet">
									<?php echo $item['material']; ?>
								</ul>
							</div>
						</li>
						<li>
							<div class="collapsible-header">
								<h5 class="green-text text-ligthen-1">
									Networks
								</h5>
							</div>
							<div class="collapsible-body">
								<ul class="listBullet">
									<?php echo $item['network']; ?>
								</ul>
							</div>
						</li>
					</ul>
				</div>
			</div>

			<div class="row grey lighten-4">
				<div class="col l12 m12 s12" id="colBottom">
					<h3 class="center z-depth-3 green lighten-1 white-text">Browse other Devices</h3>
					<div class="carousel" id="carouselProd2">
						<?php 
							$sql2 = "SELECT phone_tablet.id,phone_tablet.name, product_image.image FROM product_image JOIN phone_tablet ON(product_image.product_id = phone_tablet.id) WHERE icon_image = 1 AND product_id != '$id' AND product_image.category_id = 1";
							$result2 = mysqli_query($conn,$sql2);
							while($image1 = mysqli_fetch_assoc($result2)) {
						?>
						<div class="carousel-item carouselBottom">
						<a href="mobileview.php?index=<?php echo $image1['id'] ?>"><img src="<?php echo $image1['image'] ?>" class="responsive-img" id="imageBottom">
						
						<p class="center green-text"><?php echo $image1['name'] ?></p></a>	
						</div>
						<?php } ?>
					</div>
				</div>
			</div>

			<?php } ?>

			<?php } 
			require "template.php";
			?>