<?php function title(){
	echo "Delete Product Page";
}
?>
<?php function display_content(){
	require 'connection.php'; 
	$id = $_GET['index'];
	$cat = $_GET['cat']
	?>
	<div class="contianer">
		<div class="row grey lighten-4">
			<div class="col l6 m12 s12">
				<div class="row viewWearCont center grey lighten-4">
					<?php 
					if ($cat == '1') {
					
						$sql1 = "SELECT * FROM product_image WHERE product_id = '$id' AND category_id = '$cat' AND icon_image = 1";
						$result1 = mysqli_query($conn,$sql1);
						while($image = mysqli_fetch_assoc($result1)) {
							?>
							<p><div class="col l12 m12 s12 "><img src="<?php echo $image['image'] ?>" class="responsive-img imgView">
							</div></p>
						<?php } ?>
					<?php } ?>
					<?php 
					if ($cat == '3') {
					
						$sql1 = "SELECT * FROM product_image WHERE product_id = '$id' AND category_id = '$cat' AND icon_image = 1";
						$result1 = mysqli_query($conn,$sql1);
						while($image = mysqli_fetch_assoc($result1)) {
							?>
							<p><div class="col l12 m12 s12 "><img src="<?php echo $image['image'] ?>" class="responsive-img imgViewWear">
							</div></p>
						<?php } ?>
					<?php } ?>

				</div>
			</div>
			<div class="col l6 m12 s12 ">
				<?php if ($cat == '1'){
					$sql = "SELECT * FROM phone_tablet WHERE id = '$id'";
					$result = mysqli_query($conn,$sql) or die(mysqli_error($conn));
					$item = mysqli_fetch_assoc($result);
				 ?>
				 <div class="viewWearCont center">
				 	<h1 ><?php echo $item['name'] ?></h1>
				 	<p><?php echo $item['description'] ?></p>
				 	<div class="divider"></div>
				 </div>
				 <div class="viewWearCont center">
				 	<p>Are you sure you want to delete this item?</p>
					<a href="delete_endpoint.php?index=<?php echo $id ?>&&cat=<?php echo $cat ?>" class="btn red white-text">Delete</a>
					<a href="admin_item_page.php#delete" class="btn blue white-text">Cancel</a>
				</div>	
				<?php } ?>
				<?php if ($cat == '3'){
					$sql = "SELECT * FROM wears WHERE id = '$id'";
					$result = mysqli_query($conn,$sql) or die(mysqli_error($conn));
					$item = mysqli_fetch_assoc($result);
				 ?>
				 <div class="viewWearCont center">
				 	<h1 ><?php echo $item['name'] ?></h1>
				 	<p><?php echo $item['description'] ?></p>
				 	<div class="divider"></div>
				 </div>
				 <div class="viewWearCont center">
				 	<p>Are you sure you want to delete this item?</p>
					<a href="delete_endpoint.php?index=<?php echo $id ?>&&cat=<?php echo $cat ?>" class="btn red white-text">Delete</a>
					<a href="admin_item_page.php#delete" class="btn blue white-text">Cancel</a>
				</div>	
				<?php } ?>
			</div>
		</div>
			
	</div>
		<?php } ?>

		<?php
		require "template.php";
		?>	