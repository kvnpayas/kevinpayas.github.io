<?php function title(){
	echo "Edit Wear Page";
}
?>
<?php function display_content(){
	require 'connection.php'; 
	$id = $_GET['index'];
	?>
	<div class="contianer">
		<div class="row">
			<div class="col l12 m12 s12">
				<div class="row viewWearCont center grey lighten-4">
					<?php 
					$sql1 = "SELECT * FROM product_image WHERE product_id = '$id' AND category_id = 3 AND icon_image = 1";
					$result1 = mysqli_query($conn,$sql1);
					while($image = mysqli_fetch_assoc($result1)) {
						?>
						<p><div class="col l12 m12 s12"><img src="<?php echo $image['image'] ?>" class="responsive-img imgViewWear">
						</div></p>
						<?php } ?>
					</div>
				</div>
			</div>
			<?php 
			$sql = "SELECT * FROM wears WHERE id = '$id'";
			$result = mysqli_query($conn,$sql) or die(mysqli_error($conn));
			while($item = mysqli_fetch_assoc($result)) { ?>
				<div class="row grey lighten-4">
					<h3 class="center z-depth-3 green lighten-1 white-text">Edit Items</h3>
					<form class="col s12" action="update_item_endpoint.php?index=<?php echo $id ?>&&category=<?php echo  $item['category_id'] ?>" method="POST">
						<div class="row">
							<div class="input-field col l3 m12 s12">
								<input  id="watch_name" type="text" class="validate" name="watch_name" value="<?php echo $item['name'] ?>">
								<label for="watch_name">Watch Name</label>
							</div>
						</div>
						<div class="row">
							<div class="input-field col l6 m12 s12">
								<textarea id="watch_description" class="materialize-textarea" name="watch_description"><?php echo $item['description'] ?></textarea>
								<label for="watch_description">Description</label>
							</div>
							<div class="input-field col l6 m12 s12">
								<textarea id="watch_price" class="materialize-textarea" name="watch_price"><?php echo $item['price'] ?></textarea>
								<label for="watch_price">Price</label>
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