<?php function display_content(){
	require 'connection.php';

	$id = $_GET['index'];
	?>
	<?php 
	$sql = "SELECT * FROM wears WHERE id = '$id'";
	$result = mysqli_query($conn,$sql);
	while($item = mysqli_fetch_assoc($result)) {
		?>
		<div class="row">
			<div class="col l6 s12 m12 grey lighten-4 z-depth-1	 center">
				<div class="row viewWearCont">
					<?php 
					$sql1 = "SELECT * FROM product_image WHERE product_id = '$id' AND category_id = 3";
					$result1 = mysqli_query($conn,$sql1);
					while($image = mysqli_fetch_assoc($result1)) {
						?>
						<p><div class="col l12 m12 s12" ><img src="<?php echo $image['image'] ?>" class="responsive-img imgViewWear">
						</div></p>
						<?php } ?>
					</div>
				</div>
				<div class="col l6 m12 s12 white lighten-4" id="infoCont">
					<h2 class="center"><?php echo $item['name']?></h2>
					<p class="center"><?php echo $item['description']?></p>
				<div class="divider"></div>	
				<?php
				if(isset($_SESSION['role']) && $_SESSION['role']=='admin'){
					?>
					
					<div class="col l12 m12 s12 center viewWearCont">
						<a href="editproduct_wear.php?index=<?php echo $item['id'] ?>" class="btn blue white-text"><i class="large material-icons left white-text">edit</i>Edit</a>
						<a href="#" class="btn red white-text"><i class="large material-icons left white-text">delete</i>Delete</a>
					</div>
			<?php		
				} else {
			?>	
					<div class="col l12 m12 s12 center viewWearCont">
						<a href="#" class="btn green white-text"><i class="large material-icons left white-text">add_shopping_cart</i>GET YOURS</a>
					</div>
			<?php } ?>
				</div>
			</div>

			<div class="row grey lighten-4">
				<div class="col l12 m12 s12"	>
					<h3 class="center z-depth-3 green lighten-1 white-text">Browse other Devices</h3>
					<div class="carousel carouselWear" id="carouselWears">
						<?php 
							$sql2 = "SELECT wears.id,wears.name, product_image.image FROM product_image JOIN wears ON(product_image.product_id = wears.id) WHERE icon_image = 1 AND product_id != '$id' AND product_image.category_id = 3";
							$result2 = mysqli_query($conn,$sql2);
							while($image1 = mysqli_fetch_assoc($result2)) {
						?>
						<div class="carousel-item carousel-itemWear center">
						<a href="wearview.php?index=<?php echo $image1['id'] ?>"><img src="<?php echo $image1['image'] ?>" class="responsive-img iconImgWear">
						
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